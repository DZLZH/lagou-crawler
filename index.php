<?PHP
/**
 *  +--------------------------------------------------------------
 *  | Copyright (c) 2016 DZLZH All rights reserved.
 *  +--------------------------------------------------------------
 *  | Author: DZLZH <dzlzh@null.net>
 *  +--------------------------------------------------------------
 *  | Filename: index.php
 *  +--------------------------------------------------------------
 *  | Last modified: 2016-08-29 11:57
 *  +--------------------------------------------------------------
 *  | Description: 
 *  +--------------------------------------------------------------
 */


$automaticSignLog = file_get_contents('/root/automatic-sign/sing.log');
echo $automaticSignLog;