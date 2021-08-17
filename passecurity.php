<?php
class Password{
    private $salt;
    private function Salt(){
        $salt = '';
        $length = rand(5,10);
        for($i = 0; $i < $length; $i++){
            $salt_c = chr(rand(33,126));
            $salt = $salt . $salt_c;

        }
        //echo 'salt:';
        //var_dump($salt);
        return $salt;
    }

    private function MD($pass, $salt){
        $md5_str = md5($pass . $salt);
        //echo 'md5_str:';
        //var_dump($md5_str);
        return $md5_str;
    }

    public function NEW_password($pass){
        $salt = $this->Salt();
        $md5_str = $this->MD($pass, $salt);
        //echo 'md5_str:';
        //var_dump($md5_str);
        return [$md5_str,$salt];
    }
    
    public function chacking($pas_log, $pass, $salt_z){
        $md5_pas = $this->MD($pass, $salt_z);
        if($pas_log === $md5_pas){
            return true;
        }
        return false;
    }
}


?>