<?php
if($_POST['seminarType']=='1'){
    $seminarType = "1.Java基本";
}elseif($_POST['seminarType']=='2'){
    $seminarType = "2.Java中級";
}elseif($_POST['seminarType']=='3'){
    $seminarType = "3.HTML5/CSS3講座";
}elseif($_POST['seminarType']=='4'){
    $seminarType = "4.管理会計の基礎";
}elseif($_POST['seminarType']=='5'){
    $seminarType = "5.SEの人間力";
}elseif($_POST['seminarType']=='6'){
    $seminarType = "6.SEのマネージメント";
}
?>
<?php
if($_POST['seminarEvaluation']=='選択肢1'){
    $seminarEvaluation = "1.とても良かった";
}elseif($_POST['seminarEvaluation']=='選択肢2'){
    $seminarEvaluation = "2.良かった";
}elseif($_POST['seminarEvaluation']=='選択肢3'){
    $seminarEvaluation = "3.普通";
}elseif($_POST['seminarEvaluation']=='選択肢4'){
    $seminarEvaluation = "4.あまり良くなかった";
}elseif($_POST['seminarEvaluation']=='選択肢5'){
    $seminarEvaluation = "5.良くなかった";
}
?>
<?php
if(!empty($_POST['seminarTrigger'])){
for ($i = 0; $i < count($_POST['seminarTrigger']); $i++) {
    $seminarTrigger[] =$_POST['seminarTrigger'][$i];
  }
}
?>
<?php
if($_POST['seminarRequest']!=NULL){
    $repuest = $_POST['seminarRequest'];
}else{
    $repuest = "なし";
}
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>アンケート入力内容確認</title>
  <link rel="stylesheet" type="text/css" href="testresult.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
  <form action="testend.php" method="POST">
        <div id="header">
            <h1>社内セミナーアンケート回答の確認</h1>
        </div>
        <br>
        <div id="date">
            現在時刻
            <input type="text" id="dateBox" name="date" value="<?php echo date("Y/m/d H:i"); ?>" readonly>
        </div>
        <br>
        <div id="headerId">
            部署
            <select class="box" id="busyo" name="busyo" readonly>
                <option value="<?php echo $_POST['busyo'] ?>"><?php echo $_POST['busyo'] ?></option>
            </select>
            氏名
            <input type="text" class="box" id ="name" name="name" value="<?php echo $_POST['name']?>" readonly>
        </div>
        <br><br>
        <div id="headerSeminarType">
            セミナー名
            <input type="text" class="box" id ="seminarType" name ="seminarType" value="<?php if(!empty($seminarType)) echo $seminarType; ?>" readonly>
        </div>
        <br>
        <div id="contents">
            <div id="question1">
                <h2>受講されたセミナーを評価してみてください</h2>
                <input type="hidden" class="seminarEvaluation" name="seminarEvaluation" value="<?php echo $seminarEvaluation ?>" readonly><?php echo $seminarEvaluation ?>
            </div>
            <br><br>
            <div id="question2">
                <h2>このセミナーを受講された、動機またはきっかけは？</h2>
                <?php if(!empty($_POST['seminarTrigger'])){ ?>
                 <?php for($i=0;$i<count($seminarTrigger);$i++){ ?>
                 <input type="hidden" class="seminarTrigger" name="seminarTrigger[]" value="<?php echo $seminarTrigger[$i] ?>"><?php echo $seminarTrigger[$i] ?>
                 <?php } ?>
                <?php } ?>
            </div>
            <br><br>
            <div id="question3">
                <h2>今後のセミナー企画へのご要望をお書きください</h2>
                <textarea name="seminarRequest" rows="5" maxlength="256" readonly><?php echo $repuest ?></textarea>
            </div>
        </div>
        <div id="footer">
            <button type="submit" id="submit-box">送信</button>
            <button type="submit" id="cancel-box" onclick="window.close();">キャンセル</button>
        </div>
  </form>
  <script type="text/javascript" src="testresult.js"></script>
</body>
</html>
