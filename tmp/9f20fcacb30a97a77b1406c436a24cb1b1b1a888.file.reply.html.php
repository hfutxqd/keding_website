<?php /* Smarty version Smarty-3.0.8, created on 2015-08-05 03:30:36
         compiled from "E:\wamp\www\keding\new/tpl\reply.html" */ ?>
<?php /*%%SmartyHeaderCode:1028355c1673c261ab9-70131667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f20fcacb30a97a77b1406c436a24cb1b1b1a888' => 
    array (
      0 => 'E:\\wamp\\www\\keding\\new/tpl\\reply.html',
      1 => 1438738180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1028355c1673c261ab9-70131667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<head>
<link rel="shortcut icon" href="favicon.ico">
<meta charset="UTF8">
<meta name="description" content="合肥科鼎电气有限公司批量生产各种类型的避雷器以及避雷器在线监测仪。" />
<meta name="Keywords" content="智能数字式避雷器在线监测仪,合肥避雷器，避雷器,合肥科鼎电气有限公司，避雷器在线监测仪，科鼎，合肥科鼎，氧化锌避雷器" />
<title>合肥科鼎电气有限公司</title>
<script src="js/jquery-1.4.4.min.js"></script>
<script src="js/slides.min.jquery.js"></script>
<link rel="stylesheet" href="css/reply.css"/>
</head>
<body>
<div id="reply_main">
	<div id="message">
		留言内容：<br>
		<?php echo $_smarty_tpl->getVariable('message')->value['content'];?>
<br>
		联系方式：<br>
		<?php echo $_smarty_tpl->getVariable('message')->value['contact'];?>
<br>
		留言时间：<br>
		<span><?php echo $_smarty_tpl->getVariable('message')->value['time'];?>
</span>
	</div>
	<div id="reply">
		<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'reply_go'),$_smarty_tpl);?>
" method="post">
		回复内容：<br>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('message')->value['id'];?>
"/>
		<textarea name="content"></textarea><br>
		<input type="submit" value="提交"/>
		</form>
	</div>
</div>
</div>
</body>
</html>