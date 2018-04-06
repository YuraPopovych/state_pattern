<?php


require_once 'Task.php';
require_once 'TaskStatus.php';
require_once 'status/Opened.php';
require_once 'status/InProgres.php';
require_once 'status/Resolved.php';
require_once 'status/ReOpened.php';
require_once 'status/Verified.php';
require_once 'status/Closed.php';

$open = new Opened();
$task = new Task($open);
$task -> in_progres();
$task -> resolved();
$task -> verified();
$task -> closed();
$task -> in_progres();
/*
#OUTPUT:#
Opened status
In progres status
Resolved status
Verified status
Closed status
This action isn't allowed!
Fatal error: Uncaught TypeError:
 */


?>