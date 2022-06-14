

function sendData()
{
 console.log('je commence')

  var nom = document.getElementById("nom").value;
  var prenom = document.getElementById("prenom").value;
  var email = document.getElementById("email").value;
  var mdp = document.getElementById("mdp").value;
  $.ajax({
    type: 'post',
    url: 'assets/includes/insert.php',
    data: {
      nom:nom,
      prenom:prenom,
      email:email,
      mdp:mdp,
    },
    success: function (response) {
      $('#res').html(response);
    }
  });
    
  return false;
}