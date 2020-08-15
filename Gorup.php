<?php
/*
File By : @ieoooo .
Ch : @phprim .
*/
ob_start();
$API_KEY = "719654333:AAFQvXq2EQPvCLWjOnw3l7Jw07y20jS2UZY";
define('API_KEY',$API_KEY);
echo "<a href='https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."'>setwebhook</a>";
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}
else
{
return json_decode($res);
}
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
mkdir("data/$chat_id");

$ieoooo = file_get_contents("data/$chat_id/ieoooo.txt");
$channelid = file_get_contents("data/$chat_id/channelid.txt");
$gpname = $update->message->chat->title;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$photo = $update->message->photo;
$forward = $update->message->forward_from;
$video = $update->message->video;
$location = $update->message->location;
$sticker = $update->message->sticker;
$document = $update->message->document;
$contact = $update->message->contact;
$game = $update->message->game;
$music = $update->message->audio;
$gif = $update->message->gif;
$voice = $update->message->voice;
$message_id2 = $update->callback_query->message->message_id;
$messageid = $update->callback_query->message->message_id;
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=@$channelid&user_id=".$from_id)); 
$tch = $forchaneel->result->status;
$type = $update->message->chat->type;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$rank = $info['result']['status'];
$reply = $update->message->reply_to_message->message_id;
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin = 780029362;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$date = "https://api.rangatiratan.ga/tiq.php";
$g = file_get_contents($date);
$js = json_decode($g);
$da = $js->Date;
$time = $js->Time;
$bot = bot('getme',['bot'])->result->username;
echo "<br><a  href='https://t.me/$bot'>@$bot</a>";

$ch = "c3d3d";
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" [$name](tg://user?id=$chat_id) ؛ 

- لايمكنك ارسال اي رسالة هنا لانك غير مشترك في قناة المجموعة ؛ ✅
-------
- اشترك الان من هنا ؛ [@$ch] 📡",
]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"- العضو قام بألاشتراك في قناة البوت معلوماته ؛ 💗👇🏻'
• الاسم ؛ $name ،
• المعرف ؛ @$username ،
• الايدي ؛ $from_id ،
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• الوقت ؛ $time ، 
• التاريخ ؛ $da ،",
]);return false;}

if($text == "/start"){
bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"• اهلا بك ؛ [$name](tg://user?id=$chat_id) 

~ في بوت زيادة اعضاء قناتك من خلال مجموعتك ، قم باضافة البوت الى المجموعه وقم برفعه مشرف ؛ وارسل /setch واتبع التعليمات التي يرسلها لك البوت ❗️

~ للاستفسار راسلني ؛ @S3D3D❗️
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا ، 📢](t.me/c3d3d)",
      'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>" المحترف | هدهد ☬'",'url'=>"t.me/s3d3d"]]
        ]
    ])
    ]);
      bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"- تم دخول شخص الى البوت الخاص بك 🔰؛
• معلومات العضو ، 👋🏻

• الاسم ؛ $name ،
• المعرف ؛ @$username ،
• الايدي ؛ $from_id ،
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• الوقت ؛ $time ، 
• التاريخ ؛ $da ،",
]); 
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
}

if ($text == "/admin" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
        ]);
}
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
]);
file_put_contents('usr.txt', '');
}

if($data == "co" and $update->callback_query->message->chat->id == $admin ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
        عدد مشتركين البوت📢 :- [ $c ] .
        ",
        'show_alert'=>true,
]);
}

if($data == "ce" and $update->callback_query->message->chat->id == $admin){ 
    file_put_contents("usr.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    'text'=>"▪️ ارسل رسالتك الان 📩 وسيتم نشرها لـ [ $c ] مشترك . 
   ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>' الغاء 🚫 •','callback_data'=>'off']]    
        ]
    ])
    ]);
}
if($text and $modxe == "yas" and $chat_id == $admin ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    file_put_contents("usr.txt","no");

} 
}


if($tch != 'member' && $tch != 'creator' && $tch != 'administrator' ){
if($type == "supergroup" or $type == "group"){
	if(is_file("data/$chat_id/channelid.txt")){
bot('sendmessage', [
            'chat_id' => $chat_id,
            'message_id' => $message_id2,
            'text' => "~ عزيزي ؛ $name 

~ لايمكنك التكلم داخل هذه المجموعه والسبب ؛ لانك غير مشترك في قناة المجموعه ، 🦈 !

~ قم بألاشتراك ليمكنك الدردشة قناة البوت ؛ @$channelid ، 💛👋🏿 ؛",
				'parse_mode'=>'MarkDown',
            'reply_markup' =>  json_encode([
                'inline_keyboard' => [
                    [['text' => "~ اضغط للاشتراك ، 🥥 ؛",'url'=>"https://telegram.me/$channelid"]],
    ]
])
        ]);
    }
    }
    }
if($rank != "creator" && $rank != "administrator"){ 
if($text || $photo || $video | $location || $sticker || $document || $contact || $music || $gif || $voice){
	if(is_file("data/$chat_id/channelid.txt")){
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
}
}
}

if($text == "/setch"){
if($rank == "creator" or $rank== "administrator"){
 file_put_contents("data/$chat_id/ieoooo.txt","Setieoooo");
$channelid = file_get_contents("data/$chat_id/channelid.txt");
        bot('sendmessage', [
                'chat_id'=>$chat_id,
                'text' =>"~ حسنا عزيزي ؛ $name

- الان قم بأرسال معرف قناة المجموعه ؛ التي لايمكن لاعضاء المجموعه التحدث الى بعد الاشتراك بها 

~ قم بأرسال معرف القناة دون ( @ ) 
~ مثال ؛ phprim ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
 ]);
}
 }
if($ieoooo == "Setieoooo"){
    if($rank == "creator" or $rank== "administrator"){
 file_put_contents("data/$chat_id/ieoooo.txt","none");
 file_put_contents("data/$chat_id/channelid.txt",$text);
     bot('sendmessage', [
                'chat_id'=>$chat_id,
                'text' =>"~ تم ضبط قناة المجموعه تاكد من ان البوت مشرف في القناة ليعمل بالشكل الصحيح ، 🇮🇶 ؛",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
 ]);
    }
    }


	?>