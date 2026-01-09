<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
?>

<br />

<?php
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people);
?>

<br />

<?php
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}
?>

<?php
$people = [
    [
        "name" => "Taro",
        "age" => 25,
        "gender" => "men"
    ],
    [
        "name" => "JIRO",
        "age" => 51,
        "gender" => "men"
    ],
    [
        "name" => "hanako",
        "age" => 16,
        "gender" => "women"
    ]
    ];

foreach ($people as $person) {
    echo $person["name"]."(".$person["age"]."歳".$person["gender"].")".'<br />';
}
?>
<br />
<?php
$shop_items = [
    "りんご" => 150,
    "バナナ" => 100,
    "いちご" => 500
];

foreach ($shop_items as $shop_item => $value) {
    echo $shop_item."は".$value."円です"."<br />";
}
?>