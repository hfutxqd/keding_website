<?php
header("Content-Type:text/html;charset=utf8");
class messages extends spModel{
    var $pk="id";
    var $table="messages";
    public function add($content, $contact)
    {
        $this->runSql("insert into messages (content,contact,time) values ('$content', '$contact', now());");
        return true;
    }
    
    public function delete($id)
    {
        $this->runSql("delete from reply where mess_id=$id;");
        $this->runSql("delete from messages where id=$id;");
        return true;
    }
    
    public function findById($id)
    {
        return $this->find(" id = $id ");
    }
}
?>