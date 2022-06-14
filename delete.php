
<?php


require 'assets/includes/connexionbdd.php';

$id=0; if(!empty($_GET['id'])){ 
   $id=$_REQUEST['id']; }
//  if(!empty($_POST)){
//     $id= $_POST['id'];
    $sql = "DELETE FROM projets where id_projets = ?";
       $q = $db->prepare($sql);
       $q->execute(array($id));
       header("Location: index.php");
   
//}

?>

<h3>Supprimer un projet</h3>
<p>

</div>
<p>

                     
<br />
<form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      
Êtes-vous sure de vouloir le supprimer ?

<br />
<div class="form-actions">
                          <button type="submit" class="btn btn-danger yes">Oui</button>
                          <a class="btn no" href="index.php">Non</a>
</div>
<p>

</form>





