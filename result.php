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
					<li><a href="result.php">home</a></li>
						<li><a href="index.php">question</a></li>
						<li><a href="view.php">answer</a></li>
						<li><a href="#">contact us</a></li>
						<li><a href="#">Register</a></li>
					</ul>
				</div>
				
				
				
			</div>
			<br/>
<br/>
<br/>
<br/>

         

<body>
<form method="post">
<input type="radio" value="like" name="text"><button class='btn btn-warning'>like</button><br/><br/>
<input type="radio" value="likeno" name="text"><button class='btn btn-warning'>likeno</button><br/><br/>
<input type="radio" value="yes" name="text"><button class='btn btn-warning'>yes</button><br/><br/>
<input type="submit" name="vote" value="vote" />
</form>
</body>
</html>

<?php
$link = mysql_connect('localhost', 'root', '');
$pdo=mysql_select_db('user3',$link);

		switch
		 ($_POST['text']) {
	case "like":
		$stra = "select * from choice where poll_id=1"; 
		$rrs = mysql_query($stra);
		while($ror = mysql_fetch_array($rrs)) {
			echo "<br />";
			echo "<br />";
			echo "<br />";
			echo "<br />";
			echo "<button class='btn btn-warning'>";
		echo $ror['text'];
		echo"</button>";
		 
		echo "<br />";
		echo "<br />";
		 echo "<button class='btn btn-primary'>";
		echo $ror['votes'];
		echo"</button>";
	
	}
	break;
	case "likeno":
		$strsq = "select * from choice where poll_id=2";
		$r = mysql_query($strsq);
		while($roo = mysql_fetch_array($r)) {
			echo "<br />";
			echo "<br />";
			echo "<br />";
			echo "<br />";
			echo "<button class='btn btn-warning'>";
		echo $roo['text'];
		echo"</button>";
		 
		echo "<br />";
		echo "<br />";
		 echo "<button class='btn btn-primary'>";
		echo $roo['votes'];
		echo"</button>";
		
		
	}
	break;

	case "yes":
		$strsl = "select * from choice where poll_id=3";
		$res = mysql_query($strsl);
		while($ro = mysql_fetch_array($res)) {
			echo "<br />";
			echo "<br />";
			echo "<br />";
			echo "<h1>";
			echo "<button class='btn btn-warning'>";
		echo $ro['text'];
		echo"</button>";
		 
		echo "<br />";
		echo "<br />";
		 echo "<button class='btn btn-primary'>";
		echo $ro['votes'];
		echo"</button>";
		echo "</h1>";
		
	}
	break;
		
	}
mysql_close($link);


?>
