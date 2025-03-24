<!-- PHPとは？

HTMLでは決められたテキストしか表示することができませんでした。
PHPを使うと、見る人や状況に応じて、表示するテキストを変えることができます。

<!-- PHPはHTMLに埋め込んで使うことができます。<?php 〜 ?>の中にPHPの命令を書いていきます。<?php 〜 ?>の部分がHTMLに変換された上で表示されます。 --> -->
<html>

<head></head>

<body>
    <h1>PHP</h1>
    <?php echo '<h2>初級</h2>' ?>
    <!-- <h2>初級</h2>に変換されます -->
</body>

</html>

<!-- PHPでは文末にセミコロン「;」を使って文を区切ります。
 セミコロンを忘れるとエラーが起きるので注意しましょう。また、「//」から行末まではコメントになります。
 動作には関係しない情報で、主にメモなどに用いられます。 -->



<body>

    <?php
    // 'Hello, world!'をechoしてください
    echo 'Hello, world!';
    ?>

    <br>

    <?php
    // 7 * 2をechoしてください
    echo 7 * 2;
    ?>

    <br>

    <?php
    // 8 % 3をechoしてください
    echo 8 % 3;
    ?>

</body>



<!-- PHPの基礎を学ぼう -->

<!-- PHPには、「文字列」や「数値」などのデータの種類があります。
「'Hello'」,「'a'」などは文字列、「1」,「3.14」などは数値となります。 -->

<body>

    <!-- この下で5 + 7を出力しましょう -->
    <?php
    echo 5 + 7;
    ?>

    <br>

    <!-- この下で'5 + 7'を出力しましょう -->
    <?php
    echo '5 + 7';
    ?>

</body>

<!-- プログラミングの重要な概念の1つである「変数」を学びましょう。
変数とは、データの入れ物です。頭に「$」記号をつけることによって変数を定義します。「$変数名 = 値;」
で様々な値を変数に入れることが出来ます。「＝」はプログラミングの世界では、
右辺を左辺に代入するという意味です。 -->

<!-- 変数を使うメリットは大きくわけて２つあります。
①データに名前をつけることでそのデータが何を表しているかを明確にできる。
②複数回使うデータを１つの変数に入れておくことで、変更があった場合も１箇所の修正ですむ。 -->

<!-- 変数名は自由につけることができますが、守らなければならないルールがいくつかあります。
変数名を数字で開始したり、日本語を用いてはいけません。
また、読みやすいコードにするために、変数の名前から内容が想像できるような名前をつけることが望ましいです。 -->


<body>

    <!-- この下に変数$fruitを書いていきましょう！ -->
    <?php
    $fruit = 'りんご';
    echo $fruit;
    ?>

    <br>

    <!-- この下に変数$sumを書いていきましょう！ -->
    <?php
    $sum = 8 + 9;
    echo $sum;
    ?>

</body>



<body>

    <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;

    ?>

    <!-- この下で$xの計算をしていきましょう -->
    <?php
    $x += 10;
    echo $x;
    ?>

    <br>

    <!-- この下で$yの計算をしていきましょう -->
    <?php
    $y *= 5;
    echo $y;
    ?>

    <br>

    <!-- この下で$aの計算をしていきましょう -->
    <?php
    $a++;
    echo $a;
    ?>

    <br>

    <!-- この下で$bの計算をしていきましょう -->
    <?php
    $b--;
    echo $b;
    ?>

</body>

<!-- ドット「.」記号を用いると文字列を連結することが出来ます。
文字列同士の連結、変数と文字列の連結、変数同士の連結をすることができます。
「.=」を用いると変数と文字列の連結を省略して書くことが出来ます

ダブルクォーテーションで文字列を囲んだ場合、
中の変数を{}で囲むとその部分が変数に入っている値で置き換えられます(変数展開)。
シングルクォーテーションで文字列を囲んだ場合は変数展開されず、
変数が{}で囲まれていてもそのまま文字列としてみなされます。
 -->

<body>

    <?php
    $name = 'にんじゃわんこ';
    // 'こんにちは！'という文字列と$nameを連結してechoしてください
    echo 'こんにちは！' . $name;

    ?>

</body>


<!-- 条件分岐 -->

<body>

    <?php

    $x = 99 * 99;
    $y = 77 * 77;

    if ($x > 9800) {
        echo '変数xは9800より大きいです。';
    }

    if ($y > 6000) {
        echo '変数yは6000より大きいです。';
    }

    ?>

</body>


<body>

    <?php
    // $ageという変数に自分の年齢を代入してください
    $age = 21;

    if ($age >= 30) {
        echo 'あなたは30歳以上です。';
    } else {
        echo 'あなたは30歳未満です。';
    }

    ?>

</body>



<body>

    <?php

    $x = 1071;

    // 以下にif-elseif-else文を書いてください
    if ($x % 3 == 0 && $x % 7 == 0) {
        echo 'xは3の倍数かつ7の倍数です。';
    } elseif ($x % 3 == 0) {
        echo 'xは3の倍数ですが7の倍数ではありません。';
    } elseif ($x % 7 == 0) {
        echo 'xは7の倍数ですが3の倍数ではありません。';
    } else {
        echo 'xは7の倍数でも3の倍数でもありません。';
    }

    ?>

</body>


<body>

    <?php

    // 変数$numを定義し、好きな数字を代入してください
    $num = 50;
    // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
    $remainder = $num % 3;

    // switch文を用いてください
    
    switch ($remainder) {
        case 0:
            echo '大吉です。';
            break;

        case 1:
            echo '中吉です。';
            break;

        case 2:
            echo '小吉です。';
            break;

        default:
            echo '凶です。';
            break;
    }
    ?>

</body>



<!-- 配列を使ってみよう -->

<body>

    <?php

    // この下に配列を作ってください
    $colors = array('赤', '青', '黄');

    echo $colors[0];

    $colors[] = '白';

    echo $colors[3];

    ?>

</body>


<body>

    <?php

    // この下に連想配列を作ってください
    $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

    $scores['国語'] += 5;

    echo $scores['国語'];
    ?>

</body>


<!-- 繰り返し処理 -->

<body>

    <?php

    // この下にfor文を書いてください
    for ($i = 51; $i <= 100; $i++) {
        echo $i;
        echo '<br>';
    }

    ?>

</body>


<body>

    <?php

    // 変数$iを定義してください
    $i = 2;

    // while文を書いてください
    while ($i <= 100) {
        if ($i % 2 == 0) {
            echo $i;
            echo '<br>';
        }

        $i++;
    }

    ?>

</body>


<body>

    <?php

    // この下にfor文を書いてください
    for ($i = 1; $i <= 1000; $i++) {
        if ($i > 500) {
            break;
        }

        echo $i;
        echo '<br>';
    }

    ?>

</body>



<body>

    <?php

    // この下にfor文を書いてください
    for ($i = 1; $i <= 1000; $i++) {
        if ($i % 3 == 0) {
            continue;
        }

        echo $i;
        echo '<br>';
    }

    ?>

</body>



<body>

    <?php

    $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

    // この下にforeach文を書いてください
    foreach ($scores as $key => $value) {
        echo $key . 'は' . $value . '点です。';
    }

    ?>

</body>



<!-- 関数を使ってみよう -->

<body>

    <?php

    $str = 'progate';

    // strlenを用いて$strの長さをechoしてください
    echo strlen($str);
    echo '<br>';

    $array = array('HTML', 'CSS', 'PHP');

    // countを用いて$arrayの要素数をechoしてください
    echo count($array);
    echo '<br>';

    // randを用いて10から15までのランダムな数字をechoしてください
    echo rand(10, 15);

    ?>

</body>



<body>

    <?php

    // 関数helloを定義してください
    function hello()
    {
        echo 'Hello, world!';
    }

    // 関数helloを呼び出してください
    hello();

    echo '<br>';
    // 関数printRectangleAreaを定義してください
    function printRectangleArea($height, $width)
    {
        echo $height * $width;
    }

    // 引数を(5, 10)としてprintRectangleAreaを呼び出してください
    printRectangleArea(5, 10);

    ?>

</body>


<body>

    <?php

    // 関数getCircleAreaを定義してください
    function getCircleArea($radius)
    {
        return $radius * $radius * 3;
    }

    // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
    $circleArea = getCircleArea(5);

    // $circleAreaをechoしてください
    echo $circleArea;

    ?>

</body>