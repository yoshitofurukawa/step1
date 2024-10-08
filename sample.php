<?php 

$str = "Hello";
echo $str;

?>
<?php
echo "\n";

$array = [1,2,3];
echo count($array);
// 出力結果
// 3

$array = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
    [10,11,12],
    ];
    echo $array[0][0] . "\n";
    echo $array[0][2] . "\n";
    echo $array[1][1] . "\n";
    echo $array[2][0] . "\n";
    echo $array[3][2] . "\n";
    echo count($array) . "\n";
    echo count($array[0]);
    # 出力結果
    /*
    1
    3
    5
    7
    12
    4
    3
    */
    ?>
<?php
echo "\n";

// 基本的な連想配列
$user = [
    'name' => '太郎',
    'age' => 10,
    'address' => '東京都新宿区○○町',
    'phone' => '03-xxxx-xxxx'
];
echo '名前:' . $user['name'] . "\n";
echo '年齢:' . $user['age'] . "歳\n";
echo '住所:' . $user['address'] . "\n";
echo '電話:' . $user['phone'] . "\n";
//出力結果
/*
名前: 太郎
年齢: 10歳
住所: 東京都新宿区○○町
電話: 03-xxxx-xxxx
*/

?>
<?php
class Sample{
    public $name = '太郎';
}

// インスタンス生成
$sample = new Sample();
// objectをvar_dump()すると、次のようになります
var_dump($sample);
/*
出力結果)
object(Sample)#1 (1){
    ["name"]=>
    strig(6)"太郎"
}
*/
?>
