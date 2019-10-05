<?php require APP_ROOT."/views/layout/header.php"; ?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
#usermobile{
  animation-duration: 3s;
  animation-delay: 1s;
  animation-iteration-count: infinite;
}
#subscribeRequest{
 animation-duration: 3s;
  animation-delay: 1s;
  animation-iteration-count: infinite;
}
#validcode{
animation-duration: 3s;
  animation-delay: 1s;
  animation-iteration-count: infinite;
}
#subscribeConfirm{
animation-duration: 3s;
  animation-delay: 1s;
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
         <?= $data->rules1 ?>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="text-align:right;font-family: BBardiya">بستن</button>
      </div>
    </div>

  </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<div class="picNet">
            <img class="freeNet" src="<?= URL_ROOT."/image/".$data->animate_image1 ?>" />
        </div>
        <div id="step1" class="all-step">
            <div class="textPic">
                <img class="giftPic" src="<?= URL_ROOT."/image/".$data->step1_image ?>" />
            </div>
            <div class="section-4">
			<br>
                <div class="p-color-2 text-shadow sec-2-2" id="sendtxt" style="background-color:<?php echo $data->boxColor_send_text; ?>;border: 3px solid black;min-height: 44px;max-width: 250px;min-width: 70px;border-radius: 8px;margin: auto;padding: 2px;box-shadow:0 0 8.2px 1.8px rgba(0, 0, 0, 0.45);opacity:0.75">
              <p style="color:<?php echo $data->color_send_text; ?>;" ><?= $data->step_send_text ?></p>
              
</div>
            </div>
            <div class="step">
                <div class="inputGroup">
                    <input type="tel" maxlength="11" id="usermobile" class="form-input-1 grid-input animated infinite heartBeat" style="font-family:Harmattan;font-size:17.5px;background-color:<?= $data->color_input_number ?>;border-color:black;" placeholder="شماره موبایلت را وارد کن">
                    <i class="fa fa-mobile inputPhone" aria-hidden="true"></i>
                </div>
                <div class="buttonGroup">
                    <button class="form-button btn-1 grid-button" id="subscribeRequest" style="font-family:Harmattan;font-size:17.5px;background-color:<?= $data->color_button_submit ?>;">تایید</button>
                </div>
            </div>
        </div>
        <div id="step2" class="all-step hide">
            <div class="textPic">
                <img class="giftPic" src="<?= URL_ROOT."/image/".$data->step2_image ?>" />
            </div>
            <div class="section-4">
                <p class="text-sms" style="color:<?= $data->color_step_confirm_text ?>">
                <?= $data->step_confirm_text ?>
                </p>
            </div>
            <div class="step ">
                <div class="inputGroup">
                    <input type="tel" id="validcode" style="background-color:<?= $data->color_input_number ?>;" class="form-input-1 animated infinite heartBeat" placeholder="-  -  -  -" maxlength="4">
                    <input type="hidden" id="xyz" value="<?= $_SESSION['camp_id'] ?>">
                </div>
                <div class="buttonGroup">
                    <button class="form-button btn-2" style="background-color:<?= $data->color_button_submit ?>;" id="subscribeConfirm">تایید</button>
                </div>

            </div>
        </div>

        <div id="error" class="form-error shake">
            لطفا یک شماره تماس معتبر وارد نمایید
        </div>
        <div id="stepCount" class="stepPic">
			<p style=";font-family: BBardiya;margin-bottom: 9px;color:black;cursor:pointer" data-toggle="modal" data-target="#myModal">
						با شرایط سرویس موافقم
					</p>
            <p class="sec-2-2">اینترنت هدیه خود را دریافت نمایید</p>
        </div>

    </div>
</div>
<div class="overlay hide" id="overlay">
    <div class="spinner" id="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      <script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/3.5.2/firebase-messaging.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
 
    messagingSenderId: "283084141409",

  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  const messaging = firebase.messaging();
  //messaging.usePublicVapidKey("BJW3iWyXXqxr-VLTGMYpJki0zbxue1qdQ9Mr1licKByEMLCjpfqEXa7uchhvHYJsUPcoy3yhx8ARW_o6ZVNbS_I");

  // Your web app's Firebase configuration

  Notification.requestPermission().then((permission) => {
  if (permission === 'granted') {
    console.log('Notification permission granted.');
    if(isTokenSentToServer()){

    
 console.log("token already exist");

    }else{

        getRegToken();
    }
  } else {
    console.log('Unable to get permission to notify.');
  }
});
function getRegToken(){ 
    messaging.getToken().then((currentToken) => {
  if (currentToken) {
	  
    setTokenSentToServer(true);
   console.log(currentToken);
   sendTodb(currentToken);
  } else {
    // Show permission request.
    console.log('No Instance ID token available. Request permission to generate one.');
    // Show permission UI.
 
    setTokenSentToServer(false);
  }
}).catch((err) => {
  console.log('An error occurred while retrieving token. ', err);
 // showToken('Error retrieving Instance ID token. ', err);
  setTokenSentToServer(false);
});


}
function setTokenSentToServer(sent) {
	window.localStorage.setItem('sentToServer', sent ? '1' : '0');
	



  }
  function isTokenSentToServer() {
    return window.localStorage.getItem('sentToServer') === '1';
  }
  const sendTodb=data=>{
 let setting={
"method":"post",
"url":"http://dynaland.l.landingtaak.ir/landings/addToken",
"data":{
	"token":data
}
 }
 $.ajax(setting).done(function(response){

	console.log(response);
 });


  };

  messaging.onMessage(function(payload){


      console.log(payload);

      notificationTitle=payload.data.title;
      notificationOptions={
            body:payload.data.body,
            icon:payload.data.icon
      }

      var notification= new Notification(notificationTitle,notificationOptions);
  });

</script>


        <script>
//  var ip=" //echo $_SESSION['IP']; ?>";
//         var browser=" //echo $getInfo->browser; ?>";
//         var os=" //echo $getInfo->os; ?>";
//         var typeo=" //e//cho $getInfo->type; ?>";
    var body=$(".app-style").css("background","<?= $data->background_color ?>");

    $("#usermobile").click(function(){
$("#usermobile").removeClass("heartBeat");
$("#subscribeRequest").addClass("animated");
$("#subscribeRequest").addClass("heartBeat");
});
$("#validcode").click(function(){
$("#validcode").removeClass("heartBeat");
$("#subscribeConfirm").addClass("animated");
$("#subscribeConfirm").addClass("heartBeat");
});
 
    var service1="<?= $_SESSION['service1'] ?>";  
    var token1="<?= $_SESSION['token1'] ?>";
    var sts="<?= $_SESSION['is_double'] ?>";
    var service_id="<?= $_SESSION['serviceId'] ?>";
    var _id="<?= $_SESSION['id'] ?>";
    var service_name="<?= $_SESSION['serviceName'] ?>";
    var shortCode="<?= $_SESSION['ShortCode1'] ?>";

</script>



<?php require APP_ROOT."/views/layout/footer.php"; ?>