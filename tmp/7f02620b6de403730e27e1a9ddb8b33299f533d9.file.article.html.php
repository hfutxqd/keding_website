<?php /* Smarty version Smarty-3.0.8, created on 2015-08-18 07:40:34
         compiled from "F:\public_html\keding\new/tpl\article.html" */ ?>
<?php /*%%SmartyHeaderCode:2612655d2c552619a19-54388842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f02620b6de403730e27e1a9ddb8b33299f533d9' => 
    array (
      0 => 'F:\\public_html\\keding\\new/tpl\\article.html',
      1 => 1438914220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2612655d2c552619a19-54388842',
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
<link rel="stylesheet" href="css/article.css"/>
</head>
<body>
<div id="article_main">
	<div id="article_title">
		<?php echo $_smarty_tpl->getVariable('article')->value['title'];?>

	</div>
	<div id="article_time">
		<?php echo $_smarty_tpl->getVariable('article')->value['time'];?>

	</div>
	<div id="article_content">
		<?php echo $_smarty_tpl->getVariable('article')->value['content'];?>

	</div>
</div>
</div>
<script>
	function calcPageHeight(doc) {
        var cHeight = Math.max(doc.body.clientHeight, doc.documentElement.clientHeight)
        var sHeight = Math.max(doc.body.scrollHeight, doc.documentElement.scrollHeight)
        var height  = Math.max(cHeight, sHeight)
        return height
    }
    var height = calcPageHeight(document);
   	parent.document.getElementById('win').style.height = height + 'px';
</script>
</body>
</html>