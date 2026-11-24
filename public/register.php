<?php include 'includes/header.php'; ?>

<section class="auth-box">
    <h1>Registracija</h1>
    <form action="register.php" method="POST">
        <div class="form-group">
            <label for="name">Vardas</label>
            <input type="text" id="name" name="name" required placeholder="Jūsų vardas">
        </div>
        <div class="form-group">
            <label for="email">El. paštas</label>
            <input type="email" id="email" name="email" required placeholder="vardas@pastas.lt">
        </div>
        <div class="form-group">
            <label for="password">Slaptažodis</label>
            <input type="password" id="password" name="password" minlength="6" required>
        </div>
        <div class="form-group">
            <label for="password_confirm">Pakartokite slaptažodį</label>
            <input type="password" id="password_confirm" name="password_confirm" minlength="6" required>
        </div>
        <button type="submit" class="btn-primary">Registruotis</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>