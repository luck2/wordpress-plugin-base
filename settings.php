<?php
/**
 * Created by PhpStorm => 
 * User: K => Sasaki
 * Date: 2014/05/25
 * Time: 0:46
 */


$reset_account_uri = admin_url('admin.php?page=base_to_wp_install&reset_account=1&step=1');

//TODO DEBUG
if (isset($_GET['delete']) && $_GET['delete']==1)
	delete_option('base_to_wp_account_activated');


//TODO DEBUG
var_dump(array(
	'base_to_wp_install_stage' => get_option('base_to_wp_install_stage'),
	'base_to_wp_account_activated' => get_option('base_to_wp_account_activated'),

	'base_to_wp_client_key' => get_option('base_to_wp_client_key'),
	'base_to_wp_client_secret' => get_option('base_to_wp_client_secret'),
	'base_to_wp_redirect_uri' => get_option('base_to_wp_redirect_uri'),
	'base_to_wp_access_token' => get_option('base_to_wp_access_token'),
	'base_to_wp_access_token_expires' => get_option('base_to_wp_access_token_expires'),
	'base_to_wp_refresh_token' => get_option('base_to_wp_refresh_token'),
	'base_to_wp_refresh_token_expires' => get_option('base_to_wp_refresh_token_expires'),

	'base_to_wp_request_oauth' => get_option('base_to_wp_request_oauth'),
	//初期設定
	'base_to_wp_hogehoge' => get_option("base_to_wp_hogehoge"),
	'base_to_wp_piyopiyo' => get_option('base_to_wp_piyopiyo'),
));

?>
<div class="wrap">
	<h2><?php _e('BASE To WordPress Settings', BASE_TO_WP_NAMEDOMAIN); ?></h2>
	<p><a href="<?php echo $reset_account_uri ;?>">[再セットアップ]</a></p>
	<p><a href="<?php echo '?page=base_to_wp_settings&delete=1' ;?>">#TODO DEBUG Delete option 'base_to_wp_account_activated'</a></p>
</div>

