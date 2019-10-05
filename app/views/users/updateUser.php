
<?php require APP_ROOT."/views/include/header.php"; ?>



<div class="col-md-12 col-xs-12 col-lg-12 text-center">

    <p>
        ویرایش کاربر
    </p>


</div>

</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-lg-8 col-lg-offset-2" style="margin-top:40px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">


        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">ویرایش کاربر</h3>
            </div>
            <div class="box-body">



                <form action="" method="post">
                    <!-- phone mask -->
                    <div class="form-group">
                        <label>نام کاربری</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name="user_name" value="<?php if(isset($data['username'])){ echo $data['username']; } ?> " class="form-control <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback text-warning"><?php echo $data['username_err']; ?></span>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- phone mask -->
                    <div class="form-group">
                        <label>ایمیل</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-google"></i>
                            </div>
                            <input type="email" name="mail" value="<?php if(isset($data['email'])){ echo $data['email']; } ?> " class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback text-warning"><?php echo $data['email_err']; ?></span>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- IP mask -->
                    <div class="form-group">
                        <label>رمز عبور</label>

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <input type="password" name="pass" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback text-warning"><?php echo $data['password_err']; ?></span>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>  دسترسی های این کاربر :</label>
                        &nbsp;     &nbsp;

                        <span><input type="checkbox" name="adver" value="advertisment-panel"   <?php if(strpos($data['roles'],'advertisment-panel')==true){ echo 'checked';} ?>> پنل تبلیغات</span>
                        &nbsp;     &nbsp;
                        <span><input type="checkbox" name="content" value="content-panel" <?php if(strpos($data['roles'],'content-panel')==true){ echo 'checked';} ?>> پنل محتوا</span>
                        &nbsp;     &nbsp;
                        <span><input type="checkbox" name="income" value="income-report" <?php if(strpos($data['roles'],'income-report')==true){ echo 'checked';} ?>> گزارش در آمد</span>
                        &nbsp;     &nbsp;
                        <span><input type="checkbox" name="notification" value="notification" <?php if(strpos($data['roles'],'notification')==true){ echo 'checked';} ?>> نوتیفیکیشن</span>
                        &nbsp;     &nbsp;
                        <span><input type="checkbox" name="users-access" value="users-access" <?php if(strpos($data['roles'],'users-access')==true){ echo 'checked';} ?>> کاربران</span>
                        &nbsp;     &nbsp;
                        <span><input type="checkbox" name="server-access" value="server-access" <?php if(strpos($data['roles'],'server-access')==true){ echo 'checked';} ?>> سرور ها</span>
                        &nbsp;     &nbsp;
                        <span><input type="checkbox" name="landing-report" value="landing-report" <?php if(strpos($data['roles'],'landing-report')==true){ echo 'checked';} ?>>لندینگ ها</span>
                        &nbsp;     &nbsp;
                        <span><input type="checkbox" name="analyses-report" value="analyses-report" <?php if(strpos($data['roles'],'analyses-report')==true){ echo 'checked';} ?>>آنالیز ها</span>



                    </div>
                    <div class="form-group text-center">

                        <button class="btn btn-success" type="submit">
                            به روز رسانی
                        </button>

                    </div>


                </form>

            </div>
        </div>












































<?php require APP_ROOT."/views/include/footer.php"; ?>