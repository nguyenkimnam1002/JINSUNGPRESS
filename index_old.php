<?php include_once('./master_layout/header.php') ;
require "connect.php";
?>

<main id="main" class="">
    <div id="content" role="main" class="content-area">
        <!-- <div class="w3-section">
          <img class="mySlides center custom-image" src="<?php echo base_url() ?>image/slide1.jpg" style="width:80%">
          <img class="mySlides center custom-image" src="<?php echo base_url() ?>image/slide2.jpg" style="width:80%">
          <img class="mySlides center custom-image" src="<?php echo base_url() ?>image/slide3.jpg" style="width:80%">
          <img class="mySlides center" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider3.jpg " style="width:80%">
          <div class="w3-center w3-container w3-section w3-large w3-text-white" style="width:100%">
            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
          </div>
        </div> -->
      <div class="slider-wrapper relative " id="slider-10074969">
        <div class="slider slider-nav-dots-simple slider-nav-circle slider-nav-normal slider-nav-light slider-style-normal flickity-enabled is-draggable slider-lazy-load-active" data-flickity-options="{
                  &quot;cellAlign&quot;: &quot;center&quot;,
                  &quot;imagesLoaded&quot;: true,
                  &quot;lazyLoad&quot;: 1,
                  &quot;freeScroll&quot;: false,
                  &quot;wrapAround&quot;: true,
                  &quot;autoPlay&quot;: 4000,
                  &quot;pauseAutoPlayOnHover&quot; : true,
                  &quot;prevNextButtons&quot;: true,
                  &quot;contain&quot; : true,
                  &quot;adaptiveHeight&quot; : true,
                  &quot;dragThreshold&quot; : 5,
                  &quot;percentPosition&quot;: true,
                  &quot;pageDots&quot;: true,
                  &quot;rightToLeft&quot;: false,
                  &quot;draggable&quot;: true,
                  &quot;selectedAttraction&quot;: 0.1,
                  &quot;parallax&quot; : 0,
                  &quot;friction&quot;: 0.6        }" tabindex="0">
          <div class="flickity-viewport" style="height: 627.984px; touch-action: pan-y;">
            <div class="flickity-slider" style="left: 0px; transform: translateX(-100%);">
              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1822923203" aria-selected="false" style="position: absolute; left: 0%;">
                <div class="img-inner image-cover dark" style="padding-top:33%;">
                  <img width="1366" height="463" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider2.jpg" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider2.jpg 1366w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider2-300x102.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider2-768x260.jpg 768w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider2-1024x347.jpg 1024w" sizes="(max-width: 1366px) 100vw, 1366px">
                  <div class="caption">Các sinh viên Việt Nam du học tại Nhật Bản luôn năng động, học tập và làm việc hết mình. Đạt được nhiều thành tích cao cũng như học bổng tại các trường đại học</div>
                </div>
                <style scope="scope">
                  #image_1822923203 {
                    width: 100%;
                  }
                </style>
              </div>
              <div class="img has-hover x md-x lg-x y md-y lg-y is-selected" id="image_1130627871" aria-selected="true" style="position: absolute; left: 100%;">
                <div class="img-inner image-cover dark" style="padding-top:33%;">
                  <img width="1366" height="463" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider3.jpg" class="attachment-original size-original" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider3.jpg 1366w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider3-300x102.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider3-768x260.jpg 768w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/slider3-1024x347.jpg 1024w" sizes="(max-width: 1366px) 100vw, 1366px">
                  <div class="caption">Nhật Bản là thị trường có tiềm năng rất lớn cho lao động Việt Nam, doanh nghiệp Nhật Bản luôn mở cửa chào đón những lao động Việt Nam chăm chỉ, có tay nghề, có ý chí phấn đấu vươn lên</div>
                </div>
                <style scope="scope">
                  #image_1130627871 {
                    width: 100%;
                  }
                </style>
              </div>
            </div>
          </div>
          <button class="flickity-button flickity-prev-next-button previous" type="button" aria-label="Previous">
            <svg class="flickity-button-icon" viewBox="0 0 100 100">
              <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
            </svg>
          </button>
          <button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next">
            <svg class="flickity-button-icon" viewBox="0 0 100 100">
              <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
            </svg>
          </button>
          <ol class="flickity-page-dots">
            <li class="dot" aria-label="Page dot 1"></li>
            <li class="dot is-selected" aria-label="Page dot 2" aria-current="step"></li>
          </ol>
        </div>
        <div class="loading-spin dark large centered" style="display: none;"></div>
        <style scope="scope"></style>
      </div>
        

    <!-- .ux-slider-wrapper -->
    <section class="section tin-moi" id="section_1764246928">
        <div class="bg section-bg fill bg-fill bg-loaded"></div>
        <!-- .section-bg -->

            <div class="section-content relative">
                <div class="container section-title-container">
                    <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="color: rgb(0, 13, 103);">Tin tuyển dụng mới nhất</span><b></b></h3>
                </div>
            <!-- .section-title -->

      <!-- banner outer thumb start -->
      <div class="col-xs-16 banner-outer-thumb  pull-left  wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-offset="50">
        <div class="row">
          <div id="banner-thumbs" class="owl-carousel">
            <div class="item"><a href="https://demo.tamnguyen.vn/xkld2/tuyen-dung/thong-tin-tuyen-dung-khac/">
              <div class="box">
                <img class="img-responsive" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tuyen-dung.jpg" width="1600" height="972" alt=""/>
                <!-- box-image -->
                <div class="box-text text-center dark" style="background-color: rgb(0, 38, 127);">
                    <div class="box-text-inner">
                        <p>Thông tin tuyển dụng khác</p>
                    </div>
                    <!-- box-text-inner -->
                </div>
                <!-- box-text -->
                <div class="overlay"></div>
                <div class="overlay-info">
                </div>
              </div>
              </a> </div>
            <div class="item"><a href="https://demo.tamnguyen.vn/xkld2/tuyen-dung/thong-tin-tuyen-dung-khac/">
              <div class="box ">
                <img class="img-responsive" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/Tuyen-ky-su-co-khi.jpg" width="1600" height="972" alt=""/>
                <!-- box-image -->
                <div class="box-text text-center dark" style="background-color: rgb(0, 38, 127);">
                    <div class="box-text-inner">
                        <p>Tuyển kỹ sư cơ khí</p>
                    </div>
                    <!-- box-text-inner -->
                </div>
                <!-- box-text -->
                <div class="overlay"></div>
                <div class="overlay-info">
                </div>
              </div>
              </a> </div>
            <div class="item"><a href="https://demo.tamnguyen.vn/xkld2/tuyen-dung/thong-tin-tuyen-dung-khac/">
              <div class="box ">
                <img class="img-responsive" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/Tuyen-ky-su-dien.jpg" width="1600" height="972" alt=""/>
                <!-- box-image -->
                <div class="box-text text-center dark" style="background-color: rgb(0, 38, 127);">
                    <div class="box-text-inner">
                        <p>Tuyển kỹ sư điện, điện tử</p>
                    </div>
                    <!-- box-text-inner -->
                </div>
                <!-- box-text -->
                <div class="overlay"></div>
              </div>
              </a> </div>
            <div class="item"><a href="https://demo.tamnguyen.vn/xkld2/tuyen-dung/thong-tin-tuyen-dung-khac/">
              <div class="box ">
                <img class="img-responsive" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/Tuyen-ky-su-it.jpg" width="1600" height="972" alt=""/>
                <!-- box-image -->
                <div class="box-text text-center dark" style="background-color: rgb(0, 38, 127);">
                    <div class="box-text-inner">
                        <p>Tuyển kỹ sư IT</p>
                    </div>
                    <!-- box-text-inner -->
                </div>
                <!-- box-text -->
                <div class="overlay"></div>
              </div>
              </a> </div>
            <div class="item"><a href="https://demo.tamnguyen.vn/xkld2/tuyen-dung/thong-tin-tuyen-dung-khac/">
              <div class="box">
                <img class="img-responsive" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tuyen-ky-su-o-to.jpg" width="1600" height="972" alt=""/>
                <!-- box-image -->
                <div class="box-text text-center dark" style="background-color: rgb(0, 38, 127);">
                    <div class="box-text-inner">
                        <p>Tuyển kỹ sư Ôtô</p>
                    </div>
                    <!-- box-text-inner -->
                </div>
                <!-- box-text -->
                <div class="overlay"></div>
                <div class="overlay-info">
                </div>
              </div>
              </a> </div>
            <div class="item"><a href="https://demo.tamnguyen.vn/xkld2/tuyen-dung/thong-tin-tuyen-dung-khac/">
              <div class="box ">
                <img class="img-responsive" src="./assets/images/banner-slider/slide-img-6.jpg" width="1600" height="972" alt=""/>
                <!-- box-image -->
                <div class="box-text text-center dark" style="background-color: rgb(0, 38, 127);">
                    <div class="box-text-inner">
                        <p>Tuyển kỹ sư xây dựng</p>
                    </div>
                    <!-- box-text-inner -->
                </div>
                <!-- box-text -->
                <div class="overlay"></div>
                <div class="overlay-info">
                </div>
              </div>
              </a> </div>
            <div class="item"><a href="https://demo.tamnguyen.vn/xkld2/tuyen-dung/thong-tin-tuyen-dung-khac/">
              <div class="box ">
                <img class="img-responsive" src="./assets/images/banner-slider/slide-img-7.jpg" width="1600" height="972" alt=""/>
                <!-- box-image -->
                <div class="box-text text-center dark" style="background-color: rgb(0, 38, 127);">
                    <div class="box-text-inner">
                        <p>Tuyển kỹ sư test nè</p>
                    </div>
                    <!-- box-text-inner -->
                </div>
                <!-- box-text -->
                <div class="overlay"></div>
                <div class="overlay-info">
                </div>
              </div>
              </a> </div>
            <div class="item"><a href="https://demo.tamnguyen.vn/xkld2/tuyen-dung/thong-tin-tuyen-dung-khac/">
              <div class="box ">
                <img class="img-responsive" src="./assets/images/banner-slider/slide-img-8.jpg" width="1600" height="972" alt=""/>
                <!-- box-image -->
                <div class="box-text text-center dark" style="background-color: rgb(0, 38, 127);">
                    <div class="box-text-inner">
                        <p>Tuyển kỹ sư xây dựng</p>
                    </div>
                    <!-- box-text-inner -->
                </div>
                <!-- box-text -->
                <div class="overlay"></div>
                <div class="overlay-info">
                  
                </div>
              </div>
              </a> </div>
          </div>
        </div>
      </div>
      <!-- banner outer thumb end --> 
            </div>
            <!-- .section-content -->

            <style scope="scope">
                #section_1764246928 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }
            </style>
    </section>

    <section class="section gioi-thieu-section" id="section_311975215">
        <div class="bg section-bg fill bg-fill bg-loaded"></div>
      <div class="row row-small">
        <div class="col cot8 medium-8 small-12 large-8">
          <div class="col-inner">
              <div class="tabbed-content tab-panels">

        <!-- activities start -->
        <!-- <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="130">  -->
              <!-- Nav tabs -->
              <ul class="nav nav-simple nav-uppercase nav-size-normal nav-left" role="tablist">
                <li class="active tab has-icon"><a href="#gioithieu" role="tab" data-toggle="tab">Giới thiệu P-Techno</a></li>
                <li class="tab has-icon"><a href="#popular" role="tab" data-toggle="tab">Tuyển dụng kỹ sư mới nhất</a></li>
                <li class="tab has-icon"><a href="#recent" role="tab" data-toggle="tab">Du học</a></li>
                <li class="tab has-icon"><a href="#comments" role="tab" data-toggle="tab">Thủ tục - hồ sơ</a></li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Tab 0 -->
                <div class="tab-pane active" id="gioithieu">
                  <div class="gioi-thieu">
                    <h3 style="color: #c53030;">Bạn quan tâm tới điều gì ?</h3>
                    <div class="why-choose-us">
                        <ul>
                            <li>Bạn muốn đi <b>xuất khẩu lao động Nhật Bản</b> ?</li>
                            <li>Mong muốn tìm được một <b>công ty tư vấn uy tín</b> tại hà nội cũng như miền bắc ?</li>
                            <li><b>Thủ tục</b> <b>hồ sơ</b> đơn giản, tiện lợi ?</li>
                            <li>Được <b>thi tuyển</b> thường xuyên và liên tục ?</li>
                            <li>Đi nước ngoài để học hỏi, phát triển sự nghiệp?</li>
                        </ul>
                        <p>Vậy hãy liên hệ ngay với chúng tôi nhé!!!</p>
                        <h3 style="color: #c53030; margin-top: 10px;">Chúng tôi cam kết:</h3>
                        <ul>
                            <li>Công ty hợp tác trực tiếp với nghiệp đoàn bên Nhật (không qua công ty con), phong cách <b>chuyên nghiệp</b> và <b>tin cậy</b></li>
                            <li>Người lao động được làm giấy tờ, <b>thủ tục</b> nhanh chóng và đầy đủ</li>
                            <li>Người lao động được <b>đào tạo</b> bài bản, tay nghề cao</li>
                            <li>Đặc biệt <b>miễn giảm 100%</b> chi phí đào tạo cho <b>lao động đăng ký thi tuyển</b></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <!-- End tab 0  -->
                <!-- Tab 1 -->
                <div class="tab-pane" id="popular">
                  <div class="row large-columns-2 medium-columns-1 small-columns-1 row-small">
                      <div class="col post-item">
                      <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/top-5-cong-ty-xkld-nhat-ban-uy-tin-tai-tp-ho-chi-minh/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                                      <div class="box-image" style="width:26%;">
                              <div class="image-cover" style="padding-top:107%;">
                                <img width="300" height="191" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">  							  							  						</div>
                                          </div><!-- .box-image -->
                                    <div class="box-text text-left">
                          <div class="box-text-inner blog-post-inner">

                          
                                    <h5 class="post-title is-large ">Top 5 công ty XKLĐ Nhật Bản uy tín tại TP. Hồ Chí Minh</h5>
                                    <div class="is-divider"></div>
                                    <p class="from_the_blog_excerpt ">Công ty xuất khẩu lao động Nhật Bản tại TPHCM 2018 [...]					</p>
                                              
                          
                          
                          </div><!-- .box-text-inner -->
                          </div><!-- .box-text -->
                                  </div><!-- .box -->
                        </a><!-- .link -->
                      </div><!-- .col-inner -->
                    </div><!-- .col -->
                    <div class="col post-item">
                      <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/dieu-kien-di-xuat-khau-lao-dong-tai-nhat-ban-moi-nhat-2018/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                                      <div class="box-image" style="width:26%;">
                              <div class="image-cover" style="padding-top:107%;">
                                <img width="300" height="198" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3.jpg 480w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3.jpg 480w" sizes="(max-width: 300px) 100vw, 300px">  							  							  						</div>
                                          </div><!-- .box-image -->
                                    <div class="box-text text-left">
                          <div class="box-text-inner blog-post-inner">

                          
                                    <h5 class="post-title is-large ">Điều kiện đi xuất khẩu lao động tại Nhật Bản mới nhất 2018</h5>
                                    <div class="is-divider"></div>
                                    <p class="from_the_blog_excerpt ">Điều kiện để đi xuất khẩu lao động Nhật Bản rất [...]					</p>
                                              
                          
                          
                          </div><!-- .box-text-inner -->
                          </div><!-- .box-text -->
                                  </div><!-- .box -->
                        </a><!-- .link -->
                      </div><!-- .col-inner -->
                    </div><!-- .col -->
                    <div class="col post-item">
                      <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/thu-tuc-ho-so-xuat-khau-lao-dong-sang-nhat-ban/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                                      <div class="box-image" style="width:26%;">
                              <div class="image-cover" style="padding-top:107%;">
                                <img width="300" height="225" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">  							  							  						</div>
                                          </div><!-- .box-image -->
                                    <div class="box-text text-left">
                          <div class="box-text-inner blog-post-inner">

                          
                                    <h5 class="post-title is-large ">Thủ tục hồ sơ xuất khẩu lao động sang Nhật Bản</h5>
                                    <div class="is-divider"></div>
                                    <p class="from_the_blog_excerpt ">Trong các bài trước đã giới thiếu với các bạn về [...]					</p>
                                              
                          
                          
                          </div><!-- .box-text-inner -->
                          </div><!-- .box-text -->
                                  </div><!-- .box -->
                        </a><!-- .link -->
                      </div><!-- .col-inner -->
                    </div><!-- .col -->
                    <div class="col post-item">
                      <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/nghe-thuc-tap-sinh-dang-o-nhat-khuyen-lao-dong-trong-nuoc/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                                      <div class="box-image" style="width:26%;">
                              <div class="image-cover" style="padding-top:107%;">
                                <img width="300" height="188" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung.jpg 415w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung.jpg 415w" sizes="(max-width: 300px) 100vw, 300px">  							  							  						</div>
                                          </div><!-- .box-image -->
                                    <div class="box-text text-left">
                          <div class="box-text-inner blog-post-inner">

                          
                                    <h5 class="post-title is-large ">Nghe thực tập sinh đang ở Nhật khuyên lao động trong nước</h5>
                                    <div class="is-divider"></div>
                                    <p class="from_the_blog_excerpt ">Nghe lời khuyên của những thực tập sinh đang trực tiếp [...]					</p>
                                              
                          
                          
                          </div><!-- .box-text-inner -->
                          </div><!-- .box-text -->
                                  </div><!-- .box -->
                        </a><!-- .link -->
                      </div><!-- .col-inner -->
                    </div><!-- .col -->
                    <div class="col post-item">
                      <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/quy-trinh-di-xuat-khau-lao-dong-nhat-ban-chuan/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                                      <div class="box-image" style="width:26%;">
                              <div class="image-cover" style="padding-top:107%;">
                                <img width="300" height="225" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">  							  							  						</div>
                                          </div><!-- .box-image -->
                                    <div class="box-text text-left">
                          <div class="box-text-inner blog-post-inner">

                          
                                    <h5 class="post-title is-large ">Quy trình đi xuất khẩu lao động Nhật Bản – Chuẩn</h5>
                                    <div class="is-divider"></div>
                                    <p class="from_the_blog_excerpt ">Trong thời gian qua, đã có nhiều bạn đã liên tục [...]					</p>
                                              
                          
                          
                          </div><!-- .box-text-inner -->
                          </div><!-- .box-text -->
                                  </div><!-- .box -->
                        </a><!-- .link -->
                      </div><!-- .col-inner -->
                    </div><!-- .col -->
                    <div class="col post-item">
                      <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/muc-luong-xuat-khau-lao-dong-di-nhat-ban-hien-nay-bao-nhieu/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                                      <div class="box-image" style="width:26%;">
                              <div class="image-cover" style="padding-top:107%;">
                                <img width="300" height="176" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">  							  							  						</div>
                                          </div><!-- .box-image -->
                                    <div class="box-text text-left">
                          <div class="box-text-inner blog-post-inner">

                          
                                    <h5 class="post-title is-large ">Mức lương xuất khẩu lao động đi Nhật Bản hiện nay bao nhiêu?</h5>
                                    <div class="is-divider"></div>
                                    <p class="from_the_blog_excerpt ">mức lương xuất khẩu lao động nhật bản lương bao nhiêu [...]					</p>
                                              
                          
                          
                          </div><!-- .box-text-inner -->
                          </div><!-- .box-text -->
                                  </div><!-- .box -->
                        </a><!-- .link -->
                      </div><!-- .col-inner -->
                    </div><!-- .col -->
                </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane" id="recent">
                  <ul class="list-unstyled">
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/popular/pop-5.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/popular/pop-4.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/popular/pop-3.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/popular/pop-2.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/popular/pop-1.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <div class="text-danger sub-info">
                            <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                            <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                            <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                          </div>
                        </div>
                      </div>
                      </a> </li>
                  </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane" id="comments">
                  <div class="gioi-thieu">
                  <h3 style="color: #c53030;">Thủ tục – hồ sơ cần thiết</h3>
                  <div class="why-choose-us">
                    <p>1. Sơ yếu lý lịch ( Xác nhận của UBND xã, phường) 2 bản.</p>
                    <p>2. Hộ khẩu, CMND, Giấy khai sinh ( Sao y bản chính, chứng thực) mỗi loại 2 bản.</p>
                    <p>3. Các văn bằng, chứng chỉ ( Lưu ý: Yêu cầu trình độ văn hóa phải tốt nghiệp lớp 12 trở lên). Sao y bản chỉnh, chứng thực: 2 bản</p>
                    <p>
                        4. Xác nhận nhân sự ( Theo mẫu quy định, do Công an địa phương cấp, không được viết tay. Có xác nhận của UBND xã, phường nơi thực tập sinh cư trú) yêu cầu dán ảnh 4*6 vào ô dán ảnh, có đóng dấu
                        giáp lai vào bảnh: 1 bản
                    </p>
                    <p>5. Xác nhận tình trạng hôn nhân (nếu đã kết hôn) có xác nhận UBND xã, phường Trường hợp đã kết hôn thì photo giấy đăng ký kết hôn ( chứng thực). 1 bản</p>
                    <p>6. Khám sức khỏe tổng thể tại BV Giao thông vận tải TW ( Liên hệ với CBTD để được hướng dẫn chi tiết).</p>
                    </div>
                  </div>
                </div>
                <!-- End Tab 3 -->
              </div>
            </div>
            <!-- activities end --> 
              </div></div>
      <!-- end cột 1 -->
      <!-- Cột 2 -->
      <div class="col cot4 medium-4 small-12 large-4">
        <div class="col-inner">
            <div class="thong-tin-lien-he">
                <div class="hotline1"><span class="fa fa-phone"></span> Hotline: 0848.172.333</div>
            </div>
            <div class="gap-element" style="display: block; height: auto; padding-top: 10px;"></div>

            <div class="icon-box featured-box icon-box-left text-left">
                <div class="icon-box-img" style="width: 69px;">
                    <div class="icon">
                        <div class="icon-inner">
                            <img
                                width="240"
                                height="240"
                                src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/c8ef7a74772dbac06a97220aba5f9a01.jpg"
                                class="attachment-medium size-medium"
                                alt=""
                                decoding="async"
                                loading="lazy"
                                srcset="
                                    https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/c8ef7a74772dbac06a97220aba5f9a01.jpg         240w,
                                    https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/c8ef7a74772dbac06a97220aba5f9a01-150x150.jpg 150w
                                "
                                sizes="(max-width: 240px) 100vw, 240px"
                            />
                        </div>
                    </div>
                </div>
                <div class="icon-box-text last-reset">
                    <p>
                        <span style="color: #ff6600;"><strong>Mr. Nam (Website cho doanh nghiệp)</strong></span><br />
                        <strong>Hotline:</strong> 0848.172.333<br />
                        <strong>Email:</strong> demo@gmail.com
                    </p>
                </div>
            </div>
            <!-- .icon-box -->

            <div class="gap-element" style="display: block; height: auto; padding-top: 10px;"></div>
            <p></p>
            <center>
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkimnam.nguyen.52493&tabs=timeline&width=350&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="350"
                    height="300"
                    style="border: none; overflow: hidden;"
                    scrolling="no"
                    frameborder="0"
                    allowtransparency="true"
                    allow="encrypted-media"
                ></iframe>
            </center>
            <p></p>
        </div>
    </div>
    <!-- End cột 2 -->
              </div>
    </section>
  
<section class="section cau-hoi" id="section_177981241">
  <div class="bg section-bg fill bg-fill bg-loaded"></div>
  <!-- .section-bg -->
  <div class="section-content">
    <div class="row row-small" id="row-842490568">
      <div class="col cot8 medium-8 small-12 large-8">
        <div class="col-inner">
          <div class="title">
            <span class="fa fa-pencil"></span>
            <a href="#">
              <p></p>
              <h3>Câu hỏi thường gặp khi đi làm tại Nhật Bản</h3>
            </a>
            <p>
              <a href="#"></a>
            </p>
          </div>
          <div class="row row-divided" id="row-661883585">
            <div class="col cot2 medium-6 small-12 large-6">
              <div class="col-inner">
                <div class="row large-columns-1 medium-columns-1 small-columns-1 row-xsmall">
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/nghe-thuc-tap-sinh-dang-o-nhat-khuyen-lao-dong-trong-nuoc/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                          <div class="box-image" style="width:20%;">
                            <div class="image-cover" style="padding-top:77%;">
                              <img width="300" height="188" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung.jpg 415w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung.jpg 415w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Nghe thực tập sinh đang ở Nhật khuyên lao động trong nước</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/quy-trinh-di-xuat-khau-lao-dong-nhat-ban-chuan/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                          <div class="box-image" style="width:20%;">
                            <div class="image-cover" style="padding-top:77%;">
                              <img width="300" height="225" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Quy trình đi xuất khẩu lao động Nhật Bản – Chuẩn</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/muc-luong-xuat-khau-lao-dong-di-nhat-ban-hien-nay-bao-nhieu/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                          <div class="box-image" style="width:20%;">
                            <div class="image-cover" style="padding-top:77%;">
                              <img width="300" height="176" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Mức lương xuất khẩu lao động đi Nhật Bản hiện nay bao nhiêu?</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/tuyen-18-nam-co-kinh-nghiem-han-xi-di-nhat-ban/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                          <div class="box-image" style="width:20%;">
                            <div class="image-cover" style="padding-top:77%;">
                              <img width="300" height="197" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post9-300x197.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post9-300x197.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post9-300x197.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post9.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post9-300x197.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post9.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Tuyển 18 nam có kinh nghiệm hàn xì đi Nhật Bản</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/tuyen-15-nu-lam-may-mac-o-osaka-luong-hap-dan/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                          <div class="box-image" style="width:20%;">
                            <div class="image-cover" style="padding-top:77%;">
                              <img width="300" height="197" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post8-1-300x197.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post8-1-300x197.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post8-1-300x197.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post8-1.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post8-1-300x197.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post8-1.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Tuyển 15 nữ làm may mặc ở Osaka lương hấp dẫn</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/tuyen-25-nu-lam-may-quan-ao-tre-em-tai-kyoto/" class="plain">
                        <div class="box box-vertical box-text-middle box-blog-post has-hover">
                          <div class="box-image" style="width:20%;">
                            <div class="image-cover" style="padding-top:77%;">
                              <img width="300" height="191" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Tuyển 25 nữ làm may quần áo trẻ em tại Kyoto</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                </div>
              </div>
            </div>
            <div class="col cot6 medium-6 small-12 large-6">
              <div class="col-inner">
                <h3 style="text-align: center;">Đăng ký ứng tuyển Online</h3>
                <p>Vui lòng nhập đầy đủ thông tin vào biểu mẫu bên dưới và gửi liên hệ cho chúng tôi. Nhân viên sẽ gọi điện lại tư vấn cho bạn sau 5 phút!</p>
                <div class="wpcf7 js" id="wpcf7-f276-p2-o1" lang="vi" dir="ltr">
                  <div class="screen-reader-response">
                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                    <ul></ul>
                  </div>
                  <form action="/xkld2/#wpcf7-f276-p2-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                    <div style="display: none;">
                      <input type="hidden" name="_wpcf7" value="276">
                      <input type="hidden" name="_wpcf7_version" value="5.7.2">
                      <input type="hidden" name="_wpcf7_locale" value="vi">
                      <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f276-p2-o1">
                      <input type="hidden" name="_wpcf7_container_post" value="2">
                      <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                    </div>
                    <p>
                      <span class="wpcf7-form-control-wrap" data-name="text-967">
                        <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ và tên..." value="" type="text" name="text-967">
                      </span>
                      <br>
                      <span class="wpcf7-form-control-wrap" data-name="text-128">
                        <input size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" value="Địa chỉ" type="text" name="text-128">
                      </span>
                      <br>
                      <span class="wpcf7-form-control-wrap" data-name="tel-584">
                        <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Số điện thoại..." value="" type="tel" name="tel-584">
                      </span>
                      <br>
                      <span class="wpcf7-form-control-wrap" data-name="email-801">
                        <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Địa chỉ email..." value="" type="email" name="email-801">
                      </span>
                      <br>
                      <span class="wpcf7-form-control-wrap" data-name="textarea-137">
                        <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Thông tin cá nhân..." name="textarea-137"></textarea>
                      </span>
                      <br>
                      <input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="Gửi đăng ký">
                      <span class="wpcf7-spinner"></span>
                    </p>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                  </form>
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
              <li class="tab has-icon active">
                <a href="#tab_quytrinh" role="tab" data-toggle="tab">
                  <span>Quy trình - thủ tục</span>
                </a>
              </li>
              <li class="tab has-icon">
                <a href="#tab_duhoc" role="tab" data-toggle="tab">
                  <span>Du học Nhật Bản</span>
                </a>
              </li>
              <li class="tab has-icon">
                <a href="#tab_thethao" role="tab" data-toggle="tab">
                  <span>Test cơ sở dữ liệu</span>
                </a>
              </li>
            </ul>
            <div class="tab-panels">
              <div class="panel entry-content active" id="tab_quytrinh">
                <div class="row large-columns-2 medium-columns-1 small-columns-1 row-small">
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/top-5-cong-ty-xkld-nhat-ban-uy-tin-tai-tp-ho-chi-minh/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:0%;">
                              <img width="300" height="191" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Top 5 công ty XKLĐ Nhật Bản uy tín tại TP. Hồ Chí Minh</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/dieu-kien-di-xuat-khau-lao-dong-tai-nhat-ban-moi-nhat-2018/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:0%;">
                              <img width="300" height="198" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3.jpg 480w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3.jpg 480w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Điều kiện đi xuất khẩu lao động tại Nhật Bản mới nhất 2018</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/thu-tuc-ho-so-xuat-khau-lao-dong-sang-nhat-ban/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:0%;">
                              <img width="300" height="225" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Thủ tục hồ sơ xuất khẩu lao động sang Nhật Bản</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/nghe-thuc-tap-sinh-dang-o-nhat-khuyen-lao-dong-trong-nuoc/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:0%;">
                              <img width="300" height="188" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung.jpg 415w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung.jpg 415w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Nghe thực tập sinh đang ở Nhật khuyên lao động trong nước</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/quy-trinh-di-xuat-khau-lao-dong-nhat-ban-chuan/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:0%;">
                              <img width="300" height="225" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Quy trình đi xuất khẩu lao động Nhật Bản – Chuẩn</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/muc-luong-xuat-khau-lao-dong-di-nhat-ban-hien-nay-bao-nhieu/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:0%;">
                              <img width="300" height="176" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Mức lương xuất khẩu lao động đi Nhật Bản hiện nay bao nhiêu?</h5>
                              <div class="post-meta is-small op-8">18/05/2018</div>
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
                </div>
              </div>
              <div class="panel entry-content" id="tab_duhoc">
                <div class="gap-element" style="display:block; height:auto; padding-top:10px"></div>
                <div class="row large-columns-2 medium-columns-1 small-columns-1 row-small">
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/top-5-cong-ty-xkld-nhat-ban-uy-tin-tai-tp-ho-chi-minh/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:56.25%;">
                              <img width="300" height="191" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7-300x191.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post7.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Top 5 công ty XKLĐ Nhật Bản uy tín tại TP. Hồ Chí Minh</h5>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/dieu-kien-di-xuat-khau-lao-dong-tai-nhat-ban-moi-nhat-2018/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:56.25%;">
                              <img width="300" height="198" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3.jpg 480w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3-300x198.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/duc-nhua-lao-dong-nhat-ban3.jpg 480w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Điều kiện đi xuất khẩu lao động tại Nhật Bản mới nhất 2018</h5>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/thu-tuc-ho-so-xuat-khau-lao-dong-sang-nhat-ban/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:56.25%;">
                              <img width="300" height="225" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/posst5.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Thủ tục hồ sơ xuất khẩu lao động sang Nhật Bản</h5>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/nghe-thuc-tap-sinh-dang-o-nhat-khuyen-lao-dong-trong-nuoc/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:56.25%;">
                              <img width="300" height="188" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung.jpg 415w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung-300x188.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/xuat-khau-lao-dong-nhat-ban-xay-dung.jpg 415w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Nghe thực tập sinh đang ở Nhật khuyên lao động trong nước</h5>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/quy-trinh-di-xuat-khau-lao-dong-nhat-ban-chuan/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:56.25%;">
                              <img width="300" height="225" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12-300x225.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/post12.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Quy trình đi xuất khẩu lao động Nhật Bản – Chuẩn</h5>
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
                  <div class="col post-item">
                    <div class="col-inner">
                      <a href="https://demo.tamnguyen.vn/xkld2/muc-luong-xuat-khau-lao-dong-di-nhat-ban-hien-nay-bao-nhieu/" class="plain">
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:56.25%;">
                              <img width="300" height="176" src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg" data-src="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" decoding="async" loading="lazy" srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1.jpg 400w" data-srcset="https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1-300x176.jpg 300w, https://demo.tamnguyen.vn/xkld2/wp-content/uploads/2018/05/tha-mac-1.jpg 400w" sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large ">Mức lương xuất khẩu lao động đi Nhật Bản hiện nay bao nhiêu?</h5>
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
                </div>
              </div>
              <!-- End tab du học  -->
               <!-- tab the thao  -->
               <div class="panel entry-content" id="tab_thethao">
                <div class="row large-columns-2 medium-columns-1 small-columns-1 row-small">
                <?php
                  $sql = "SELECT * FROM posts WHERE category_id=1 ";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $idtin = $row['id'];
                    $tieude = $row['title'];
                    $category_id = $row['category_id'];
                    $image = $row['image'];
                ?>
                  <div class="col post-item">
                    <div class="col-inner">
                      <?php echo"
                      <a href='post-item-details.php?id=$idtin&category_id=$category_id' class='plain'>"
                      ?>
                        <div class="box box-normal box-text-bottom box-blog-post has-hover">
                          <div class="box-image">
                            <div class="image-cover" style="padding-top:56.25%;">
                              <?php echo "  
                            <img width='300' height='176' src='$image' 
                                                          data-src='$image' 
                                                          class='attachment-medium size-medium wp-post-image lazy-load-active' alt='' 
                                                          decoding='async' 
                                                          loading='lazy' 
                                                          srcset='$image 300w, 
                                                                  $image 400w' 
                                                          data-srcset='$image 300w, 
                                                                      $image 400w' 
                                                          sizes='(max-width: 300px) 100vw, 300px'>"
                            ?>
                              
                            </div>
                          </div>
                          <!-- .box-image -->
                          <div class="box-text text-left">
                            <div class="box-text-inner blog-post-inner">
                              <h5 class="post-title is-large "><?php echo"$tieude"?></h5>
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
                   <?php } ?>
                
                </div>
              </div>
              <!-- end tab the thao  -->
            </div>
          </div>
        </div>
      </div>
      <style scope="scope"></style>
    </div>
  </div>
  <!-- .section-content -->
  <style scope="scope">
    #section_177981241 {
      padding-top: 30px;
      padding-bottom: 30px;
    }
  </style>
</section>
    </div>
</main>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


<?php  
include_once('./master_layout/footer.php') 
?>