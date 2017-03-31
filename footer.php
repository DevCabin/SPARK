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


<!-- sticky header -->
<script type="text/javascript">
/*!
 * Headhesive.js v1.2.3 - An on-demand sticky header
 * Author: Copyright (c) Mark Goodyear <@markgdyr> <http://markgoodyear.com>
 * Url: http://markgoodyear.com/labs/headhesive
 * License: MIT
 */
!function(t,e){"function"==typeof define&&define.amd?define([],function(){return e()}):"object"==typeof exports?module.exports=e():t.Headhesive=e()}(this,function(){"use strict";var t=function(e,s){for(var o in s)s.hasOwnProperty(o)&&(e[o]="object"==typeof s[o]?t(e[o],s[o]):s[o]);return e},e=function(t,e){var s,o,i,n=Date.now||function(){return(new Date).getTime()},l=null,c=0,r=function(){c=n(),l=null,i=t.apply(s,o),s=o=null};return function(){var f=n(),h=e-(f-c);return s=this,o=arguments,0>=h?(clearTimeout(l),l=null,c=f,i=t.apply(s,o),s=o=null):l||(l=setTimeout(r,h)),i}},s=function(){return void 0!==window.pageYOffset?window.pageYOffset:(document.documentElement||document.body.parentNode||document.body).scrollTop},o=function(t,e){for(var s=0,o=t.offsetHeight;t;)s+=t.offsetTop,t=t.offsetParent;return"bottom"===e&&(s+=o),s},i=function(e,s){"querySelector"in document&&"addEventListener"in window&&(this.visible=!1,this.options={offset:300,offsetSide:"top",classes:{clone:"headhesive",stick:"headhesive--stick",unstick:"headhesive--unstick"},throttle:250,onInit:function(){},onStick:function(){},onUnstick:function(){},onDestroy:function(){}},this.elem="string"==typeof e?document.querySelector(e):e,this.options=t(this.options,s),this.init())};return i.prototype={constructor:i,init:function(){if(this.clonedElem=this.elem.cloneNode(!0),this.clonedElem.className+=" "+this.options.classes.clone,document.body.insertBefore(this.clonedElem,document.body.firstChild),"number"==typeof this.options.offset)this.scrollOffset=this.options.offset;else{if("string"!=typeof this.options.offset)throw new Error("Invalid offset: "+this.options.offset);this._setScrollOffset()}this._throttleUpdate=e(this.update.bind(this),this.options.throttle),this._throttleScrollOffset=e(this._setScrollOffset.bind(this),this.options.throttle),window.addEventListener("scroll",this._throttleUpdate,!1),window.addEventListener("resize",this._throttleScrollOffset,!1),this.options.onInit.call(this)},_setScrollOffset:function(){"string"==typeof this.options.offset&&(this.scrollOffset=o(document.querySelector(this.options.offset),this.options.offsetSide))},destroy:function(){document.body.removeChild(this.clonedElem),window.removeEventListener("scroll",this._throttleUpdate),window.removeEventListener("resize",this._throttleScrollOffset),this.options.onDestroy.call(this)},stick:function(){this.visible||(this.clonedElem.className=this.clonedElem.className.replace(new RegExp("(^|\\s)*"+this.options.classes.unstick+"(\\s|$)*","g"),""),this.clonedElem.className+=" "+this.options.classes.stick,this.visible=!0,this.options.onStick.call(this))},unstick:function(){this.visible&&(this.clonedElem.className=this.clonedElem.className.replace(new RegExp("(^|\\s)*"+this.options.classes.stick+"(\\s|$)*","g"),""),this.clonedElem.className+=" "+this.options.classes.unstick,this.visible=!1,this.options.onUnstick.call(this))},update:function(){s()>this.scrollOffset?this.stick():this.unstick()}},i});  	
</script>
<script>
$(document).ready(function () {
  if($(window).width() > 768){

          var options = {
              classes: {
                  clone:   'banner--clone',
                  stick:   'banner--stick',
                  unstick: 'banner--unstick'
              }
          };
          var banner = new Headhesive('#masthead', options);
  };
});

</script>
<style>

.banner--unstick, .banner--clone {
  display: none;
}

#masthead.banner--stick {
    display: block;
    position: fixed;
    margin-left: 10%;
}

</style>
<!-- // sticky header -->

<?php wp_footer(); ?>

</body>
</html>
