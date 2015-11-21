<?php
header("Content-Type:text/html;charset=utf8");
class products extends spModel{
    var $pk="id";
    var $table="products";
    public function add($title, $content)
    {
        $this->runSql("insert into products (title, content, time) values ('$title', '$content', now());");
        return true;
    }
    
    public function delete($id)
    {
        $this->runSql("delete from products where id = $id;");
        return true;
    }
}
?>