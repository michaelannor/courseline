<?php

/**
 * author: 
 * date:
 * description: A class for...
 */
include_once ("adb.php");
class questions extends adb{

    function get_all_questions() {
        $str_query = "Select question_id, question, course_id, time_posted, user_id from hciproject_questions";
        return $this->query($str_query);
    }
    


   
}

?>





