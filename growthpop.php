<?php
/**
 * @package Growth Spark
 */
if ( function_exists( 'ot_get_option' ) ) {
  $full = ot_get_option( 'full_design' );
  $pop_up_title = ot_get_option( 'pop_up_title' );
  $pu_desc = ot_get_option( 'pop_up_description' );
  $form_code = ot_get_option( 'form_code' );
  $pu_settings = ot_get_option( 'pu_settings' );
  $pu_full = ot_get_option( 'pu_full' );
  $timeout = ot_get_option( 'timeout' );
  $pu_active = ot_get_option( 'pu_active' );
  $pu_test = ot_get_option( 'pu_test' );
}
if ($pu_active == "on") {
?>


        <!--Call modal-->
        <a id="callModal" href="#animatedModal"></a>
        <!-- FULL PAGE POP OVER -->
        <div id="animatedModal">
            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div  id="btn-close-modal" class="close-animatedModal"> 
                <img class="closebt" src="http://spark.growthhit.com/wp-content/themes/growthspark/inc/animatedModal/closebt.svg" alt="Close Button - X svg">
            </div>
                
            <div class="modal-content">
                <!--Your modal content goes here-->
                <h3>Do you want more success?</h2>
                <p class="m1">Hey there, We're GrowthHit. <br>
                We're determined to make YOU successful. <br>
                Why wait another second?</p>

                
                
                <div id="m-form">

                    <form id="" class="" action="/" method="post">

                        <div>

                            <input class="" type="text" name="" placeholder="EMAIL" value="" autofocus required>
                            <input class="submit" type="submit" id="step1" value="Analyze">

                        </div>

                    </form>

                </div>

            </div>
        </div>
      

        
<script>
$(document).ready(function() {
    if(localStorage.getItem('popState') != 'shown'){
    setTimeout(function() {
             $('#callModal').trigger('click');
     }, <?php echo $timeout;?>e3);

<?php if ($pu_test == "pu_test_off") { ?>
      localStorage.setItem('popState','shown')
<?php } elseif ($pu_test == "pu_test_on")  { ?>
	    localStorage.setItem('popState','testMode')
<?php } else { ?>
	    localStorage.setItem('popState','testMode')
<?php } ?>
    }
});


function trackClicks(event) {
  ga('send', 'event', {
    eventCategory: 'Growth Spark Pop Up',
    eventAction: 'click',
    eventLabel: 'Visitor Clicked The Pop Up Link'
  });
  console.log('Pop Up Link Clicked');
}

function trackClose(event) {
  ga('send', 'event', {
    eventCategory: 'Growth Spark Pop Up',
    eventAction: 'click',
    eventLabel: 'Visitor Closed the Pop Up'
  });
  console.log('Pop Up Closed');
}
$('#growthPopContent a').click(function() {
  trackClicks();
})
$('#closeModal').click(function() {
  trackClose();
})

</script>
<?php } ?>