<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Chotard" />
    <title>Tempera</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="AlaskaKonsult.jpg" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <div class="feature text-white rounded-3 mb-3"><img src="AlaskaKonsult.jpg" alt="" width=150%>
                </div>
                <h1 class="fw-bolder">Tempera</h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <form method="post">
                        <div class="form-floating mb-3">
                            <input name="nom" class="form-control" type="text" placeholder="Entrez le nom de votre établissement..." required>
                            <label>Établissement</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="horaires1" class="form-control" type="text" placeholder="Entrez les horaires d'occupation en période scolaire (hors mercredi)" required>
                            <label>Horaires - Période scolaire</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="horaires1" class="form-control" type="text" placeholder="Entrez les horaires d'occupation pendant les vacances" required>
                            <label>Horaires - Vacances</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="horaires1" class="form-control" type="text" placeholder="Entrez les horaires d'occupation le mercredi scolaire" required>
                            <label>Horaires - Mercredis</label>
                        </div>
                        <!-- <div class="form-floating mb-3">
                            <input name="soc" class="form-control" type="text" placeholder="Entrez le nom de votre société...">
                            <label><i>Société</i></label>
                        </div> -->
                        <div class="form-floating mb-3">
                            <input name="email" class="form-control" type="email" placeholder="Entrez votre email..." required>
                            <label>Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="phone" class="form-control" type="tel" placeholder="Entrez votre numéro de téléphone..." required>
                            <label>Téléphone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="message" class="form-control" type="text" placeholder="Entrez votre message ..." style="height: 10rem;" required></textarea>
                            <label>Remarques supplémentaires</label>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Envoyer</button></div>
                    </form>
                    <?php if (!empty($_POST['message'])) {
                        $entete  = 'MIME-Version: 1.0' . "\r\n";
                        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                        $entete .= 'From: ' . $_POST['email'] . "\r\n";

                        $message = '<h2>Message envoyé depuis la page Contact des Presses Franciliennes</h2>
                    <p><b>Nom : </b>' . stripslashes($_POST['nom']) . '<br>
                    <b>Société : </b>' . stripslashes($_POST['soc']) . '<br>
                    <b>Email : </b>' . stripslashes($_POST['email']) . '<br>
                    <b>Téléphone : </b>' . stripslashes($_POST['phone']) . '<br>
                    <b>Message : </p><p></b>' . stripslashes($_POST['message']) . '</p>';

                        $retour = mail('achotard1@gmail.com', 'Envoi depuis page Contact', $message, $entete);
                        if ($retour) {
                            echo '<p style="text-align: center;">Votre message a bien été envoyé.</p>';
                        }
                    }
                    //creating a mycsv.csv file
                    // $cfile = fopen('ecole.csv', 'w');
 
                    // //Inserting the table headers
                    // $header_data=array('Roll','Name','Mark');
                    // fputcsv($file,$header_data);
 
                    // //Data to be inserted
                    // $fdata = array(
                    // array('1','John','38'),
                    // array('2','Sid','72'),
                    // array('3','Jk','20')
                    // );
 
                    // // save each row of the data
                    // foreach ($fdata as $row)
                    // {
                    // fputcsv($cfile, $row);
                    // }
 
                    // // Closing the file
                    // fclose($cfile);
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-5">
            <p class="m-0 text-center text-white">Copyright &copy; <a href="legals.html">Alaksa Consult</a>
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/sb-forms-0.4.1.js"></script>
</body>

</html>