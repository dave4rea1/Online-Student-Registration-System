<?php
// Product Details
// Minimum amount is $0.50 US
$itemName = "Registration & Tuition Fees"; 
$itemNumber = "PN12345"; 
$itemPrice = 37750.00; 
$currency = "ZAR"; 

/* Stripe API configuration
 * Remember to switch to your live publishable and secret key in production!
 * See your keys here: https://dashboard.stripe.com/account/apikeys
 */
define('STRIPE_API_KEY', 'sk_test_51LxesFI7KeHzbg9oUOfWItJR5fdSjmtH6hR4cgF6DJo3IbTNd7FJAsLfSjHWveyQithdCgP58vLA8eIpT3PBZn0K00ysA4fhcN');
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51LxesFI7KeHzbg9oShV6XD2vqSdp1Ktf7iT1lYFE9PlOvr40DYkNvdwS4KMsvZRbYKyx7yfkw55IUv1M8eMYybhl00Sr3fRMHi');
 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'final');