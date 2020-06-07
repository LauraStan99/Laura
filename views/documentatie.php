<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Impressed - Ghid de utilizare">
    <meta name="keywords" content="HTML,CSS,JS,PHP,project,infoiasi,web">
    <meta name="author" content="Botez Georgiana , Stan Laura-Ioana">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?php echo URL; ?>public/css/documentatie.css" rel="stylesheet" />

    <title>Impressed - Documentatie</title>
</head>

<body>
    <article resource="#" typeof="schema:ScholarlyArticle">
        <header>
            <?php
            require 'header.php';
            ?>

            <h1>Impressed</h1>
            <p class="subtitlu">Documentatie</p>

        </header>

        <div>
            <dl>
                <dt>Autori</dt>
                <dd>
                    Botez Georgiana
                </dd>
                <dd>
                    Stan Laura-Ioana
                </dd>
            </dl>
        </div>

        <div class="cuprins">
            <h2>Cuprins</h2>

            <ol>
                <li><a href="#abstract">Aplicatia</a></li>
                <li><a href="#stagii">Arhitectura MVC a aplicatiei</a>
                    <ol>
                        <li><a href="#inceput"> </a></li>
                        <li><a href="#bazaDeDate"> </a></li>
                        <li><a href="#back"> </a></li>

                    </ol>
                </li>
                <li><a>Librarii</a></li>
                <li><a>Sesiune</a></li>


            </ol>
        </div>

        <section typeof="sa:Abstract" id="abstract" role="doc-abstract">
            <h2>
                <span>1. </span>
                Aplicatia
            </h2>
            <p>
                Impressed este o aplicatie Web care gestioneaza colectii de imbracaminte destinate copiilor, femeilor si barbatilor.
                Exista 3 tipuri de utilizatori: vizitator, utilizator obisnuit si administrator .</p>
                <p>Aceste 3 categorii de utilizatori au in comun vizualizarea produselor site-ului ,filtrarea si ordonarea acestora ,
                    vizualizarea clasamentului produselor populare , disponibil si ca flux de date RSS.
                    Mai mult acestia pot cauta produse dupa preferinte, utilizand search-barul din bara de navigare.
                    De asemenea acestia au acces la toate functionalitatile existe in footer (contact , detalii livrare si servicii, social-media , date de contact) 
                </p>
                <p>Atat administratorii cat si utilizatorii obisnuiti pot realiza comenzi pe aplicatia noastra si de a avea o pagina de wishlist.</p>
                <p>Utilizatorul obisnuit are posibilitatea de a-si actualiza datele contului personal , de a vizualiza istoricul comenzilor ,in detaliu, precum si de 
                    deconectarea de pe aplicatie.
                </p>
                <p>Ca si administrator ,poti administra utilizatorii (stergere,vizualizare utilizatori),produsele (adaugare,modificare,stergere,vizualizare produse) si de a vizualiza stastistici pe care le poate descarca 
                    in formate minimale CSV si PDF.
                </p>
                  
            
            <div class="diagrama-aplicatiei">
                <div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom layers lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; modified=\&quot;2020-06-07T11:48:48.198Z\&quot; agent=\&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36\&quot; etag=\&quot;xaHyqnq_Ko9RyUPgIxMX\&quot; version=\&quot;12.8.8\&quot; type=\&quot;device\&quot;&gt;&lt;diagram id=\&quot;c3RfBqLwoh0VepSaRGRm\&quot; name=\&quot;Page-1\&quot;&gt;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&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div>
                <script type="text/javascript" src="https://app.diagrams.net/js/viewer.min.js"></script>
            </div>

        </section>

            <footer>

                <?php
                require 'footer.php';
                ?>

            </footer>
    </article>
</body>


</html>