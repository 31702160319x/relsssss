	<!--<?php defined('IN_MET') or exit('No permission');
require_once $this->template('own/static/config');
$pageset_iframe_src=$_COOKIE['page_iframe_url']?$_COOKIE['page_iframe_url']:"{$_M['url']['site']}index.php?lang={$_M['lang']}";
if(strpos($pageset_iframe_src, 'pageset=1')===false){
	if(strpos($pageset_iframe_src, '?')!==false){
		$pageset_iframe_src.='&pageset=1';
	}else{
		$pageset_iframe_src.='?pageset=1';
	}
}
$msecount = $msecount = DB::counter($_M['table']['infoprompt'], " WHERE (lang='{$_M['lang']}' or lang='metinfo') and see_ok='0'", "*");
if($_M['config']['met_agents_metmsg']){
	$met_agents_metmsg = '';
}else{
	$met_agents_metmsg = 'style="display:none;"';
}
if($_M['config']['met_agents_app']){
	$met_agents_app = '';
}else{
	$met_agents_app = 'style="display:none;"';
}
$query = "SELECT * FROM {$_M['table']['admin_column']} WHERE name='lang_checkupdate'";
$check_update = DB::get_one($query);
if($check_update['type'] == 2){
	$met_checkupdate = '';
}else{
	$met_checkupdate = 'style="display:none;"';
}
echo <<<EOT
--><!DOCTYPE HTML>
<html class='h-100p'>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta name="robots" content="noindex,nofllow">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui">
<meta name="format-detection" content="telephone=no">
<title>东关村后台可预览模式</title>
<meta name="generator" content="MetInfo {$_M['config']['metcms_v']}" data-variable="{$_M['url']['site']}|{$_M['lang']}||||pageset" />
<link href="{$_M['url']['site']}favicon.ico" rel="shortcut icon" type="image/x-icon" />
<!--
EOT;
foreach ($resui['css'] as $key=> $value) {
	if(!$key){
echo <<<EOT
-->
<link rel='stylesheet' type='text/css' href="{$value}">
<!--
EOT;
	}
}
if($resui_lteie9){
echo <<<EOT
-->
<script src="{$resui_lteie9['js'][0]}"></script>
<!--
EOT;
}
echo <<<EOT
-->
</head>
<!--[if lte IE 8]>
<div class="text-xs-center m-b-0 bg-blue-grey-100 alert">
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span aria-hidden="true">×</span>
    </button>
    {$_M['word']['browserupdatetips']}
</div>
<![endif]-->
<body class='h-100p cover'>
<header class='pageset-header h-50 bg-blue-grey-800 white page-head'>
	<div class="container-fluid">
<!--
EOT;
if($_M['config']['met_agents_pageset_logo']==1 || !isset($_M['config']['met_agents_pageset_logo'])){
echo <<<EOT
-->


<!--
EOT;
}
echo <<<EOT
-->
		<div class="container">
			<div class="row">
				<div class='vertical-align h-50'>
					<div class='vertical-align-middle w-full page-head-nav'>
						<button type="button" class="navbar-toggler hamburger hamburger-close collapsed h-50 m-r-0 page-nav-toggler" data-target=".page-nav-collapse" data-toggle="collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="hamburger-bar"></span>
		                </button>
		                <div class="collapse navbar-collapse navbar-collapse-toolbar p-0 page-nav-collapse">
		                	<a href="{$_M['config']['met_agents_linkurl']}" title='{$_M['word']['metinfo']}' target='_blank' class='vertical-align-middle white m-r-10 hidden-xl-up page-logo'><i class="icon metinfo-icon metinfo-icon-logobd font-size-18"></i> <span>{$_M['word']['loginmetinfo']}</span></a>
		                	<a class="btn btn-dark btn-outline white pageset-view" title='{$_M['word']['uisetTips4']}' target='_blank'>{$_M['word']['preview']}</a>
							<a href='javascript:;' class="btn btn-dark btn-outline white m-l-10 config-page" id='config-page' data-src='{$_M['url']['own_form']}a=doset_area&settype=doset_page_config&set_config=config-page' data-index_src='{$_M['url']['adminurl']}anyid=57&n=webset&c=webset&a=doindex' data-config-url='{$_M['url']['own_form']}a=doget_page_config' title='{$_M['word']['uisetTips5']}'>{$_M['word']['uisetTips6']}</a>
							<a href='javascript:;' class="btn btn-dark btn-outline m-l-10 white pageset-column" data-url='{$_M['url']['adminurl']}anyid=25&n=column&c=index&a=doindex' title='{$_M['word']['columumanage']}'>{$_M['word']['columumanage']}</a>
							<div class="btn-group m-l-10">
								<button class="btn btn-dark btn-outline white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">{$_M['word']['content']}</button>
								<ul class="dropdown-menu m-t-10" role="menu" aria-labelledby="adminuser">
									<a href="javascript:;" class='dropdown-item' data-url='{$_M['url']['adminurl']}anyid=68&n=content&c=content&a=doadd' title='{$_M['word']['addinfo']}'>{$_M['word']['addinfo']}</a>
									<a href="javascript:;" class='dropdown-item' data-url='{$_M['url']['adminurl']}anyid=29&n=manage&c=index&a=doindex' title='{$_M['word']['indexcontent']}'>{$_M['word']['indexcontent']}</a>
								</ul>
							</div>
							<div class="btn-group m-l-10">
								<button class="btn btn-dark btn-outline white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">{$_M['word']['skinstyle']}</button>
								<ul class="dropdown-menu m-t-10" role="menu" aria-labelledby="adminuser">
									<a href="javascript:;" class='dropdown-item config-public' id='config-public' data-src='{$_M['url']['own_form']}a=doset_area&settype=doset_public_config&set_config=config-public' data-config-url='{$_M['url']['own_form']}a=doget_public_config' title='{$_M['word']['style_settings']}'>{$_M['word']['style_settings']}</a>
								
									<a href="javascript:;" class='dropdown-item' data-url='{$_M['url']['adminurl']}n=banner&c=banner_admin&a=domanage' title='{$_M['word']['indexflash']}'>{$_M['word']['indexflash']}</a>
								</ul>
							</div>
							<a href='javascript:;' class="btn btn-dark btn-outline white m-l-10" data-url='{$_M['url']['adminurl']}anyid=10&n=language&c=language_admin&a=doindex' title='{$_M['word']['multilingual']}'>{$_M['word']['multilingual']}</a>
			
							<div class="pull-xs-right">
								<div class="btn-group m-l-10">
									<button class="btn btn-dark btn-outline white dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">{$_M['word']['moreSettings']}</button>
									<ul class="dropdown-menu dropdown-menu-right m-t-10" role="menu" aria-labelledby="adminuser">
										<a href="javascript:;" class='dropdown-item' data-url='{$_M['url']['adminurl']}anyid=57&n=webset&c=webset&a=doindex' title='{$_M['word']['baceinfo']}'>{$_M['word']['baceinfo']}</a>
									
										<a href="javascript:;" class='dropdown-item' data-url="{$_M['url']['adminurl']}anyid=47&n=admin&c=admin_admin&a=doindex" title='{$_M['word']['indexadminname']}'>{$_M['word']['indexadminname']}</a>
<!--
EOT;
$power = admin_information();
if($power['admin_group'] == '10000' || $power['admin_group'] == '3'){
echo <<<EOT
-->
									
<!--
EOT;
}
echo <<<EOT
-->
									</ul>
								</div>
								<a href='{$_M['url']['site_admin']}index.php?lang={$_M['lang']}' class="btn btn-dark btn-outline m-l-10 white" target='_blank'>{$_M['word']['oldBackstage']}</a>
<!--
EOT;
if(!$_M['config']['met_agents_switch']){
echo <<<EOT
-->

								</a>
<!--
EOT;
}
echo <<<EOT
-->
								<div class="btn-group m-l-10">
									<button type="button" class="btn btn-dark btn-outline white dropdown-toggle pageset-head-user" data-toggle="dropdown" title='{$power['admin_id']}'><span class='text-truncate inline-block'>{$power['admin_id']}</span></button>
									<ul class="dropdown-menu dropdown-menu-right m-t-10" role="menu" aria-labelledby="adminuser">
										<a href='javascript:;' class='dropdown-item' data-url="{$_M['url']['adminurl']}n=admin&c=admin_admin&a=doeditor_info" title='{$_M['word']['modify_information']}'>{$_M['word']['modify_information']}</a>
										<a href="{$_M['url']['adminurl']}n=login&c=login&a=dologinout" target="_top" class='dropdown-item'>{$_M['word']['indexloginout']}</a>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--
EOT;
if($adflag){
echo <<<EOT
-->
<div class="text-xs-center m-b-0 bg-blue-grey-100 alert pageset-tips">
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span aria-hidden="true">×</span>
    </button>
    <p class='font-size-16'>{$_M['word']['help2']}：<span class='red-600'>{$_M['word']['tips8_v6']}！</span></p>
    <div>
        <button type='button' class="btn btn-default no-prompt" data-url="{$_M['url']['adminurl']}anyid=&n=index&c=index&a=do_no_prompt" data-dismiss="alert">{$_M['word']['nohint']}</button>
        <a href="{$_M['url']['adminurl']}anyid=12&n=safe&c=index&a=doindex" target="_blank" class="btn btn-success m-l-50">{$_M['word']['tochange']}</a>
    </div>
</div>
<!--
EOT;
}
echo <<<EOT
-->
<iframe src="{$pageset_iframe_src}" class='page-iframe' frameborder="0" width="100%"></iframe>
<div class="modal fade modal-primary blockset-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content h-100p">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<input type="hidden" name='mid'>
				<input type="hidden" name='type'>
				<iframe data-src='{$_M['url']['own_form']}a=doset_area' class='blockset-iframe h-100p' frameborder="0" width="100%"></iframe>
			</div>
			<div class="modal-footer p-t-0">
				<button type="button" class="btn btn-default" data-dismiss="modal">{$_M['word']['indexonlieno']}</button>
				<button type="submit" class="btn btn-primary">{$_M['word']['Submit']}</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-primary content-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content h-100p">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<iframe data-src='{$_M['url']['own_form']}a=doset_content' class='content-iframe h-100p' frameborder="0" width="100%"></iframe>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-primary ueeditor-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content h-100p">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer p-t-0">
				<button type="button" class="btn btn-default" data-dismiss="modal">{$_M['word']['indexonlieno']}</button>
				<button type="submit" class="btn btn-primary">{$_M['word']['Submit']}</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-primary img-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content h-100p">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title">{$_M['word']['replaceImg']}</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" name='obj_img'>
				<iframe data-src='{$_M['url']['own_form']}a=doset_img' class='img-iframe h-500' frameborder="0" width="100%"></iframe>
			</div>
			<div class="modal-footer p-t-0">
				<button type="button" class="btn btn-default" data-dismiss="modal">{$_M['word']['indexonlieno']}</button>
				<button type="submit" class="btn btn-primary">{$_M['word']['Submit']}</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-primary icon-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content h-100p">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title">{$_M['word']['selectReplaceIcon']}</h4>
			</div>
			<div class="modal-body p-0"></div>
			<div class="modal-footer bg-blue-grey-100">
				<button type="button" class="btn btn-warning pull-xs-left back-iconlist" hidden>{$_M['word']['column_backiconlist_v6']}</button>
				<span class='m-r-20'>{$_M['word']['column_saveicon_v6']}</span>
				<button type="button" class="btn btn-default" data-dismiss="modal">{$_M['word']['indexonlieno']}</button>
				<button type="submit" class="btn btn-primary" data-get_url='{$_M['url']['own_form']}a=doset_icon' data-submit_url='{$_M['url']['own_form']}a=dosave_img'>{$_M['word']['Submit']}</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-primary nav-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content h-100p">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-primary config-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<input type="hidden" name='config_type'>
				<iframe id='config-index-iframe' class='config-iframe' frameborder="0" width="100%" height='700'></iframe>
				<iframe id='config-page-iframe' class='config-iframe' frameborder="0" width="100%" height='700'></iframe>
				<iframe id='config-public-iframe' class='config-iframe' frameborder="0" width="100%" height='700'></iframe>
			</div>
			<div class="modal-footer p-t-0">
				<button type="button" class="btn btn-default" data-dismiss="modal">{$_M['word']['indexonlieno']}</button>
				<button type="submit" class="btn btn-primary">{$_M['word']['Submit']}</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-primary functionEncy-modal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content h-100p">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title">{$_M['word']['funcCollection']}</h4>
			</div>
			<div class="modal-body">
				<iframe data-src='{$_M['url']['own_form']}a=dofunction_ency&pageset=1' class='functionEncy-iframe h-100p' frameborder="0" width="100%"></iframe>
			</div>
		</div>
	</div>
</div>
<menu class="met-menu">
    <li class="menu-item">
        <button type="button" class="menu-btn obj-remove">
            <i class="icon wb-eye-close"></i>
            <span class="menu-text">{$_M['word']['uisetTips8']}</span>
        </button>
    </li>
</menu>
<script>
var basepath='{$_M['url']['site_admin']}',
	met_alt="{$_M['config']['met_alt']}";
</script>
<!--
EOT;
foreach ($resui['js'] as $value) {
echo <<<EOT
-->
<script src="{$value}"></script>
<!--
EOT;
}
echo <<<EOT
-->
</body>
</html>
<!--
EOT;
?>-->