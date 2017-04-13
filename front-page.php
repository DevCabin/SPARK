<?php
/**
 * The front page.
 * @package Growth Spark
 */
if ( function_exists( 'ot_get_option' ) ) {
    $main_hero_image = ot_get_option( 'main_hero_image' );
    $hero_area_headline = ot_get_option( 'hero_area_headline' );
    $hero_area_sub_title = ot_get_option( 'hero_area_sub_title' );

    // $bg_url = get_template_directory_uri() . "/inc/img/about-bg.jpg";
    $front_page_title = get_bloginfo( 'name' );
    $front_page_sub_title = get_bloginfo( 'description' );

    if($main_hero_image != ""){
        $bg_url = $main_hero_image;
    } 
    if($hero_area_headline != ""){
        $front_page_title = $hero_area_headline;
    } 
    if($hero_area_sub_title != ""){
        $front_page_sub_title = $hero_area_sub_title;
    } 

}
get_header();
/*
?>
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php // echo $bg_url;?>')">
    
        <div class="overlay">
        <div class="container">
            <div class="row">
                <div class=" eight columns">
                    <div class="post-heading">
                        <h1>
                            <?php echo $front_page_title; ?>
                        </h1>
                        <h2 class="subheading">
                            <?php echo $front_page_sub_title; ?>
                        </h2>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container main-content">
        <div class="row">
            <div class=" eight columns">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="post-preview">
                                <a href="<?php the_permalink();?>" title="Link to <?php the_title();?>">
                                   <h2 class="post-title"><?php the_title(); ?></h2>
                                </a>   
                                    <h3 class="post-subtitle">
                                        <?php echo strip_tags(the_excerpt(), '<br>');
                                        ?>
                                    </h3>
                                
                                <p class="post-meta">
                                    <?php growthspark_posted_on(); ?>
                                </p>
                            </div>
                            <hr>
                </article><!-- #post-## -->

            <?php endwhile;

                the_posts_navigation();

             else :

                get_template_part( 'template-parts/content', 'none' );

            endif; 
            ?>
            </div><!--  eight columns -->
        </div><!-- row -->
    </div><!-- container -->

<?php
// get_sidebar();
get_footer(); */ ?>


    <!-- Slider Start -->
    <section id="slider">
      <div class="container">
        <div class="row">
          <div class="ten columns offset-by-two">
            <div class="block">
              <h1 class="animated fadeInUp">A DIGITAL MARKETING &#38; <br> DESIGN AGENCY</h1>
              <p class="animated fadeInUp">We love the Web and the work we do. We work closely with our </br> clients to deliver the best possible solutions for their needs</p>
              <div class="cta">
                <a class="cta-btn animated fadeInUp" href="#">LEARN MORE</a>
              </div>


            </div>
          </div>
        </div>
      </div>
    </section>



<!-- Social Proof Carousel -->
  <section id="social-proof">
    <div class="container">
        <div class="slider proof">
          <div><img src="http://spark.growthhit.com/wp-content/uploads/2017/04/unbounce_logo.png"></div>
          <div><img src="http://spark.growthhit.com/wp-content/uploads/2017/04/sendgrid_logo_sm.png"></div>
          <div><img src="http://spark.growthhit.com/wp-content/uploads/2017/04/unbounce_logo.png"></div>
          <div><img src="http://spark.growthhit.com/wp-content/uploads/2017/04/sendgrid_logo_sm.png"></div>


        </div>
       </div> 
    </section>
<!-- -->


  <!-- Service Start -->
    <section id="service" class="reverse">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
          </div>
        </div>

        <div class="row">
          <div class="four columns">
            <div class="service-item">
              <i class="icon ion-coffee"></i>
              <h4>Branding</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="four columns">
            <div class="service-item">
              <i class="ion-compass"></i>
              <h4>Web Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>


          <div class="four columns">
            <div class="service-item">
              <i class="ion-image"></i>
              <h4>App Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- About Us  -->
    <section id="intro" class="home-about-us">
      <div class="container">
        <div class="row">
          <div class="seven columns">
            <div class="block">
              <div class="section-title">
                <h2>About Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id </p>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="five columns">
            <div class="block">
              <img src="<?php echo get_template_directory_uri(); ?>/sagency/img/wrapper-img.gif" alt="Img">
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
    </section>





    <!-- Call to action Start -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <div class="block">
              <h2>We design delightful digital experiences.</h2>
              <p>Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>
            </div>
            
      <div class="container">
        <div class="row">
            <div class="three columns offset-by-three">
              <a class="cta-btn animated fadeInUp" href="#">Tell Us Your Story</a>
            </div>
        </div>
      </div>

          </div>
        </div>
      </div>
    </section>



  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="six columns offset-by-six">
          <h2>WE BELIEVE IN GREAT IDEAS</h2>
          <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <a href="work.html" class="btn btn-view-works">View Works</a>
        </div>
      </div>
    </div>
  </section>
        
    <!-- Service Start -->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
          </div>
        </div>
        <div class="row ">
          <div class="six columns">
            <div class="service-item">
              <i class="icon ion-coffee"></i>
              <h4>Branding</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="six columns">
            <div class="service-item">
              <i class="ion-compass"></i>
              <h4>Web Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
         </div>
         <div class="row "> 
          <div class="six columns">
            <div class="service-item">
              <i class="ion-image"></i>
              <h4>App Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="six columns">
            <div class="service-item">
              <i class="ion-bug"></i>
              <h4>Start Up</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          </div>
         <div class="row "> 
          <div class="six columns">
            <div class="service-item">
              <i class="ion-headphone"></i>
              <h4>Logo Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="six columns">
            <div class="service-item">
              <i class="ion-leaf"></i>
              <h4>Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          </div>
         <div class="row "> 
          <div class="six columns">
            <div class="service-item">
              <i class="ion-planet"></i>
              <h4>Brand Identity</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          <div class="six columns">
            <div class="service-item">
              <i class="ion-earth"></i>
              <h4>Brand Identity</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
            </div>
          </div>
          </div>
         
      </div>
    </section>
    <!-- Call to action Start -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <div class="block">
              <h2>We design delightful digital experiences.</h2>
              <p>Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>
            </div>
            
      <div class="container">
        <div class="row">
            <div class="three columns offset-by-three">
              <a class="cta-btn animated fadeInUp" href="#">Tell Us Your Story</a>
            </div>
        </div>
      </div>

          </div>
        </div>
      </div>
    </section>



    <!-- Content Start 
    <section id="testimonial">
      <div class="container">
        <div class="row">
          <div class="section-title text-center">
            <h2>Fun Facts About Us</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
          </div>
        </div>
        <div class="row">
          <div class="six columns">
            <div class="block">
              <ul class="counter-box clearfix">
                <li>
                  <div class="block">
                    <i class="ion-ios-chatboxes-outline"></i>
                    <h4 class="counter">20000</h4>
                    <span>Cups Of Coffee</span>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <i class="ion-ios-glasses-outline"></i>
                    <h4 class="counter">20000</h4>
                    <span>Cups Of Coffee</span>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <i class="ion-ios-compose-outline"></i>
                    <h4 class="counter">20000</h4>
                    <span>Cups Of Coffee</span>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <i class="ion-ios-timer-outline"></i>
                    <h4 class="counter">20000</h4>
                    <span>Cups Of Coffee</span>
                  </div>
                </li>

              </ul>
            </div>
          </div>
          <div class="six columns">
            <div class="testimonial-carousel">
              <div id="testimonial-slider" class="owl-carousel">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/sagency/img/cotation.png" alt="IMG">
                    <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                    <div class="user">
                      <img src="<?php echo get_template_directory_uri(); ?>/sagency/img/item-img1.jpg" alt="Pepole">
                      <p><span>Rose Ray</span> CEO</p>
                    </div>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/sagency/img/cotation.png" alt="IMG">
                    <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                    <div class="user">
                      <img src="<?php echo get_template_directory_uri(); ?>/sagency/img/item-img1.jpg" alt="Pepole">
                      <p><span>Rose Ray</span> CEO</p>
                    </div>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/sagency/img/cotation.png" alt="IMG">
                    <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                    <div class="user">
                      <img src="<?php echo get_template_directory_uri(); ?>/sagency/img/item-img1.jpg" alt="Pepole">
                      <p><span>Rose Ray</span> CEO</p>
                    </div>
                </div>
                <div>
                  <img src="<?php echo get_template_directory_uri(); ?>/sagency/img/cotation.png" alt="IMG">
                    <p>"This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd."</p>
                    <div class="user">
                      <img src="<?php echo get_template_directory_uri(); ?>/sagency/img/item-img1.jpg" alt="Pepole">
                      <p><span>Rose Ray</span> CEO</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->





<?php get_footer();  ?>    
   