<?php
function sql_mistake()
{
	global $con;

	$res = $con->query("SHOW WARNINGS");

	if ($res->num_rows > 0) {
		$row = $res->fetch_assoc();

		print_r($row);
	} else {
		echo "NO WARNINGS OR ERRORS";
	}
}
