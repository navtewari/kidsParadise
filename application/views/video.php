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
            <span class="font-weight-bold">Videos</span>
        </h3>

        <div class="inner-sec pt-md-4">            
            <div class="row proj_gallery_grid">     
                <?php
                 ini_set("allow_url_fopen", 1);
                $json_link = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyBF4O-qyKNuV64-ckt3XmIVSjz2bQguHKI" .
                        "&channelId=UCzl_VCb1LyiJzxuW6ns7Qhg&part=snippet,id&order=date" .
                        "&maxResults=50";

                $json = file_get_contents($json_link);
                $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

                foreach ($obj['items'] as $post) {

                    $id = isset($post['id']['videoId']) ? $post['id']['videoId'] : "";
                    $published_at = isset($post['snippet']['publishedAt']) ? $post['snippet']['publishedAt'] : "";
                    $title = isset($post['snippet']['title']) ? $post['snippet']['title'] : "";
                    $description = isset($post['snippet']['description']) ? $post['snippet']['description'] : "";
                    $thumbnail = "https://i.ytimg.com/vi/{$id}/maxresdefault.jpg";

                    echo "<div class='col-sm-4 section_1_gallery_grid' style='margin-bottom:20px;'>"
                    ?>
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo "{$id}"; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <?php
                    echo "
    			<!--div>{$title}</div>
    			<div>{$description}</div-->
                    </div>";
                }
                ?>                
            </div>
        </div>
    </div>
</section>
