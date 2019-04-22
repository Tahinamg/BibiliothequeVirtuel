<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="main.css" type="text/css" rel="stylesheet"/>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="fontawesome-free-5.6.3-web/css/all.min.css" type="text/css" rel="stylesheet"/>
    <script src="fontawesome-free-5.6.3-web/js/all.min.js" type="text/javascript"></script>
    <sript src="js/bootstrap.min.css" type="text/javascript"></sript>
    <script src="jquery.min.js"></script>
    
    <script src="popper.js"></script>
   
    
    <title>E-media librarie</title>
</head>
<body class="mx-0 position-relative">
        
    <div id="landing-page" class="row position-md-fixed h-100"> 
        <div class="mt-sm-3 pt-sm-0 mx-auto w-50">
             <H4 class="text-center">E-media libraire</H4>
        
            <p class="mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi doloribus perferendis quod officia quae repellendus aliquid dignissimos corporis expedita ipsa. Labore ipsam sequi quod ut vero sunt iste minus ullam!</p>
            <button type="button" class="mx-auto float-right btn btn-sm btn-outline-primary">Entrez dans le bibliotheque</button>
            
            <form class="mx-auto w-50 w-100 my-5 position-relative" action="traitement.php" method="post">
                <div class="text-center">
                    <i class="far fa-user-circle fa-4x" style="top:25px;"></i>
                </div>
                
                <div class="border">            
                <div class="col-12 row flex-sm-row flex-column"> 
                    <h4 class="text-center col-6 changelog">Etudiants</h4>
                    <h4 class="text-center col-6">Professeurs</h4>
                </div>
                    <div class="form-group" style="clear:both;">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="Name" id="nom"/>
                    </div>
                    <div class="form-group">
                          <label for="prenom">Prénoms</label>
                          <input type="text" class="form-control" name="Username" id="prenom"/>
                    </div>
                    <div class="form-group">
                        <label for="codeId">Matricule</label>
                        <input class="form-control" type="text" name="codeId" id="codeId"/>
                    </div>
                    <div class="form-group">
                            <label for="pass">Mot de passe</label>
                            <input class="form-control" type="password" name="password" id="pass"/>
                    </div>
    
                </div>
            </form>     
       </div>
    
    </div>
    
        <i class="d-md-none fab fa-fly fa-10x"></i>
        <script src="main.js"></script>

</body>
</html>