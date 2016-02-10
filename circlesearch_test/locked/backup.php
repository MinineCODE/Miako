<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  	<title>京大サークルサーチγ</title>
	<script type="text/javascript">
  		var _gaq = _gaq || [];
 		 _gaq.push(['_setAccount', 'UA-39155375-1']);
 		 _gaq.push(['_trackPageview']);

  		(function() {
 		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 		})();
	</script>
</head>
<body>

<?php
mb_internal_encoding("UTF-8");

///////////////////////////////////////////////
//MySQL接続テンプレ////////////////////////////
include "../DBManager.php";
$link = Connect_mysql();
//MySQLデータベース接続テンプレ////////////////
///////////////////////////////////////////////


$query="SELECT * FROM t_circle3 ORDER BY circle_id ASC";
$result = mysql_query($query);	//テーブルと取得データ選択
if (!$result) {
    die('SELECTクエリーが失敗しました。'.mysql_error());
}

echo ("<a href=\"backup.php?mode=noid\">→NoID</a><br>");
echo ("<a href=\"backup.php?mode=notimenoid\">→NoID_NoTime</a><br>");
echo ($query . '<br><br>');
while ($nowdata = mysql_fetch_assoc($result)) {
	echo ('<div align="left">');
	//$text="(" . $nowdata["circle_id"] . ", '" . $nowdata["circle_name"] . "', '" . $nowdata["circle_explain"] . "', " . $nowdata["circle_member"] . ", '" . $nowdata["circle_place"] . "', " . $nowdata["circle_frequency"] . ", " . $nowdata["circle_day"] . ", " . $nowdata["circle_sports_minded"] . ", " . $nowdata["circle_box"] . ", " . $nowdata["circle_intercollegiate"] . ", " . $nowdata["circle_money"] . ", '" . $nowdata["circle_address"] . "', '" . $nowdata["circle_telephone"] . "', '" . $nowdata["circle_url"] . "', '" . $nowdata["circle_comment"] . "', '" . $nowdata["circle_tags"] . "', '" . $nowdata["circle_pass"]  . "')" ;
	if(isset($_GET['mode']) AND $_GET['mode']=="noid"){
		$text="(" . "'" . $nowdata["circle_name"] . "', '" . $nowdata["circle_registertime"] . "', '" . $nowdata["circle_explain"] . "', " . $nowdata["circle_member"] . ", '" . $nowdata["circle_place"] . "', " . $nowdata["circle_frequency"] . ", " . $nowdata["circle_day"] . ", " . $nowdata["circle_sports_minded"] . ", " . $nowdata["circle_box"] . ", " . $nowdata["circle_intercollegiate"] . ", " . $nowdata["circle_money"] . ", '" . $nowdata["circle_address"] . "', '" . $nowdata["circle_telephone"] . "', '" . $nowdata["circle_url"] . "', '" . $nowdata["circle_comment"] . "', '" . $nowdata["circle_tags"] . "', '" . $nowdata["circle_pass"]  . "')," ;
	}elseif(isset($_GET['mode']) AND $_GET['mode']=="notimenoid"){
		$text="(" . "'" . $nowdata["circle_name"] . "', '" . $nowdata["circle_explain"] . "', " . $nowdata["circle_member"] . ", '" . $nowdata["circle_place"] . "', " . $nowdata["circle_frequency"] . ", " . $nowdata["circle_day"] . ", " . $nowdata["circle_sports_minded"] . ", " . $nowdata["circle_box"] . ", " . $nowdata["circle_intercollegiate"] . ", " . $nowdata["circle_money"] . ", '" . $nowdata["circle_address"] . "', '" . $nowdata["circle_telephone"] . "', '" . $nowdata["circle_url"] . "', '" . $nowdata["circle_comment"] . "', '" . $nowdata["circle_tags"] . "', '" . $nowdata["circle_pass"]  . "')," ;
	}else{
		$text="(" . $nowdata["circle_id"] . ", '" . $nowdata["circle_name"] . "', '" . $nowdata["circle_registertime"] . "', '" . $nowdata["circle_explain"] . "', " . $nowdata["circle_member"] . ", '" . $nowdata["circle_place"] . "', " . $nowdata["circle_frequency"] . ", " . $nowdata["circle_day"] . ", " . $nowdata["circle_sports_minded"] . ", " . $nowdata["circle_box"] . ", " . $nowdata["circle_intercollegiate"] . ", " . $nowdata["circle_money"] . ", '" . $nowdata["circle_address"] . "', '" . $nowdata["circle_telephone"] . "', '" . $nowdata["circle_url"] . "', '" . $nowdata["circle_comment"] . "', '" . $nowdata["circle_tags"] . "', '" . $nowdata["circle_pass"]  . "')," ;
	}
	$text = str_replace("<br>", "&lt;br&gt;\\r\\n",$text);
	echo($text . "</div>");
}
$result = mysql_query($query);	//テーブルと取得データ選択
if (!$result) {
    die('エラー：登録が失敗しました。'.mysql_error()."<br><br>$query");
}

////////////////////////////////////////
//MySQL切断テンプレ/////////////////////
Close_mysql($link);
//MySQL切断テンプレ/////////////////////
////////////////////////////////////////
?>
</div>


</body>
</html>
