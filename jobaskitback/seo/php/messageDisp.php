<?php
	function error_without_field($message)
	{
		return '<script>
					alert("'.$message.'")
				</script>';
	}
	
	function error_with_field($message, $field)
	{
		return '<script>
					alert("'.$message.'")
				</script>';
	}
	
	function success($message)
	{
		return '<script>
					alert("'.$message.'")
				</script>';
	}
?>