<?php

namespace view;

use Controllers\SyncBricksFromController;

class SyncBricksFromView
{
    public function showUrlFile()
    {
        $SyncBricksFromController = new SyncBricksFromController();
        $SyncBricksFromController->showUrlFile();
        echo "<br>Đây là file sync_bricks_form: . " . __FILE__;
    }
}
