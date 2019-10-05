<?php require APP_ROOT."/views/include/header.php"; ?>
<style>

</style>
<div class="row">
<div class="col-md-12 text-center">
<h1>مدیریت کمپین</h1>

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

<th >
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
  
       
    <td> <a class="fa fa-note" href="<?= URL_ROOT."/Factories/showCampains/".$item->id ?>">مشاهده</a> </td>
    
  

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

function func(e){

 var r=confirm('ایا از حذف سرویس اطمینان دارید؟!\n حذف سرویس به معنی حذف لندینگ هایی است که با این سرویس ساخته شده اند');
 if (r == true) {
    
  } else {
    e.preventDefault();
  }
 }

</script>



<?php require APP_ROOT."/views/include/footer.php"; ?>