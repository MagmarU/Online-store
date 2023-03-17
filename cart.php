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
    <script defer src="./js/script.js"></script>

    <script defer src="./cart_js/cart_handler.js"></script>
    <title>Electro</title>
</head>

<body>
    <div class="page-layout">

        <header>
            <div class="header-content">
                <div class="header_container">
                    <div class="header-wrap">
                        <div class="logo"><a href="../main.php"><img src="./img/logo.png" alt=""></a></div>


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

        <main>
            <section class="cart-section">
                <div class="container">
                    <div class="cart-header">
                        <span style="font-size: 26px; font-weight: 500;">Корзина</span>
                    </div>
                    <div class="cart-content">

                        <div class="cart-wrapper">

                            <div class="productCart br-btm">
                                <img src="./img/1801063.jpg" class="item-image">

                                <span class="item-title">Name</span>

                                <span class="item-price">Цена за штуку</span>

                                <div class="item-counter">
                                    <div class="counter-wrapper">
                                        <button class="minus counter-btn" data-action = 'minus'>-</button>
                                        <input type="text" value="1">
                                        <button class="plus counter-btn" data-action = 'plus'>+</button>
                                    </div>

                                </div>

                                <span class="item-total">Price</span>

                                <div class="deleteItems item-delete">
                                    <button class="deleteItem"></button>
                                </div>
                            </div>

                            <div class="productCart br-btm">
                                <img src="./img/1801063.jpg" alt="">

                                <span>Name</span>

                                <span>Цена за штуку</span>

                                <div class="item-counter">
                                    <div class="counter-wrapper">
                                        <button class="minus counter-btn">-</button>
                                        <input type="text" value="1">
                                        <button class="plus counter-btn">+</button>
                                    </div>

                                </div>

                                <span>Price</span>

                                <div class="deleteItems">
                                    <button class="deleteItem"></button>
                                </div>
                            </div>

                            <div class="productCart br-btm">
                                <img src="./img/1801063.jpg" alt="">

                                <span>Name</span>

                                <span>Цена за штуку</span>

                                <div class="item-counter">
                                    <div class="counter-wrapper">
                                        <button class="minus counter-btn">-</button>
                                        <input type="text" value="1">
                                        <button class="plus counter-btn">+</button>
                                    </div>

                                </div>

                                <span>Price</span>

                                <div class="deleteItems">
                                    <button class="deleteItem"></button>
                                </div>
                            </div>

                            <div class="productCart br-btm">
                                <img src="./img/1801063.jpg" alt="">

                                <span>Name</span>

                                <span>Цена за штуку</span>

                                <div class="item-counter">
                                    <div class="counter-wrapper">
                                        <button class="minus counter-btn">-</button>
                                        <input type="text" value="1">
                                        <button class="plus counter-btn">+</button>
                                    </div>

                                </div>

                                <span>Price</span>

                                <div class="deleteItems">
                                    <button class="deleteItem"></button>
                                </div>
                            </div>


                        </div>

                        <div class="placeAnOrder">
                            <div class="order-wrapper">
                                <div class="total">
                                    <span>Итого:</span>
                                    <span style="font-size: 1.7rem;">Total Price</span>
                                </div>
                                <button class="catalogBtns"><span>Оформить заказ</span></button>
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