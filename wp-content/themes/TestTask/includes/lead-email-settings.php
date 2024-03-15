<?php

function lead_email_settings_page() {
    add_menu_page(
        'Email настройки лидов',
        'Email лидов',
        'manage_options',
        'lead-email-settings',
        'lead_email_settings_html'
    );
}
add_action('admin_menu', 'lead_email_settings_page');

function lead_email_settings_html() {
    ?>
    <div class="wrap">
        <h1>Email настройки лидов</h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('lead_email_group');
            do_settings_sections('lead-email-settings');
            submit_button('Сохранить настройки');
            ?>
        </form>
    </div>
    <?php
}

function lead_email_settings_init() {
    register_setting('lead_email_group', 'lead_email_addresses', 'sanitize_email_addresses');

    add_settings_section(
        'lead_email_section',
        'Адреса электронной почты лидов',
        'lead_email_section_cb',
        'lead-email-settings'
    );

    add_settings_field(
        'lead_email_addresses',
        'Введите адреса электронной почты',
        'lead_email_addresses_cb',
        'lead-email-settings',
        'lead_email_section'
    );
}
add_action('admin_init', 'lead_email_settings_init');

function lead_email_section_cb() {
    echo '<p>Введите адреса электронной почты</p>';
}

function lead_email_addresses_cb() {
    $value = get_option('lead_email_addresses');
    ?>
    <input type='text' name='lead_email_addresses' value='<?php echo esc_attr($value); ?>' />
    <?php
}

function sanitize_email_addresses($input) {
    $addresses = explode(',', $input);
    $cleaned_addresses = array_map('trim', $addresses);
    return implode(',', $cleaned_addresses);
}
