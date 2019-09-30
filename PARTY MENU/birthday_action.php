<html>
<body background="birth2.jpg">
</body>
</html>
<?php
if($_POST)
{
$t1=$_POST['t1'];
$t2=$_POST['t2'];
$t3=$_POST['t3'];
$t4=$_POST['t4'];
$t5=$_POST['t5'];
$t6=$_POST['t6'];

$cake=$_POST['cake'];
$size=$_POST['size'];

$t7=$_POST['t7'];
$t8=$_POST['t8'];


echo "<center><font size=5> <b><h1>Details and Bill</h1>";
echo"<table cellpadding=5> <tr><th align=left><font size=4>Contact Details:</th> <th align=left><font size=4>Party Details:</th></tr>";
echo" <tr><th align=left><font size=4> Name: $t1</th><th align=left><font size=4>Date: $t4</th></tr>";
echo" <tr><th align=left> <font size=4>Address: $t2</th><th align=left><font size=4>Time: $t5 to $t6 </th></tr>";
echo" <tr><th align=left><font size=4> Contact Number: $t3</th><th><font size=4>Number of People: $t7</th></tr>";
echo"</table>";

echo"<h3>Food Details</h3>";
echo"<table><tr><th align=left>";
echo"<font size=4>Cake Flavour </th> <th align=left><font size=4>$cake</th></tr>";
if($size=="1kg")
{
$a=1;
echo" <tr><th align=left> <font size=4>Size:</th><th align=left><font size=4> $size </th></tr>";
}
elseif($size=="2kg")
{
$a=2;
echo" <tr><th align=left> <font size=4>Size:</th><th align=left><font size=4> $size </th></tr>";
}
elseif($size=="3kg")
{
$a=3;
echo" <tr><th align=left> <font size=4>Size:</th><th align=left><font size=4> $size </th></tr>";
}
else
{
$a=0;
}
echo" <tr><th align=left> <font size=4>Mesage on Cake:</th><th align=left><font size=4> $t8 </th></tr>";

echo"<tr><th align=left><font size=5> Main Catering Dishes:";
if(!empty($_POST['c']))
{
foreach($_POST['c'] as $selected)
{
echo"<tr><th align=left><font size=4>";
echo $selected."</th></tr>";
}
echo"</table><br>";
}
echo" <font size=5>Total Estimated Cost-  Rs.";
print(($t7*550)+($a*500));
echo"<h1>Thankyou!</h1>";
echo"</center>";
}
?>