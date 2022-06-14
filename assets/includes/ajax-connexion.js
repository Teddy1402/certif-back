

function sendDataco()
{
    console .log("test co")
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
      
      $('#res2').html(response);
      window.location.href = "index.php";
    }
  });
  
    
  return false;
  
}