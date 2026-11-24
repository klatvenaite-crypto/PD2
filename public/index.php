<?php include 'includes/header.php'; ?>

<section class="hero-search">
    <h1>Atrask savo kitą kelionę</h1>
    <form action="index.php" method="GET" class="filter-form">
        <div class="form-group">
            <label for="country">Šalis / kryptis</label>
            <input type="text" id="country" name="country" placeholder="Pvz., Italija">
        </div>
        <div class="form-group">
            <label for="category">Kategorija</label>
            <select id="category" name="category">
                <option value="">Visos kategorijos</option>
                <option value="1">Savaitgalio išvykos</option>
                <option value="2">Aktyvus poilsis</option>
                <option value="3">Egzotinės kelionės</option>
            </select>
        </div>
        <div class="form-group">
            <label for="max_price">Kaina iki (€)</label>
            <input type="number" id="max_price" name="max_price" min="1" placeholder="500">
        </div>
        <div class="form-group">
            <label for="trip_date">Kelionės data</label>
            <input type="date" id="trip_date" name="trip_date">
        </div>
        <button type="submit" class="btn-primary">Ieškoti kelionių</button>
    </form>
</section>

<section class="trips-section">
    <h2>Kelionių pasiūlymai</h2>
    <div class="trips-grid">
        <article class="trip-card">
            <div class="trip-img-placeholder">NUOTRAUKA</div>
            <div class="trip-info">
                <h3>Poilsis saulėtoje Italijoje</h3>
                <p class="trip-meta">Italija &bull; 2026-12-15</p>
                <p class="trip-price">Kaina: <strong>€ 350</strong></p>
                <a href="trip.php?id=1" class="btn-primary">Plačiau</a>
            </div>
        </article>
    </div>
</section>

<?php include 'includes/footer.php'; ?>