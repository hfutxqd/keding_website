<?php
header("Content-Type:text/html;charset=utf8");
class news extends spModel
{
    var $pk="id";
    var $table="news";
    public function add_news($title, $content)
    {
        $this->runSql("insert into news (title, content, time) values ('$title', '$content', now());");
        return true;
    }
    
    public function delete($id)
    {
        $this->runSql("delete from news where id = $id;");
        return true;
    }
}
?>