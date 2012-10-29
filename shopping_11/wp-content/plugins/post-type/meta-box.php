<?php 
add_action('add_meta_boxes','add_feature_meta');
//add_action('save_post','save_feature_meta');
function add_feature_meta(){
	add_meta_box('feature','ویژگی های منحصربفرد','inner_featuer_meta','products','advanced','default');
}
function inner_featuer_meta(){
	wp_nonce_field(plugin_basename(__FILE__), 'wpnonce');
	$post_id=$post->ID;
	$feature=get_post_meta($post_id,'feature',true);
	?>
<textarea cols="130" rows="10"name="feature" id="feature"></textarea>
	<?php
}



