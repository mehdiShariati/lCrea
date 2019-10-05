<?php require APP_ROOT."/views/include/header.php"; ?>

<div class="col-md-12 col-xs-12 col-lg-12 text-center">

    <p>
        ایجاد کمپین 
    </p>


</div>

</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-lg-8 col-lg-offset-2" style="margin-top:40px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">


        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">ایجاد کمپین</h3>
            </div>
            <div class="box-body">

                  
                    <form dir="ltr" class="text-center" action="" method="post">
                    <div class="form-group">

                            <label for="name">نام کمپین</label>    
                            <input type="text" class="form-control" name="name">  
                            <span> <?php if(isset($data['name_err'])){ echo $data['name_err']; } ?> </span>                                                 
                    </div>
                      
                    <div class="form-group">

                            <label for="camp_id">شناسه کمپین</label>    
                            <input  type="text" id="idcamps" class="form-control" onkeyup="getVal(this.value)" name="camp_id">            
                            <span> <?php if(isset($data['camp_id_err'])){ echo $data['camp_id_err']; } ?> </span>
                            


                    </div>
                   
                          





                    
                    
                    <div class="form-group">

                    <label for="camp_id">URL </label>    
                        <input type="text" readonly  name="link" class="form-control"  id="lan-url" value="<?= URL_ROOT."/landings/showLan/".$data['landing']->id ?>"  >            
                        <span><?php if(isset($data['link_err'])){echo $data['link_err'];}?></span>

                        </div>
                       
                         
                        

                          
                            
                            <input type="hidden" id="l_id" value="<?= $data['landing']->id ?>" name="land_id">
                            
                          <div class="form-group text-center">

                    <input value="ایجاد کمپین" class="btn btn-success" type="submit">
                       
                      

                                        </div>

                   
                </form>

            </div>
        </div>


            <script>

                
                var idcamp;
                var _url=$('#lan-url');
               // var _lanId=$('#l_id');
             //   var _tokenval;
              //  var shortC1=$('#c1');
              //  var shortC2=$('#c2');

               


         




                function getVal(val){

                    idcamp=val;
                 
                        _url.val("<?= URL_ROOT."/landings/showLan/".$data['landing']->id ?>"+"/"+idcamp);
                   
                    
                }




       //     function fetchUrl(val){
       //         if(val===""){
        //            _url.val("");
        //            return;
         //       }
        //    var data={
         //       "method":"POST",
          //      "url":" URL_ROOT."/landings/fetchLanWithLanName/"?>"+val
               
            //          }

               //       console.log(data.url);
                      

                   //   $.ajax(data).done(function(response){
                    //    data=JSON.parse(response);
                    //    console.log(data);
                    //    ajxUrl=data.url;
                    //    shortC1.val(data.shortCode1);
                     //   shortC2.val(data.shortCode2);
                     //       if(idcamp===undefined){
                        //    _url.val(ajxUrl);
                        //    }else{
                         //       _url.val(ajxUrl+"?camp_id="+idcamp);
                           // }
                           // _lanId.val(val);

                   //   });


            
                    //  }
            
            
            </script>













<?php require APP_ROOT."/views/include/footer.php"; ?>