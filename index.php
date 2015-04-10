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

        wp_register_script('Selected-Post-custom-script', plugins_url('/js/custom.js', __FILE__));
        wp_register_style('Selected-Post-custom-style', plugins_url('/css/style.css', __FILE__));

        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-ui-core');
        wp_enqueue_script('jquery-ui-sortable');
        wp_enqueue_script('Selected-Post-custom-script');
        wp_enqueue_style('Selected-Post-custom-style');
    }

    public function widget($args, $instance) {
        echo $this->blade->render('widget');

    }

    public function form($instance) {
        
        echo $this->blade->render('form', [
            'column_name'=>$this->get_field_name('post_id'), 
            'posts'=>$instance['post_id']
        ]);
    }

    public function update($new, $old) {
        return $new;
        // var_dump($new);
        // exit();
        
    }
}

add_action('widgets_init', function(){
    register_widget('Selected_Post');
});