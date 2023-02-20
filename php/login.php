<?php
	if(!empty($_POST)){
		if(isset($_POST["username"]) &&isset($_POST["password"])){
			if($_POST["username"]!=""&&$_POST["password"]!=""){
				include "config.php";
				
				$user_id=null;
				$sql1= "select * from user where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
				$query = $con->query($sql1);
				while ($r=$query->fetch_array()) {
					$user_id=$r["id"];
					break;
				}
				if($user_id==null){
					print "<script>alert(\"Las credenciales proporcionadas son incorrectas!\");window.location='../views/login.php';</script>";
				}else{
					$sql2= "select username from user where id=$user_id ";
					$query2 = $con->query($sql2);
					$row = mysqli_fetch_array($query2,MYSQLI_ASSOC);
					$login_session = $row['username'];
					
					session_start();
					$_SESSION["username"]=$login_session;
					print "<script>window.location='../views/home.php';</script>";				
				}
			}
		}
	}

?>