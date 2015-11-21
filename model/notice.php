<?php
header("Content-Type:text/html;charset=utf8");
class notice extends spModel{
    var $pk="id";
    var $table="notice";
    public function update($content)
    {
        $this->runSql("update notice set content = '$content';");
        return true;
    }
}
?>