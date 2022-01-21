<?php
//require_once './DbPdo.php';
//require_once './Db.php';
require_once './classes/Subscribers.php';
$subscriber = new Subscribers();
        
$channels_info = $subscriber->getChannels();
echo "<pre>";
print_r($channels_info);
$users_info = $subscriber->getUserDetails();
print_r($users_info);
exit;


//$fileName = $_FILES['images'];
//    $ext = explode(".", $fileName)[1]);
//$query = "select * from channel";
// $runQuery = mysqli_query($this->db, $query);
// var_dump($runQuery);
// exit;
 

//        $stmt = DbPdo::connect()->prepare($query);
//        $channel_id =1 ;
//        $stmt->bindParam("channel_id", $channel_id);
//        echo $stmt;
//        exit;
//        $stmt->execute();
//        if ($stmt) {
//
//            while ($rs = $stmt->fetch()) {
//                $role_name = $rs[" "];
//            }
//        }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
        </title>

        <link href="css/jquery-ui.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

        <script src="js/code.jquery.com_jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="js/code.jquery.com_ui_1.12.1_jquery-ui.js"></script>
    </head>
    <body>
        <div>
            
            <div class="container-fluid">
                <div class="row">
                    
                <h1 class="col-7">CrickInfo
                </h1>
                    <span class="col-2">login</span>
                    <button class="col-3">
                    subscribe
                </button>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <img src="images/location.jpg" />
                        <p class="text-center"> loaction1</p>
                    </div>
                    <div class="col-4">
                        <img src="images/location.jpg""/>
                        <p class="text-center"> loaction2</p>
                    </div>
                    <div class="col-4">
                        <img src="images/location.jpg"/>
                        <p class="text-center"> location3</p>
                    </div>
                </div>
                <button>Add image
                </button>
            </div>
        </div>
    </body>
</html>
