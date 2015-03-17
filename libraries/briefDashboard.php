<?
/**
 * Brief Form
 */

function addBriefMenu(){
//add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
add_menu_page('Brand Page', 'Brand Info', 'read', 'brief_form', 'briefForm','','4.1');

}


function briefForm(){
if(!current_user_can('manage_options')){
	//wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}

?>
<div class="wrap">

	<h2 style="margin-bottom: 30px;">Brand Info</h2>
	
	<iframe id="briefform" src="<?php echo esc_attr( get_option('brief_url') );?><?php echo esc_attr( get_option('brief_account') );?>" style="<?php echo esc_attr( get_option('brief_style') ); ?>" frameborder="0"></iframe>

</div>
<?php

}