<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="crm_styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script defer src="async_for_crm.js"></script>
</head>
<body>
    
        <nav class="nav">
            <div class="container">
                <div class="navbar_container">
                    <ul class="navbar-menu">
                        <li><a href="../crm/crm.php">Добавить товар</a></li>
                        <li style="margin-left:36px"><a href="../crm/edit_item.php">Редактировать товар</a></li>
                    </ul>
            </div>
        </nav>
        <section class ="adding_item">
            <div class="container">
                <div class="row">
                    <div class="section-header">
                        <span>Удалить товар</span>
                    </div>
                    <div class="section-main">
                        <!-- <form action=""> -->
                            <div class="adding">

                            <!-- <form action="" method="post"> -->
                                <div class="item">
                                    <label for="">ID:</label>
                                    <select name="" id="" class='delete_select'>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                
                                <div class="item item_Submit">
                                    <button form="form">Удалить</button>
                                </div>

                            <!-- </form> -->
                            </div>
                        <!-- </form> -->
                        
                    </div>
                </div>
            </div>
            
        </section>
    </div>
    
</body>
</html>