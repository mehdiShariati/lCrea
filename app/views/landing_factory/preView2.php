<?php require APP_ROOT."/views/layout/header.php"; ?>
<script src="<?= URL_ROOT ?>/bower_components/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?= URL_ROOT."/" ?>dist/grapick.min.css">
    <script src="<?= URL_ROOT."/" ?>dist/grapick.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Romanesco" rel="stylesheet">
    <style>
    .timeText{
      color:white;
    }
    
    </style>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="text-align:right;font-family: BBardiya">
        <h4 class="modal-title" style="text-align:right;font-family: BBardiya">شرایط و قوانین</h4>
      </div>
      <div class="modal-body" style="text-align:right;font-family: BBardiya">
        <p>
         <?= $data->rules2 ?>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="text-align:right;font-family: BBardiya">بستن</button>
      </div>
    </div>

  </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  

<div style="position:fixed;top:20px;right:10px">
<div class="btn-group btn-group-lg">
<button class="btn btn-info" style="display:none" id="nextService">   صفحه آخر  <-</button>
<button class="btn btn-info" id="next">صفحه ی بعد <-</button>
<button class="btn btn-info" style="display:none" id="prev">صفحه ی قبلی -></button>
<button id="close" class="btn btn-danger">اتمام تغییرات</button>

</div>




</div>

<p class="timeText">
            * زمـان باقـی مانـده برای دریافت هـدیه دوم *
        </p>
        
        <div>
            <div class="clock"></div>
        </div>


        <div id="numberPeople" class="saveNumberGroup">
        <a class="p-color-4" href="<?=  $data->link_download_service1 ?>">&#1583;&#1575;&#1606;&#1604;&#1608;&#1583; &#1606;&#1585;&#1605; &#1575;&#1601;&#1586;&#1575;&#1585;</a>
            <p class="p-color-4" id="sendtxt"  style="position:relative;color:<?=  $data->color_success_text_firstService ?>">
           
               <br>
  
            <?=  $data->success_text_firstService ?>
 
<br>


                <div style="position:absolute;left:-150px;cursor: pointer;" id="change-send-text-btn"><i style="font-size:25px;" class="fa fa-edit"></i>تغییر متن فعالسازی سرویس اول</div>
                <div style="position:absolute;left:-200px;top:0;z-index:2000">
                <div style="display:none" id="change-send-text-from">
        <form id="ChangeSendText" method="post" action="<?= URL_ROOT."/Factories/changeSuccessSendText/".$data->id ?>">
    
       
                    <textarea id="editor1" name="sendText1" rows="3" cols="90"> <?=  $data->success_text_firstService ?> </textarea>
         
    
    <input type="color" style="width:140px" name="color_text" value="<?= $data->color_success_text_firstService ?>" >
  
    <input type="submit" id="submit" value="تغییر متن فعالسازی سرویس اول">
    </form>
                    </div>
                    </div>

<br>

            </p>
            <div class="section-5"  !important;position:relative">


              
            <div style="position:absolute;left:-130px;top:200px;cursor: pointer;" id="change-send-text-btn2"><i style="font-size:25px;" class="fa fa-edit"></i>تغییر متن ارسال</div>
                <div style="position:absolute;left:-200px;top:0;z-index:2000">
                <div style="display:none" id="change-send-text-from2">
        <form id="ChangeSendText2" method="post" action="<?= URL_ROOT."/Factories/changesendTextService2/".$data->id ?>">
    
       
                    <textarea id="editor12" name="sendText2" rows="3" cols="90"> <?= $data->service2_send_text ?> </textarea>
         
    
    <input type="color" style="width:140px" name="color_text2" value="<?=  $data->color_service2_send_text ?>" >
  
    <input type="submit" id="submit2" value="تغییر متن   ">
    </form>
                    </div>
                    </div>
           









               
            </div>
        </div>
 <div class="p-color-2 text-shadow sec-2-2" id="sendtxt" style="background-color:<?php echo $data->boxColor_send_text; ?>;border: 3px solid black;min-height: 44px;max-width: 250px;min-width: 70px;border-radius: 8px;margin: auto;padding: 2px;box-shadow:0 0 8.2px 1.8px rgba(0, 0, 0, 0.45);opacity:0.75;margin-top:5px;line-height: normal;">
<p class="" style="color:<?=  $data->color_service2_send_text ?>"><?= $data->service2_send_text ?></p>
</div>


        <div id="step3" class="all-step">
        <div class="inputGroup">
                    <input type="tel" maxlength="11" id="usermobile" readonly class="form-input-1 grid-input" style="font-family:Harmattan;font-size:17.5px;background-color:<?= $data->color_input_number ?>;" placeholder="شماره موبایلت را وارد کن">
                    <i class="fa fa-mobile inputPhone" aria-hidden="true"></i>
                </div>
                <div class="buttonGroup">
                    <button class="form-button btn-1 grid-button" id="subscribeRequest" style="font-family:Harmattan;font-size:17.5px;background-color:<?= $data->color_button_submit ?>">تایید</button>
                </div>
				<p style=";font-family: BBardiya;margin-bottom: 9px;color:white;cursor:pointer" data-toggle="modal" data-target="#myModal">
						با شرایط سرویس موافقم
					</p>
            </div>
        </div>
        <div id="step2" class="all-step hide" style="">

            <div class="section-4" style="position:relative">
                <p class="text-sms" id="sendtxt3" style="color:<?=  $data->color_service2_confirm_text ?>;font-size:19px">
                   <?= $data->service2_confirm_text ?>
                </p>

                <div style="position:absolute;left:0;top:25px;right:0;cursor: pointer;" id="change-send-text-btn3"><i style="font-size:25px;" class="fa fa-edit"></i>تغییر متن تایید ارسال</div>
                <div style="position:absolute;left:0;top:25px;z-index:2000">
                <div style="display:none" id="change-send-text-from3">
        <form id="ChangeSendText3" method="post" action="<?= URL_ROOT."/Factories/changeconfirmService2/".$data->id ?>">
    
       
                    <textarea id="editor3" name="sendText3" rows="3" cols="90"><?= $data->service2_confirm_text ?></textarea>
         
    
    <input type="color" style="width:140px" name="color_text3" value="<?=  $data->color_service2_confirm_text ?>">
  
    <input type="submit" id="submit3" value="تغییر متن   ">
    </form>
                    </div>
                    </div>






            </div>
            <div class="step">
            <div class="inputGroup">
                    <input type="tel" id="validcode" style="background-color:<?= $data->color_input_number ?>" class="form-input-1" placeholder="-  -  -  -" maxlength="4">
                    
                </div>
                <div class="buttonGroup">
                    <button class="form-button btn-2" style="background-color:<?= $data->color_button_submit ?>" id="subscribeConfirm">تایید</button>
                </div>
					<p style=";font-family: BBardiya;margin-bottom: 9px;color:black;cursor:pointer" data-toggle="modal" data-target="#myModal">
						با شرایط سرویس موافقم
					</p>
                </div>
                <p class="form-error">
                    کد دریافتی معتبر نیست
                </p>

            </div>
        </div>
    </div>
</div>
<div class="overlay hide" id="overlay">
    <div class="spinner" id="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
          //Text Success Service 1 
          var changeTextBtn=$("#change-send-text-btn");
            var sendTextContainer=$("#sendtxt");
            var sendTextInput=$("#editor1");
            var formChangeSendText=$("#change-send-text-from");
            changeTextBtn.click(function(){
$('#ChangeSendText2').fadeIn("slow");

                    changeTextBtn.fadeOut("slow");
                    sendTextContainer.fadeOut('slow');
                    sendTextInput.val(sendTextContainer.text());
                    formChangeSendText.fadeIn("slow");
                    $('#ChangeSendText').ajaxForm({
			target: '#sendtxt',
			success: function(response) {
                response=response.trim();
                let data=response.split("-");
               console.log(response);
                changeTextBtn.fadeIn("slow");
                sendTextContainer.fadeIn("slow");
                formChangeSendText.fadeOut("slow");
                
                $('#sendtxt').html(data[0]);
                $('#sendtxt').css("color",data[1])
                
             
			}
		});


                });

                //end section send service2  btn

                     //Text Success Service 1 
          var changeTextBtn2=$("#change-send-text-btn2");
            var sendTextContainer2=$("#sendtxt2");
            var sendTextInput2=$("#editor12");
            var formChangeSendText2=$("#change-send-text-from2");
            changeTextBtn2.click(function(){
                    changeTextBtn2.fadeOut("slow");
                    sendTextContainer2.fadeOut('slow');
                    sendTextInput2.val(sendTextContainer2.text());
                    formChangeSendText2.fadeIn("slow");
                    $('#ChangeSendText2').ajaxForm({
			target: '#sendtxt2',
			success: function(response) {
                response=response.trim();
                let data=response.split("-");
               console.log(response);
                changeTextBtn2.fadeIn("slow");
                sendTextContainer2.fadeIn("slow");
                formChangeSendText2.fadeOut("slow");
                $('#sendtxt2').html(data[0]);
                $('#sendtxt2').css("color",data[1])
                
             
			}
		});


                });

                //end section send service2 btn

                    //navigate buttons

                    $("#next").click(function(){
                $("#step2").removeClass('hide');
                $("#step3").hide("slow");
                $("#numberPeople").hide("slow");
                 $('#prev').fadeIn("slow");
                 $("#next").fadeOut("slow");
                 $("#nextService").fadeIn("slow");
             });

             $("#prev").click(function(){
              $("#step2").addClass('hide');
                $("#step3").show("slow");
                $("#numberPeople").show("slow");
                $('#prev').fadeOut("slow");
                $("#next").fadeIn("slow");
                $("#nextService").fadeOut("slow");
             }); 

                    //end Navigate



  //end section send service2  confirm btn

                     //Text Success Service 1 
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
			target: '#sendtxt3',
			success: function(response) {
                response=response.trim();
                let data=response.split("-");
               console.log(response);
                changeTextBtn3.fadeIn("slow");
                sendTextContainer3.fadeIn("slow");
                formChangeSendText3.fadeOut("slow");
                $('#sendtxt3').html(data[0]);
                $('#sendtxt3').css("color",data[1])
                
             
			}
		});


                });

                //end section send service2  confrim btn

//button final Service
$("#nextService").click(function(){

  window.location.replace(window.location.href+"/okey");



});

var _url="<?= URL_ROOT.'/Factories/showAllLandings/'  ?>";
$("#close").click(function(){

window.location.replace(_url);

});

      
//SERVICE SECOND
var body=$(".app-style").css("background","<?= $data->background_color ?>");   
var _id="<?= $data->id ?>";
    var _baseUrl="<?= URL_ROOT."/Factories/" ?>";
    var _img="<?= URL_ROOT."/image/" ?>";
</script>

<?php require APP_ROOT."/views/layout/footer.php"; ?>

