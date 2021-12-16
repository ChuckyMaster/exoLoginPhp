<?php 


$users = [ 
    [
    "username" => "chafouin",
    "password" => "d7464fad27734f64ffcb6abb3a3422c6"
],
[
    "username" => "pangolinSalé",
    "password" => "45438c0309d68f4925928d1cac6832e8"
],
[
    "username" => "Marabout",
    "password" => "47c1303565fe2d98ff49977c1414a010"
]];


// SALT PART
$salt="vroomvroom457";
$saltsalted = md5($salt);

$formulaire ="

<div class='container m-5 text-center card'>


     <!-- form ici -->
     <form method='post' >
<div class='form-group'> 
<input type='text' name='username' placeholder='username'>


</div>
<div class='form-group'>
<input type='text' name='password'  placeholder='password'>


</div>
<div class='form-group'> 
    <button class='btn btn-secondary' type='submit' > Go go !  </button>
</div>
</form>

  </div>





 ";


$secret =" <h1> VOICI LE SECRET <h1> <hr> <h2> La vie des baleines extra terrestre aurait été révélée par les pharaons du 12ème siècle antique, bien avant qu'il y ai
ta face de marsien sur terre, une baleine extra terrestre c'est beaucoup plus jolie !!!!!";

$utilisateurInconnu = "Utilisateur Inconnu";
$mdpErrone = "mot de passe érroné";
$champsVides= "veuillez renseigner tous les champs";

$messageErreur = "";
$user = "";
$pwd = "";
$modeFormulaire = true;

$contenueDeLaPage = "";


if(isset($_POST['username']) && isset($_POST['password'])) 
{ 
  $pwdInput = $_POST['password'];
  $userInput = $_POST['username'];
};

 
  
  if(!empty($userInput) && !empty($pwdInput)) {
                  $userexist = false;
                  $mdp;

                  foreach($users as $user) {

                    if($userInput == $user['username']) {
                      $userexist = true;
                      $mdp = $user['password'];
                      
                      
                      //$mdpSalted = md5($mdp.$saltsalted);
                      
                    }
                    
                  };

                  if($userexist){
                    if($mdp == md5($pwdInput.$saltsalted)) {
                            echo "good pwd";
                            echo "<hr>";
                            
                            $modeFormulaire = false;
                          } 
                          else { 
                            $messageErreur = $mdpErrone;
                          }
                   
                  } else { 

                    $messageErreur = $utilisateurInconnu;
                  }

  } else  {
    $messageErreur = $champsVides;
  };

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