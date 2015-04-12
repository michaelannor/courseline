<?php

/**
 * author: 
 * date:
 * description: A class for...
 */
include_once ("adb.php");
class questions extends adb{

    function get_all_questions() {
        $str_query = "Select question_id, question, course_id, time_posted, user_id from hciproject_questions ORDER BY question_id DESC";
        return $this->query($str_query);
    }
    
    function add_question($qn, $cid, $uid) {
        $str_query = "INSERT INTO `hciproject`.`hciproject_questions` (question_id, question, course_id, time_posted, user_id) VALUES (NULL, '$qn', $cid, CURRENT_TIMESTAMP, $uid)";
//        echo $str_query;
        return $this->query($str_query);
    }


   
}

?>





