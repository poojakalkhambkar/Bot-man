<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAMAQ</title>
    <link rel="stylesheet" href="style.css">
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

.dropup-content input {


  border-color: transparent;
  text-decoration: none;
  display: block;
  width: 300px;
  
  /* background-color: #007bff; */
  background-color: transparent;


}

.dropup-content input {background-color: #007bff}

.dropup:hover .dropup-content {
  display: block;
}


</style>

</head>
<body style="height: 400px;">
    <div class="wrapper">
        <div class="title" style="height: 40px;">SIAMAQ</div>
        <div class="form">
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
              
        ?>
         <div class="typing-field" style="height: 40px;">
    
            
                <div class="dropup" onclick="myFunction()">
                    <button class="dropbtn"> <i class="fa fa-bars" aria-hidden="true"></i></button>
                    <div class="dropup-content" id="dropup" onscroll="scrollFunction()">
                    <ui>
                        
                                <?php   
                                     while($rows=$result->fetch_assoc())
                                      {
                                          $id = $rows['queries'];   
                                ?>
                                     <input value="<?php echo $rows['queries'];?>"
                                      onclick="getmessage('<?php echo $id;?>')" 
                                      id="getquestion('<?php echo $rows['queries']?>')">
                                            
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
    </script>

</body>
   
</html>