<script>
    var url = '{{plugins_url("/api.php", __DIR__)}}';
</script>

<div class="selected_post_widget_form">
    <p>
        <label for="search_text">搜尋:</label>
        <input type="text" placeholder="Keyword" class="widefat search_text" name="">
    </p>

    <div class="alignright">
        <a class="button button-primary search_btn">新增</a>
    </div>
    <div class="clearfix" style="clear:both;"></div>
    <ul class="result_list">
        {{-- <li>1 <i class="dashicons dashicons-trash remove"></i></li>
        <li>2 <i class="dashicons dashicons-trash remove"></i></li>
        <li>3 <i class="dashicons dashicons-trash remove"></i></li> --}}


    </ul>
</div>