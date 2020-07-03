<DOCTYPE html>
<htlm lang="fr">
<head>
    <title>Index</title>
    <link rel="stylesheet" href="vitrine.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php 
include ("header.php");
?>


  <?php

if (isset ($_GET["page"]) && $_GET ["page"] == "accueil") {
include "vitrine-accueil.php";
}
else if (isset ($_GET["page"]) && $_GET ["page"] == "programme") {
include "vitrine-programme.php";
}
else if (isset ($_GET["page"]) && $_GET ["page"] == "contacts") {
include "vitrine-contacts.php";
}

else if(isset($_GET["page"]) && $_GET["page"] == "contacts-form") {
    include "contacts-form.php";
}

else if (isset ($_GET["page"])) {
    include "404.php";
}


  ?>

<?php 
include("footer.php");

?>
</body>
</html>


    