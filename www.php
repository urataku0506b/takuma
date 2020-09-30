<?php

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function times2($num){
    return $num * 2;
}
// echo times2(5).PHP_EOL;

// $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sumab($a,$b){
    return $a + $b;
}
// echo sumab(2,5);

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function product($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
}


echo product(array(1, 3, 5 ,7, 9));


// 最大値

 function max_array($arr){

 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }

 return $max_number;
 }


 
 echo max_array(array(6, 2, 3, 10, 5));


// 応用問題

$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除く</p>";
echo strip_tags($str) ."\n";


$fruits = ['apple', 'orange', 'melon'];
 
//array_pushを使用して要素を追加する
array_push($fruits, 'banana', 'pineapple');
 
print_r($fruits);


$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
//配列を結合する
$array = array_merge($array1, $array2, $array3);
 
print_r($array);

$time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

  date_default_timezone_set('UTC');

  ?>
  