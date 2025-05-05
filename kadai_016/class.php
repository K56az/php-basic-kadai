<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編</title>
    </head>
    <body>
        <p>
            <?php
             // クラスを定義する
             class Food{
                public $name;
                public $price;
                // コンストラクタを定義する
                public function __construct($name,$price){
                    $this->name=$name;
                    $this->price=$price;
                }
                // 各プロパティの値を取得するメソッド
                public function showPrice(){
                    return $this->price;
                }
            }
            class Animal{
                public $name;
                public $height;
                public $weight;
                // コンストラクタを定義する
                public function __construct($name,$height,$weight){
                    $this->name=$name;
                    $this->height=$height;
                    $this->weight=$weight;
                }
                // 各プロパティの値を取得するメソッド
                public function showHeight(){
                    return $this->height;
                }
            }
            // インスタンス化する
            $food=new Food('うどん',1000);
            $animal=new Animal('インコ',20,200);
            // インスタンスを出力する
            print_r($food->showPrice());
            echo '<br>';
            print_r($animal->showHeight());
            echo '<br>';
            ?>
            </p>
        </body>
    </html>