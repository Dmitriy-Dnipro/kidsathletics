<?php
    if(has_term(9, 'gallery-category')){
        include(TEMPLATEPATH.'/template-parts/single-photo.php');
    }else{
        include(TEMPLATEPATH.'/template-parts/single-video.php');
    }

?>