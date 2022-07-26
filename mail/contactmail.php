<?php
    require_once("mail.php");
    if (isset($_POST['sub'])) {
        extract($_POST);
        $to = $email;
        $toname = $first_name." ".$last_name;
        $sub = "Thankyou for Contacting Karma Foundation";
        $body = "Hi ".$first_name." ".$last_name.",<br>Thankyou for contacting us. We will get in touch with you shortly, until then if your query is urgent, please email us at <a href='mailto:info@karmafoundation.co'>info@karmafoundation.co</a> or you can also call us at <a href='tel:+91-9898400312'>+91 9898400312</a>";
        $domail = domail($to,$toname,$sub,$body);
        if($domail){
            echo "<script>alert('Message Sent Successfully');</script>";
            header("refresh:0;url=../index.html");
        }else{
            echo "<script>alert('Error Sending Message');</script>";
            header("refresh:0;url=../index.html");
        }
    }
?>