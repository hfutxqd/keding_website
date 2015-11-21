<?php
header("Content-Type:text/html;charset=utf8");
class reply extends spModel
{
    var $pk="id";
    var $table="reply";
    
    public function add($mess_id, $content)
    {
        $this->runSql("insert into reply (mess_id, content, time) values ($mess_id, '$content', now());");
        return true;
    }
    
    public function getAll($mess_id)
    {
        return $this->findAll("mess_id = $mess_id", 'time desc');
    }
}
?>