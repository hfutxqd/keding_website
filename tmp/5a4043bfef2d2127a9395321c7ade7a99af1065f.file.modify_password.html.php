<?php /* Smarty version Smarty-3.0.8, created on 2015-08-13 11:04:23
         compiled from "F:\public_html\keding\new/tpl\modify_password.html" */ ?>
<?php /*%%SmartyHeaderCode:2517355cc5d9732c0f8-69518564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a4043bfef2d2127a9395321c7ade7a99af1065f' => 
    array (
      0 => 'F:\\public_html\\keding\\new/tpl\\modify_password.html',
      1 => 1438914168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2517355cc5d9732c0f8-69518564',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<head>
<link rel="shortcut icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<meta name="description" content="合肥科鼎电气有限公司批量生产各种类型的避雷器以及避雷器在线监测仪。" />
<meta name="Keywords" content="智能数字式避雷器在线监测仪,合肥避雷器，避雷器,合肥科鼎电气有限公司，避雷器在线监测仪，科鼎，合肥科鼎，氧化锌避雷器" />
<title>合肥科鼎电气有限公司</title>
<script src="js/jquery-1.4.4.min.js"></script>
<script src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="js/frame_sub.js"></script>
<link rel="stylesheet" href="css/password.css"/>
</head>
<body>
<div id="password_main">
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'modify_go'),$_smarty_tpl);?>
" method="post">
	旧密码：<br>
	<input type="password" name="old_password"/><br>
	新密码：<br>
	<input type="password" name="password1"/><br>
	确定密码：<br>
	<input type="password" name="password2"/><br>
	<input type="submit" value="修改密码"/>
	</form>
</div>
</body>

</html>