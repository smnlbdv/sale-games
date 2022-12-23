<?php require "db.php" ?>
<?php require "header.php" ?>
<?php require "func.php" ?>



<section class="section_korz">
    <div class="section-container_korz">
        
            <div class="tabs_korz">
                <p>Колличество товаров: <?php echo $_SESSION["cart.qty"] ?></p>
                <p>Цена: <?php echo $_SESSION["cart.sum"] ?> BYN</p>
                <button class="butt" >ЗАКАЗАТЬ</button>
            </div>
            <?php if (!empty($_SESSION['cart'])): ?>
            <div id="tab-01" class="block-card-korz">
                <?php foreach($_SESSION['cart'] as $id =>$item): ?>
                    <div class="okno1">
                        <div class="img-class">
                            <img  src="<?php echo $item['img'] ?>">
                        </div>
                        <div class="nazv1">
                            <p calss="p"><?php echo $item['title']?></p>
                        </div>
                        <div class="cena1">
                            <p><?php echo $item['price'] ?> BYN</p>
                        </div>

                        <a class="knopka1">
                            <button id="clear" type="button">УДАЛИТЬ</button>
                        </a>
                        
                    </div>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
                <div class="p_korz_p">
                    <p >Корзина пуста</p>
                </div>
                
            <?php endif; ?>
            
    </div>
</section>
</body>
<?php require "footer.php" ?>