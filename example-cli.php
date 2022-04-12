<?php
include("phymoji.php");
$phymoji = new PhyMoji;
$emoji = $phymoji->phymoji(["solanales", "acer"]);
print($emoji["emoji"]."\n");