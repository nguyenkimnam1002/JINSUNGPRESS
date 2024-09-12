<?php include_once('./master_layout/header.php') ;
require "connect.php";
include_once('./master_layout/Database.php') ;
$db= new Database();

?>
<?php
    if(isset($_POST['content']) && isset($_POST['submit'])) {
      $content=$_POST['content'];
      if(isset($_SESSION['account'])) {
       $post_id=$_GET['id'];
       $account_id=$_SESSION['account']['id'];
       $query = "INSERT comments(account_id, post_id, content) VALUES('$account_id', '$post_id', '$content')"; 

        $result = mysqli_query($conn, $query);
      }
    }
       
    
?>

<?php
if(isset($_GET['id']) && isset($_GET['category_id'])){
  $id=$_GET['id'];
  $category_id=$_GET['category_id'];
  $sql = "SELECT * FROM posts WHERE id='$id'"; // Câu lệnh select
  $query = mysqli_query($conn, $sql); // thực hiện câu lệnh query - select. Kết quả trả về là 1 mảng collection (các row)
  $rn = $query->fetch_array(MYSQLI_ASSOC); // Lấy bản ghi đầu tiên của kết quả
  if(mysqli_num_rows($query)  == 0) {
    header('Location: index.php');
  }

  $sql = "SELECT * FROM posts WHERE category_id='$category_id' AND id <> '$id'  ORDER BY id DESC LIMIT 5";
  $query_post = mysqli_query($conn, $sql);

  $sql_comments = "SELECT c.content, c.post_id, a.username FROM `comments` as C join `accounts` as A on c.account_id = a.id where c.post_id = '$id'";
  $query_comments = mysqli_query($conn, $sql_comments);


  // List tin tuc lien quan
  $sqlLienQuan = "SELECT * FROM posts WHERE category_id = $category_id ORDER BY ID ASC LIMIT 8";
  $listTinTuc = $db->fetchsql($sqlLienQuan);
} else {
  header('Location: index.php');
}


?>

<?php  
    while($row = mysqli_fetch_array($query_post)){ /////<!-- Lấy từng bản ghi trong kết quả truy vấn -->
      $id = $row['id'];
      $title = $row['title']; 
    }
?>
  

  <main id="main" class="">
  <div id="content" class="blog-wrapper blog-single page-wrapper">
    <div class="row row-large ">
      <div class="large-9 col">
        <article id="post-256" class="post-256 post type-post status-publish format-standard has-post-thumbnail hentry category-du-hoc-nhat-ban category-thac-mac-giai-dap">
          <div class="article-inner ">
            <header class="entry-header">
              <div class="entry-header-text entry-header-text-top text-left">
                <h1 class="entry-title"><?php echo $rn['title']?></h1>
                <div class="entry-divider is-divider small"></div>
              </div>
              <!-- .entry-header -->
              <div class="entry-image relative">
                <a href="post-item-details.php?id=<?php echo $rn['id']?>&category_id=<?php echo $rn['category_id']?>">
                  <img width="400" height="235" src="<?php echo base_url() ?>image/<?php echo $rn['image']?>" data-src="<?php echo base_url() ?>image/<?php echo $rn['image']?>" class="attachment-large size-large wp-post-image lazy-load-active" alt="" decoding="async" srcset="<?php echo base_url() ?>image/<?php echo $rn['image']?> 400w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg 300w" data-srcset="<?php echo base_url() ?>image/<?php echo $rn['image']?> 400w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg 300w" sizes="(max-width: 400px) 100vw, 400px">
                </a>
                <div class="badge absolute top post-date badge-square">
                  <div class="badge-inner">
                    <span class="post-date-day">18</span>
                    <br>
                    <span class="post-date-month is-small">Th5</span>
                  </div>
                </div>
              </div>
              <!-- .entry-image -->
            </header>
            <!-- post-header -->
            <div class="entry-content single-page">
              <p><?php echo $rn['content']; ?></p>
            </div>
          </div>
          <!-- .article-inner -->
        </article>
      </div>
      <!-- .large-9 -->
      <?php include_once('./post-side-bar.php') ?>
      <!-- .post-sidebar -->
    </div>
    <!-- .row -->
  </div>
  <!-- #content .page-wrapper -->
</main>

  <!-- Footer Start -->
  <?php include_once('./master_layout/footer.php') ?>
