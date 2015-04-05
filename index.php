<?php
/**
 * Plugin Name: 精選文章集小工具
 * Plugin URI: https://github.com/linroex/wordpress-selected-post-plugin
 * Description: 讓你可以挑選文章並顯示在側邊欄的小工具
 * Version: 0.0.1
 * Author: linroex
 * Author URI: http://me.coder.tw
 */
use Windwalker\Renderer\BladeRenderer;

include(__DIR__ . '/vendor/autoload.php');

class Selected_Post extends WP_Widget {
    private $blade;

    public function __construct() {
        parent::__construct('selected_post', '精選文章集', ['description'=>'讓你可以挑選文章並顯示在側邊欄的小工具']);

        $this->blade = new BladeRenderer(__DIR__ . '/templates', ['cache_path'=> __DIR__ . '/cache']);

    }

    public function widget($args, $instance) {
        
    }

    public function form($instance) {
        var_dump($this->blade->render('example', ['name'=>'linroex']));
        exit();
    }

    public function update($new, $old) {

    }
}

add_action('widgets_init', function(){
    register_widget('Selected_Post');
});