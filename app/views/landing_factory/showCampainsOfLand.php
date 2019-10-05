<?php require APP_ROOT."/views/include/header.php"; ?>
<style>


</style>
<div class="row">
    <div class="col-md-12 text-center">
    <a href="<?= URL_ROOT."/Factories/createCampain/".$data['id'] ?>" class="btn btn-success">ایجاد کمپین</a>
    </div>
</div>
<div class="row">

<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 table-responsive">
<table class="table table-stripped text-center table-hover" dir="">
<thead >
<tr>
    <th>ID</th>
<th>
    نام کمپین
</th>

<th>
     URL  
</th>
<th>
    تعداد کاربران سرویس اول
</th>

<th>
    تعداد کاربران سرویس دوم
</th>
<th>
API  اول

</th>

<th>
API دوم 
</th>
<th>
&#1608;&#1590;&#1593;&#1740;&#1578;
</th>


<th>ویرایش</th>
<th>حذف</th>




</tr>

</thead>
<tbody>
    <?php foreach($data['camps'] as $item){ ?>
    <tr>
    <td>
        <?= $item->id ?>
    </td>
    <td>
        <?=  $item->camp_name ?>
    </td>
    <td>
    <div class="input-group">
    <span  onclick="CopyToClipboard('<?= "txt".$item->id ?>')"  class="input-group-addon"><i class="fa  fa-copyright"></i></span >
    <input id="txt<?= $item->id ?>" type="text" style="font-size:12px;width:420px;height:40px" readonly value="<?= $item->url ?>" class="form-control" name="url" >
  </div>
    
    </td>
    <td>
        <?php countUserWithToken($item->token1,$item->camp_identifier); ?>
    </td>

    <td>
    <?php if(isset($item->token2)){ countUserWithToken($item->token2,$item->camp_identifier); }else{echo "لندینگ تک سرویسه است";}?>
    </td>


    <td>
    <div class="input-group">
    <span  onclick="CopyToClipboard('<?= "api1".$item->id ?>')"  class="input-group-addon"><i class="fa  fa-copyright"></i></span >
    <input id="api1<?= $item->id ?>" type="hidden" style="font-size:12px;width:220px;height:40px" readonly value="http://l.landingtaak.ir/Statistics/CampaignUser?token=<?= $item->token1.'&datefrom=1398/01/01' ?>" class="form-control" name="url" >
  </div>
    
    </td>
    <td>
        <?php if(isset($item->token2)){?>
            <div class="input-group">
    <span  onclick="CopyToClipboard('<?= "api2".$item->id ?>')"  class="input-group-addon"><i class="fa  fa-copyright"></i></span >
    <input id="api2<?= $item->id ?>" type="hidden" style="font-size:12px;width:220px;height:40px" readonly value="http://l.landingtaak.ir/Statistics/CampaignUser?token=<?= $item->token2.'&datefrom=1398/01/01' ?>" class="form-control" name="url" >
  </div>
        
        <?php
        }else{echo "لندینگ تک سرویسه است";} ?>
        
    </td>
<td>
<?php if($item->status==1){echo "&#1601;&#1593;&#1575;&#1604;";}else{echo "&#1594;&#1740;&#1585; &#1601;&#1593;&#1575;&#1604;";} ?>
</td>
    
  
     
    <td> <a class="" href="<?= URL_ROOT."/Factories/edit_camp/".$item->id ?>"><i class="fa fa-edit"></i> ویرایش</a> </td>
    <td> <a class="" href="<?= URL_ROOT."/Factories/delCamp/".$item->id ?>"><i class="fa fa-trash"></i>حذف</a> </td>
   

    </tr>


    <?php } ?>

</tbody>



</table>




</div>

</div>




<script>

  
 function CopyToClipboard (da) {
            var input =document.getElementById(da);
            var textToClipboard = input.value;
            
            var success = true;
            if (window.clipboardData) { // Internet Explorer
                window.clipboardData.setData ("Text", textToClipboard);
            }
            else {
                    // create a temporary element for the execCommand method
                var forExecElement = CreateElementForExecCommand (textToClipboard);

                        /* Select the contents of the element 
                            (the execCommand for 'copy' method works on the selection) */
                SelectContent (forExecElement);

                var supported = true;

                    // UniversalXPConnect privilege is required for clipboard access in Firefox
                try {
                    if (window.netscape && netscape.security) {
                        netscape.security.PrivilegeManager.enablePrivilege ("UniversalXPConnect");
                    }

                        // Copy the selected content to the clipboard
                        // Works in Firefox and in Safari before version 5
                    success = document.execCommand ("copy", false, null);
                }
                catch (e) {
                    success = false;
                }
                
                    // remove the temporary element
                document.body.removeChild (forExecElement);
            }

            if (success) {
               toastr.success(textToClipboard , 'متن زیر کپی شد:', {timeOut: 3000});
            }
            else {
                toastr.success(textToClipboard , '&#1605;&#1585;&#1608;&#1585;&#1711;&#1585; &#1588;&#1605;&#1575; &#1575;&#1586; &#1575;&#1740;&#1606; &#1602;&#1575;&#1576;&#1604;&#1740;&#1578; &#1662;&#1588;&#1578;&#1740;&#1576;&#1575;&#1606;&#1740; &#1606;&#1605;&#1740;&#1705;&#1606;&#1583;!', {timeOut: 3000});
            }
        }

        function CreateElementForExecCommand (textToClipboard) {
            var forExecElement = document.createElement ("div");
                // place outside the visible area
            forExecElement.style.position = "absolute";
            forExecElement.style.left = "-10000px";
            forExecElement.style.top = "-10000px";
                // write the necessary text into the element and append to the document
            forExecElement.textContent = textToClipboard;
            document.body.appendChild (forExecElement);
                // the contentEditable mode is necessary for the  execCommand method in Firefox
            forExecElement.contentEditable = true;

            return forExecElement;
        }

        function SelectContent (element) {
                // first create a range
            var rangeToSelect = document.createRange ();
            rangeToSelect.selectNodeContents (element);

                // select the contents
            var selection = window.getSelection ();
            selection.removeAllRanges ();
            selection.addRange (rangeToSelect);
        }











</script>



<?php require APP_ROOT."/views/include/footer.php"; ?>