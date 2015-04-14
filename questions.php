<?php

/**
 * author: 
 * date:
 * description: A class for...
 */
include_once ("adb.php");
class questions extends adb{

    function get_all_questions() {
        $str_query = "Select question_id, question, q.course_id as qcid , course_tag, time_posted, user_id from hciproject_questions q inner join hciproject_courses c on q.course_id = c.course_id ORDER BY question_id DESC";
        return $this->query($str_query);
    }
    

    
    function add_question($qn, $cid, $uid) {
        $str_query = "INSERT INTO `hciproject`.`hciproject_questions` (question_id, question, course_id, time_posted, user_id) VALUES (NULL, '$qn', $cid, CURRENT_TIMESTAMP, $uid)";
//        echo $str_query;
        return $this->query($str_query);
    }
    
        function get_course_questions($id){
        $str_query = "select question, question_id,course_name, q.course_id as qcid from hciproject_questions q inner join hciproject_courses c on q.course_id = c.course_id where q.course_id = $id";
        return $this->query($str_query);
    }
    
    function get_question($id){
           $str_query = "select question, question_id, q.course_id as qcid, course_tag, user_id from hciproject_questions q inner join hciproject_courses c on q.course_id = c.course_id where question_id = $id";
//        echo $str_query;
        return $this->query($str_query);
    }


   
}

?>





