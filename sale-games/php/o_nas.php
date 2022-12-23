<?php require "db.php" ?>
<?php require "header.php" ?>

<link rel="stylesheet" href="/css/o_nas.css">

<section class="section_tw">
    <div class="section-containertw">
        
            <div class="tabs2">
                <a id="block1">КОНТАКТЫ</a>
                <a id="block2">ОТЗЫВЫ</a>   
            </div>
            <div id="tab-01" class="block-card11">
                    <p class="p3">Если у вас возникли вопросы по магазину или определенному товару вы можете задать их <a href="#" class="kons">онлайн консультанту.</a></p>
                    <p class="p2">Мы в социальных сетях</p>
                    <p class="p3">Если у вас возникли вопросы по магазину или определенному товару вы можете задать их в социальных сетях</p>
                    <div class="jj">
                        <a href="#"><img  src="/disign_site/Telegram - Negative.png"> </a>
                        <a href="#"><img  src="/disign_site/VK - Negative.png"> </a>
                        <a href="#"><img  src="/disign_site/Instagram - Negative.png"> </a>
                        <p class="p2">Команда разработчиков</p>
                        <p class="p3">Разработка и продвижение сайта — <a href="#" class="kons1">MARS NFT/KFC/M&M’s/H&M</a></p>
                        <p class="p2">Отдельное спасибо:</p>
                        <p class="p3">UX/UI дизайн —  <a href="#" class="kons">Матвей Маланчик</a>, <a href="#" class="kons">Паша Гаврилов</a></p>
                        <p class="p3">Frontend разработчик —  <a href="#" class="kons">Влад Строк</a>, <a href="#" class="kons"> Артем Масловский</a>
                        </p>
                        <p class="p3">Becend разработчик—  <a href="#" class="kons">Семён Лебедев</a></p>
                    </div>
            </div>
            <div id="tab-02" class="block-card22">
                
            <?php foreach($otsivi as $i): ?>
                <div class="otsiv1">
                    
                        <div class="img-otz">
                            <img src="<?php echo $i["image"]?>" alt="otsiv">
                        </div>
                        <div class="osnova-otz">
                        <p class="p1_1"><?php echo $i["name"]?></p>
                            <p class="p2_2"><?php echo $i["text"]?> </p>
                        </div>
                </div>
            <?php endforeach; ?> 
            </div>

            
        
    </div>
        
    
</section>
<script src="/js/o_nas.js"></script>
</body>

<?php require "footer.php" ?>