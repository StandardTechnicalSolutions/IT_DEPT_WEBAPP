<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>BU IT DEPT</title>
  <!-- <link rel="stylesheet" href="../CSS/desktop.css"> -->
  <link rel="stylesheet" href="Views/CSS/desktop.css">
</head>

<body>
  <div id="body-container">
    <header>
      <div id="logo-container">
        <img src="https://www.bloomu.edu/sites/default/themes/bloom/logo.png" alt="">
      </div>
    </header>

    <nav id="nav-bar">
      <ul>
        <!-- <li><a href=""></a>hello</li>
        <li><a href=""></a>everyone</li>
        <li><a href=""></a>intelligence</li>
        <li><a href=""></a>confirmation</li> -->
        <li><a href="/?URI=desktop-directions">Directions</a></li>
        <li><a href="/?URI=desktop-order">Order</a></li>
        <li><a href="/?URI=desktop-equipment-used">Equipment</a></li>
        <li><a href="">TBD</a></li>
      </ul>
    </nav>

    <main>
      <aside id="side-bar">
        <ul>
          <li><a href="#">
              <?php echo $placeHolderA;  ?>
              <!--Fall--></a></li>
          <li><a href="#">
              <?php echo $placeHolderB; ?>
              <!--Autumn--></a></li>
          <li><a href="#">
              <?php echo $placeHolderC; ?>
              <!--Winter--></a></li>
          <li><a href="#">
              <?php echo $placeHolderD; ?>
              <!--Summer--></a></li>
        </ul>
      </aside>

      <div id="main-content">
        <?php echo $mainPlaceHolder; ?>
      </div>
    </main>
    <footer>
      <div id="footer">
        <a id="footer-link" href="https://github.com/StandardTechnicalSolutions" target="_blank">&copy Standard Tech</a>
      </div>
    </footer>
  </div>

  <?php echo $script; ?>
</body>

</html>