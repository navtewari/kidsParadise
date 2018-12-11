<!-- footer -->
<footer>
    <div class="container py-4">
        <div class="row py-xl-5 py-sm-3">
            <div class="col-lg-6 map">
                <h2 class="contact-title text-capitalize text-white font-weight-light mb-sm-4 mb-3">our
                    <span class="font-weight-bold">directions</span>
                </h2>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="auto" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=Kids%20Paradise%20public%20school%2C%20%20DURGAPUR%20No.-2%2CDINESHPUR%2C%20Dist.-%20U.S.NAGAR(UTTARAKHAND)&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="#"></a></div><style>.mapouter{height:250px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:auto;}</style></div>                        

            </div>
            <div class="col-lg-6 contact-agileits-w3layouts mt-lg-0 mt-4">
                <h4 class="contact-title text-capitalize text-white font-weight-light mb-sm-4 mb-3">get in
                    <span class="font-weight-bold">touch</span>
                </h4>
                <p class="conta-para-style border-left pl-4">If you have any questions about the school please contact us at following address. We try and respond to all queries</p>
                <div class="subscribe-w3ls my-xl-5 my-4">

                </div>
                <p class="para-agileits-w3layouts text-white">
                    <i class="fas fa-map-marker pr-3"></i>Kids Paradise public school, <br><span style="padding-left:27px;">DURGAPUR No.-2,DINESHPUR, Dist.- U.S.NAGAR(UTTARAKHAND)</span></p>                            
                <p class="para-agileits-w3layouts text-white my-sm-3 my-2">
                    <i class="fas fa-phone pr-3"></i>00000-111111</p>
                <p class="para-agileits-w3layouts">
                    <i class="far fa-envelope-open pr-2"></i>
                    <a href="mailto:kppsdineshpur@gmail.com" class=" text-white">kppsdineshpur@gmail.com</a>
                </p>
            </div>
        </div>
    </div>
    <div class="copyright-agiles py-3">
        <div class="container">
            <div class="row">
                <p class="col-lg-8 copy-right-grids text-white text-lg-left text-center mt-lg-1">© 2018 Kids Paradise Public School. All Rights Reserved | Developed by
                    <a href="https://teamfreelancers.com/" target="_blank">Teamfreelancers.com</a>
                </p>
                <!-- social icons -->
                <div class="social-icons text-lg-right text-center col-lg-4 mt-lg-0 mt-3">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="fab fa-facebook-f icon-border facebook rounded-circle"> </a>
                        </li>
                        <li class="mx-2">
                            <a href="#" class="fab fa-twitter icon-border twitter rounded-circle"> </a>
                        </li>
                        <li>
                            <a href="#" class="fab fa-google-plus-g icon-border googleplus rounded-circle"> </a>
                        </li>
                        <li class="ml-2">
                            <a href="#" class="fas fa-rss icon-border rss rounded-circle"> </a>
                        </li>
                    </ul>
                </div>
                <!-- //social icons -->
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->


<!-- Js files -->
<!-- JavaScript -->
<script src="<?php echo base_url() . 'assets/js/jquery-2.2.3.min.js'; ?>"></script>
<!-- Default-JavaScript-File -->
<script src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->

<!-- banner slider -->
<script src="<?php echo base_url() . 'assets/js/slider.js'; ?>"></script>
<!-- //banner slider -->

<!-- testimonial-plugin -->
<script src="<?php echo base_url() . 'assets/js/mislider.js'; ?>"></script>
<script>
    jQuery(function ($) {
        var slider = $('.mis-stage').miSlider({
            //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
            stageHeight: 320,
            //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
            slidesOnStage: false,
            //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
            slidePosition: 'center',
            //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
            slideStart: 'mid',
            //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
            slideScaling: 150,
            //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
            offsetV: -5,
            //  Center slide contents vertically - Boolean. Default: false
            centerV: true,
            //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
            navButtonsOpacity: 1,
        });
    });
</script>
<!-- //testimonial-plugin -->

<!-- numscroller-js-file -->
<script src="<?php echo base_url() . 'assets/js/numscroller-1.0.js'; ?>"></script>
<!-- //numscroller-js-file -->
<!--//gallery-->   
<?php
$callSelect2 = 0;
if (strpos($_SERVER['REQUEST_URI'], 'gallery_detail') == false) {
    $callSelect2++;
}
if ($callSelect2 == 0) {
    ?>
<!-- simpleLightbox -->
<link href="<?php echo base_url() . 'assets/css/simpleLightbox.css'; ?>" rel='stylesheet' type='text/css' />
<script src="<?php echo base_url() . 'assets/js/simpleLightbox.js'; ?>"></script>
<script>
    $('.proj_gallery_grid a').simpleLightbox();
</script>
<!-- //simpleLightbox -->
    <?php
} else {
    $callSelect2 = 0;
}
?>   

<!-- smooth scrolling -->
<script src="<?php echo base_url() . 'assets/js/SmoothScroll.min.js'; ?>"></script>
<!-- //smooth scrolling -->

<!-- move-top -->
<script src="<?php echo base_url() . 'assets/js/move-top.js'; ?>"></script>
<!-- easing -->
<script src="<?php echo base_url() . 'assets/js/easing.js'; ?>"></script>
<!--  necessary snippets for few javascript files -->
<script src="<?php echo base_url() . 'assets/js/edulearn.js'; ?>"></script>

<!-- //Js files -->
<!-- //scrolling script -->
<script src="<?PHP echo base_url() . 'assets/js/jquery.easing.min.js'; ?>"></script>
<script src="<?PHP echo base_url() . 'assets/js/jquery.easy-ticker.js'; ?>"></script>   
<script type="text/javascript">
    $(document).ready(function () {

        var dd = $('.vticker').easyTicker({
            direction: 'up',
            easing: 'easeInOutBack',
            speed: 'slow',
            interval: 5000,
            height: 'auto',
            visible: 3,
            mousePause: 0,
            controls: {
                up: '.up',
                down: '.down',
                toggle: '.toggle',
                stopText: 'Stop !!!'
            }
        }).data('easyTicker');
        
        var dd = $('.vticker1').easyTicker({
            direction: 'up',
            easing: 'easeInOutBack',
            speed: 'slow',
            interval: 5000,
            height: 'auto',
            visible: 3,
            mousePause: 0,
            controls: {
                up: '.up1',
                down: '.down1',
                toggle: '.toggle1',
                stopText: 'Stop !!!'
            }
        }).data('easyTicker');


        $('.vis').click(function () {
            dd.options['visible'] = 3;

        });

        $('.visall').click(function () {
            dd.stop();
            dd.options['visible'] = 0;
            dd.start();
        });

    });
</script>
</body>

</html>