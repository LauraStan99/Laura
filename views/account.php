<!DOCTYPE html>
<html lang="ro">

<head>
  <title>Cont | Impressed</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo URL; ?>public/css/account.css" rel="stylesheet" />
</head>

<body>
  <header>
    <?php
    require 'header.php';
    ?>
  </header>
  <main>
    <div class="titlu">
      <img id="cont" src="<?php echo URL; ?>public/poze/cont.png" />
      <a id="titlu">Contul meu </a>
    </div>

    <div>
      <h1>
        Bine ai venit , <?php if(Session::get('nume') != null && Session::get('prenume') != null) echo Session::get('nume') . ' ' . Session::get('prenume'); ?> !
      </h1>
      <?php if (Session::get('loggedIn') == true) : ?>
        <button type="button" class="logout" onclick="window.location.href='<?php echo URL; ?>account/logout' ">Deconecteaza-te</button>
      <?php endif; ?>

      <hr />
      <p>
        Date personale:
      </p>
    </div>
    <form method="post">
      <div class="tip-date">
        <label for="inregistrare-nume">
          <a id="id-nume"><img id="register1" src="<?php echo URL; ?>public/poze/register-tw.png" alt="register" />Nume : <?php echo Session::get('nume'); ?>
          </a>
        </label>
      </div>
      <div class="date">
        <input type="text" id="inregistrare-nume" name="nume" placeholder="Nume nou " value="<?php if (isset($this->nume)) echo $this->nume; ?>" />

        <span class="error" style="color:red"> <?php if (isset($this->numeErr)) {
                                                  echo $this->numeErr;
                                                } ?></span>
      </div>
      <br />

      <div class="tip-date">
        <label for="inregistrare-prenume">
          <a id="id-prenume"><img id="register2" src="<?php echo URL; ?>public/poze/register-tw.png" alt="register" />Prenume : <?php echo Session::get('prenume'); ?></a>
        </label>
      </div>
      <div class="date">

        <input type="text" id="inregistrare-prenume" name="prenume" placeholder="Prenume nou ... " value="<?php if (isset($this->prenume)) echo $this->prenume; ?>" />

        <span class="error" style="color:red"> <?php if (isset($this->prenumeErr)) {
                                                  echo $this->prenumeErr;
                                                } ?></span>

      </div>
      <br />

      <div class="tip-date">
        <label for="inregistrare-email">
          <a id="id-email"><img id="email" src="<?php echo URL; ?>public/poze/email-tw.png" alt="email" />Email : <?php echo Session::get('email'); ?></a>
        </label>
      </div>
      <div class="date">

        <input type="text" id="inregistrare-email" name="email" placeholder="Email nou ..." value="<?php if (isset($this->email)) echo $this->email; ?>" />

        <span class="error" style="color:red"> <?php if (isset($this->emailErr)) {
                                                  echo $this->emailErr;
                                                } ?></span>

      </div>

      <br />

      <div class="tip-date">
        <label for="inregistrare-telefon">
          <a id="id-telefon"><img id="telefon" src="<?php echo URL; ?>public/poze/telefon.png" alt="telefon" />Telefon : <?php echo Session::get('telefon'); ?>
          </a>
        </label>
      </div>
      <div class="date">

        <input type="text" id="inregistrare-telefon" name="telefon" placeholder="Numar nou de telefon : ..." value="<?php if (isset($this->telefon)) echo $this->telefon; ?>" />

        <span class="error" style="color:red"> <?php if (isset($this->telefonErr)) {
                                                  echo $this->telefonErr;
                                                } ?></span>

      </div>

      <br />

      <div class="tip-date">
        <label for="inregistrare-adresa">
          <a id="id-adresa"><img id="adresa" src="<?php echo URL; ?>public/poze/adresaCheckout.png" alt="adresa" />Adresa : <?php echo Session::get('adresa'); ?></a>
        </label>
      </div>
      <div class="date">

        <input type="text" id="inregistrare-email" name="adresa" placeholder="Adresa noua ..." value="<?php if (isset($this->adresa)) echo $this->adresa; ?>" />

        <span class="error" style="color:red"> <?php if (isset($this->adresaErr)) {
                                                  echo $this->adresaErr;
                                                } ?></span>

      </div>

      <br />

      <div class="tip-date">
        <label for="inregistrare-parola">
          <a id="id-parola"><img id="parola" src="<?php echo URL; ?>public/poze/parola-tw.png" alt="parola" />Parola :********</a>
        </label>
      </div>
      <div class="date">

        <input type="password" id="inregistrare-parola" name="parola" placeholder="Parola noua ********" value="<?php if (isset($this->parola)) echo $this->parola; ?>" />

        <span class="error" style="color:red"> <?php if (isset($this->parolaErr)) {
                                                  echo $this->parolaErr;
                                                } ?></span>
      </div>
      <br />
      <?php
      if (isset($this->success_message))
        echo $this->success_message;
      ?>

      <button class="buton-schimba" type="submit" onclick="window.location.href='<?php echo URL; ?>account'">
        Schimba
      </button>
    </form>

    <button class="buton-inapoi-cump" type="button" onclick="window.location.href='<?php echo URL; ?>home'">
      &lt Inapoi la cumparaturi
    </button>
    </br>
  </main>
  <footer>
    <?php
    require 'footer.php';
    ?>
  </footer>
</body>

</html>