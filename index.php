<?php include 'header.php'; ?>

<section class="hero" id="home">
    <div class="container">
        <h1>Crispy. Juicy. Matarap!</h1>
        <p>Subukan na ang Crispy JNath Chips!</p>
        <a class="button" href="#order">Order Now</a>
    </div>
</section>

<?php include 'menu.php'; ?>

<section class="container" id="order">
    <h2>Place Your Order</h2>
    <p>Fill out the form and we will confirm your order.</p>

    <form method="POST" action="process.php">
        <label>Name</label>
        <input name="customer_name" required>

        <label>Payment Method</label>
        <select name="payment_method">
            <?php foreach (get_payment_methods() as $value => $label): ?>
                <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
            <?php endforeach; ?>
        </select>

        <label>Location</label>
        <input name="location" required>

        <label>Type of Chip</label>
        <select name="chip">
            <?php foreach (get_chips() as $code => $chip): ?>
                <option value="<?php echo $code; ?>"><?php echo htmlspecialchars($chip['name']); ?></option>
            <?php endforeach; ?>
        </select>

        <label>Additional Requests</label>
        <textarea name="requests" rows="4"></textarea>

        <button type="submit">Place Order</button>
    </form>
</section>
<?php include 'footer.php'; ?>
