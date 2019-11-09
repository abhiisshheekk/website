<!DOCTYPE html>
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
</head>
<body>

<div class="topnav">
  <div class="search-container">
    <form action="slot.php" method="post">
      <input type="text" placeholder="Search for today's slot..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

</body>
</html>
