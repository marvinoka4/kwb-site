<?php

function the_argon_theme_settings() {
    add_menu_page('Theme Settings', 'Theme Settings', 'manage_options', 'argon-theme-settings', 'theme_init', 'dashicons-superhero', '120' );
}

function the_argon_theme_settings_sections() {
    register_setting('contact-info-group', 'email');
    register_setting('contact-info-group', 'address');
    register_setting('contact-info-group', 'phone');
    register_setting('contact-info-group', 'tiktok');
    register_setting('contact-info-group', 'facebook');
    register_setting('contact-info-group', 'x');
    register_setting('contact-info-group', 'linkedin');
    register_setting('contact-info-group', 'instagram');
    register_setting('contact-info-group', 'whatsapp');
    register_setting('contact-info-group', 'youtube');

    add_settings_section('theme-index-options', 'Contact Information', 'theme_contact_options', 'argon-theme-settings');

    add_settings_field('email', 'Email', 'email_callback', 'argon-theme-settings', 'theme-index-options');
    add_settings_field('address-information', 'Address Information', 'address_callback', 'argon-theme-settings', 'theme-index-options');
    add_settings_field('phone-number', 'Phone Number', 'phone_callback', 'argon-theme-settings', 'theme-index-options');
    add_settings_field('tiktok', 'TikTok URL', 'tiktok_callback', 'argon-theme-settings', 'theme-index-options');
    add_settings_field('facebook-link', 'Facebook URL', 'facebook_callback', 'argon-theme-settings', 'theme-index-options');
    add_settings_field('x-link', 'X URL', 'x_callback', 'argon-theme-settings', 'theme-index-options');
    add_settings_field('linkedin-link', 'LinkedIn URL', 'linkedin_callback', 'argon-theme-settings', 'theme-index-options');
    add_settings_field('instagram-link', 'Instagram URL', 'instagram_callback', 'argon-theme-settings', 'theme-index-options');
    add_settings_field('whatsapp-link', 'WhatsApp URL', 'whatsapp_callback', 'argon-theme-settings', 'theme-index-options');
    add_settings_field('youtube-link', 'YouTube URL', 'youtube_callback', 'argon-theme-settings', 'theme-index-options');
}


add_action('admin_menu', 'the_argon_theme_settings');
add_action('admin_init', 'the_argon_theme_settings_sections');
function theme_init() {
    require_once(get_template_directory().'/parts/settings/argon-theme-settings.php');

}

function theme_contact_options() {
    echo 'Website Details';
}

function email_callback() {
    $preEmail = get_option('email');
    echo '<input type="text" name="email" placeholder="Email" value="'.$preEmail.'" />';
}

function address_callback() {
    $preAddress = get_option('address');
    echo "<textarea type='text' name='address' placeholder='Address' rows='4'>".$preAddress."</textarea>";
}

function phone_callback() {
    $prePhone = get_option('phone');
    echo '<input type="text" name="phone" placeholder="Phone No." value="'.$prePhone.'" />';
}

function tiktok_callback() {
    $preTikTok = get_option('tiktok');
    echo '<input type="text" name="tiktok" placeholder="TikTok" value="'.$preTikTok.'" />';
}

function facebook_callback() {
    $preFacebook = get_option('facebook');
    echo '<input type="text" name="facebook" placeholder="Facebook URL" value="'.$preFacebook.'" />';
}

function x_callback() {
    $preX = get_option('x');
    echo '<input type="text" name="x" placeholder="X URL" value="'.$preX.'" />';
}

function linkedin_callback() {
    $preLinkedin = get_option('linkedin');
    echo '<input type="text" name="linkedin" placeholder="LinkedIn URL" value="'.$preLinkedin.'" />';
}

function instagram_callback() {
    $preInstagram = get_option('instagram');
    echo '<input type="text" name="instagram" placeholder="Instagram URL" value="'.$preInstagram.'" />';
}

function whatsapp_callback() {
    $preWhatsApp = get_option('whatsapp');
    echo '<input type="text" name="whatsapp" placeholder="WhatsApp URL" value="'.$preWhatsApp.'" />';
}

function youtube_callback() {
    $preYouTube = get_option('youtube');
    echo '<input type="text" name="youtube" placeholder="YouTube URL" value="'.$preYouTube.'" />';
}

//Sanitize Settings
function argon_theme_sanitize ($input) {

    $output = sanitize_text_field($input);
    return $output;

}