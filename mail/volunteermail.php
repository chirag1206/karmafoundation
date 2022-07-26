<?php
    require_once("mail.php");
    if (isset($_POST['subb'])) {
        extract($_POST);
        for($i=0;$cate[$i];$i++){
            $xcat .= $cate[$i].", ";
        }
        $to = $email;
        $toname = $first_name." ".$last_name;
        $sub = "Thankyou for showing your in volunteering with Karma Foundation";
        $body = "Hi ".$first_name." ".$last_name.",<br>Thankyou for showing intrest in volunteering with us. We will get in touch with you shortly!!<br><br> Here is your details that you've submitted:<br>Name: ".$first_name." ".$last_name."<br>Gender: ".$gender."<br>Email: ".$email."<br>Phone: ".$phone."<br>Address: ".$address."<br>Message: ".$humanity."<br>Hours you can Dedicate: ".$hours."<br>Intrests: ".$zcat;
        
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