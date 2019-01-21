<div>
<?php
$maxpage = 80;
if(!isset($_SESSION["currentPage"]))
    $_SESSION["currentPage"] = 0;

if($_SESSION["currentPage"] > 1)
{
?>
<a href="page<?php echo ($_SESSION["currentPage"] -1); ?>.php">Previous </a>
<?php
}
if ($_SESSION["currentPage"] < $maxpage )
{
?>
<a href="page<?php echo ($_SESSION["currentPage"] +1); ?>.php">Next </a>
<?php
}
?>
</div>