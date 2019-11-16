<!--<?php
# MetInfo Enterprise Content Management System
# Copyright (C) MetInfo Co.,Ltd . All rights reserved.
// 判断来源页面是否有pageset=1 ，如果有而本页url没有pageset=1，则本页加上pageset=1跳转
if(strpos($_SERVER["HTTP_REFERER"], 'pageset=1')!==false && !$_M['form']['pageset'] && !$_M['form']['no_pageset']){
    echo '--><script>
        var newurl=location.href;
        if(location.search!=""){
            newurl+="&pageset=1";
        }else{
            newurl+="?pageset=1";
        }
        location.href=newurl;
    </script>';
    die;
}
$msecount = $db->counter($_M['table']['infoprompt'], " WHERE lang='{$_M[lang]}' and see_ok='0'", "*");
$_M['url']['adminurl'] = $_M['url']['site'].$met_adminfile."/index.php?lang={$lang}&";
if($_M[config][met_agents_type] > 2) $met_agents_display = "style=\"display:none\"";
function is_strinclude($str, $needle, $type = 0){
	if(!$needle) return false;
	$flag = true;
	if(function_exists('stripos')){
		if($type == 0){
			if(stripos($str, $needle) === false){
				$flag = false;
			}
		}else if($type == 1){
			if(strpos($str, $needle) === false){
				$flag = false;
			}
		}
	}else{
		if($type == 0){
			if(stristr($str, $needle) === false){
				$flag = false;
			}
		}else if($type == 1){
			if(strstr($str, $needle) === false){
				$flag = false;
			}
		}
	}
	return $flag;
}
$head_hide=$_M['form']['pageset']?' hide':'';
echo <<<EOT
-->

<SCRIPT language=JavaScript>
var langtime;
	$(".metcms_top_right_box li.lang").hover(function(){
		clearTimeout(langtime);
		var dl = $(this).find("dl");
		langtime = setTimeout(function () { dl.show();  }, "200");
	},function(){
		clearTimeout(langtime);
		var dl = $(this).find("dl");
		dl.hide();
	});
	var str = window.parent.document.URL;
	var s = str.indexOf(lang);
	var str1 = window.location.href;
	var s1 = str1.indexOf('switch=1');
	if(s == '-1' && s1 != '-1'){
		str = str.replace(/(lang=[^#]*#)/g,"lang="+lang+"#");
		parent.location.href=str;
	}
</SCRIPT>
<!--
EOT;
// require_once "../../app/system/include/public/ui/admin/function_ency.php";
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved.
?>
