<?php include 'includes/header.php'; ?>

<section class="hero-search">
    <h1>Administravimo skydelis – Kelionių valdymas</h1>
    <form action="admin_trips.php" method="POST" class="filter-form">
        <div class="form-group">
            <label for="title">Kelionės pavadinimas</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="country">Šalis</label>
            <input type="text" id="country" name="country" required>
        </div>
        <div class="form-group">
            <label for="price">Kaina (€)</label>
            <input type="number" id="price" name="price" min="1" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="trip_date">Data</label>
            <input type="date" id="trip_date" name="trip_date" required>
        </div>
        <div class="form-group">
            <label for="category_id">Kategorija</label>
            <select id="category_id" name="category_id" required>
                <option value="1">Savaitgalio išvykos</option>
                <option value="2">Aktyvus poilsis</option>
                <option value="3">Egzotinės kelionės</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Aprašymas</label>
            <input type="text" id="description" name="description" required>
        </div>
        <button type="submit" class="btn-primary">+ Pridėti kelionę</button>
    </form>
</section>

<section class="trips-section">
    <h2>Esami kelionių pasiūlymai</h2>
    <table border="1" width="100%" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Kelionė</th>
                <th>Šalis</th>
                <th>Data</th>
                <th>Kaina</th>
                <th>Veiksmai</th>
            </tr>
        </thead>
        <tbody>
            <!-- Pavyzdinė eilutė (vėliau Aidas užpildys iš DB) -->
            <tr>
                <td>Poilsis saulėtoje Italijoje</td>
                <td>Italija</td>
                <td>2026-12-15</td>
                <td>€ 350</td>
                <td><a href="#">Redaguoti</a> | <a href="#">Šalinti</a></td>
            </tr>
        </tbody>
    </table>
</section>

<?php include 'includes/footer.php'; ?>