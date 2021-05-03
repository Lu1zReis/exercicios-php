<?php
$file = 'Arquivo/IV RED_4.º EDF_20FEV-19MAR2021.pdf';
$filename = 'Custom file.pdf name for IV RED_4.º EDF_20FEV-19MAR2021.pdf'; /* Note: Always use .pdf at the end. */

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="'.$filename.'"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: '.filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);