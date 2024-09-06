<?php
   require"connect.php";
?>

<?php
  $search = "";
  $limit = 2;
  $page = 1;
  if(isset($_REQUEST['p']) && (int)$_REQUEST['p'] >= 1) {
    $page = (int) $_REQUEST['p'];
  }
  if(isset($_GET['txtsearch'])){
    $search = $_GET['txtsearch'];
  }

  $offset = ($page - 1) * $limit;
  $sql = "SELECT * FROM accounts WHERE username LIKE '%$search%'";
  $query = mysqli_query($conn ,$sql . " LIMIT $offset, $limit");
  $count = mysqli_num_rows(mysqli_query($conn ,$sql));
  $totalPage = ceil($count/$limit) ?? 0;
?>

<div class="container">
<h2>Danh sách người dùng</h2>
<form  action="" method="GET">
  <input type="text" name="txtsearch"/>
  <input type="submit" value="Search"/>
</form>
<table  cellspacing="0" cellpadding="0" class="form">
  <thead>
    <tr>
       <td>ID</td>
       <td>Tên tài khoản</td>
       <td>Mật khẩu</td>
       <td>Email</td>
       <td>Tên đầy đủ</td>
       <td>Số điện thoại</td>
       <td>Giới tính</td>
       <td>Ngày sinh</td>
       <td>Quyền</td>
	     <td>Ngày tạo</td>
	     <td>Ngày cập nhật</td>
	     <td>Trạng thái</td>
       <td><a href="add.php">Thêm</a></td>
    </tr>
  <thead>
<?php while($row=mysqli_fetch_array($query)): ?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['username']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['fullname']; ?></td>
  <td><?php echo $row['password']; ?></td>
  <td><?php echo $row['phone']; ?></td>
  <td><?php echo $row['gender']; ?></td>
  <td><?php echo $row['birthday']; ?></td>
  <td><?php echo $row['role']; ?></td>
  <td><?php echo $row['created_at']; ?></td>
  <td><?php echo $row['updated_at']; ?></td>
  <td><?php echo $row['status']; ?></td>
  <td><a href="edit_user.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
  <td><a href="delete_user.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
</tr>
<?php endwhile;?>
</table>

  <?php 
  for ($i=1; $i <= $totalPage; $i++)
    if($i == $page) {
      echo "<a href = 'view_user.php?p=$i' style='font-size: 20px; color: red;'> $i </a>";
    } elseif($i==1){
      if($i!=$page)echo "<a href = 'view_user.php?p=$i'> $i </a>...";
      else echo "...<span style='font-size: 20px; color: red;'> $i</span>";
    }elseif($i==$totalPage){
      if($i!=$page)echo "...<a href = 'view_user.php?p=$i'> $i </a>";
      else echo "...<span style='font-size: 20px; color: red;'> $i</span>";
    }
  ?>
  

<style>
.container {
  max-width: 1500px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

.controls{
	margin-bottom: 10px;
    text-align: right;

}

.button{
	text-decoration: none;
	color: #222;
	border-radius: 4px;
	text-align: center;
	margin: 0 0.3em 0.3em 0;
	padding: 5px;
}

table{
  border: 1px solid #222;
}

table.form{
    width: 100%;
}

table.form td{
    border: solid 1px #ddd;
    padding: 5px 10px;
}

table tr td a{
  text-decoration: none;
  font-size: 16px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}
</style>
