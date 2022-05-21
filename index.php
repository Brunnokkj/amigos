<?
include __DIR__.'/vendor/autoload.php';

use RestCord\DiscordClient;

$discord = new DiscordClient(['token' => "TOKEN_AQUI"]);

$users = array(
  (object) [
    'id' => '646783301020942337',
    'texto' => 'desapressado picudo'
  ],
  (object) [
    'id' => '687022032726392839',
    'texto' => 'z gostoso'
  ],
  (object) [
    'id' => '780548574035443722',
    'texto' => 'shatra cracudo'
  ]
);
$bruh = [];                                                     
foreach($users as $value) {
$userlul = $discord->user->getUser(['user.id' => intval($value->id)]);
array_push($bruh, ['user' => $userlul, 'texto' => $value->texto]);
}
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>amiguitos fofos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="friends.css">
    <meta http-equiv="Content-Security-Policy"content="default-src *; img-src * 'self' data: https:; script-src 'self' 'unsafe-inline' 'unsafe-eval' *; style-src  'self' 'unsafe-inline' *">
</head>
  
<body>
<script>document.body.style.backgroundImage = `url('https://data.whicdn.com/images/240515581/original.gif')`</script>
  
    <div>
        <div id="friends" style="cursor:pointer;right:10px" onclick="voltar()">back</div>
    </div>
<? foreach($bruh as &$kk): ?>
   <!-- <div id="container"> -->
            <div id="friend">
                <div id="avatar"
                    style="background-image: url('<? echo($kk['user']->getAvatar()); ?>')">
                </div>
                <div id="desc_container">
                    <br>
                     <h2><span>
                        <? echo(htmlspecialchars($kk['user']->username)); ?>
                    </span></h2>
                    <div id="description">
                        <? echo(htmlspecialchars($kk['texto'])); ?>
                    </div>
                </div>
            </div>
<? endforeach; ?>
      </body>
  </html>
