function insert(post_id, name){
    jQuery.getJSON(url, {'post_id': post_id}, function(response){
        jQuery('.open .result_list').append('<li>' + response.post_title + '<span class="dashicons dashicons-trash remove"></span><input type="hidden" name="' + name + '[]" value="' + post_id + '|||' + response.post_title + '" /></li>');
    });
}

jQuery(document).ready(function(){
    jQuery('.selected_post_widget_form ul').sortable();
    jQuery('.selected_post_widget_form ul').disableSelection();

    jQuery('.search_btn').click(function(e){
        e.preventDefault();
        insert(jQuery('.open .search_text').val(), name);
        // jQuery.getJSON(url, {'post_id': jQuery('.open .search_text').val()}, function(response){
        //     // console.log(response.post_title);
        //     jQuery('.open .result_list').append('<li>' + response.post_title + '<span class="dashicons dashicons-trash remove"></span><input type="hidden" name="' + name + '[]" value="' + jQuery('.open .search_text').val() + '" /></li>');
        // });
        
    });

    
});

jQuery(document).on('click','.open .remove',function(e){
    console.log('remove');
    e.preventDefault();
    jQuery(this).parent().remove();
    console.log(jQuery(this).parent());
});