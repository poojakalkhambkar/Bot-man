<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAMAQ</title>
    <link  rel="stylesheet"href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<style>

    .multicolortext{
        background-color : #f1f1f1;  
        width : 280px; height:auto;
        border-radius: 10px;
        padding: 8px 10px;
        font-size: 14px;
        word-break: break-all;
    }
.dropbtn {
  padding: 8px;
  font-size: 16px;
  border: none;
}

.dropup {
  position: relative;
  display: inline-block;
  margin: 5px;
   
}

.dropup-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  height: 150px;
  overflow: scroll;
  bottom: 50px;
  z-index: 1;

  background: #007bff;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    word-break: break-all;
}

.dropup-content a {


  border-color: transparent;
  text-decoration: none;
  display: block;
  width: 300px;
  
  /* background-color: #007bff; */
  background-color: transparent;


}

.dropup-content a {background-color: #007bff}

.dropup:hover .dropup-content {
  display: block;
}

/* #popup{
  margin-top: 925px;
  margin-left: 2526px;
} */




body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.open-button {
  /* background-color: #555; */
  color: white;
  padding: 16px 20px;
  align-items: center;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 0px;
  width: 110px;
}

/* The popup form - hidden by default */
.wrapper {
  display: none;
  /* position: fixed; */
  bottom: 0;
  /* right: 15px; */
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 200px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {

    display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;

  /* background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none; */
  cursor: pointer;
  /* width: 100%;
  margin-bottom:10px; */
  opacity: 0.8; 
}

/* #close {
        height: 40px;
        position: relative;
        left: 90px;
    
    } */
/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>

</head>

<body class="bodyclass">
<a class="open-button" onclick="openForm()" href="#popup" id="popup1"><img src="images/msg.png" id="img"> </a>
 
    <div class="wrapper" id="popup">

        <div class="title" style="height: 55px;">SIAMAQ  <img onclick="closeForm()" id="close" src="./images/download.png"> </div>  
        <div class="form" style="padding: 1px 1px;" style="border-color: black;">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p style="background-color: #f1f1f1; color: #121111; width: 280px; height: auto;">Hi,<br>
                       This is jenica from Siamaq Consultancy pvt Ltd.<br>
                    </p>      
                         
                </div>
            </div>
            
        </div>
   
  
       
         <div class="typing-field">
    
            
                <div class="dropup" onclick="myFunction()">
                    <button class="dropbtn"> <i class="fa fa-bars" aria-hidden="true"></i></button>
                    <div class="dropup-content" id="dropup" onscroll="scrollFunction()">
                    <ui>
                        
                                <?php  
                              
              

                                 $user = 'root';
                                 $password = ''; 
                                   
                                 
                                 $database = 'bot'; 
                               
                                 $servername='localhost';
                                 $mysqli = new mysqli($servername, $user, 
                                                 $password, $database);
                               
                                 if ($mysqli->connect_error) {
                                     die('Connect Error (' . 
                                     $mysqli->connect_errno . ') '. 
                                     $mysqli->connect_error);
                                 }
                                   
                                 // SQL query to select data from database
                   
                                 $sql = "SELECT  `queries`,'id' FROM `chatbot`";
                                 $result = $mysqli->query($sql);
                                 $mysqli->close(); 
                                 
                         
                                     while($rows=$result->fetch_assoc())
                                      {
                                          $id = $rows['queries'];   
                                ?>
                               
                                     <a value="<?php echo $rows['queries'];?>"
                                      onclick="getmessage('<?php echo $id;?>')" 
                                      id="getquestion('<?php echo $rows['queries']?>')"><?php echo $rows['queries'];?></a>
                             
                                <?php
                                        }
                                ?>
                       
                    </ui>     
                    </div>
                </div>
        

            <div class="input-data" style="width: 2000px">
                <input id="data" pattern="[a-zA-Z0-9_]+.*" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
       
    </div>
   
    </div>
    
  
    
    <script>



        function myFunction() 
        {
            var x = document.getElementById("dropup");
            if (x.style.display === "block") 
                {
                    x.style.display = "none";
                } 
                 else 
                {
                   x.style.display = "block";
                }
        }

        function scrollFunction() 
        {
              document.getElementById("dropup");
        }

        // $("#getquestion").val();
        function getmessage(id)
        {
           var getquestion = id;
           $value = getquestion;
       
              $msg = '<div class="user-inbox inbox"><div class="msg-header"><p style="background-color: #2783ed">'+$value+'</p></div></div>';
              $(".form").append($msg);
                  $("#getquestion").val('');
                                        
                   $.ajax({
                              url: 'message.php',
                              type: 'POST',
                              data: 'text='+$value,
                              success: function(result)
                               {
                                     $blog = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><div class="multicolortext">'+result+'</div></div></div>';
                                     $(".form").append($blog);
                                     $(".form").scrollTop($(".form")[0].scrollHeight);
                               }

                        });
         }


                    $(document).ready(function()
                    {
                        $("#send-btn").on("click",function()
                        {
                            $value = $("#data").val();
                            
                            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p style="background-color: #2783ed">'+$value+'</p></div></div>';
                            $(".form").append($msg);
                            $("#send-btn").blur();
                            $("#data").val('');
                            
                            // start ajax code
                            $.ajax(
                                {
                                        url: 'message.php',
                                        type: 'POST',
                                        data: 'text='+$value,
                                        success: function(result)
                                        {
                                            $blog = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><div class="multicolortext">'+result+'</div></div></div>';
                                            $(".form").append($blog);
                                            
                                            
                                            // when chat goes down the scroll bar automatically comes to the bottom
                                            $(".form").scrollTop($(".form")[0].scrollHeight);
                                        }

                                });
                        });
                    });


                    function openForm() {
  document.getElementById("popup").style.display = "block";
}

function closeForm() {
  document.getElementById("popup").style.display = "none";
}

                 
    </script>


</body>
   
</html>