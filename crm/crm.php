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
                        <li><a href="#">Добавить товар</a></li>
                        <li style="margin-left:36px"><a href="#">Редактировать товар</a></li>
                    </ul>
            </div>
        </nav>
        <section class ="adding_item">
            <div class="container">
                <div class="row">
                    <div class="section-header">
                        <span>Добавить товар</span>
                    </div>
                    <div class="section-main">
                        <!-- <form action=""> -->
                            <div class="adding">

                            <!-- <form action="" method="post"> -->
                                <div class="item">
                                    <label for="">Наименование товара</label>
                                    <input type="text" name="item_Name">
                                </div>
                                <div class="item">
                                    <!-- <form action="" enctype="multipart/formdata"></form> -->
                                    <input type="file" name="item_Image">
                                </div>

                                <div class="item">
                                    <label for="">Артикул</label>
                                    <input type="text" name="item_Article">
                                </div>

                                <div class="item">
                                    <label for="">Категория товара</label>
                                    <select class = "select-css" name="item_Category" id="">
                                        <option>Выбрать категорию</option>
                                    </select>
                                    <!-- <input type="text" name="item_Category"> -->
                                </div>

                                
                                <div class="motherboard" name="Материнская плата" hidden>
                                    <form action="" method="post">
                                        <div class="item">
                                            <label for="">Производитель</label>
                                            <input type="text" name="item_Producer">
                                        </div>

                                        <div class="item">
                                            <label for="">Сокет</label>
                                            <input type="text" name="item_Socket">
                                        </div>

                                        <div class="item">
                                            <label for="">Чипсет</label>
                                            <input type="text" name="item_Chipset">
                                        </div>

                                        <div class="item">
                                            <label for="">Количество слотов памяти</label>
                                            <input type="text" name="item_Memory_Slots">
                                        </div>

                                        <div class="item">
                                            <label for="">Форм-фактор</label>
                                            <input type="text" name="item_Form_Factor">
                                        </div>

                                        <div class="item">
                                            <label for="">Тип ОЗУ</label>
                                            <input type="text" name="item_RAM">
                                        </div>

                                    </form> 
                                </div>

                                <div class="cpu" name="Процессор" hidden>
                                    <form action="" method="post">
                                        <div class="item">    
                                            <label for="">Производитель</label>
                                            <input type="text" name="item_Producer">
                                        </div>

                                        <div class="item">
                                            <label for="">Сокет</label>
                                            <input type="text" name="item_Socket">
                                        </div>

                                        <div class="item">
                                            <label for="">Серия</label>
                                            <input type="text" name="item_Series">
                                        </div>

                                        <div class="item">
                                            <label for="">Тактовая частота</label>
                                            <input type="text" name="item_Clock_Frequency">
                                        </div>

                                        <div class="item">
                                            <label for="">Количество ядер</label>
                                            <input type="text" name="item_Cores">
                                        </div>

                                        <div class="item">
                                            <label for="">Техпроцесс</label>
                                            <input type="text" name="item_Techprocess">
                                        </div>

                                        <div class="item">
                                            <label for="">Тепловыделение</label>
                                            <input type="text" name="item_TDP">
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="GraphicsCard" name="Видеокарта" hidden>
                                    <form action="" method="post">
                                        <div class="item">    
                                            <label for="">Производитель</label>
                                            <input type="text" name="item_Producer">
                                        </div>

                                        <div class="item">    
                                            <label for="">Производитель графического процессора</label>
                                            <input type="text" name="item_gpu_producer">
                                        </div>

                                        <div class="item">    
                                            <label for="">Объём видеопамяти</label>
                                            <input type="text" name="item_VideoMemory">
                                        </div>

                                        <div class="item">    
                                            <label for="">Графический процессор</label>
                                            <input type="text" name="item_gpu">
                                        </div>

                                        <div class="item">    
                                            <label for="">Тип памяти</label>
                                            <input type="text" name="item_Memory_Type">
                                        </div>
                                    </form>
                                </div>

                                <div class="Ram" name="Оперативная память" hidden>
                                    <form action="" method="post">
                                        <div class="item">    
                                            <label for="">Производитель</label>
                                            <input type="text" name="item_Producer">
                                        </div>

                                        <div class="item">    
                                            <label for="">Объём памяти</label>
                                            <input type="text" name="item_Memory_Capacity">
                                        </div>

                                        <div class="item">    
                                            <label for="">Форм-фактор</label>
                                            <input type="text" name="item_Form_Factor">
                                        </div>

                                        <div class="item">    
                                            <label for="">Тип памяти</label>
                                            <input type="text" name="item_Memory_Type">
                                        </div>

                                        <div class="item">    
                                            <label for="">Тактовая частота</label>
                                            <input type="text" name="item_Clock_Frequency">
                                        </div>
                                    </form>
                                </div>

                                <div class="hdd" name="Жесткий диск" hidden>
                                    <form action="" method="post">
                                        <div class="item">    
                                            <label for="">Производитель</label>
                                            <input type="text" name="item_Producer">
                                        </div>

                                        <div class="item">    
                                            <label for="">Тип диска</label>
                                            <input type="text" name="item_Disk_Type">
                                        </div>

                                        <div class="item">    
                                            <label for="">Объём HDD</label>
                                            <input type="text" name="item_Hdd_Capacity">
                                        </div>

                                        <div class="item">    
                                            <label for="">Скорость вращения диска (об/мин)</label>
                                            <input type="text" name="item_Rotation_Speed">
                                        </div>
                                    </form>
                                </div>
                                
                                <div class="ssd" name="Твердотельный накопитель" hidden>
                                    <form action="" method="post">
                                        <div class="item">    
                                            <label for="">Производитель</label>
                                            <input type="text" name="item_Producer">
                                        </div>

                                        <div class="item">    
                                            <label for="">Тип накопителя</label>
                                            <input type="text" name="item_Drive_Type">
                                        </div>

                                        <div class="item">    
                                            <label for="">Объём накопителя</label>
                                            <input type="text" name="item_Ssd_Capacity">
                                        </div>

                                        <div class="item">    
                                            <label for="">Форм-фактор</label>
                                            <input type="text" name="item_Form_Factor">
                                        </div>

                                        <div class="item">    
                                            <label for="">Разъём подключения</label>
                                            <input type="text" name="item_Connection_Connector">
                                        </div>

                                    </form>
                                </div>

                                <div class="psu" name="Блок питания" hidden>
                                    <form action="" method="post">
                                        <div class="item">    
                                            <label for="">Производитель</label>
                                            <input type="text" name="item_Producer">
                                        </div>

                                        <div class="item">    
                                            <label for="">Мощность</label>
                                            <input type="text" name="item_Power">
                                        </div>

                                        <div class="item">    
                                            <label for="">Форм-фактор</label>
                                            <input type="text" name="item_Form_Factor">
                                        </div>

                                        <div class="item">    
                                            <label for="">Сертификат 80 PLUS</label>
                                            <input type="text" name="item_certificate">
                                        </div>

                                        <div class="item">    
                                            <label for="">Диаметр вентилятора</label>
                                            <input type="text" name="item_Fan_Diameter">
                                        </div>

                                    </form>
                                </div>

                                <div class="item item_Price">
                                    <label for="">Цена</label>
                                    <input type="text" name="item_Price">
                                </div>

                                <div class="item item_Submit">
                                    <button form="form">Добавить</button>
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