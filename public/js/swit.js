function showErrorMessage(message, delay) {
    var $error = $("#error");
    $error.html(message);
    $error.fadeIn();
    $error.addClass('shake');
    setTimeout(function () {
        $error.fadeOut();
        $error.removeClass('shake');
    }, 3000);
    return;
}

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

var queryString;
function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash_i = hashes[i].toLowerCase();
        hash = hash_i.split('=');
        vars.push(hash[0].toLowerCase());
        vars[hash[0]] = hash[1]
    }
    queryString = vars;
}

$().ready(function () {
    window.history.pushState(null, "", window.location.href);
    window.onpopstate = function () {
        window.history.pushState(null, "", window.location.href);
    }

    function disablePrev() { window.history.forward() }
    window.onload = disablePrev();
    window.onpageshow = function (evt) { if (evt.persisted) disableBack() }
});

// function sendRequestInsert(camp,number,transact,token){
//     let set = {



//       "url":"Scripts/handler.php",
//       "method": "POST",
      
//       "data": {
//         "camp_id": camp,
//         "token": token ,
//         "number"  : number,
//         "tId":transact
//       }
//     };
//     $.ajax(set).done(function (response) {
//             console.log(response);


//     });
// }

// function updateUserToActive(transact){

//     let set = {



//         "url":"Scripts/handler.php",
//         "method": "POST",
        
//         "data": {
          
//           "transactionId": transact
//         }
//       };
//       $.ajax(set).done(function (response) {
//               console.log(response);
  
  
//       });



// }



$(document).ready(function () {
    

    
	// getUrlVars();
    // $("#changeNumber").click(function () {
    //     window.location.replace("./index.php");
    // });


    // $("#phoneNumber").val(queryString['mobilenumber']);
    // var mobileNumber = '';
    $("#subscribeRequest, .arowBtn").click(function () {
        var $this = $(this);
        mobileNumber = $("#usermobile").val();

        if (mobileNumber.length != 11 || !mobileNumber.toString().startsWith("09")) {
            showErrorMessage("لطفا شماره موبایل خود را به صورت صحیح وارد نمایید");
            return;
        }else{

            var data= {
                "mobile": mobileNumber,
                "token": token1 ,
                
              }
              if(service1=="Pardis" || service1=="hubShiraz"){

                mobileNumber=mobileNumber.replace("0","98");
            }
                    
                    $("#overlay").removeClass('hide');
                    var settings = {
                    
                      
                      "url":"http://landingtaak.ir/landings/SendOTPrequest1/"+service1+"/"+mobileNumber+"/"+token1+"/"+service_id+"/"+service_name+"/"+shortCode,
                      "method": "GET",
                      "headers": {
                        "Content-Type": "application/x-www-form-urlencoded",
                        "Cache-Control": "no-cache",
                      }
                    
                    }
                    
            
                   $.ajax(settings).done(function (response) {
                        console.log(response);
                        var parse = JSON.parse(response);
                        console.log(parse);
                      $("#overlay").addClass('hide');
                       if (parse.status == "true") {
            
                            $("#step1").addClass('hide');
                            $("#stepCount").addClass('hide');
                            $("#sendtxt").addClass('hide');

                            $("#step2").removeClass('hide');
                            $("#stepCount2").removeClass('hide');  
  				            $("#step3").addClass('hide');
                            $("#step2").removeClass('hide');
                           
                            transactionId = parse.transActionId;
                            otpreference = parse.otpRefrence;
                            
                       gtag('event', 'login', {'method': 'Google'});
                       

                  
                            
                       } else {
                            if(parse.message == "otp transaction request wasn't successfully"){
                                showErrorMessage('ارسال کد ناموفق بود لطفا مجدد تلاش کنید');
                            }else{
                                showErrorMessage(response.message);
                            }
                           
                       }
                   }).fail(function (err) {
                        var parse = JSON.parse(err);
                       $("#overlay").addClass('hide');
            
                       console.log("#subscribeRequest error");
                       showErrorMessage("متاسفانه درخواست با خطا مواجه شد لطفا مجددا تلاش نمایید");
                   });
           


        }
    });
});
      


    $("#subscribeConfirm").click(function () {
       if ($("#validcode").val().length != 4) {
          showErrorMessage("لطفا کد 4 رقمی پیامک شده را وارد نمایید");
           return;
       }
        $("#overlay").removeClass('hide');
        var model = {
            otpreferenceCode: otpreference,
            TransactionIdCode: transactionId,
            code: $("#validcode").val() ,
          
			
			mobile : mobileNumber ,
			
        };
      
		var settings2 = {
			
		
		
		  "url": "http://landingtaak.ir/landings/SendConfirmRequest/"+service1+"/"+model.code+"/"+model.TransactionIdCode+"/"+model.otpreferenceCode+"/"+token1+"/"+model.mobile+"/"+service_id+"/"+service_name+"/"+shortCode,
		  "method": "GET",
		  "headers": {
			"Content-Type": "application/x-www-form-urlencoded",
			"Cache-Control": "no-cache",
          }
        }
		
        $.ajax(settings2).done(function (response) {
			console.log(model);
            console.log(response);
            response=response.trim();
                $("#overlay").addClass('hide');
                if (response == "true") {
  //update to active user
                   // updateUserToActive(model.TransactionIdCode);

                    if(sts==1){
                     

                   window.location.replace(window.location.href+"/"+mobileNumber+"/"+sts);
                    }else{

                        window.location.replace("http://landingtaak.ir/landings/final/"+_id);
                    }

                  
                   

                } else {
                    showErrorMessage("کد تایید نادرست وارد شده است");
                }
                return;
        }).fail(function (err) {
			console.log("#subscribeConfirm error");
                $("#overlay").addClass('hide');
                showErrorMessage("متاسفانه درخواست با خطا مواجه شد لطفا مجددا تلاش نمایید");
        });
        
    });

//     $("#subscribeRequestTwo").click(function () {
//         var $this = $(this);
//         $("#overlay").removeClass('hide');
// 		if(queryString['mobilenumber'].length == 10) {
// 			var newphone = '98'+queryString['mobilenumber'] ;
// 		}if(queryString['mobilenumber'].length == 11){
// 			phone = queryString['mobilenumber'].slice(1);
// 			var newphone = '98'+phone ;
// 		}
//         var settingsTwo = {
//             "url": uor_base+"send2.php",
//             "method": "GET",
//             "data": {
//                 "mobile" : newphone,
//                 "serviceId" : "11158",
//                 "token" : tokenTwo,
// 				"url"   : otpRequestUrl2
//             }
//         }
//         $.ajax(settingsTwo).done(function (response) {
// 			console.log(response);
// 			var ParseTwo = JSON.parse(response);
// 			console.log(ParseTwo);
//             $($this).removeAttr("disabled");
//             $("#overlay").addClass('hide');
//             if (ParseTwo.StatusCode == "200") {
               
// 				$("#step3").addClass('hide');
// 				$("#step2").removeClass('hide');
//                 transactionId = ParseTwo.OTPTransactionId;
//                 sendRequestInsert(camp_id,settingsTwo.data.mobile,transactionId,tokenTwo);
               
//             } else {
//                 showErrorMessage(response.Message);
//             }
//         }, function () {
//             $("#overlay").addClass('hide');
//             $($this).removeAttr("disabled");
//             showErrorMessage("متاسفانه درخواست با خطا مواجه شد لطفا مجددا تلاش نمایید");
//         });
//     });
//     $("#subscribeConfirmTwo").click(function () {
// 		var $this = $(this);
//         if ($("#validcodeTwo").val().length != 4) {
//             showErrorMessage("لطفا کد 4 رقمی پیامک شده را وارد نمایید");
//             return;
//         }
//         $("#overlay").removeClass('hide');
// 		if(queryString['mobilenumber'].length == 10) {
// 			var newphone = '98'+queryString['mobilenumber'] ;
// 		}if(queryString['mobilenumber'].length == 11){
// 			phone = queryString['mobilenumber'].slice(1);
// 			var newphone = '98'+phone ;
// 		}
//         var settingsTwoConfirm = {
//             "url": uor_base+"confirm2.php",
//             "method": "GET",
//             "data": {
//                 "mobile" : newphone,
//                 "serviceId" : "11158",
//                 "OTPTransactionId" : transactionId,
//                 "token" : tokenTwo,
// 				"pin": $("#validcodeTwo").val() ,
// 				"url"   : otpRequestUrl2
//             }
//         }
//         $.ajax(settingsTwoConfirm).done(function (response) {
// 			console.log(response);
// 			var ParseTwoC = JSON.parse(response);
// 			console.log(ParseTwoC);
//             $($this).removeAttr("disabled");
//             $("#overlay").addClass('hide');
//             if (ParseTwoC.ErrorMessage == null){
//                 updateUserToActive(settingsTwoConfirm.data.OTPTransactionId);
//                 window.location.replace("./stepThree.php");
//             }
                    
// 			else{showErrorMessage('کد فعالسازی نادرست میباشد .');}
                    
//                 return;
//         }, function () {
//             $("#overlay").addClass('hide');
//             $($this).removeAttr("disabled");
//             showErrorMessage("متاسفانه درخواست با خطا مواجه شد لطفا مجددا تلاش نمایید");
//         });
//     });
// });


// var replaceToEn = function (string) {
//     return string.replace(/[\u0660-\u0669]/g, function (c) {
//         return c.charCodeAt(0) - 0x0660;
//     }).replace(/[\u06f0-\u06f9]/g, function (c) {
//         return c.charCodeAt(0) - 0x06f0;
//     });
// };

// $(document).ready(function () {

//     $('input').on('input', function (event) {
//         var val = $(this).val();
//         val = replaceToEn(val);
//         $(this).val(val);
//     });
 
// });

// function sendtest(){
//     let se = {
        
       
        
      
//       "method": "POST",
//       "url":"http://185.105.186.37:9090/api/authentication/authentication_request?token=07937C686E164E265F61C672EACD8519&user_number=09123219662",
  
//     }

    

// $.ajax(se).done(function(response){


// console.log(response);

// });


     //}