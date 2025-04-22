<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_016</title>
</head>

<body>
   <p>
    <?php
    class Food {
      private $name;
      private $price;

   // priceを出力するメソッド
    public function show_price() {
      echo $this->price . "\n";
    }
   // コンストラクタを定義する
    public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
    }
   }

   class Animal{
    private $name;
    private $height;
    private $weight;

     // heightを出力するメソッド
   public function show_height() {
    echo $this->height . "\n";
   }
    // コンストラクタを定義する
   public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
      } 
   }  

   //インスタンス化し、出力
   $food = new Food('potato',250);
   $animal = new Animal('dog', 60, 5000);
   print_r($food);
   echo '<br>';
   print_r($animal);
   echo '<br>';


   //メソッドへのアクセス
   $food->show_price();
   echo '<br>';
   $animal->show_height();


   ?>
  </P>

</body>

</html>