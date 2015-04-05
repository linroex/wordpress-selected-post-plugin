<script>
    jQuery(document).ready(function(){
        jQuery('ul').sortable();
        jQuery('ul').disableSelection();
    });
</script>
<style>
    #selected_post_widget_form #result_list li{
        width: 100%;
        border: 1px black solid;
        background: black;
        margin-bottom: 5px;
        color: white;
        padding: 10px 0px 10px 10px;
        
    }
</style>

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