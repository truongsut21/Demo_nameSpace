<?php

require_once 'autoload.php';

use view\SyncBricksFromView;
use View\UtmTracking;
use Controllers\Helper\SendMessageTelegram;


$SendMessageTelegram = new SendMessageTelegram();
$SyncBricksFromView = new SyncBricksFromView();
$UtmTracking = new UtmTracking();


$SendMessageTelegram->showUrlFile();
$SyncBricksFromView->showUrlFile();
$UtmTracking->showUrlFile();
