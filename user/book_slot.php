<?php
	session_start();
	require_once '../login.php';

    if(!isset($_SESSION['user'])){
        echo <<< _END
            <div>
                <h1>Error 404 <br> <h3>The page you requested doesn't exists.</h3></h1>
            </div>
_END;
        exit;
    }
    else if($_SESSION['loggedIn'] == false){
        echo <<< _END
            <div>
                <h1>You need to log in first.</h1>
            </div>
_END;
        header('Refresh:01; url=../auth/auth.php');
        exit;
    }


    echo <<<_END
    <html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    * {box-sizing: border-box;}
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    .topnav {
      overflow: hidden;
      background-color: #e9e9e9;
    }
    .topnav a {
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    .topnav a.active {
      background-color: #2196F3;
      color: white;
    }
    .topnav .search-container {
      float: right;
    }
    .topnav input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }
    .topnav .search-container button {
      float: right;
      padding: 6px 10px;
      margin-top: 8px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }
    .topnav .search-container button:hover {
      background: #ccc;
    }
    </style>
    </head>
    <body>

    <div class="topnav">
      <a class="active" href="profile.php">Home</a>
      <a href="book_slot.php">Want to book slot?</a>

    </div>
    </body>
    </html>
_END;


    echo <<<_END
    <h1>You can book any one of the following slots ... :)</h1><br/>
_END;


$conn = mysqli_connect($hostname, $username, $password, $database);
if(!$conn){
    die("Error connecting database. Please try later.");
    exit();
}
else {
    $query = "SELECT * FROM temp_table WHERE branch='Notalloted'";
    $result = mysqli_query($conn, $query);
    $num_of_rows = mysqli_num_rows($result);
    for($x = 0;$x < $num_of_rows;$x++) {
        $rows = mysqli_fetch_row($result);
        //echo $rows[2];


        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <div class="container p-5 m-5">
        <div class="row">';

        $print = '<a href= "'.$rows[0].'" class="p-3 m-3 btn btn-primary">'.$rows[0].'</a>';
        echo $print;
        $print = '<a href= "'.$rows[1].'" class="p-3 m-3 btn btn-primary">'.$rows[1].'</a>';
        echo $print;
        $print = '<a href= "'.$rows[2].'" class="p-3 m-3 btn btn-primary">'.$rows[2].'</a>';
        echo $print;

        //echo '<a href= "book_slot_php.php" class="p-3 m-3 btn btn-primary">Book Slot</a>';
        echo "</br></div></div>";



    }
}

echo <<<_END
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}
body {
margin: 0;
font-family: Arial, Helvetica, sans-serif;
}
.topnav {
text-align: center
}
.topnav input[type=text] {
padding: 6px;
margin-top: 400px;
font-size: 17px;
border: none;
}
.topnav .search-container button {
float: center;
padding: 6px 10px;
margin-top: 400px;
margin-right: 16px;
background: #ddd;
font-size: 17px;
border: none;
cursor: pointer;
}
.topnav .search-container button:hover {
background: #ccc;
}
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container p-5 m-5">
<div class="row">

<div class="search-container">
<form action="book_slot_php.php" method="post">
  <input type="text" placeholder="Book.." name="book">
  <input type="text" placeholder="branch.." name="branch">
  <input type="text" placeholder="instructor.." name="instructor">
  <button type="submit"><i class="p-3 m-3 btn btn-primary"></i></button>
</form>

</div>

_END;



?>
