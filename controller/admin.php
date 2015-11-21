<?php
header("Content-Type:text/html;charset=utf8"); 
class admin extends spController
{
	function index(){
		$this->display("admin_index.html");
	}
	
	function execSql()
	{
		$SQL = $this->spArgs('SQL');
		spClass('user')->runSql($SQL);
	}

	function update()
	{
		if(spClass('hirings')->updateDataBase())
		{
			$this->success("成功！");
		}else{
			$this->success("失败！");
		}
	}
	
	function login()
	{
		$this->display("login.html");
	}
	
	function logingo()
	{
		$username = $this->spArgs('username');
		$password = $this->spArgs('password');
		$res = spClass('user')->login($username,$password);
		if($res)
		{
			$this->jump(spUrl('admin','index'));
		}else{
			$this->error("用户名或密码错误，请重新输入！");
		}
	}
	
	function logout()
	{
		$_SESSION = array();
		session_destroy();
		$this->success("成功退出！", spUrl('admin','login'));
	}
	
	function test()
	{
		var_dump($_SESSION);
	}
	
	function home()
	{
		$this->display("admin_home.html");
	}
	
	function change_notice()
	{
		$res = spClass('notice')->find();
		$this->notice = $res['content'];
		$this->display("change_notice.html");
	}
	
	function change_notice_go()
	{
		$content = $this->spArgs('content');
		spClass('notice')->update($content);
		$this->success('更改成功！');
	}
	
	function add_hiring()
	{
		$this->display("add_hiring.html");
	}
	
	function add_hiring_go()
	{
		$title = $this->spArgs('title');
		$content = $this->spArgs('content');
		$job = $this->spArgs('job');
		$wages = $this->spArgs('wages');
		$eduction = $this->spArgs('eduction');
		if(spClass('hirings')->add($title, $content, $job, $wages, $eduction))
		{
			$this->success('发布成功！');
		}
	}
	
	function add_project()
	{
		$this->display("add_project.html");
	}
	
	function add_project_go()
	{
		$title = $this->spArgs('title');
		$content = $this->spArgs('content');
		if(spClass('projects')->add($title, $content))
		{
			$this->success('发布成功！');
		}
	}
	
	function add_product()
	{
		$this->display("add_product.html");
	}
	
	function add_product_go()
	{
		$title = $this->spArgs('title');
		$content = $this->spArgs('content');
		if(spClass('products')->add($title, $content))
		{
			$this->success('发布成功！');
		}
	}
	
	function add_news()
	{
		$this->display("add_news.html");
	}
	
	function add_news_go()
	{
		$title = $this->spArgs('title');
		$content = $this->spArgs('content');
		if(spClass('news')->add_news($title, $content))
		{
			$this->success('发布成功！');
		}
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
		$this->display("manager_talk.html");
	}
	
	function reply()
	{
		$id = $this->spArgs('id');
		$this->message = spClass('messages')->findById($id);
		$this->display('reply.html');
	}
	
	function reply_go()
	{
		$id = $this->spArgs('id');
		$content = $this->spArgs('content');
		if(spClass('reply')->add($id, $content))
		{
			$this->success('回复成功！',spUrl('admin','talk'));
		}else{
			$this->success('操作异常！',spUrl('admin','talk'));
		}
	}
	
	function stop()
	{
		$id = $this->spArgs('id');
		if(spClass('hirings')->stop($id))
		{
			$this->success('已停止该项招聘!');
		}else{
			$this->success('操作异常!');
		}
		
	}
	function delete()
	{
		$type = $this->spArgs('type');
		$id = $this->spArgs('id');
		$res = false;
		switch($type)
		{
			case 'messages':
				$res = spClass('messages')->delete($id);
				if($res)
				{
					$this->success('删除成功!',spUrl('admin','talk'));
				}else{
					$this->success('操作异常!',spUrl('admin','talk'));
				}
				return;
			break;
			case 'news':
				$res = spClass('news')->delete($id);
			break;
			case 'hirings':
				$res = spClass('hirings')->delete($id);
			break;
			case 'projects':
				$res = spClass('projects')->delete($id);
			break;
			case 'products':
				$res = spClass('products')->delete($id);
			break;
		}
		if($res)
		{
			$this->success("删除成功!","/index.php?c=admin&a=manager_content&type=$type");
		}else{
			$this->success('操作异常!');
		}
	}
	
	function manager()
	{
		$this->display("manager.html");
	}
	
	function manager_content()
	{
		$type = $this->spArgs('type');
		$content = spClass($type);
		$res = $content->spPager($this->spArgs('page', 1), 8)->findSql("select * from $type order by time desc");
		foreach($res as $key=>$value)
		{
			$res[$key]['title'] = strip_tags($res[$key]['title']);
		}
		$this->results = $res;
		$this->type = $type;
		$this->pager = $content->spPager()->getPager();
		$this->display("manager_content.html");
	}
	
	function modify_password()
	{
		$this->display("modify_password.html");
	}
	
	function modify_go()
	{
		$old_pwd = $this->spArgs('old_password');
		$pwd1 = $this->spArgs('password1');
		$pwd2 = $this->spArgs('password2');
		if($pwd1 == $pwd2)
		{
			if(spClass('user')->modify_password($old_pwd, $pwd1))
			{
				$_SESSION = array();
				session_destroy();
				$this->success('密码修改成功!请重新登陆');
				
			}else{
				$this->error('原密码输入错误!');
			}
		}else{
			$this->error('两次密码输入不一致！');
		}
	}
}