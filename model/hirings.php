<?php
header("Content-Type:text/html;charset=utf8");
class hirings extends spModel
{
    var $pk="id";
    var $table="hirings";
    public function add($title, $content, $job, $wages, $eduction)
    {
        $this->runSql("insert into hirings (title, content, time, job, wages, eduction) values ('$title', '$content', now(), '$job', '$wages', '$eduction');");
        return true;
    }
    
    public function delete($id)
    {
        $this->runSql("delete from hirings where id = $id;");
        return true;
    }
    
    public function stop($id)
    {
        $this->runSql("update hirings set alive = 0 where id = $id;");
        return true;
    }
    public function updateDataBase()
    {
        $this->runSql("ALTER TABLE hirings CHANGE content content LONGTEXT;");
        $this->runSql("ALTER TABLE news CHANGE content content LONGTEXT;");
        $this->runSql("ALTER TABLE products CHANGE content content LONGTEXT;");
        $this->runSql("ALTER TABLE projects CHANGE content content LONGTEXT;");
    	return true;
    }
}
?>