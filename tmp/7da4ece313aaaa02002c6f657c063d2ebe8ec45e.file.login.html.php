<?php /* Smarty version Smarty-3.0.8, created on 2015-08-13 03:39:56
         compiled from "E:\wamp\www\keding\new/tpl\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3078655cbf56ce2eec6-86589195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7da4ece313aaaa02002c6f657c063d2ebe8ec45e' => 
    array (
      0 => 'E:\\wamp\\www\\keding\\new/tpl\\login.html',
      1 => 1439429927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3078655cbf56ce2eec6-86589195',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统登陆</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
<style type="text/css">
.download{margin:20px 33px 10px;*margin-bottom:30px;padding:5px;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;background:#e6e6e6;border:1px dashed #df0031;font-size:14px;font-family:Comic Sans MS;font-weight:bolder;color:#555}
.download a{padding-left:5px;font-size:14px;font-weight:normal;color:#555;text-decoration:none;letter-spacing:1px}
.download a:hover{text-decoration:underline;color:#36F}
.download span{float:right}
</style>
</head>

<body>
<div class="main">
	<div class="header hide"> 合肥科鼎电气 </div>
	<div class="content">
		<div class="title hide">管理登录</div>
		<form name="login" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'logingo'),$_smarty_tpl);?>
" method="post">
			<fieldset>
				<div class="input">
					<input class="input_all name" name="username" id="name" placeholder="用户名" type="text" onFocus="this.className='input_all name_now';" onBlur="this.className='input_all name'" maxLength="24" />
				</div>
				<div class="input">
					<input class="input_all password" name="password" id="password" type="password" placeholder="密码" onFocus="this.className='input_all password_now';" onBlur="this.className='input_all password'" maxLength="24" />
				</div>
				<div class="enter">
					<input class="button hide" name="submit" type="submit" value="登录" />
				</div>
			</fieldset>
		</form>
	</div>
</div>
<script type="text/javascript" src="js/placeholder.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="js/belatedpng.js" ></script>
<script type="text/javascript">
	DD_belatedPNG.fix("*");
</script>
<![endif]--></body>
</html>
