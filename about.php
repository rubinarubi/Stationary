<?php
session_start();
?>

<?php
if (isset($_SESSION['username']))
{
	$User = $_SESSION['username'];
}

else
{
	$User = "";
}
?>

<?php include("head1.html");?>

<?php 
if($User != "")
{
	include("top_links2.php");
}
else
{
	include("top_links.php");
}
?>
<div id="wrapper">

	<?php 
	if($User != "")
	{
		include("header2.php");
	}
	else
	{
		include("header.php");
	}
	?>
	
	<?php include("section.html"); ?>
	
		<div class="box mb0" id="about_us" >
			<div class="box-heading-1"><span>ABOUT US</span></div>
			<div class="box-content-1">
				<div class="box-product-1">
					<p>We are here for your services and we have a long tradition of this shop.</p>
				</div>
			</div>
		</div>
		
		<?php include("footer.php");?>
</div>
</body>
</html>