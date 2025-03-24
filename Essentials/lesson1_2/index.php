<!--  -->
<!-- PHPの基礎をマスターしよう -->
<!--  -->


<!-- PHPの基礎をマスターしよう -->
<?php

echo 'Hello, PHP';

echo '<br>';

echo '10 + 7';

// 10 + 7をクォーテーション「'」で囲まないと
// 以下のように数値の計算が行われます
// echo 10 + 7;
// 結果 => 17

?>

<?php
$name = 'Tom';
echo '変数$nameの値: '.$name;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
echo 'My name is '.$name;

// 変数展開を用いた別解
echo "My name is {$name}";

?>



<?php
$price = 1000;
$taxRate = 0.08;
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$taxIncludedPrice = $price + $price * $taxRate;
echo '税込価格は'.$taxIncludedPrice.'円です';

?>




<?php
$money = 2000;
$price = 1000;
$taxRate = 0.08;
echo '変数$moneyの値: '.$money;
echo '<br>';
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$taxIncludedPrice = $price + $price * $taxRate;
if ($money > $taxIncludedPrice) {
  echo '商品を買うことができます';
} elseif ($money == $taxIncludedPrice) {
  echo '商品を買うことができますが、所持金がなくなります';
} else {
  echo '商品を買うことができません';
}

?>


<?php
for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) { // $iが3の倍数かつ5の倍数の時
    echo 'FizzBuzz';
  } elseif ($i % 3 == 0) { // $iが3の倍数の時
    echo 'Fizz';
  } elseif ($i % 5 == 0) { // $iが5の倍数の時
    echo 'Buzz';
  } else {
    echo $i;
  }
  echo '<br>';
}
?>

<!-- 配列の操作をマスターしよう -->
<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$totalPrice = 0; // 金額の合計値を入れるための変数
foreach ($prices as $price) {
  // 各金額を$totalPriceに足していく
  $totalPrice += $price;
}
echo '合計金額は'.$totalPrice.'円です';

?>


<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$totalPrice = 0;
$maxPrice = 0; // 最高価格を入れるための変数
foreach ($prices as $price) {
  $totalPrice += $price;
  // $maxPriceに入っている価格より大きければ
  if ($price > $maxPrice) {
    // その価格で$maxPriceを上書きする
    $maxPrice = $price;
  }
}
echo '合計金額は'.$totalPrice.'円です';
echo '<br>';
echo '最高価格は'.$maxPrice.'円です';
?>


<!-- 連想配列の操作をマスターしよう -->
<?php
$menu = array('name' => 'CURRY', 'price' => 900);
echo '$menuの値: ';
// var_exportは変数の中身を見るための関数です
var_export($menu);
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
echo $menu['name'].'は'.$menu['price'].'円です';

?>

<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
foreach ($menus as $menu) {
  echo $menu['name'].'は'.$menu['price'].'円です';
  echo '<br>';
}

?>


<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
foreach ($menus as $menu) {
  echo $menu['name'].'は'.$menu['price'].'円です';
  echo '<br>';
}

?>


<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

$totalPrice = 0; // 合計金額を入れるための変数
foreach ($menus as $menu) {
  $price = $menu['price'];
  echo $menu['name'].'は'.$price.'円です';
  echo '<br>';
  // それぞれの価格を$totalPriceに足していく
  $totalPrice += $price;
}
echo '合計金額は'.$totalPrice.'円です';

?>

<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

$totalPrice = 0;
$maxPrice = 0; // 最高価格を入れるための変数
$maxPriceMenuName = ''; // 最高価格のものの名前を入れるための変数
foreach ($menus as $menu) {
  $name = $menu['name'];
  $price = $menu['price'];
  echo $name.'は'.$price.'円です';
  echo '<br>';
  $totalPrice += $price;
  // $maxPriceに入っている価格より大きければ
  if ($price > $maxPrice) {
    // その価格で$maxPriceを上書きする
    $maxPrice = $price;
    // 最高価格のものの名前で上書きする
    $maxPriceMenuName = $name;
  }
}
echo '合計金額は'.$totalPrice.'円です';
echo '<br>';
echo $maxPriceMenuName.'が最高価格で'.$maxPrice.'円です';

?>