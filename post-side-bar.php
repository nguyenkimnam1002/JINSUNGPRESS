<?php   
   // Post tuyển dụng
   $sql2 = "SELECT * FROM posts WHERE category_id = 3 ORDER BY ID DESC LIMIT 4";
   $tuyenDung = $db->fetchsql($sql2);
?>

<div class="post-sidebar large-3 col">
  <div id="secondary" class="widget-area " role="complementary">
    <aside id="text-3" class="widget widget_text">
      <div class="textwidget">
        <br>
        <section class="section gioi-thieu-section" id="section_183529974">
          <div class="bg section-bg fill bg-fill bg-loaded"></div>
          <p>
            <!-- .section-bg -->
          </p>
          <div class="section-content relative">
            <div class="row row-small" id="row-273233782">
              <div class="col cot4 small-12 large-12">
                <div class="col-inner">
                  <div class="thong-tin-lien-he">
                    <div class="hotline1">Hotline: 0984.211.xxx</div>
                  </div>
                  <div class="gap-element" style="display:block; height:auto; padding-top:10px"></div>
                  <div class="icon-box featured-box icon-box-left text-left">
                    <div class="icon-box-img" style="width: 25px">
                      <div class="icon">
                        <div class="icon-inner">
                          <img width="240" height="240" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/c8ef7a74772dbac06a97220aba5f9a01.jpg" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/c8ef7a74772dbac06a97220aba5f9a01.jpg 240w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/c8ef7a74772dbac06a97220aba5f9a01-150x150.jpg 150w" sizes="(max-width: 240px) 100vw, 240px">
                        </div>
                        <p></p>
                      </div>
                      <p></p>
                    </div>
                    <div class="icon-box-text last-reset">
                      <p>
                        <span style="color: #ff6600;">
                          <strong>Mr. Admin (Trưởng ban tư vấn)</strong>
                        </span>
                      </p>
                      <p>
                        <strong>Hotline:</strong> 0984.211.xxx
                      </p>
                      <p>
                        <strong>Email:</strong> demo@gmail.com
                      </p>
                    </div>
                    <p></p>
                  </div>
                  <p>
                    <!-- .icon-box -->
                  </p>
                  <div class="gap-element" style="display:block; height:auto; padding-top:10px"></div>
                  <p></p>
                  <center>
                  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkimnam.nguyen.52493&tabs=timeline&width=350&height=280&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                  </center>
                </div>
              </div>
              <style scope="scope"></style>
            </div>
          </div>
          <p>
            <!-- .section-content -->
          </p>
          <style scope="scope">
            <p>#section_183529974 {
              padding-top: 30px;
              padding-bottom: 30px;
              background-color: rgb(250, 237, 237);
            }
          </style>
        </section>
        <section class="section cau-hoi" id="section_1092043634">
          <div class="bg section-bg fill bg-fill bg-loaded"></div>
          <p>
            <!-- .section-bg -->
          </p>
          <div class="section-content relative">
            <div class="gap-element" style="display:block; height:auto; padding-top:20px"></div>
            <div class="row row-small" id="row-2078649175">
              <div class="col cot4 small-12 large-12">
                <div class="col-inner">
                  <div class="tabbed-content">
                    <ul class="nav nav-tabs nav-uppercase nav-size-normal nav-left">
                      <li class="tab has-icon active">
                        <a href="#tab_tuyển-dụng">
                          <span>TUYỂN DỤNG</span>
                        </a>
                      </li>
                      <li class="tab has-icon">
                        <a href="#tab_Liên-hệ">
                          <span>ĐĂNG KÝ</span>
                        </a>
                      </li>
                    </ul>
                    <div class="tab-panels">
                      <div class="panel entry-content active" id="tab_tuyển-dụng">
                        <div class="row large-columns-1 medium-columns-1 small-columns-1 row-xsmall">
                          <?php foreach($tuyenDung as $item) :?>
                          <div class="col post-item">
                            <div class="col-inner">
                              <a href="post-item-details.php?category_id=3&id=<?php echo $item['id']?>" class="plain">
                                <p></p>
                                <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                  <div class="box-image">
                                    <div class="image-cover" style="padding-top:0%;">
                                      <img width="300" height="191" src="<?php echo base_url() ?>image/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>image/<?php echo $item['image']?>" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="<?php echo base_url() ?>image/<?php echo $item['image']?> 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" data-srcset="<?php echo base_url() ?>image/<?php echo $item['image']?> 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                                    </div>
                                    <p></p>
                                  </div>
                                  <p>
                                    <!-- .box-image -->
                                  </p>
                                  <div class="box-text text-left">
                                    <div class="box-text-inner blog-post-inner">
                                      <h5 class="post-title is-large "><?php echo $item['title'] ?></h5>
                                      <div class="post-meta is-small op-8"><?php echo $item['created_at'] ?></div>
                                      <div class="is-divider"></div>
                                      <p></p>
                                    </div>
                                    <p>
                                      <!-- .box-text-inner -->
                                    </p>
                                  </div>
                                  <p>
                                    <!-- .box-text -->
                                  </p>
                                </div>
                              </a>
                              <p>
                                <a href="post-item-details.php?category_id=3&id=<?php echo $item['id']?>" class="plain">
                                  <!-- .box -->
                                  <br>
                                </a>
                                <!-- .link -->
                              </p>
                            </div>
                            <p>
                              <!-- .col-inner -->
                            </p>
                          </div>
                          <?php endforeach ?>
                        </div>
                      </div>
                      <div class="panel entry-content" id="tab_Liên-hệ">
                        <div class="gap-element" style="display:block; height:auto; padding-top:10px"></div>
                        <h3 style="text-align: center;">
                          <span style="color: #000080;">
                            <strong>LIÊN HỆ ỨNG TUYỂN</strong>
                          </span>
                        </h3>
                        <p>Vui lòng gửi CV trực tiếp tại một cửa của công ty hoặc đăng ký Online trực tiếp qua Zalo/Face/Phone của công ty.</p>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                        
                        <div class="contact-container">
                          <div class="contact-card">
                              <i class="fab fa-facebook-square"></i>
                              <p>Facebook: <a href="https://www.facebook.com/yourprofile" target="_blank">facebook.com/yourprofile</a></p>
                          </div>
                          <div class="contact-card">
                              <i class="fab fa-whatsapp"></i>
                              <p>Zalo: <a href="https://zalo.me/yourphone" target="_blank">zalo.me/yourphone</a></p>
                          </div>
                          <div class="contact-card">
                              <i class="fas fa-envelope"></i>
                              <p>Email: <a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <style scope="scope"></style>
            </div>
          </div>
          <p>
            <!-- .section-content -->
          </p>
          <style scope="scope">
            <p>#section_1092043634 {
              padding-top: 30px;
              padding-bottom: 30px;
            }
          </style>
        </section>
      </div>
    </aside>
  </div>
  <!-- #secondary -->
</div>
<style>
.contact-container {
    background-color: #fff;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    width: 250px;
    text-align: center;
}

.contact-container h2 {
    margin-bottom: 20px;
    color: #333;
}

.contact-card {
    display: flex;
    align-items: center;
    /* margin-bottom: 15px; */
    padding: 3px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.contact-card i {
    font-size: 24px;
    margin-right: 10px;
    color: #0078d4;
}

.contact-card p {
    margin: 0;
    font-size: 16px;
}

.contact-card a {
    color: #0078d4;
    text-decoration: none;
}

.contact-card:hover {
    background-color: #f0f0f0;
}
</style>