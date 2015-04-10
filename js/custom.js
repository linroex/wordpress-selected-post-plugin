function insert(post_id, name){
    jQuery.getJSON(url, {'post_id': post_id}, function(response){
        jQuery('.open .result_list').append('<li>' + response.post_title + '<span class="dashicons dashicons-trash remove"></span><input type="hidden" name="' + name + '[id][]" value="' + post_id + '" /><input type="hidden" name="' + name + '[title][]" value="' + response.post_title + '"/></li>');
    });
}

jQuery(document).ready(function(){
    jQuery('.selected_post_widget_form ul').sortable();
    jQuery('.selected_post_widget_form ul').disableSelection();
    
});

jQuery(document).on('domchange', function(){
    jQuery('.selected_post_widget_form ul').sortable();
    jQuery('.selected_post_widget_form ul').disableSelection();
})

jQuery(document).on('click', '.search_btn', function(e){
    e.preventDefault();
    insert(jQuery('.open .search_text').val(), name);
});

jQuery(document).on('click','.open .remove',function(e){
    e.preventDefault();
    jQuery(this).parent().remove();
});