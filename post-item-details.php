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
        <!-- #-256 -->
        <div class="html-before-comments mb">
          <h4>CÓ THỂ BẠN QUAN TÂM</h4>
          <div class="gap-element" style="display:block; height:auto; padding-top:15px"></div>
          <div class="row large-columns-4 medium-columns-1 small-columns-1 row-small">
            <?php foreach($listTinTuc as $item) : ?>
            <div class="col post-item">
              <div class="col-inner">
                <a href="post-item-details.php?id=<?php echo $item['id']?>&category_id=<?php echo $item['category_id']?>" class="plain">
                  <div class="box box-normal box-text-bottom box-blog-post has-hover">
                    <div class="box-image">
                      <div class="image-cover" style="padding-top:75%;">
                        <img width="300" height="191" src="<?php echo base_url() ?>image/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>image/<?php echo $item['image']?>" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="<?php echo base_url() ?>image/<?php echo $item['image']?> 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" data-srcset="<?php echo base_url() ?>image/<?php echo $item['image']?> 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                      </div>
                    </div>
                    <!-- .box-image -->
                    <div class="box-text text-left is-small">
                      <div class="box-text-inner blog-post-inner">
                        <h5 class="post-title is-large "><?php echo $item['title']?></h5>
                        <div class="post-meta is-small op-8"><?php echo $item['created_at']?></div>
                        <div class="is-divider"></div>
                      </div>
                      <!-- .box-text-inner -->
                    </div>
                    <!-- .box-text -->
                  </div>
                  <!-- .box -->
                </a>
                <!-- .link -->
              </div>
              <!-- .col-inner -->
            </div>
            <!-- .col -->
            <?php endforeach ?>
          </div>
        </div>
        <!-- Comment face... -->
        <div id="comments" class="comments-area">
          <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">Trả lời <small>
                <a rel="nofollow" id="cancel-comment-reply-link" href="/xkld2/muc-luong-xuat-khau-lao-dong-di-nhat-ban-hien-nay-bao-nhieu/#respond" style="display:none;">Hủy</a>
              </small>
            </h3>
            <form action="https://demo.tamnguyen.vn/xkld2/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
              <p class="comment-notes">
                <span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span>
                <span class="required-field-message">Các trường bắt buộc được đánh dấu <span class="required">*</span>
                </span>
              </p>
              <p class="comment-form-comment">
                <label for="comment">Bình luận <span class="required">*</span>
                </label>
                <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required=""></textarea>
              </p>
              <p class="comment-form-author">
                <label for="author">Tên <span class="required">*</span>
                </label>
                <input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" required="">
              </p>
              <p class="comment-form-email">
                <label for="email">Email <span class="required">*</span>
                </label>
                <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email" required="">
              </p>
              <p class="comment-form-url">
                <label for="url">Trang web</label>
                <input id="url" name="url" type="url" value="" size="30" maxlength="200" autocomplete="url">
              </p>
              <p class="comment-form-cookies-consent">
                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                <label for="wp-comment-cookies-consent">Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label>
              </p>
              <p class="form-submit">
                <input name="submit" type="submit" id="submit" class="submit" value="Phản hồi">
                <input type="hidden" name="comment_post_ID" value="256" id="comment_post_ID">
                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
              </p>
            </form>
          </div>
          <!-- #respond -->
        </div>
        <!-- #comments -->
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
