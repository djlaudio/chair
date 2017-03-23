<?php

$sell = SellData::update_status($_GET["id"]);

$id=$_GET["id"];

print "<script>window.location='index.php?view=onesell&id=$id';</script>";

?>


