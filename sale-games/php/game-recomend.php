
<section class="section_two">
    <div class="section-container2">
        
            <div class="tabs">
                <a id="block1">НОВЫЕ</a>
                <a id="block2">ЛИДЕРЫ ПРОДАЖ</a>
                <a id="block3">ПРЕДЗАКАЗ</a>
            </div>
            
        
            <div id="tab-01" class="block-card1">

            <?php foreach ($novoe as $i): ?>
                <div class="card">
                    <div class="face face1">
                        <a href="opisanie-games.php"><img class="img-info" data-id="<?php echo $i['id'] ?>" src="<?php echo $i["image-one"]; ?>" alt="game1"></a>
                    </div>
                    <div class="face text">
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
            <div id="tab-02" class="block-card2">

            <?php foreach ($lider as $i): ?>
                <div class="card">
                    <div class="face face1">
                        <a href="opisanie-games.php"><img class="img-info" data-id="<?php echo $i['id'] ?>" src="<?php echo $i["image-one"]; ?>" alt="game1"></a>
                    </div>
                    <div class="face text">
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
            <div id="tab-03" class="block-card3">

            <?php foreach ($predzakaz as $i): ?>
                <div class="card">
                    <div class="face face1">
                        <a href="opisanie-games.php"><img class="img-info" data-id="<?php echo $i['id'] ?>" src="<?php echo $i["image-one"]; ?>" alt="game1"></a>
                    </div>
                    <div class="face text">
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
        
    </div>
        
    
</section>

