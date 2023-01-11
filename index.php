<?php 
    include "inc/header.php";
?>
 

    <div class="para">
        <?php
            $db = new mysqli("localhost", "root", "", "userdata");
            if(mysqli_connect_errno()){
                echo "Connecting fail..";
                exit();
            }
            else{
                echo "Connecttion Seccessfull....<br>";
            }  
            
           $sql = "select name, skill from tbl_user order by id";
            
            $smts = $db->prepare($sql);
            $smts->execute();
            $smts->bind_result($name, $skill);
            while ($smts->fetch()){
                echo "$skill<br>";
            }
             
            
         ?>
       
     </div>

<?php include "inc/footer.php"; ?>