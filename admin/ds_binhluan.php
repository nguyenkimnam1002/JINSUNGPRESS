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
  $sql = "SELECT * FROM comments WHERE content LIKE '%$search%'";
  $query = mysqli_query($conn ,$sql . " LIMIT $offset, $limit");
  $count = mysqli_num_rows(mysqli_query($conn ,$sql));
  $totalPage = ceil($count/$limit) ?? 0;
?>

<div class="content-wrapper" style="min-height: 365px;">
     <section class="content">
     <div class="container-fluid">
        <h2>Danh sách bình luận</h2></br>
        <form  action="" method="GET">
           <input type="text" name="txtsearch" class='searchform'/>
           <input class='sbutton' type="submit" value="Search"/>
        </form></br>
    <div class="row">
        <div class="table-responsive">
            <table cellspacing="0" cellpadding="0" class="table" style="display: block !important; overflow-x: auto !important; width: 100% !important;">
              <thead>
                <tr>
                   <td scope="row">Id</td>
                   <td scope="row">Content</td>
                   <td scope="row">Post_id1</td>
                   <td scope="row">Account_id1</td>
                   <td scope="row">Ngày tạo</td>
	               <td scope="row">Ngày cập nhật</td>
	               <td scope="row">Trạng thái</td>
                   <td scope="row">Post_id2</td>
                   <td scope="row">Account_id2</td>
                   <td scope="row">           </td>
                </tr>
             <thead>
<?php while($row=mysqli_fetch_array($query)): ?>
                <tr>
                   <td><?php echo $row['id']; ?></td>
                   <td><?php echo $row['content']; ?></td>
                   <td><?php echo $row['post_id']; ?></td>
                   <td><?php echo $row['account_id']; ?></td>
                   <td><?php echo $row['created_at']; ?></td>
                   <td><?php echo $row['updated_at']; ?></td>
                   <td><?php echo $row['status']; ?></td>
                   <td><?php echo $row['post_id']; ?></td>
                   <td><?php echo $row['account_id']; ?></td>
                   <td><a href="xoa_binhluan.php?id=<?php echo $row['id']; ?>">Xóa</a></td>
                </tr>
             </thead>
<?php endwhile;?>
              </table>
          


</div>
  <?php 
  for ($i=1; $i <= $totalPage; $i++)
    if($i == $page) {
      echo "<a href = 'ds_binhluan.php?p=$i' style='font-size: 20px; color: red; margin: 0px 4px;'> $i </a>";
    } else{
      echo "<a href = 'ds_binhluan.php?p=$i' style='margin: 0px 2px;'> $i </a>";
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