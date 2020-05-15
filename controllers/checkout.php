<?php
class Checkout extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $valid = new Validate();
        $checkout = new Checkout_model();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valid->validateLastName($this->view->nume, $this->view->numeErr);
            $valid->validateFirstName($this->view->prenume, $this->view->prenumeErr);
            $valid->validateEmail($this->view->email, $this->view->emailErr);
            $valid->validateAddress($this->view->adresa, $this->view->adresaErr);
            $valid->validateCity($this->view->oras, $this->view->orasErr);
            $valid->validateCountry($this->view->tara, $this->view->taraErr);
            $valid->validatePayment($this->view->payment, $this->view->paymentErr);
            $valid->validateDelivery($this->view->livrare, $this->view->livrareErr);
        }
        if(isset($_POST["submit"])){
            if($this->view->numeErr == "" && $this->view->prenumeErr == "" && $this->view->emailErr == "" && $this->view->adresaErr == "" && $this->view->orasErr == "" && $this->view->taraErr == "" && $this->view->paymentErr == "" && $this->view->livrareErr == "")
            {
                if($this->view->payment == 'card')
                {
                    $checkout->addNewCommand($_GET['id_comanda'], $this->view->nume, $this->view->prenume, $this->view->email, $this->view->adresa, $this->view->tara, $this->view->oras, $this->view->payment, $this->view->livrare);
                    header('location: ' . URL . 'payment?id_comanda=' . $_GET['id_comanda']);
                }
                else{
                    $checkout->addNewCommand($_GET['id_comanda'], $this->view->nume, $this->view->prenume, $this->view->email, $this->view->adresa, $this->view->tara, $this->view->oras, $this->view->payment, $this->view->livrare);
                    $checkout->deleteCart();
                    header('location: ' . URL . 'home');
                }
            }
        }
        $this->view->render('checkout');
    }

    public function deleteCommand($id_command){
        $checkout = new Checkout_model();
        $checkout->deleteCommand($id_command);
        header('location: ' . URL . 'home');
    }

}
