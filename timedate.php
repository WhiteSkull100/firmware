<?php
header('Content-Type: application/json');
date_default_timezone_set('Asia/Kuala_Lumpur');
echo json_encode(array("datetime" => date('Y-m-d H:i:s')));
?>
