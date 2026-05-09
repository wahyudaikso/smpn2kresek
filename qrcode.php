<?php

include "phpqrcode/qrlib.php";

$nisn = $_GET['nisn'];

QRcode::png($nisn);

?>
