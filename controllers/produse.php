<?php

class Produse extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function femei($category){
        $product = new produse_model();
        $this->view->result = $product->selectWomanCategory($category);
        $this->view->category = $category;
        $this->view->render('womenProducts');
    }

    public function femeiOrder($category, $order, $filter){
        $product = new produse_model();
        $this->view->result = $product->selectOrder('femei', $category, $order, $filter);
        $this->view->category = $category;
        $this->view->render('womenProducts');
    }

    public function barbati($category){
        $product = new produse_model();
        $this->view->result = $product->selectManCategory($category);
        $this->view->category = $category;
        $this->view->render('menProducts');
    }

    public function barbatiOrder($category, $order, $filter){
        $product = new produse_model();
        $this->view->result = $product->selectOrder('barbati', $category, $order, $filter);
        $this->view->category = $category;
        $this->view->render('menProducts');
    }

    public function copii($category){
        $product = new produse_model();
        $this->view->result = $product->selectChildrenCategory($category);
        $this->view->category = $category;
        $this->view->render('childrenProducts');
    }

    public function copiiOrder($category, $order, $filter){
        $product = new produse_model();
        $this->view->result = $product->selectOrder('copii', $category, $order, $filter);
        $this->view->category = $category;
        $this->view->render('childrenProducts');
    }

    public function produs($id_product){
        $product = new produse_model();
        $buton = new butoane_model();
        
        $this->view->result = $product->selectProduct($id_product);
        $this->view->stocXS =  $product->selectCountProduct($id_product, 'XS');
        $this->view->stocS =  $product->selectCountProduct($id_product, 'S');
        $this->view->stocM =  $product->selectCountProduct($id_product, 'M');
        $this->view->stocL =  $product->selectCountProduct($id_product, 'L');
        $this->view->stocXL =  $product->selectCountProduct($id_product, 'XL');
        $this->view->stocXXL =  $product->selectCountProduct($id_product, 'XXL');
        $this->view->stocTotal = $this->view->stocXS + $this->view->stocS + $this->view->stocM + $this->view->stocL + $this->view->stocXL + $this->view->stocXXL;
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['S'])) {
                header('location: ../produs/' . $id_product . '?size=S');
            } else if (isset($_POST['M'])) {
                header('location: ../produs/' . $id_product . '?size=M');
            } else if (isset($_POST['L'])) {
                header('location: ../produs/' . $id_product . '?size=L');
            } else if (isset($_POST['XL'])) {
                header('location: ../produs/' . $id_product . '?size=XL');
            } else if (isset($_POST['XXL'])) {
                header('location: ../produs/' . $id_product . '?size=XXL');
            } else if (isset($_POST['XS'])) {
                header('location: ../produs/' . $id_product . '?size=XS');
            }
            if (isset($_POST['adauga-cos'])) {
                if (isset($_GET['size'])) {
                    if($buton->addToCart($id_product, $_GET['size']) == false){
                            $this->view->message = 'Produsul cu marimea selectata nu este in stoc.';
                        }
                    }
                else
                {
                    if($buton->addToCart($id_product, 'XS') == false){
                        if($buton->addToCart($id_product, 'S') == false){
                            if($buton->addToCart($id_product, 'M') == false){
                                if($buton->addToCart($id_product, 'L') == false){
                                    if($buton->addToCart($id_product, 'XL') == false){
                                        if($buton->addToCart($id_product, 'XXL')==false){
                                                $this->view->message = 'Produsul nu este in stoc.';
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            if (isset($_POST['adauga-favorite'])) {

                if (isset($_GET['size'])) {
                    if($buton->addToWishlist($id_product, $_GET['size'])==false)
                    $this->view->message = 'Produsul cu marimea selectata este deja in wishlist.';
                }
                else
                {
                    if($buton->addToWishlistSize($id_product, 'XS') == false){
                        if($buton->addToWishlistSize($id_product, 'S') == false){
                            if($buton->addToWishlistSize($id_product, 'M') == false){
                                if($buton->addToWishlistSize($id_product, 'L') == false){
                                    if($buton->addToWishlistSize($id_product, 'XL') == false){
                                        if($buton->addToWishlistSize($id_product, 'XXL')==false){
                                            $this->view->message = 'Produsul nu este in stoc.';
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        
        $this->view->render('productPage');
    }

    public function addToCartWomenPage($id_product, $category){

        $buton = new Butoane_model();
        if($buton->addToCart($id_product, 'XS') == false){
            if($buton->addToCart($id_product, 'S') == false){
                if($buton->addToCart($id_product, 'M') == false){
                    if($buton->addToCart($id_product, 'L') == false){
                        if($buton->addToCart($id_product, 'XL') == false){
                            if($buton->addToCart($id_product, 'XXL')==false){
                                    $this->view->message = 'Produsul nu este in stoc.';
                            }
                        }
                    }
                }
            }
        }
        header('location: ' . URL . 'produse/femei/'.$category);
    }

    public function addToCartMenPage($id_product, $category){

        $buton = new Butoane_model();
        if($buton->addToCart($id_product, 'XS') == false){
            if($buton->addToCart($id_product, 'S') == false){
                if($buton->addToCart($id_product, 'M') == false){
                    if($buton->addToCart($id_product, 'L') == false){
                        if($buton->addToCart($id_product, 'XL') == false){
                            if($buton->addToCart($id_product, 'XXL')==false){
                                    $this->view->message = 'Produsul nu este in stoc.';
                            }
                        }
                    }
                }
            }
        }
        header('location: ' . URL . 'produse/barbati/'.$category);
    }

    public function addToCartChildrenPage($id_product, $category){

        $buton = new Butoane_model();
        if($buton->addToCart($id_product, 'XS') == false){
            if($buton->addToCart($id_product, 'S') == false){
                if($buton->addToCart($id_product, 'M') == false){
                    if($buton->addToCart($id_product, 'L') == false){
                        if($buton->addToCart($id_product, 'XL') == false){
                            if($buton->addToCart($id_product, 'XXL')==false){
                                    $this->view->message = 'Produsul nu este in stoc.';
                            }
                        }
                    }
                }
            }
        }
        header('location: ' . URL . 'produse/copii/'.$category);
    }
}
