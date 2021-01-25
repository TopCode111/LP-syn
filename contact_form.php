
<?php

date_default_timezone_set('Asia/Tokyo');
$days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday','Thursday','Friday', 'Saturday');
$day = date('w');

$encode = "UTF-8";//このファイルの文字コード定義（変更不可）
$hankaku = 0;
mb_language("Japanese");

if(isset($_POST['submit']))
{
  $user_name = (trim($_POST["username"]));
  $user_email = (trim($_POST["email"]));
  $user_phone = (trim($_POST["phone"]));
  $user_company = (trim($_POST["company"]));
  $content = (trim($_POST["content"]));
  
///////////////////////////////////////////////
      //$to1 = "ebusiness@ten-nine.co.jp";
      $to1 = "sg4u.tennine@gmail.com";
      $send_subject1 = "バーチャルオフィス 「Synergy Global 4U」";
      //$subject1 = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($subject1,"JIS",$encode))."?=";
      
      $send_message1 = "<html><body><div style=\"font-family: 'Noto Sans JP';font-size: 15px;\"><p>【 会社名 】". $user_company ."</p>";
      $send_message1 .= "<p>【 お名前 】". $user_name ."</p>"; 
      $send_message1 .= "<p>【 メールアドレス 】". $user_email ."</p>";
      $send_message1 .= "<p>【 お電話番号 】". $user_phone ."</p>";
      $send_message1 .= "<p style='white-space: pre;'>【 お問合せ内容 】". $content ."</p></div></body></html>";

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: '.$user_name.'<'.$user_email.'>' . "\r\n";

      if(mail($to1,$send_subject1,$send_message1,$headers)) {
        $headers = "";
        $to = $user_email;

        $re_subject = "Synergy Global 4Uのお問合せを受け付けました(株式会社テンナイン・コミュニケーション)【自動配信】";
        //$re_subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($re_subject,"JIS",$encode))."?=";
        $message = "<html><body><div style=\"font-family: 'Noto Sans JP';font-size: 15px;\"><p>".$user_name."様</p>";
        $message .= "<p>お問い合わせありがとうございました。</p>";
        $message .= "<p>送信内容は以下になります。</p>";
        $message .= "<p>※本メールは、システムより自動配信されています。<br>こちらのメールへご返信は受付できませんので、ご了承ください。</p>";

        $message .= "<p>＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝</p>";

        $message .= "<p>【 会社名 】". $user_company ."<p>";
        $message .= "<p>【 お名前 】". $user_name ."</p>"; 
        $message .= "<p>【 メールアドレス 】". $user_email ."</p>";
        $message .= "<p>【 お電話番号 】". $user_phone ."</p>";
        $message .= "<p style='white-space: pre;'>【 お問合せ内容 】". $content ."</p>";
        $message .= "<p>【 個人情報の利用目的、取り扱い等について同意する 】 同意する</p>";

        $message .= "<p>＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝</p>";

        $message .= "<p>送信日時：". date("Y/m/d")."  ".$days[$day]."  ".date("h:i:sa")."</p>";

        $message .= "<p>──────────────────────</p>";
        $message .= "<p>株式会社テンナイン・コミュニケーション<br>〒105-6009　東京都港区虎ノ門4-3-1　城山トラストタワー9階<br>Tel. 03-3433-1096</p>";
        $message .= "<p>──────────────────────</p></div></body></html>";
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: '."Synergy Global 4U"."<SG4U@ten-nine.co.jp>"."\r\n";
        
        
        mail($to,$re_subject,$message,$headers);
         
      }else {
        echo 'Email sending failed.'; 
      }
////////////auto-reply//////////////////////////////////////////


}

?>
<script> location.replace("thanks.html"); </script>
