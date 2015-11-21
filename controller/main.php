<?php
header("Content-Type:text/html;charset=utf8"); 
class main extends spController
{
	function index(){
		$res = spClass('notice')->find();
		$this->notice = $res['content'];
		$this->display("frame.html");
	}
	
	function home()
	{
		$news = spClass('news')->findSql("select * from news order by time desc limit 6;");
		$hiring = spClass('hirings')->findSql("select * from hirings order by time desc limit 6;");
		$project = spClass('projects')->findSql("select * from projects order by time desc limit 6;");
		$product = spClass('products')->findSql("select * from products order by time desc limit 6;");
		strip_tags();
		foreach($news as $key=>$value)
		{
			$news[$key]['title'] = strip_tags($news[$key]['title']);
		}
		foreach($hiring as $key=>$value)
		{
			$hiring[$key]['title'] = strip_tags($hiring[$key]['title']);
		}
		foreach($project as $key=>$value)
		{
			$project[$key]['title'] = strip_tags($project[$key]['title']);
		}
		foreach($product as $key=>$value)
		{
			$product[$key]['title'] = strip_tags($product[$key]['title']);
		}
		$this->news = $news;
		$this->hiring  = $hiring;
		$this->project  = $project;
		$this->product = $product;
		$this->display("index.html");
	}
	
	function about()
	{
		$this->display("about.html");
	}
	
	function map()
	{
		$this->display("map2.html");
	}
	
	function hiring()
	{
		$hiring = spClass('hirings');
		$res = $hiring->spPager($this->spArgs('page', 1), 8)->findSql("select * from hirings order by time desc");
		foreach($res as $key=>$value)
		{
			$res[$key]['title'] = strip_tags($res[$key]['title']);
		}
		$this->results = $res;
		$this->pager = $hiring->spPager()->getPager();
		$this->display("hiring.html");
	}
	
	function project()
	{
		$project= spClass('projects');
		$res = $project->spPager($this->spArgs('page', 1), 8)->findSql("select * from projects order by time desc");
		foreach($res as $key=>$value)
		{
			$res[$key]['title'] = strip_tags($res[$key]['title']);
		}
		$this->results = $res;
		$this->pager = $project->spPager()->getPager();
		$this->display("project.html");
	}
	
	function product()
	{
		$product= spClass('products');
		$res = $product->spPager($this->spArgs('page', 1), 8)->findSql("select * from products order by time desc");
		foreach($res as $key=>$value)
		{
			$res[$key]['title'] = strip_tags($res[$key]['title']);
		}
		$this->results = $res;
		$this->pager = $product->spPager()->getPager();
		$this->display("product.html");
	}
	
	function news()
	{
		$news = spClass('news');
		$res = $news->spPager($this->spArgs('page', 1), 8)->findSql("select * from news order by time desc");
		foreach($res as $key=>$value)
		{
			$res[$key]['title'] = strip_tags($res[$key]['title']);
		}
		$this->results = $res;
		$this->pager = $news->spPager()->getPager();
		
		$this->display("news.html");
	}
	
	function talk()
	{
		$messages = spClass('messages');
		$results = $messages->spPager($this->spArgs('page', 1), 8)->findSql("select * from messages order by time desc");
		foreach($results as $key=>$value)
		{
			$reply[$value['id']] = spClass('reply')->getAll($value['id']);
		}
		$this->results = $results;
		$this->reply = $reply;
		$this->pager = $messages->spPager()->getPager();
		$this->display("talk.html");
	}
	
	function new_message()
	{
		$this->display("new_message.html");
	}
	
	function new_message_go()
	{
		$content = $this->spArgs('content');
		$contact = $this->spArgs('contact');
		if($content == '' || $content == null)
		{
			$this->error('内容为空，已舍弃。');
		}
		spClass('messages')->add($content, $contact);
		$this->success("感谢您的留言，我们会及时做出回复，谢谢。", spUrl('main', 'talk'));
	}
	
	function article()
	{
		$type = $this->spArgs('type');
		$id = $this->spArgs('id');
		$con['id'] = $id;
		switch($type)
		{
			case 'news':
				$res = spClass('news')->find($con);
				$this->article = $res;
			break;
			case 'projects';
				$res = spClass('projects')->find($con);
				$this->article = $res;
			break;
			case 'products':
				$res = spClass('products')->find($con);
				$this->article = $res;
			break;
			case 'hirings':
				$res = spClass('hirings')->find($con);
				$this->article = $res;
				$this->display('hiring_article.html');
				return;
			break;
		}
		$this->display('article.html');
	}
	
	
}