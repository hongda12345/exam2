<?php
include 'db.php';
$sql="select paperextra.*,paper.pname,test.tname from paperextra,paper,test where paperextra.pid=paper.pid and paperextra.tid=test.tid";
$data=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);