<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Growth_Spark
 */

?>

		</div><!-- row -->
	</div><!-- #content -->
















    
    <!-- footer Start 
    <footer>
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <div class="footer-manu">
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">How it works</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Terms</a></li>
              </ul>
            </div>
            <p>Copyright &copy; 2017 - 2028<a href="#">GrowthHit. Taking over the mother flippin world.</a>.</p>
          </div>
        </div>
      </div>
    </footer>
-->













        <!-- BOTTOM RIGHT SLIDE OUT -->
        <div id="slidebox">
            <a class="close">
                X
            </a>
            <p>More in Technology & Science (4 of 23 articles)</p>
            <h2>The Social Impact of Scientific Research and new Technologies</h2>
            <a class="more">Read More »</a>
        </div>


	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'growthspark' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'growthspark' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'growthspark' ), 'growthspark', '<a href="/" rel="designer">GrowthHit</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php include('growthpop.php'); ?>


<script type='text/javascript' src='http://spark.growthhit.com/wp-content/themes/growthspark/inc/animatedModal/animatedModal.min.js'></script>
<script>
// FULL PAGE POP OVER
$("#callModal").animatedModal({

    //animatedIn:'lightSpeedIn',
    animatedOut:'bounceOutDown',
    color:'#27AE60',
    // Callbacks
    beforeOpen: function() {
        console.log("Popover animation was called");
    },           
    afterOpen: function() {
        console.log("Popover animation is completed");
    }, 
    beforeClose: function() {
        console.log("Popover Close was called");
    }, 
    afterClose: function() {
        console.log("Popover Close is completed");
    }
});

// trigger popover after page loads, and after delay
/*
$(document).ready(function() {
    setTimeout(function() {
             $('#callModal').trigger('click');
     }, 3000);
});
*/

// BOTTOM RIGHT SLIDE OUT
$(function() {
	$(window).scroll(function(){
		/* when reaching the element with id "colophon" we want to show the slidebox. Let's get the distance from the top to the element */
		var distanceTop = $('#colophon').offset().top - $(window).height();
		
		if  ($(window).scrollTop() > distanceTop) {
			$('#slidebox').animate({'right':'0px'},300);
            // console.log("Bottom Right Slidebox Shown");
		} else {
			$('#slidebox').stop(true).animate({'right':'-430px'},100);	
        }
	});
	
	/* remove the slidebox when clicking the X */
	$('#slidebox .close').bind('click',function(){
		$(this).parent().remove();
        console.log("Bottom Right Slidebox Closed");
	});
});


</script>



<?php wp_footer(); ?>


<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

    // Slick Carousel
    $('.proof').slick({
      centerMode: true,
      centerPadding: '0px',
      arrows: false,
      slidesToShow: 3,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
          }
        }
      ]
    });

  var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    // Do something else, like open/close menu
  });

//$('#social-proof ').slideDown(1500);
/*
setTimeout(function(){ 
    $('#social-proof').show();
}, 1500);
*/
});
</script>

</body>
</html>
