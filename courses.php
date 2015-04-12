<?php

/**
 * author: 
 * date:
 * description: A class for...
 */
include_once ("adb.php");
class courses extends adb{

    function get_all_courses() {
        $str_query = "Select course_id, course_tag from hciproject_courses";
        return $this->query($str_query);
    }
    


   
}

?>






