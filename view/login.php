<?php include $_SERVER['DOCUMENT_ROOT'] . "/template/head.php"; ?>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/template/navigation.php"; ?>
  <div class="container">
    <div class="form-container">
      <h1>LOGIN</h1>
      <form action="/controller/login.php" method="POST">
        <div class="form-group">
          <label for="meno">Meno:</label>
          <input type="text" id="meno" name="meno" required />
        </div>

        <div class="form-group">
          <label for="password">Heslo:</label>
          <input type="password" id="password" name="password" required />
        </div>

        <div class="form-group">
          <button>Login</button>
        </div>
      </form>

      <div class="notes">
        <p>Poznámky:</p>
        <ul>
          <li>Pole "Meno" musí byť vyplnené.</li>
          <li>Pole "Heslo" musí byť vyplnené.</li>
        </ul>
        <p>
          Dátum s časom:
          <a class="calendar-link" href="https://calendar.google.com/">
            Pridať do kalendára
          </a>
        </p>
      </div>
    </div>
  </div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/template/footer.php"; ?>