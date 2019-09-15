<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>BU IT DEPT</title>
  <link rel="stylesheet" href="Views/CSS/desktop.css">
  <?php echo $extraStyle ?>
</head>

<body>
  <div id="body-container">
    <header>
      <div id="logo-container">
        <a href="/?URI=desktop"><img src="https://www.bloomu.edu/sites/default/themes/bloom/logo.png" alt="Bloomsburg university building picture"></a>
      </div>

      <nav id="nav-bar">
        <ul>
          <li><a href="/?URI=desktop-directions">Directions</a></li>
          <li><a href="/?URI=desktop-order">Order</a></li>
          <li><a href="/?URI=desktop-equipment-used">Equipment</a></li>
          <li><a href="">TBD</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <aside id="side-bar">
        <ul>
          <li><?php echo $placeHolderA; ?></li>
          <li><?php echo $placeHolderB; ?></li>
          <li><?php echo $placeHolderC; ?></li>
          <li><?php echo $placeHolderD; ?></li>
        </ul>
      </aside>

      <div id="mainContent">
        <?php echo $mainPlaceHolder; ?>
      </div>
    </main>
    <footer> &copy Standard Tech </footer>
  </div>
  <?php echo $script; ?>
</body>

</html>