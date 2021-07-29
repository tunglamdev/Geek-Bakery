 <!-- Header -->
 <div class="wraper">
        <div class="container">
            <div class="header">
                <a class="header__logo" href="#"><img src="<?= URL_ICON ?>/Geek's Bakery 1.svg" alt="Geek's Bakery "></a>
                <div class="header__menu">
                    <a href="#">Home</a>
                    <a href="#">Cakes</a>
                    <a href="#">About</a>
                </div>
                <div class="header__search">
                    <img src="<?= URL_ICON ?>/loupe.png" alt="Tìm kiếm">
                    <input placeholder="Search..." class="button" type="text">
                </div>
                <div class="header__personal">
                    <div class="header__cart">
                        <img class="header__cart-img" src="<?= URL_ICON ?>/bag.svg" alt="Giỏ hàng">
                        <p class="header__cart-amount">2</p>
                    </div>
                    <div class="header__user">
                        <img class="header__user-avatar" src="<?= URL_ICON?>/avatar.jpeg" alt="Avatar">
                        <ul class="header__user-menu">
                            <li>Profile</li>
                            <li>Cart</li>
                            <li>Log out</li>
                        </ul>
                    </div>
                    <div class="header__menu-mobile">
                        <input type="checkbox" class="header__mobile-nav-btn" id="mobile-check">
                        <label for="mobile-check" class="header__menu-mobile-img">
                            <img src="<?= URL_ICON?>/menu-mobile.svg" alt="Menu-mobile">
                        </label>
                        <label for="mobile-check" class="header__overlay"></label for="">
                        <div class="header__mobile-nav">
                            <label for="mobile-check" class="header__mobile-nav-close">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
                            </label>
                            <ul class="header__mobile-nav-list">
                                <li class="header__mobile-nav-link">Home</li>
                                <li class="header__mobile-nav-link">Cakes</li>
                                <li class="header__mobile-nav-link">About</li>
                                <li class="header__mobile-nav-link">Profile</li>
                                <li class="header__mobile-nav-link">Cart</li>
                                <li class="header__mobile-nav-link">Log out</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>