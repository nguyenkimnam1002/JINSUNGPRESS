<?php include_once('./master_layout/header.php');
require('./connect.php'); ?>
<div class="container blogging-style">
    <div class="row"> 

    <?php
      $sql = "select * from posts order by id DESC";
      $result = mysqli_query($conn, $sql);
      ?>
      
      <!-- banner outer thumb start -->
      <div class="col-xs-16 banner-outer-thumb  pull-left  wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-offset="50">
        <div class="row">
          <div id="banner-thumbs" class="owl-carousel">
            <?php
                while ($row = mysqli_fetch_array($result)) {
                  $idtin = $row['id'];
                  $tieude = $row['title'];
                  $category_id = $row['category_id'];
                  $image = $row['image'];
                  $time = $row['created_at'];
                ?>
            <div class="item"><a href="#">
              <div class="box">
                <?php echo "
                  <div class='carousel-caption'>$idtin</div>
                  <a href='post-item-details.php?id=$idtin&category_id=$category_id'>
                    <img class='img-responsive' src='$image' width='1600' height='972' alt=''/>
                  </a>
                  <div class='overlay'></div>
                  <div class='overlay-info'>
                    <div class='cat'>
                      <p class='cat-data'><span class='ion-coffee'></span>
                        <a href='post-item-details.php?id=$idtin&category_id=$category_id'><h4>$tieude</h4></a>
                      </p>
                    </div>
                    <div class='info'>
                      <p><span class='ion-android-data'></span>$image<span class='ion-chatbubbles'></span>351</p>
                    </div>
                  </div>"
                ?>
                
                
              </div>
              </a> </div>
            <?php } ?>
          </div>
        </div>
      </div>
      
      <!-- banner outer thumb end --> 
      <!-- mid sec start -->
      <div class="col-lg-3 col-md-4 col-sm-5 mid-sec top-margin pull-left">
        <div class="row"> 
          <!-- menu start -->
          <div class="col-sm-16 wow fadeInLeft animated" data-wow-delay="0.5s">
            <ul class="list-group">
              <li class="list-group-item"> <a href="#"> Science <span class="badge">22</span> </a></li>
              <li class="list-group-item"> <a href="#"> Lifestyle <span class="badge">8</span></a> </li>
              <li class="list-group-item"> <a href="#"> Home Decoration <span class="badge">19</span> </a></li>
              <li class="list-group-item"> <a href="#"> Beauty & Fashion <span class="badge">22</span></a> </li>
              <li class="list-group-item"> <a href="#"> Sport <span class="badge">41</span></a> </li>
              <li class="list-group-item"> <a href="#"> Health <span class="badge">76</span> </a></li>
              <li class="list-group-item"> <a href="#"> cars <span class="badge">19</span> </a></li>
            </ul>
          </div>
          <!-- menu end --> 
          <!-- videos start -->
          <div class="col-sm-16 wow fadeInLeft animated" data-wow-delay="0.5s">
            <div class="main-title-outer pull-left">
              <div class="main-title">videos</div>
            </div>
            <div class="vid-thumb-outer">
              <div class="vid-thumb"><a href="https://www.youtube.com/watch?v=TEnNaUg6Vm4" class="popup-youtube">
                <div class="vid-box  pull-left"><span class="ion-ios7-film"></span><img class="img-thumbnail" src="./assets/images/business/business-vid-1.jpg" width="250" height="143" alt=""/></div>
                <h4>Perspiciatis unde omnis iste natus</h4>
                </a> </div>
              <div class="vid-thumb"><a href="http://vimeo.com/7396421" class="popup-youtube">
                <div class="vid-box  pull-left"><span class="ion-ios7-film"></span><img class="img-thumbnail" src="./assets/images/business/business-vid-2.jpg" width="250" height="143" alt=""/></div>
                <h4>Cras tincidunt enim non metus ultricies.</h4>
                </a> </div>
            </div>
          </div>
          <!-- videos start --> 
          <!-- must read start -->
          <div class="col-sm-16 wow fadeInLeft animated" data-wow-delay="0.5s">
            <div class="main-title-outer pull-left">
              <div class="main-title">must read</div>
            </div>
            <ul class="list-unstyled  top-bordered ex-top-padding">
              <li> <a href="#">
                <div class="row">
                  <div class="col-sm-16">
                    <h4>Aenean imperdiet. Etiam ultricies nisi vel augue</h4>
                    <div class="text-danger sub-info">
                      <div class="time"><span class="ion-android-data icon"></span>Dec 16 2014</div>
                      <div class="comments"><span class="ion-chatbubbles icon"></span>351</div>
                      <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
                    </div>
                  </div>
                </div>
                </a> </li>
              <li> <a href="#">
                <div class="row ">
                  <div class="col-sm-16">
                    <h4>Maecenas tempus, tellus eget condimentum</h4>
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
                  <div class="col-sm-16">
                    <h4>Vivamus elementum semper nisi.</h4>
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
                  <div class="col-sm-16">
                    <h4>Aenean vulputate eleifend tellus</h4>
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
                  <div class="col-sm-16">
                    <h4>Donec pede justo, fringilla vel, aliquet nec</h4>
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
          <!-- must read start --> 
          <!-- top rating start -->
          <div class="col-sm-16 wow fadeInLeft animated" data-wow-delay="0.5s">
            <div class="main-title-outer pull-left">
              <div class="main-title">top rating</div>
            </div>
            <div class="topic">
              <ul class="list-unstyled">
                <li> <span class="rate" href="javascript:void(0)">10.0</span>
                  <p><a href="#">Aenean commodo ligula eget dolor</a></p>
                </li>
                <li> <span class="rate" href="javascript:void(0)">10.0</span>
                  <p><a href="#">Cum sociis natoque penatibus</a></p>
                </li>
                <li> <span class="rate" href="javascript:void(0)">9.7</span>
                  <p><a href="#">Cras dapibus. Vivamus elementum</a>
                    </h4>
                </li>
                <li> <span class="rate" href="javascript:void(0)">9.5</span>
                  <p><a href="#">Sed consequat, leo eget bibendum</a></p>
                </li>
                <li> <span class="rate" href="javascript:void(0)">9.3</span>
                  <p><a href="#">Maecenas tempus, tellus</a></p>
                </li>
              </ul>
            </div>
          </div>
          <!-- top rating start --> 
        </div>
      </div>
      <!-- mid sec end --> 
      <!-- left sec start -->
      <div class="col-lg-8 col-md-7 col-sm-6 col-xs-16 pull-left">
        <div class="row"> 
          <!-- big thumbs start -->
          
          <div class="col-sm-16 business  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="50"> <a class="popup-img" href="./assets/images/banner-slider/slide-img-1.jpg">
            <div class="thumb-box"><span class="ion-arrow-expand"></span> <img class="img-thumbnail" src="./assets/images/banner-slider/slide-img-1.jpg" width="1600" height="972" alt=""/></div>
            </a> <a href="#">
            <h3>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu</h3>
            </a>
            <div class="text-danger sub-info-bordered">
              <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
              <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
              <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
            </div>
            <p>Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <hr>
          </div>
          <div class="col-sm-16 business  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="50"> <a class="popup-img" href="./assets/images/banner-slider/slide-img-6.jpg">
            <div class="thumb-box"><span class="ion-arrow-expand"></span> <img class="img-thumbnail" src="./assets/images/banner-slider/slide-img-6.jpg" width="1600" height="972" alt=""/></div>
            </a> <a href="#">
            <h3>Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus</h3>
            </a>
            <div class="text-danger sub-info-bordered">
              <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
              <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
              <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
            </div>
            <p>Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <hr>
          </div>
          <div class="col-sm-16 business  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="50"> <a class="popup-img" href="./assets/images/banner-slider/slide-img-8.jpg">
            <div class="thumb-box"><span class="ion-arrow-expand"></span> <img class="img-thumbnail" src="./assets/images/banner-slider/slide-img-8.jpg" width="1600" height="972" alt=""/></div>
            </a> <a href="#">
            <h3>Aenean commodo ligula eget dolor. Aenean massa</h3>
            </a>
            <div class="text-danger sub-info-bordered">
              <div class="time"><span class="ion-android-data icon"></span>Dec 9 2014</div>
              <div class="comments"><span class="ion-chatbubbles icon"></span>204</div>
              <div class="stars"><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star"></span><span class="ion-ios7-star-half"></span></div>
            </div>
            <p>Lorem Ipsum has been the standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
          </div>
          
          <!--big thumbs end--> 
          
        </div>
      </div>
      <!-- left sec end --> 
      
      <!-- right sec start -->
      <div class="col-sm-5 hidden-xs right-sec top-margin">
        <div class="bordered">
          <div class="row ">
            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="50"> <img class="img-responsive" src="./assets/images/ads/336-280-ad.gif" width="336" height="280" alt=""/> <a href="#" class="sponsored">sponsored advert</a> </div>
            <div class="col-sm-16 bt-spac wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="150">
              <div class="table-responsive">
                <table class="table table-bordered social">
                  <tbody>
                    <tr>
                      <td><a class="rss" href="#">
                        <p> <span class="ion-social-rss"></span> subscribe<br>
                          to rss</p>
                        </a></td>
                      <td><a class="twitter" href="#">
                        <p><span class="ion-social-twitter"></span> 811,6
                          followers</p>
                        </a></td>
                      <td><a class="facebook" href="#">
                        <p> <span class="ion-social-facebook"></span> 6958,56<br>
                          fans</p>
                        </a></td>
                    </tr>
                    <tr>
                      <td><a class="youtube" href="#">
                        <p> <span class="ion-social-youtube"></span> 6954,55
                          subscribers</p>
                        </a></td>
                      <td><a class="vimeo" href="#">
                        <p><span class="ion-social-vimeo"></span> 896,7
                          subscribers</p>
                        </a></td>
                      <td><a class="dribbble" href="#">
                        <p> <span class="ion-social-dribbble-outline"></span> 6321,56
                          followers</p>
                        </a></td>
                    </tr>
                    <tr>
                      <td><a class="googleplus" href="#">
                        <p> <span class="ion-social-googleplus"></span> 9625.56
                          followers</p>
                        </a></td>
                      <td><a class="pinterest" href="#">
                        <p><span class="ion-social-pinterest"></span> 741,9
                          followers</p>
                        </a></td>
                      <td><a class="instagram" href="#">
                        <p> <span class="ion-social-instagram"></span> 3548,7
                          followers</p>
                        </a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- activities start -->
            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="130"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-justified " role="tablist">
                <li class="active"><a href="#popular" role="tab" data-toggle="tab">popular</a></li>
                <li><a href="#recent" role="tab" data-toggle="tab">recent</a></li>
                <li><a href="#comments" role="tab" data-toggle="tab">comments</a></li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="popular">
                  <ul class="list-unstyled">
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5 col-md-4"><img class="img-thumbnail pull-left" src="./assets/images/popular/pop-1.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
                          <h4>Tellus. Phasellus viverra nulla ut metus</h4>
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
                        <div class="col-sm-11 col-md-12">
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
                        <div class="col-sm-11 col-md-12">
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
                        <div class="col-sm-11 col-md-12">
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
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/popular/pop-5.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11 col-md-12">
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
                <div class="tab-pane" id="comments">
                  <ul class="list-unstyled">
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/comments/com-1.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>Tellus Phasellus viverra nulla</h4>
                          <p>Cum sociis natoque penatibus et magnis dis parturient montes..</p>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/comments/com-2.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo..</p>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/comments/com-3.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <p>Donec pede justo, fringilla vel, aliquet nec vulputate..</p>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/comments/com-4.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-12">
                          <h4>The evolution of the apple ..</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                        </div>
                      </div>
                      </a> </li>
                    <li> <a href="#">
                      <div class="row">
                        <div class="col-sm-5  col-md-4 "><img class="img-thumbnail pull-left" src="./assets/images/comments/com-5.jpg" width="164" height="152" alt=""/> </div>
                        <div class="col-sm-11  col-md-12 ">
                          <h4>The evolution of the apple ..</h4>
                          <p>Beatae vitae dicta sunt.explicabo ipsam..</p>
                        </div>
                      </div>
                      </a> </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- activities end --> 
            
            <!-- calendar start -->
            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="50">
              <div class="single pull-left"></div>
            </div>
            <!-- calendar end --> 
            <!-- flicker imgs start -->
            <div class="col-sm-16 bt-space wow fadeInUp animated" data-wow-delay="1s" data-wow-offset="35">
              <div class="main-title-outer pull-left">
                <div class="main-title">flicker images</div>
              </div>
              <ul class="list-inline">
                <li><a href="https://flic.kr/p/pGKEzR" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3944/15557385115_2d191a5cc7_s.jpg" width="55" height="55" alt=""/></a></li>
                <li><a href="https://flic.kr/p/pq5PiE" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3956/15368741148_ef02d92a65_s.jpg" width="55" height="55" alt=""/></a></li>
                <li><a href="https://flic.kr/p/pq9rDD" target="_blank"><img class="img-responsive" src="https://farm6.staticflickr.com/5608/15369448747_fd3f69cbb7_s.jpg" width="55" height="55" alt=""/></a></li>
                <li><a href="https://flic.kr/p/pGM4yz" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3946/15557657525_da199f6917_s.jpg" width="55" height="55" alt=""/></a></li>
                <li><a href="https://flic.kr/p/pH6FJ4" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3953/15561291195_e7ecf7d3a1_s.jpg" width="55" height="55" alt=""/></a></li>
                <li><a href="https://flic.kr/p/pqoKFn" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3953/15372240967_9ee086188c_s.jpg" width="55" height="55" alt=""/></a></li>
                <li><a href="https://flic.kr/p/pGHh6g" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3944/15556919225_c7d99f9667_s.jpg" width="55" height="55" alt=""/></a></li>
                <li><a href="https://flic.kr/p/pqxJZC" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3939/15373994670_8c756abcb0_s.jpg" width="55" height="55" alt=""/></a></li>
                <li><a href="https://flic.kr/p/pEPtj9" target="_blank"><img class="img-responsive" src="https://farm4.staticflickr.com/3938/15535494656_d04ef318a0_s.jpg" width="55" height="55" alt=""/></a></li>
                <li><a href="https://flic.kr/p/pqjpxX" target="_blank"><img class="img-responsive" src="https://farm6.staticflickr.com/5605/15371392809_5069f8772d_s.jpg" width="55" height="55" alt=""/></a></li>
              </ul>
            </div>
            <!-- flicker imgs end --> 
          </div>
        </div>
      </div>
      <!-- right sec end --> 
    </div>
  </div>
<?php  include_once('./master_layout/footer.php') ?>