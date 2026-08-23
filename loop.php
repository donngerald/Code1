<div class="container mt-4">
    <div class="row row-cols-5 g-2">

        <?php for ($i = 1; $i <= 20; $i++): ?>

            <div class="col">
                <div class="bg-info text-dark text-center p-3 rounded shadow-sm">
                    <?= $i ?>
                </div>
            </div>

        <?php endfor; ?>

    </div>
</div>