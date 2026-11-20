<?php
declare(strict_types=1);

require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    exit;
}

$name = trim($_POST['customer_name'] ?? '');
$payment = $_POST['payment_method'] ?? '';
$location = trim($_POST['location'] ?? '');
$chipCode = $_POST['chip'] ?? '';
$requests = trim($_POST['requests'] ?? '');

$chips = get_chips();
$methods = get_payment_methods();

$valid = $name !== ''
    && $location !== ''
    && array_key_exists($payment, $methods)
    && array_key_exists($chipCode, $chips);

if (!$valid) {
    include 'header.php';
    echo '<section class="container">';
    echo '<p class="error">Invalid order. Please check your input.</p>';
    echo '<a href="index.php#order">Return to form</a>';
    echo '</section>';
    include 'footer.php';
    exit;
}

$chip = $chips[$chipCode];
$prices = calculate_chip_prices(price: $chip['price'], discount_rate: $chip['discount_rate']);

include 'header.php';
echo '<section class="container">';
echo '<div class="receipt">';
echo '<h2>Order Receipt</h2>';
echo '<p>Name: ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</p>';
echo '<p>Location: ' . htmlspecialchars($location, ENT_QUOTES, 'UTF-8') . '</p>';
echo '<p>Chip: ' . htmlspecialchars($chip['name']) . '</p>';
echo '<p>Payment method: ' . htmlspecialchars($methods[$payment]) . '</p>';
echo '<p>Additional requests: ' . ($requests !== '' ? nl2br(htmlspecialchars($requests, ENT_QUOTES, 'UTF-8')) : 'None') . '</p>';
echo '<table>';
echo '<tr><td>Price</td><td>' . format_peso($prices['price']) . '</td></tr>';
echo '<tr><td>Discount</td><td>-' . format_peso($prices['discount']) . '</td></tr>';
echo '<tr><td>Tax (12%)</td><td>' . format_peso($prices['tax']) . '</td></tr>';
echo '<tr class="total"><td>Total</td><td>' . format_peso($prices['total']) . '</td></tr>';
echo '</table>';
echo '<p>' . get_payment_note($payment) . '</p>';
echo '<p><a href="index.php#order">Place another order</a></p>';
echo '</div>';
echo '</section>';
include 'footer.php';
