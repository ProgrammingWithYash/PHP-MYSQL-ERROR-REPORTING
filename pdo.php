<?php
function sql_mistake()
{
	global $con;

	$res = $con->query("SHOW WARNINGS");

	if ($res->rowCount() > 0) {
		$row = $res->fetch(PDO::FETCH_ASSOC);

		print_r($row);
	} else {
		echo "NO WARNINGS OR ERRORS";
	}
}
