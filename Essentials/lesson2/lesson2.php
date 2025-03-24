<!-- オブジェクト指向の基礎を学ぼう -->
<?php
// Menuクラスを定義しましょう
class Menu
{

}

// Menuクラスのインスタンスを作り、変数$curryに代入してください
$curry = new Menu();

// Menuクラスのインスタンスを作り、変数$pastaに代入してください
$pasta = new Menu();

?>

<?php





class Menu
{
    // $nameというプロパティを定義してください
    public $name;

}

$curry = new Menu();
$pasta = new Menu();
// $curryのnameプロパティに'CURRY'を代入してください
$curry->name = 'CURRY';

// $pastaのnameプロパティに'PASTA'を代入してください
$pasta->name = 'PASTA';

// $curryのnameプロパティをechoしてください
echo $curry->name;

echo '<br>';
// $pastaのnameプロパティをechoしてください
echo $pasta->name;

?>

<?php







class Menu
{
    public $name;

    // helloメソッドを定義してください
    public function hello()
    {
        echo '私はMenuクラスのインスタンスです';
    }
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
// $curryに対してhelloメソッドを呼び出してください
$curry->hello();

echo '<br>';
// $pastaに対してhelloメソッドを呼び出してください
$pasta->hello();

?>


<?php
class Menu
{
    public $name;

    public function hello()
    {
        // '私は○○です'とechoしてください
        echo '私は' . $this->name . 'です';

    }
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>








<?php
class Menu
{
    public $name;

    // コンストラクタを定義してください


    public function hello()
    {
        echo '私は' . $this->name . 'です';
    }
}

$curry = new Menu();
echo '<br>';
$pasta = new Menu();
echo '<br>';
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>








<?php
class Menu
{
    public $name;

    // コンストラクタの引数に$nameを入れてください
    public function __construct($name)
    {
        // nameプロパティに引数の$nameを代入してください
        $this->name = $name;

    }

    public function hello()
    {
        echo '私は' . $this->name . 'です';
    }
}

// new Menu()の引数に'CURRY'を入れてください
$curry = new Menu('CURRY');
// new Menu()の引数に'PASTA'を入れてください
$pasta = new Menu('PASTA');
// 以下の1行を消してください

// 以下の1行を消してください

$curry->hello();
echo '<br>';
$pasta->hello();

?>



<!-- 完成物に近づけよう -->
<?php
class Menu
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        echo '私は' . $this->name . 'です';
    }
}

$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');

?>

<!-- <p>タグの中で、$curryのnameプロパティを表示してください -->
<p>
    <?php echo $curry->name ?>
</p>

<!-- <p>タグの中で、$pastaのnameプロパティを表示してください -->
<p>
    <?php echo $pasta->name ?>
</p>







<?php
class Menu
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        echo '私は' . $this->name . 'です';
    }
}

$juice = new Menu('JUICE');
$coffee = new Menu('COFFEE');
$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');
// 配列の中に上記の4つのインスタンスを順に入れて、変数$menusに代入してください
$menus = array($juice, $coffee, $curry, $pasta);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Café Progate</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="menu-wrapper container">
        <h1 class="logo">Café Progate</h1>
        <div class="menu-items">
            <!-- 配列$menusの要素を変数$menuとするforeach文を書いてください -->
            <?php foreach ($menus as $menu): ?>
                <h3>
                    <?php echo $menu->name ?>
                </h3>
            <?php endforeach ?>

        </div>
    </div>
</body>

</html>




<?php
// クラスの定義部分をmenu.phpに移してください

// ここまでクラスの宣言部分

// 以下のデータ定義部分をdata.phpに移してください

// ここまでデータ定義部分

?>

<!-- ここでdata.phpを読み込んでください  -->
<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Café Progate</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="menu-wrapper container">
        <h1 class="logo">Café Progate</h1>
        <div class="menu-items">
            <?php foreach ($menus as $menu): ?>
                <h3 class="menu-item-name">
                    <?php echo $menu->name ?>
                </h3>
            <?php endforeach ?>

        </div>
    </div>
</body>

</html>




<!-- カプセル化 -->

<!-- カプセル化とは、クラスのプロパティとメソッドへのアクセスを制限することを言います。
クラスの外部からアクセスできるようにするには「public」を、アクセスできないようにするには「private」を用いて定義します。
プロパティは基本的にアクセス権をprivateにします。 -->

<?php
class Menu
{
    // name, price, imageプロパティのアクセス権をprivateにしてください
    private $name;
    private $price;
    private $image;

    public function __construct($name, $price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    // getNameメソッドを定義してください
    public function getName()
    {
        return $this->name;
    }

    // getImageメソッドを定義してください
    public function getImage()
    {
        return $this->image;
    }

    public function getTaxIncludedPrice()
    {
        return floor($this->price * 1.08);
    }

}
?>


<!-- 注文サービスを完成させよう -->
<?php require_once('data.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Café Progate</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="menu-wrapper container">
        <h1 class="logo">Café Progate</h1>
        <!-- ここに<form>の開始タグを書いてください -->
        <form method="post" action="confirm.php">
            <div class="menu-items">
                <?php foreach ($menus as $menu): ?>
                    <div class="menu-item">
                        <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
                        <h3 class="menu-item-name">
                            <?php echo $menu->getName() ?>
                        </h3>
                        <p class="price">¥
                            <?php echo $menu->getTaxIncludedPrice() ?>（税込）
                        </p>
                        <!-- <input>タグを用いて入力ボックスを作成してください  -->
                        <input type="text" value="0" name="<?php echo $menu->getName() ?>">
                        <span>個</span>
                    </div>
                <?php endforeach ?>
            </div>
            <!-- <input>タグを用いて送信ボタンを作成してください  -->
            <input type="submit" value="注文する">
            <!-- ここで<form>の閉じタグを書いてください -->
        </form>
    </div>
</body>

</html>