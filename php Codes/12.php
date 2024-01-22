<?php  
echo (abs(-7)."<br/>"); // 7 (integer)  
echo (abs(7)."<br/>"); //7 (integer)  
echo (abs(-7.2)."<br/>"); //7.2 (float/double)  

echo (ceil(3.3)."<br/>");// 4  
echo (ceil(7.333)."<br/>");// 8  
echo (ceil(-4.8)."<br/>");// -4

echo (floor(3.3)."<br/>");// 3  
echo (floor(7.333)."<br/>");// 7  
echo (floor(-4.8)."<br/>");// -5  

echo (sqrt(16)."<br/>");// 4  
echo (sqrt(25)."<br/>");// 5  
echo (sqrt(7)."<br/>");// 2.6457513110646

echo (decbin(2)."<br/>");// 10  
echo (decbin(10)."<br/>");// 1010  
echo (decbin(22)."<br/>");// 10110  

echo (dechex(2)."<br/>");// 2  
echo (dechex(10)."<br/>");// a  
echo (dechex(22)."<br/>");// 16  

echo (decoct(2)."<br/>");// 2  
echo (decoct(10)."<br/>");// 12  
echo (decoct(22)."<br/>");// 26  

$n1=10;  
echo (base_convert($n1,10,2)."<br/>");
?>  