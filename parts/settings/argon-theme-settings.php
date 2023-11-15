<h1>Theme Settings</h1>

<?php
settings_errors();
?>
<form action="options.php" method="post">
    <?php
    settings_fields('contact-info-group');
    do_settings_sections('argon-theme-settings');
    submit_button('Save!');
    ?>
</form>