<?php include_once('./master_layout/header.php') ;
require "connect.php";

include_once('./master_layout/Database.php') ;

$db= new Database();

// List tin tuc
$sql = "SELECT * FROM posts WHERE category_id = 1 ORDER BY ID ASC LIMIT 2";
$listTinTuc = $db->fetchsql($sql);
?>

<main id="main" class="">
  <div id="content" class="blog-wrapper blog-archive page-wrapper">
    <div class="row row-large ">
      <div class="large-9 col">
        <div class="row large-columns-1 medium-columns- small-columns-1">
          <?php foreach($listTinTuc as $item) :
            $title = catChuoiCoNghia($item['content'], 50);?>
          <div class="col post-item">
            <div class="col-inner">
              <a href="post-item-details.php?id=<?php echo $item['id']?>&category_id=<?php echo $item['category_id']?>" class="plain">
                <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                  <div class="box-image" style="width:40%;">
                    <div class="image-cover" style="padding-top:56%;">
                      <img width="300" height="191" src="<?php echo $item['image']?>" data-src="<?php echo $item['image']?>" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="<?php echo $item['image']?> 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" data-srcset="<?php echo $item['image']?> 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                    </div>
                  </div>
                  <!-- .box-image -->
                  <div class="box-text text-left">
                    <div class="box-text-inner blog-post-inner">
                      <h5 class="post-title is-large "><?php echo $item['title']?></h5>
                      <p style="display: block; margin-bottom: 15px;"><?php $text = "Đây là một chuỗi ví dụ để minh họa cách cắt chuỗi có nghĩa trong PHP.";
echo catChuoiCoNghia($title, 50); ?></p>
                    </div>
                    <!-- .box-text-inner -->
                  </div>
                  <!-- .box-text -->
                  <div class="badge absolute top post-date badge-square">
                    <div class="badge-inner">
                      <span class="post-date-day">18</span>
                      <br>
                      <span class="post-date-month is-xsmall">Th5</span>
                    </div>
                  </div>
                </div>
                <!-- .box -->
              </a>
              <!-- .link -->
            </div>
            <!-- .col-inner -->
          </div>
          <?php endforeach; ?>
          <!-- .col -->
          <div class="col post-item">
            <div class="col-inner">
              <a href="https://demo.tamnguyen.vn/xkld2/top-5-cong-ty-xkld-nhat-ban-uy-tin-tai-tp-ho-chi-minh/" class="plain">
                <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                  <div class="box-image" style="width:40%;">
                    <div class="image-cover" style="padding-top:56%;">
                      <img width="300" height="191" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                    </div>
                  </div>
                  <!-- .box-image -->
                  <div class="box-text text-left">
                    <div class="box-text-inner blog-post-inner">
                      <h5 class="post-title is-large ">Top 5 công ty XKLĐ Nhật Bản uy tín tại TP. Hồ Chí Minh</h5>
                      <div class="is-divider"></div>
                      <p class="from_the_blog_excerpt ">Công ty xuất khẩu lao động Nhật Bản tại TPHCM 2018 Thấy dạo này thành [...] </p>
                    </div>
                    <!-- .box-text-inner -->
                  </div>
                  <!-- .box-text -->
                  <div class="badge absolute top post-date badge-square">
                    <div class="badge-inner">
                      <span class="post-date-day">18</span>
                      <br>
                      <span class="post-date-month is-xsmall">Th5</span>
                    </div>
                  </div>
                </div>
                <!-- .box -->
              </a>
              <!-- .link -->
            </div>
            <!-- .col-inner -->
          </div>
          <!-- .col -->
          <div class="col post-item">
            <div class="col-inner">
              <a href="https://demo.tamnguyen.vn/xkld2/dieu-kien-di-xuat-khau-lao-dong-tai-nhat-ban-moi-nhat-2018/" class="plain">
                <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                  <div class="box-image" style="width:40%;">
                    <div class="image-cover" style="padding-top:56%;">
                      <img width="300" height="198" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3.jpg 480w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3.jpg 480w" sizes="(max-width: 300px) 100vw, 300px">
                    </div>
                  </div>
                  <!-- .box-image -->
                  <div class="box-text text-left">
                    <div class="box-text-inner blog-post-inner">
                      <h5 class="post-title is-large ">Điều kiện đi xuất khẩu lao động tại Nhật Bản mới nhất 2018</h5>
                      <div class="is-divider"></div>
                      <p class="from_the_blog_excerpt ">Điều kiện để đi xuất khẩu lao động Nhật Bản rất quan trọng, chúng tôi [...] </p>
                    </div>
                    <!-- .box-text-inner -->
                  </div>
                  <!-- .box-text -->
                  <div class="badge absolute top post-date badge-square">
                    <div class="badge-inner">
                      <span class="post-date-day">18</span>
                      <br>
                      <span class="post-date-month is-xsmall">Th5</span>
                    </div>
                  </div>
                </div>
                <!-- .box -->
              </a>
              <!-- .link -->
            </div>
            <!-- .col-inner -->
          </div>
        </div>
      </div>
      <!-- .large-9 -->
      <?php include_once('./post-side-bar.php') ?>
      <!-- .post-sidebar -->
    </div>
    <!-- .row -->
  </div>
  <!-- .page-wrapper .blog-wrapper -->
</main>

<?php include_once('./master_layout/footer.php') ?>