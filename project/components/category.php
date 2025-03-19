<?php
$nazvy = ["GITARY", "BASGITARY", "INÉ STRUNY", "KOMBÁ", "PRÍSLUŠENSTVO", "PLATNE"];
?>

<section class="category">
    <?php for ($i = 0; $i < 6; $i++): ?>
        <div class="category_group">
            <a href="#">
                <img src="../images/git.svg" alt="gitary" width="70">
                <p><?= $nazvy[$i] ?></p>
            </a>
        </div>
    <?php endfor; ?>
</section>

