<!DOCTYPE html>
<html>
<?php
include "template/head.php";
?>

<body>
  <header class="header">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/certifikat/template/navigation.php"; ?>
    <div class="header__content">
      <div class="wrapper">
        <h1 class="header__title">Vitajte! <span>Volam sa <span class="underline">Branislav Kalanin</span>.</span>
        </h1>
        <p class="header__text">
          Ašpirujúci front-end developer. Toto je výsledný projekt kurzu Web Developer.
        </p>
        <a href="#contact" class="contact-link underline">Kontakt</a>
      </div>
      <img src="assets/img/ja.png" alt="" class="photo">
    </div>
  </header>

  <main>
    <section class="skills">
      <div class="skill">
        <h2>HTML</h2>
        <p class="skill__content">beginner</p>
      </div>
      <div class="skill">
        <h2>CSS</h2>
        <p class="skill__content">beginner</p>
      </div>
      <div class="skill">
        <h2>Javascript</h2>
        <p class="skill__content">beginner</p>
      </div>
      <div class="skill">
        <h2>PHP</h2>
        <p class="skill__content">beginner</p>
      </div>
    </section>


    <section>
      <h2>Zručnosti:</h2>
      <ul>
        <li>
          <p>Skúsenosti v oblasti predaja a obchodu s dôrazom na FMCG.</p>
        </li>
        <li> Silné komunikačné a vyjednávacie schopnosti.</li>
        <li>Schopnosť budovať a udržiavať dlhodobé vzťahy so zákazníkmi.</li>
        <li>Vysoká úroveň motivácie a cieľavedomosti.</li>
        <li> Analytické myslenie a schopnosť rýchlo reagovať na meniace sa trhové podmienky.</li>
        <li>Vynikajúce organizačné a plánovacie schopnosti.</li>
        <li>Tímový hráč s výbornou schopnosťou pracovať pod tlakom.</li>
        <li> Aktívne znalosti MS Office a CRM systémov.</li>
      </ul>

      <h2>Jazykové znalosti:</h2>
      <ul>
        <li>
          <p>Slovensky jazyk <strong> rodný jazyk </strong> </p>
        </li>
        <li>
          <p>Anglický jazyk <strong> B2 </strong></p>
        </li>
      </ul>
    </section>
  </main>
</body>

<?php
include "/template/footer.php";
?>

</html>