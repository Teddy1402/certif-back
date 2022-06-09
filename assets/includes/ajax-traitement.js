function sendData()
{
  var name = document.getElementById("nom").value;
  var prenom = document.getElementById("prenom").value;
  var name = document.getElementById("mail").value;
  var mdp = document.getElementById("mdp").value;
  $.ajax({
    type: 'post',
    url: 'insert.php',
    data: {
      name:name,
      prenom:prenom,
      mail:mail,
      mdp:mdp,
    },
    success: function (response) {
      $('#res').html("Vos données seront sauvegardées");
    }
  });
    
  return false;
}