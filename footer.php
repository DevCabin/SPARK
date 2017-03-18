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

<div style="height:1500px"></div>
<div class="slideout-form">
	<div class="slideoutform-header">
		<h3>Sign Up</h3>
	</div>
	<form>
		<div class="row">
			<label>First Name</label>
			<input type="text" name="firstname" />
		</div>
		<div class="row">
			<label>Last Name</label>
			<input type="text" name="lastname" />
		</div>
		<div class="row">
			<label>Email Address</label>
			<input type="text" name="email" />
		</div>
		<div class="row submit-row">
			<input type="submit" value="Submit" />
		</div>
	</form>
</div>




        <!--Call your modal-->
        <ul>
            <li><a id="demo01" href="#animatedModal">DEMO01</a></li>
            <li><a id="demo02" href="#modal-02">DEMO02</a></li>
        </ul>
      
      
        <!--DEMO01-->
        <div id="animatedModal">
            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div  id="btn-close-modal" class="close-animatedModal"> 
                CLOSE MODAL
            </div>
                
            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
        </div>

        <!--DEMO02-->
        <div id="modal-02">
            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
            <div  id="btn-close-modal" class="close-modal-02"> 
                CLOSE MODAL
            </div>
            
            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
        </div>



        <div id="slidebox">
            <a class="close"></a>
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



<script type='text/javascript' src='http://spark.growthhit.com/wp-content/themes/growthspark/inc/slideoutLead/js/slideout-form.js'></script>
<script type='text/javascript' src='http://spark.growthhit.com/wp-content/themes/growthspark/inc/animatedModal/animatedModal.min.js'></script>



        <script>

            //demo 01
            $("#demo01").animatedModal();

            //demo 02
            $("#demo02").animatedModal({
                modalTarget:'modal-02',
                animatedIn:'lightSpeedIn',
                animatedOut:'bounceOutDown',
                color:'#3498db',
                // Callbacks
                beforeOpen: function() {
                    console.log("The animation was called");
                },           
                afterOpen: function() {
                    console.log("The animation is completed");
                }, 
                beforeClose: function() {
                    console.log("The animation was called");
                }, 
                afterClose: function() {
                    console.log("The animation is completed");
                }
            });

        </script>


<script type="text/javascript">
$(function() {
	$(window).scroll(function(){
		/* when reaching the element with id "colophon" we want to show the slidebox. Let's get the distance from the top to the element */
		var distanceTop = $('#colophon').offset().top - $(window).height();
		
		if  ($(window).scrollTop() > distanceTop)
			$('#slidebox').animate({'right':'0px'},300);
		else 
			$('#slidebox').stop(true).animate({'right':'-430px'},100);	
	});
	
	/* remove the slidebox when clicking the cross */
	$('#slidebox .close').bind('click',function(){
		$(this).parent().remove();
	});
});
</script>

<?php wp_footer(); ?>

</body>
</html>
