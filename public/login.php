<?php include 'includes/header.php'; ?>

<section class="auth-box">
    <h1>Prisijungimas</h1>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="email">El. paštas</label>
            <input type="email" id="email" name="email" required placeholder="vardas@pastas.lt">
        </div>
        <div class="form-group">
            <label for="password">Slaptažodis</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn-primary">Prisijungti</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>