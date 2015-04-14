<?php

/**
 * author: 
 * date:
 * description: A class for...
 */
include_once ("adb.php");
class responses extends adb{

    
     function add_response($rs, $qid, $uid) {
        $str_query = "INSERT INTO `hciproject`.`hciproject_responses` (response, question_id, user_id) VALUES ( '$rs', $qid, $uid)";
//        echo $str_query;
        return $this->query($str_query);
    }
    
        function get_all_questions_by_question($id) {
        $str_query = "Select response_id, response, likes, dislikes, user_id from hciproject_responses where question_id = $id ORDER BY response_id DESC";
//            echo $str_query;
        return $this->query($str_query);
    }


   
}

?>


