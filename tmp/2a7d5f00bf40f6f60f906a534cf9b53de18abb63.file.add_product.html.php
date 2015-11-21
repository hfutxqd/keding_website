<?php /* Smarty version Smarty-3.0.8, created on 2015-08-05 07:26:49
         compiled from "E:\wamp\www\keding\new/tpl\add_product.html" */ ?>
<?php /*%%SmartyHeaderCode:255755c19e99800c56-41520355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a7d5f00bf40f6f60f906a534cf9b53de18abb63' => 
    array (
      0 => 'E:\\wamp\\www\\keding\\new/tpl\\add_product.html',
      1 => 1438752388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255755c19e99800c56-41520355',
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
<link rel="stylesheet" href="css/add_news.css"/>
<link rel="stylesheet" href="themes/default/default.css" />
<script charset="utf-8" src="kindeditor-min.js"></script>
<script charset="utf-8" src="lang/zh_CN.js"></script>
<script>
	var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					allowFileManager : true
				});
			});

</script>
</head>

<body>
<div id="news_main">
	<span><h1>发布产品</h1></span>
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'add_product_go'),$_smarty_tpl);?>
" method="post">
	标题：
	<input type="text" name="title" class="text_title"/><br>
	内容：
	<textarea name="content" style="width:800px;height:400px;visibility:hidden;">
	</textarea>
<br>
	<input type="submit" value="发布"/>
	</form>
</div>
</body>

</html>