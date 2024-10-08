<?php
require('./../connect.php'); 
include_once('./../master_layout/Function.php') ;
?>
<?php
    $id = $_GET['id'];


    // $sql_post = "SELECT * FROM posts";
    $sql_category= "SELECT * FROM categories WHERE id <> (select c.id from posts p, categories c where p.category_id = c.id and p.id = $id)";
    $sql_post = "SELECT * FROM posts";

    // get categories của post 
    $sql_idcategory = "SELECT c.* FROM posts p, categories c where p.category_id = c.id and p.id = $id";

    $sql_up = "SELECT * FROM posts WHERE id = $id";
    $sql_account = "SELECT * FROM accounts";

    
    $query_account = mysqli_query($conn, $sql_account);
    $query_up = mysqli_query($conn, $sql_up);
    $query_idcategory = mysqli_query($conn, $sql_idcategory);
    $row_up = mysqli_fetch_assoc($query_up);
    if(!$row_up){
        header("Location: ../ds_tintuc.php");
    }

    $query_category = mysqli_query($conn, $sql_category);
    if(isset($_POST['sbm'])){

        $title = $_POST['title'];
        $slug = $_POST['slug'];
        
        $image = $_FILES["fileToUpload"]["name"];
        // $image_tmp = $_FILES['image']['tmp_name'];

        $target_dir = "./../image/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        // Kiểm tra nếu tệp đã được tải lên thành công
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Tệp " . basename($_FILES["fileToUpload"]["name"]) . " đã được tải lên thành công.";
        } else {
            echo "Có lỗi xảy ra khi tải lên tệp.";
        }

        
        $content = $_POST['content'];
        
        $category_id = $_POST['category_id'];

        $status = $_POST['status'];

        $account = $_POST['accounts_id'];
        $accounts_id = (int)$account;

        $sql = "UPDATE posts SET title ='$title',slug= '$slug', image = '$image', content = '$content', category_id= $category_id,status= '$status',  accounts_id= $accounts_id where id = $id";
        
        $query = mysqli_query($conn, $sql);
       
        header("Location: ../admin/ds_tintuc.php");
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

</head>
<body>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Sửa bài viết</h2>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">Tiêu đề</label>
                        <input type="text" name="title" class="form-control" require value="<?php echo $row_up['title'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control" require value="<?php echo $row_up['slug'] ?>">
                    </div>
    
                    <div class="form-group">
                        <label for="">Ảnh bài viết</label>
                        <input type="file" name="fileToUpload" class="form-control">
                    </div>
                    <!-- <form action="" method="post" enctype="multipart/form-data">
                        Ảnh bài viết:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </form> -->
    
                    <div class="form-group">
                        <label for="">Nội dung</label>
                        <textarea name="content" class="form-control form-control-size" id="content" value="" require><?php echo $row_up['content'] ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Thể loại</label>
                        <select name="category_id" id="category_id">
                            <?php while ($row1 = mysqli_fetch_assoc($query_idcategory)):?>
                                <option value=<?php echo $row1['id'];?>> <?php echo $row1['name'];?></option>
                            <?php endwhile;?>
                            <?php while ($row = mysqli_fetch_assoc($query_category)):?>
                                <option value=<?php echo $row['id'];?> <?php if($row['id'] == $row_up['category_id']) echo 'checked';?>> <?php echo $row['name'];?></option>
                            <?php endwhile;?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="radio" name="status" value="PUBLIC" <?php if($row_up['status'] == 'PUBLIC') echo 'checked';?>>Public
                        <input type="radio" name="status" value="PRIVATE" <?php if($row_up['status'] == 'PRIVATE') echo 'checked';?>> Private
                    </div>
    
                    <div class="form-group">
                        <label for="">Người viết(*)</label>
                        <!-- <input type="text" name="accounts_id" class="form-control" require value="<?php echo $row_up['accounts_id'] ?>"> -->
                        
                        <select name="accounts_id" id="accounts_id" require>
                            <?php while ($row = mysqli_fetch_assoc($query_account)):?>
                                <option value=<?php echo $row['id'];?>> <?php echo $row['fullname'];?></option>
                            <?php endwhile;?>
                        </select>
                    </div>
                    
                    <button name= "sbm" class="btn btn-success">Sửa</button>
                </form>
            </div>
        </div>
    
    </div>
    <script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>