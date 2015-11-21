<?php /* Smarty version Smarty-3.0.8, created on 2015-08-18 09:13:00
         compiled from "F:\public_html\keding\new/tpl\change_notice.html" */ ?>
<?php /*%%SmartyHeaderCode:3135755d2dafc2a4b77-31941219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df729c6219ca833f29b6bc59df1a36866fd326e1' => 
    array (
      0 => 'F:\\public_html\\keding\\new/tpl\\change_notice.html',
      1 => 1439881977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3135755d2dafc2a4b77-31941219',
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
<link rel="stylesheet" href="css/add_news.css"/>
<link rel="stylesheet" href="themes/default/default.css" />
<script charset="utf-8" src="kindeditor-min.js"></script>
<script charset="utf-8" src="lang/zh_CN.js"></script>
</head>

<body>
<div id="news_main">
	<span><h1>更改滚动内容</h1></span>
	<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'change_notice_go'),$_smarty_tpl);?>
" method="post">
	内容：
	<textarea name="content" style="width:800px;height:400px;visibility:hidden;">
		<?php echo $_smarty_tpl->getVariable('notice')->value;?>

	</textarea>
<br>
	<input type="submit" value="更改"/>
	</form>
</div>
<script>
KindEditor.ready(function(K) {
		K.create('textarea[name="content"]', {
			themeType : 'default',
			items : [
				'bold','italic','underline','fontname','fontsize','forecolor','hilitecolor','plug-align','plug-order','plug-indent'
			]
		});
		K.each({
		'plug-align' : {
			name : '对齐方式',
			method : {
				'justifyleft' : '左对齐',
				'justifycenter' : '居中对齐',
				'justifyright' : '右对齐'
			}
		},
		'plug-order' : {
			name : '编号',
			method : {
				'insertorderedlist' : '数字编号',
				'insertunorderedlist' : '项目编号'
			}
		},
		'plug-indent' : {
			name : '缩进',
			method : {
				'indent' : '向右缩进',
				'outdent' : '向左缩进'
			}
		}
	},function( pluginName, pluginData ){
		var lang = {};
		lang[pluginName] = pluginData.name;
		KindEditor.lang( lang );
		KindEditor.plugin( pluginName, function(K) {
			var self = this;
			self.clickToolbar( pluginName, function() {
				var menu = self.createMenu({
						name : pluginName,
						width : pluginData.width || 100
					});
				K.each( pluginData.method, function( i, v ){
					menu.addItem({
						title : v,
						checked : false,
						iconClass : pluginName+'-'+i,
						click : function() {
							self.exec(i).hideMenu();
						}
					});
				})
			});
		});
	});
	});
</script>
</body>

</html>