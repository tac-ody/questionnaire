<?php
$ary = array(array($_POST['date'],$_POST['busyo'],$_POST['name'],
                    $_POST['seminarEvaluation'],@$_POST['seminarTrigger'][0],
                    @$_POST['seminarTrigger'][1],@$_POST['seminarTrigger'][2],
                    @$_POST['seminarTrigger'][3],@$_POST['seminarTrigger'][4],
                    @$_POST['seminarTrigger'][5],$_POST['seminarRequest'], ));
$ary = mb_convert_encoding($ary, 'SJIS-win', 'UTF-8');

$seminarType = $_POST['seminarType'];
switch ($seminarType) {
  case '1.Java基本':
   $java1 = fopen('CSV/Seminar-JavaBasic.csv', 'a');
   foreach ($ary as $line) {
       fputcsv($java1, $line);
   }
     fclose($java1);
     break;
  case '2.Java中級':
   $java2 = fopen('CSV/Seminar-JavaMiddle.csv', 'a');
   foreach ($ary as $line) {
       fputcsv($java2, $line);
   }
     fclose($java2);
     break;
  case '3.HTML5/CSS3講座':
   $htmlcss = fopen('CSV/Seminar-HTML5CSS3.csv', 'a');
   foreach ($ary as $line) {
       fputcsv($htmlcss, $line);
   }
     fclose($htmlcss);
     break;
  case '4.管理会計の基礎':
    $management = fopen('CSV/Seminar-ManagementAccounting.csv', 'a');
    foreach ($ary as $line) {
        fputcsv($management, $line);
    }
      fclose($management);
      break;
  case '5.SEの人間力':
  $human = fopen('CSV/Seminar-HumanPower.csv', 'a');
  foreach ($ary as $line) {
      fputcsv($human, $line);
  }
  fclose($human);
  break;
  case '6.SEのマネージメント':
  $se = fopen('CSV/Seminar-ManagementBySE.csv', 'a');
  foreach ($ary as $line) {
      fputcsv($se, $line);
  }
  fclose($se);
  break;
  }
  ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>アンケート入力完了</title>
    <link rel="stylesheet" type="text/css" href="testend.css">
</head>
<body>
    <div id="header">
        <h1>社内セミナーアンケート</h1>
        <h2>協力ありがとうございました</h2>
    </div>
    <div id="footer">
        <button type="submit" id="return-box" onclick="window.close();">OK</button>
    </div>
</body>
</html>
