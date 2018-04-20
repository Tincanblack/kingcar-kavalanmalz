<?php
function sexSelect($CHK) {
	if($CHK == 1) { return '先生'; }
	if($CHK == 0) { return '小姐'; }
}

$mailMessage = '
<style type="text/css">
#table {
	font-family: "微軟正黑體";
	color: #333;
	border: 1px solid #CCC;
	width: 70%;
	line-height: 32px;
	font-size: 14px;
}
#table th {
	color: #FFF;
	background-color: #999;
}
#table .title {
	background-color: #F7F7F7;
	width: 15%;
	padding-top: 3px;
	padding-right: 3px;
	padding-bottom: 3px;
	padding-left: 20px;
}
</style>
<p>親愛的管理者您好，</p>
<p>有客戶透過網頁線上諮詢表單留言給您，以下為內容與資訊：</p>
<p>&nbsp;</p>
<table border="0" align="center" cellpadding="5" cellspacing="5" id="table">
    <tr>
      <th colspan="2" align="center">網頁線上諮詢表單</th>
    </tr>
    <tr>
      <td class="title">聯絡人</td>
      <td>'.strip_tags($_REQUEST['cm_name']).' '.sexSelect(strip_tags($_REQUEST['cm_sex'])).'</td>
    </tr>
    <tr>
      <td class="title">聯絡電話</td>
      <td>'.strip_tags($_REQUEST['cm_tel']).'</td>
    </tr>
    <tr>
      <td class="title">行動電話</td>
      <td>'.strip_tags($_REQUEST['cm_mobile']).'</td>
    </tr>
    <tr>
      <td class="title">E-mail</td>
      <td>'.strip_tags($_REQUEST['cm_mail']).'</td>
    </tr>
	<tr>
      <td class="title">諮詢項目</td>
      <td>'.strip_tags($_REQUEST['cm_service']).'<br /></td>
    </tr>
    <tr>
      <td class="title">諮詢內容</td>
      <td>'.strip_tags($_REQUEST['cm_message']).'</td>
    </tr>
</table>
';
?>