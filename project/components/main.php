<article class="grad">
    <!--
    <img src="../images/hands-holding.jpg" alt="photo" width="100%">

    <h1>"Struny vašich snov, melódia vášho srdca."</h1>
    -->
</article>

<section class="container_pre_zlavy">
    <p class="zlava">Zľavy</p>
    <div class="produkty_zlava">
        <?php
        for($i = 0; $i < 15; $i++){
            include "../components/produkt_v_zlave.php";
        }
        ?>
    </div>
</section>


<section class="container_pre_platne">
    <p class="platne">Platne</p>
    <div class="produkty_platne">
        <?php
        for($i = 0; $i < 15; $i++){
            include "../components/produkt_platna.php";
        }
        ?>
    </div>
</section>