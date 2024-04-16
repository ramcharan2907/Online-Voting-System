 <?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location: ../");
}

$userdata = $_SESSION['userdata'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Voting System - Dashboard</title>
    <link rel="stylesheet" href="../routes/style.css">
</head>
<body>

<style>
#backbtn{
    padding: 7px;
    font-size: 20px;
    border-radius: 5px;
    width: 5%;    
    background-color: rgb(59, 227, 227);
    float: left;

}
#Logoutbtn{
    padding: 7px;
    font-size: 20px;
    border-radius: 5px;
    width: 5%;    
    background-color: rgb(59, 227, 227);
    float: right;

}


</style>
<div id="mainsection">
    <div id="headerSection">

        <button id="backbtn">Back</button>
        <button id="Logoutbtn">Logout</button>
        <h1>Online Voting System</h1>
        </div>

    <hr>
    <div id="profile">
        <img src="../uploads/<?php echo $userdata['photo'] ?>" "height="200"" width="200">
        <b>Name:</b>
        <b>Name:</b>
        <b>Name:</b>


    </div> 
    <div id="Group">
    </div>
    <div id="Group"></div>

    

</body>
</html>
