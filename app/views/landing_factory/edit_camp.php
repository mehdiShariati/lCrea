<?php require APP_ROOT."/views/include/header.php"; ?>

<div class="col-md-12 col-xs-12 col-lg-12 text-center">

    <p>
        ویرایش کمپین 
    </p>


</div>

</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-lg-8 col-lg-offset-2" style="margin-top:40px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">


        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">ویرایش کمپین</h3>
            </div>
            <div class="box-body">

                  
                    <form dir="ltr" class="text-center" action="" method="post">
                    <div class="form-group">

                            <label for="name">نام کمپین</label>    
                            <input type="text" class="form-control" name="name" value="<?= $data['update']->camp_name ?>">  
                            <span> <?php if(isset($data['name_err'])){ echo $data['name_err']; } ?> </span>                                                 
                    </div>
                      
                    <div class="form-group">

                            <label for="camp_id">شناسه کمپین</label>    
                            <input  type="text" id="idcamps" class="form-control" value="<?= $data['update']->camp_identifier ?>" onkeyup="getVal(this.value)" name="camp_id">            
                            <span> <?php if(isset($data['camp_id_err'])){ echo $data['camp_id_err']; } ?> </span>
                            


                    </div>
                   
                          





                    
                    
                    <div class="form-group">

                    <label for="camp_id">URL </label>    
                        <input type="text" readonly  name="link" class="form-control"  id="lan-url" value="<?= $data['update']->url ?>"  >            
                        <span><?php if(isset($data['link_err'])){echo $data['link_err'];}?></span>

                        </div>
                       
                        <div class="form-group">

                    <label for="status">وضعیت کمپین</label>    
                   
                    <select name="status" >
                        <?php 
                            if($data['update']->status ==1){
                                echo "<option value='1' > فعال </option>";
                                echo "<option value='0' > غیر فعال </option>";
                            }else{
                                echo "<option value='0' > غیر فعال </option>";
                                echo "<option value='1' > فعال </option>";
                            }
                        ?>

                    </select>



                    </div>
                        

                          
                            
                            <input type="hidden" id="l_id" value="<?= $data['update']->land_id ?>" name="land_id">
                            
                          <div class="form-group text-center">

                    <input value="ویرایش کمپین" class="btn btn-primary" type="submit">
                       
                      

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
       
                function getVal(val){

                    idcamp=val;
                 
                        _url.val("<?= URL_ROOT."/landings/showLan/".$data['update']->id ?>"+"/"+idcamp);   
                }




            
            
            </script>













<?php require APP_ROOT."/views/include/footer.php"; ?>