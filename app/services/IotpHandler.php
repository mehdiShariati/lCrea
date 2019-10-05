<?php
interface IotpHandler {
    function send($phone_number,$token,$service_id,$service_name);
    function confirm($confirm_code,$transaction_id,$otpreferenceCode,$token,$mobile,$service_id,$service_name);
}
?>