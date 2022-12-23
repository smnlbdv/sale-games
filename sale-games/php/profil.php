<?php require "db.php" ?>
<?php require "db2.php" ?>
<?php require "header.php"?>

<link rel="stylesheet" href="/css/profill.css">


<div class="bg">


    <div class="container-profil">
        <div class="horizontal-line">
            <div class="section-profil">
                <div class="header-profil">
                    <div class="block-img">
                        <img src="/disign_site/user.svg" class="square">
                    </div>
                    <div class="block-a">
                    <?php if(isset($_SESSION['id'])):?>
                        <a href="#" class="a2">Привет, <?php echo $user_id ?></a>
                    <?php else: ?>
                        <?php header('Location: /php/vhod.php'); ?>
                    <?php endif; ?>

                    </div>
                    <p>Баланс: 50 BYN</p>
                </div>
            </div>
        </div>
    <section class="section_t">
        <div class="section-container7">
            
                <div class="tabs">
                    <a id="block1">КУПЛЕННОЕ</a>
                    <a id="block2">ВЫЙГРЫШИ</a>
                    <a id="block3">ПРЕДЗАКАЗЫ</a>
                </div>
                
            
                <div id="tab-01" class="block-card11">
                <?php foreach ($predzakaz as $i): ?>
                    <div class="card">
                        <div class="face face1">
                            <img src="<?php echo $i["image-one"]; ?>" alt="game1">
                        </div>
                        <div class="face text">
                            <div class="content">
                                <p style="font-size: 25px;"><?php  echo $i["nazvanie"]; ?></p>
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <div id="tab-02" class="block-card2">
    
                </div>
                <div id="tab-03" class="block-card3">

                </div>
            
        </div>
    </section>

    </div>
</div>

<script src="/js/script.js"></script>
<script src="/js/button.js"></script>
<script src="/js/jquery-3.6.1.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/js/korzina.js"></script>
<script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
