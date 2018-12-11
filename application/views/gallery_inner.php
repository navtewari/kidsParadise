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
            <span class="font-weight-bold">gallery</span>
        </h3>
        <div class="more"><a href="<?php echo site_url('web/imagePics') ?>"  style="color:#ff6600"><i class="fa fa-undo" aria-hidden="true"></i> Back to Gallery Category</a></div>
        <div class="inner-sec pt-md-4">            
            <div class="row proj_gallery_grid">
                <?php foreach ($gallery as $item) { ?>
                    <div class="col-sm-4 section_1_gallery_grid" style="margin-bottom:20px;">
                        <a href="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" class="showcase" data-rel="lightcase:myCollection:slideshow" title="Kids Paradise Public School">
                            <div class="section_1_gallery_grid1">
                                <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-fluid">
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Kids Paradise Public School</h3>                                    
                                </div>
                            </div>
                        </a>
                    </div>                   
                <?php } ?>                   
            </div>
        </div>
    </div>
</section>
