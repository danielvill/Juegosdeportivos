<?php include 'header.php'; ?>
<?php
// menu.php
$menu_items = array(
    "Equipos" => "index.php",
    "Jugadores" => "about.php",
    "Fecha" => "contact.php"
);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Juegos Deportivos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php foreach ($menu_items as $item_name => $item_url): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $item_url; ?>"><?php echo $item_name; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</nav>
