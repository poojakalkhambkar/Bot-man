<?php
// connecting to database
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//checking user query to database query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// if user query matched to database query we'll show the reply otherwise it go to else statement
if(mysqli_num_rows($run_query) > 0){
    
     $fetch_data = mysqli_fetch_assoc($run_query);
     $replay = $fetch_data['replies'];

        if ($getMesg =='1'||$getMesg =='2') {

            $blog = [];
            $blog= array(explode(".", $replay));

            // echo $blog[0][0];
            $blogCount = sizeof($blog[0]);
    
                for($a = 0 ; $a < $blogCount ; $a++)
                {
                    $title = array(explode(":-", $blog[0][$a]));
                    $mainTitle = $title[0][0];

                    echo " <h6>$mainTitle:- </h6> " ;

                    $subtitle = array(explode(",", $title[0][1]));
                    $titleCount = sizeof($subtitle[0]);
                    for($b = 0; $b < $titleCount; $b++){
                    echo $subtitle[0][$b];
                    echo "<br>";
                 }
                 echo "<br>";
            }
        }
        else {
             echo $replay ;
        }

      
            
   
    }        
    else
    {
  		echo "Sorry can't be able to understand you!";
 	}


?>
