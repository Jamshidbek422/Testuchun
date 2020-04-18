<?php
ob_start();
define('API_KEY','928771850:AAHo9oG0t6o4jvWEPLtuuI8pM7t5sjkzwxw');
$admin = "593477562";
$mybot="ramazon2020_bot";

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
     $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);
$update = json_decode(file_get_contents('php://input'));
$efede = json_decode(file_get_contents('php://input'), true);
$message = $update->message;
$text = $message->text;
$vaqt=date('H:i', strtotime('2 hour'));
$bugun = date('d-M Y', strtotime('2 hour'));
$kanal = "@ramozon2020";
$token = "Token";
$title = $message->chat->title;
$chat_id = $message->chat->id;
$mid = $message->message_id;
$type = $message->chat->type;
$chatuser = $message->chat->username;
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$user_id2 = $update->callback_query->from->id;
$mid2 = $update->callback_query->message->message_id;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$username = $update->message->from->username;
$user_id = $update->message->from->id;
$replytx = $message->reply_to_message->text;
$edit = $message->edited_message->text;
mkdir('UzStarTm');
$capt = $message->caption;
$newid = $message->new_chat_member->id;
$is_bot = $message->new_chat_member->is_bot;
$rekname = file_get_contents("UzStarTm/RekName.matn");
$reklink = file_get_contents("UzStarTm/RekLink.matn");
$step = file_get_contents("UzStarTm/$chat_id.step");
$azolar = file_get_contents("azo.dat");
$good = $json->ok;
$mem = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$azo = $mem->result;
$azokanal=json_encode([ 
'inline_keyboard'=>[
[['text'=>"😎Obuna bo'lish",'url'=>"t.me/ramozon2020"]],
[['text'=>"😎Obuna bo'lish",'url'=>"t.me/nayobstatuslar"]],
[['text'=>"😎Obuna bo'lish",'url'=>"t.m"/eng_zor_mp3lar"]];
[['text'✅ Tasdiqlash","callback_data"=>result"],],
]  
]];

$getlink = file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink->result;

if($chatuser){
$result = "@$chatuser";
}else{
$result = "$getlinkde";
}
if($chatuuser){
$resultt = "@$chatuser";
}else{
$resultt = "Mavjud Emas!";
}
if(isset($text)){
   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}
if ($type == "private"){
$join = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$kanal&user_id=".$user_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'parse_mode'=>"markdown",
'text'=>"Siz bizni telegram kanalimizga obuna emassiz!😉
Shu boisdan botni ishlata olmaysiz!😄
Botdan foydalanish uchun kanallarimizga a'zo bo'ling😅 va keyin /start bosing.😗" ,
'reply_markup'=>$azokanal,
]);return false;}}

if($text=="/start"){
    bot('sendmessage',[ 
        'chat_id'=>$chat_id, 
        'text'=>"😊Assalomu alaykum [$ufname $uname](tg://user?id=$user_id)👋
$mybot ga xush kelibsiz!
😎Ramazon oyingiz muborak boʻlsin!👌", 
        'parse_mode'=>'markdown', 
        'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[
                [['text'=>"Rasmga yozish",'callback_data'=>"yozish"]],
            ] 
        ]) 
    ]); 
}
if($data=="yozish"){
   bot('sendphoto',[
           'chat_id'=>$chat_id2, 
'photo'=>"https://t.me/ramozon2020_Group/105",
        'caption'=>"🎆Yuqoridagi rasmlardan qaysi biri sizga maʼqul keldi?

Eslatma!Rasmlarda koʻrsatilgan raqamlar olingan holda boʻladi.", 
        'parse_mode'=>'markdown', 
        'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[ 
                [['text'=>"1️⃣",'callback_data'=>"bir"],['text'=>"2️⃣",'callback_data'=>"ikki"],['text'=>"3️⃣",'callback_data'=>"uch"]],
            ] 
        ]) 
    ]); 
}
if($data=="orqaga"){
   bot('sendphoto',[
           'chat_id'=>$chat_id2, 
'photo'=>"https://t.me/ismga_buyurtmalar/105",
        'caption'=>"🎆Yuqoridagi rasmlardan qaysi biri sizga maʼqul keldi?

Eslatma!Rasmlarda koʻrsatilgan raqamlar olingan holda boʻladi.", 
        'parse_mode'=>'markdown', 
        'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[ 
                [['text'=>"1️⃣",'callback_data'=>"bir"],['text'=>"2️⃣",'callback_data'=>"ikki"],['text'=>"3️⃣",'callback_data'=>"uch"]],
            ] 
        ]) 
    ]); 
} 
if($data=="bir"){
	bot('sendmessage',[
           'chat_id'=>$chat_id2, 
'text'=>"Yaxshi,endi /ramazon soʻzidan soʻng,ismingizni kiriting.👌

Masalan, `/ramazon1 Jahongir`",
        'parse_mode'=>'markdown', 
    ]); 
}
    if(mb_stripos($text,"/ramazon1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id,
 'reply_to_message_id'=>$mid,
'photo'=>"https://yalqovbek.mixost.ru/ramazon2/ramazon2.php?text=$ex[1]",
'caption'=>"🎆Buyurtma qilgan rasmingiz tayyor!✅
Rasmni @ramazon2020_bot tayyorladi.😎",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔙Orqaga qaytish",'callback_data'=>"orqaga"]],           
[['text'=>"🏠Bosh menyu",'callback_data'=>"menyu"]],
]
])
]);
}
if($data=="ikki"){
	bot('sendmessage',[
           'chat_id'=>$chat_id2, 
'text'=>"Yaxshi,endi /ramazon2 soʻzidan soʻng,ismingizni kiriting.👌

Masalan, `/ramazon2 Jahongir`",
        'parse_mode'=>'markdown', 
    ]); 
}
    if(mb_stripos($text,"/ramazon2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id,
 'reply_to_message_id'=>$mid,
'photo'=>"https://yalqovbek.mixost.ru/ramazon6/ramazon6.php?text=$ex[1]",
'caption'=>"🎆Buyurtma qilgan rasmingiz tayyor!✅
Rasmni @ramazon2020_bot tayyorladi.😎",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔙Orqaga qaytish",'callback_data'=>"orqaga"]],           
]
])
]);
}
if($data=="uch"){
	bot('sendmessage',[
           'chat_id'=>$chat_id2, 
'text'=>"Yaxshi,endi /ramazon3 soʻzidan soʻng,ismingizni kiriting.👌

Masalan, `/ramazon3 Jahongir`",
        'parse_mode'=>'markdown', 
    ]); 
}
    if(mb_stripos($text,"/ramazon3") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id,
 'reply_to_message_id'=>$mid,
'photo'=>"https://yalqovbek.mixost.ru/api/api.php?text=$ex[1]",
'caption'=>"🎆Buyurtma qilgan rasmingiz tayyor!✅
Rasmni @ramazon2020_bot tayyorladi.😎",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔙Orqaga qaytish",'callback_data'=>"orqaga"]],           
]
])
]);
}
////////////////////////Admin Panel////////////////////
if($text == "/panel" and $chat_id == $admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Assalomu alaykum Jamshidbek😎!Boshqaruv panelga xush kelibsiz",
    'parse_mode' => 'html',
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
			[['text'=>'🔄Xabar yuborish'],['text'=>'📊Statistika']],
            [['text'=>'📂Bot PHP']],
			]
		]),
	]);
}

if($text == "/otmen" and $chat_id == $admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Assalomu alaykum Jahongir!Boshqaruv panelga xush kelibsiz",
    'parse_mode' => 'html',
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
			[['text'=>'🔄Xabar yuborish'],['text'=>'📊Statistika']],
            [['text'=>'📂Bot PHP']],
			]
		]),
	]);
}
if($text == "🔄Xabar yuborish" and $chat_id == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" Yuboriladigan xabar matnini kiriting. Xabar turi markdown",
]);
file_put_contents("UzStarTm/$chat_id.step","user");
}

if($step == "user" and $chat_id == $admin){
file_put_contents("UzStarTm/$chat_id.step","ulink");
file_put_contents("UzStarTm/$chat_id.matn",$text);
bot('sendmessage',[
'chat_id'=>$admin,
'parse_mode'=>"markdown",
'text'=>"✅*Matn qabul qilindi.Endi namuna bo'yicha knopkani yuboring!
Namuna:*
`Ramazon oyiga mos ismlarga rasmlar=https://t.me/ramozon2020`",
]);      
}

    
if($step == "ulink"){
if($text == "/otmen"){
unlink("UzStarTm/$chat_id.step");
}else{ 
$matn=file_get_contents("UzStarTm/$chat_id.matn");
$ex=explode("=",$text);
$mess=$ex[0];
$url=$ex[1];
$idszs=explode("\n",$azolar);
foreach($idszs as $idlat){
$userr = bot('sendMessage',[
'chat_id'=>$idlat,
'text'=>$matn,
'parse_mode'=>'markdown',
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([   
'inline_keyboard'=>[   
[['text'=>$mess, 'url' => $url]],
]
])
]);
}
if($userr){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Yuborildi!",
]);      
unlink("UzStarTm/$chat_id.step");
unlink("UzStarTm/$chat_id.matn");
 }
 }
}
if($text == '📂Bot PHP' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile(__FILE__),
'caption'=>"$mybot php code! \n 🕜Olingan vaqti $bugun $vaqt",
]);
}
if($text == "📊Statistika" and $chat_id == $admin){
      $all=substr_count($azolar,"\n");
      $gr=substr_count($azolar,"-");
      $us=$all-$gr;
      $tx = "📊Statistika

👤Userlar: $us ta

🕜Vaqti: $bugun $vaqt";
  bot('sendmessage',[
   'chat_id'=>$admin,
   'parse_mode'=>'markdown',
   'text'=>$tx,
    ]); 
} 
?>
	
	
	
	
	
