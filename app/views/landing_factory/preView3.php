<?php require APP_ROOT."/views/layout/header.php"; ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>


    </style>
        <div id="loader" class="loader hide"><div class="loading"></div></div>

            <div   style="position:fixed;right:0;top:0">
            <button id="close" class="btn btn-danger">اتمام تغییرات</button>

            </div>

        <div class="picNet">
            <img id="preview" src="<?= URL_ROOT."/image/".$data->final_page_image ?>" />

           <div style="position:absolute;left:-120px;top:0;cursor: pointer;" id="change-animate-pic"><i style="font-size:25px;" class="fa fa-edit"></i>تغییر عکس </div>
            <div style="position:absolute;left:-250px;top:0;display:none" id="animate-pic-container">
           <form id="ajaxsubmit" method="post" action="<?= URL_ROOT."/Factories/ChangeFinalImage/".$data->id ?>"enctype="multipart/form-data">
            <input type="file" id="fileup" name="fileup">
            <input type="submit" id="submit" value="تغییر عکس">
            </form>
                            </div>




        </div>
        <div id="step1">
            <div class="textPic">
                <img class="giftPic" src="<?= URL_ROOT."/image/step3.png" ?>" />
            </div>
            <div class="section-4 saveNumberGroup m-t-0">
                <div id="finalText" class="p-color-4" style="color:<?= $data->color_final_text ?>">
                
                <p id="txta" class='alert'><?= $data->final_page_text ?></p>


                <div style="position:absolute;left:-30px;bottom:25px;cursor: pointer;color:black;" id="change-send-text-btn3"><i style="font-size:25px;" class="fa fa-edit"></i>تغییر متن  نهایی</div>
                <div style="position:absolute;left:0;bottom:25px;z-index:2000">
                <div style="display:none" id="change-send-text-from3">
        <form id="ChangeSendText3" method="post" action="<?= URL_ROOT."/Factories/changeFinal/".$data->id ?>">
    
       
                    <textarea id="editor3" name="sendText3" rows="3" cols="90"><?= $data->final_page_text ?></textarea>
         
    
    <input type="color" style="width:140px" name="color_text3" value="<?= $data->color_final_text ?>">
  
    <input type="submit" id="submit3" value="تغییر متن   ">
    </form>
                    </div>
                    </div>
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
           var _img="<?= URL_ROOT."/image/" ?>";
            var _url="<?= URL_ROOT.'/Factories/showAllLandings/' ?>";
            $(document).ready(function(){
                var animePicChangeBtn=$("#change-animate-pic");
            var formChangePic=$("#animate-pic-container");
       
        var body=$(".app-style").css("background","<?= $data->background_color ?>");
        animePicChangeBtn.click(function(){
                    animePicChangeBtn.fadeOut("slow");
                    formChangePic.fadeIn("slow");
                    $('#ajaxsubmit').ajaxForm({
			target: '#preview',
			success: function(response) {
                response=response.trim();
                let loc=_img+response
                console.log(response);
                formChangePic.fadeOut('slow');
                $("#preview").attr("src",loc);
                animePicChangeBtn.fadeIn("slow");
			}
		});



});

var changeTextBtn3=$("#change-send-text-btn3");
            var sendTextContainer3=$("#sendtxt3");
            var sendTextInput3=$("#editor3");
            var formChangeSendText3=$("#change-send-text-from3");
            changeTextBtn3.click(function(){
                    changeTextBtn3.fadeOut("slow");
                    sendTextContainer3.fadeOut('slow');
                    sendTextInput3.val(sendTextContainer3.text());
                    formChangeSendText3.fadeIn("slow");
                    $('#ChangeSendText3').ajaxForm({
			target: '#txta',
			success: function(response) {
                response=response.trim();
                let data=response.split("-");
               console.log(response);
                changeTextBtn3.fadeIn("slow");
                sendTextContainer3.fadeIn("slow");
                formChangeSendText3.fadeOut("slow");
                $('#txta').html(data[0]);
                $('#txta').css("color",data[1])
                
             
			}
		});


                });

            $("#close").click(function(){

                window.location.replace(_url);

            });
            });
        </script>

        <?php require APP_ROOT."/views/layout/footer.php"; ?>