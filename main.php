<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9 col-md-9 col-md-12">
                        <div class="slider_text text-center">
                            <div class="deal_text">
                                <span>Big Deal</span>
                            </div>
                            <h3>Burger <br>
                                Bachelor</h3>
                            <h4>Maxican</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9 col-md-9 col-md-12">
                        <div class="slider_text text-center">
                            <div class="deal_text">
                                <span>Big Deal</span>
                            </div>
                            <h3>Burger <br>
                                Bachelor</h3>
                            <h4>Maxican</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<div class="best_burgers_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-80">
                    <span>Burger Menu</span>
                    <h3>Best Ever Burgers</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            //for ($data = array(); $row = mysqli_fetch_assoc($result); $data = $row);
            //var_dump($data);
            //foreach($data as $value):
            //	echo $value['name_burg'];
            //var_dump($sql_bur);
            while ($row = $result->fetch_assoc()) :
            ?>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo $row['img_burg'] ?>" alt="">
                        </div>
                        <div class="info">
                            <h3><?php echo $row['name_burg'] ?></h3>
                            <p><?php echo $row['descrip'] ?></p>
                            <span><?php echo $row['price'] ?></span>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="iteam_links">
                        <a class="boxed-btn5" href="Menu.html">More Items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_startt -->
    <div class="Burger_President_area">
        <div class="Burger_President_here">
            <div class="single_Burger_President">
                <div class="room_thumb">
                    <img src="img/burgers/1.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>$20</span>
                            <h3>The Burger President</h3>
                            <p>Great way to make your business appear trust <br> and relevant.</p>
                            <a href="#" class="boxed-btn3">Order Now</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="single_Burger_President">
                <div class="room_thumb">
                    <img src="img/burgers/2.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>$20</span>
                            <h3>The Burger President</h3>
                            <p>Great way to make your business appear trust <br> and relevant.</p>
                            <a href="#" class="boxed-btn3">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_end -->
    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about_thumb2">
                        <div class="img_1">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>Best Burger <br>
                                in your City</h3>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate</p>
                        <div class="img_thumb">
                            <img src="img/jessica-signature.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->
    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <h3>Burger <br>
                Bachelor</h3>
            <span>How we make delicious Burger</span>
            <div class="video_payer">
                <a href="https://www.youtube.com/watch?v=vLnPwxZdW4Y" class="video_btn popup-video">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- testimonial_area_start  -->
    <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        <span>Testimonials</span>
                        <h3>Happy Customers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/1.png" alt="">
                                            </div>
                                            <h4>Kristiana Chouhan</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/2.png" alt="">
                                            </div>
                                            <h4>Arafath Hossain</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                            sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                            sed
                                            neque.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/3.png" alt="">
                                            </div>
                                            <h4>A.H Shemanto</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_ned  -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_instagram">
                        <img src="img/instragram/1.png" alt="">
                        <div class="ovrelay">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_instagram">
                        <img src="img/instragram/2.png" alt="">
                        <div class="ovrelay">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_instagram">
                        <img src="img/instragram/3.png" alt="">
                        <div class="ovrelay">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_instagram">
                        <img src="img/instragram/4.png" alt="">
                        <div class="ovrelay">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instragram_area_end -->