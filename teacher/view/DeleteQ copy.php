<?php
    session_start();
    $code = $_GET['code'];
    $conn = new mysqli('localhost','root','',$code);  
    $id = $_GET['ID'];
    $sql = mysqli_query($conn, "DELETE FROM  quiz WHERE  id='$id'"); 
    
    echo '<script type="text/javascript">' . 'window.location = "EditTable.php?code='.$code.'"'.'</script>';

?>