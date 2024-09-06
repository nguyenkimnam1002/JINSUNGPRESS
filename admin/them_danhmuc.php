
<?php
require('./../connect.php'); ?>

<?php
    $errors = [];
    if(isset($_POST['add'])){
        $name = $_POST["name"];
        $slug = $_POST['slug'];
        $status = $_POST['status'];

        if($name == "") {
            $errors[] =  "Vui lòng nhập tên danh mục!";
        }

        if($slug == "") {
            $errors[] =  "Vui lòng thêm slug!";
        }
       
        if(count($errors) == 0 ){
            $sql ="INSERT INTO categories(name, slug, status) VALUES('$name','$slug', '$status')";
            $query=mysqli_query($conn, $sql);
            header("location: ds_danhmuc.php");
        }
    }
?>

<div class="advertisement_form">
<form method="POST" action="" class="form">
    
    <h2>Thêm Danh Mục</h2>
    <ul style="background-color: white;">
        <?php foreach ($errors as $error) :?>
            <li style="color: red;background-color: white;"><?php echo $error; ?></li>
        <?php endforeach;?>
    </ul>
    <label>Tên danh muc</label><input type="text" name="name" /><br /><br />
    <label>Slug</label><input type="text" name="slug" /><br /><br />
    <label>Trạng thái</label> <select name="status"class="status">
             <option value="ACTIVE">ACTIVE</option>
             <option value="INACTIVE">INACTIVE</option>
           </select><br/><br/>
    <div class="funtion">
        <ul>
           <li><input type="submit" name="add" value="Thêm" class="add" /></li>
        </ul>   
    </div>
</form>
</div>  

<?php require('layouts/footer.php'); ?>

<style>
 
.advertisement_form{
    justify-content: center;
    margin-top: 10px;
    margin-bottom: 20px;
    margin-left: 250px;
}

.form h2{
    background-color: white;
 }

.form {
 width: 900px;
 padding: 20px 20px 5px 20px;
 margin: 0 auto;
 font-weight: 700px;
 background-color: white;

}

.form label{
    background-color: white;
}

.form input {
 width:  100%;
 height: 35px;
 padding: 10px 0;
 margin: 10px 0;
 border-radius: 5px;
 background-color: white;
}

.funtion{
    background-color: white;
    margin-left: 150px;
}

.funtion ul{
    display: flex;
    list-style: none;
    background-color: white;
}

.funtion ul li{
    margin: 0 60px;
    background-color: white;
    
}

.funtion input{
    width: 300px;
    background-color: #003333;
    color: #fff;
    border: 1px solid #fff;
}

.status{
margin: 7px 5px;
width: 100px;
height: 30px;
border-radius: 5px;
background-color: white; 
}

</style>
