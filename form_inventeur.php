<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="version alpha projet 2">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/inscription.css.">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
      
    </head>
    <body>
     <div id="retour" class="container container-globale">
         <?php include("menu.php"); ?>
       <div class="container">
         <article class="row col-md-8">
           <h1>Comment ça marche?</h1>  
            <h2>Filmez votre invention en actions!</h2>
             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.!</p>
         </article>         
         <div class="row col-md-6">    
           <h1>Formulaire </h1>
            <form role="form">
               <div class="form-group">
                <label for="UserName">Nom</label>
                <input type="text" class="form-control" id="UserName" placeholder="Nom d'utilisateur" pattern="[A-ZÉ][a-z1111éçêèô]+" required>
              </div>
                 <div class="form-group">
                <label for="UserLastName">Prenom</label>
                <input type="text" class="form-control" id="UserLastName" placeholder="Nom d'utilisateur" pattern="[A-ZÉ][a-zéçêèô]+" required>
              </div>
               <div class="form-group">
                <label for="exampleInputUser">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="exampleInputUser" placeholder="Au moins 6 caracteres" pattern="[A-ZÉa-z0-9éçêèô]{5}[A-ZÉa-z0-9éçêèô]+" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Au moins 7 caracteres" pattern="[A-ZÉa-z0-9_éçêèô]{7}" required>
              </div> 
              <div class="form-group">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer email" pattern="[\w\.]*\w@\w[\w\.]*\.\w{2,4}" required>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox"> Recevoir des courriels d'information
                </label>
              </div>
                <button type="submit" name="inscrire" id="boutonInv" class="btn btn-default">s'inscrire</button>
            </form>
         </div>
        </div>
           <?php include("footer.php"); ?>
    </div>     
       <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/inscription.js"></script>
   </body>
</html>