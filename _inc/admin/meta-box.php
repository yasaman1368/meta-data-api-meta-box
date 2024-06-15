<?php

function yas_register_price_meta_box()
{
    add_meta_box(
        'yas_price_meta_box',
        ' قیمت',
        'price_meta_box_html',
        'post',
        'advanced',
        'default'
    );
}

function price_meta_box_html($post)
{ ?>
    <label for="price" style="font-weight:bold; color:blue"> قیمت</label>
    <input type="text" name="price" value="<?php echo get_post_meta($post->ID, '_yas_price', true)
                                            ?>" id="price" placeholder="قیمت  را وارد کنید">
<?php
}
function yas_video_url_meta_box($post_id)
{
    if (!empty($_POST['price']) || !empty($_POST['video-url'])) {
        $video_url = sanitize_text_field($_POST['video-url']);
        $price = sanitize_text_field($_POST['price']);
        update_post_meta($post_id, '_yas_video_url', $video_url);
        update_post_meta($post_id, '_yas_price', $price);
    }
}

add_action('add_meta_boxes', 'yas_register_video_url_meta_box');
add_action('add_meta_boxes', 'yas_register_price_meta_box');
add_action('save_post', 'yas_video_url_meta_box');
