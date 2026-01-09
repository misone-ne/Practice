<?php
function judge($score1, $score2, $score3)
{
  $value = $score1 + $score2 + $score3;
  return $value;
}

$total = judge(100, 50, 60);
if ($total > 210)
{
    echo "合計点は"."$total"."なので合格です";
} else {
    echo "合計点は"."$total"."なので不合格です";
}
echo "<br />"
?>

<?php
function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "<br />";
echo getTriangleArea(7, 8) . "<br />";
echo getTrapezoidArea(4, 5, 4) . "<br />";
?>



<?php
function sayHello($hour)
{
    if ($hour >= 5 && $hour <= 10 )
    {
        echo "おはよう！";
    } elseif ($hour >= 11 && $hour <= 17)
    {
        echo "こんにちは！";
    } else {
        echo "こんばんは！";
    }
}

// パターン1
// $now = 6;
// sayHello($now);

// パターン2
sayHello(6);
