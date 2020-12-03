<html class="no-js" lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>確認</title>
    
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="theme-color" content="#fafafa">
    <style type="text/css">
      .confirm{
        background-color: #f8f9fa;
      }
      .confirm form{
        padding: 30px 80px;
      }
      .form-group input{
        border: none;
        background-color: inherit;
        padding: 0;
      }
      table tr td{
        font-weight: 400;
        border-bottom: solid 1px;
      }
    </style>
  </head>
<body>
<?php

if(isset($_POST['submit']))
{
  $user_name = (trim($_POST["username"]));
  $user_email = (trim($_POST["email"]));
  $user_phone = (trim($_POST["phone"]));
  $user_company = (trim($_POST["company"]));
  $content = (trim($_POST["content"]));

}
?>
<h1 class="hblock">以下の内容で間違いがなければ、「送信する」 ボタンを押してください。</h1>
<div class="container confirm">
<form method="post" action="contact_form.php">
  <div class="row ">
    <div class="col-12">
      <div class="form-group">
        <table>
        <tr>
        <td width="30%">会社名</td>
        <td><input type="text" class="form-control" id="input1" name="company" value="<?php echo $user_company; ?>" required="" oninvalid="this.setCustomValidity('会社名を入力してください。')" onchange="this.setCustomValidity('')">
        </td>
        </tr>
        <tr>
        <td for="input2"> お名前</td>
        <td><input type="" class="form-control" id="input2" name="username" value="<?php echo $user_name; ?>" required="" oninvalid="this.setCustomValidity('お名前を入力してください。')" onchange="this.setCustomValidity('')"></td></tr>
        
        <tr>
        <td > メールアドレス</td>
        <td><input type="" class="form-control" id="input3" name="email" value="<?php echo $user_email; ?>" required="" oninvalid="this.setCustomValidity('メールアドレスを入力してください。')" onchange="this.setCustomValidity('')"></td></tr>
        <tr>
        <td> お電話番号</td>
        <td><input type="" class="form-control" id="input4" name="phone" value="<?php echo $user_phone; ?>" required="" oninvalid="this.setCustomValidity('お電話番号を入力してください。')" onchange="this.setCustomValidity('')"></td></tr>
        <tr>
        <td>お問い合わせ内容</td>
        <td><textarea class="form-control" id="formInput1" name="content" value="" required="" oninvalid="this.setCustomValidity('お問い合わせ内容を入力してください。')" onchange="this.setCustomValidity('')" ><?php echo $content; ?></textarea></td></tr>
        <tr>      
        <td>個人情報の利用目的、取り扱い等について同意する</td>
        <td>同意する</td></tr>
        </table>
      </div>
    </div>
    <div class="col-12">
      <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">この内容で送信する</button>
        <button class="btn btn-primary"><a href="index.html" style="color:#fff;">前画面に戻る</a></button>
      </div>
    </div>
  </div>
  
</form>
</div>

</body>
</html>