<?php
require('inc.mailerMessage.php');

//未輸入驗證碼
if(!isset($_REQUEST['verification']) || empty($_REQUEST['verification'])) {
	exit("<div id='dialogMessage' title='錯誤訊息!'>".$very_empty."</div>".DialogError());
}
//驗證碼錯誤
if($_REQUEST['verification'] != $_SESSION['verification_session']) {
	exit("<div id='dialogMessage' title='錯誤訊息!'>".$very_false."</div>".DialogError());
}

//輸入成功formBasic基本表單
$cm_message 	= strip_tags($_REQUEST['cm_message']);
$cm_datetime	= date('Y-m-d H:i:s');
$str = "INSERT into $cms_formbasic VALUES (
		NULL,
		NULL,
		'{$_REQUEST['cm_name']}',
		'{$_REQUEST['cm_sex']}',
		'{$_REQUEST['cm_mail']}',
		'{$_REQUEST['cm_tel']}',
		'{$_REQUEST['cm_mobile']}',
		'{$_REQUEST['cm_service']}',
		'$cm_message',
		'0',
		'0',
		'$cm_datetime'
		)";
mysql_query($str);

//更新諮詢單號
$nowID 		= mysql_insert_id($link_ID);
$cm_formID 	= '000'.date('Ymd').$nowID;
mysql_query("UPDATE $cms_formbasic SET cm_formID = '$cm_formID' WHERE id='$nowID'");

require('inc.mailerMessage.php');
exit("<div id='dialogMessage' title='成功送出!'>".$send_ok2."</div>".DialogOk());
?>