

<div class="section" id="sectionT6" style="background-color: #f8273d">
    <section class="main-section" style="overflow: visible !important;     margin-top: -88px;"><!--header-start-->
        <div class="" >
            <h2 style="color: #fff; font-size: 50px; font-family: 'Times New Roman'" id="test_header">Testimonials</h2>
            <h6  style="color: #fff; font-size: 23px;">Our Customers Make Us</h6>
            <div class="row">
                <div class="col-md-6 col-sm-12 monial" >
                    <div class="blk-back text-center" style="padding-bottom: 30%; margin-left: 5%; margin-right: 5%">

                    </div>
                </div>

                <div class="col-md-6 col-sm-12 text-center">
                    <div class="col-md-6 col-sm-6 col-xs-6 text-center monial">
                        <div class="blk-back2" >

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 text-center monial" >
                        <div class="blk-back2" id="abc">

                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-left mg-top text-center">
                    <div class="col-md-12  col-sm-12 text-center monial">
                        <h3 class="pt30" style="color: #fff; font-size: 23px;"><span style="color:black; font-size: 35px;">"</span> Lorem Ipsum Ida Ta Somain Lorem Ipsum Ida Ta Somain Lorem Ipsum Ida Ta Somain <span style="color:black; font-size: 35px;">"</span></h3>
                    </div>
                </div>

            </div>
            <!--<div class="parent">
                <img class="floated_child" src="..." />
                <span class="clear"></span>
            </div>-->
    </section>
</div>

<div class="section" id="section8">
    <div class="header-test" style="background:url('img/home/Background4.jpg');   margin-top: -73px;">
        <!--header-start-->
        <div class="container" style="    margin-top: -153px;">
            <div class="row">

                <div class="col-md-8 col-md-offset-2" style="padding-top:148px;padding-bottom:50px;">
                    <div class="wht-back-test-but text-left" >
                        <div class="col-xs-12 col-md-5">
                            <h3 style="color:#000;font-size:18px">You're One Step Away from
                                running a great Business </h3>
                        </div>
                        <div class="col-xs-6 col-md-3">
<span><a class="link1 animated fadeInUp delay-1s servicelink" href="#service" >Read FAQ</a>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            &nbsp;

                            <a class="link animated fadeInUp delay-1s servicelink" href="#service">GRAB IT</a></span>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>
    <footer class="footer">
        <div class="container">
            <h2 style="color:#fff;margin-bottom:20px;">Contact Us</h2>
            <div class="col-md-2 text-center">
                <img src="img/logo2.png" class="img-thumbnail hidden-xs" style="background:none;border:0px;">

            </div>
            <div class="col-md-3 col-sm-6 col-md-offset-1">
                <ul style="padding:0;color:#fff;">
                    <li>Stanford Financial Square 2600 <br>El Camino Real, Suite 415,<br> Palo Alto, CA-94306<br> USA</li>
                    <li>A-94 Sector-41, Noida,<br> UP-201301<br> India </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 foot-no" style="color:#fff;">
                <p><span style="background:#fff;padding:3px 9px;border-radius:15px;">
			<i class="fa fa-mobile" style="color:#000;font-size:18px;"></i></span> +1 (929) 4230-339
                </p>
                <p><span style="background:#fff;padding:3px 9px;border-radius:15px;">
			<i class="fa fa-mobile" style="color:#000;font-size:18px;"></i></span> &nbsp +91 8588800448</p>
                <p><span style="background:#fff;padding:4px 9px;border-radius:20px;">
			<i class="fa fa-envelope" style="color:#000;font-size:10px;padding-top:0px;"></i></span> &nbsp info@strawberrypos.com</p>
            </div>
            <div class="col-md-3" style="color:#fff;">

                <div class='col-sm-12' id='final'>
                    <h6 style="color:#fff;"><center>Follow Us:</center></h6>
                </div>
                <div class="social-media">

                    <ul>
                        <a href="" target="_blank"><li>
                                <i class="fa fa-twitter"></i>
                            </li></a>
                        <a href="" target="_blank"><li>
                                <i class="fa fa-facebook"></i>
                            </li></a>
                        <a href="" target="_blank"><li>
                                <i class="fa fa-google-plus"></i>
                            </li></a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

<script type="text/javascript">
    $(document).ready(function(e) {
        //$('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>

<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100
        }
    );
    wow.init();
</script>


<script type="text/javascript">
    $(window).load(function(){

        $('.main-nav li a, .servicelink').bind('click',function(event){
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 152
            }, 1500,'easeInOutExpo');
            /*
             if you don't want to use the easing effects:
             $('html, body').stop().animate({
             scrollTop: $($anchor.attr('href')).offset().top
             }, 1000);
             */
            if ($(window).width() < 768 ) {
                $('.main-nav').hide();
            }
            event.preventDefault();
        });
    })
</script>

<script type="text/javascript">

    $(window).load(function(){


        var $container = $('.portfolioContainer'),
            $body = $('body'),
            colW = 375,
            columns = null;


        $container.isotope({
            // disable window resizing
            resizable: true,
            masonry: {
                columnWidth: colW
            }
        });

        $(window).smartresize(function(){
            // check if columns has changed
            var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
            if ( currentColumns !== columns ) {
                // set new column count
                columns = currentColumns;
                // apply width to container manually, then trigger relayout
                $container.width( columns * colW )
                    .isotope('reLayout');
            }

        }).smartresize(); // trigger resize to set container width
        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({

                filter: selector,
            });
            return false;
        });

    });

</script>



<script type="text/javascript" src="js/jquery.fullPage.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            sectionsColor: []
        });
    });
</script>
</body>



<style>
    .blk-back2 {
        background: white;
        padding: 27% 15% 27% 15%;
        border-radius: 10px;
        margin-bottom: 10px;
        width: 74%;
    }
    .blk-back1{
        background: white;
    }
    .blk-back{
        background: white;
    }
    span.clear { clear: left; display: block; }

    #test_header{
        padding-top: 40px;
    }

    @media (max-width: 768px) {
        .blk-back {
            padding: 22% 10% !important;
            margin-left: 5%;
            margin-right: 11%;
        }
        .blk-back2 {
            background: white;
            padding: 27% 15% 27% 15%;
            border-radius: 10px;
            margin-bottom: 10px;
            width: 100%;
        }
    }
    @media (max-width:767px) and (min-width:615px) {


        .main-section {
            padding: 0px 0;
        }


        .blk-back2 {
            background: white;
            padding: 19% 1% 19% 0%;
            border-radius: 10px;
            margin-bottom: 10px;
            width: 100%;
        }
        .blk-back {
            padding: 18% 10% !important;
        }
    }
    @media (max-width: 991px) and (min-width: 768px) {

        .main-section {
            padding: 0px 0;
        }
        .blk-back2 {
            background: white;
            padding: 15% 18% 11% 15%;
            border-radius: 10px;
            margin-bottom: -21px;
            width: 89%;
        }
        .blk-back {
            padding-bottom: 6% !important;
            margin-left: 5% !important;
            margin-right: 11% !important;
        }
    }
</style>

</html>