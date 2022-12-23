<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/font-montserrat/Montserrat/stylesheet.css">
    <link rel="stylesheet" href="/css/headersall.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/sale-game-styles.css">
    <link rel="stylesheet" href="/css/gamerec.css">
    <link rel="stylesheet" href="/css/karti.css">
    <link rel="stylesheet" href="/css/garant-cs.css">
    <link rel="stylesheet" href="/css/podpiska.css">
    <link rel="stylesheet" href="/css/footerr.css">
    <link rel="stylesheet" href="/css/korzinaa.css">
    <link rel="stylesheet" href="/css/opisanie.css">

    <link rel="ico" type="img/png" sizes="32x32" href="/disign_site/ava/ava2.jpg">

    
   


    
    <title>SALE GAMES</title>
</head>
<body>

    <header>
        <div class="container-header">
            <a href="/php/index.php"><img class="logo" src="/disign_site/salegames.svg" alt="Logo"></a>
            <img  class="image-search" src="/disign_site/Search.png" alt="Search">
            <input class="search" type="text" placeholder="Искать здесь..."> 
            <nav class="header-nav">
                <ul class="nav-line">
                    <li ><a href="/php/index.php">ГЛАВНАЯ</a></li>
                    <li ><a href="/php/kater.php">КАТЕГОРИИ</a></li>
                    <li ><a href="/карточки/kart.php">КАРТОЧКИ</a></li>
                    <li ><a href="/php/o_nas.php">О НАС</a></li>
                </ul>
                <ul>
                    <li class="img-li">
                    <?php if(isset($_SESSION['id'])):?>
                        <a href="#"><img class="user-logo"src="/disign_site/user.svg" alt=""></a>
                        <ul class="submenu">
                        
                            <li>
                                    <a href="profil.php"><?php echo 'Профиль'?> </a>
                            </li>
                            <li>
                                    <a href="/php/oplata.php"><?php echo 'Оплата'?> </a>
                            </li>
                            <li>
                                <a href="/php/korzinochka.php"><?php echo 'Корзина'?></a>
                            </li>
                            <li>
                                    <a class="vihod" href="lonout.php"><?php echo 'Выход'?> </a>
                            </li>

                        <?php else: ?>
                        <a href="/php/vhod.php"><img class="user-logo"src="/disign_site/user.svg" alt=""></a>
                        <ul class="submenu">
                            <li>
                                <a href="/php/vhod.php">Вход</a>
                            </li>
                            <li>
                                <a href="/php/registr.php">Регистрация</a>
                            </li>
                        <?php endif; ?>


                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    