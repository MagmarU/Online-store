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
    <script defer src="./js/user-icon-for-logined.js"></script>
    <script src="./js/jquery.js"></script>
    <script defer src = "filling_with_content/main_content_fill.js"></script>
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
            <section class="category_section">
                <div class="container">

                    <div class="row" name="Материнская плата">
                        <div class="section-header">
                            <span>Материнские платы</span>
                            <a href="./catalogs/motherboards.html">Перейти в каталог</a>
                        </div>

                        <div class="products">
                            <div class="product-tabs">

                                <ul>
                                    <li>
                                        <div class="product">
                                            <div class="product-image">
                                                <img src="./img/1801063.jpg" alt="">
                                            </div>
                                            <span>Gigabyte B550 Gaming X V2</span>
                                            <span
                                                style="font-size: 1.2rem; font-weight: 700; color: #D10024;">Price</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="slick-nav">
                            <button class="slick-btn slick-prev" data-action="prev" type="button">&#60;</button>
                            <button class="slick-btn slick-next" data-action="next" type="button">&#62;</button>
                        </div>
                    </div>

                    <div class="row" name="Процессор">
                        <div class="section-header">
                            <span>Процессоры</span>
                            <a href="./catalogs/processors.html">Перейти в каталог</a>
                        </div>

                        <div class="products">
                            <div class="product-tabs">
                                <ul>
                                </ul>
                            </div>
                        </div>

                        <div class="slick-nav">
                            <button class="slick-btn slick-prev" data-action="prev" type="button">&#60;</button>
                            <button class="slick-btn slick-next" data-action="next" type="button">&#62;</button>
                        </div>
                    </div>

                    <div class="row" name="Видеокарта">
                        <div class="section-header">
                            <span>Видеокарты</span>
                            <a href="./catalogs/graphicsCards.html">Перейти в каталог</a>
                        </div>

                        <div class="products">
                            <div class="product-tabs">

                                <ul>

                                </ul>
                            </div>
                        </div>

                        <div class="slick-nav">
                            <button class="slick-btn slick-prev" data-action="prev" type="button">&#60;</button>
                            <button class="slick-btn slick-next" data-action="next" type="button">&#62;</button>
                        </div>
                    </div>

                    <div class="row" name="Жесткий диск">
                        <div class="section-header">
                            <span>Жесткие диски</span>
                            <a href="./catalogs/hdd.html">Перейти в каталог</a>
                        </div>

                        <div class="products">
                            <div class="product-tabs">

                               <ul>

                               </ul>
                            </div>
                        </div>

                        <div class="slick-nav">
                            <button class="slick-btn slick-prev" data-action="prev" type="button">&#60;</button>
                            <button class="slick-btn slick-next" data-action="next" type="button">&#62;</button>
                        </div>
                    </div>

                    <div class="row" name="Оперативная память">
                        <div class="section-header">
                            <span>Оперативная память</span>
                            <a href="./catalogs/ram.html">Перейти в каталог</a>
                        </div>

                        <div class="products">
                            <div class="product-tabs">

                               <ul>

                               </ul>
                            </div>
                        </div>

                        <div class="slick-nav">
                            <button class="slick-btn slick-prev" data-action="prev" type="button">&#60;</button>
                            <button class="slick-btn slick-next" data-action="next" type="button">&#62;</button>
                        </div>
                    </div>

                    <div class="row" name="Твердотельный накопитель">
                        <div class="section-header">
                            <span>Твердотельные накопители</span>
                            <a href="./catalogs/ssd.html">Перейти в каталог</a>
                        </div>

                        <div class="products">
                            <div class="product-tabs">

                                <ul>

                                </ul>
                            </div>
                        </div>

                        <div class="slick-nav">
                            <button class="slick-btn slick-prev" data-action="prev" type="button">&#60;</button>
                            <button class="slick-btn slick-next" data-action="next" type="button">&#62;</button>
                        </div>
                    </div>

                    <div class="row" name="Блок питания">
                        <div class="section-header">
                            <span>Блоки питания</span>
                            <a href="./catalogs/psu.html">Перейти в каталог</a>
                        </div>

                        <div class="products">
                            <div class="product-tabs">

                               <ul>

                               </ul>
                            </div>
                        </div>

                        <div class="slick-nav">
                            <button class="slick-btn slick-prev" data-action="prev" type="button">&#60;</button>
                            <button class="slick-btn slick-next" data-action="next" type="button">&#62;</button>
                        </div>
                    </div>

                </div>
            </section>
        </main>

        <footer></footer>
    </div>
</body>

</html>