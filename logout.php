<?php
  require "php/db_connection.php";

  if($con) {
    $query = "UPDATE admin_credentials SET IS_LOGGED_IN = 'false'";
    $result = mysqli_query($con, $query);
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logout</title>
     <script > 
	 var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if(xhttp.readyState = 4 && xhttp.status == 200)
    xhttp.responseText;
};
xhttp.open("GET", "php/db_connection.php?action=is_logged_in", true);
xhttp.send();

//alert(xhttp.responseText);
if(xhttp.responseText == "")
  window.location.href = "http://localhost/DrugStore/index.html";

if(xhttp.responseText == "")
  window.location.href = "http://localhost/DrugStore/login.php";



	</script>
  </head>
  <body>

  </body>
</html>
