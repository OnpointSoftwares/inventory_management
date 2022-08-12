<?php
require_once('config/constants.php');
	require_once('config/db.php');
	$itemDetailsSql = 'SELECT * FROM stores';
	$itemDetailsStatement = $conn->prepare($itemDetailsSql);
	$itemDetailsStatement->execute();
	
	if($itemDetailsStatement->rowCount() > 0) {
		while($row = $itemDetailsStatement->fetch(PDO::FETCH_ASSOC)) {
			echo '<option value='.$row['id'].'>' . $row['StoreName'] . '</option>';
		}
	}
	$itemDetailsStatement->closeCursor();
?>