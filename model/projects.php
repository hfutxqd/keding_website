<?php
header("Content-Type:text/html;charset=utf8");
class projects extends spModel{
    var $pk="id";
    var $table="projects";
    public function add($title, $content)
    {
        $this->runSql("insert into projects (title, content, time) values ('$title', '$content', now());");
        return true;
    }
    
    public function delete($id)
    {
        $this->runSql("delete from projects where id = $id;");
        return true;
    }
}
?>