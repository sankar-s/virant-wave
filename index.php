<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE>Practice </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
  <?php
  global $x;
	$x=10;
	print $x;
	$x="hello";
	print nl2br("Hello \n World\n");
	print $x;
	$y=null;
	echo $y;
	$y='c';
    print $y;
	$a="New";
	$$a="Newest";
	echo $New;
	function test()
	{
		echo " This is Fun".$GLOBALS['x'];
	}
	test();

	$a=10;
	$b="10";
	if($a==$b)
	{
		echo nl2br("\n a and b equal");
	}
	else
	echo "Not Equal";

	$arr=array("one","two","three",1,2,3,4,5);

	print $arr[1];
	for ($i=0;$i<sizeof($arr);$i++)
	{
		echo nl2br("\n$arr[$i]");
	}
	foreach($arr as $val)
	{
		print $val;
		print "<br>";
	}

echo date("d/m/Y");

  ?>

  <form action="welcome.php" method="get">
Name: <input type="text" name="fname">
Age: <input type="text" name="age">
Password:<input type="password" name="pass">
<input type="submit">
</form> 
 </BODY>
</HTML>
