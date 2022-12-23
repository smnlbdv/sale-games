<?php require "db.php" ?>
<?php require "header.php" ?>

<link rel="stylesheet" href="/css/katt.css">


<div class="container-kater">
    <div class="section-container2">

        <div class="rectangle text_center_middle">КАТЕГОРИИ</div>


        <div id="container" >
            <div class="tabs1">
                <input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1">СИМУЛЯТОРЫ</label>

                <input id="tab2" type="radio" name="tabs">
                <label for="tab2">ПРИКЛЮЧЕНИЯ</label>

                <input id="tab3" type="radio" name="tabs">
                <label for="tab3">РОЛЕВЫЕ ИГРЫ</label>

                <input id="tab4" type="radio" name="tabs">
                <label for="tab4">ФЭНТЕЗИ-RPG</label>

                <input id="tab5" type="radio" name="tabs">
                <label for="tab5">СТРАТЕГИИ</label>

                <input id="tab6" type="radio" name="tabs">
                <label for="tab6">ЛОГИЧЕСКИЕ</label>

                <input id="tab7" type="radio" name="tabs">
                <label for="tab7">АРКАДЫ</label>
                <section id="content1" >
                    <div id="tab-01" class="block-card1">

                        <?php foreach ($sim as $i): ?>
                            <div class="card1">
                                <div class="face face11">
                                <a class="a_block" href="opisanie-games.php"><img class="img-info" data-id="<?php echo $i['id'] ?>" src="<?php echo $i["image-one"]; ?>" alt="game1"></a>
                                </div>
                                <div class="face text1">
                                    <div class="content">
                                    <p class="p_rec_p"><?php  echo $i["nazvanie"]; ?></p>
                                        <?php if(isset($_SESSION['id'])):?>
                                            <p class="p_rec"><?php echo $i['price'] ?> BYN</p>
                                            <a class="add-cart" data-id="<?php echo $i['id'] ?>" href="#">В КОРЗИНУ</a>
                                            
                                        <?php else: ?>
                                            <a href="vhod.php">В КОРЗИНУ</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>  
                    </div>
                </section>
                <section id="content2">
                <div id="tab-02" class="block-card1">

                    <?php foreach ($prikl as $i): ?>
                        <div class="card1">
                        <div class="face face11">
                                <a class="a_block" href="opisanie-games.php"><img class="img-info" data-id="<?php echo $i['id'] ?>" src="<?php echo $i["image-one"]; ?>" alt="game1"></a>
                                </div>
                                <div class="face text1">
                                    <div class="content">
                                    <p class="p_rec_p"><?php  echo $i["nazvanie"]; ?></p>
                                        <?php if(isset($_SESSION['id'])):?>
                                            <p class="p_rec"><?php echo $i['price'] ?> BYN</p>
                                            <a class="add-cart" data-id="<?php echo $i['id'] ?>" href="#">В КОРЗИНУ</a>
                                            
                                        <?php else: ?>
                                            <a href="vhod.php">В КОРЗИНУ</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>  
                </div> 
                </section>
                <section id="content3">
                <div id="tab-03" class="block-card1">

                    <?php foreach ($rolev as $i): ?>
                        <div class="card1">
                        <div class="face face11">
                                <a class="a_block" href="opisanie-games.php"><img class="img-info" data-id="<?php echo $i['id'] ?>" src="<?php echo $i["image-one"]; ?>" alt="game1"></a>
                                </div>
                                <div class="face text1">
                                    <div class="content">
                                    <p class="p_rec_p"><?php  echo $i["nazvanie"]; ?></p>
                                        <?php if(isset($_SESSION['id'])):?>
                                            <p class="p_rec"><?php echo $i['price'] ?> BYN</p>
                                            <a class="add-cart" data-id="<?php echo $i['id'] ?>" href="#">В КОРЗИНУ</a>
                                            
                                        <?php else: ?>
                                            <a href="vhod.php">В КОРЗИНУ</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>  
                </div> 
                </section>
                <section id="content4">
                <div id="tab-04" class="block-card1">

                    <?php foreach ($rpg as $i): ?>
                        <div class="card1">
                        <div class="face face11">
                                <a class="a_block" href="opisanie-games.php"><img class="img-info" data-id="<?php echo $i['id'] ?>" src="<?php echo $i["image-one"]; ?>" alt="game1"></a>
                                </div>
                                <div class="face text1">
                                    <div class="content">
                                    <p class="p_rec_p"><?php  echo $i["nazvanie"]; ?></p>
                                        <?php if(isset($_SESSION['id'])):?>
                                            <p class="p_rec"><?php echo $i['price'] ?> BYN</p>
                                            <a class="add-cart" data-id="<?php echo $i['id'] ?>" href="#">В КОРЗИНУ</a>
                                            
                                        <?php else: ?>
                                            <a href="vhod.php">В КОРЗИНУ</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>  
                </div>
                </section>
                <section id="content5">
                <div id="tab-05" class="block-card1">

                    <?php foreach ($strat as $i): ?>
                        <div class="card1">
                        <div class="face face11">
                                <a class="a_block" href="opisanie-games.php"><img class="img-info" data-id="<?php echo $i['id'] ?>" src="<?php echo $i["image-one"]; ?>" alt="game1"></a>
                                </div>
                                <div class="face text1">
                                    <div class="content">
                                    <p class="p_rec_p"><?php  echo $i["nazvanie"]; ?></p>
                                        <?php if(isset($_SESSION['id'])):?>
                                            <p class="p_rec"><?php echo $i['price'] ?> BYN</p>
                                            <a class="add-cart" data-id="<?php echo $i['id'] ?>" href="#">В КОРЗИНУ</a>
                                            
                                        <?php else: ?>
                                            <a href="vhod.php">В КОРЗИНУ</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>  
                </div>
                </section>
                <section id="content6">
                <div id="tab-06" class="block-card1">

                    <?php foreach ($logic as $i): ?>
                        <div class="card1">
                        <div class="face face11">
                                <a class="a_block" href="opisanie-games.php"><img class="img-info" data-id="<?php echo $i['id'] ?>" src="<?php echo $i["image-one"]; ?>" alt="game1"></a>
                                </div>
                                <div class="face text1">
                                    <div class="content">
                                    <p class="p_rec_p"><?php  echo $i["nazvanie"]; ?></p>
                                        <?php if(isset($_SESSION['id'])):?>
                                            <p class="p_rec"><?php echo $i['price'] ?> BYN</p>
                                            <a class="add-cart" data-id="<?php echo $i['id'] ?>" href="#">В КОРЗИНУ</a>
                                            
                                        <?php else: ?>
                                            <a href="vhod.php">В КОРЗИНУ</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>  
                </div>
                </section>
                <section id="content7">
                <div id="tab-06" class="block-card1">

                    <?php foreach ($ark as $i): ?>
                        <div class="card1">
                        <div class="face face11">
                                <a class="a_block" href="opisanie-games.php"><img class="img-info" data-id="<?php echo $i['id'] ?>" src="<?php echo $i["image-one"]; ?>" alt="game1"></a>
                                </div>
                                <div class="face text1">
                                    <div class="content">
                                    <p class="p_rec_p"><?php  echo $i["nazvanie"]; ?></p>
                                        <?php if(isset($_SESSION['id'])):?>
                                            <p class="p_rec"><?php echo $i['price'] ?> BYN</p>
                                            <a class="add-cart" data-id="<?php echo $i['id'] ?>" href="#">В КОРЗИНУ</a>
                                            
                                        <?php else: ?>
                                            <a href="vhod.php">В КОРЗИНУ</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>  
                </div>
                </section>
            </div>
        </div>
    </div>
</div>


<script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
</body>
<?php require "footer.php" ?>

<script src="/js/vihooood.js"></script>
<script src="/js/games-cookie.js"></script>
<script src="/js/script.js"></script>
<script src="/js/button.js"></script>
<script src="/js/jquery-3.6.1.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/js/korzina.js"></script>
<script src="https://kit.fontawesome.com/95a02bd20d.js"></script>