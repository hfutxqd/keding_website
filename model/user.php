<?php
header("Content-Type:text/html;charset=utf8");
class user extends spModel{
    var $pk="id";
    var $table="user";
    public function login($username,$password){
        $conditions=array(
           'username'=>$username,
           'password'=>$password,
        );
        	if( $result = $this->find($conditions) ){ 
			spClass('spAcl')->set($result['acl_name']); 
            $result['password'] = md5($result['password']);
			$_SESSION["user"] = $result; 
			return true;
		}else{
			return false;
		}
    }
    
    public function modify_password($old_pwd, $password)
    {
        if(md5($old_pwd) == $_SESSION["user"]['password'])
        {
            $con['username'] = $_SESSION["user"]['username'];
            $this->update($con,'password',$password);
            return true;
        }else
        {
            return false;
        }
    }
}
?>