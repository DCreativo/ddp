<?php 

if (!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')) exit();

define('PLUGIN_SLUG', 'elfsight-whatsapp-chat');

$elfsight_deleted_options = array(
    'purchase_code', 'activated', 'supported_until', 'other_products_hidden', 'latest_version', 'last_check_datetime'
);

function elfsight_get_option_name($name) {
    return str_replace('-', '_', PLUGIN_SLUG) . '_' . $name;
}

if (get_option(elfsight_get_option_name('activated')) || get_option(elfsight_get_option_name('purchase_code'))) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://a.elfsight.com/updates/v1/?action=deactivate&slug=' . PLUGIN_SLUG . '-cc&host=' . parse_url(site_url(), PHP_URL_HOST) . '&version=1.0.0&purchase_code=' . get_option(elfsight_get_option_name('purchase_code')));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_exec($ch);
}

foreach ($elfsight_deleted_options as $option) {
    delete_option(elfsight_get_option_name($option));
}

?>