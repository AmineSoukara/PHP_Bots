$SAIED0 = "Helpbdarija"; //معرف القناة الاولى او ايدي القناة للقنوات الخاص
$SAIED1 = "MarsMusicTM"; //معرف القناة الثانية او ايدي القنا للقنوات الخاصة
$Token = "123:AbC"; // توكن بوتك
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $SAIED20->message;
$SAIED13 = $SAIED18->chat->id;
$SAIED9 = file_get_contents("https://api.telegram.org/bot".$Token."/getChatMember?chat_id=$SAIED0&user_id=".$SAIED13);
$SAIED10 = file_get_contents("https://api.telegram.org/bot".$Token."/getChatMember?chat_id=$SAIED1&user_id=".$SAIED13);
if($SAIED18 && (strpos($SAIED9,'"status":"left"') or strpos($SAIED9,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED9,'"status":"kicked"') or strpos($SAIED10,'"status":"left"') or strpos($SAIED10,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$SAIED13,
'text'=>'- اشترك في قنوات البوت أولا لتتمكن من إستخدامه 🤖".

'.$SAIED0.'
'.$SAIED1,
]);return false;}
