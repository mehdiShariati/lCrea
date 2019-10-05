<?php require APP_ROOT."/views/include/header.php"; ?>
<style>


</style>
<div class="row">
    <div class="col-md-12 text-center">
        <a class="btn btn-lg btn-success" href="<?= URL_ROOT."/Factories/createLanding" ?>">ایجاد لندینگ</a>

    </div>
</div>

<div class="row">

<div class="col-md-10">
<table class="table table-stripped text-center table-hover" dir="rtl">
<thead >
<tr>
    <th>ID</th>
<th>
    نام لندینگ
</th>
<th>
نام سرویس دهنده اول

</th>
<th>
    سرویس دوم دارد؟ 
</th>
<th>
نام سرویس دهنده دوم

</th>

<th>
پیش نمایش
</th>
<th colspan="3">
    عملیات
</th>




</tr>

</thead>
<tbody>
    <?php foreach($data as $item){ ?>
    <tr>
    <td>
        <?= $item->id ?>
    </td>
    <td>
        <?=  $item->landing_name ?>
    </td>
    <td>
        <?=  getServiceName($item->service_id1) ?>
    </td>
    <td>
        <?php if($item->is_double =="1"){echo "دارد";}else{echo "ندارد";} ?>
    </td>
    <td>
    <?php if($item->is_double =="1"){echo getServiceName($item->service_id2);}else{echo "";} ?>
    </td>
  
        <td> <a class="" href="<?= URL_ROOT."/Factories/preViews/".$item->id ?>"><i class="fa fa-street-view"></i> پیش نمایش</a></td>
    <td> <a class="" href="<?= URL_ROOT."/Factories/editLanding/".$item->id ?>"><i class="fa fa-edit"></i> ویرایش</a> </td>
    <td> <a class="" href="<?= URL_ROOT."/Factories/delLanding/".$item->id ?>"><i class="fa fa-trash"></i>  حذف</a> </td>
    

    </tr>


    <?php } ?>

</tbody>



</table>




</div>

</div>




<script>

// function callServiceName(val){
// var setting={
//     "method":"GET",
//     "url":"http:localhost/Factories/getServiceName",
//     "data":{
//         id=val;
//     }
//     $.ajax(setting).done(function(response){
//         $("#s_id_1").val(response);

//     });


   

// };



// }




</script>



<?php require APP_ROOT."/views/include/footer.php"; ?>