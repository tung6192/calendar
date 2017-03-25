<?php
/*
* Include necessary files
*/
include_once '../sys/core/init.inc.php';
/*
* Load the calendar for January
*/
$cal = new Calendar($dbo, date_default_timezone_get());
/*
* Set up the page title and CSS files
*/
$page_title = "Events Calendar";
$css_files = array('style.css','admin.css','ajax.css');
/*
* Include the header
*/
include_once 'assets/common/header.inc.php';
?>

<div id="content">
	<?php
	/*
	* Display the calendar HTML
	*/
		echo $cal->buildCalendar();

	?>
</div><!-- end #content -->
<p>
	<?php
		echo isset($_SESSION['user']) ? "Logged In!" : "Logged Out!";
	?>
</p>
<?php
/*
* Include the footer
*/
include_once 'assets/common/footer.inc.php';
?>