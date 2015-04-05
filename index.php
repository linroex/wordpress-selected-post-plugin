<?php
/**
 * Plugin Name: 精選文章集小工具
 * Plugin URI: https://github.com/linroex/wordpress-selected-post-plugin
 * Description: 讓你可以挑選文章並顯示在側邊欄的小工具
 * Version: 0.0.1
 * Author: linroex
 * Author URI: http://me.coder.tw
 */

class Selected_Post extends WP_Widget {
    public function __construct() {

    }

    public function widget($args, $instance) {

    }

    public function form($instance) {

    }

    public function update($new, $old) {

    }
}

add_action('widgets_init', function(){
    register_widget('Selected_Post');
});