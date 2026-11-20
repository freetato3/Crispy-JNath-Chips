<section class="container" id="chips">
    <h2>Our Chips</h2>
    <p>Prices are per pack. Tax is 12% of the discounted price.</p>

    <div class="grid">
        <?php foreach (get_chips() as $chip): ?>
            <?php $prices = calculate_chip_prices(price: $chip['price'], discount_rate: $chip['discount_rate']); ?>
            <div class="card">
                <h3><?php echo htmlspecialchars($chip['name']); ?></h3>
                <table>
                    <tr>
                        <td>Price</td>
                        <td><?php echo format_peso($prices['price']); ?></td>
                    </tr>
                    <tr>
                        <td>Discount (<?php echo number_format($chip['discount_rate'] * 100); ?>%)</td>
                        <td>-<?php echo format_peso($prices['discount']); ?></td>
                    </tr>
                    <tr>
                        <td>Tax (12%)</td>
                        <td><?php echo format_peso($prices['tax']); ?></td>
                    </tr>
                    <tr class="total">
                        <td>Total</td>
                        <td><?php echo format_peso($prices['total']); ?></td>
                    </tr>
                </table>
            </div>
        <?php endforeach; ?>
    </div>
</section>
