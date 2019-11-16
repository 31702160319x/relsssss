<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://#). All rights reserved. 

defined('IN_MET') or exit('No permission');

load::sys_func('common');
load::sys_func('power');
load::sys_func('array');
load::sys_class('mysql');
load::sys_class('cache');

/**
 * ajax����
 */
class ajax extends common {
	/**
	  * ��ʼ��
	  */
	public function __construct() {
		global $_M;//ȫ������$_M
		$this->load_form();//�?����
	}	
	
	/**
	  * ���
	  */
	public function __destruct(){
		global $_M;
		DB::close();//�ر���ݿ�����
		exit;
	}
} 

# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://#). All rights reserved.
?>