<?php /* Smarty version Smarty-3.0.8, created on 2015-08-13 03:57:58
         compiled from "E:\wamp\www\keding\new/tpl\manager.html" */ ?>
<?php /*%%SmartyHeaderCode:1040455cbf9a60e7bc9-87200013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '675b6e543163b4cc867df58c2f1ed7af8d5b8e9d' => 
    array (
      0 => 'E:\\wamp\\www\\keding\\new/tpl\\manager.html',
      1 => 1438914148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1040455cbf9a60e7bc9-87200013',
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
<link rel="stylesheet" href="css/mannger.css"/>
</head>
<body>
<div id="manager_main">
	<div id="search_box">
		<form target="content" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'manager_content'),$_smarty_tpl);?>
" method="post">
			请选择管理类别：
			<select name="type" id="select_k1">
		    <option value="news">新闻中心</option>
			<option value="projects">经典案例</option>
			<option value="products">产品中心</option>
			<option value="hirings">人才招聘</option>
		    </select>
			<input type="submit" value="管理"/>
		</form>
	</div>
	<div id="manager_content">
		<iframe name="content" id="content" 
			src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'manager_content','type'=>'news'),$_smarty_tpl);?>
">
		</iframe>
	</div>
	
</div>
</div>
</body>
</html>