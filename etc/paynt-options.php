<?php

if (!defined('ABSPATH')) {
    exit();
}

return array(
    'enabled' => array(
        'title'       => __('Enable/Disable', 'versacomp_paynt'),
        'label'       => __('Enable PAYNT', 'versacomp_paynt'),
        'type'        => 'checkbox',
        'description' => '',
        'default'     => 'no',
    ),
    'title' => array(
        'title'       => __('Title', 'versacomp_paynt'),
        'type'        => 'text',
        'description' => __('This controls the title the user sees during checkout.', 'wc_securesubmit'),
        'default'     => __('Credit Card', 'versacomp_paynt'),
    ),
    'description' => array(
        'title'       => __('Description', 'versacomp_paynt'),
        'type'        => 'textarea',
        'description' => __('This controls the description the user sees during checkout.', 'wc_securesubmit'),
        'default'     => 'Pay with your credit card via PAYNT.',
    ),
    'public_key' => array(
        'title'       => __('Public Key Retail', 'versacomp_paynt'),
        'type'        => 'text',
        'description' => __('Public key for Choice Payments.', 'versacomp_paynt'),
        'default'     => '',
    )
);
