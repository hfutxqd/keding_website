<?php /* Smarty version Smarty-3.0.8, created on 2015-08-07 03:08:23
         compiled from "E:\wamp\www\keding\new/tpl\hiring_article.html" */ ?>
<?php /*%%SmartyHeaderCode:2691855c405074025c4-06045896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0c612ab538656a46f7d26bf90fdd4756fbe3d77' => 
    array (
      0 => 'E:\\wamp\\www\\keding\\new/tpl\\hiring_article.html',
      1 => 1438909641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2691855c405074025c4-06045896',
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
<link rel="stylesheet" href="css/hirings_article.css"/>
</head>
<body>
<div id="article_main">
	<div id="article_title">
		<?php echo $_smarty_tpl->getVariable('article')->value['title'];?>

	</div>
	<div id="article_time">
		<?php echo $_smarty_tpl->getVariable('article')->value['time'];?>

	</div>
	职位：<?php echo $_smarty_tpl->getVariable('article')->value['job'];?>
<br>
	待遇：<?php echo $_smarty_tpl->getVariable('article')->value['wages'];?>
<br>
	待遇：<?php echo $_smarty_tpl->getVariable('article')->value['eduction'];?>
<br>
	当前状态：
	<?php if ($_smarty_tpl->getVariable('article')->value['alive']==1){?>
		正在招聘
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('article')->value['alive']==0){?>
		已过期
	<?php }?><br>
	备注：
	<?php echo $_smarty_tpl->getVariable('article')->value['content'];?>
<br>
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