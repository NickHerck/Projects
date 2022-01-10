<?php

function my_acf_admin_head() {
    ?>
    <style type="text/css">

    #sectionimages img {
        object-fit: cover;
        min-height: 500px;
    }

    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');