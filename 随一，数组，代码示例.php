<?php



error_reporting(E_ALL^E_NOTICE^E_WARNING);     //php关闭错误报告



/*

注释――必须把php代码放到 form标签内

点击提交按钮不跳转


*/


echo "<br>";


echo "定胆随机后―――>随机的前区号码";


echo "<br>";




echo "比较差集移出2位是强制关联";


echo "<br>";

echo  "

写几行代码来判断强制关联，


比较差集移出2位是强制关联



写几行代码来判断重胆码，


核心方法复选强制关联，

核心方法复选重胆码，";




echo "

请用本程序复远5个号码的重胆码 新增方法 
";



echo "<br>";


echo "比较差集移出3位也是强制关联";



echo "<br>";

echo "随一定随一";






//定胆随机核心代码

//$a2=$_POST['c'];   //把c数组赋值给a2


$a2=array_rand($_POST['c'],1);

$str=explode(".",$a2);


print_r($str);



//$a2=$_POST['c'];   //把c数组赋值给a2

//创建a1数组

//用于比较数组得到差集


//得到数组差集前先创建数组赋值给$a1

//得出a1数组和c数组的差集


$a1=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24","25"=>"25","26"=>"26","27"=>"27","28"=>"28","29"=>"29","30"=>"30","31"=>"31","32"=>"32","33"=>"33","34"=>"34","35"=>"35");


$result2=array_diff_assoc($a1,$str);


//得出a1数组和c数组的差集


//$arr4=$_POST['c'];  

//可以手工输入位数位数

$x=$_POST['b_ng'];  
$x2=join($x);   



//把c数组赋值给arr4


//$x=mt_rand(5,5);  //取随机数



$y=count($str);//获取C数组长度


$xy=$x2-$y;  //减法计算




$b5=mt_rand($xy,$xy); //设定位数值




 $arr5=array_rand($result2,$b5);  

 //在勾选号码中随机




$arr4=$_POST['c'];  


// 把c数组赋值给arr4



$he= array_merge($arr5,$str); 

//合并arr5和arr4数组


sort($he);      //按照顺序排列数组

$hejoin=join("+", $he);   


 //把数组转换成字符串
 
echo  $hejoin;


echo "<br>";



$result=array_intersect($arr4,$he);
print_r($result);
   

echo "<br>";



$yichu=join("+", $result);   


 //把数组转换成字符串
 
echo  $yichu;





echo "<br>";




$aa5=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24","25"=>"25","26"=>"26","27"=>"27","28"=>"28","29"=>"29","30"=>"30","31"=>"31","32"=>"32","33"=>"33","34"=>"34","35"=>"35");





$result5=array_diff_assoc($aa5,$qp);





$y=count($str);//获取C数组长度


$xy=$x2-$y;  //减法计算




$b5=mt_rand($xy,$xy); //设定位数值




 $arr5=array_rand($result5,$b5);  

 //在勾选号码中随机




//$arr4=$_POST['c'];  


// 把c数组赋值给arr4



$h5e= array_merge($arr5,$qp); 

//合并arr5和arr4数组


sort($h5e);      //按照顺序排列数组

$he5join=join("+", $h5e);   


 //把数组转换成字符串
 
echo  $he5join;




$my_array2 = $_POST['c'];  


//$h5e





$result=array_intersect($my_array2,$h5e);
print_r($result);
   



echo "<br>";



$yichu=join("+", $result);   


 //把数组转换成字符串
 
echo  $yichu;







echo "<hr>";



//分别移出数组键和值代码事例
//保留第五位

$my_array = $_POST['c'];  




$qp=array_values($my_array);

//把数组键名换成0开始



print_r($qp);



echo "<br>";

echo "<hr>";


echo "<br>";




echo "合并第五位";


unset($qp['0']);

//移出数组键和值

unset($qp['1']);


//移出数组键和值


unset($qp['2']);

//移出数组键和值


unset($qp['3']);


//移出数组键和值






print_r($qp);






$aa5=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24","25"=>"25","26"=>"26","27"=>"27","28"=>"28","29"=>"29","30"=>"30","31"=>"31","32"=>"32","33"=>"33","34"=>"34","35"=>"35");





$result5=array_diff_assoc($aa5,$qp);





$y=count($str);//获取C数组长度


$xy=$x2-$y;  //减法计算




$b5=mt_rand($xy,$xy); //设定位数值




 $arr5=array_rand($result5,$b5);  

 //在勾选号码中随机




//$arr4=$_POST['c'];  


// 把c数组赋值给arr4



$h5e= array_merge($arr5,$qp); 

//合并arr5和arr4数组


sort($h5e);      //按照顺序排列数组

$he5join=join("+", $h5e);   


 //把数组转换成字符串
 
// 临时关闭   echo  $he5join;



echo "<br>";




$result=array_intersect($my_array2,$h5e);
print_r($result);
   





echo "<br>";


$yichu=join("+", $result);   


 //把数组转换成字符串
 
echo  $yichu;



echo "<br>";





echo "<br>";


//分别移出数组键和值代码事例
//保留第四位

$my_array = $_POST['c'];  




$qp=array_values($my_array);

//把数组键名换成0开始



//print_r($qp);




echo "合并第四位";


unset($qp['0']);

//移出数组键和值

unset($qp['1']);


//移出数组键和值


unset($qp['2']);

//移出数组键和值


unset($qp['4']);


//移出数组键和值



 print_r($qp);




$aa4=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24","25"=>"25","26"=>"26","27"=>"27","28"=>"28","29"=>"29","30"=>"30","31"=>"31","32"=>"32","33"=>"33","34"=>"34","35"=>"35");





$result4=array_diff_assoc($aa4,$qp);





$y=count($str);//获取C数组长度


$xy=$x2-$y;  //减法计算




$b4=mt_rand($xy,$xy); //设定位数值




 $arr4=array_rand($result4,$b4);  

 //在勾选号码中随机




//$arr4=$_POST['c'];  


// 把c数组赋值给arr4



$h4e= array_merge($arr4,$qp); 

//合并arr5和arr4数组


sort($h4e);      //按照顺序排列数组

$he4join=join("+", $h4e);   


 //把数组转换成字符串
 
// 临时关闭  echo  $he4join;




echo "<br>";



$result=array_intersect($my_array2,$h4e);
print_r($result);
   


echo "<br>";


$yichu=join("+", $result);   


 //把数组转换成字符串
 
echo  $yichu;



echo "<br>";


//分别移出数组键和值代码事例
//保留第三位

$my_array = $_POST['c'];  



$qp=array_values($my_array);

//把数组键名换成0开始



//print_r($qp);


echo "<br>";

echo "合并第三位";


unset($qp['0']);

//移出数组键和值

unset($qp['1']);


//移出数组键和值


unset($qp['3']);

//移出数组键和值


unset($qp['4']);


//移出数组键和值






 print_r($qp);






$aa3=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24","25"=>"25","26"=>"26","27"=>"27","28"=>"28","29"=>"29","30"=>"30","31"=>"31","32"=>"32","33"=>"33","34"=>"34","35"=>"35");





$result3=array_diff_assoc($aa5,$qp);





$y=count($str);//获取C数组长度


$xy=$x2-$y;  //减法计算




$b3=mt_rand($xy,$xy); //设定位数值




 $arr3=array_rand($result3,$b3);  

 //在勾选号码中随机




//$arr4=$_POST['c'];  


// 把c数组赋值给arr4



$h3e= array_merge($arr3,$qp); 

//合并arr5和arr4数组


sort($h3e);      //按照顺序排列数组

$he3join=join("+", $h3e);   


 //把数组转换成字符串
 
// 临时关闭  echo  $he3join;




echo "<br>";



$result=array_intersect($my_array2,$h3e);
print_r($result);
   


echo "<br>";


$yichu=join("+", $result);   


 //把数组转换成字符串
 
echo  $yichu;




echo "<br>";


//分别移出数组键和值代码事例
//保留第二位

$my_array = $_POST['c'];  




$qp=array_values($my_array);

//把数组键名换成0开始



//print_r($qp);


echo "<br>";

echo "合并第二位";


unset($qp['0']);

//移出数组键和值

unset($qp['2']);


//移出数组键和值


unset($qp['3']);

//移出数组键和值


unset($qp['4']);


//移出数组键和值






 print_r($qp);






$aa2=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24","25"=>"25","26"=>"26","27"=>"27","28"=>"28","29"=>"29","30"=>"30","31"=>"31","32"=>"32","33"=>"33","34"=>"34","35"=>"35");





$result2=array_diff_assoc($aa2,$qp);





$y=count($str);//获取C数组长度


$xy=$x2-$y;  //减法计算




$b2=mt_rand($xy,$xy); //设定位数值




 $arr2=array_rand($result2,$b2);  

 //在勾选号码中随机




//$arr4=$_POST['c'];  


// 把c数组赋值给arr4



$h2e= array_merge($arr2,$qp); 

//合并arr5和arr4数组


sort($h2e);      //按照顺序排列数组

$he2join=join("+", $h2e);   


 //把数组转换成字符串
 
// 临时关闭  echo  $he2join;



echo "<br>";



$result=array_intersect($my_array2,$h2e);
print_r($result);
   





echo "<br>";



$yichu=join("+", $result);   


 //把数组转换成字符串
 
echo  $yichu;


echo "<br>";


//分别移出数组键和值代码事例
//5

$my_array = $_POST['c'];  




$qp=array_values($my_array);

//把数组键名换成0开始



//print_r($qp);


echo "<br>";

echo "合并第一位";


unset($qp['1']);

//移出数组键和值

unset($qp['2']);


//移出数组键和值


unset($qp['3']);

//移出数组键和值


unset($qp['4']);


//移出数组键和值



  print_r($qp);



$aa1=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15","16"=>"16","17"=>"17","18"=>"18","19"=>"19","20"=>"20","21"=>"21","22"=>"22","23"=>"23","24"=>"24","25"=>"25","26"=>"26","27"=>"27","28"=>"28","29"=>"29","30"=>"30","31"=>"31","32"=>"32","33"=>"33","34"=>"34","35"=>"35");





$result1=array_diff_assoc($aa1,$qp);





$y=count($str);//获取C数组长度


$xy=$x2-$y;  //减法计算




$b1=mt_rand($xy,$xy); //设定位数值




 $arr1=array_rand($result1,$b1);  

 //在勾选号码中随机




//$arr4=$_POST['c'];  


// 把c数组赋值给arr4



$h1e= array_merge($arr1,$qp); 

//合并arr1和$qp数组


sort($h1e);      //按照顺序排列数组

$he1join=join("+", $h1e);   


 //把数组转换成字符串
 
// 临时关闭  echo  $he1join;




echo "<br>";



$result=array_intersect($my_array2,$h1e);
print_r($result);
   






echo "<br>";



$yichu=join("+", $result);   


 //把数组转换成字符串
 
echo  $yichu;




echo "<br>";







$h12e= array_merge($h5e,$h4e,$h3e,$h2e,$h1e); 


 
//print_r($h12e);


//临时注释


echo "<br>";




$qp2=array_values($h12e);

//把数组键名换成0开始





//$heqp=array_unique($qp2); //去重


$heqp=$qp2; //不去重



//先去重，然后再升序排列


//去重后才能升序排列


sort($heqp);


$hp=join("    ", $heqp);

//把数组转换成字符串


  print_r($hp);




echo "<br>";




echo "<br>";


$ret=array_flip($heqp);   //交换数组的键和值





$ab1=mt_rand(5,5);  //设定位数值

echo "找出重胆码,复选重胆码结果集，新方法";


 $array_name=array_rand($ret,$ab1);   //在勾选号码中随机

$join28=join("    ", $array_name);


//echo $join28; 暂时 //输出结果集



echo "特别留意6个号码的强制包含算法";


// 暂时关  echo $join28; //输出结果集




//输出结果集




echo "<br>";


echo "定胆随机后―――>随机的后区号码";

echo "<br>";


echo "<br>";


$arr2=$_POST['b'];   //把b数组赋值给arr2
 




$b1=mt_rand(2,2);  //设定位数值

echo "   ";


 $array_name=array_rand($arr2,$b1);   //在勾选号码中随机

$join2=join("    ", $array_name);


echo $join2;    //输出结果集




echo "<br>";





echo "<br>";

echo "后区随一";






//定胆随机核心代码

//$a2=$_POST['b'];   //把b数组赋值给ba2


$ba2=array_rand($_POST['b'],1);

$str=explode(".",$ba2);


print_r($str);






echo "<br>";




 ?>



<a href="6s5tr_d5dlt_d5dlt_str6.php" target="_blank"  style="font-size:38px;">点我，返回复选框，独立版主页</a>



    </form>




<script>
        $(function () {
            $("input[id=c").click(function () {
                var arr = [];
                $("input[id=c").each(function () {
                    if(this.checked){
                        arr.push(this.value);
                    }else{
                        var index = arr.indexOf(this.value);
                        if(index != -1){
                            arr[index] = "";
                        }
                    }
                });
                $("#spanId").text(arr.join(","));
            })
        });
</script>






  </div>
</div>
​
</body>
</html>
​






















































































































































































































































































