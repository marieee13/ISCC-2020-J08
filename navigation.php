<nav>

<a <?php if (isset ($_GET["page"]) && $_GET["page"] == "Accueil") {echo 'class="active"';} ?> href="index.php?page=accueil">ACCUEIL</a>
<a <?php if (isset ($_GET["page"]) && $_GET["page"] == "Programme") {echo 'class="active"';} ?>href="index.php?page=programme">PROGRAMME</a>
<a <?php if (isset ($_GET["page"]) && $_GET["page"] == "Contacts") {echo 'class="active"';} ?>href="index.php?page=contacts">CONTACTS</a>

</nav>