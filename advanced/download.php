<?php
$file_url = "http://localhost:3000/advanced/uploads/pp.jpg";
header('Content_Type: application/octet-stream');
header('Content-Transfer-Encoding: Binary');
header('Content-disposition: attachment; filename=\"".basename($file_url)."\"');
readfile($file_url);
