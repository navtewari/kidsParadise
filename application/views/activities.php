   
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $categ;?> Activities</li>
        </ol>
    </nav>
    <!-- breadcrumb -->
    <!-- //banner -->

    <!-- course details -->
    <div class="details-w3l py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5"><?php echo $categ;?>
                <span class="font-weight-bold">Activities</span>
            </h3>

            <div class="row inner_sec_info pt-md-4">
                <!-- left side -->
                <div class="col-lg-8 single-left">
                    <?php foreach($activity_ as $item){?>
                    <div class="single-left1 p-4 my-4 border">
                        <?php $stringCut = substr($item->TITLE_, 0, 28);?>
                        <h6 class="details-heading font-italic my-4"><?php echo $stringCut;?></h6>
                        <div style="clear: both; width: 100%; height:100px; overflow: hidden;">
                            <a href="<?php echo ADMIN___ . '/_assets_/activities/photos/'.$item->PICTURE_PATH;?>" target="_blank">
                            <img src="<?php echo ADMIN___ . '/_assets_/activities/photos/'.$item->PICTURE_PATH ;?>" border="0" align="left" width="100%" />
                            </a>
                        </div>
                        <h5>&nbsp;</h5>
                        <h5 class="card-title">
                            <span class="text-dark"><?php echo $item->TITLE_;?></span>
                        </h5>
                        <p><?php echo $item->BRIEF_;?></p>
                        <?php if($item->DET_PATH != 'x'){?>
                            <br>
                            <a href="<?php echo ADMIN___.'/_assets_/activities/'.$item->DET_PATH;?>" target="_blank" style="background: #DAF7A6; color: #075A01; font-size: 11px; padding: 2px 5px; border-radius: 5px">Click for detail...</a>
                        <?php } ?>
                    </div>
                <?php } ?>
                </div>
                <!-- //left side -->
                <!-- right side -->
                <div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
                    <div class="event-right1">
                        <div class="categories my-4 p-4 border">
                            <h3 class="blog-title text-dark">Categories</h3>
                            <ul>
                                <?php foreach ($activities_category as $categ_item) { ?>
                                <li class="mt-3">
                                    <i class="fas fa-check mr-2"></i>
                                    <a href="<?php echo site_url('web/activities/'.$categ_item->ACT_CATEG_ID);?>"><?php echo $categ_item->CATEGORY; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- //right side -->
            </div>
        </div>
    </div>
    <!-- //course details -->