<?php
if (!function_exists('generateWhatsAppUrl')) {
    function generateWhatsAppUrl($number)
    {
        // Clean the phone number (remove any non-numeric characters)
        $number = preg_replace('/[^0-9]/', '', $number);

        // If the number doesn't start with '+94', add '+94'
        if (strpos($number, '+94') !== 0) {
            // Check if the number starts with '0', and remove it
            if (substr($number, 0, 1) === '0') {
                $number = '+94' . substr($number, 1);
            } else {
                $number = '+94' . $number;
            }
        }

        // Build the WhatsApp URL
        return 'https://wa.me/' . $number;
    }
}


