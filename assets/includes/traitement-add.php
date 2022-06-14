 <?php
 session_start();
 
include "connexionbdd.php";

$nomprojet=htmlentities(trim($_POST['nomprojet']));
$client=htmlentities(trim($_POST['client']));
$description=htmlentities(trim($_POST['description']));
// $image=htmlentities(trim($_POST['image']));




if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    $tabExtension = explode('.', $name);
$extension = strtolower(end($tabExtension));
//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];
if(in_array($extension, $extensions)){
  $uniqueName = uniqid('', true);
  //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
  $name = $uniqueName.".".$extension;
  //$file = 5f586bf96dcd38.73540086.jpg
  move_uploaded_file($tmpName, './upload/'.$name);
}
}
else{
    echo "Mauvaise extension";
}
    


// if (isset($_FILES)){
//     $file = $_FILES['file'];  
//     $filename = $file['name'];   
//     move_uploaded_file($file['tmp_name'],'upload/'.$filename)
//     ; }


$sql3 = "INSERT INTO `projets`(`nom_projets`, `client_projets`,`description_projets`,`image_projets`,`id_utilisateurs`) VALUES (:nom_projets,:client_projets,:description_projets,:image_projets,:id_utilisateurs)";
$res3 = $db->prepare($sql3);
$exec3 = $res3->execute(array(":nom_projets"=>$nomprojet,":client_projets"=>$client,":description_projets"=>$description,":image_projets"=>$name,":id_utilisateurs"=>$_SESSION['id']));

if($res3){
    
 
 
  header("Location: /certif-back/index.php");

    

  }else{
    echo "Échec de l'opération d'insertion";
    
  }

?>