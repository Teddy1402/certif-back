

function sendDataco()
{
    console .log('test connexion')
  var email2 = document.getElementById("email2").value;
  var mdp2 = document.getElementById("mdp2").value;
  console .log('test3');
  $.ajax({
    type: 'POST',
    url: 'assets/includes/insert-connexion.php',
    data: {
      email2:email2,
      mdp2:mdp2,
    },
    success: function (response) {
        console.log("on traite l'info");
      $('#res2').html(response);
    }
  });
  console .log('test')
    
  return false;
  
}