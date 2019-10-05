<?php require APP_ROOT."/views/include/header.php"; ?>
<style>


</style>
<div class="row">
<div class="col-md-12 text-center">
<a href="<?= URL_ROOT."/Factories/create" ?>" class="btn btn-lg btn-success"> ایجاد سرویس</a>

</div>

</div>

<div class="row">

<div class="col-md-10">
<table class="table table-stripped text-center table-hover" dir="">
<thead >
<tr>
    <th>ID</th>
<th>
    نام سرویس
</th>
<th>
نام سرور   

</th>
<th>
    سرشماره   
</th>
<th>
شناسه سرویس   

</th>

<th colspan="2">
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
        <?=  $item->service_name ?>
    </td>
    <td>
    <?=  $item->implemented_class ?>
    </td>
    <td>
    <?=  $item->shortCode ?>
    </td>
    <td>
    <?=  $item->s_id ?>
    </td>
  
       
    <td> <a class="" href="<?= URL_ROOT."/Factories/editService/".$item->id ?>"><i class="fa fa-edit"></i>  ویرایش</a> </td>
    <td> <a class="fa fa-trash" onclick="func(this)" href="<?= URL_ROOT."/Factories/delService/".$item->id ?>"><i class="fa fa-trash"></i>   حذف</a> </td>
  

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