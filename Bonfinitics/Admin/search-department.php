<?php require_once 'identification.php';?> 
<?php
	$dept_query = "select dept_id,dept_name,dept_code,dept_hod,dept_email,dept_phone,no_of_sem from department 
	where (dept_name LIKE '%".$_POST['name']."%' or dept_code LIKE '%".$_POST['name']."%' or dept_hod LIKE '%".$_POST['name']."%' 
	or dept_email LIKE '%".$_POST['name']."%' or dept_phone LIKE '%".$_POST['name']."%' or no_of_sem LIKE '%".$_POST['name']."%')";
	$dept_query_result = mysqli_query($conn,$dept_query);
	if(mysqli_num_rows($dept_query_result)>0){
		while($row=mysqli_fetch_array($dept_query_result)){
?>
		<tr>
			<td><?php echo $row['dept_code'];?></td>
			<td><?php echo $row['dept_name'];?></td>
			<!-- <td><button class="pd-setting">Active</button></td> -->
			<td><?php echo $row['dept_hod'];?></td>
			<td><?php echo $row['dept_email'];?></td>
			<td><?php echo $row['dept_phone'];?></td>
			<td><?php echo $row['no_of_sem'];?></td>
			<!-- <td>
				<button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				<button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
			</td> -->
		</tr>
<?php
		}
	}
	else
		echo "<center>No Data Found.</center>";
?>