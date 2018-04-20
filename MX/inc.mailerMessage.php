<?php
switch($_SESSION['webConfig']['lang']) {
	case 'tw' :
	  $very_empty					= '您未輸入驗證碼!';
	  $very_false					= '您輸入的驗證碼錯誤!';
	  $dialog_error_title			= '錯誤訊息!';
	  $dialog_success_title			= '成功送出!';
	  $send_ok						= '感謝您的來信，本公司將於收到資料後盡速為您服務，謝謝!';
	  $send_ok2						= '您的諮詢單號：'.$cm_formID.' 請您務必牢記您的單號<br>感謝您的來信！本公司將盡速為您服務，謝謝!';
	  $send_no						= '寄信錯誤，請聯繫網站開發人員!';
	break;
	case 'en' :
	  $very_empty					= 'Empty validation code!';
	  $very_false					= 'Your verification code error!';
	  $dialog_error_title			= 'Error Message!';
	  $dialog_success_title			= 'Send Successful!';
	  $send_ok						= 'Thanks for your message, we will service for you!';
	  $send_ok2						= 'Your message ID：'.$cm_formID.'<br>Please make sure to remember your message ID<br>We will service for you as soon as fast, Thank you!';
	  $send_no						= 'Mail send error!Please contact with your website company!';
	break;
}
?>