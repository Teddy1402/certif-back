<?php
$sql2 = "SELECT * FROM projets WHERE id_projets=".$_GET['id_projets']."";
                                  $requete = $db ->prepare($sql2);
                                  $requete ->execute(); 
                                  $row2 =$requete->fetch();
?>
<div class="modal fade " id="myModalprojet">
<div class="modal-dialog  modal-dialog-centered ">

    <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Projet</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <h3>ataergteg trzgr</h3>
        
      
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <p>ppppppppp ppppppppp</p>
            <p><?php echo $row2 ['description_projets'];?></p>
        <h3><?php echo $row2 ['nom_projets'];  ?></h3>
            <!-- Message bien inscrit -->
        </div>

    </div>
</div>
</div>