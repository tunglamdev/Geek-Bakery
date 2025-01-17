<!-- Banner -->
    <div class="banner">
        <img src="<?= URL_ICON ?>Banner.svg" alt="Banner">
    </div>
    
<!-- Categories -->
    <div class="wraper">
        <div class="container">
            <div class="category">
                <div class="category__title">
                    <h2>Experience Flavours</h2>
                </div>
                <ul class="category__list">
                    <?php foreach($data["caketype"] as $index => $caketypes) : ?>
                        <a href="<?= DOCUMENT_ROOT ?>/cakes/categories?id=<?= $caketypes["id"] ?>&page=1">
                            <li class="category__item">
                                <img src="<?= URL_CATEGORY ?><?= $caketypes["image"]?>" alt="<?= $caketypes["name"]?>">
                                <p class="category__item-name"><?= $caketypes["name"] ?></p>
                                <p class="category__item-desc">For Choco Addicts</p>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

<!-- Best Seller -->
    <div class="sell">
        <div class="sell__button-left" onclick="pushSlide(-1)">
            <img src="<?= URL_ICON ?>Arrow_1.svg" alt="Previous">
        </div>
        <div class="container container__sell">
            <div class="sell__title">
                <h2>Best Seller</h2>
            </div>
            <?php foreach($data["bestSeller"] as $index => $cakes) :?>
                <div class="sell__content">
                    <div class="sell__content-img">
                        <img src="<?= URL_CAKE ?><?= $cakes["image"] ?>" alt="<?= $cakes["name"] ?>">
                    </div>
                    <div class="sell__content-content">
                        <p class="sell__content-title"><?= $cakes["name"] ?></p>
                        <p class="sell__content-desc">Award yourself with this rich chocolate cake wonderfully crammed with Cadbury Fuse and white chocolate chunks and draped lusciously with molten chocolate. This perfect work of art hides in every bite of chocolate that is a little nutty and a lot of tasty!</p>
                        <p class="sell__content-new-price"><?= $cakes["price"] ?></p>
                        <p class="sell__content-old-price">400.000đ</p>
                        <button class="sell__content-add" type="submit">Add to cart +</button>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <div class="sell__btn">
                <?php foreach($data["bestSeller"] as $index => $cakes) :?>
                    <div class="sell__button" onclick="currentSlide(<?= $index+1 ?>)"></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="sell__button-right" onclick="pushSlide(1)">
            <img src="<?= URL_ICON ?>Arrow_2.svg" alt="Next">
        </div>
    </div>

<!-- Sweeties -->
    <div class="wraper">
        <div class="container">
            <div class="sweeties">
                <div class="sweeties__title">
                    <h2>Sweeties</h2>
                </div>
                <ul class="sweeties__list">
                    <?php foreach($data["cake_to_show"] as $index => $cakes) :?>
                            <li class="sweeties__item">
                                <img src="<?= URL_CAKE ?><?= $cakes["image"] ?>" alt="<?= $cakes["name"] ?>">
                                <p class="sweeties__item-name"><?= $cakes["name"] ?></p>
                                <div class="sweeties__item-price">
                                    <p class="sweeties__item-new-price"><?= number_format($cakes["price"],0, ',','.') ?>đ</p>
                                    <p class="sweeties__item-old-price">300.000đ</p>
                                </div>
                                <button onclick="addToCart(<?= isset($_SESSION['user'])? $_SESSION['user']['id']: 0 ?> , <?= $cakes['id']?>)" class="sweeties__item-button" type="submit">Add to cart+</button>
                            </li>
                    <?php endforeach; ?>
                </ul>
                <ul class="sweeties__menu">
                    <li>
                        <a href="<?= DOCUMENT_ROOT ?>/cakes/index?page=1"><img src="<?= URL_ICON ?>Arrow_1.svg" alt="Previous"></a>
                    </li>
                    <?php $num = ceil($data["num_of_cake"]/NUM_OF_CAKE_ON_PAGE); ?>
                    <?php for($i=1; $i<=$num ; $i++) :?>
                        <a href="<?= DOCUMENT_ROOT ?>/cakes/index?page=<?= $i ?>"><li class="sweeties__menu-number <?= $i==1 ? "sweeties__menu-number--active" : "" ?>"><?= $i ?></li></a>
                    <?php endfor; ?>
                    <li>
                        <a href="<?= DOCUMENT_ROOT ?>/cakes/index?page=2"><img src="<?= URL_ICON ?>Arrow_2.svg" alt="Next"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
<!-- AJAX for show cake in Best Seller -->
    <script src="<?= URL_JS ?>slideShow.js"></script>