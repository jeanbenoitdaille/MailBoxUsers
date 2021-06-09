<html>
<head></head>
<body>
<h1>Messagerie</h1>
<?php
$isPremium = true;
$unreadMessages = 10;
$readMessages = 30;
$junkMessages = 10;
$spamMessages = 3;
$messagesCountLimit = 50;
$premiumCountLimit = 100;


$hasUnreadMessages =$hasUnreadMessages!==0;
$mustCleanMessages=$junkMessages +$spamMessages >0;
$totalMessages = $unreadMessages + $readMessages + $junkMessages + $spamMessages;
$isMessageboxFull = !$isPremium && $totalMessages > $messagesCountLimit || $isPremium && $totalMessages > $premiumCountLimit;


if ($hasUnreadMessages) {
  echo 'Vous avez '.$unreadMessages.' messages non lus<br>';
}

if ($mustCleanMessages) {
  echo 'Vous avez des messages à nettoyer<br>';
}

if ($isMessageboxFull) {
  echo 'Attention : vous avez dépassé la limite de messages autorisée !<br>';
}
?>
</body>
</html>
