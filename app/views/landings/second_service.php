<?php require APP_ROOT."/views/layout/header.php"; ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
#subscribeRequest{
 animation-duration: 3s;
  animation-delay: 2s;
  animation-iteration-count: infinite;
}
#validcode{
 animation-duration: 3s;
  animation-delay: 2s;
  animation-iteration-count: infinite;
}
</style>
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


<p class="timeText">
            * زمـان باقـی مانـده برای دریافت هـدیه دوم *
        </p>
        
        <div>
            <div class="clock"></div>
        </div>


        <div id="numberPeople" class="saveNumberGroup">
            <p class="p-color-4" style="color:<?=  $data->color_success_text_firstService ?>">
            <a href="<?=  $data->link_download_service1 ?>">&#1583;&#1575;&#1606;&#1604;&#1608;&#1583; &#1606;&#1585;&#1605; &#1575;&#1601;&#1586;&#1575;&#1585;</a>
               <br>

            <?=  $data->success_text_firstService ?>

<br>



<br>

            </p>
           
        </div>
  <div class="p-color-2 text-shadow sec-2-2" id="sendtxt" style="background-color:<?php echo $data->boxColor_send_text; ?>;border: 3px solid black;min-height: 44px;max-width: 250px;min-width: 70px;border-radius: 8px;margin: auto;padding: 2px;box-shadow:0 0 8.2px 1.8px rgba(0, 0, 0, 0.45);opacity:0.75;margin-top:5px;line-height: normal;">
<p class="" style="margin-bottom:0;color:<?=  $data->color_service2_send_text ?>"><?= $data->service2_send_text ?></p>
</div>


        <div id="step3" class="all-step">
        <div class="inputGroup">
                    <input type="tel" maxlength="11" id="usermobile" readonly class="form-input-1 grid-input" style="font-family:Harmattan;font-size:17.5px;background-color:<?= $data->color_input_number ?>;" placeholder="شماره موبایلت را وارد کن">
                    <i class="fa fa-mobile inputPhone" aria-hidden="true"></i>
                </div>
                <div class="buttonGroup">
                    <button class="form-button btn-1 grid-button animated infinite heartBeat" id="subscribeRequest" style="font-family:Harmattan;font-size:17.5px;background-color:<?= $data->color_button_submit ?>;">تایید</button>
                </div>
				<p style=";font-family: BBardiya;margin-bottom: 9px;color:white;cursor:pointer" data-toggle="modal" data-target="#myModal">
						با شرایط سرویس موافقم
					</p>
            </div>
        </div>
        <div id="step2" class="all-step hide">

            <div class="section-4">
                <p class="text-sms" style="color:<?=  $data->color_service2_confirm_text ?>">
                   <?= $data->service2_confirm_text ?>
                </p>
            </div>
            <div class="step">
            <div class="inputGroup">
                    <input type="tel" id="validcode" style="background-color:<?= $data->color_input_number ?>;" class="form-input-1 animated infinite heartBeat" placeholder="-  -  -  -" maxlength="4">
                    <input type="hidden" id="xyz" value="<?= $_SESSION['camp_id'] ?>">
                </div>
                <div class="buttonGroup">
                    <button class="form-button btn-2" style="background-color:<?= $data->color_button_submit ?>;" id="subscribeConfirm">تایید</button>
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


        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            var _url_=window.location.href.split("/");
            if(_url_[7].startsWith("98")){
                _url_[7]=_url_[7].replace("98","0");
             
                        }

            $("#usermobile").val(_url_[7]);

$("#validcode").click(function(){
$("#validcode").removeClass("heartBeat");
$("#subscribeConfirm").addClass("animated");
$("#subscribeConfirm").addClass("infinite");
$("#subscribeConfirm").addClass("heartBeat");

});
           
//SERVICE SECOND
    var body=$(".app-style").css("background","<?= $data->background_color ?>");   
    var service1="<?= $_SESSION['service2'] ?>";  
    var token1="<?= $_SESSION['token2'] ?>";
    var service_id="<?= $_SESSION['serviceId2'] ?>";
    var service_name="<?= $_SESSION['serviceName2'] ?>";
    var sts=0;
    var _id="<?= $_SESSION['id'] ?>";
    var shortCode="<?= $_SESSION['ShortCode2'] ?>";
</script>

<?php require APP_ROOT."/views/layout/footer.php"; ?>