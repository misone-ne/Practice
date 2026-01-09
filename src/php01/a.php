<?php
for ($s = 1; $s <= 5; $s++){
    for ($u = 1; $u <= $s; $u++){
        echo "★";
    }
    echo '<br />';
}
?>

<?php
function sayHello($hour, $minute) {
    if ($hour ==22) {
        $message = "Geminiとコーヒーを飲みながら勉強タイム！";
    } elseif ($hour >= 5 && $hour <= 10) {
        $message = "おはよう！";
    } elseif ($hour >=11 && $hour <=17) {
        $message = "こんにちは！";
    } else {
        $message = "こんばんは！";
    }
    return $message;
}

$nowH = date("H");
$nowM = date("i");

echo sayHello($nowH, $nowM);
?>