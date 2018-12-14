   
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">News </li>
        </ol>
    </nav>
    <!-- breadcrumb -->
    <!-- //banner -->

    <!-- course details -->
    <div class="details-w3l py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">
                <span class="font-weight-bold">News</span>
            </h3>

            <div class="row inner_sec_info pt-md-4">
                <!-- left side -->
                <div class="col-lg-8 single-left">
                    <?php foreach($news_ as $item){?>
                        <?php $dt = explode("/", $item->DATE_); ?>
                    <div class="single-left1 p-4 my-4 border">
                        <h6 class="details-heading font-italic my-4"><?php echo $item->SUBJECT;?></h6>
                        <div style="clear: both; width: 100%;overflow: hidden;">
                            <?php echo $item->NEWS;?>
                        </div>
                        <br>
                        <h6 class="font-weight-bold;" style="color: #7FB3D5 !important"><?php echo $dt[0]; ?>,
                            <span class="border-top font-weight-light pt-2 mt-2"><?php echo $this->my_library->getMonthsName(abs($dt[1])); ?>, <?php echo $dt[2];?></span>
                        </h6>
                        <?php if($item->PATH_ATTACH != 'x'){?>
                            <a href="<?php echo ADMIN___.'/_assets_/newsevents/'.$item->PATH_ATTACH;?>" target="_blank" style="background: #DAF7A6; color: #075A01; font-size: 11px; padding: 0px 5px; border-radius: 5px; float: right">Attachment</a>
                        <?php } ?>
                    </div>
                <?php } ?>
                </div>
                <!-- //left side -->
                <!-- right side -->
                <div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
                    <div class="event-right1">
                        <div class="categories my-4 p-4 border">
                            <h3 class="blog-title text-dark">Activities</h3>
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