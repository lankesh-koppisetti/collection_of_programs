<?php
if (isset($_POST['name'])) {
    echo "My name is " . $_POST['name']."  age". $_POST['age'];
    
    
}

?>
<html>
    <body>
        <form method="POST">
            <input type="text" name="name" />
            <input type="text" name="age" />
            <input type="submit" />
        </form>
        
         <form method="GET">
            <input type="text" name="name" />
            <input type="text" name="age" />
            <input type="submit" />
        </form>
    </body>
</html>