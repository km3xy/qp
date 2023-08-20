//后区独立
<?php


error_reporting(E_ALL^E_NOTICE^E_WARNING);     //php关闭错误报告


/*

注释――必须把php代码放到 form标签内

点击提交按钮不跳转


*/


echo "后区q2独立版";



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

echo "后区全局随一";


echo "<br>";


echo "<br>";


$bn1=array("1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7","8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12");




$bnn=array_rand($bn1,1);



$str=explode(".",$bnn);



$t=$_POST['b'];  //php 获取数组值


if ($t>0)
{
   
    //echo  $str;
print_r($str);


}
else

{
    
    echo "请输入后区胆码";
   
    
}



echo  "<br>";





echo "<br>";




echo "后区输入随一";


//定胆随机核心代码

//$a2=$_POST['b'];   //把b数组赋值给ba2


$ba2=array_rand($_POST['b'],1);

$str=explode(".",$ba2);


print_r($str);




echo "<br>";

echo "<hr>";


echo "<br>";



 ?>



<a href="q2_dlt6_join6_dlt6_q2.php" target="_blank"  style="font-size:38px;">点我，返回复选框，独立版主页</a>



    </form>




<script>
        $(function () {
            $("input[id=b").click(function () {
                var arr = [];
                $("input[id=b").each(function () {
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

​

































