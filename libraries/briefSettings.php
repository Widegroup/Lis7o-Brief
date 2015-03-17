<?php
/**
 *  Brief Settings
 */

function addBriefSettingsMenu() {
	add_submenu_page( 'brief_form', 'Brief - Settings', 'Settings', 'manage_options', 'brief_settings', 'briefSettings' ); 

	//call register settings function
	add_action( 'admin_init', 'register_briefsettings' );
}

//Settings register.
function register_briefsettings() {
	register_setting( 'brief-settings', 'brief_url' );
	register_setting( 'brief-settings', 'brief_style' );
	register_setting( 'brief-settings', 'brief_account' );
}

//settings form
function briefSettings() {
?>
<div class="wrap">
<h2>Brief Client > Settings</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'brief-settings' ); ?>
    <?php do_settings_sections( 'brief-settings' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Brief URL</th>
        <td><input style="width: 60%;" type="text" name="brief_url" value="<?php echo esc_attr( get_option('brief_url') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Brief AccountID</th>
        <td><input style="width: 60%;" type="text" name="brief_account" value="<?php echo esc_attr( get_option('brief_account') ); ?>" placeholder="Enter your Account Id"/></td>
        </tr>

        <tr valign="top">
        <th scope="row">Brief Style</th>
        <td><input style="width: 60%;" type="text" name="brief_style" value="<?php echo esc_attr( get_option('brief_style') ); ?>" placeholder="Add custom css to iframe brief"/></td>
        </tr>
        
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>