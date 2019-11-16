<?php
#
$a = @$_GET['a'] ? $_GET['a'] : 'dohits';

define('M_NAME', 'hits');
define('M_MODULE', 'web');
define('M_CLASS', 'hits');
define('M_ACTION', $a);
require_once '../app/system/entrance.php';

# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://#). All rights reserved.
?>
