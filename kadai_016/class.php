<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題</title>
</head>

<body>
    <p>
        <?php
        class Food
        {
            private $name;
            private $price;

            public function __construct(int $price, string $name)
            {
                $this->price = $price;
                $this->name = $name;
            }
            public function show_price()
            {
                echo $this->price . '<br>';
            }
        }

        class Animal
        {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            public function show_height()
            {
                echo $this->height . '<br>';
            }
        }

        $food = new Food(250, 'egg');
        $food->show_price();

        $animal = new Animal('dog', 2, 4);
        $animal->show_height();
        ?>
    </p>
</body>

</html>