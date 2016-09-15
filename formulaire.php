<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/materialize.min.css" type="text/css"/>
        <link rel="stylesheet" href="css/formulaire.css" type="text/css"/>
        <title>Formulaire de contact</title>
    </head>
    <body>
        <form>
            <div class="row">
                <div class="input-field col s4">
                    <input id="nom" type="text" class="validate">
                    <label for="nom">Nom</label>
                </div>
                <div class="input-field col s4">
                    <input id="prenom" type="text" class="validate">
                    <label for="prenom">Prénom</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="[Signaler un bug]" id="sujet" type="text" class="autocomplete-subject">
                        <label class="active" for="sujet">Sujet</label>
                    </div>
                </div>
            </div>
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="mail-content">Votre message</label>
            </div>
            <a class="waves-effect waves-light btn">Envoyer ▶</a>
        </form>
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>