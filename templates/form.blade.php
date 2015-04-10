<script>
    var url = '{{plugins_url("/api.php", __DIR__)}}';
    var name = '{{$column_name}}';

</script>

<div class="selected_post_widget_form">
    <p>
        <label for="search_text">搜尋:</label>
        <input type="text" placeholder="Keyword" class="widefat search_text" id="search_text" name="search_text">
    </p>

    <div class="alignright">
        <a class="button button-primary search_btn">新增</a>
    </div>
    <div class="clearfix" style="clear:both;"></div>
    <ul class="result_list">
        @foreach($posts as $post)
            <?php
                $data = explode("|||", $post);
            ?>
            <li>{{$data[1]}}<span class="dashicons dashicons-trash remove"></span><input type="hidden" name="{{$column_name}}[]" value="{{$data[0]}}|||{{$data[1]}}" /></li>
        @endforeach
    </ul>

</div>