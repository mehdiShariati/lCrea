
<?php require APP_ROOT."/views/include/header.php"; ?>



<div class="col-md-12 col-xs-12 col-lg-12 text-center">

    <p>
        ایجاد کاربر
    </p>


</div>

</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-lg-8 col-lg-offset-2" style="margin-top:40px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">


        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">افزودن کاربر</h3>
            </div>
            <div class="box-body">

                <?php if(isset($err)&& !empty($err)){
                    echo "<div class='alert alert-danger'>$err</div>";}
                ?>

                <form action="<?= URL_ROOT ?>/users/register" method="post">
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
                    <div class="form-group text-center">

                        <button class="btn btn-success" type="submit">
                            افزودن
                        </button>

                    </div>


                </form>

            </div>
        </div>












































<?php require APP_ROOT."/views/include/footer.php"; ?>