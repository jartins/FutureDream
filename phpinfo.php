<?php
 //  $count = 6;
 //  function get_count(){
 //      static $count = 0;
 //      return $count++;
 //  }

 //  echo $count."<br/>";
 //  ++$count;
 //  echo get_count()."<br/>";
 //  echo get_count()."<br/>";


 // activeMQ	
 // RabbitMQ	Erlang
 

// for($i=1;$i<=9;$i++){
//     for ($j=1;$j<=$i;$j++){
//         $p=$i*$j;
//         echo "$i*$j=$p";
//         echo " ";


//     }//j   in
//     echo "<br/>";
// }//i  out

// $arr = [1,2,3,4,5,6,7,8,9];
// echo "<pre/>";
// print_r($arr);


// $a = "hello";
// $b = &$a;
// unset($b);
// $b="word";


// print_r($a);

// 尽量不使用text/blob类型 确实需要的话，建议拆分到子表中，不要和主表在一起 
// 避免select * 的时候读性能太差

// class Singletonmodel{
// 	private static $_instance = null;	
// 	private __construct(){	}
// 	private __clone(){  }
// 	public static function getInstance(){
// 		if(!(self::$_instance instanceof self)){
// 			self::$_instance = new self();
// 		}
// 	}
// }
// Singletonmodel::getInstance();





// /**
//  * 
//  */
// class singletoModel()
// {
	
// 	private static $_instance = null;
// 	private __construct();
// 	private __clone();
// 	public static function getInstance(){
// 		if (!(self::$_instance instanceof self)) {
// 			self::$_instance = new self;
// 		}
// 	} 
// }




// 1,1,2,3,5,8,13,21,34.....   30
//
// $arr = [1, 1];

// for($i=2;$i<30;$i++)
// {
//     $arr[$i] = $arr[$i-1] + $arr[$i-2];
// }

// echo "<pre/>";
// print_r($arr);

$str = "make_by_id";
$str = explode('_' , $str);
foreach($str as $key=>$val){
    $str[$key] = ucfirst($val);
}
// if(!$ucfirst){
    $str[0] = strtolower($str[0]);
// }
print_r(implode('' , $str));






















