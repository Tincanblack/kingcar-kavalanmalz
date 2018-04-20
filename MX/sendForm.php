<?php
require "inc.mailerMessage.php";

//未輸入驗證碼
if(empty($verification)) {
	exit("<div id='dialogMessage' title='".$dialog_error_title."'>".$very_empty."</div>".DialogError());
}
//驗證碼錯誤
if($verification != $_SESSION['verification_session']) {
	exit("<div id='dialogMessage' title='".$dialog_error_title."'>".$very_false."</div>".DialogError());
}

/*******寄信程式開始********/
require_once 		"admin/include/mailer/inc.mailerConfig.php";
require_once 		"Plugin/PHPMailer/class.phpmailer.php";
require 			"inc.mailerFormat1.php";
$subject			= '來自'.$webdetail['webtitle'].'網站的線上諮詢表單';				//信件標題
$fromMail			= $cm_mail;														//寄件者
$fromName			= $cm_name;														//寄件者名稱
$address			= $mailto;														//收件者

require 			"admin/include/mailer/inc.mailerDefaultConfig.php";

if(!$mail->Send()) {
  exit("<div id='dialogMessage' title='".$dialog_error_title."'>".$send_no."</div>".DialogOk());
} else {
  exit("<div id='dialogMessage' title='".$dialog_success_title."'>".$send_ok."</div>".DialogOk());
}
/*******寄信程式結束********/
?>