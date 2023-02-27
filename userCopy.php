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
    <!-- <script defer src="./js/script.js"></script> -->
    <script src="./js/jquery.js"></script>
    <script defer src="./js/registration.js"></script>
    <script src="./node_modules/blueimp-md5/js/md5.min.js"></script>
    <title>Electro</title>
</head>

<body>
    <div class="page-layout">
        <header>
            <div class="header-content">
                <div class="header_container">
                    <div class="header-wrap">
                        <div class="logo"><img src="./img/logo.png" alt=""></div>

                        <div class="search-bar">
                            <form action="">
                                <input class="input" placeholder="Поиск по сайту">
                                <button class="search-btn">Поиск</button>
                            </form>
                        </div>

                        <ul class="header-menu">
                            <li><a href="./userPanel.php"><img src="./img/user.png" alt="user"></a></li>
                            <li><a href="./cart.php" style="margin-left:13px;"><img src="./img/shopping-cart.png"
                                        alt="cart"></a></li>
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
            <section class="userCabinet">
                <div class="container">
                    <div class="cabinet-header">
                        <span style="font-size: 26px; font-weight: 500;">Регистрация</span>
                    </div>
                    <div class="cabinet-wrapper">
                        <div class="cabinet-content">
                            <div class="login-panel">
                                <form action="" method="POST" name="registration_form" class="form-grid">

                                    <div class="userName-panel">
                                        <label for="userName">Имя</label>
                                        <div class="userInput"><input type="text" name="userName" required></div>
                                    </div>
                                    <div class="tele-email-panel">
                                        <label for="email">Email</label>
                                        <div class="userInput"><input type="text" name="email" required></div>
                                    </div>
                                    <div class="password-panel">
                                        <label for="password">Пароль</label>

                                        <div class="userInput"><input type="text" name="password" required></div>
                                    </div>
                                    <div class="submit-btns">
                                        <button class="catalogBtns">Зарегистрироваться</button>
                                        <a href="./userPanel.php">У меня уже есть аккаунт</a>
                                    </div>
                                </form>
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