<?php require APP_ROOT."/views/layout/header.php"; ?>
<style>
#ct{
width:98%;
}

    </style>
        <div id="loader" class="loader hide"><div class="loading"></div></div>
        <div class="picNet">
            <img src="<?= URL_ROOT."/image/".$data->animate_image1 ?>" />
        </div>
        <div id="step1">
            <div class="textPic">
                <img class="giftPic" src="<?= URL_ROOT."/image/step3.png" ?>" />
            </div>
            <div class="section-4 saveNumberGroup m-t-0" id="ct">
                <div id="finalText" class="p-color-4" style="color:<?= $data->color_final_text ?>">
				<?= $data->final_page_text ?>
				</div>
                <div class="p-color-4">

               &#1575;&#1662;&#1604;&#1740;&#1705;&#1740;&#1588;&#1606; &#1585;&#1608; &#1575;&#1586; &#1575;&#1740;&#1606;&#1580;&#1575; &#1583;&#1575;&#1606;&#1604;&#1608;&#1583; &#1705;&#1606;&#1740;&#1583;.
                  <br>
            <?php 
            if($data->is_double==1){
            ?>
            <a href="<?= $data->link_download_service2 ?>">&#1583;&#1575;&#1606;&#1604;&#1608;&#1583; &#1606;&#1585;&#1605; &#1575;&#1601;&#1586;&#1575;&#1585;</a>
			<?php }else{ ?>
                
                
                <a href="<?= $data->link_download_service1 ?>" target="_blank">&#1583;&#1575;&#1606;&#1604;&#1608;&#1583; &#1606;&#1585;&#1605; &#1575;&#1601;&#1586;&#1575;&#1585;</a>
            <?php } ?>
				</div>
            </div>

        </div>
        <script>
$(".app-style").css("background","<?= $data->background_color ?>");
            $(document).ready(function(){
           
      
        
});
        </script>

        <?php require APP_ROOT."/views/layout/footer.php"; ?>