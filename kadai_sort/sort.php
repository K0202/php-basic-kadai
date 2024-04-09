<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way($array, $order) {
            if ($order === true) {
                echo '昇順にソートします。<br>';
                sort($array, SORT_NATURAL | SORT_FLAG_CASE);
                foreach ($array as $value){
                    echo "{$value}<br>";
                }
            } else {
                echo '降順にソートします。<br>';
                rsort($array, SORT_NATURAL | SORT_FLAG_CASE);
                foreach ($array as $value) {
                    echo "{$value}<br>";
                }
            }
        }

        echo sort_2way($nums, true);
        echo sort_2way($nums, false);
        ?>
    </p>
</body>

</html>
