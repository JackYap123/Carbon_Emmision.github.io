<?php
if(isset($_SESSION['userName'])){

    include_once 'php/config.php';
    include_once 'chatBoxUser.php';

    $user = getChatBoxUser($_SESSION['userName'],$conn);
    function getChatBoxUser($userName,$conn){
        $sql = "SELECT * FROM users
                WHERE userName = ?";
        $stmt = $conn ->prepare($sql);
        $stmt ->execute([$userName]);

        if($stmt->rowCount() === 1){
            $user = $stmt->fetch();
            return $user;
        }else{
            $user = [];
            return $user;
        }
    }
}
?>

