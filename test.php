<table class="table table-hover table-bordered">

<thead>
<th>ID</th>

<th>Titre</th>

</thead>

<tbody>
    
<?php include 'assets/includes/connexionbdd.php';

//on inclut notre fichier de connection 

//on se connecte à la base 
 $sqlsupp = 'SELECT * FROM projets ORDER BY id_projets DESC';
 //on formule notre requete 
foreach ($db->query($sqlsupp) as $supp) {
//on cree les lignes du tableau avec chaque valeur retournée
echo '

<tr>';
echo'<td>'.$supp['id_projets'] . '</td>
';
echo'<td>' .$supp['nom_projets'] . '</td>
';
echo'<td>' .$supp['client_projets'] . '</td>';
echo '<td>';
echo '<a class="btn" href="delete.php?id=' . $supp['id_projets'] . '"><i class="fas fa-pen lire"></i>Supprimer</a>';// un autre td pour le bouton d'edition
echo '</td>';
echo '</tr>';
}
?>    
</tbody>
</table>