<?php
    $video_title = get_field('video_title');
    $video = get_field('video');
?>

<div class="videoblock d-flex flex-column" id="video">
    <div class="textcontainer">
        <h1><?php echo $video_title ?></h1>
    </div>
    <div class="videocontainer">
        <iframe width="100%" height="600px"
            src="<?php echo $video ?>">
        </iframe>
    </div>
</div>