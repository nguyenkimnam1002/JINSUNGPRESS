<?php
require('layouts/header.php'); ?>
<?php
require('./../connect.php'); ?>

<?php
$search = "";
$limit = 5;
$page = 1;
if (isset($_REQUEST['p']) && (int)$_REQUEST['p'] >= 1) {
  $page = (int) $_REQUEST['p'];
}
if (isset($_GET['txtsearch'])) {
  $search = $_GET['txtsearch'];
}

$offset = ($page - 1) * $limit;
$sql = "SELECT * FROM accounts WHERE username LIKE '%$search%'";
$query = mysqli_query($conn, $sql . " LIMIT $offset, $limit");
$count = mysqli_num_rows(mysqli_query($conn, $sql));
$totalPage = ceil($count / $limit) ?? 0;
?>

<div class="content-wrapper" style="min-height: 365px;">

  <section class="content">
    <div class="container-fluid">
      <h2>Danh sách người dùng</h2></br>
      <form action="" method="GET" class='searchform'>
        <input type="text" name="txtsearch" class='form'/>
        <button class='sbutton' type="submit">Search</button>
      </form></br>
      <div class="row">
        <div class="table-responsive">
          <table cellspacing="0" cellpadding="0" class="table" style="display: block !important; overflow-x: auto !important; width: 100% !important;">
            <thead>
              <tr>
                <th scope="row">ID</th>
                <th scope="row">Tên tài khoản</th>
                <th scope="row">Mật khẩu</th>
                <th scope="row">Email</th>
                <th scope="row">Tên đầy đủ</th>
                <th scope="row">Số điện thoại</th>
                <th scope="row">Giới tính</th>
                <th scope="row">Ngày sinh</th>
                <th scope="row">Quyền</th>
                <th scope="row">Ngày tạo</th>
                <th scope="row">Ngày cập nhật</th>
                <th scope="row">Trạng thái</th>
                <th scope="row" colspan="2"><a href="them_thanhvien.php">Thêm</a></th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_array($query)) : ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['password']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['fullname']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  <td><?php echo $row['birthday']; ?></td>
                  <td><?php echo $row['role']; ?></td>
                  <td><?php echo $row['created_at']; ?></td>
                  <td><?php echo $row['updated_at']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  <td><a href="sua_thanhvien.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
                  <td><a href="xoa_thanhvien.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>

         
          <?php 
           for ($i=1; $i <= $totalPage; $i++)
           if($i == $page) {
            echo "<a href = 'ds_thanhvien.php?p=$i' style='font-size: 20px; color: red; margin: 0px 4px;'> $i </a>";
           } else{
            echo "<a href = 'ds_thanhvien.php?p=$i' style='margin: 0px 2px;'> $i </a>";
           }
          ?>
        </div>
      </div>

    </div>
  </section>
</div>

<?php require('layouts/footer.php'); ?>

<style>

h2{
 padding-top: 10px;
}
  
.form{
  border: 2px solid black;
  border-radius: 5px;
}

.sbutton {
color: #007bff;
border-radius: 10px;
}
 
</style>