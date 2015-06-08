<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php include("includes/header.php"); ?>
	<table id="structure">
		<tr>
			<td id="navigation">
				<?php echo navigation($sel_subject, $sel_page); ?>
				<br />
				<a href="new_subject.php">+ Add a new subject</a>
			</td>
			<td id="page">
			<h2>Heading edit</h2>
			<form action="update_heading.php" method="POST">
			Heading name: <input type="text" name="heading" value="<?php heading_for_edit(); ?>" />
			<input type="submit" name="submit" value="Update!" />
			</form>
			<a href="content.php">Cancel</a>
			</td>
		</tr>
	</table>
<?php require("includes/footer.php"); ?>