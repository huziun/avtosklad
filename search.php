<?php
class Search{
    function search ($query) { 
        $query = trim($query); 
        $query = mysql_real_escape_string($query);
        $query = htmlspecialchars($query);
    
        if (!empty($query)) { 
            if(True)
                $q = "SELECT `name`, `cod`, `car` FROM `product` WHERE `text` LIKE '%$query%'";
    
                $result = mysql_query($q);
    
                if (mysql_affected_rows() > 0) {  
                    $row = mysql_fetch_assoc($result); 
                    $num = mysql_num_rows($result);
    
                    $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';
                    //var_dump($text);  
        return $text; 
    } 
}
    }
}
?>