<?php require APP_ROOT."/views/layout/header.php"; ?>
<script src="<?= URL_ROOT ?>/bower_components/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="<?= URL_ROOT."/" ?>dist/grapick.min.css">
    <script src="<?= URL_ROOT."/" ?>dist/grapick.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Romanesco" rel="stylesheet">
    <style>
    .container {
     
      width: 500px;
      height: 500px;
       
  
    
   
    }

    .brand {
      user-select: none;
      margin: -12rem 0 3rem;
      text-align: center;
      font-size: 9rem;
      font-weight: 100;
      color: white;
      font-family: 'Romanesco', cursive;
      /*text-shadow: 2px 0 0 #555, -2px 0 0 #555, 0 2px 0 #555, 0 -2px 0 #555, 1px 1px #555, -1px -1px 0 #555, 1px -1px 0 #555, -1px 1px 0 #555;*/
    }

    .grapick-cont {
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
      border-radius: 3px;
      margin: -15px;
      padding: 25px 15px;
      width: 100%;
      height: 300px;
      background: white;
      position: relative;
    }

    .grp-preview {
      border-radius: 3px;
    }

    .inputs {
      margin: 25px 0px 15px;
    }

    .form-control {
      background-color: transparent;
      border: 1px solid #ccc;
      height: 30px;
      width: 49%;
    }
    
    
    </style>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="text-align:right;font-family: BBardiya">
        <h4 class="modal-title" style="text-align:right;font-family: BBardiya">&#1588;&#1585;&#1575;&#1740;&#1591; &#1608; &#1602;&#1608;&#1575;&#1606;&#1740;&#1606;</h4>
      </div>
      <div class="modal-body" style="text-align:right;font-family: BBardiya">
        <p>
         <?= $data->rules1 ?>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="text-align:right;font-family: BBardiya">&#1576;&#1587;&#1578;&#1606;</button>
      </div>
    </div>

  </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div style="position:fixed;z-index:10000;top:20px;left:15;">
    <div id="changeColor" style=""><i style="font-size:25px;cursor: pointer;" class="fa fa-edit"></i> &#1578;&#1594;&#1740;&#1740;&#1585; &#1585;&#1606;&#1711; </div>

    <div class="form-group" id="changebg" style="display:none;width:800px">
    <!-- <input type="color" id="bgColorInput" > -->
    <div class="container">
    
      <div class="grapick-cont">
          <div id="close" class="text-center"  style="position:absolute;right:0;top:8px;width:15px;height:15px;border-radius:50%;cursor:pointer;background-image:url('<?= URL_ROOT."/image/cross.png" ?>');background-repeat:no-repeat;background-position:center;background-size:cover"></div>
      <div id="colorPick" class="text-center">
          <h3>&#1604;&#1591;&#1601;&#1575; &#1578;&#1608;&#1606;&#1575;&#1604;&#1740;&#1578;&#1607; &#1585;&#1575; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1705;&#1606;&#1740;&#1583;</h3> 

       <label for="">&#1585;&#1606;&#1711; &#1575;&#1594;&#1575;&#1586;</label> <input type="color" id="fcolor" class="form-control" value="<?= $data->tonalite1  ?>" >
       <label for="">&#1585;&#1606;&#1711; &#1662;&#1575;&#1740;&#1575;&#1606;</label><input type="color" id="endcolor" class="form-control" value="<?= $data->tonalite2  ?>" >
        <input type="submit" class="btn btn-info" value="&#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1585;&#1606;&#1711; &#1607;&#1575;" id="colorSelect">

     </div>
     <div id="gradientContainer" style="display:none;margin-top:20px">
          <div id="grapick"></div>
          <div class="inputs">
            <select class="form-control" id="switch-type">
           <option value="">- Select Type -</option>
              <option value="radial">Radial</option>
              <option value="linear">Linear</option>
              <option value="repeating-radial">Repeating Radial</option>
              <option value="repeating-linear">Repeating Linear</option>
            </select>

            <select class="form-control" id="switch-angle">
              <option value="">- Select Direction -</option>
              <option value="top">Top</option>
              <option value="right">Right</option>
              <option value="center">Center</option>
              <option value="bottom">Bottom</option>
              <option value="left">Left</option>
            </select>
          </div>
          <button id="but_change_bgColor" onclick="graFunc()" class="btn btn-primary">تغییر رنگ</button>
          </div>
      </div>
     
    </div>



    
    </div>

</div>

<div style="position:fixed;top:20px;right:10px">
<div class="btn-group btn-group-lg">
<button class="btn btn-info" style="display:none" id="nextService"> سرویس بعدی  <-</button>
<button class="btn btn-info" id="next">صفحه ی بعد <-</button>
<button class="btn btn-info" style="display:none" id="prev">صفحه ی قبلی -></button>
<button id="cls" class="btn btn-danger">اتمام تغییرات</button>

</div>




</div>



<div class="picNet" style="position:relative">
    <div style="position:absolute;left:-120px;top:0;cursor: pointer;" id="change-animate-pic"><i style="font-size:25px;" class="fa fa-edit"></i>تغییر عکس متحرک</div>
    <div style="position:absolute;left:-250px;top:0;display:none" id="animate-pic-container">
    <form id="ajaxsubmit" method="post" action="<?= URL_ROOT."/Factories/ChangeAnimateImage/".$data->id ?>"enctype="multipart/form-data">
   <input type="file" id="fileup" name="fileup">
   <input type="submit" id="submit" value="تغییر عکس">
</form>
                </div>
              
            <img class="freeNet" id="preview" src="<?= URL_ROOT."/image/".$data->animate_image1 ?>" />
            
        </div>
            <div id="step1" class="all-step" style="position:relative">
            <div style="position:absolute;left:-150px;top:0;cursor: pointer;" id="change-step-pic"><i style="font-size:25px;" class="fa fa-edit"></i>تغییر عکس استپ</div>
        <div style="position:absolute;left:-300px;top:0;display:none" id="step-pic-container">
        <form id="StepImage" method="post" action="<?= URL_ROOT."/Factories/ChangeStepImage/".$data->id ?>"enctype="multipart/form-data">
    <input type="file" id="stepUp" name="stepUp">
    <input type="submit" id="submit" value="تغییر عکس">
    </form>
                    </div>




            <div id="txtpic1" class="textPic">
                <img class="giftPic" id="destination" src="<?= URL_ROOT."/image/".$data->step1_image ?>" />
            </div>
            <div class="section-4" id="allStep1" style="position:relative">
                <div>
                <div style="position:absolute;left:-90px;top:0;cursor: pointer;" id="change-send-text-btn"><i style="font-size:25px;" class="fa fa-edit"></i>تغییر متن</div>
                </div>
                <div style="display:none" id="change-send-text-from">
        <form id="ChangeSendText" method="post" action="<?= URL_ROOT."/Factories/changeSendText/".$data->id ?>">
    
       
                    <textarea id="editor1" name="sendText" rows="10" cols="80"></textarea>
         
    
    <label>&#1578;&#1594;&#1740;&#1740;&#1585; &#1585;&#1606;&#1711; &#1605;&#1578;&#1606;</label><input type="color" id="clrTxt"  name="color_text" >
  <br>
<label>&#1578;&#1594;&#1740;&#1740;&#1585; &#1585;&#1606;&#1711; &#1576;&#1575;&#1705;&#1587; &#1605;&#1578;&#1606;</label><input type="color" id="boxclrTxt"  name="boxclrTxt" >
<br>
    <input type="submit" id="submit" value="تغییر متن">
    </form>
                    </div>
			<br>
                  <div class="p-color-2 text-shadow sec-2-2" id="sendtxt" style="background-color:<?php echo $data->boxColor_send_text; ?>;border: 3px solid black;min-height: 44px;max-width: 250px;min-width: 70px;border-radius: 8px;margin: auto;padding: 2px;box-shadow:0 0 8.2px 1.8px rgba(0, 0, 0, 0.45);opacity:0.65">
              <p style="color:<?php echo $data->color_send_text; ?>;" ><?= $data->step_send_text ?></p>
              
</div>
            </div>
            <div class="step stp">
                <div class="inputGroup" style="position:relative;cursor: pointer;">
                    <input type="tel" maxlength="11" id="usermobile" class="form-input-1 grid-input" style="font-family:Harmattan;font-size:17.5px;background-color:<?= $data->color_input_number ?>;" placeholder="شماره موبایلت را وارد کن">
                    <i class="fa fa-mobile inputPhone" aria-hidden="true"></i>
                    <div style="position:absolute;left:-90px;top:0" id="change-box-color"><i style="font-size:25px;" class="fa fa-edit"></i> تغییر  رنگ باکس شماره </div>
                    <div class="form-group" id="changeboxForm" style="position:absolute;left:-290px;top:0;display:none;">
    <input type="color" id="boxColorInput"  style="" width="250px" >
    <input type="range"  min="0" max="1" step="0.1" id="boxColorInputalpha"  width="250px">
    <button id="but_change_boxColor" class="btn btn-primary">تغییر رنگ</button>
    </div>
                </div>
                <div class="buttonGroup">
                    <button class="form-button btn-1 grid-button" id="subscribeRequest" style="font-family:Harmattan;font-size:17.5px;background-color:<?= $data->color_button_submit ?>;">تایید</button>
                    <div style="position:absolute;left:-90px;top:0;cursor: pointer;" id="changeSubmitColorButton"><i style="font-size:25px;" class="fa fa-edit"></i> تغییر  رنگ  دکمه تایید </div>
                    <div class="form-group" id="changesubmitColorForm" style="position:absolute;left:-290px;top:0;display:none;">
    <input type="color" id="submitValue"  >
    <input type="range"  min="0" max="1" step="0.1" id="submitValuealpha" value="1"  >
    <button id="but_change_submit" class="btn btn-primary">تغییر رنگ</button>
                </div>
            </div>
        </div>
        <div id="step2" class="all-step hide">
            <div class="textPic" style="position:relative">
            <div style="position:absolute;left:-90px;top:0;cursor: pointer;" id="change-step-pic2"><i style="font-size:25px;" class="fa fa-edit"></i>تغییر عکس استپ</div>
        <div style="position:absolute;left:-300px;top:0;display:none" id="step-pic-container2">
        <form id="StepImage2" method="post" action="<?= URL_ROOT."/Factories/ChangeStep2Image/".$data->id ?>"enctype="multipart/form-data">
    <input type="file" id="stepUp2" name="stepUp2">
    <input type="submit" id="submit2" value="تغییر عکس">
    </form>
                    </div>

                <img class="giftPic" id="prevStep" src="<?= URL_ROOT."/image/".$data->step2_image ?>" />
            </div>
            <div class="section-4" style="position:relative">
                <p class="text-sms" id="confirm_text_container" style="color:<?= $data->color_step_confirm_text ?>">
                <?= $data->step_confirm_text ?>
                </p>
                
                <div style="position:absolute;left:-90px;top:0;cursor: pointer;" id="change-send-text-btn2"><i style="font-size:25px;" class="fa fa-edit"></i>تغییر متن</div>
                
                <div style="display:none" id="change-send-text-from2">
        <form id="ChangeSendText2" method="post" action="<?= URL_ROOT."/Factories/changeSendText2/".$data->id ?>">
    
       
                    <textarea id="editor2" name="sendText2" rows="10" cols="80"></textarea>
         
    
    <input type="color"  name="color_text2" value="<?= $data->color_step_confirm_text ?>" >
  
    <input type="submit" id="submit3" value="تغییر متن">
    </form>
                    </div>
            </div>
            <div class="step ">
                <div class="inputGroup">
                    <input type="tel" id="confirmCode" style="background-color:<?= $data->color_input_number ?>" class="form-input-1" placeholder="-  -  -  -" maxlength="4">
              
                </div>
                <div class="buttonGroup">
                    <button class="form-button btn-2" id="submitBtnconfirm" style="background-color:<?= $data->color_button_submit ?>" id="subscribeConfirm">تایید</button>
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
      
 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
        <script>
       
        // grapick.js
        var gp = new Grapick({
        el: '#grapick',
        direction: 'to right',
        min: 1,
        max: 99,
      });
        $("#colorSelect").click(function(){
            let first=$("#fcolor").val();
            let end=$("#endcolor").val();
            let setting={
             "url":"http://dynaland.l.landingtaak.ir/Factories/addTonalite/"+_id,
              "method":"post",
              "data":{
               "fclr":first,
               "eclr":end
}
}

$.ajax(setting).done(function(response){

console.log(response);
});




            gp.addHandler(1,first, 0);
      gp.addHandler(99,end, 0);
      $("#colorPick").hide("slow");
      $("#gradientContainer").show("slow");

        });

        function graFunc(){
     
     
      gp.on('change', function(complete) {
        btnBg.show();
                containerBgChange.hide();
                 backgroundColor=gp.getSafeValue();
                var setting={
                    "url":_baseUrl+"ChangeBgColor/"+_id,
                    "method":"Post",
                    "data":{
                        color:backgroundColor
                    }

                };
                $.ajax(setting).done(function (response){
                    console.log(response);
                    response=response.trim();
                    if(response=="true"){
                       // $(".app-style").css("background-image",gp.getSafeValue());
location.reload(true); 
                        console.log("BackGround Color Changed");
                        $("#colorPick").show("slow");
      $("#gradientContainer").hide("slow")

                    }

                });






      
      });
      gp.emit('change');

      var swType = document.getElementById('switch-type');
      var swAngle = document.getElementById('switch-angle');
      gp.setDirection(swAngle.value);
      gp.setType(swType.value);
   
        }
        
        $("#close").click(function(){
           
                containerBgChange.hide("slow");
                btnBg.show("slow");
        });
        
        </script>
        <script>
                 		
  var _url="<?= URL_ROOT.'/Factories/showAllLandings/' ?>";
  $("#cls").click(function(){

window.location.replace(_url);

});        

    var sts="<?= "$data->is_double" ?>";
    var _id="<?= $data->id ?>";
    var _baseUrl="<?= URL_ROOT."/Factories/" ?>";
    var _img="<?= URL_ROOT."/image/" ?>";
    var backgroundColor;
            var btnBg=$("#changeColor");
            var btChangeBg=$("#but_change_bgColor");
            var containerBgChange=$("#changebg");
            var animePicChangeBtn=$("#change-animate-pic");
            var formChangePic=$("#animate-pic-container");

            var stepPicChangeBtn=$("#change-step-pic");
            var formChangePicstep=$("#step-pic-container");

            var stepPicChangeBtn2=$("#change-step-pic2");
            var formChangePicstep2=$("#step-pic-container2");

            var changeTextBtn=$("#change-send-text-btn");
            var sendTextContainer=$("#sendtxt");
            var sendTextInput=$("#editor1");
            var formChangeSendText=$("#change-send-text-from");
            var changeBoxButton=$("#change-box-color");
              var changeColorBoxForm=$("#changeboxForm");
            var buttonBoxColorChange=$("#but_change_boxColor");
            var colorValueBox=$("#boxColorInput");
            var SubmitButton=$("#changeSubmitColorButton");
            var SubmitForm=$("#changesubmitColorForm");

            var changeTextBtn2=$("#change-send-text-btn2");

                var containerConfirm=$("#confirm_text_container");
            var sendTextContainer2=$("#sendtxt2");
            var sendTextInput2=$("#editor2");
            var formChangeSendText2=$("#change-send-text-from2");

            changeTextBtn2.click(function(){
                changeTextBtn2.hide("slow");
                formChangeSendText2.show("slow");
                    sendTextInput2.val(containerConfirm.text());
                    $('#ChangeSendText2').ajaxForm({
			target: '#confirm_text_container',
			success: function(response) {
                response=response.trim();
                let data=response.split("-");
               
                changeTextBtn2.fadeIn("slow");
                sendTextContainer2.fadeIn("slow");
                formChangeSendText2.fadeOut("slow");
                $("#confirm_text_container").html(' ');
                $("#confirm_text_container").text(data[0]);

                sendTextContainer2.css("color",data[1])
                
             
			}
		});


                });
     





             $("#next").click(function(){
                $("#step2").removeClass('hide');
                $(".stp").addClass("hide");
                $("#sendtxt").hide("slow");
                $("#allStep1").hide("slow");
                $("#txtpic1").hide("slow");
                stepPicChangeBtn.hide("slow");
                $('#prev').fadeIn("slow");
                $("#next").fadeOut("slow");
                $("#nextService").fadeIn("slow");
             });

             $("#prev").click(function(){
                $("#step2").addClass('hide');
                $(".stp").removeClass("hide");
                $("#sendtxt").show("slow");
                $("#allStep1").show("slow");
                $("#txtpic1").show("slow");
                stepPicChangeBtn.show("slow");
                $('#prev').fadeOut("slow");
                $("#next").fadeIn("slow");
                $("#nextService").fadeOut("slow");
             }); 
             $("#nextService").click(function(){
                if(sts==1){
                     

                     window.location.replace(window.location.href+"/"+sts);
                      }else{
  
                         alert("این لندینگ سرویس دوم ندارد");
                      }
 
             });

             stepPicChangeBtn2.click(function(){
                    stepPicChangeBtn2.fadeOut("slow");
                    formChangePicstep2.fadeIn("slow");
                    $('#StepImage2').ajaxForm({
			target: '#prevStep',
			success: function(response) {
                response=response.trim();
                let location=_img+response
                formChangePicstep2.fadeOut('slow');
                $("#prevStep").attr("src",location);
                stepPicChangeBtn2.fadeIn("slow");
            }
        });
		});




            SubmitButton.click(function(){
                SubmitButton.hide("slow");
                SubmitForm.show("slow");
            });
            $("#but_change_submit").click(function(){

                let color=$("#submitValue").val();
                let alpha=$("#submitValuealpha").val();
                var rgbaCol = 'rgba(' + parseInt(color.slice(-6, -4), 16) + ',' + parseInt(color.slice(-4, -2), 16) + ',' + parseInt(color.slice(-2), 16) + ',' + alpha + ')';
                SubmitForm.hide("slow");
                SubmitButton.show("slow");
                var setting={
                    "method":"POST",
                    "url":_baseUrl+"ChangeSubmitColor",
                    "data":{
                        "color":rgbaCol,
                        "id":_id
                    }


                };
                $.ajax(setting).done(function(response){
                      response=response.trim();
                    $("#subscribeRequest").css("background-color",response);
                    $("#submitBtnconfirm").css("background-color",response);
                    


                });



            });



              changeBoxButton.click(function(){
                changeBoxButton.hide("slow");
                changeColorBoxForm.show("slow");
            });


            buttonBoxColorChange.click(function(){
                changeBoxButton.show("slow");
                changeColorBoxForm.hide("slow");
                let color=colorValueBox.val();
                let alpha=$("#boxColorInputalpha").val();
                var rgbaCol = 'rgba(' + parseInt(color.slice(-6, -4), 16) + ',' + parseInt(color.slice(-4, -2), 16) + ',' + parseInt(color.slice(-2), 16) + ',' + alpha + ')';
                var setting={
                    "method":"POST",
                    "url":_baseUrl+"ChangeBoxColor",
                    "data":{
                        "color":rgbaCol,
                        "id":_id
                    }


                };
                $.ajax(setting).done(function(response){
                      response=response.trim();
                    $("#usermobile").css("background-color",response);
                    $("#confirmCode").css("background-color",response);
                 


                });


            });






            
            btnBg.click(function(){
                containerBgChange.show();
               btnBg.hide();
            });

           // btChangeBg.click(function(){
                // btnBg.show();
                // containerBgChange.hide();
                //  backgroundColor=$("#bgColorInput").val();
                // var setting={
                //     "url":_baseUrl+"ChangeBgColor/"+_id,
                //     "method":"Post",
                //     "data":{
                //         color:backgroundColor
                //     }

                // };
                // $.ajax(setting).done(function (response){
                //     console.log(response);
                //     response=response.trim();
                //     if(response=="true"){
                //         $(".app-style").css("background-color",backgroundColor);
                //         console.log("BackGround Color Changed");

                //     }

                // });


            //});

function rgb2hex(rgb){
 rgb = rgb.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i);
 return (rgb && rgb.length === 4) ? "#" +
  ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
  ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
  ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : '';

}


 
    
  

            $(document).ready(function() {
                $(".app-style").css("background","<?= $data->background_color ?>");
                  $("#submitValue").val(rgb2hex("<?= $data->color_button_submit ?>"));
                  $("#boxColorInput").val(rgb2hex("<?= $data->color_input_number?>"));
                   $("#clrTxt").val("<?= $data->color_send_text?>");
                    $("#boxclrTxt").val("<?= $data->boxColor_send_text ?>");



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
                stepPicChangeBtn.click(function(){
                    stepPicChangeBtn.fadeOut("slow");
                    formChangePicstep.fadeIn("slow");
                    $('#StepImage').ajaxForm({
			target: '#destination',
			success: function(response) {
                response=response.trim();
                let location=_img+response
                console.log(response);
                formChangePicstep.fadeOut('slow');
                $("#destination").attr("src",location);
                stepPicChangeBtn.fadeIn("slow");
			}
		});



                });

                changeTextBtn.click(function(){
                    changeTextBtn.fadeOut("slow");
                    sendTextContainer.fadeOut('slow');
                    sendTextInput.val(sendTextContainer.text());
                    formChangeSendText.fadeIn("slow");
                    $('#ChangeSendText').ajaxForm({
			target: '#sendtxt',
			success: function(response) {
                response=response.trim();
                let data=response.split("-");
               
                changeTextBtn.fadeIn("slow");
                sendTextContainer.fadeIn("slow");
                sendTextContainer.css("background-color",$('#boxclrTxt').val());
                formChangeSendText.fadeOut("slow");
                sendTextContainer.html(data[0]);
                sendTextContainer.css("color",data[1])
                
             
			}
		});


                });



	
	});


</script>

<?php require APP_ROOT."/views/layout/footer.php"; ?>