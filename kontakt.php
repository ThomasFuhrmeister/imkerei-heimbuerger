<?php include "template_oben.php" ?>
    <div class="row top30">
        <div class="col-xs-12">
            <h1 class="h1">Kontakt</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-7">
            <form action="" method="post">


                <div class="form-group">
                    <label class="control-label">E-Mail Adresse </label>
                    <input name="emailadresse" id="inputemailfeld" class="form-control" type="text"
                           placeholder="Ihre E-Mail Adresse"
                           pattern='^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$'
                           required="regquired">

                </div>
                <div class="form-group">
                    <label class="control-label">Betreff </label>
                    <div class="controls">
                        <input type="text" id="betreffarea" name="betreffarea" placeholder="Ihr Betreff"
                               required="required" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Nachricht </label>

                    <div class="controls">
                        <textarea id="emailtext" name="emailtext" placeholder="Ihre Nachricht" required="required"
                                  rows="9" cols="50" class="form-control"></textarea>
                    </div>
                </div>

                <div style="text-align: right">
                    <button type="submit" name="btnabschickenkontakt" id="btnabschickenkontakt"
                            class="btn btn-primary">Abschicken
                    </button>
                </div>
            </form>
        </div>
        <div class="col-sm-5">
            <h3>
                Imkerei Heimbürger
            </h3>
            <h4>
                Alexander Heimbürger
            </h4>

            <br/>
            <h4>
                Anschrift
            </h4>
            <p>
                Hassenbacher Weg 11<br>
                65520 Bad Camberg<br>
            </p>

            <br>
            <h4>
                Kontakdaten
            </h4>
            <p>
                Tel: 06434 906036<br>
                Web: <a href="http://www.imkerei-heimbuerger.de">imkerei-heimbuerger.de</a><br>
                E-Mail: <a href="mailto:info@imkerei-heimbuerger.de">info@imkerei-heimbuerger.de</a>
            </p>
        </div>
<?php include "template_unten.php" ?>