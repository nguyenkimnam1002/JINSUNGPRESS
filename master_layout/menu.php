<?php
     require('./connect.php');
     include_once('./master_layout/Database.php') ;

     $db= new Database();

    // Post giới thiệu
    $sql = "SELECT * FROM posts WHERE category_id = 2 ORDER BY ID DESC LIMIT 1";
    $gioiThieu = $db->fetchsql($sql);

    // Post dịch vụ
    $sql1 = "SELECT * FROM posts WHERE category_id = 1 ORDER BY ID DESC LIMIT 3";
    $dichVu = $db->fetchsql($sql1);

    // Post tuyển dụng
    $sql2 = "SELECT * FROM posts WHERE category_id = 3 ORDER BY ID DESC LIMIT 6";
    $tuyenDung = $db->fetchsql($sql2);

     // Post liên hệ
     $sql3 = "SELECT * FROM posts WHERE category_id = 6 ORDER BY ID DESC LIMIT 1";
     $lienHe = $db->fetchsql($sql3);
?>
<!-- Menu  -->
<!-- .header-main -->
<div id="wide-nav" class="header-bottom wide-nav nav-dark hide-for-medium">
  <div class="flex-row container">
    <div class="flex-col hide-for-medium flex-left">
      <ul class="nav header-nav header-bottom-nav nav-left  nav-size-medium nav-spacing-xlarge">
        <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item active  menu-item-47">
          <a href="<?php echo base_url() ?>" class="nav-top-link">Trang chủ</a>
        </li>
        <li id="menu-item-845" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-845">
          <a href="<?php echo base_url()?>gioithieu.php" class="nav-top-link"> Giới thiệu</a>
        </li>
        <li id="menu-item-546" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-546 has-dropdown">
          <a href="#" class="nav-top-link"> Dịch vụ <i class="fa fa-angle-down"></i>
          </a>
          <ul class='nav-dropdown nav-dropdown-default'>
            <?php foreach($dichVu as $item) :?>
            <li id="menu-item-625" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-625 nav-dropdown-col">
              <a href="post-item-details.php?category_id=2&id=<?php echo $item['id']?>">
                <?php $title = catChuoiCoNghia($item['title'], 50);
                  echo $title?>
              </a>
            </li>
            <?php endforeach ?>
          </ul>
        </li>
        <li id="menu-item-682" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-682 has-dropdown">
          <a href="<?php echo base_url()?>section-topic-tuyendung.php?category_id=3" class="nav-top-link"> Thông tin tuyển dụng <i class="fa fa-angle-down"></i>
          </a>
          <ul class='nav-dropdown nav-dropdown-default'>
          <?php foreach($tuyenDung as $item) :?>
            <li id="menu-item-779" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-779">
              <a href="post-item-details.php?category_id=3&id=<?php echo $item['id']?>">
                <?php $title = catChuoiCoNghia($item['title'], 50);
                  echo $title?>
              </a>
            </li>
          <?php endforeach ?>
          </ul>
        </li>
        <li id="menu-item-51" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-51">
          <a href="<?php echo base_url()?>section-topic-tintuc.php?category_id=4" class="nav-top-link">Tin tức</a>
        </li>
        <li id="menu-item-343" class="menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-343">
          <a href="<?php echo base_url()?>section-topic-tintuc.php?category_id=5" class="nav-top-link">Thắc mắc &#8211;giải đáp</a>
        </li>
        <li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-45">
        <?php foreach($lienHe as $item) :?>
          <a href="post-lienhe.php?id=<?php echo $item['id']?>&category_id=<?php echo $item['category_id']?>" class="nav-top-link">Liên hệ</a>
        <?php endforeach ?>
        </li>
      </ul>
    </div>
    <!-- flex-col -->
    <div class="flex-col hide-for-medium flex-right flex-grow">
      <ul class="nav header-nav header-bottom-nav nav-right  nav-size-medium nav-spacing-xlarge">
        <li class="header-search-form search-form html relative has-icon">
          <div class="header-search-form-wrapper">
            <div class="searchform-wrapper ux-search-box relative form- is-normal">
              <form method="get" class="searchform" action="<?php echo base_url() ?>" role="search">
                <div class="flex-row relative">
                  <div class="flex-col flex-grow">
                    <input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Nhập từ khóa tìm kiếm..." />
                  </div>
                  <!-- .flex-col -->
                  <div class="flex-col">
                    <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                  <!-- .flex-col -->
                </div>
                <!-- .flex-row -->
                <div class="live-search-results text-left z-top"></div>
              </form>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- flex-col -->
  </div>
  <!-- .flex-row -->
</div>
<!-- .header-bottom -->
<div class="header-bg-container fill">
  <div class="header-bg-image fill"></div>
  <div class="header-bg-color fill"></div>
</div>
<!-- End menu -->