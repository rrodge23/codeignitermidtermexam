
    

   <?php
    foreach($contact as $k => $c){

        echo $k . "<br>";
    }
   ?>
   <form action="aboutme/savecontact" method="GET">
    
    <label for="">Full Name: </label>
    <div>
    <input type="text" name="name">
    </div>
    <div>
    <input type="text" name="contact">
    </div>
    <div>
    <input type="submit" name="save">
    </div>
    
   </form>

