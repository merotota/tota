<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<style type="text/css">
	#header{
height:94px;
	background:#4C2F15;
}
	body{
		background:Burlywood;
	}
	.top-menu{
	text-align:center;
    padding:10px;
}

 .top-menu ul{
list-style: none;
display: block;
}
 .top-menu ul li{
display: inline;

}

 .top-menu ul li a{
text-decoration: none;
color: Deeppink;
padding: 10px 20px ;

border: 1px solid #D09C67;
border-radius: 5px 5px 0 0;
}
 .top-menu ul li a:hover{
	background: #7F5F3A;
}

 
	
	</style>
</head>

<body>
<div id="header">
<div class="top-menu" >
<ul class="menu-bar">
					<li><a href="index.php">home</a></li>
						<li><a href="view.php">answer</a></li>
						<li><a href="result.php">vote</a></li>
						<li><a href="#">contact us</a></li>
						<li><a href="#">Register</a></li>
						</ul>
				</div>
				
				
				
			</div>
			<br/>
<br/>
<br/>
<br/>


<?php
$conn = mysql_connect('localhost','root','');
mysql_select_db('user3',$conn);
$sql_statement = "select * from polls";
$result = mysql_query($sql_statement);
echo "<br />";
echo "<br />";
echo "<br />";

while($row = mysql_fetch_array($result))
{

echo'<a href ="view.php?id='.$row['id'].'">'.$row['question'].'</a>'; 
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";




}
mysql_close($conn)

?>

</body>
</html>
