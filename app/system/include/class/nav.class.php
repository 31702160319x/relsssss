<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://#). All rights reserved. 

defined('IN_MET') or exit('No permission');

/**
 * ��������ѡ�
 * @param array $navlist  ����ѡ�����
 * @param int   $nav_show �Ƿ���ʾ����ѡ�
 */
class nav {
	
	public static $navlist;
	public static $nav_show = 1;
	
	/**
	 * ���õ���ѡ�
	 * @param int    $num   ����ѡ����
	 * @param string $title ����ѡ����
	 * @param string $url   ����ѡ���ַ
	 */
	public static function set_nav($num, $title, $url, $target='_self') {
		self::$navlist[$num]['title'] = $title;
		self::$navlist[$num]['url'] = $url;
		self::$navlist[$num]['classnow'] = "";
		self::$navlist[$num]['target'] = $target;
	}
	
	/**
	 * ���õ�ǰҳ��ĵ�����
	 * @param int    $num   ѡ������ѡ��ı��
	 * @param string $title �ڶ���������׷�ӵĵ�����һ�������ѡ������ѡ����ڲ�ҳ�棬��ʱ����ѡ���Ӱ�ء�
	 */
	public static function select_nav($num, $title = '') {
		global $_M;
		foreach (self::$navlist as $key => $val) {
			self::$navlist[$key]['classnow'] = '';
			self::$navlist[$key]['nav'] = '';
		}
		self::$navlist[$num]['classnow'] = "class='now'";
		if($title){
			self::$navlist[$num]['nav'] = ' > <a href="'.self::$navlist[$num]['url'].'">'.self::$navlist[$num]['title'].'</a> > '.$title."<div class='return'><a href='javascript:history.go(-1);'><i class='fa fa-chevron-left'></i>{$_M['word']['js55']}</a></div>";
			self::$nav_show = 0;
		}else{
			self::$navlist[$num]['nav'] = ' > '.self::$navlist[$num]['title'];
			self::$nav_show = 1;
		}
	}
	
	/**
	 * ��ȡ����ѡ�����
	 * @return string ����ѡ�����
	 */
	public static function get_nav() {
		if(self::$nav_show == 1){
			return self::$navlist;
		}else{
			return false;
		}
	}
	
	/**
	 * ��ȡ��������html����
	 * @return string ��������html����
	 */
	public static function get_select_navhtml() {
		foreach (self::$navlist as $key => $val) {
			if ($val['nav']) {
				return $val['nav'];
			}
		}
	}
}

# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://#). All rights reserved.
?>