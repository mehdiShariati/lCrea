<?php require APP_ROOT."/views/include/header.php"; ?>






<div class="col-xs-12 col-md-12 col-lg-12">
    <p>
        مدیریت کاربران            </p>


</div>


</div>

<div class="row">
    <div class="col-xs-8 col-md-8 col-sm-12 col-xs-offset-2 col-md-offset-2 ">
        <table class="table table-stripped table-hover">
            <thead>
            <tr>
                <th>نام کاربر</th>
                <th>ایمیل</th>
                <th>دسترسی ها</th>
                <th>آواتار</th>
                <th>ویرایش کاربر</th>
                <th>حذف کاربر</th>
            </tr>

            </thead>
            <tbody>
            <?php

                    foreach ($data as $item){
                    $roles=implode(',',json_decode($item->roles));

                    ?>


                    <tr>
                        <td><?php echo $item->username; ?></td>
                        <td><?php echo $item->email; ?></td>
                        <td><?php echo $roles; ?></td>
                        <td><img src="<?= URL_ROOT ?>/dist/img/<?php echo $item->avatar; ?>" style="width:40px;height:40px;border-radius:60%" alt=""></td>
                        <td><a href="<?php echo URL_ROOT."/users/updateUser/".$item->id; ?>" class="btn btn-primary">ویرایش</a>
                        </td>
                        <td><a href="<?php echo URL_ROOT."/users/updateUser/".$item->id; ?>" class="btn btn-danger">حذف</a>
                        </td>

                    </tr>


                    <?php

            }
            ?>






            </tbody>



        </table>

    </div>
</div>



















<?php require APP_ROOT."/views/include/footer.php"; ?>
