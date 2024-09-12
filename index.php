<?php include_once('./master_layout/header.php') ;
require "connect.php";
// Post tuyển dụng
$sql_TuyenDung = "SELECT * FROM posts WHERE category_id = 3 ORDER BY ID DESC LIMIT 6";
$tuyenDung = $db->fetchsql($sql_TuyenDung);

// Post thắc mắc giải đáp
$sql_thacMac = "SELECT * FROM posts WHERE category_id = 5 ORDER BY ID DESC LIMIT 5";
$thacMac = $db->fetchsql($sql_thacMac);

// Post dịch vụ
$sql_dichVu = "SELECT * FROM posts WHERE category_id = 1 ORDER BY ID DESC LIMIT 6";
$dichVu = $db->fetchsql($sql_dichVu);
?>
      <main id="main" class="">
        <div id="content" role="main" class="content-area">
          <div class="slider-wrapper relative " id="slider-10074969">
            <div class="slider slider-nav-dots-simple slider-nav-circle slider-nav-normal slider-nav-light slider-style-normal" data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 4000,
            "pauseAutoPlayOnHover" : true,
            "prevNextButtons": true,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 5,
            "percentPosition": true,
            "pageDots": true,
            "rightToLeft": false,
            "draggable": true,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'>
              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1822923203">
                <div class="img-inner image-cover dark" style="padding-top:33%;">
                  <img width="1366" height="463" src="<?php echo base_url() ?>image/slide1.jpg" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="" sizes="(max-width: 1366px) 100vw, 1366px" />
                  <div class="caption">Các sinh viên Việt Nam du học tại Nhật Bản luôn năng động, học tập và làm việc hết mình. Đạt được nhiều thành tích cao cũng như học bổng tại các trường đại học</div>
                </div>
                <style scope="scope">
                  #image_1822923203 {
                    width: 100%;
                  }
                </style>
              </div>
              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1130627871">
                <div class="img-inner image-cover dark" style="padding-top:33%;">
                  <img width="1366" height="463" src="<?php echo base_url() ?>image/slide2.jpg" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="" sizes="(max-width: 1366px) 100vw, 1366px" />
                  <div class="caption">Nhật Bản là thị trường có tiềm năng rất lớn cho lao động Việt Nam, doanh nghiệp Nhật Bản luôn mở cửa chào đón những lao động Việt Nam chăm chỉ, có tay nghề, có ý chí phấn đấu vươn lên</div>
                </div>
                <style scope="scope">
                  #image_1130627871 {
                    width: 100%;
                  }
                </style>
              </div>
            </div>
            <div class="loading-spin dark large centered"></div>
            <style scope="scope"></style>
          </div>
          <!-- .ux-slider-wrapper -->
          <section class="section tin-moi" id="section_2076711299">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <!-- .section-bg -->
            <div class="section-content relative">
              <div class="container section-title-container">
                <h3 class="section-title section-title-center">
                  <b></b>
                  <span class="section-title-main" style="color:rgb(0, 13, 103);">Tin tuyển dụng mới nhất</span>
                  <b></b>
                </h3>
              </div>
              <!-- .section-title -->
              <div class="row large-columns-4 medium-columns- small-columns-2 slider row-slider slider-nav-circle slider-nav-outside slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": true, "rightToLeft": false, "autoPlay" : 2000}'>
                <?php foreach($tuyenDung as $item) :?>
                <div class="page-col col">
                  <div class="col-inner">
                    <a class="plain" href="post-item-details.php?category_id=3&id=<?php echo $item['id']?>" title="<?php echo $item['title'] ?>" target="">
                      <div class="page-box box has-hover">
                        <div class="box-image">
                          <div class="box-image image-zoom image-cover" style="padding-top:70%;">
                            <img width="400" height="256" src="<?php echo base_url() ?>image/<?php echo $item['image']?>" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="<?php echo base_url() ?>image/<?php echo $item['image']?> 400w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tuyen-dung-300x192.jpg 300w" sizes="(max-width: 400px) 100vw, 400px" />
                          </div>
                          <!-- image -->
                        </div>
                        <!-- box-image -->
                        <div class="box-text text-center dark" style="background-color:rgb(0, 38, 127);">
                          <div class="box-text-inner">
                            <p><?php echo $item['title'] ?></p>
                          </div>
                          <!-- box-text-inner -->
                        </div>
                        <!-- box-text -->
                      </div>
                      <!-- .image-box .box -->
                    </a>
                  </div>
                  <!-- .col-inner -->
                </div>
                <?php endforeach ?>
                <!-- .col -->
              </div>
            </div>
            <!-- .section-content -->
            <style scope="scope">
              #section_2076711299 {
                padding-top: 30px;
                padding-bottom: 30px;
              }
            </style>
          </section>
          <section class="section gioi-thieu-section" id="section_2076570483">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <!-- .section-bg -->
            <div class="section-content relative">
              <div class="row row-small" id="row-1837243384">
                <div class="col cot8 medium-8 small-12 large-8">
                  <div class="col-inner">
                    <div class="tabbed-content">
                      <ul class="nav nav-simple nav-uppercase nav-size-normal nav-left">
                        <li class="tab active has-icon">
                          <a href="#tab_giới-thiệu-p-techno">
                            <span>Giới thiệu Jinsung Press</span>
                          </a>
                        </li>
                        <li class="tab has-icon">
                          <a href="#tab_tuyển-dụng-kỹ-sư-mới-nhất">
                            <span>Tuyển dụng mới nhất</span>
                          </a>
                        </li>
                        <li class="tab has-icon">
                          <a href="#tab_dịch-vụ">
                            <span>Dịch vụ</span>
                          </a>
                        </li>
                        <li class="tab has-icon">
                          <a href="#tab_thủ-tục---hồ-sơ">
                            <span>Thủ tục - hồ sơ</span>
                          </a>
                        </li>
                      </ul>
                      <div class="tab-panels">
                        <div class="panel active entry-content" id="tab_giới-thiệu-p-techno">
                          <div class="gioi-thieu">
                            <h3 style="color: #c53030;">Bạn quan tâm tới điều gì ?</h3>
                            <div class="why-choose-us">
                              <ul>
                                <li> Bạn muốn đi <b>xuất khẩu lao động Nhật Bản</b> ? </li>
                                <li> Mong muốn tìm được một <b>công ty tư vấn uy tín</b> tại hà nội cũng như miền bắc ? </li>
                                <li>
                                  <b>Thủ tục</b>
                                  <b>hồ sơ</b> đơn giản, tiện lợi ?
                                </li>
                                <li> Được <b>thi tuyển</b> thường xuyên và liên tục ? </li>
                                <li>Đi nước ngoài để học hỏi, phát triển sự nghiệp?</li>
                              </ul>
                              <p>Vậy hãy liên hệ ngay với chúng tôi nhé!!!</p>
                              <h3 style="color: #c53030; margin-top: 10px;">Chúng tôi cam kết:</h3>
                              <ul>
                                <li> Công ty hợp tác trực tiếp với nghiệp đoàn bên Nhật (không qua công ty con), phong cách <b>chuyên nghiệp</b> và <b>tin cậy</b>
                                </li>
                                <li> Người lao động được làm giấy tờ, <b>thủ tục</b> nhanh chóng và đầy đủ </li>
                                <li> Người lao động được <b>đào tạo</b> bài bản, tay nghề cao </li>
                                <li> Đặc biệt <b>miễn giảm 100%</b> chi phí đào tạo cho <b>lao động đăng ký thi tuyển</b>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="panel entry-content" id="tab_tuyển-dụng-kỹ-sư-mới-nhất">
                          <div class="row large-columns-2 medium-columns-1 small-columns-1 row-small">
                            <?php foreach($tuyenDung as $item) :?>
                            <div class="col post-item">
                              <div class="col-inner">
                                <a href="post-item-details.php?category_id=3&id=<?php echo $item['id']?>" class="plain">
                                  <div class="box box-vertical box-text-middle box-blog-post has-hover">
                                    <div class="box-image" style="width:26%;">
                                      <div class="image-cover" style="padding-top:107%;">
                                        <img width="300" height="191" src="<?php echo base_url() ?>image/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>image/<?php echo $item['image']?>" class="lazy-load attachment-medium size-medium wp-post-image" alt="" decoding="async" loading="lazy" srcset="" data-srcset="<?php echo base_url() ?>image/<?php echo $item['image']?> 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" />
                                      </div>
                                    </div>
                                    <!-- .box-image -->
                                    <div class="box-text text-left">
                                      <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large "><?php echo $item['title'] ?></h5>
                                        <div class="is-divider"></div>
                                        <p class="from_the_blog_excerpt "></p>
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
                            <?php endforeach ?>
                            <!-- .col -->
                          </div>
                        </div>
                        <div class="panel entry-content" id="tab_dịch-vụ">
                          <div class="row large-columns-2 medium-columns-1 small-columns-1 row-small">
                            <?php foreach($dichVu as $item) :?>
                            <div class="col post-item">
                              <div class="col-inner">
                                <a href="post-item-details.php?category_id=1&id=<?php echo $item['id']?>" class="plain">
                                  <div class="box box-vertical box-text-middle box-blog-post has-hover">
                                    <div class="box-image" style="width:26%;">
                                      <div class="image-cover" style="padding-top:107%;">
                                        <img width="300" height="197" src="<?php echo base_url() ?>image/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>image/<?php echo $item['image']?>" class="lazy-load attachment-medium size-medium wp-post-image" alt="" decoding="async" loading="lazy" srcset="" data-srcset="<?php echo base_url() ?>image/<?php echo $item['image']?> 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post8-1.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" />
                                      </div>
                                    </div>
                                    <!-- .box-image -->
                                    <div class="box-text text-left">
                                      <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large "><?php echo $item['title'] ?></h5>
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
                            <?php endforeach ?>
                            <!-- .col -->
                          </div>
                        </div>
                        <div class="panel entry-content" id="tab_thủ-tục---hồ-sơ">
                          <h3>Thủ tục &#8211;hồ sơ cần thiết cho các đơn hàng tuyển dụng sang Nhật Bản</h3>
                          <p>1. Sơ yếu lý lịch ( Xác nhận của UBND xã, phường) 2 bản.</p>
                          <p>2. Hộ khẩu, CMND, Giấy khai sinh ( Sao y bản chính, chứng thực) mỗi loại 2 bản.</p>
                          <p>3. Các văn bằng, chứng chỉ ( Lưu ý: Yêu cầu trình độ văn hóa phải tốt nghiệp lớp 12 trở lên). Sao y bản chỉnh, chứng thực: 2 bản</p>
                          <p>4. Xác nhận nhân sự ( Theo mẫu quy định, do Công an địa phương cấp, không được viết tay. Có xác nhận của UBND xã, phường nơi thực tập sinh cư trú) yêu cầu dán ảnh 4*6 vào ô dán ảnh, có đóng dấu giáp lai vào bảnh: 1 bản</p>
                          <p>5. Xác nhận tình trạng hôn nhân (nếu đã kết hôn) có xác nhận UBND xã, phường Trường hợp đã kết hôn thì photo giấy đăng ký kết hôn ( chứng thực). 1 bản</p>
                          <p>6. Khám sức khỏe tổng thể tại BV Giao thông vận tải TW ( Liên hệ với CBTD để được hướng dẫn chi tiết).</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col cot4 medium-4 small-12 large-4">
                  <div class="col-inner">
                    <div class="thong-tin-lien-he">
                      <div class="hotline1">
                        <span class="fa fa-phone"></span> Hotline: 0984.211.xxx
                      </div>
                    </div>
                    <div class="gap-element" style="display:block; height:auto; padding-top:10px" class="clearfix"></div>
                    <div class="icon-box featured-box icon-box-left text-left">
                      <div class="icon-box-img" style="width: 69px">
                        <div class="icon">
                          <div class="icon-inner">
                            <img width="240" height="240" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/c8ef7a74772dbac06a97220aba5f9a01.jpg" class="attachment-medium size-medium" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/c8ef7a74772dbac06a97220aba5f9a01.jpg 240w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/c8ef7a74772dbac06a97220aba5f9a01-150x150.jpg 150w" sizes="(max-width: 240px) 100vw, 240px" />
                          </div>
                        </div>
                      </div>
                      <div class="icon-box-text last-reset">
                        <p>
                          <span style="color: #ff6600;">
                            <strong>Mr. Admin (Trưởng ban tư vấn)</strong>
                          </span>
                          <br />
                          <strong>Hotline:</strong> 0984.211.xxx <br />
                          <strong>Email:</strong> demo@gmail.com
                        </p>
                      </div>
                    </div>
                    <!-- .icon-box -->
                    <div class="gap-element" style="display:block; height:auto; padding-top:10px" class="clearfix"></div>
                    <p>
                      <center>
                      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkimnam.nguyen.52493&tabs=timeline&width=350&height=280&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                      </center>
                    </p>
                  </div>
                </div>
                <style scope="scope"></style>
              </div>
            </div>
            <!-- .section-content -->
            <style scope="scope">
              #section_2076570483 {
                padding-top: 30px;
                padding-bottom: 30px;
                background-color: rgb(250, 237, 237);
              }
            </style>
          </section>
          <section class="section cau-hoi" id="section_66005113">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <!-- .section-bg -->
            <div class="section-content relative">
              <div class="row row-small" id="row-330964367">
                <div class="col cot8 medium-8 small-12 large-8">
                  <div class="col-inner">
                    <div class="title">
                      <span class="fa fa-pencil"></span>
                      <a href="#">
                        </p>
                        <h3>Câu hỏi thường gặp - Chính sách quyền lợi</h3>
                        <p>
                      </a>
                    </div>
                    <div class="row row-divided" id="row-1430065771">
                      <div class="col cot2 medium-6 small-12 large-6">
                        <div class="col-inner">
                          <div class="row large-columns-1 medium-columns-1 small-columns-1 row-xsmall">
                            <?php foreach($thacMac as $item) :?>
                            <div class="col post-item">
                              <div class="col-inner">
                                <a href="post-item-details.php?category_id=3&id=<?php echo $item['id']?>" class="plain">
                                  <div class="box box-vertical box-text-middle box-blog-post has-hover">
                                    <div class="box-image" style="width:20%;">
                                      <div class="image-cover" style="padding-top:77%;">
                                        <img width="300" height="188" src="<?php echo base_url() ?>image/<?php echo $item['image']?>" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg" class="lazy-load attachment-medium size-medium wp-post-image" alt="" decoding="async" loading="lazy" srcset="" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung.jpg 415w" sizes="(max-width: 300px) 100vw, 300px" />
                                      </div>
                                    </div>
                                    <!-- .box-image -->
                                    <div class="box-text text-left">
                                      <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large "><?php echo $item['title'] ?></h5>
                                        <div class="post-meta is-small op-8"><?php echo $item['created_at'] ?></div>
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
                            <?php endforeach ?>
                            <!-- .col -->
                          </div>
                        </div>
                      </div>
                      <style scope="scope"></style>
                    </div>
                  </div>
                </div>
                <div class="col cot4 medium-4 small-12 large-4">
                  <div class="col-inner">
                    <div class="tabbed-content">
                      <ul class="nav nav-tabs nav-uppercase nav-size-normal nav-left">
                        <li class="tab active has-icon">
                          <a href="#tab_tuyển-dụng">
                            <span>TUYỂN DỤNG JINSUNG</span>
                          </a>
                        </li>
                        <li class="tab has-icon">
                          <a href="#tab_Liên-hệ">
                            <span>ĐĂNG KÝ</span>
                          </a>
                        </li>
                      </ul>
                      <div class="tab-panels">
                        <div class="panel active entry-content" id="tab_tuyển-dụng">
                          <div class="row large-columns-1 medium-columns-1 small-columns-1 row-xsmall">
                            <?php foreach($tuyenDung as $item) :?>
                            <div class="col post-item">
                              <div class="col-inner">
                                <a href="post-item-details.php?category_id=3&id=<?php echo $item['id']?>" class="plain">
                                  <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                    <div class="box-image">
                                      <div class="image-cover" style="padding-top:0%;">
                                        <img width="300" height="191" src="<?php echo base_url() ?>image/<?php echo $item['image']?>" data-src="<?php echo base_url() ?>image/<?php echo $item['image']?>" class="lazy-load attachment-medium size-medium wp-post-image" alt="" decoding="async" loading="lazy" srcset="" data-srcset="<?php echo base_url() ?>image/<?php echo $item['image']?> 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" sizes="(max-width: 300px) 100vw, 300px" />
                                      </div>
                                    </div>
                                    <!-- .box-image -->
                                    <div class="box-text text-left">
                                      <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large "><?php echo $item['title'] ?></h5>
                                        <div class="post-meta is-small op-8"><?php echo $item['created_at'] ?></div>
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
                            <?php endforeach ?>
                            <!-- .col -->
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
                          <style>
                          .contact-container {
                              background-color: #fff;
                              padding: 15px;
                              border-radius: 10px;
                              box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                              width: 345px;
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style scope="scope"></style>
              </div>
            </div>
            <!-- .section-content -->
            <style scope="scope">
              #section_66005113 {
                padding-top: 30px;
                padding-bottom: 30px;
              }
            </style>
          </section>
        </div>
      </main>
    <?php  
      include_once('./master_layout/footer.php') 
      ?>
</html>