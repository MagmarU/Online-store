<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery-ui.min.js"></script>
    <script defer src="./js/price-slider.js"></script>
    <title>Electro</title>
</head>

<body>
    <div class="page-layout">

        <header>
            <div class="header-content">
                <div class="header_container">
                    <div class="header-wrap">
                        <div class="logo"><img src="./img/logo.png" alt=""></div>

                        <!-- На диплом -->
                        <!-- <div class="search-bar">
                            <form action="">
                                <input class="input" placeholder="Поиск по сайту">
                                <button class="search-btn">Поиск</button>
                            </form>
                        </div> -->
                        <!--  -->

                        <ul class="header-menu">
                            <li><a href="./userPanel.php" class="user_icon_button"><img src="./img/user.png" class="user_icon" alt="user"></a>
                                <div class="exitFromAcc" hidden>
                                    <button class="catalogBtns exitFromAccount">Выйти</button>
                                </div>
                            </li>
                            <li><a href="./cart.php" style="margin-left:13px;"><img src="./img/shopping-cart.png" alt="cart"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <nav class="nav">
            <div class="navbar_container">
                <ul class="navbar-menu">
                    <li><a href="./main.php">Главная</a></li>
                    <li style="margin-left:36px;"><a href="./catalog.php">Каталог</a></li>
                </ul>
            </div>
        </nav>

        <main>
            <section class="catalog_section">
                <div class="container">

                    <div class="filterBlock">
                        <div class="aside">
                            <h2 class="aside-title br-btm">Фильтры</h3>
                                <div class="checkbox-filter">
                                    <div class="input-checkbox">
                                        <h3>Цена</h3>
                                        <div class="price-filter br-btm">
                                            <div class="price-slider">
                                                <input type="text" class="price-slider-left" />
                                                <input type="text" class="price-slider-right " />
                                                <div class="price"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-checkbox br-btm">
                                        <h3>Бренд</h3>
                                        <div class="brand-filter">
                                            <div class="input-checkbox">
                                                <input type="checkbox" id="brand-1">
                                                <label for="brand-1">
                                                    <span></span>
                                                    SAMSUNG
                                                </label>
                                            </div>
                                            <div class="input-checkbox">
                                                <input type="checkbox" id="brand-2">
                                                <label for="brand-2">
                                                    <span></span>
                                                    LG
                                                </label>
                                            </div>
                                            <div class="input-checkbox">
                                                <input type="checkbox" id="brand-3">
                                                <label for="brand-3">
                                                    <span></span>
                                                    SONY
                                                </label>
                                            </div>
                                            <div class="input-checkbox">
                                                <input type="checkbox" id="brand-4">
                                                <label for="brand-4">
                                                    <span></span>
                                                    SAMSUNG
                                                </label>
                                            </div>
                                            <div class="input-checkbox">
                                                <input type="checkbox" id="brand-5">
                                                <label for="brand-5">
                                                    <span></span>
                                                    LG
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-checkbox" style="padding: 20px;">
                                        <button class="catalogBtns"><span>Применить</span></button>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="productCatalog">


                        <div class="productModel br-btm br-rght">
                            <div class="product-image">
                                <img src="./img/1801063.jpg" alt="">
                            </div>
                            <div class="productName">
                                <span>Name</span>
                                <div class="description">
                                    <ul>
                                        <li>Form Factor: <span>ATX</span></li>
                                        <li>Socket: <span>AMD AM4</span></li>
                                        <li>Chipset: <span>AMD B550</span></li>
                                        <li>Memory Slots: <span>4 x DDR4</span></li>
                                        <li>Extensions: <span>PCI-E 1x</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productPrice">
                                <span>989.00$</span>
                                <button class="inCart catalogBtns"><span>В корзину</span></button>
                            </div>
                        </div>

                        <div class="productModel br-btm br-rght">
                            <div class="product-image">
                                <img src="./img/1801063.jpg" alt="">
                            </div>
                            <div class="productName">
                                <span>Name</span>
                                <div class="description">
                                    <ul>
                                        <li>Form Factor: <span>ATX</span></li>
                                        <li>Socket: <span>AMD AM4</span></li>
                                        <li>Chipset: <span>AMD B550</span></li>
                                        <li>Memory Slots: <span>4 x DDR4</span></li>
                                        <li>Extensions: <span>PCI-E 1x</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productPrice">
                                <span>989.00$</span>
                                <button class="inCart catalogBtns"><span>В корзину</span></button>
                            </div>
                        </div>

                        <div class="productModel br-btm br-rght">
                            <div class="product-image">
                                <img src="./img/1801063.jpg" alt="">
                            </div>
                            <div class="productName">
                                <span>Name</span>
                                <div class="description">
                                    <ul>
                                        <li>Form Factor: <span>ATX</span></li>
                                        <li>Socket: <span>AMD AM4</span></li>
                                        <li>Chipset: <span>AMD B550</span></li>
                                        <li>Memory Slots: <span>4 x DDR4</span></li>
                                        <li>Extensions: <span>PCI-E 1x</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productPrice">
                                <span>989.00$</span>
                                <button class="inCart catalogBtns"><span>В корзину</span></button>
                            </div>
                        </div>
                        <div class="productModel br-btm br-rght">
                            <div class="product-image">
                                <img src="./img/1801063.jpg" alt="">
                            </div>
                            <div class="productName">
                                <span>Name</span>
                                <div class="description">
                                    <ul>
                                        <li>Form Factor: <span>ATX</span></li>
                                        <li>Socket: <span>AMD AM4</span></li>
                                        <li>Chipset: <span>AMD B550</span></li>
                                        <li>Memory Slots: <span>4 x DDR4</span></li>
                                        <li>Extensions: <span>PCI-E 1x</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productPrice">
                                <span>989.00$</span>
                                <button class="inCart catalogBtns"><span>В корзину</span></button>
                            </div>
                        </div>
                        <div class="productModel br-btm br-rght">
                            <div class="product-image">
                                <img src="./img/1801063.jpg" alt="">
                            </div>
                            <div class="productName">
                                <span>Name</span>
                                <div class="description">
                                    <ul>
                                        <li>Form Factor: <span>ATX</span></li>
                                        <li>Socket: <span>AMD AM4</span></li>
                                        <li>Chipset: <span>AMD B550</span></li>
                                        <li>Memory Slots: <span>4 x DDR4</span></li>
                                        <li>Extensions: <span>PCI-E 1x</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productPrice">
                                <span>989.00$</span>
                                <button class="inCart catalogBtns"><span>В корзину</span></button>
                            </div>
                        </div>
                        <div class="productModel br-btm br-rght">
                            <div class="product-image">
                                <img src="./img/1801063.jpg" alt="">
                            </div>
                            <div class="productName">
                                <span>Name</span>
                                <div class="description">
                                    <ul>
                                        <li>Form Factor: <span>ATX</span></li>
                                        <li>Socket: <span>AMD AM4</span></li>
                                        <li>Chipset: <span>AMD B550</span></li>
                                        <li>Memory Slots: <span>4 x DDR4</span></li>
                                        <li>Extensions: <span>PCI-E 1x</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productPrice">
                                <span>989.00$</span>
                                <button class="inCart catalogBtns"><span>В корзину</span></button>
                            </div>
                        </div>
                        <div class="productModel br-btm br-rght">
                            <div class="product-image">
                                <img src="./img/1801063.jpg" alt="">
                            </div>
                            <div class="productName">
                                <span>Name</span>
                                <div class="description">
                                    <ul>
                                        <li>Form Factor: <span>ATX</span></li>
                                        <li>Socket: <span>AMD AM4</span></li>
                                        <li>Chipset: <span>AMD B550</span></li>
                                        <li>Memory Slots: <span>4 x DDR4</span></li>
                                        <li>Extensions: <span>PCI-E 1x</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="productPrice">
                                <span>989.00$</span>
                                <button class="inCart catalogBtns"><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer></footer>
    </div>
</body>

</html>