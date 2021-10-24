<?php
	Class Home{
		public function index(){
			header("Location: index.php");	
		}
		public function login(){
			session_start();
			// $_SESSION["role_id"] = "college";
			// print_r($_SESSION);exit;
			if (isset($_SESSION["role_id"])) {
			
			if ($_SESSION["role_id"] == "college" ){
				header("Location: $dom/collegedash.html");		
			}
			if ($_SESSION["role_id"] == "company" ){		
				header("Location: $dom/companydash.html");	
			}
			}else if(isset($_POST["work"])){
				if ($_POST["work"]=="Login"){
					$servername = "database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com";
					$username = "admin";
					$password1 = "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou";
					// Create connection
					$conn = new mysqli($servername, $username, $password1,"jobaskit");
					// Check connection
					if ($conn->connect_error) {
					  die("Connection failed: " . $conn->connect_error);
					}
					echo $email=$_POST['email'];
					echo $pass=$_POST['password'];
					echo $sql = "SELECT * FROM users WHERE email='".$email."' and password='".$pass."'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
						echo $_SESSION["role_id"]=$row["role_id"];
						$_SESSION["domain"]=$row["domain"];
						$_SESSION["email"]=$row["email"];
						$_SESSION["username"]=$row["userName"];

						// $_SESSION["type"]="company";
						$this->dashboard();
					  }
					} 
					else {
					  echo "0 results";
					}
					$conn->close();
				}
			}else{
				header("Location: signin.php");
			}

		}
		public function dashboard(){
			if(isset($_SESSION["role_id"])) {
				 $dom= $_SESSION["domain"];

				 // echo $dom;
				if ($_SESSION["role_id"] == "college" ){
				// echo $dom; 
					echo header("Location: $dom/collegedash.html");	
					// header("Location: collegedash.html");		
					// echo $dom; exit;
				}
				if ($_SESSION["role_id"] == "company" ){		
					echo header("Location: $dom/companydash.html");	
					// echo $work='karthic';exit();
					// echo $dom; exit;
				}
			}else{
				$home->login();
			}
			
		}
		public function signup(){		
			if(isset($_POST["work"])){
				if ($_POST["work"]=="Signup"){
					 $role=$_POST["role_id"]; 
					if ($role=='college') {
						$role=$_POST["role_id"];
					 	$userName=$_POST["colName"];
						$Contact=$_POST["collegeContact_Number"];
						$email=$_POST["collegeemail"];
						$name=$_POST["collegename"];
						 $domain=$_POST["Collegedomain"]; 
						$type=$_POST["Universitytype"];
						$Country=$_POST["collegeCountry"];
						$State=$_POST["collegeState"];
						$city=$_POST["collegecity"];
						$street=$_POST["collegestreet"];
						$password=$_POST["collegepassword"];
						$servername = "database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com";
						$username = "admin";
						$password1 = "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou";
						
						$conn = new mysqli($servername, $username, $password1,"jobaskit");
						if ($conn->connect_error) {
							  die("Connection failed: " . $conn->connect_error);
						}
						
						$sql = "SELECT * FROM users WHERE email='".$email."'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							 echo "You're already registered, Please Log in";
						} else {
						 	$sql = "INSERT INTO users (role_id, userName, Contact, email ,name, domain, type, Country, State,city, street,password) VALUES ('college','".$userName."', '".$Contact."', '".$email."','".$name."', '".$domain."','".$type."','".$Country."', '".$State."','".$city."', '".$street."','".$password."')";
							if ($conn->query($sql) === TRUE) {
								$sql = "SELECT * FROM users WHERE email='".$email."'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
									$_SESSION["role_id"]=$row["role_id"];
									$_SESSION["domain"]=$row["domain"];
									$_SESSION["email"]=$row["email"];
									$_SESSION["username"]=$row["userName"];
									// $_SESSION["type"]="company";
									// $this->dashboard();
									echo ("<SCRIPT LANGUAGE='JavaScript'>
								    window.alert('Successfully Signed UP.')
								        window.location.href='index.php';
								      </SCRIPT>") ;
									}
								} 
								else echo "An unexpected error occoured";
							} 
							else echo "Error: " . $sql . "<br>" . $conn->error;
						}
						
						$conn->close();
					}
					
					if ($role=='company') {
					 	$userName=$_POST["comName"];
						$Contact=$_POST["companyContactNumber"];
						$email=$_POST["companyemail"];
						$name=$_POST["comapnyname"];
						$domain=$_POST["Companydomain"];
						$companyucc=$_POST["companyucc"];
						$type=$_POST["Companytype"];
						$Country=$_POST["companyCountry"];
						$State=$_POST["companyState"];
						$city=$_POST["companycity"];
						$street=$_POST["companystreet"];
						$password=$_POST["companypassword"];


						$servername = "database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com";
						$username = "admin";
						$password1 = "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou";
						// Create connection
						$conn = new mysqli($servername, $username, $password1,"jobaskit");
						// Check connection
						if ($conn->connect_error) {
							  die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT * FROM users WHERE email='".$email."'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							 echo "You're already registered, Please Log in";
						} else {
							 $sql = "INSERT INTO users(role_id, userName, Contact, email,name, domain, type, Country, State,city, street,password,companyucc) VALUES ('company','".$userName."', '".$Contact."', '".$email."','".$name."', '".$domain."','".$type."','".$Country."', '".$State."','".$city."', '".$street."','".$password."','".$companyucc."')";
							if ($conn->query($sql) === TRUE) {
								$sql = "SELECT * FROM users WHERE email='".$email."'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
									$_SESSION["role_id"]=$row["role_id"];
									$_SESSION["domain"]=$row["domain"];
									$_SESSION["email"]=$row["email"];
									$_SESSION["username"]=$row["userName"];

									// $this->dashboard();
									echo ("<SCRIPT LANGUAGE='JavaScript'>
								    window.alert('Successfully Signed UP.')
								        window.location.href='index.php';
								      </SCRIPT>") ;
									}
									}
								} 
								else{
									echo "An unexpected error occoured";
								}
							// } else {
							// 	 echo "Error: " . $sql . "<br>" . $conn->error;
							// }
						}
						$conn->close();
					}
					
				}
			}
			else{
				header("Location: signup.php");
			}
		}
    }
    
	$home=new Home();
	
	if(isset($_POST["work"])){
		if($_POST["work"]=="Login"){
			$home->login();
		}else if($_POST["work"]=="Signup") {
			$home->signup();
		}
	}else if(isset($_GET["login_click"])){
		$home->login();
	}else if(isset($_GET["logout_click"])){
		$home->login();
	}else if(isset($_GET["signup_click"])){
		$home->signup();
	}
	//please maintain last
	else if(isset($_SESSION["role_id"])) {
		$home->dashboard();
	}else{
		$home->index();
	}
?>