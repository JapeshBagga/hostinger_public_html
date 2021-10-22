
<?php
require_once "identification.php";
$subrole = $row['subrole'];
	if(isset($_POST['qust'])){
		
		$qust = $_POST['qust'];
		$opt1 = $_POST['opt1'];
		$opt2 = $_POST['opt2'];
		$opt3 = $_POST['opt3'];
		$opt4 = $_POST['opt4'];
		$difficulty_level = $_POST['difficulty-level'];
		$tags = $_POST['tags'];
		$sr_id = $_POST['series'];
		$dm_name = trim($_POST['domain']);
		$type_name = trim($_POST['type']);
		$quiz_title = trim($_POST['topic']);
		if(!empty($qust) && !empty($opt1)  && !empty($opt2) && !empty($opt3) && !empty($opt4) && !empty($difficulty_level) && !empty($tags) && !empty($sr_id) && !empty($dm_name) && !empty($type_name) && !empty($quiz_title)){
		
			$validation = 1;
			if(!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c']) && !empty($_POST['d'])){
				$validation = 0;
			}
			if(empty($_POST['a']) && empty($_POST['b']) && empty($_POST['c']) && empty($_POST['d'])){
				$validation = 0;
			}
			if((empty($_POST['a']) && empty($_POST['b']) && empty($_POST['c'])) or (empty($_POST['a']) && empty($_POST['b']) && empty($_POST['d'])) or (empty($_POST['b']) && empty($_POST['c']) && empty($_POST['d']))){
				$validation = 0;
			}
			if(empty($_POST['a']) && empty($_POST['b'])){
				$corr1="c";
				$corr2="d";
			}
			else if(empty($_POST['a']) && empty($_POST['c'])){
				$corr1="b";
				$corr2="d";
			}
			else if(empty($_POST['a']) && empty($_POST['d'])){
				$corr1="b";
				$corr2="c";
			}
			else if(empty($_POST['b']) && empty($_POST['c'])){
				$corr1="a";
				$corr2="d";
			}
			else if(empty($_POST['b']) && empty($_POST['d'])){
				$corr1="a";
				$corr2="c";
			}
			else if(empty($_POST['c']) && empty($_POST['d'])){
				$corr1="a";
				$corr2="b";
			}
			
			if($validation != 0){
			
		
				$query = "select type_id from type where type_name='$type_name'";
				$query_result = mysqli_query($conn, $query);
				$rowcount = mysqli_num_rows($query_result);
				if($rowcount <= 0){
					$query = "insert into type (type_name) values ('$type_name')";
					mysqli_query($conn, $query);
				}
				
				$query = "select type_id from type where type_name='$type_name'";
				$query_result = mysqli_query($conn, $query);
				$row_type = mysqli_fetch_assoc($query_result);
				$type_id = $row_type['type_id'];
				
				
				$query = "select dm_id from domain where dm_name='$dm_name'";
				$query_result = mysqli_query($conn, $query);
				$rowcount = mysqli_num_rows($query_result);
				if($rowcount <= 0){
					$query = "insert into domain (dm_name,dm_subrole) values ('$dm_name','$subrole')";
					mysqli_query($conn, $query);
				}
				
				$query = "select dm_id from domain where dm_name='$dm_name'";
				$query_result = mysqli_query($conn, $query);
				$row_dm = mysqli_fetch_assoc($query_result);
				$dm_id = $row_dm['dm_id'];
				
				
				
				$query = "select quiz_id from quiz_topic where quiz_title='$quiz_title'";
				$query_result = mysqli_query($conn, $query);
				$rowcount = mysqli_num_rows($query_result);
				if($rowcount <= 0){
					$query = "insert into quiz_topic (quiz_title) values ('$quiz_title')";
					mysqli_query($conn, $query);
				}
				
				$query = "select quiz_id from quiz_topic where quiz_title='$quiz_title'";
				$query_result = mysqli_query($conn, $query);
				$row_topic = mysqli_fetch_assoc($query_result);
				$topic_id = $row_topic['quiz_id'];
				
				
				$qust_query = "insert into quiz_qust (question,opt1,opt2,opt3,opt4,correct1,correct2,quiz_id,series_id,type_id,domain_id,difficulty_level,tags) values
				('$qust','$opt1','$opt2','$opt3','$opt4','$corr1','$corr2','$topic_id','$sr_id','$type_id','$dm_id','$difficulty_level','$tags')";
				mysqli_query($conn, $qust_query);
				$_SESSION['message_quiz'] = "Successfull";
				echo "Successfull";
			}
			else{
				$_SESSION['message_quiz'] = "Please select any two from checkbox";
				echo "Please select any two from checkbox";
			}
		}
		else{
			$_SESSION['message_quiz'] = "Fill all the fields";
			echo "Fill all the fields";
		}
	}
	else{
		echo "Hahahaha";
	}
?>