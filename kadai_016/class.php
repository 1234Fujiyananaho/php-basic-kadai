<?php

// クラスを定義する
class Food {
    // プロパティを定義する
    private $name;
    private $price;

    // メソッドを定義する
    public function show_price() {
        echo $this->price . '<br>';
    }
    
    // コンストラクタを定義する
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }   
}

// インスタンス化する
$food = new Food('potato', 250);

// インスタンスの出力
print_r($food);
echo '<br>';

// クラスを定義する
class Animal {
   // プロパティを定義する
    private $name;
    private $height;
    private $weight;   

    // メソッドを定義する
    public function show_height() {
       echo $this->height . '<br>';
    }

    // コンストラクタを定義する
    public function __construct(string $name, int $height, int $weight) {
            $this->name = $name; 
            $this->height = $height;
            $this->weight = $weight;
    }     
}

// インスタンス化する
$animal= new Animal('dog', 60, 5000);

// インスタンスの出力をする
print_r($animal);
echo'<br>';

// メソッドへのアクセスをする
$food->show_price();
$animal->show_height();

?>
