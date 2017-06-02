<?php
/**
 * @package Growth Spark
 */

$titan = TitanFramework::getInstance( 'growthspark' );

$pu_active = $titan->getOption( 'pu_active' );
$pu_timeout = $titan->getOption( 'pu_timeout' );
$pop_up_bg_color = $titan->getOption( 'pop_up_bg_color' );
$pu_headline = $titan->getOption( 'pu_headline' );
$pu_sub_head = $titan->getOption( 'pu_sub_head' );
$pu_code = $titan->getOption( 'pu_code' );

$activate_slide_out = $titan->getOption( 'activate_slide_out' );


$cta_2_color = $titan->getOption( 'secondary_cta_background_color' );

if ($pu_active == true) {
?>

        <a id="callModal" href="#animatedModal"></a>
        
           <div id="animatedModal"> 

            <div id="btn-close-modal" class="close-animatedModal"> 
                <img class="closebt" src="<?php echo get_template_directory_uri() ;?>/inc/animatedModal/closebt.svg" alt="Close Button - X svg">
            </div>

            <div class="modal-content">

              
              <h1><?php echo $pu_headline;?></h1>

              <p class="sub-t">
                <?php echo $pu_sub_head;?>
              </p>

              <div id="pu-form">
                <?php echo $pu_code ;?>
              </div>
              
            </div>
        </div>

<script>
/*=========================================
 * animatedModal.js: Version 1.0
 * author: João Pereira
 * website: http://www.joaopereira.pt
 * email: joaopereirawd@gmail.com
 * Licensed MIT 
=========================================*/

(function ($) {
 
    $.fn.animatedModal = function(options) {
        var modal = $(this);
        
        //Defaults
        var settings = $.extend({
            modalTarget:'animatedModal', 
            position:'fixed', 
            width:'100%', 
            height:'100%', 
            top:'0px', 
            left:'0px', 
            zIndexIn: '9999',  
            zIndexOut: '-9999',  
            color: '#39BEB9', 
            opacityIn:'1',  
            opacityOut:'0', 
            animatedIn:'zoomIn',
            animatedOut:'zoomOut',
            animationDuration:'.6s', 
            overflow:'auto', 
            // Callbacks
            beforeOpen: function() {},           
            afterOpen: function() {}, 
            beforeClose: function() {}, 
            afterClose: function() {}
 
            

        }, options);
        
        var closeBt = $('.close-'+settings.modalTarget);

        //console.log(closeBt)

        var href = $(modal).attr('href'),
            id = $('body').find('#'+settings.modalTarget),
            idConc = '#'+id.attr('id');
            //console.log(idConc);
            // Default Classes
            id.addClass('animated');
            id.addClass(settings.modalTarget+'-off');

        //Init styles
        var initStyles = {
            'position':settings.position,
            'width':settings.width,
            'height':settings.height,
            'top':settings.top,
            'left':settings.left,
            'background-color':settings.color,
            'overflow-y':settings.overflow,
            'z-index':settings.zIndexOut,
            'opacity':settings.opacityOut,
            '-webkit-animation-duration':settings.animationDuration,
            '-moz-animation-duration':settings.animationDuration,
            '-ms-animation-duration':settings.animationDuration,
            'animation-duration':settings.animationDuration
        };
        //Apply stles
        id.css(initStyles);

        modal.click(function(event) {       
            event.preventDefault();
            $('body, html').css({'overflow':'hidden'});
            if (href == idConc) {
                if (id.hasClass(settings.modalTarget+'-off')) {
                    id.removeClass(settings.animatedOut);
                    id.removeClass(settings.modalTarget+'-off');
                    id.addClass(settings.modalTarget+'-on');
                } 

                 if (id.hasClass(settings.modalTarget+'-on')) {
                    settings.beforeOpen();
                    id.css({'opacity':settings.opacityIn,'z-index':settings.zIndexIn});
                    id.addClass(settings.animatedIn);  
                    id.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', afterOpen);
                };  
            } 
        });



        closeBt.click(function(event) {
            event.preventDefault();
            $('body, html').css({'overflow':'auto'});

            settings.beforeClose(); //beforeClose
            if (id.hasClass(settings.modalTarget+'-on')) {
                id.removeClass(settings.modalTarget+'-on');
                id.addClass(settings.modalTarget+'-off');
            } 

            if (id.hasClass(settings.modalTarget+'-off')) {
                id.removeClass(settings.animatedIn);
                id.addClass(settings.animatedOut);
                id.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', afterClose);
            };

        });

        function afterClose () {       
            id.css({'z-index':settings.zIndexOut});
            settings.afterClose(); //afterClose
        }

        function afterOpen () {       
            settings.afterOpen(); //afterOpen
        }

    }; // End animatedModal.js

}(jQuery));



        


















(function($){ 

  var windowWidth = $(window).width();

  if ( windowWidth > 768) {

<?php /*
    if(localStorage.getItem('popState') != 'shown'){
    setTimeout(function() {
             $('#callModal').trigger('click');
     }, <?php esc_html__( $pu_timeout ) ;?>e3);

  <?php if ($pu_test == "pu_test_off") { ?>
        localStorage.setItem('popState','shown')
  <?php } elseif ($pu_test == "pu_test_on")  { ?>
        localStorage.setItem('popState','testMode')
  <?php } else { ?>
        localStorage.setItem('popState','testMode')
  <?php } ?>
      }
*/ ?>


// testing
  if(localStorage.getItem('popState') != 'shown'){
    setTimeout(function() {
             $('#callModal').trigger('click');
             // localStorage.setItem('popState','shown');
     }, <?php echo $pu_timeout;?>e3);

        //localStorage.setItem('popState','testMode');
        localStorage.setItem('popState','shown'); T
        
    }

  } //windowWidth > 768

//})(jQuery);


  function trackShowPu(event) {
    console.log('Pop Up Shown after <?php echo $pu_timeout;?> seconds');
  }

  function trackClicksPu(event) {
    console.log('Shown after <?php echo $pu_timeout;?> seconds -  Pop Up Link Clicked');
  }

  function trackClosePu(event) {
    console.log('Pop Up Closed - <?php echo $pu_timeout;?> seconds');
  }

if (typeof(ga) !== "undefined") {
  // Set GA event tracking
  function trackShowPu(event) {
    ga('send', 'event', {
      eventCategory: 'Growth Spark Pop Up',
      eventAction: 'view',
      eventLabel: 'Pop Up viewed'
    });
    console.log('Pop Up Shown');
  }

  function trackClicksPu(event) {
    ga('send', 'event', {
      eventCategory: 'Growth Spark Pop Up',
      eventAction: 'click',
      eventLabel: 'Visitor Interacted with the Pop Up Form'
    });
    console.log('Pop Up Link Clicked');
  }
  function trackSubmitPu(event) {
    ga('send', 'event', {
      eventCategory: 'Growth Spark Pop Up',
      eventAction: 'click',
      eventLabel: 'Visitor Submitted the Pop Up Form'
    });
    //console.log('Pop Up Form Submitted');
  }

  function trackClosePu(event) {
    ga('send', 'event', {
      eventCategory: 'Growth Spark Pop Up',
      eventAction: 'click',
      eventLabel: 'Visitor Closed the Pop Up'
    });
    console.log('Pop Up Closed');
  }

  $('#pu-form input').click(function() {
    trackClicksPu();
    // track any clicks within the form area of the pop up
  })
  $('#pu-form form').submit(function() {
    trackSubmitPu();
    // track any clicks within the form area of the pop up
    console.log('Pop Up Form Submitted');
  })

};

//})(jQuery);


// FULL PAGE POP OVER
//(function($){ 
  $("#callModal").animatedModal({

    //animatedIn:'lightSpeedIn',
    animatedOut:'bounceOutDown',
    color:'<?php echo $pop_up_bg_color; ?>',
    // color:'<?php //  esc_html__( $main_color ) ;?>',

      // Callbacks
      beforeOpen: function() {
         // console.log("Popover animation was called");
      },           
      afterOpen: function() {
          //console.log("Popover animation is completed");
          trackShowPu();
      }, 
      beforeClose: function() {
          //console.log("Popover Close was called");
          trackClosePu();
          // track when the pop up is closed
      }, 
      afterClose: function() {
          //console.log("Popover Close is completed");
      }
  })
})(jQuery);

</script>
<?php } 
// end primary pop up
////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////
// begin bottom right slide out

if ( $activate_slide_out == true ) {

  if (is_single()) { ?>

<style>
#slidebox {
    background-color: #fff;
    border-top: 3px solid <?php echo $cta_2_color;?>;
}

#slidebox p,
a.more {
    color: #555
}

a.more {
    color: <?php echo $cta_2_color;?>;
}

#slidebox h2 {
    color: <?php echo $cta_2_color;?>;
}

a.close {
    color: <?php echo $cta_2_color;?>;
}
</style>

        <!-- BOTTOM RIGHT SLIDE OUT -->
        <?php if ( ! dynamic_sidebar( 'bottom_slideout' ) ) : ?>
        
        <!-- no slide out :(  -->

        <?php endif; // end primary widget area ?>
        <!--  // BOTTOM RIGHT SLIDE OUT -->

<script>
  // BOTTOM RIGHT SLIDE OUT
(function($){
  $(function() {

      function trackClicksSo(event) {
        console.log('Slide Out Link Clicked');
      }

      function trackCloseSo(event) {
        console.log('Slide Out Closed');
      }

  });
  $(document).ready(function() {

      $(window).scroll(function(){
        
        var distanceTop = $('#footer-widget-area').offset().top - $(window).height();
        
        if  ($(window).scrollTop() > distanceTop) {
          $('#slidebox').animate({'right':'0px'},300);
            // console.log("Bottom Right Slidebox Shown");
            // trackShowSo();
        } else {
          //setTimeout(function() {
              $('#slidebox').stop(true).animate({'right':'-430px'},100);  
          //}, 1e3);
        }
      });

    // remove the slidebox when clicking the X 
    $('#slidebox .close').bind('click',function(){
      $(this).parent().remove();
    });
  });

})(jQuery);

</script>
  <?php }; 
} ;?>  