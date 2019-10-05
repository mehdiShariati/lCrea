<?php require APP_ROOT."/views/include/header.php"; ?>



<div class="col-md-12 col-xs-12 col-lg-12 text-center">

    <p>
        ویرایش لندینگ
    </p>


</div>

</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-lg-8 col-lg-offset-2" style="margin-top:40px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">


        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">ویرایش لندینگ</h3>
            </div>
            <div class="box-body">

            <!-- ""=>"",
                "service_id_err"=>"",
                "background_color_err"=>"",
                "step_send_text_err"=>"",
                "step_confirm_text_err"=>"", -->

                <form action="" method="post" dir="" enctype="multipart/form-data">
                <div class="form-group">
                        <label>نام لندینگ</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="landing_name" class="form-control"  value="<?php echo $data->landing_name ?>" placeHolder="نام لندینگ" >
                           
                        </div>
                        <!-- /.input group -->
                    </div>


                  
                    <!-- /.form group -->

                    <!-- IP mask -->
                    <div class="form-group">
                        <label>عکس متحرک اول</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="file" name="animate_image1" class="form-control" placeHolder="عکس متحرک اول">
                             <img src="<?= URL_ROOT."/image/".$data->animate_image1 ?>" style="width:width:100px;height:100px;" alt="">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label> عکس مرحله اول</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="file" name="step1_image" class="form-control" placeHolder="عکس مرحله اول">
                             <img src="<?= URL_ROOT."/image/".$data->step1_image ?>" style="width:width:100px;height:100px;" alt="">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>عکس  مرحله دوم</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="file" name="step2_image" class="form-control" placeHolder="عکس مرحله اول">
                           <img src="<?= URL_ROOT."/image/".$data->step2_image ?>" style="width:width:100px;height:100px;" alt="">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>متن و قیمت  سرویس</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="step_send_text" value="<?= $data->step_send_text ?>" class="form-control" placeHolder="متن و قیمت  سرویس">
                          

                           
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>متن کد تایید</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="step_confirm_text" value="<?= $data->step_confirm_text ?>" class="form-control" placeHolder="متن کد تایید">
                           

                        </div>
                        <!-- /.input group -->
                    </div>  
                    <div class="form-group">
                        <label>لینک دانلود اپلیکیشن اول</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="link_download_service1" value="<?= $data->link_download_service1 ?>" class="form-control" placeHolder="لینک دانلود اپلیکیشن اول">
                            
                        </div>
                        <!-- /.input group -->
                    </div>  
                    <div class="form-group">
                    <label>قوانین سرویس اول</label>

                     <textarea class="form-control" name="rules1"  id="editor1" cols="30" rows="10"><?= $data->rules1 ?></textarea>
                    




                    </div>
                       
                   
                 

                 
                    <div class="second-container" style="<?php if($data->is_double==0){ echo "display:none;"; } ?>">
              


               

                    <div class="form-group">
                        <label>متن فعالسازی موفق سرویس اول</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="success_text_firstService" value="<?= $data->success_text_firstService ?>" class="form-control" placeHolder="عکس مرحله اول">
                           
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>  متن و قیمت  سرویس دوم</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="service2_send_text" value="<?= $data->service2_send_text ?>" class="form-control" placeHolder="متن و قیمت  سرویس">
                           
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>  متن کد تایید سرویس دوم</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="service2_confirm_text" value="<?= $data->service2_confirm_text ?>" class="form-control" placeHolder="متن کد تایید">
                          
                        </div>
                        <!-- /.input group -->
                    </div>  

                    <div class="form-group">
                    <label>قوانین سرویس دوم</label>

                     <textarea class="form-control" name="rules2" id="editor2" cols="30" rows="10"> <?= $data->rules2 ?>  </textarea>
                    




                    </div>

                    <div class="form-group">
                        <label>لینک دانلود اپلیکیشن دوم</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="link_download_service2" value="<?= $data->link_download_service2 ?>" class="form-control" placeHolder="لینک دانلود اپلیکیشن دوم">
                            
                        </div>
                        <!-- /.input group -->
                    </div>  


                    </div>

                    <div class="form-group">
                    <label>  متن    صفحه ی اخر</label>
                        <textarea name="final_page_text" class="form-control"><?= $data->final_page_text ?></textarea>
                       
                    </div>
                    <div class="form-group">
                    <label>  عکس    صفحه ی اخر</label>
                        <input type="file" name="final_page_image" class="form-control">
                       <img src="<?= URL_ROOT."/image/".$data->final_page_image ?>" style="width:width:100px;height:100px;" alt="">

                    </div>
                  
                 



                    
                    <div class="form-group text-center">

                        <button class="btn btn-success" type="submit">
                            ویرایش
                        </button>

                    </div>


                </form>

            </div>
        </div>




































        <script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
        <script>
                        CKEDITOR.replace( 'editor1' );
CKEDITOR.replace( 'editor2' );
                </script>







<script>

    // $(document).ready(function(){
    // $('input[type="checkbox"]').click(function(){
    //         if($(this).is(":checked")){
    //            $(".second-container").show();
    //         }
    //         else if($(this).is(":not(:checked)")){
    //             $(".second-container").hide();
    //         }
    //     });
 
    // });





</script>






<?php require APP_ROOT."/views/include/footer.php"; ?>