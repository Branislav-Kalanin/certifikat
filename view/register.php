<?php include $_SERVER['DOCUMENT_ROOT'] . "/template/head.php"; ?>

<body>
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/template/navigation.php"; ?>
  <div class="container">
    <div class="form-container">
      <h1>Registračný formulár</h1>

      <form action="/controller/register.php" method="POST">
        <div class="form-group">
          <label for="meno">Meno:</label>
          <input type="text" id="meno" name="meno" required />
        </div>

        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" required />
        </div>

        <div class="form-group">
          <label for="password">Heslo:</label>
          <input type="password" id="password" name="password" required />
        </div>

        <div class="form-group">
          <label for="confirm_password">Potvrdenie hesla:</label>
          <input type="password" id="confirm_password" name="confirm_password" required />
        </div>

        <div class="form-group">
          <button>Register</button>
        </div>
      </form>

      <div class="notes">
        <p>Poznámky:</p>
        <ul>
          <li>Pole "Meno" musí byť vyplnené.</li>
          <li>Pole "E-mail" musí obsahovať platnú e-mailovú adresu.</li>
          <li>Pole "Heslo" musí byť vyplnené.</li>
          <li>Pole "Potvrdenie hesla" musí byť zhodné s polom "Heslo".</li>
        </ul>

      </div>
    </div>
  </div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/template/footer.php"; ?>