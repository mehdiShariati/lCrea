<?php require APP_ROOT."/views/include/header.php"; ?>



<div class="col-md-12 col-xs-12 col-lg-12 text-center">

    <p>
        ایجاد لندینگ
    </p>


</div>

</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-lg-8 col-lg-offset-2" style="margin-top:40px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">


        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">افزودن لندینگ</h3>
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
                            <input type="text" name="landing_name" class="form-control"  value="<?php if(!empty($data['landing_name'])){echo  $data['landing_name'];} ?>" placeHolder="نام لندینگ" >
                            <?php if(!empty($data['landing_name_err'])){ echo "<span>".$data['landing_name_err']."</span>";} ?>
                        </div>
                        <!-- /.input group -->
                    </div>



                    <!-- phone mask -->
                    <div class="form-group">
                        <label> انتخاب سرویس اول</label>

                        <select class='form-control' name="service_id1" id="">
                            <option value="">لطفا یک سرویس را برای لندینگ انتخاب کنید.</option>
                        <?php
                            foreach($data['services'] as $item){

                                echo "<option class='form-control' value='$item->id'>$item->service_name</option>";
                            }
                        ?>
                        
                        </select>
                    </div>
                    <!-- /.form group -->

                    <!-- phone mask -->
                    <div class="form-group">
                        <label>  رنگ پس ضمینه اول</label>
                        
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                        <input type="color" name="background_color" class="form-control"  >
                                </div>
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
                           
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>متن و قیمت  سرویس</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="step_send_text" class="form-control" placeHolder="متن و قیمت  سرویس">
                            <input type="color" name="color_step_send_text">
                           
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>متن کد تایید</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="step_confirm_text" class="form-control" placeHolder="متن کد تایید">
                            <input type="color" name="color_step_confirm_text">
                        </div>
                        <!-- /.input group -->
                    </div>  
                    <div class="form-group">
                        <label>لینک دانلود اپلیکیشن اول</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="link_download_service1" class="form-control" placeHolder="لینک دانلود اپلیکیشن اول">
                            
                        </div>
                        <!-- /.input group -->
                    </div>  
                    <div class="form-group">
                    <label>قوانین سرویس اول</label>

                     <textarea class="form-control" name="rules1" id="editor1" cols="30" rows="10"></textarea>
                    




                    </div>
                 
              <div class="form-group">
                    <label>&#1585;&#1606;&#1711; &#1576;&#1575;&#1705;&#1587; &#1588;&#1605;&#1575;&#1585;&#1607;</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-laptop"></i>
                        </div>
                       
                        <input type="color" class="form-control" name="color_input_number">
                    
                    </div>

                    </div>
                    <div class="form-group">
                    <label>&#1585;&#1606;&#1711;  &#1583;&#1705;&#1605;&#1607; &#1578;&#1575;&#1740;&#1740;&#1583;</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-laptop"></i>
                        </div>
                       
                        <input type="color" class="form-control" name="color_button_submit">
                    
                    </div>

                    </div>
                 
                    <div class="form-group">
                        <label>سرویس دوم دارد؟</label>

                    
                            <input type="checkbox" name="is_double" class=""  value="1">
                           
                       
                        <!-- /.input group -->
                    </div> 
 
                    <div class="second-container" style="display:none">
                    <div class="form-group">
                        <label> انتخاب سرویس دوم</label>

                        <select class='form-control' name="service_id2" id="">
                        <option value="">لطفا یک سرویس را برای لندینگ انتخاب کنید.</option>
                        <?php
                            foreach($data['services'] as $item){

                                echo "<option class='form-control' value='$item->id'>$item->service_name</option>";
                            }
                        ?>
                        
                        </select>
                    </div>
                    <!-- /.form group -->


               

                    <div class="form-group">
                        <label>متن فعالسازی موفق سرویس اول</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="success_text_firstService" class="form-control" placeHolder="عکس مرحله اول">
                            <input type="color" name="color_success_text_firstService">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>  متن و قیمت  سرویس دوم</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="service2_send_text" class="form-control" placeHolder="متن و قیمت  سرویس">
                            <input type="color" name="color_service2_send_text">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>  متن کد تایید سرویس دوم</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="service2_confirm_text" class="form-control" placeHolder="متن کد تایید">
                            <input type="color" name="color_service2_confirm_text">
                        </div>
                        <!-- /.input group -->
                    </div>  

                    <div class="form-group">
                    <label>قوانین سرویس دوم</label>

                     <textarea class="form-control" name="rules2" id="editor2" cols="30" rows="10"></textarea>
                    




                    </div>

                    <div class="form-group">
                        <label>لینک دانلود اپلیکیشن دوم</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="link_download_service2" class="form-control" placeHolder="لینک دانلود اپلیکیشن دوم">
                            
                        </div>
                        <!-- /.input group -->
                    </div>  


                    </div>

                    <div class="form-group">
                    <label>  متن    صفحه ی اخر</label>
                        <textarea name="final_page_text" class="form-control"></textarea>
                        <input type="color" name="color_final_page_text">
                    </div>
                    <div class="form-group">
                    <label>  عکس    صفحه ی اخر</label>
                        <input type="file" name="final_page_image" class="form-control">

                    </div>
                  
                 



                    
                    <div class="form-group text-center">

                        <button class="btn btn-success" type="submit">
                            افزودن
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

    $(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
            if($(this).is(":checked")){
               $(".second-container").show();
            }
            else if($(this).is(":not(:checked)")){
                $(".second-container").hide();
            }
        });
 
    });





</script>






<?php require APP_ROOT."/views/include/footer.php"; ?>