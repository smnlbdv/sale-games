<?php require "db.php" ?>
<?php require "header.php" ?>


<div class="content2">
        <div class="content__body">
        <?php foreach ($info_games as $i): ?>
            <div class="content__body_picblock">
                <div class="picblock__blockleft">
                    <img src="#" alt="">
                    <p><?php echo $i["nazvanie"]; ?></p>
                </div>
                <div class="face3">
                    <div class="face3 face33">
                        <img src="<?php echo $i["image-one"]; ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="content__body_buyblock">
                <div class="buyblock__txt">
                    Купить <?php echo $i["nazvanie"]; ?>
                </div>
                <div class="buyblock__button">
                    <div class="buyblock__button_price">
                    <?php echo $i["price"]; ?> BYN
                    </div>
                    <div class="buyblock__button_buy">
                        Купить
                    </div>
                    <div class="buyblock__button_buy">
                        В корзину
                    </div>
                </div>
            </div>
            <div class="aboutblock__txt">
                    Об этой игре
                </div>
            <div class="content__body_aboutblock">
                
                <div class="aboutblock__blockdescription">
                    <p class="sysblock__blockdescriptin_title_2"><?php echo $i["opisanie"]; ?></p>
                </div>
            </div>
            <div class="aboutblock__txt">
                    Системные требования
            </div>
            <div class="content__body_sysblock">
                
                <div class="sysblock__blockdescriptin_body">
                    <div class="sysblock__blockdescriptin_left">
                        <p class="sysblock__blockdescriptin_title">
                            Минимальные системные требования:
                        </p>
                        <p class="sysblock__blockdescriptin_title_2"><?php echo $i["sistem-min"]; ?></sysblock__blockdescriptin_desc>
                    </div>

                    <div class="sysblock__blockdescriptin_right">
                        <p class="sysblock__blockdescriptin_title">
                            Рекомендованные системные требования:
                        </p>
                        <p class="sysblock__blockdescriptin_title_2"><?php echo $i["sistem-recomend"]; ?></p>
                        
                    </div>

                </div>
            </div>
        <?php endforeach; ?>
        </div>
</div>








<?php require "footer.php" ?>