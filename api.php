<?php

if(isset($_GET['post_id'])){
    require_once(get_wordpress_site_root('wp-load.php'));
      
    echo json_encode(get_post($_GET['post_id'], OBJECT));
}

function get_wordpress_site_root($file = ''){
    $result = explode('wp-content', dirname(__FILE__))[0];
    if($file != ''){
        $result .= $file;
    }
    return $result;
}