
    <!-- about -->
    <div class="about py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Welcome to
                <span class="font-weight-bold">Kids Paradise Public School</span>
            </h3>
            <div class="row pt-md-4">
                <div class="col-lg-6 about_right">
                    <h3 class="text-capitalize text-right font-weight-light font-italic">Learning at
                        <span class="font-weight-bold">Kids Paradise</span>
                    </h3>
                    <p class="text-right my-4 pr-4 border-right">Thanks for clicking here on your web tour of Kids Paradise Public School. I won't keep you long, but I just wanted to urge you to
take some time exploring. Enjoy your online visit and think about coming to see us in person. While the website is rich in
information, there is no substitute for visiting the School, where you can witness firsthand the remarkable opportunities here. I
think you'll find something special at the School..</p>                    
                </div>
                <div class="col-lg-6 left-img-agikes mt-lg-0 mt-sm-4 mt-3 text-right">
                    <img src="<?php echo base_url() . 'assets/images/ab.jpg'; ?>" alt="" class="img-fluid" />
                    
                </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    
<!-- video and events -->
<div class="video-choose-agile py-5" style="background: #ffffcc">
        <div class="container py-xl-5 py-lg-3">
            <div class="row">
                <div class="col-lg-6 video">
                    <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Recent
                        <span class="font-weight-bold">News</span>
                    </h3>
                    <?php foreach ($news as $item) { ?>
                        <?php $dt = explode("/", $item->DATE_); ?>
                        <div class="d-flex my-4">
                            <div class="col-sm-2 col-3 events-up p-3 text-center">
                                <h5 class="text-white font-weight-bold"><?php echo $dt[0]; ?>
                                    <span class="border-top font-weight-light pt-2 mt-2"><?php echo $this->my_library->getMonthsName(abs($dt[1])); ?></span>
                                </h5>
                            </div>
                            <div class="col-sm-10 col-9 events-right">
                                <h4 class="text-dark"><?php echo $item->SUBJECT; ?> </h4>
                                <ul class="list-unstyled">
                                    <!--li class="my-2">
                                        <i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li-->
                                    <li><i class="fas fa-map-marker mr-2"></i>Kids Paradise School.</li>
                                </ul>
                            </div>
                        </div>
                <?php } ?>
                </div>
                <div class="col-lg-6 events">
                    <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Important 
                        <span class="font-weight-bold">dates</span>
                    </h3>
                    <?php foreach($imp_dates as $item_){?>
                        <?php $dt_ = explode("-", $item_->DATE_); ?>
                        <div class="d-flex my-4">
                            <div class="col-sm-2 col-3 events-up p-3 text-center">
                                <h5 class="text-white font-weight-bold"><?php echo $dt_[2];?>
                                    <span class="border-top font-weight-light pt-2 mt-2"><?php echo $this->my_library->getMonthsName(abs($dt[1])); ?></span>
                                </h5>
                            </div>
                            <div class="col-sm-10 col-9 events-right">
                                <h4 class="text-dark"><?php echo date_format(date_create($item_->IMP_DATE), 'd-M-Y');?> </h4>
                                <ul class="list-unstyled">
                                    <li class="my-2">
                                        <i class="far fa-clock mr-2"></i><?php echo $item_->IMP_DATE_EVENT;?></li>
                                    <li>
                                        <i class="fas fa-map-marker mr-2"></i><?php echo $item_->DESC_;?></li>
                                </ul>
                            </div>
                        </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- //video and events -->        

    <!-- what we do -->
    <div class="why-choose-agile py-5">
        <div class="container py-xl-5 py-lg-3">            
            <div class="row agileits-w3layouts-grid pt-md-4">
                <div class="col-lg-4 services-agile-1">
                    <div class="row wthree_agile_us">
                        <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                            <div class="wthree_features_grid text-center p-3 border rounded">
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="col-9 agile-why-text-2">
                            <h4 class="text-capitalize text-white font-weight-bold mb-3">Our Vision</h4>
                            <p>"Student with Indian hearts and Global mind" to pace with the fast changing world.</p>
                            <a class="btn mt-3 service-button p-0" href="<?php echo site_url('web/about');?>" role="button">Read More
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 services-agile-1 my-lg-0 my-5">
                    <div class="row wthree_agile_us">
                        <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                            <div class="wthree_features_grid text-center p-3 border rounded">
                                <i class="fas fa-book"></i>
                            </div>
                        </div>
                        <div class="col-9 agile-why-text-2">
                            <h4 class="text-capitalize text-white font-weight-bold mb-3">Our Mission</h4>
                            <p>Our mission is to provide valuebased education and mould the character of the younger generation through a system of wholesome learning</p>
                            <a class="btn mt-3 service-button p-0" href="<?php echo site_url('web/about');?>" role="button">Read More
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 services-agile-1">
                    <div class="row wthree_agile_us">
                        <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                            <div class="wthree_features_grid text-center p-3 border rounded">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="col-9 agile-why-text-2">
                            <h4 class="text-capitalize text-white font-weight-bold mb-3">The Curriculum</h4>
                            <p>The school is affiliated to CBSE, New Delhi (CBSE Affiliation:CBSE/Aff./3530312, Provisional affiliation)</p>
                            <a class="btn mt-3 service-button p-0" href="#" role="button">Read More
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <!-- //what we do -->
         

