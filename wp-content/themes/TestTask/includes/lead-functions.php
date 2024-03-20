<?php

function add_lead_meta_boxes() {
    add_meta_box(
        'lead_meta_box',
        'Дополнительные данные лидов',
        'lead_meta_box_callback',
        'lead',
        'normal',
        'high'
    );
}

function lead_meta_box_callback($post) {
    $lead_fields = [
        'phone' => [
            'label' => 'Телефон',
            'value' => get_post_meta($post->ID, 'phone', true)
        ],
        'email' => [
            'label' => 'Email',
            'value' => get_post_meta($post->ID, 'email', true)
        ],
        'submission_datetime' => [
            'label' => 'Дата и время отправки',
            'value' => get_post_meta($post->ID, 'submission_datetime', true)
        ],
        'ip_address' => [
            'label' => 'IP адрес отправителя',
            'value' => get_post_meta($post->ID, 'ip_address', true)
        ]
    ];

    foreach ($lead_fields as $key => $field) {
        ?>
        <p>
            <label for="lead_<?php echo esc_attr($key); ?>"><?php echo esc_html($field['label']); ?>:</label><br>
            <input type="text" id="lead_<?php echo esc_attr($key); ?>" name="lead_<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($field['value']); ?>">
        </p>
        <?php
    }
}

function save_lead_meta($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $post_type = get_post_type($post_id);

    if ($post_type != 'lead') {
        return;
    }

    $email_sent = get_post_meta($post_id, 'email_sent', true);

    if (!$email_sent) {
        $lead_email = get_option('admin_email');
        $lead_subject = 'Новый лид на вашем сайте';
        $lead_message = 'На вашем сайте появился новый лид.';

        wp_mail($lead_email, $lead_subject, $lead_message);

        update_post_meta($post_id, 'email_sent', true);
    }

    if (isset($_POST['lead_phone'])) {
        update_post_meta($post_id, 'phone', sanitize_text_field($_POST['lead_phone']));
    }
    if (isset($_POST['lead_email'])) {
        update_post_meta($post_id, 'email', sanitize_email($_POST['lead_email']));
    }
}
add_action('save_post', 'save_lead_meta');


add_action('admin_init', 'add_lead_meta_boxes');
add_action('save_post_lead', 'save_lead_meta');
