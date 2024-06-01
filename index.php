<?php

include('function/userfunction.php');
include('includes/header.php');

?>
<link rel="stylesheet" href="assets/css/landing.css">
<!--main-->
<section>
    <div class="main" id="Home">
        <div class="main_content">
            <div class="main_text">
                <h1>LEATHER<br><span>KINGDOM</span></h1>
                <p>
                    Welcome to the pinnacle of athletic excellence and style with Nike, Adidas, Puma, Yeezys, Fila,
                    Under Armour, New Balance, etc.. Nike embodies innovation and inspiration, where every stride
                    propels you towards greatness. Adidas seamlessly fuses performance and fashion, offering a legacy of
                    cutting-edge technology and timeless design. Puma empowers your every move, whether on the track or
                    in the urban jungle, blending dynamic energy with unbeatable style. Step into the exclusivity of
                    Yeezys, where visionary design meets unparalleled comfort, creating a statement of individuality.
                    Fila captures the essence of heritage and modernity, delivering sportswear that merges retro
                    aesthetics with contemporary performance. Under Armour stands as a symbol of resilience, providing
                    cutting-edge athletic gear designed to empower athletes in their pursuit of excellence. New Balance
                    combines craftsmanship and innovation, offering a blend of comfort and style that transcends trends.
                    Each brand, be it the iconic swoosh, the three stripes, the roaring cat, the avant-garde Yeezy, the
                    nostalgic Fila, the resilient Under Armour, or the classic New Balance, invites you to redefine your
                    limits and embrace a lifestyle that seamlessly blends performance and style a commitment to
                    excellence, self-expression, and the relentless pursuit of greatness. Just do it, create, roar,
                    stride, rise, balance, or break the mold the choice is yours
                </p>
            </div>
            <div class="main_image">
                <img src="image/shoes.png">
            </div>
        </div>
        <div class="social_icon">
            <a href="https://l.instagram.com/?u=https%3A%2F%2Fwww.facebook.com%2Fleatherkingdomkandy%2F&e=AT3JxmXzLflNZfn6tg_b3QJ_taTiLDzxVU_nGylOM8hIrxuyLfclkiBh9yJoWaF1GEEZN6Xj_J9qBi0oQQiiPN6hwjuopo6e"><i class="fa fa-facebook-official icon" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/leather_kingdom_kandy?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa fa-instagram icon" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter icon" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-linkedin-square icon" aria-hidden="true"></i></a>
        </div>
        <div class="button mt-3">
            <a href="category.php">SHOP NOW</a>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
    </div>

</section>

<!--cards-->



<div class="container">
    <div class="row">
        <div class="products1" id="Products1">
            <h1>Trending products</h1>
            <div class="col-md-12">
                <div class="row">
                    <?php
                    $trendingProducts = getAllTrending();
                    if (mysqli_num_rows($trendingProducts) > 0) {
                        foreach ($trendingProducts as $item) {
                            ?>
                            <div class="col-md-3">
                                <div class="products" id="Products">
                                    <div class="box">
                                        <div class="card">
                                            <a href="product-viwe.php?product=<?= $item['slug']; ?>">
                                                <div class="small_card">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                    <i class="fa fa-share" aria-hidden="true"></i>
                                                </div>
                                                <div class="image">
                                                    <img src="uploads/<?= $item['image']; ?>" alt="Product Photo" width="300px"
                                                        height="200">
                                                </div>
                                                <div class="products_text">
                                                    <h2>
                                                        <?= $item['name']; ?>
                                                    </h2>
                                                    <p>
                                                        <?= $item['small_description']; ?>
                                                    </p>
                                                    <h3>Rs .
                                                        <?= $item['selling_price']; ?>.00
                                                    </h3>
                                                    <div class="products_star">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>

                                                    <a href="product-viwe.php?product=<?= $item['slug']; ?>" class="btn">Add To
                                                        Cart</a>

                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php


                        }
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>



<!--About-->
<div class="about" id="About">

    <h1>Web<span>About</span></h1>

    <div class="about_main">
        <div class="about_image">
            <div class="about_small_image">
                <img src="image/aboutshoe1.JPG" onclick="functio(this)">
                <img src="image/aboutshoe2.JPG" onclick="functio(this)">
                <img src="image/aboutshoe3.JPG" onclick="functio(this)">
                <img src="image/aboutshoe4.JPG" onclick="functio(this)">
            </div>

            <div class="image_contaner">
                <img src="image/aboutshoe1.JPG" id="imagebox">
            </div>

        </div>

        <div class="about_text">
            <p>Discover sophistication in every step at our online footwear emporium. Immerse yourself in a curated
                selection of footwear, meticulously chosen for their craftsmanship, style, and comfort. From
                contemporary sneakers to refined heels, our collection caters to diverse tastes. Experience the fusion
                of fashion and functionality as you explore our meticulously curated catalog. Find your perfect pair and
                elevate your footwear ensemble with our commitment to quality and timeless elegance. Welcome to a world
                where professionalism meets exceptional style. <br>
                Our commitment extends beyond style; we prioritize a seamless online shopping experience. Navigate our
                user-friendly website with ease, ensuring a hassle-free journey from selection to checkout. Benefit from
                secure transactions and prompt delivery services, reaffirming our dedication to customer satisfaction.
                Whether you seek the latest trends or timeless classics, our online footwear store is your trusted
                destination for unparalleled quality and service. Immerse yourself in a world where each pair tells a
                story of craftsmanship and sophistication.</p>

        </div>

    </div>

    <a href="category.php" class="about_btn">Shop Now</a>

    <script>
        function functio(small) {
            var full = document.getElementById("imagebox")
            full.src = small.src
        }
    </script>

</div>


<!--Services-->

<div class="services" id="Servises">
    <h1>our<span>services</span></h1>

    <div class="services_cards">
        <div class="services_box">

            <i class="fa fa-truck" aria-hidden="true"></i>
            <h3>Fast Delivery</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </p>
        </div>

        <div class="services_box">
            <i class="fa fa-undo" aria-hidden="true"></i>
            <h3>10 Days Replacement</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </p>
        </div>

        <div class="services_box">
            <i class="fa fa-question-circle" aria-hidden="true"></i>
            <h3>24 x 7 Support</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </p>
        </div>
    </div>

</div>


<?php include('includes/footer.php') ?>