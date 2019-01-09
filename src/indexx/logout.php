<?php
session_start();

session_unset();
echo "<script type=\"text/javascript\">";
echo "window.location = \"index.php\"";
echo "</script>";
exit;

?>


