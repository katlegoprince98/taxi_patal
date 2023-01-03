<?php

      if(isset($_POST['submit'])){
     
         $reg = $_POST['reg'];
         $price = $_POST['price'];
         $noSeats = $_POST['noSeats'];
         $noPass = $_POST['noPass'];
         $driver = $_POST['driver'];
         $dest = $_POST['dest'];
         
         

        if($reg != "" && $dest != "" && $driver != "" && $noSeats != 0 && $noPass != 0 && $price > 0){
           $total = $price * $noPass;  
           ?>
           <script>
            window.alert();
            window.history('index.php');
           </script>
           <?php
        }else{
            ?>
            <script>
                window.alert("Please enter all required fields!");
                window.history('index.php');
            </script>
            <?php
        }
      }
?>