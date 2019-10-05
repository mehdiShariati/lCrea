<?php require APP_ROOT."/views/include/header.php"; ?>



<div class="col-md-12 col-xs-12 col-lg-12 text-center">

    <p>
        ایجاد سرویس
    </p>


</div>

</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-lg-8 col-lg-offset-2" style="margin-top:40px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">


        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">افزودن سرویس</h3>
            </div>
            <div class="box-body">

               

                <form action="" method="post" dir="">
                <div class="form-group">
                        <label>نام سرویس</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="name" class="form-control" value="" placeHolder="نام سرویس" >
                         
                        </div>
                        <!-- /.input group -->
                    </div>



                    <!-- phone mask -->
                    <div class="form-group">
                        <label> انتخاب سرویس دهنده</label>

                        <select class='form-control' name="imp_class" id="">
                        <?php
                            foreach($data['imp_class'] as $item){

                                echo "<option class='form-control' value='$item'>$item</option>";
                            }
                        ?>
                        
                        </select>
                    </div>
                    <!-- /.form group -->

                    <!-- phone mask -->
                    <div class="form-group">
                        <label>سر شماره</label>
                        
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                        <input type="text" name="ShortCode" class="form-control" placeHolder="سرشماره">
                                </div>
                    </div>
                    <!-- /.form group -->

                    <!-- IP mask -->
                    <div class="form-group">
                        <label>توکن</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="token" class="form-control" placeHolder="توکن">
                           
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>شناسه سرویس</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="text" name="service_identifier" class="form-control" placeHolder="شناسه سرویس">
                           
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group text-center">

                        <button class="btn btn-success" type="submit">
                            افزودن
                        </button>

                    </div>


                </form>

            </div>
        </div>














































<?php require APP_ROOT."/views/include/footer.php"; ?>