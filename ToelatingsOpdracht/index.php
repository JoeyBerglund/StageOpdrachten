<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="style.css" />
  <script src="script.js" defer></script>
</head>
<header class="header">
  <div class="topLayer">
    <?php require_once("navbar.php"); ?>
    <div class="topLayer-text">
      <img id="LogoDijkEnWaard" src="img/DijkenWaard.png" alt="Logo van Dijk en Waard" />
      <button onclick="linkToJobs()" id="BekijkVacatures">bekijk beschikbare vacatures</button>
    </div>
  </div>
</header>

<body>
  <div class="firstTextBlock">
    <div id="alignText">
      <img id="happyIMG" src="img/happy.png" alt="happy people">
      <div>
        <div id="AlignWerkTitel">
          <h1 id="WerkTitel">
            Waarom werken voor Dijk en Waard?
          </h1>
        </div>
        <p id="WerkTekst">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia et eligendi sequi totam, sint, aliquid alias veniam possimus eos est distinctio omnis a. Illo, itaque. Vitae odit rem recusandae minima?
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque eligendi, voluptate, ducimus at ratione excepturi aspernatur necessitatibus mollitia ipsum rerum, minus blanditiis. Quia eaque nostrum veniam ipsum non iste. Esse?
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam earum aliquam quos soluta doloremque molestias aut, tempora accusantium quidem est vel animi atque at accusamus voluptatem architecto officia magnam ad?
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis error in quo corrupti, tempora porro, ullam dicta, suscipit aspernatur quas necessitatibus? Ipsum distinctio iste a saepe veritatis in architecto consequuntur.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum dolor at necessitatibus sunt repellendus officiis praesentium voluptatum? Possimus tempora pariatur, in laudantium cum fuga odit adipisci vel, explicabo modi magni!
        </p>
      </div>
    </div>
  </div>

  <div class="secondTextBlock">
    <div class="first">
      <img src="img/Hands.png" alt="hands.png">
      <p>SAMEN STERKER</p>
    </div>
    <div class="second">
      <img src="img/Group.png" alt="group.png">
      <p>DE BESTE COLLEGA'S</p>
    </div>
    <div class="third">
      <img src="img/Growth.png" alt="growth.png ">
      <P>DOORGROEI MOGELIJKHEDEN</P>
    </div>
  </div>
</body>
<footer>
  <?php require_once("footer.php"); ?>
</footer>

</html>