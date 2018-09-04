<!DOCTYPE html>
<html lang="eng">

    <head>
        <title>Kids Paradise Public School, Dineshpur, Udham-Singh Nagar</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content=""/>
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!--// Meta tag Keywords -->

        <!-- Custom-Files -->
        <!-- Bootstrap-Core-Css -->
        <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/bootstrap.css';?>">
        <!-- Testimonials-Css -->
        <link href="<?php echo base_url(). 'assets/css/mislider.css';?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(). 'assets/css/mislider-custom.css';?>" rel="stylesheet" type="text/css" />
        <!-- Style-Css -->
        <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/style.css';?>" type="text/css" media="all" />
        <!-- Font-Awesome-Icons-Css -->
        <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/fontawesome-all.css';?>">
        <!-- //Custom-Files -->

        <!-- Web-Fonts -->
        <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
              rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <!-- //Web-Fonts -->

    </head>
    
    <body>
    <!-- header -->
    <header>
        <!-- top header -->
        <div class="top-head-w3ls py-2 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <img src="<?php echo base_url() . 'assets/images/logo.png'; ?>" class="hidden-md-down" style="position: absolute"/> 
                        <h1 class="text-capitalize text-white hidden-lg-up" style="margin:auto;">
                            <img src="<?php echo base_url() . 'assets/images/logo.png'; ?>" style="max-width: 50px;margin-right: 10px;"/> Kids Paradise Public School</h1>
                    </div>
                    <!-- social icons -->
                    <div class="social-icons text-right col-5">
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
        <!-- //top header -->
        <!-- middle header -->
        <div class="middle-w3ls-nav py-2">
            <div class="container">
                <div class="row">
                    <a class="logo font-italic font-weight-bold col-lg-4 text-lg-left text-center" href="#"></a>
                    <div class="col-lg-8 right-info-agiles mt-lg-0 mt-sm-3 mt-1">
                        <div class="row">
                            <div class="col-sm-6 nav-middle">
                                <i class="far fa-envelope-open text-center mr-md-4 mr-sm-2 mr-4"></i>
                                <div class="agile-addresmk">
                                    <p>
                                        <span class="font-weight-bold text-dark">Mail Us</span>
                                        <a href="kppsdineshpur@gmail.com">kppsdineshpur@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6 nav-middle mt-sm-0 mt-2">
                                <i class="fas fa-phone-volume text-center mr-md-4 mr-sm-2 mr-4"></i>
                                <div class="agile-addresmk">
                                    <p>
                                        <span class="font-weight-bold text-dark">Call Us</span>
                                        05949-262486
                                    </p>
                                </div>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //middle header -->
    </header>
    <!-- //header -->    
    
    <?php $this->load->view('templates/banner-index');?>