<?php
function sql_mistake()
{
	global $con;

	$res = mysqli_query($con, "SHOW WARNINGS");

	if (mysqli_num_rows($res) > 0) {
		$row = mysqli_fetch_assoc($res);

		print_r($row);
	} else {
		echo "NO WARNINGS OR ERRORS";
	}
}
