<!-- <?php require "db.php" ?> -->



<section class="section-sale-game">

    <div class="section-container">
        <div class="item active"> 
            <?php  
            for($i=0; $i<1; $i++): ?>
                <div class="one-sale">
                    <a href="#" ><img src="<?php echo $info[$i]["image"]?>"></a> 
                </div>  
                <div class="two-sale">
                    <a href="#" ><img src="<?php echo $info[$i]["image2"]?>"></a>
                    <a href="#" ><img class="image-three-top" src="<?php echo $info[$i]["image3"]?>"></a>   
                </div>  
            <?php endfor; ?>     
        </div>
        <div class=" item next">
            <?php  
            for($i=1; $i<2; $i++): ?>
                <div class="one-sale">
                    <a href="#" ><img src="<?php echo $info[$i]["image"]?>"></a>
                </div>   
                <div class="two-sale">
                    <a href="#" ><img src="<?php echo $info[$i]["image2"]?>"></a>
                    <a href="#" ><img  class="image-three-top" src="<?php echo $info[$i]["image3"]?>"></a>   
                </div> 
                <?php endfor; ?>   
        </div>
        <div class="item prev">
            <?php  
            for($i=2; $i<3; $i++): ?>
                <div class="one-sale">
                    <a href="#" ><img src="<?php echo $info[$i]["image"]?>"></a>  
                </div>
                <div class="two-sale">
                    <a href="#" ><img src="<?php echo $info[$i]["image2"]?>"></a>
                    <a href="#" ><img class="image-three-top" src="<?php echo $info[$i]["image3"]?>"></a>   
                </div>   
            <?php endfor; ?>     
        </div>
        <div class="button-container">
            <div class="button"><i class="fas fa-angle-left"></i></div>
            <div class="button"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
</section>