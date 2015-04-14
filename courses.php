<?php

/**
 * author: 
 * date:
 * description: A class for...
 */
include_once ("adb.php");
class courses extends adb{

    function get_all_courses() {
        $str_query = "Select course_id, course_tag, course_name from hciproject_courses";
        return $this->query($str_query);
    }
    
     function get_courses_by_id($id) {
        $str_query = "Select course_id, course_tag, course_name from hciproject_courses where course_id = $id";
        return $this->query($str_query);
    }
    
    


   
}

?>






