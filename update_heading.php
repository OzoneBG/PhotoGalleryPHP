<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	$errors = array();
	
	//Form Validation
	$required_fields = array('menu_name', 'position', 'visible');
	foreach($required_fields as $fieldname) {
		if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
			$errors[] = $fieldname;
		}
	}
	$fields_with_lengths = array('menu_name' => 30);
	foreach($fields_with_lenghts as $fieldname => $maxlenght ) {
		if (strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength) {
		$errors[] = $fieldname; }
	}
		
	if(!empty($errors)) {
		redirect_to("new_subject.php");
	}
?>
<?php
	$heading = $_POST['heading'];
	
	$query = "UPDATE header SET heading='{$heading}' WHERE id=1;";
	
	$result = mysql_query($query, $connection);
	if($result) {
		//If successfuly updated
		header("Location: content.php");
		exit;
	} else {
		//Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
?>