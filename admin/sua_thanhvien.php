<?php
require('layouts/header.php'); ?>
<?php
require('./../connect.php'); ?>

<?php
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `accounts` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<div class="fix_form">
<form method="POST" class="form">
<h2>Sửa thành viên</h2>
<label>Đăng nhập: <input type="text" value="<?php echo $row['username']; ?>" name="username"></label><br/>
<label>Mật khẩu: <input type="text" value="<?php echo $row['password']; ?>" name="password"></label><br/>
<label>Email: <input type="text" value="<?php echo $row['email']; ?>" name="email"></label><br/>
<label>Tên đầy đủ: <input type="text" value="<?php echo $row['fullname']; ?>" name="fullname"></label><br/>
<label>Số điện thoại: <input type="number" value="<?php echo $row['phone']; ?>" name="phone"></label><br/>
<label>Ngày sinh: <input type="date" value="<?php echo $row['birthday']; ?>" name="birthday"></label><br/>
<label>Giới tính:<select name="gender" class="gender" value="<?php echo $row['gender']; ?>" name="gender" >
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
            <option value="Khác">Khác</option>
           </select></br>
<label>Quyền:<select name="role" class="role" value="<?php echo $row['role']; ?>" name="role">
            <option value="Admin">Admin</option>
            <option value="Member">Member</option>
         </select></br>
<label>Trạng thái:<select name="status" class="status" value="<?php echo $row['status']; ?>" name="status">
            <option value="ACTIVE">ACTIVE</option>
            <option value="INACTIVE">INACTIVE</option>
         </select></br>           
<input type="submit" value="Update" name="update_user" class="update_user">
<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$phone=$_POST['phone'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$role=$_POST['role'];
$status=$_POST['status'];


// Create connection
$conn = new mysqli("localhost", "root", "", "webtintuc");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `accounts` SET username='$username', password='$password', email='$email', fullname='$fullname', phone='$phone', birthday='$birthday', gender='$gender', role='$role', status='$status' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
echo "Cập nhật thành công";
} else {
echo "Cập nhật thất bại: " . $conn->error;
}

$conn->close();
}
?>
</form>
</div>
</body>
</html>

<?php require('layouts/footer.php'); ?>

<style>


.form h2{
    background-color: white;
 }

.fix_form{
    justify-content: center;
    padding-top: 15px;
    padding-bottom: 20px;
    margin-left: 250px;
}

.form {
 width: 350px;
 border: 1px solid #007bff;
 padding: 20px;
 margin: 0 auto;
 font-weight: 700px;
 background-color: white;
 margin-top: 0%;
}

.form label{
    background-color: white;
}

label input {
 width: 300px;
 height: 35px;
 padding: 10px 0;
 margin: 10px 0;
 border-radius: 5px;
 background-color: white;
}

.role{
margin: 7px 32px;
width: 100px;
height: 30px;
border-radius: 5px;
background-color: white;

}

.role option{
background-color: white;    
}

.gender{
margin: 7px 15px;
width: 100px;
height: 30px;
border-radius: 5px;
background-color: white;

}

.status{
margin: 7px 5px;
width: 100px;
height: 30px;
border-radius: 5px;
background-color: white; 
}

.status option{
    background-color: white;
}

.gender option{
background-color: white;
}

.update_user{
 height: 35px;
 padding: 10px 0;
 margin-top: 35px;
 border-radius: 5px;
 width: 150px;
 background-color: #007bff;
 color: #fff;
 border: 1px solid #fff;
 margin-left: 75px;
}

</style>
