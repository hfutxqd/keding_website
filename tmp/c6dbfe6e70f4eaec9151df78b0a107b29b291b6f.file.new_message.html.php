<?php /* Smarty version Smarty-3.0.8, created on 2015-08-04 09:37:05
         compiled from "E:\wamp\www\keding\new/tpl\new_message.html" */ ?>
<?php /*%%SmartyHeaderCode:1162755c06ba13b3858-02212673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6dbfe6e70f4eaec9151df78b0a107b29b291b6f' => 
    array (
      0 => 'E:\\wamp\\www\\keding\\new/tpl\\new_message.html',
      1 => 1438673704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1162755c06ba13b3858-02212673',
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
<script type="text/javascript" src="js/frame_sub.js"></script>
<link rel="stylesheet" href="css/message.css"/>

</head>

<body>
<div id="message_main">
	<div id="talk_title">
	</div>
	<div id="message_content">
		<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'new_message_go'),$_smarty_tpl);?>
" method="post">
			留言内容：<br>
			<textarea name="content"></textarea><br>
			您的联系方式：
			<input type="text" class="text" name="contact"/><br>
			<input type="submit" class="button" value="留言"/>
		</form>
	</div>
</div>
</body>

</html>