<?php
require('layouts/header.php'); ?>
<?php
require('./../connect.php'); ?>

<?php
    $errors = [];
    if(isset($_POST['add'])){
        $title = $_POST["title"];
        $image = $_POST['image'];
        $link = $_POST['link'];
        $status = $_POST['status'];

        if($title == "") {
            $errors[] =  "Vui lòng nhập tên quảng cáo!";
        }

        if($image == "") {
            $errors[] =  "Vui lòng thêm hình ảnh!";
        }
        
        if($link == "") {
            $errors[] =  "Vui lòng nhập đường link quảng cáo";
        }
       
        if(count($errors) == 0 ){
            $sql ="INSERT INTO advertisements(title, image, link, status) VALUES('$title','$image', '$link', '$status')";
            $query=mysqli_query($conn, $sql);
            header("location: ds_quangcao.php");
        }
    }
?>

<div class="advertisement_form">
<form method="POST" action="" class="form">
    
    <h2>Thêm Quảng Cáo</h2>
    <ul style="background-color: white;">
        <?php foreach ($errors as $error) :?>
            <li style="color: red;background-color: white;"><?php echo $error; ?></li>
        <?php endforeach;?>
    </ul>
    <label>Tên quảng cáo</label><input type="text" name="title" /><br /><br />
    <label>Link hình ảnh</label><input type="text" name="image" /><br /><br />
    <label>Link quảng cáo</label><input type="text" name="link" /><br /><br />
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
