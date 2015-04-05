<script>
    jQuery(document).ready(function(){
        jQuery('#selected_post_widget_form ul').sortable();
        jQuery('#selected_post_widget_form ul').disableSelection();
    });
</script>

<div id="selected_post_widget_form">
    <p>
        <label for="search_text">搜尋:</label>
        <input type="text" id="search_text" placeholder="Keyword" class="widefat" name="">
    </p>

    <div class="alignright">
        <a href="" class="button button-primary">新增</a>
    </div>
    <div class="clearfix" style="clear:both;"></div>
    <ul id="result_list">
        <li>1</li>
        <li>2</li>
        <li>3</li>
    </ul>
</div>