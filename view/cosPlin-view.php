<!DOCTYPE html>
<html lang = "ro">

  <head>
      <title>Cos | Impressed</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="../css/CosPlin.css" rel="stylesheet">

  </head> 

  <body>

    <body>
      <header>
        <div class="header-navigation">
          <div class="header-right">
            <div class="favotite">
              <a class="link-favorite" href="" title="Lista de dorinte">
                <img
                  class="logo-favorite"
                  src="../Poze/logo-favorite-tw.png"
                  alt="Favorite"
                />
              </a>
            </div>
  
            <div class="cos">
              <a class="link cos" href="" title="Cos cumparaturi">
                <img
                  class="logo-cos"
                  src="../Poze/shopping-cart-tw.png"
                  alt="Cos cumparaturi"
                />
              </a>
            </div>
  
            <div class="cont">
              <a class="link cont" href="./DateCont.html" title="Cont">
                <img class="logo-cont" src="../Poze/cont-tw.png" alt="Cont" />
              </a>
            </div>
          </div>
  
          <div class="header-left">
            <div class="link-nume">
              <a href="#" title="logo"
                ><img class="logo" src="../Poze/logo.png" alt="logo"
              /></a>
              <a href="#" title="logo-nume"
                ><img class="logo-nume" src="../Poze/logo-nume.png" alt="logo-nume"
              /></a>
            </div>
          </div>
        </div>
      </header>

 </header>
 <div class="navbar">

  <div class="femei">
    <button class="femei-buton" onclick="myFunction1()">FEMEI</button>
    <div class="femei-continut" id="DropF">
      <a href="#">Blugi</a>
      <a href="#">Bluze</a>
      <a href="#">Camasi</a>
      <a href="#">Fuste</a>
      <a href="#">Jachete</a>
      <a href="#">Pantaloni</a>
      <a href="#">Rochii</a>

    </div>
    <script> 
    function myFunction1() {
      document.getElementById("DropF").classList.toggle("show");
        }
    
      window.onclick = function(e) {
      if (!e.target.matches('.femei-buton')) {
      var myDropdown = document.getElementById("DropF");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }
    
    </script>
  </div>

  <div class="barbati">
    <button class="barbati-buton" onclick="myFunction2()">BARBATI</button>
    <div class="barbati-continut" id="DropB">
      <a href="#">Blugi</a>
      <a href="#">Bluze</a>
      <a href="#">Camasi</a>
      <a href="#">Jachete</a>
      <a href="#">Pantaloni</a>
      <a href="#">Tricouri</a>
    </div>
    <script> 
      function myFunction2() {
      document.getElementById("DropB").classList.toggle("show");
          }
    
    window.onclick = function(e) {
      if (!e.target.matches('.barbati-buton')) {
      var myDropdown = document.getElementById("DropB");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }
    
    </script>
  </div>

  <div class="copii">
    <button class="copii-buton" onclick="myFunction3()">COPII</button>
    <div class="copii-continut" id="DropC">
      <a href="#">Blugi</a>
      <a href="#">Bluze</a>
      <a href="#">Fuste</a>
      <a href="#">Pantaloni</a>
      <a href="#">Rochii</a>
      <a href="#">Tricouri</a>
      <a href="#">Salopete</a>
      
    </div>
    
    <script> 
      function myFunction3() {
      document.getElementById("DropC").classList.toggle("show");
          }
    
    window.onclick = function(e) {
      if (!e.target.matches('.copii-buton')) {
      var myDropdown = document.getElementById("DropC");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }
    
   </script>

  </div>


  <form  >
  <input type="search" name="q" placeholder="Cauta...">
  <input type="submit" value="OK">
  </form>

</div>




<main>

  <table class="tabel-cos">
    <thead>
      <tr>
        <th style="width: 25%">Produs</th>
        <th style="width: 25%">Descriere</th>
         <th style="width: 15%">Pret</th>
         <th style="width: 10%">Cantitate</th>
         <th style="width: 20%">Subtotal</th>
         <th style="width: 5%"></th>
       
      </tr>
    </thead>

    <tbody>
       
        <tr>
          <td data-th="Produs">
             <div class="linie1">
                <div class="produs1"><img src="../Poze/produs1.png" alt="produs1"></div>
             </div>
             <td data-th="Descriere">
                <div class="descriere-produs1">
                  <h1 class="titlu-produs1">Rochie zi</h1>
                  <p> Descrierea propriu-zisa</p>
                </div>
             </td>
           </td>
          <td data-th="Pret">100$</td>
          <td data-th="Cantitate">
            <input type="number" class="cantitate1" value="1">
          </td>
          <td data-th="Subtotal" class="subtotal">100$</td>
          <td data-th="">
            <button class="buton-stergere">
              <a>
              <img src="../Poze/buton-stergere.png" alt = "sterge" >
             </a>
            </button>						
          </td>
        </tr>
       
    </tbody>
    <tfoot>

      <tr>
        <td class="total"><strong>Total 100$</strong></td>
      </tr>
  </tfoot>

  </table>

  <div class = "butoane">
    <div class = "butoaneSt">
      <button id="Continua-cump" type = "button" onclick="window.location.href='./PaginaPrincipala.html'">
          Continua cumparaturi
      </button>
    </div>
    <div class = "butoaneDr">
      <button id="Comanda" type = "submit" onclick="window.location.href='./Checkout.html'">
        Checkout
      </button>
    </div>
  </div>
</main>





<!-- footerul -->
<footer class = "footer">
    <div class = "footer-stanga">
      <h1>
        <img id = "logo" src = "../Poze/logo.png" alt = "logo">
        <img id = "logo-nume" src = "../Poze/logo-nume.png" alt = "logo-nume">
      </h1>
      <p class = "footer-links">
        <a href = "./PaginaPrincipala.html">Acasa</a>
        |
        <a href="./Livrare.html">Livrare si Servicii</a>
        |
        <a href = "./Contact.html">Contact</a>
      </p>
      <p class = "nume-companie"> Impressed © 2020 </p>
    </div>

    <div class = "footer-centru">
      <div class="locatie">
        <a title = "Locatie"><img src = "../Poze/locatie-tw.png" alt = "locatie"></a>
        <p> Strada General Henri Mathias Berthelot Nr. 16 </p>
      </div>

      <div class="telefon">
        <a title = "Telefon"><img src = "../Poze/telefon-tw.png" alt = "telefon"></a>
        <p> +4 0767-437-025 </p>
      </div>

      <div class="mail">
        <a href = "mailto:Impressed2020@company.com?Subject=Impressed" title = "Mail"><img src = "../Poze/mail-tw.png" alt = "mail"></a>
        <p> Impressed@company.com </p>
      </div>
    </div>

     <div class = "footer-dreapta">
      <p>
        Urmărește-ne
      </p>
      <div class="footer-icons">
          <a title = "Facebook"><img id="facebook" src = "../Poze/facebook-tw.png" alt = "facebook-icon"></a>
          <a title = "Instagram"><img id="instagram" src = "../Poze/instagram-tw.png" alt = "instagram-icon"></a>
          <a href = "https://github.com/LauraStan99/FII/tree/master/TW" title = "GitHub"><img id="git" src = "../Poze/git-tw.png" alt = "github-icon"></a>
          <a title = "YouTube"><img id="youtube" src = "../Poze/youtube-tw.png" alt = "youtube-icon"></a>  
      </div>
     </div>
</footer>

</body>

</html>