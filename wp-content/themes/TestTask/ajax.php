<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

if (isset($_POST['action']) && $_POST['action'] == 'submit_lead_form') {
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $issue = sanitize_textarea_field($_POST['issue']);

    $current_datetime = current_time('mysql');
    $ip_address = $_SERVER['REMOTE_ADDR'];

    $lead_post = array(
        'post_title'    => $name,
        'post_content'  => $issue,
        'post_status'   => 'publish',
        'post_author'   => 1,
        'post_type'     => 'lead'
    );

    $lead_post_id = wp_insert_post($lead_post);
    update_post_meta($lead_post_id, 'phone', $phone);
    update_post_meta($lead_post_id, 'email', $email);
    update_post_meta($lead_post_id, 'submission_datetime', $current_datetime);
    update_post_meta($lead_post_id, 'ip_address', $ip_address);

    echo json_encode(array('success' => true, 'post_id' => $lead_post_id));

    if ($email) {
        $to = $email;
        $subject = 'Новое сообщение от пользователя';
        $message = "Имя: $name\n";
        $message .= "Телефон: $phone\n";
        $message .= "Email: $email\n";
        $message .= "Проблема: $issue\n";

        wp_mail($to, $subject, $message);
    }
}
