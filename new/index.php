<?php
include_once('./../master_layout/Database.php') ;
include_once('./../master_layout/Function.php') ;
$db= new Database();

    // Post tuyển dụng
    $sql2 = "SELECT * FROM posts WHERE category_id = 3 ORDER BY ID DESC LIMIT 6";
    $tuyenDung = $db->fetchsql($sql2);
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
  <title>Jinsung Press Co., Ltd.</title>
  <meta name="Author" content="Jinsung Press Industrial" />
  <meta name="title" content="Jinsung Press Doanh nghiệp sản xuất gia công ..." />
  <meta name="description" content="Technical outerwear manufacturer, Gore-Tex garment manufacturer, Motorcycle Jacket, Outdoor garment manufacturer, OEM jacket manufacturer, Premium workwear, Rainwear manufacturer" />
  <meta name="subject" content="Technical outerwear, Gore-Tex garment, Outdoor garment, Motorcycle Jacket, Premium workwear, OEM jacket, Rainwear, manufacturer" />
  <meta name="keywords" content="Technical outerwear manufacturer, Gore-Tex garment, Motorcycle Jacket, Outdoor garment, OEM jacket manufacturer, Premium workwear, Rainwear manufacturer" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Jinsung Press Industrial_Technical outerwear manufacturer" />
  <meta property="og:description" content="Technical outerwear manufacturer, Gore-Tex garment manufacturer, Motorcycle Jacket, Outdoor garment manufacturer, OEM jacket manufacturer, Premium workwear, Rainwear manufacturer" />
  <meta property="og:image" content="
		<?php echo base_url()?>new/images/vis1.jpg" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap">
  <link rel="stylesheet" href="
				<?php echo base_url()?>new/css/common.css" />
  <link rel="stylesheet" href="
					<?php echo base_url()?>new/css/global.css" />
  <link rel="stylesheet" href="http://stela6516.cafe24.com/mineit/btype/css/slick.css">
  <link rel="stylesheet" href="http://stela6516.cafe24.com/mineit/btype/css/swiper.css">

  <script src="<?php echo base_url()?>new/js/jquery.min.js">
  </script>
  <script src="<?php echo base_url()?>new/js/global.js">
  </script>
  <script src="http://stela6516.cafe24.com/mineit/btype/js/swiper.js"></script>
  <script src="http://stela6516.cafe24.com/mineit/btype/js/slick.js"></script>
  <!--[if lt IE 9]>
							<script src="
								<?php echo base_url()?>new/js/html5.js">
							</script>
							<![endif]-->
</head>
<body>
  <div id="wrap">
    <header id="header">
      <div class="inner">
        <h1 class="logo">
          <a href="<?php echo base_url()?>" class="_go">Jinsung Press Co., Ltd.</a>
        </h1>
        <button type="button" class="mnu" id="mchk">
          <i class="axi axi-menu"></i>
        </button>
        <nav id="nav">
          <ul class="gnb">
            <li style="position:absolute;left:-9999px;top:0;"></li>
            <li>
              <a class="_go" href="#ah">ABOUT US</a>
            </li>
            <li>
              <a class="_go" href="#pdt2">PRODUCT</a>
            </li>
            <li>
              <a class="_go" href="#pdt3">MANUFACTURING</a>
            </li>
            <li>
              <a class="_go" href="#service">VISION</a>
            </li>
            <li>
              <a class="_go" href="#tuyendung">RECRUITMENT</a>
            </li>
            <!-- <li>
              <a class="_go" href="#fac">CHI NHÁNH</a>
            </li> -->
            <!-- <li>
              <a class="_go" href="#respon">RESPONSIBILITY</a>
            </li> -->
            <li>
              <a class="_go" href="#contact">CONTACT</a>
            </li>
          </ul>
          <a href="<?php echo base_url()?>" class="link" target="_blank">Jinsung Press</a>
        </nav>
      </div>
    </header>
    <div id="vis" class="_sc">
      <div class="roll">
        <div class="vis vis1">
          <dl>
            <dt>SÁNG TẠO</dt>
            <dd> Không bao giờ hài lòng với hiện tại, Không sợ thay đổi. <br>Chúng tôi đang ngày càng hoàn thiện, tiến lên vươn tầm ra Thế Giới, trở thành công ty dẫn đầu trong ngành gia công XXXX. <br>Công nghệ tiên tiến và cao cấp nhất cùng phương pháp tiếp cận hướng đến khách hàng </dd>
          </dl>
        </div>
        <!-- <div class="vis vis2">
          <dl>
            <dt>DESIGN</dt>
            <dd> Relentless pursuit of the cutting-edge style with the philosophy of 'Attention-to-Detail' <br>and artistic mind in order to achieve the perfect integration of <br>comfort, functionality and the style into every product </dd>
          </dl>
        </div> -->
        <div class="vis vis3">
          <dl>
            <dt>TAY NGHỀ THỦ CÔNG</dt>
            <dd> Nhiều thập kỷ cống hiến cho nghề thủ công, sự đổi mới và tinh thần chiến thắng<br> đã đưa Jinsung Press Sports trở thành một trong những nhà sản xuất mũ bảo hiểm xe máy hàng đầu và được yêu thích trên thế giới
            </dd>
          </dl>
        </div>
      </div>
      <span class="__mouse">SCROLL DOWN</span>
    </div>
    <div id="ah" class="_sc">
      <div class="inner">
        <div class="about">
          <h3 data-aos="fade-up" data-aos-delay="0">GIỚI THIỆU</h3>
          <!--<h4 data-aos="fade-up" data-aos-delay="0">
					40 years of dedication<br>
					to craftsmanship<br>
					and innovation
				</h4>-->
          <div class="txt" data-aos="fade-up" data-aos-delay="0"> Trong nhiều thập kỷ qua, Công ty TNHH Jinsung Press Sports (Jinsung Press Sports) đã dành vô số giờ phát triển những mẫu mũ bảo hiểm xe máy hàng đầu trong ngành, hợp tác cùng những nhà thiết kế tài năng nhất thế giới và các kỹ sư bậc thầy tại trụ sở chính ở Seoul, Hàn Quốc.<br>
Jinsung Press Sports không ngừng tìm kiếm những cơ hội mới, đồng thời cam kết mang đến sự hài lòng cao nhất cho khách hàng với sự đảm bảo chất lượng không khoan nhượng. Jinsung Press Sports luôn duy trì phương châm lấy khách hàng làm trung tâm trong mọi hoạt động kinh doanh hàng ngày. "Luôn Lấy Khách Hàng Làm Trọng Tâm" là từ khóa của Jinsung Press Sports và chúng tôi không ngần ngại vượt qua mọi giới hạn để biến điều đó thành hiện thực.<br>
Chúng tôi đổi mới và dẫn đầu sự phát triển của ngành công nghiệp mũ bảo hiểm xe máy.
          </div>
        </div>
        <div class="history">
          <div class="img">
            <img src="<?php echo base_url()?>new/images/Jinsung_Press-removebg-preview_1.png" alt="" style="max-width: 50% !important;">
          </div>
          <h3 data-aos="fade-up" data-aos-delay="0">QUÁ TRÌNH PHÁT TRIỂN</h3>
          <!--<h4 data-aos="fade-up" data-aos-delay="0">
					Rooted in a 40 year history of<br>
					developing and manufacturing<br>
					high performance protective outwear,
				</h4><div class="txt" data-aos="fade-up" data-aos-delay="0">
					Jinsung Press Industrial launched Jinsung Press Sports in 2003 where the tradition of innovation and craftsmanship continues to present day.
				</div>-->
          <div class="btn" data-aos="fade-up" data-aos-delay="0">
            <button type="button" class="prev">prev</button>
            <button type="button" class="next">next</button>
          </div>
          <div class="area _scr" data-aos="fade-up" data-aos-delay="0">
            <div class="roll">
              <div class="box">
                <dl>
                  <dt>2024 ~</dt>
                  <dd> Vietnam Company <br> Expansion Move
                </dl>
              </div>
              <div class="box">
                <dl>
                  <dt>2024</dt>
                  <dd> January 2024 <br> Hanoi subsidiary <br> expansion and relocation </dd>
                </dl>
              </div>
              <div class="box">
                <dl>
                  <dt>2016</dt>
                  <dd> Established Jinsung Press <br>in Ho Chi Minh Company </dd>
                </dl>
              </div>
              <div class="box">
                <dl>
                  <dt>2011</dt>
                  <dd> Established Jinsung Press <br>in Hanoi Company </dd>
                </dl>
              </div>
              <div class="box">
                <dl>
                  <dt>1999</dt>
                  <dd> Established a subsidiary <br>in China </dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
      <span class="__mouse black">SCROLL DOWN</span>
    </div>
    <div id="pdt2" class="_sc"></div>
    <section class="mainVisual_wrap">
      <style>
          
          .image-grid {
              display: grid;
              grid-template-columns: repeat(2, 1fr);
              gap: 20px;
              padding: 20px;
          }

          .image-item {
              position: relative;
              overflow: hidden;
              border-radius: 10px;
              box-shadow: 0 4px 8px rgba(0,0,0,0.1);
              transition: transform 0.3s ease;
          }

          .image-item:hover {
              transform: translateY(-5px);
          }

          .image-item img {
              width: 100%;
              /* height: 400px; */
              object-fit: cover;
              display: block;
              transition: transform 0.3s ease;
          }

          .image-item:hover img {
              transform: scale(1.05);
          }

          .image-overlay {
              position: absolute;
              bottom: 0;
              left: 0;
              right: 0;
              background: linear-gradient(transparent, rgba(0,0,0,0.7));
              padding: 20px;
              color: white;
              opacity: 0;
              transition: opacity 0.3s ease;
          }

          .image-item:hover .image-overlay {
              opacity: 1;
          }

          @media (max-width: 768px) {
              .image-grid {
                  grid-template-columns: 1fr;
              }
          }
      </style>
      <div class="image-grid">
          <div class="image-item">
              <img src="<?php echo base_url()?>new/images/gioithieu_1.png" alt="main1">
              <div class="image-overlay">
                  <h3>Main Product </h3>
              </div>
          </div>
          <div class="image-item">
              <img src="<?php echo base_url()?>new/images/gioithieu_2.png" alt="main2">
              <div class="image-overlay">
                  <h3>Main Product </h3>
              </div>
          </div>
      </div>
    </section>
    
    <div id="pdt3" class="_sc">
      <div id="pdt4">
        <div class="inner">
          <div class="__tit">
            <h3 data-aos="fade-up" data-aos-delay="0" style="margin-top: 50px;">Organization</h3>
            <!-- <p data-aos="fade-up" data-aos-delay="200">Jinsung Press cung cấp dịch vụ tuyệt vời và chất lượng cao<br> để đảm bảo sự hợp tác thành công với khách hàng của mình.</p> -->
          </div>
          <div class="area">
            <div class="box1" data-aos="fade-right" data-aos-delay="0">
              <div class="in">
                <div class="img">
                  <img src="<?php echo base_url()?>new/images/tochucbomay.png" alt="">
                </div>
                <dl>
                  <dd></dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="inner">
        <div class="__tit">
          <h3 data-aos="" data-aos-delay="0" style="">Manufacturing</h3>
          <!-- <p data-aos="fade-up" data-aos-delay="200">Jinsung Press cung cấp dịch vụ tuyệt vời và chất lượng cao<br> để đảm bảo sự hợp tác thành công với khách hàng của mình.</p> -->
        </div>
        <div class="area" style="margin-top: 25px;">
          <div class="image-grid">
              <div class="image-item">
                  <img src="<?php echo base_url()?>new/images/tochuc1.png" alt="main3">
                  <div class="image-overlay">
                      <h3>Factory Layout</h3>
                  </div>
              </div>
              <div class="image-item">
                  <img src="<?php echo base_url()?>new/images/tochuc2.png" alt="main4">
                  <div class="image-overlay">
                      <h3>Process Facility & Capa status</h3>
                  </div>
              </div>
          </div>
          <div class="image-grid">
              <div class="image-item">
                  <img src="<?php echo base_url()?>new/images/tochuc3.png" alt="main5">
                  <div class="image-overlay">
                      <h3>Features</h3>
                  </div>
              </div>
              <div class="image-item">
                  <img src="<?php echo base_url()?>new/images/tochuc4.png" alt="main6">
                  <div class="image-overlay">
                      <h3>Process</h3>
                  </div>
              </div>
          </div>
        </div>
      </div>
      
      <span class="__mouse black">SCROLL DOWN</span>
    </div>
    
    <div id="service" class="_sc">
      <div class="inner">
        <div class="__tit">
          <h3 data-aos="fade-up" data-aos-delay="0">Major Customer Information</h3>
          <!-- <p data-aos="fade-up" data-aos-delay="200">Jinsung Press cung cấp dịch vụ tuyệt vời và chất lượng cao<br> để đảm bảo sự hợp tác thành công với khách hàng của mình.</p> -->
        </div>
        <div class="area">
          <div class="box" data-aos="fade-right" data-aos-delay="0">
            <div class="in">
              <div class="img">
                <img src="<?php echo base_url()?>new/images/doitac1.jpg" alt="">
              </div>
              <dl>
                <dt>KIDO Sports</dt>
                <dd> Giới thiệu đôi nét về khách hàng 1</dd>
              </dl>
            </div>
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="0">
            <div class="in">
              <div class="img">
                <img src="<?php echo base_url()?>new/images/doitac2.jpg" alt="">
              </div>
              <dl>
                <dt>TAEKWANG</dt>
                <dd> Giới thiệu đôi nét về khách hàng 2 </dd>
              </dl>
            </div>
          </div>
          <div class="box" data-aos="fade-left" data-aos-delay="0">
            <div class="in">
              <div class="img">
                <img src="<?php echo base_url()?>new/images/doitac3.jpg" alt="">
              </div>
              <dl>
                <dt>HYUN JIN CORPORATION</dt>
                <dd> Giới thiệu đôi nét về khách hàng 3</dd>
              </dl>
            </div>
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="0">
            <div class="in">
              <div class="img">
                <img src="<?php echo base_url()?>new/images/doitac4.jpg" alt="">
              </div>
              <dl>
                <dt>JUST DO IT</dt>
                <dd> Giới thiệu đôi nét về khách hàng 4</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
      <div class="inner">
        <div class="__tit">
          <h3 data-aos="fade-up" data-aos-delay="0" style="margin-top: 50px;">Vision</h3>
          <!-- <p data-aos="fade-up" data-aos-delay="200">Jinsung Press cung cấp dịch vụ tuyệt vời và chất lượng cao<br> để đảm bảo sự hợp tác thành công với khách hàng của mình.</p> -->
        </div>
        <div class="area">
          <div class="box1" data-aos="fade-right" data-aos-delay="0">
            <div class="in">
              <div class="img">
                <img src="<?php echo base_url()?>new/images/vision1.png" alt="">
              </div>
              <dl>
                <dd></dd>
              </dl>
            </div>
          </div>
          <div class="box1" data-aos="fade-right" data-aos-delay="0">
            <div class="in">
              <div class="img">
                <img src="<?php echo base_url()?>new/images/vision2.png" alt="">
              </div>
              <dl>
                <dd></dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
      <span class="__mouse black">SCROLL DOWN</span>
    </div>
    <div id="tuyendung" class="_sc">
      <div class="inner">
        <div class="__tit">
          <h3 data-aos="fade-up" data-aos-delay="0">TIN TUYỂN DỤNG</h3>
          <!-- <p data-aos="fade-up" data-aos-delay="200">Jinsung Press cung cấp dịch vụ tuyệt vời và chất lượng cao<br> để đảm bảo sự hợp tác thành công với khách hàng của mình.</p> -->
        </div>
        <div class="area">
        <?php foreach($tuyenDung as $item) :?>
          <div class="box" data-aos="fade-right" data-aos-delay="0">
            <div class="in">
              <div class="img">
                <img src="<?php echo base_url() ?>image/<?php echo $item['image']?>" alt="">
              </div>
              <dl>
                <dt><?php echo $item['title']?></dt>
                <dd><?php $content = catChuoiCoNghia($item['content'], 350);
                  echo $content?></dd>
              </dl>
            </div>
          </div>
          <?php endforeach ?>
          <!-- <div class="box" data-aos="fade-up" data-aos-delay="0">
            <div class="in">
              <div class="img">
                <img src="<?php echo base_url()?>new/images/rd.jpg" alt="">
              </div>
              <dl>
                <dt>R&amp;D</dt>
                <dd> Mọi thứ bắt đầu từ đây, và được thúc đẩy bởi một sự ám ảnh đơn giản: "biến nó thành hiện thực!" Đón nhận thử thách, không bao giờ hài lòng với hiện tại mà luôn phấn đấu để tiến thêm một bước nữa. Đó không chỉ là triết lý, mà là cách sống của chúng tôi. </dd>
              </dl>
            </div>
          </div>
          <div class="box" data-aos="fade-left" data-aos-delay="0">
            <div class="in">
              <div class="img">
                <img src="<?php echo base_url()?>new/images/at.jpg" alt="">
              </div>
              <dl>
                <dt>CHỨNG NHẬN AN TOÀN</dt>
                <dd> Tầm nhìn của chúng tôi là không ai phải bị thương nặng hoặc thiệt mạng trong các chuyến đi xe máy.<br> Jinsung Press đặt vấn đề "An Toàn" lên hàng đầu. Chúng tôi thúc đẩy các kỹ thuật viên có kinh nghiệm làm việc hết sức mình và chỉ sử dụng các thiết bị kiểm tra đã được phê duyệt chính thức để đảm bảo rằng mỗi chiếc mũ bảo hiểm được sản xuất đều vượt qua các yêu cầu chứng nhận an toàn (DOT, ECE hoặc Snell) của từng thị trường mục tiêu. </dd>
              </dl>
            </div>
          </div> -->
        </div>
      </div>
      <span class="__mouse black">SCROLL DOWN</span>
    </div>
    <!-- <div id="respon" class="_sc">
      <div class="inner">
        <div class="__tit">
          <h3 data-aos="fade-up" data-aos-delay="0">TRÁCH NHIỆM</h3>
          <p data-aos="fade-up" data-aos-delay="200"> Jinsung Press cam kết thực hiện các trách nhiệm xã hội của mình để xã hội, môi trường và kinh doanh có thể tồn tại song song.</p>
        </div>
        <div class="area">
          <div class="box" data-aos="fade-up" data-aos-delay="0">
            <div class="img">
              <img src="<?php echo base_url()?>new/images/ld1.jpg" alt="">
            </div>
            <div class="info">
              <dl>
                <dt>NHÂN VIÊN</dt>
                <dd> Jinsung Press chú trọng đến việc tạo ra môi trường làm việc an toàn và công bằng cho tất cả nhân viên. Chúng tôi cam kết tôn trọng quyền lợi của người lao động và thúc đẩy sự phát triển cá nhân và nghề nghiệp trong một không gian làm việc tích cực và hợp tác.  </dd>
              </dl>
            </div>
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="0">
            <div class="img">
              <img src="<?php echo base_url()?>new/images/respon2.jpg" alt="">
            </div>
            <div class="info">
              <dl>
                <dt>BẢO VỆ MÔI TRƯỜNG</dt>
                <dd> Jinsung Press hiểu rõ tầm quan trọng của tính bền vững môi trường.<br> Chúng tôi khẳng định sự khác biệt của mình bằng cách vận hành một hệ thống giảm thiểu tác động đến môi trường và tự hào về cam kết bảo vệ trái đất. </dd>
              </dl>
            </div>
          </div>
          <div class="box" data-aos="fade-up" data-aos-delay="0">
            <div class="img">
              <img src="<?php echo base_url()?>new/images/respon3.jpg" alt="">
            </div>
            <div class="info">
              <dl>
                <dt>CÔNG TÁC XÃ HỘI</dt>
                <dd> Jinsung Press quan tâm đến các cộng đồng xung quanh nơi làm việc của chúng tôi. Những cộng đồng này là một phần không thể tách rời trong cuộc sống của công nhân và gia đình họ. Chúng tôi vận hành các nhà máy ở những khu vực đang phát triển và đóng góp vào sự thịnh vượng và bền vững của nhiều thị trấn và thành phố xung quanh. </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div id="contact" class="_sc">
      
      <div class="inner">
        <div class="__tit">
          <h3 data-aos="fade-up" data-aos-delay="0">VIET NAM FACTORY</h3>
        </div>
        <div class="area">
          <div class="loc" data-aos="fade-up" data-aos-delay="0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d200241.3402162337!2d105.69708410668568!3d21.162080048336264!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134efe7e2facc5f%3A0x47b7753cad27669b!2sC%C3%B4ng%20Ty%20Tnhh%20Kim%20Quy!5e0!3m2!1svi!2sjp!4v1733216754200!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="info" data-aos="fade-up" data-aos-delay="0">
            <div class="wrap">
              <dl>
                <dt>HANOI (VINH YEN)</dt>
                <dd>Add: Số 2 , Hoàng Hoa Thám , Tổ Bắc Sơn , Phường Đồng Tâm , TP Vĩnh Yên , Tỉnh Vĩnh Phúc</dd>
              </dl>
              <dl>
                <dt>Manager Head of the Corporation:</dt>
  							<dd>Lee jae kyoung: (+84) 33 697 3400</dd>
              </dl>
              <dl>
                <dt>Viet nam Department :</dt>
                <dd>Ms Mai: (+84) 36 3395 381</dd>
              </dl>
              <dl>
                <dt>E-MAIL</dt>
                <dd>Jinsunginfo@Jinsungress.co.kr</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="area">
          <div class="loc" data-aos="fade-up" data-aos-delay="0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501624.6524127424!2d107.05672960833789!3d10.815704977542513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d9f425d01c8f%3A0x655d9dac371831ba!2sC%C3%94NG%20TY%20TNHH%20JIN%20SUNG%20PRESS%20(JIN%20SUNG%20PRESS%20CO.%2C%20LTD)!5e0!3m2!1svi!2sjp!4v1733216543011!5m2!1svi!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="info" data-aos="fade-up" data-aos-delay="0">
            <div class="wrap">
              <dl>
                <dt>LONG THANH (HO CHI MINH)</dt>
                <dd>Add: Đường số 10, khu công nghiệp Long Thành, xã Tam An, Huyện Long Thành, TỈnh Đồng Nai</dd>
              </dl>
              <dl>
                <dt>Manager</dt>
  							<dd>President: Cho ki young (+84) 33 697 3400</dd>
              </dl>
              <dl>
                <dt>Head of the Corporation :</dt>
                <dd>Ryu dong hee (+84) 86 881 7339</dd>
              </dl>
              <dl>
                <dt>E-MAIL</dt>
                <dd>Jinsunginfo@Jinsungress.co.kr</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer id="footer">
          <p><a href="private.php" target="_blank" style="color:#fff;display:block; margin-bottom:10px;">JIN SUNG PRESS (진성프레스 )
          </a></p>
        Copyright &copy; Jinsung Press 2020 all rights reserved.
    </footer>

  </div>
  <script>
    // 메인 비주얼
    var mainVisual = new Swiper('.mainVisual', {
      loop: true,
      pagination: {
        el: '.mainVisual-pagination',
        clickable: true
      },
      autoplay: {
        delay: 4000
      }
    });
    // 메인 비주얼 - 재생·일시정지
    $(document).on('click', '.btn_mainVisualPlay', function() {
      $(this).toggleClass('on');
      if ($(this).hasClass('on')) {
        mainVisual.autoplay.stop();
      } else {
        mainVisual.autoplay.start();
      }
    });
  </script>
</body>