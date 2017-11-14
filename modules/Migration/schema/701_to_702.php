<?php
/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *********************************************************************************/

if(defined('VTIGER_UPGRADE')) {
	global $adb, $current_user;
	$db = PearDatabase::getInstance();

	$modulesList = array('Mobile' => 'packages/vtiger/mandatory/Mobile.zip');
	foreach ($modulesList as $moduleName => $packagePath) {
		$moduleInstance = Vtiger_Module::getInstance($moduleName);
		if ($moduleInstance) {
			updateVtlibModule($moduleName, $packagepath);
		} else {
			installVtlibModule($moduleName, $packagePath);
		}
	}
}