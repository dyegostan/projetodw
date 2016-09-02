<?php
include ("conectar.php");
$arr = array();

$validates = Comment::validate($arr);

if($validates)
{
	/* Everything is OK, insert to database: */

	mysqli_query($db,"	INSERT INTO comments(name,url,email,body) 
					VALUES (
						'".$arr['name']."',
						'".$arr['url']."',
						'".$arr['email']."',
						'".$arr['body']."'
					)" or die ("Não foi possível realizar a consulta!!!"));

	$arr['dt'] = date('r',time());
	$arr['id'] = mysql_insert_id();

	/*
	/	The data in $arr is escaped for the mysql insert query,
	/	but we need the unescaped text, so we apply,
	/	stripslashes to all the elements in the array:
	/*/

	$arr = array_map('stripslashes',$arr);

	$insertedComment = new Comment($arr);

	/* Outputting the markup of the just-inserted comment: */

	echo json_encode(array('status'=>1,'html'=>$insertedComment->markup()));

}
else
{
	/* Outputting the error messages */
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}
?>