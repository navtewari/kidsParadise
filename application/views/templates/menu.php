<div class="navigation-w3ls">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
                <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-center">
                        <li class="<?php if($menu==1){echo 'nav-item active';}else{echo 'nav_item';}?>">
                            <a class="nav-link text-white" href="<?php echo site_url('web');?>">Home</a>
                        </li>
                        <li class="<?php if($menu==2){echo 'nav-item active';}else{echo 'nav_item';}?>">
                            <a class="nav-link text-white" href="<?php echo site_url('web/about');?>">About Us</a>
                        </li>
                        <li class="<?php if($menu==3){echo 'nav-item active';}else{echo 'nav_item';}?> dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administration
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">CBSE Format</a>
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">House System</a>
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">School Parliament</a>
                                <div class="dropdown-divider"></div>           
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">Examination</a>
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">Admission</a>                                                                                     
                            </div>
                        </li>
                        <li class="<?php if($menu==4){echo 'nav-item active';}else{echo 'nav_item';}?> dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Academics
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">Syllabus</a>
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">Book List</a>
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">Exam</a>
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">E-books</a>                                
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">Previous Year's Paper</a>                                
                            </div>
                        </li>
                        <?PHP if(count($activities_category)!=0){?>
                            <li class="<?php if($menu==5){echo 'nav-item active';}else{echo 'nav_item';}?> dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Activities
                                </a>
                                <div class="dropdown-menu">
                                    <?php foreach ($activities_category as $categ_item) { ?>
                                    <a class="dropdown-item" href="<?php echo site_url('web/activities/'.$categ_item->ACT_CATEG_ID)?>"><?php echo $categ_item->CATEGORY; ?></a>
                                    <?php }?>      
                                </div>
                            </li>
                        <?php } ?>
                        <li class="<?php if($menu==6){echo 'nav-item active';}else{echo 'nav_item';}?> dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Media
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo site_url('web/uc')?>">News</a>
                                <a class="dropdown-item" href="<?php echo site_url('web/imagePics')?>">Photos</a>
                                <a class="dropdown-item" href="<?php echo site_url('web/videos')?>">Videos</a>                                                             
                            </div>
                        </li>
                        <li class="<?php if($menu==7){echo 'nav-item active';}else{echo 'nav_item';}?>">
                            <a class="nav-link text-white" href="<?php echo site_url('web/downloads')?>">Downloads</a>
                        </li>
                        <li class="<?php if($menu==8){echo 'nav-item active';}else{echo 'nav_item';}?>">
                            <a class="nav-link text-white" href="<?php echo site_url('web/uc')?>">Achievements</a>
                        </li>
                        <li class="<?php if($menu==9){echo 'nav-item active';}else{echo 'nav_item';}?>">
                            <a class="nav-link text-white" href="<?php echo site_url('web/uc')?>">Alumni</a>
                        </li>
                        <li class="<?php if($menu==10){echo 'nav-item active';}else{echo 'nav_item';}?>">
                            <a class="nav-link text-white" href="<?php echo site_url('web/contact')?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>