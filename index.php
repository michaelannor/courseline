<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Courseline</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
<!--      <link href="dist/css/flat-ui.css" rel="stylesheet">-->
<!--      <link rel="stylesheet" href="../dist/css/flat-ui.css">-->
            <link href="dist/fonts/glyphicons/flat-ui-icons-regular.ttf" rel="stylesheet">
<!--            <link href="dist/js/flat-ui.min.js" rel="stylesheet">-->
<!--      <link href="dist/js/flat-ui.min.js" rel="stylesheet">-->
      <link href="dist/js/flat-ui.min.js" rel="stylesheet">
<link href="dist/css/flat-ui.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      
      <nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
      <span class="sr-only">Toggle navigation</span>
    </button>
    <a class="navbar-brand" href="index.php">Courseline</a>
  </div>
  <div class="collapse navbar-collapse navbar-right" id="navbar-collapse-01">
      
          <form class="navbar-form navbar-left" action="#" role="search">
      <div class="form-group">
        <div class="input-group">
          <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
          <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>
        </div>
      </div>
    </form>
      
    <ul class="nav navbar-nav">
      <li class="active"><a href="#fakelink" class="fa fa-user">&nbsp;&nbsp;</a></li>
      <li><a href="#fakelink" class="fa fa-bell">&nbsp;&nbsp;</a> <span class="navbar-unread"></span></li>
        
      <li><a href="#fakelink" class="fa fa-wrench">&nbsp;&nbsp;</a></li>
        
    </ul>
<!--
    <form class="navbar-form navbar-left" action="#" role="search">
      <div class="form-group">
        <div class="input-group">
          <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
          <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>
        </div>
      </div>
    </form>
-->
  </div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->
      
      <div class="row" style="margin-left:auto; margin-right:auto;">

<!--  <div class="col-md-9"  >-->

          

          
          
          
          <div class="col-md-2">
              

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="img/user.jpg" style="width:90%; height:50%;">
                    
                </div>
                <div class="info">
                    <div class="title">
                        <a href="#">Michael Annor</a>
                    </div>
<!--                    <div class="desc">Michael Annor</div>-->
                    <div class="desc">Computer Science</div>
                    <div class="desc">Class of 2016</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="">
                        <i class="fa fa-behance"></i>
                    </a>
                </div></div>
                
                
          
           <br>
          <div class="form-control" style="height:auto; width:90%; resize:none; margin-bottom:.5em; border-radius:3px; border:0; background-color:#ecf0f1; padding-left:0.5;">
          
             <span><b>Coursetags</b></span><br>
                             <?php
                    include_once("courses.php");
                    $obj = new courses();
                    $course_array;
//                    $i=0;
                    $obj->get_all_courses();
                    $row=$obj->fetch();

                    while($row){
                        echo "<a href='course_index.php?id={$row["course_id"]}'>{$row["course_tag"]}</a><br>";
                        $course_array[$row["course_id"]] = $row["course_tag"];
                        $row=$obj->fetch();
//                        $i++;
                    }
//for ($i=0;$i<count($course_array);$i++){
//print_r($course_array);
//}
?>

              
           </div> 
          
          </div>

  <div class="col-md-7">
      
      <h6>Compose:</h6>
<!--          <input type="text" placeholder="..." class="form-control" />-->
     <form action="index.php" method="POST">
      <textarea placeholder="Type your question here..." class="form-control" style="height:125px; resize:none; margin-bottom:.5em; border-radius:2px;" name="qn"></textarea>            <input type="submit" onclick="" class="btn btn-embossed btn-primary" style="float:right; width:7em; margin-left:.5em;" value="Ask"></input>


 <select name="ct" data-toggle="select" class="form-control select select-default mrs mbm" style="float:right;">
       <option value='0'>Select a Coursetag</option>
            <?php
for ($i=1;$i<=count($course_array);$i++){
            echo "<option value='$i'>$course_array[$i]</option>";
}
        ?>

      </select>    
      </form>
     <?php 
			if (isset($_REQUEST["ct"]) ) {
                if ($_REQUEST["qn"]!==""){
                    if (!$_REQUEST["ct"]==0){
                $qn_text=$_REQUEST['qn'];
                        $cid = $_REQUEST["ct"];
                include_once("questions.php");
                $obj = new questions();
                $uid=4;
                $obj->add_question($qn_text, $cid, $uid);
                    }
                }
            }
          ?>
      <br>
      <br>
      <br>
      <br>
      
<!--            <h7>Questions:</h7>-->
      <div id="timeline">
<!--
           <br>
          <div style="border-bottom:2px; border-bottom-style:solid; border-bottom-color:#bdc3c7;"></div>
<br>
-->
          
                <?php
                    include_once("questions.php");
                    $obj = new questions();
                    $obj->get_all_questions();
                    $row=$obj->fetch();
                    
                    while ($row){
                        echo "<div>
                <div class='form-control' style='height:auto; resize:none; margin-bottom:.5em; border-radius:2px; border:0;'>";
                        
	echo $row["question"];
                    echo "</div>";
                        echo '<button onclick="window.location.href='.
                            '\'question_index.php\''.
                            '" class="btn btn-embossed btn-primary" style="float:right; width:7em; margin-left:.5em;">More</button>';

echo "<div class='bootstrap-tagsinput' style='width:20%; float:right;'>   

</span> <span class='tag label label-info'>{$row["course_tag"]}
</span> </div> 
          </div>
          <br>
          <br>
          <div style='border-bottom:2px; border-bottom-style:solid; border-bottom-color:#bdc3c7;'></div>
<br>";
                                        $row=$obj->fetch();
}
?>
                
                
<!--          end of timeline div-->
          </div>
      
<!--      <span style="float:right; margin-right:.5em;"><h7 style="margin-top:10em;">Coursetag:</h7></span>-->

<!-- Primary tags input -->
<!--
<div class="tagsinput-primary">
<input name="tagsinput" class="tagsinput" data-role="tagsinput" value="School, Teacher, Colleague" />
</div>
-->
          </div>
<!--                      <div class="col-md-2"></div>-->
          </div>
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/flat-ui.min.js"></script>

    <script src="assets/js/application.js"></script>

    <script>
      $(document).ready(function(){
        $('select[name="inverse-dropdown"], select[name="inverse-dropdown-optgroup"], select[name="inverse-dropdown-disabled"]').select2({dropdownCssClass: 'select-inverse-dropdown'});

        $('select[name="searchfield"]').select2({dropdownCssClass: 'show-select-search'});
        $('select[name="inverse-dropdown-searchfield"]').select2({dropdownCssClass: 'select-inverse-dropdown show-select-search'});
      });
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>