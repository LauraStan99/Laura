<?php

class Register extends Controller
{
  function __construct()
  {
    parent::__construct();
  }
/**
 * randez pagina de signIn unde utilizatorul isi poate crea un cont , 
 * acesta are de completat un formular unde toate campurile sunt obligatorii , in caz de necompletare se trimit mesaje de eroare,
 * datele sunt preluate din input-uri si validate cu ajutorul functiilor din clasa Validate , 
 * in cazul in care anumite campuri au fost completate gresit , se trimit pe front mesaje de eroare generate de functiile de validare
 * In caz de succes se trimite pe front mesajul de succes
 */
  public function index()
  {
    $user = new User_model();
    $valid = new Validate();
    $button = new Butoane_model();
    $button->createXMLUsers();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $valid->validateLastName($this->view->nume, $this->view->numeErr);
      $valid->validateFirstName($this->view->prenume, $this->view->prenumeErr);
      $valid->validateEmail($this->view->email, $this->view->emailErr);
      $valid->validateAddress($this->view->adresa, $this->view->adresaErr);
      $valid->validatePhone($this->view->telefon, $this->view->telefonErr);
      $valid->validatePassword($this->view->parola, $this->view->parolaErr);
    }

    if (isset($_POST["submit"])) {
      $insert_data = array(
        'nume' => $_POST["nume"], 'prenume' => $_POST["prenume"], 'email' => $_POST["email"],
        'telefon' => $_POST["telefon"], 'adresa' => $_POST["adresa"], 'parola' => Hash::create('sha256', $_POST['parola'],HASH_PASSWORD_KEY), 'tip_utilizator' => 'user'

      );
      if ($this->view->numeErr == "" && $this->view->prenumeErr == "" && $this->view->emailErr == "" && $this->view->telefonErr == "" && $this->view->adresaErr == ""  && $this->view->parolaErr == "") {
        if ($user->addUser($insert_data)) {
          $this->view->success_message = "Datele au fost introduse cu succes";
        }
      } else {
        $this->view->success_message = "Toate campurile campurile trebuie completate conform cerintelor.";
      }
    }

    $this->view->render('signIn');
  }
}
 