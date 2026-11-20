<?php
declare(strict_types=1);

const TAX_RATE = 0.12;

function get_chips(): array
{
    return [
        'C1' => ['name' => 'Crunchy JNath Bites', 'price' => 45.00, 'discount_rate' => 0.00],
        'C2' => ['name' => "Kuya's Crispy JNath", 'price' => 60.00, 'discount_rate' => 0.05],
        'C3' => ['name' => 'JNath Duo Crisps', 'price' => 85.00, 'discount_rate' => 0.05],
        'C4' => ['name' => 'Big Night Crunch', 'price' => 120.00, 'discount_rate' => 0.10],
        'C5' => ['name' => 'House Crunch', 'price' => 150.00, 'discount_rate' => 0.10],
    ];
}

function get_payment_methods(): array
{
    return [
        'gcash' => 'GCash',
        'maya' => 'Maya',
        'cash' => 'Cash on Delivery',
    ];
}

function format_peso(float $amount): string
{
    return '₱' . number_format($amount, 2);
}

function calculate_discount(float $price, float $rate): float
{
    return $price * $rate;
}

function calculate_tax(float $amount, float $rate = TAX_RATE): float
{
    return $amount * $rate;
}

function calculate_chip_prices(float $price, float $discount_rate): array
{
    $discount = calculate_discount($price, $discount_rate);
    $taxable = $price - $discount;
    $tax = calculate_tax($taxable);

    return [
        'price' => $price,
        'discount' => $discount,
        'tax' => $tax,
        'total' => $taxable + $tax,
    ];
}

function get_payment_note(string $method): string
{
    if ($method === 'gcash') {
        return 'Send your GCash payment after we confirm your order.';
    }

    if ($method === 'maya') {
        return 'Send your Maya payment after we confirm your order.';
    }

    return 'Please prepare the exact amount on delivery.';
}
