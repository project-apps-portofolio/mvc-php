<main class="wrapper">
    <section class="hero">
        <h1 class="title-product"><?= $data['img']['title']; ?></h1>
        <article>
            <p><?= $data['img']['description']; ?></p>
            <a href="<?= $data['img']['browser'];?>" class="link-product">Browse Breweries</a>
        </article>
    </section>
    <!-- Section Category -->
    <section class="breweries" id="breweries">
        <ul>
            <?php for ($i = 0; $i < count($data['img']['src']); $i++) { ?>
                <li>
                    <figure>
                        <img src=<?= $data['img']['src'][$i] ?> alt="">
                        <?php for ($j = 0; $j < count($data['img']['alt']); $j++) { ?>
                            <figcaption>
                                <h3><?= $data['img']['alt'][$i]; ?></h3>
                            </figcaption>
                        <?php } ?>
                    </figure>
                    <p>
                        Made in the interiors of collapsing stars star stuff harvesting star light venture billions upon billions Drake Equation brain is the seed of intelligence?
                    </p>
                    <a href="#" class="link-product">Visit Website</a>
                </li>
            <?php } ?>
        </ul>
        </ul>
    </section>
</main>