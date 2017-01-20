<?php
/**
 * Template Name: home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package physiotherapy
 */

?>

<?php
get_header();
 ?>

<section class="welcome_slider" id="home">
    <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=d9j03_JSVy8',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'high'}"></a>
    <!-- Single Slide Area Start -->
    <div class="single_slide text-center">
        <div class="table">
            <div class="table_cell">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="welcome_text_area">
                                <h2>Your dreams will come true here. <br> A touch of love.</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis cupiditate nam aperiam,
                                    <br> quae, corrupti nulla tempore quasi sequi, placeat consectetur consequuntur.
                                    <br> Dicta numquam doloribus odit quisquam, laudantium aliquam eveniet eius.</p>
                                <a href="#" class="btn btn-default btn-lg paypal">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ::::::::::::::::::::::::::: Welcome Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Product Area Start ::::::::::::::::::::::::::: -->
<section class="about_area section_padding_100_70" id="product">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading wow fadeInUp">
                    <h2>See Some Core <span> Features</span><br>About this Product</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi
                        <br>laudantium pariatur dolorem soluta nesciunt mollitia, labore, a. Nisi, nostrum.</p>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="about_product_thumb text-center wow fadeInLeft" data-wow-delay="0.2s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/bg-pattern/sport-orange-capecod.png" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="about_product_discription">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single_about_part item wow fadeInUp" data-wow-delay="0.2s">
                                <i class="icofont icofont-butterfly"></i>
                                <h3>Simple &amp; Light</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single_about_part item wow fadeInUp" data-wow-delay="0.4s">
                                <i class="icofont icofont-game-pad"></i>
                                <h3>Flexible</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single_about_part item wow fadeInUp" data-wow-delay="0.6s">
                                <i class="icofont icofont-runner-alt-1"></i>
                                <h3>Super Fast</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single_about_part item wow fadeInUp" data-wow-delay="0.8s">
                                <i class="icofont icofont-light-bulb"></i>
                                <h3>Stunning Design</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ::::::::::::::::::::::::::: Product Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Features Area Start ::::::::::::::::::::::::::: -->
<div class="more_features_area section_padding_100_70" id="opportunity">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading wow fadeInUp">
                    <h2>The real <span>opportunity</span> of<br>using our product</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi
                        <br>laudantium pariatur dolorem soluta nesciunt mollitia, labore, a. Nisi, nostrum.</p>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="single_benifits wow fadeInUp item active" data-wow-delay="0.2s">
                    <div class="icon_box">
                        <i class="icofont icofont-butterfly"></i>
                    </div>
                    <h4>Simple &amp; Light</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam reiciendis obcaecati voluptas, earum quaerat vitae.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single_benifits wow fadeInUp item" data-wow-delay="0.4s">
                    <div class="icon_box">
                        <i class="icofont icofont-runner-alt-1"></i>
                    </div>
                    <h4>Super Fast</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam reiciendis obcaecati voluptas, earum quaerat vitae.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single_benifits wow fadeInUp item" data-wow-delay="0.6s">
                    <div class="icon_box">
                        <i class="icofont icofont-light-bulb"></i>
                    </div>
                    <h4>Stunning Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam reiciendis obcaecati voluptas, earum quaerat vitae.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single_benifits wow fadeInUp item" data-wow-delay="0.8s">
                    <div class="icon_box">
                        <i class="icofont icofont-rainy-sunny"></i>
                    </div>
                    <h4>Weather Update</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam reiciendis obcaecati voluptas, earum quaerat vitae.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single_benifits wow fadeInUp item" data-wow-delay="1.0s">
                    <div class="icon_box">
                        <i class="icofont icofont-doctor"></i>
                    </div>
                    <h4>Heath Checkup</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam reiciendis obcaecati voluptas, earum quaerat vitae.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="single_benifits wow fadeInUp item" data-wow-delay="1.2s">
                    <div class="icon_box">
                        <i class="icofont icofont-apple-watch"></i>
                    </div>
                    <h4>Alarm Clock</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam reiciendis obcaecati voluptas, earum quaerat vitae.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ::::::::::::::::::::::::::: Features Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Speciality Area Start ::::::::::::::::::::::::::: -->
<section class="our_speciality_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 item hidden-sm hidden-xs">
                <div class="special_img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/bg-pattern/bg-2.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 item special_area_description">
                <div class="table">
                    <div class="table_cell">
                        <div class="special_text">
                            <h2>A bright touch for your hand</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                <br>Velit explicabo eos vel unde voluptatibus corporis?</p>
                            <a href="#" class="btn btn-default btn-lg">Learn more</a>
                            <a href="#" class="btn btn-default btn-lg buy">Buy Now <i class="icofont icofont-rounded-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end. container -->
</section>
<!-- ::::::::::::::::::::::::::: Our Speciality Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Key Features Area Start ::::::::::::::::::::::::::: -->
<section class="key_features_area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading wow fadeInUp">
                    <h2>Few bright key <span>features</span><br>about the product</h2>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-8 item">
                <div class="key_features_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates veniam ducimus temporibus, quisquam eum nam accusantium aliquam itaque expedita, atque totam, reprehenderit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati iusto, vel temporibus voluptatum! Magnam, eveniet, animi!</p>
                    <br>
                    <h4 class="wow fadeInUp" data-wow-delay="0.1s">Quad core 2.3GHz Processor</h4>
                    <h4 class="wow fadeInUp" data-wow-delay="0.2s">1.9" HD IPS LCD Display</h4>
                    <h4 class="wow fadeInUp" data-wow-delay="0.3s">Li-Polymar 4500mAh Battery</h4>
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">3G, Wi-Fi, OTG, Bluetooth</h4>
                    <h4 class="wow fadeInUp" data-wow-delay="0.5s">Calling Facility : Yes</h4>
                    <h4 class="wow fadeInUp" data-wow-delay="0.6s">SIM Support : Yes (Micro SIM)</h4>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 item">
                <div class="key_features_img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/bg-pattern/key-features.gif" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ::::::::::::::::::::::::::: Key Features Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Our Product Area Start ::::::::::::::::::::::::::: -->
<section class="our_product_area section_padding_100">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading text-center wow fadeInUp">
                    <h2>See our another <br><span>greatest</span> collection</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi
                        <br>laudantium pariatur dolorem soluta nesciunt mollitia, labore, a. Nisi, nostrum.</p>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <!-- Product Collection Area Start -->
                <div class="product_collection_area">
                    <div class="product_collection">

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/1.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 2</a></h4>
                                <p class="price">$150</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/2.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 3</a></h4>
                                <p class="price">$200</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/3.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 4</a></h4>
                                <p class="price">$220</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/4.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 5</a></h4>
                                <p class="price">$300</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/1.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 2</a></h4>
                                <p class="price">$150</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/2.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 3</a></h4>
                                <p class="price">$200</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/3.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 4</a></h4>
                                <p class="price">$220</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/4.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 5</a></h4>
                                <p class="price">$300</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/1.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 2</a></h4>
                                <p class="price">$150</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/2.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 3</a></h4>
                                <p class="price">$200</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/3.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 4</a></h4>
                                <p class="price">$220</p>
                            </div>
                        </div>

                        <!-- Single Product Area Start -->
                        <div class="single_product">
                            <div class="product_thumb">
                                <img src="<?php bloginfo('template_directory'); ?>/img/product-img/4.jpg" alt="">
                                <!-- Add to Cart Area Start -->
                                <div class="add_to_cart_info">
                                    <!-- Compare -->
                                    <div class="compare">
                                        <a href="#"><i class="icofont icofont-random"></i></a>
                                    </div>
                                    <!-- Add to cart button -->
                                    <div class="add_to_cart_button">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="favourite">
                                        <a href="#"><i class="icofont icofont-heart-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product Info Area Start -->
                            <div class="single_product_info text-center">
                                <h4><a href="#">Watch 5</a></h4>
                                <p class="price">$300</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ::::::::::::::::::::::::::: Our Product Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Testimonial Area Start ::::::::::::::::::::::::::: -->
<div class="testimonial_area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading wow fadeInUp">
                    <h2>See what our <span>clients</span> says<br>about the product</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi
                        <br>laudantium pariatur dolorem soluta nesciunt mollitia, labore, a. Nisi, nostrum.</p>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="testimonials_area">
                    <div class="testimonials">

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area">
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/advisor-img/advisor-1.jpg" alt="">
                                    <!--  Rating  -->
                                    <div class="rating">
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid provident illum nostrum obcaecati voluptatum aspernatur, excepturi dignissimos et numquam amet, sunt voluptatibus!</p>
                                <div class="testimonial_author_name">
                                    <h4>MD NAZRUL ISLAM</h4>
                                    <h5>CEO &amp; Founder, Designing World</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area">
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img src="img/advisor-img/advisor-2.jpg" alt="">
                                    <!--  Rating  -->
                                    <div class="rating">
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid provident illum nostrum obcaecati voluptatum aspernatur, excepturi dignissimos et numquam amet, sunt voluptatibus!</p>
                                <div class="testimonial_author_name">
                                    <h4>RIYA ISLAM</h4>
                                    <h5>Co-founder, Designing World</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area">
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/advisor-img/advisor-4.jpg" alt="">
                                    <!--  Rating  -->
                                    <div class="rating">
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid provident illum nostrum obcaecati voluptatum aspernatur, excepturi dignissimos et numquam amet, sunt voluptatibus!</p>
                                <div class="testimonial_author_name">
                                    <h4>MD FALTU MIA</h4>
                                    <h5>CEO, DESIGNHUB</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Single testimonial area start  -->
                        <div class="single_testimonial_area">
                            <!-- Single testimonial text  -->
                            <div class="testimonial_text">
                                <!-- Single testimonial thumb  -->
                                <div class="testimonial_author_thumb">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/advisor-img/advisor-3.jpg" alt="">
                                    <!--  Rating  -->
                                    <div class="rating">
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid provident illum nostrum obcaecati voluptatum aspernatur, excepturi dignissimos et numquam amet, sunt voluptatibus!</p>
                                <div class="testimonial_author_name">
                                    <h4>AFRIN RITU</h4>
                                    <h5>CEO, Cooking World</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ::::::::::::::::::::::::::: Testimonial Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Price and Plans Area Start ::::::::::::::::::::::::::: -->
<div class="price_plan_area section_padding_100_70" id="price">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading wow fadeInUp">
                    <h2>Pick your best <br><span>Price</span> Plan</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi
                        <br>laudantium pariatur dolorem soluta nesciunt mollitia, labore, a. Nisi, nostrum.</p>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>

        <div class="row">
            <!-- Single Price Plan Area Start -->
            <div class="col-sm-6 col-md-3">
                <div class="single_price_plan item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title">
                        <h3>Start-up</h3>
                    </div>
                    <div class="price">
                        <h4>$59/<span>monthly</span></h4>
                    </div>
                    <div class="description">
                        <p>Duration: 7days</p>
                        <p>Online Course</p>
                        <p>Monthly Exam</p>
                        <p>No Hidden Fees</p>
                        <p>100+ Video Lesson</p>
                        <p>5 Practical Class</p>
                    </div>
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button">Start Now</a>
                    </div>
                </div>
            </div>
            <!-- Single Price Plan Area End -->

            <!-- Single Price Plan Area Start -->
            <div class="col-sm-6 col-md-3">
                <div class="single_price_plan item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="title">
                        <h3>Premium</h3>
                    </div>
                    <div class="price">
                        <h4>$133/<span>monthly</span></h4>
                    </div>
                    <div class="description">
                        <p>Duration: 7days</p>
                        <p>Online Course</p>
                        <p>Monthly Exam</p>
                        <p>No Hidden Fees</p>
                        <p>100+ Video Lesson</p>
                        <p>5 Practical Class</p>
                    </div>
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button">Start Now</a>
                    </div>
                </div>
            </div>
            <!-- Single Price Plan Area End -->

            <!-- Single Price Plan Area Start -->
            <div class="col-sm-6 col-md-3">
                <div class="single_price_plan item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="title">
                        <h3>Gold</h3>
                    </div>
                    <div class="price">
                        <h4>$299/<span>yearly</span></h4>
                    </div>
                    <div class="description">
                        <p>Duration: 7days</p>
                        <p>Online Course</p>
                        <p>Monthly Exam</p>
                        <p>No Hidden Fees</p>
                        <p>100+ Video Lesson</p>
                        <p>5 Practical Class</p>
                    </div>
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button">Start Now</a>
                    </div>
                </div>
            </div>
            <!-- Single Price Plan Area End -->

            <!-- Single Price Plan Area Start -->
            <div class="col-sm-6 col-md-3">
                <div class="single_price_plan item wow fadeInUp" data-wow-delay="0.8s">
                    <div class="title">
                        <h3>Pro</h3>
                    </div>
                    <div class="price">
                        <h4>$499/<span>yearly</span></h4>
                    </div>
                    <div class="description">
                        <p>Duration: 7days</p>
                        <p>Online Course</p>
                        <p>Monthly Exam</p>
                        <p>No Hidden Fees</p>
                        <p>100+ Video Lesson</p>
                        <p>5 Practical Class</p>
                    </div>
                    <div class="button">
                        <a class="btn btn-default" href="#" role="button">Start Now</a>
                    </div>
                </div>
            </div>
            <!-- Single Price Plan Area End -->

        </div>
    </div>
</div>
<!-- ::::::::::::::::::::::::::: Price and Plans Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Our Advisor Area Start ::::::::::::::::::::::::::: -->
<section class="our_advisor_area section_padding_100_70" id="advisor">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading wow fadeInUp">
                    <h2>our quality team<br>Creative <span>Advisor</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi
                        <br>laudantium pariatur dolorem soluta nesciunt mollitia, labore, a. Nisi, nostrum.</p>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>
        <div class="row">

            <!-- Single advisor profile area start -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single_advisor_profile item wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Single advisor profile thumb -->
                    <div class="advisor_thumb">
                        <img src="<?php bloginfo('template_directory'); ?>/img/advisor-img/advisor-1.jpg" alt="">
                    </div>
                    <!-- Single advisor profile details -->
                    <div class="single_advisor_details_info">
                        <h4>Nazrul Islam</h4>
                        <p class="designation">Founder &amp; CEO</p>
                    </div>
                </div>
            </div>

            <!-- Single advisor profile area start -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single_advisor_profile item wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Single advisor profile thumb -->
                    <div class="advisor_thumb">
                        <img src="<?php bloginfo('template_directory'); ?>/img/advisor-img/advisor-2.jpg" alt="">
                    </div>
                    <!-- Single advisor profile details -->
                    <div class="single_advisor_details_info">
                        <h4>Shaila Afrin</h4>
                        <p class="designation">Co-founder</p>
                    </div>
                </div>
            </div>

            <!-- Single advisor profile area start -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single_advisor_profile item wow fadeInUp" data-wow-delay="0.6s">
                    <!-- Single advisor profile thumb -->
                    <div class="advisor_thumb">
                        <img src="<?php bloginfo('template_directory'); ?>/img/advisor-img/advisor-3.jpg" alt="">
                    </div>
                    <!-- Single advisor profile details -->
                    <div class="single_advisor_details_info">
                        <h4>SAMANTHA SAHAR</h4>
                        <p class="designation">General Manager</p>
                    </div>
                </div>
            </div>

            <!-- Single advisor profile area start -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single_advisor_profile item wow fadeInUp" data-wow-delay="0.8s">
                    <!-- Single advisor profile thumb -->
                    <div class="advisor_thumb">
                        <img src="<?php bloginfo('template_directory'); ?>/img/advisor-img/advisor-4.jpg" alt="">
                    </div>
                    <!-- Single advisor profile details -->
                    <div class="single_advisor_details_info">
                        <h4>RIYADH KHAN</h4>
                        <p class="designation">Financial Manager</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ::::::::::::::::::::::::::: Our advisor Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: FAQ Area Start ::::::::::::::::::::::::::: -->
<section class="faq_area section_padding_100" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading wow fadeInUp">
                    <h2>Have a <span>Questions</span><br>Check our FAQ</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi
                        <br>laudantium pariatur dolorem soluta nesciunt mollitia, labore, a. Nisi, nostrum.</p>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>
        <div class="row">

            <div class="col-xs-12 col-md-6">
                <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

                    <!-- single accordian area start -->
                    <div class="panel single-accordion">
                        <h5><a role="button" aria-expanded="true" aria-controls="one" data-toggle="collapse" data-parent="#accordion"  href="#one">How can I apply for a job?                                   <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                                    <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                                </a>
                            </h5>
                        <div id="one" class="accordion-content collapse in">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>

                    <!-- single accordian area start -->
                    <div class="panel single-accordion">
                        <h5>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="two" data-parent="#accordion" data-toggle="collapse"  href="#two">Where can I find out about events?
                                   <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                                    <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                                </a>
                            </h5>
                        <div id="two" class="accordion-content collapse">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>

                    <!-- single accordian area start -->
                    <div class="panel single-accordion">
                        <h5>
                                <a role="button" aria-expanded="true" aria-controls="three" class="collapsed" data-parent="#accordion" data-toggle="collapse"  href="#three">Who can use the libraries?
                                    <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                                    <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                                </a>
                            </h5>
                        <div id="three" class="accordion-content collapse">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>

                    <!-- single accordian area start -->
                    <div class="panel single-accordion">
                        <h5>
                                   <a role="button" aria-expanded="true" aria-controls="four" class="collapsed" data-parent="#accordion" data-toggle="collapse"  href="#four">Are there campus tours for visitors?
                                    <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                                    <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                                </a>
                            </h5>
                        <div id="four" class="accordion-content collapse">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>

                    <!-- single accordian area start -->
                    <div class="panel single-accordion">
                        <h5>
                                <a role="button" aria-expanded="true" aria-controls="five" class="collapsed" data-parent="#accordion" data-toggle="collapse"  href="#five">What is the phone number for the University?
                                   <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                                    <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                                </a>
                            </h5>
                        <div id="five" class="accordion-content collapse">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="accordions last" id="accordion2" role="tablist" aria-multiselectable="true">

                    <!-- single accordian area start -->
                    <div class="panel single-accordion">
                        <h5><a role="button" aria-expanded="true" aria-controls="six" data-toggle="collapse" data-parent="#accordion2"  href="#six">How can I apply for a job?                    <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                               <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                                </a>
                            </h5>
                        <div id="six" class="accordion-content collapse in">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>

                    <!-- single accordian area start -->
                    <div class="panel single-accordion">
                        <h5>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="seven" data-parent="#accordion2" data-toggle="collapse"  href="#seven">Where can I find out about events?
                                   <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                                    <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                                </a>
                            </h5>
                        <div id="seven" class="accordion-content collapse">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>

                    <!-- single accordian area start -->
                    <div class="panel single-accordion">
                        <h5>
                                <a role="button" aria-expanded="true" aria-controls="eight" class="collapsed" data-parent="#accordion2" data-toggle="collapse"  href="#eight">Who can use the libraries?
                                    <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                                    <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                                </a>
                            </h5>
                        <div id="eight" class="accordion-content collapse">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>

                    <!-- single accordian area start -->
                    <div class="panel single-accordion">
                        <h5>
                                   <a role="button" aria-expanded="true" aria-controls="nine" class="collapsed" data-parent="#accordion2" data-toggle="collapse"  href="#nine">Are there campus tours for visitors?
                                    <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                                    <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                                </a>
                            </h5>
                        <div id="nine" class="accordion-content collapse">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>

                    <!-- single accordian area start -->
                    <div class="panel single-accordion">
                        <h5>
                                <a role="button" aria-expanded="true" aria-controls="ten" class="collapsed" data-parent="#accordion2" data-toggle="collapse"  href="#ten">What is the phone number for the University?
                                   <span class="accor-open"><i class="icofont icofont-rounded-down"></i></span>
                                    <span class="accor-close"><i class="icofont icofont-rounded-up"></i></span>
                                </a>
                            </h5>
                        <div id="ten" class="accordion-content collapse">
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ::::::::::::::::::::::::::: FAQ Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Download App Area Start ::::::::::::::::::::::::::: -->
<div class="download_app_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 item download_app">
                <div class="table">
                    <div class="table_cell">
                        <div class="download_app_text wow fadeInUp">
                            <h1>Download <span>App</span> for Mobile</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                <br>Velit explicabo eos vel unde voluptatibus corporis?</p>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/core-img/play-store.png" alt=""></a>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/core-img/apple-store.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 item hidden-sm hidden-xs">
                <div class="download_app_img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/bg-pattern/product-big-thumb.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ::::::::::::::::::::::::::: Download App Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Newsletter Area Start ::::::::::::::::::::::::::: -->
<section class="newsletter_area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Section Heading Start -->
                <div class="section_heading wow fadeInUp">
                    <h2>Subscribe to our <span>newsletter</span><br>and get update.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi
                        <br>laudantium pariatur dolorem soluta nesciunt mollitia, labore, a. Nisi, nostrum.</p>
                </div>
                <!-- Section Heading End -->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
                <div class="mailchimp_area wow fadeInUp">
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="//designing-world.us14.list-manage.com/subscribe/post?u=f0c5b9ba9531961ccc866101b&amp;id=42a1f17754" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Email Address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_f0c5b9ba9531961ccc866101b_42a1f17754" tabindex="-1" value="">
                                </div>
                                <div class="clear">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ::::::::::::::::::::::::::: Newsletter Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Message Now Area Start ::::::::::::::::::::::::::: -->
<section class="message_now_area section_padding_100_70" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                <!-- Message Title -->
                <div class="message_title">
                    <!-- Section Heading Start -->
                    <div class="section_heading wow fadeInUp">
                        <h2>Drop a line<br><span>Message</span> now</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor modi
                            <br>laudantium pariatur dolorem soluta nesciunt mollitia, labore, a. Nisi, nostrum.</p>
                    </div>
                    <!-- Section Heading End -->
                </div>

                <div class="contact_from">
                    <form action="mail.php" method="post" id="main_contact_form">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div id="success_fail_info"></div>
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="number" id="number" placeholder="Your Number *" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <div class="form-group textarea">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message *" required></textarea>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-default">SEND MESSAGE</button>
                                </div>
                            </div>
                        </div>
                        <!-- Message Input Area End -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ::::::::::::::::::::::::::: Message Now Area Start ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: Map Area Start ::::::::::::::::::::::::::: -->
<div class="map_contact_address_area">
    <!-- Map Area Start -->
    <div class="map_area" id="googleMap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.055419497054!2d77.07191441468014!3d28.628101082419505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d030dcf5aab3b%3A0x7e386f5fb6852d01!2sNajafgarh+Rd%2C+New+Delhi%2C+Delhi!5e0!3m2!1sen!2sin!4v1480664671927" width=100%  height="400"  frameborder="0" style="border:0" allowfullscreen></iframe></div>


</div>
<!-- ::::::::::::::::::::::::::: Map Area End ::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::: CTA Area Start ::::::::::::::::::::::::::: -->
<section class="call_to_action">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="call_to_action_text">
                    <div class="like">
                        <i class="icofont icofont-like"></i>
                    </div>
                    <div class="text">
                        <h3>The Ultimate Product Landing Page</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <a href="#" class="btn btn-default btn-lg" role="button">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
 ?>
