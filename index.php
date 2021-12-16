<?php 


$users = [ 
    [
    "username" => "chafouin",
    "password" => "pingouin"
],
[
    "username" => "pangolinSalé",
    "password" => "pamplemousse"
],
[
    "username" => "Marabout",
    "password" => "pekinois"
]];














$formulaire ="<form >
<div class='form-group'> 
<input type='text' name='username' placeholder='username'>


</div>
<div class='form-group'>
<input type='text' name='password'  placeholder='password'>


</div>
<div class='form-group'> 
    <button class='btn btn-secondary' type='submit' > Go go !  </button>
</div>
</form> ";

$utilisateurInconnu = "Utilisateur Inconnu";
$mdpErrone = "mot de passe érroné";
$champsVides= "veuillez renseigner tous les champs";

$messageErreur = "";
$user = "";
$pwd = "";
$modeFormulaire = true;
$secret =" <h2> La vie des baleines extra terrestre aurait été révélée par les pharaons du 12ème siècle antique, bien avant qu'il y ai
ta face de marsien sur terre, une baleine extra terrestre c'est beaucoup plus jolie !!!!!";
$contenueDeLaPage = "";


if(isset($_GET['username']) && isset($_GET['password'])) 
{ 
  $pwdInput = $_GET['password'];
  $userInput = $_GET['username'];
};

 
  
  if(!empty($userInput) && !empty($pwdInput)) {
                  $userexist = false;
                  $mdp;

                  foreach($users as $user) {

                    if($userInput == $user['username']) {
                      $userexist = true;
                      $mdp = $user['password'];
                      echo "user exist";
                    }
                    
                  };

                  if($userexist){
                    if($mdp == $pwdInput) {
                            echo "good pwd";
                            $modeFormulaire = false;
                          } 
                          else { 
                            $messageErreur = $mdpErrone;
                          }
                   
                  } else { 

                    $messageErreur = $utilisateurInconnu;
                  }



                      // foreach($users as $user1) {

//   if($user1['username'] == $user ) {
//     $modeFormulaire = false;
   
//     echo "username good"; 
//   } else { 
//     $messageErreur = $utilisateurInconnu;
//     if($user1['pwd'] ==$pwd) {
//       echo "good pwd";
//       $modeFormulaire = false;
//     } else {
//       $messageErreur = $mdpErrone;
//     }
//   }
 
// } 


   















  } else  {
    $messageErreur = $champsVides;
  }


  




$modeFormulaire ? $contenueDeLaPage = $formulaire : $contenueDeLaPage = $secret;







/* 
-aucun champ renseigné
-nom d'utilisateur non renseigné
-userame
-mot de passe non renseigné
-mauvais mot de passe

-> Si tout va bien, on ajoute "Bienvenue CalmWifi" avant de reveler le secret

*/





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Verif</title>
</head>
<body><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <?=  $contenueDeLaPage ?>

    <p> <?= $messageErreur ?>  </p>
    
</body>
</html>