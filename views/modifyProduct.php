<!DOCTYPE html>
<html lang="ro">

<head>
    <title>Adauga produs | Impressed</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?php echo URL; ?>public/css/modifyProduct.css" rel="stylesheet" />
</head>

<body>
    <header>
        <?php
        require 'header.php';
        ?>
    </header>

    <main>
        <div>
            <h1>Modifica date produs</h1>
            <hr />
        </div>

        <form method="post">
            <div class="input-cauta">
                <input type="text" name="cauta-produs" placeholder="Intoduce-ti ID-ul produsului" value="<?php if(isset($this->id_produs)){echo $this->id_produs;} ?>" />
                <button class="buton-cauta" type="submit" name="cauta">Cauta</button>
            </div>

            <?php if (isset($this->result) && $this->result != null) {  ?>
                <div class="detalii">
                    <?php while ($row = $this->result->fetch()) { ?>

                        <div class="linie">
                            <label for="form-nume"><a> Nume produs: <?php echo $row['nume'] ?> </a></label>
                            <div class="input">
                                <input type="text" id="nume-produs" name="nume-prod" />
                            </div>
                        </div>
                        <div class="linie">
                            <label for="form-descriere"><a> Descriere produs: <?php echo $row['descriere'] ?></a></label>
                            <div class="input">
                                <input type="text" id="descriere" name="descriere-prod" />
                            </div>
                        </div>
                        <div class="linie">
                            <label for="form-pret"><a> Pret produs: <?php echo $row['pret'] ?></a></label>
                            <div class="input">
                                <input type="text" id="pret" name="pret-prod" />

                            </div>
                        </div>
                        <div class="linie">
                            <label for="form-material"><a> Material produs: <?php echo $row['material'] ?></a></label>
                            <div class="input">
                                <input type="text" id="material" name="material-prod" />
                            </div>
                        </div>
                        <div class="linie">
                            <label for="form-culoare"><a> Culoare produs: <?php echo $row['culoare'] ?></a></label>
                            <div class="input">
                                <input type="text" id="culoare" name="culoare-prod" />

                            </div>
                        </div>
                        <div class="linie">
                            <label for="form-gen"><a> Gen produs: <?php echo $row['gen'] ?></a></label>
                            <div class="input">
                                <input type="text" id="gen" name="gen-prod" />
                            </div>
                        </div>
                        <div class="linie">
                            <label for="form-categorie"><a> Categorie produs: <?php echo $row['categorie'] ?></a></label>
                            <div class="input">
                                <input type="text" id="categorie" name="categorie-prod" />

                            </div>
                        </div>
                        <div class="linie">
                            <label for="form-tip"><a> Tip produs: <?php echo $row['tip'] ?></a></label>
                            <div class="input">
                                <input type="text" id="tip" name="tip-prod" />
                            </div>
                        </div>

                        <div class="upload">
                            Fotografie actuala: <?php echo $row['imagine'] ?>
                            <p> Incarca o fotografie:</p>
                            <input type="file" name="imagine" id="fileToUpload">
                        </div>
                    <?php } ?>

                    <button id="buton" type="submit" name="submit">Modifica</button>

                </div>


        </form>
    <?php } ?>
    </main>

    <?php
    require 'footer.php';
    ?>

</body>

</html>