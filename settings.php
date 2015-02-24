<?php
include ('config.php');
$settings = $db->prepare("SELECT * FROM `prize_settings`");
$settings ->execute();
$allsettings = $settings->fetch(PDO::FETCH_ASSOC);
$firstmsg = $allsettings['prize1'];
$secondmsg = $allsettings['prize2'];
$thirdmsg = $allsettings['prize3'];
$lostmsg = $allsettings['noprize'];
$gameovermsg = $allsettings['gameover'];
$thirdvalue = $allsettings['third'];
$secondvalue = $allsettings['second'];
$firstvalue = $allsettings['first'];



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Prize Settings</title>
<link href="http://d2g9qbzl5h49rh.cloudfront.net/static/formCss.css?3.2.5659" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="http://d2g9qbzl5h49rh.cloudfront.net/css/styles/nova.css?3.2.5659" />
<link type="text/css" media="print" rel="stylesheet" href="http://d2g9qbzl5h49rh.cloudfront.net/css/printForm.css?3.2.5659" />
<meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" /> 
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script> 
     
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:false;
    }

    .form-all{
        margin:0px auto;
        padding-top:20px;
        width:650px;
        color:#555 !important;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
</style>

<script src="http://d2g9qbzl5h49rh.cloudfront.net/static/prototype.forms.js" type="text/javascript"></script>
<script src="http://d2g9qbzl5h49rh.cloudfront.net/static/jotform.forms.js?3.2.5659" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      setTimeout(function() {
          $('firstvalue').hint('ex: 23');
       }, 20);
      setTimeout(function() {
          $('input_3').hint('ex: 23');
       }, 20);
      setTimeout(function() {
          $('input_4').hint('ex: 23');
       }, 20);
   });
</script>
</head>
<body>
<form action="submit.php" method="post" id="settings">
  <div class="form-all">
    <ul class="form-section">
      <li class="form-line" data-type="control_number" id="firstvalue">
        <label class="form-label form-label-left form-label-auto" id="firstvalue" for="firstvalue"> First Pize Winner </label>
        <div id="cid_1" class="form-input jf-required">
          <input type="number" class="form-number-input  form-textbox" id="firstvalue" name="firstvalue" style="width:60px" size="5" value="<?php echo $firstvalue; ?>" data-type="input-number" />
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_3">
        <label class="form-label form-label-left form-label-auto" id="label_3" for="secondvalue"> Second Prize Winner </label>
        <div id="cid_3" class="form-input jf-required">
          <input type="number" class="form-number-input  form-textbox" id="secondvalue" name="secondvalue" style="width:60px" size="5" value="<?php echo $secondvalue; ?>" data-type="input-number" />
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_4">
        <label class="form-label form-label-left form-label-auto" id="label_4" for="thirdvalue"> 3rd Prize Winner </label>
        <div id="cid_4" class="form-input jf-required">
          <input type="number" class="form-number-input  form-textbox" id="thirdvalue" name="thirdvalue" style="width:60px" size="5" value="<?php echo $thirdvalue; ?>" data-type="input-number" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_5">
        <label class="form-label form-label-left form-label-auto" id="firstmsg" for="firstmsg"> First Prize Winner Message </label>
        <div id="cid_5" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="firstmsg" name="firstmsg" size="20" value="<?php echo $firstmsg; ?>" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="secondmsg"> Second Prize Winner </label>
        <div id="cid_6" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="secondmsg" name="secondmsg" size="20" value="<?php echo $secondmsg; ?>" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="thirdmsg"> Third Prize Winner </label>
        <div id="cid_7" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="thirdmsg" name="thirdmsg" size="20" value="<?php echo $thirdmsg; ?>" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_8">
        <label class="form-label form-label-left form-label-auto" id="label_8" for="lostmsg"> Not a Winner </label>
        <div id="cid_8" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="lostmsg" name="lostmsg" size="20" value="<?php echo $lostmsg; ?>" />
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_9">
        <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"> Competition Closed </label>
        <div id="cid_9" class="form-input jf-required">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_9" name="gameovermsg" size="20" value="<?php echo $gameovermsg; ?>" />
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_10">
        <div id="cid_10" class="form-input-wide">
          <div style="margin-left:156px" class="form-buttons-wrapper">
			Pressing submit will wipe all previous entry's.
            <input name="submit" data-role="button" data-inline="true" data-ajax="false"  type="submit" value="submit" /></form>
          </div>
        </div>  
  </div>

</form>
<div id="result" align="center"></div></p>
</body>
</html>

   <div id="result" align="center"></div></p>
  

