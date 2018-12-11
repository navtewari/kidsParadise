<!-- breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo site_url('web'); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $pageName ?></li>
    </ol>
</nav>
<!-- breadcrumb -->
<!-- gallery -->
<section class="gallery py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our
            <span class="font-weight-bold">gallery (Photos)</span>
        </h3>
        <div class="inner-sec pt-md-4">            
            <div class="row proj_gallery_grid">
                <?php foreach ($gallery_category as $item) { ?>                    
                        <div class="col-sm-4 section_1_gallery_grid" style="margin-bottom:20px;">
                            <a href="<?php echo site_url('web/gallery_detail/' . $item->CATEG_ID); ?>">
                            <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-responsive"><br>
                            <h3 align="center"><?php echo $item->CATEGORY; ?></h3>
                            <?php if ($item->DESC != '') { ?>
                                <p align="center"><?php echo $item->DESC; ?></p>
                            <?php } ?>
                            </a>
                        </div><!-- /.portfolio-item -->
               <?php } ?>                   
            </div>
        </div>
    </div>
</section>
