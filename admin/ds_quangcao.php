<?php
require('layouts/header.php'); ?>
<?php
require('./../connect.php'); ?>

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
  $sql = "SELECT * FROM advertisements WHERE title LIKE '%$search%'";
  $query = mysqli_query($conn ,$sql . " LIMIT $offset, $limit");
  $count = mysqli_num_rows(mysqli_query($conn ,$sql));
  $totalPage = ceil($count/$limit) ?? 0;
?>

<div class="content-wrapper" style="min-height: 365px;">
  <section class="content">
    <div class="container-fluid">
      <h2>Danh sách quảng cáo</h2></br>
      <form  action="" method="GET">
        <input type="text" name="txtsearch" class='searchform'/>
        <button class='sbutton' type="submit">Search</button>
      </form></br>
      <div class="row">
        <div class="table-responsive">
          <table cellspacing="0" cellpadding="0" class="table" style="display: block !important; overflow-x: auto !important; width: 100% !important;">
            <thead>
              <tr>
                 <td scope="row">ID</td>
                 <td scope="row">Tittle</td>
                 <td scope="row">Ảnh</td>
                 <td scope="row">Link</td>
                 <td scope="row">Ngày tạo</td>
                 <td scope="row">Ngày sửa</td>
	               <td scope="row">Trạng thái</td>
                 <td scope="row" colspan="2"><a href="them_quangcao.php">Thêm</a></td>
              </tr>
            <thead>
<?php while($row=mysqli_fetch_array($query)): ?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['title']; ?></td>
  <td><?php echo '<img  src='.$row['image'].' width=170px;/>'; ?></td>
  <td><a href="<?php echo $row['link']; ?>"><?php echo $row['link']; ?></a></td>
  <td><?php echo $row['created_at']; ?></td>
  <td><?php echo $row['updated_at']; ?></td>
  <td><?php echo $row['status']; ?></td>
  <td><a href="sua_quangcao.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
  <td><a href="xoa_quangcao.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
</tr>
<?php endwhile;?>
</table>

  <?php 
  for ($i=1; $i <= $totalPage; $i++)
    if($i == $page) {
      echo "<a href = 'ds_quangcao.php?p=$i' style='font-size: 20px; color: red; margin: 0px 4px;'> $i </a>";
    } else{
      echo "<a href = 'ds_quangcao.php?p=$i' style='margin: 0px 2px;'> $i </a>";
    }
  ?>
        </div>
      </div>

    </div>
  </section>
</div>

 
 <?php require('layouts/footer.php'); ?>

<style>

.sbutton {
color: #007bff;
border-radius: 10px;
}

h2{
 padding-top: 10px;
}
  
.form{
  border: 2px solid black;
  border-radius: 5px;
}


</style>

