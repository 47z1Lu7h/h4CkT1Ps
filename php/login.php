<?php
	if(!empty($_POST)){
		if(isset($_POST["username"]) &&isset($_POST["password"])){
			if($_POST["username"]!=""&&$_POST["password"]!=""){
				include "config.php";

				$user_id=null;
				$sql1= "select * from user where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
				$query = $conn->query($sql1);
				while ($r=$query->fetch_array()) {
					$user_id=$r["id"];
					break;
				}

				if($user_id==null){
					print "<script>alert(\"Wrong username/password combination!\");window.location='../views/login.php';</script>";
				
				}elseif($user_id==1){
					$sql2= "select * from user where id=$user_id ";
					$query2 = $conn->query($sql2);
					$row = mysqli_fetch_array($query2,MYSQLI_ASSOC);
					$login_session = $row['username'];
					$full_Name = $row["fullname"];
					$email = $row["email"];

					session_start();
					$_SESSION['user_id']=$user_id;
					$_SESSION["username"]=$login_session;
					$_SESSION["fullname"]=$full_Name;
					$_SESSION["email"]=$email;
					
					print "<script>alert(\"Welcome Admin!!!\");window.location='../views/admin.php';</script>";	
				
				}else{
					$sql2= "select * from user where id=$user_id ";
					$query2 = $conn->query($sql2);
					$row = mysqli_fetch_array($query2,MYSQLI_ASSOC);
					$login_session = $row['username'];
					$full_Name = $row["fullname"];
					$email = $row["email"];
					
					session_start();
					$_SESSION['user_id']=$user_id;
					$_SESSION["username"]=$login_session;
					$_SESSION["fullname"]=$full_Name;
					$_SESSION["email"]=$email;

					print "<script>window.location='../views/home.php';</script>";				
				}
			}
		}
	}

?>