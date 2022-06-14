

function sendDataadd()
{
 console.log('je commence')

  var nomprojet = document.getElementById("nomprojet").value;
  var client = document.getElementById("client").value;
  var description = document.getElementById("description").value;
  var name = document.getElementById("file");
file = input.files[0];
if(file != undefined){
formData= new FormData();}

  $.ajax({
    type: 'post',
    url: 'assets/includes/traitement-add.php',
    data: {
      nomprojet:nomprojet,
      client:client,
      description:description,
      file:name,
    },
    success: function (response) {
      $('#res3').html(response);
       window.location.href = "index.php";
    }
  });
    
  return false;
}


// var name = document.getElementById("file");
// file = input.files[0];
// if(file != undefined){
// formData= new FormData();
// if(!!file.type.match(/image.*/)){
// formData.append("image", file);
// $.ajax({
// url: "upload.php",
// type: "POST",
// data: formData,
// processData: false,
// contentType: false,
// success: function(data){
// alert('success');
// }
// });
// }else{
// alert('Not a valid image!');
// }
// }else{
// alert('Input something!');
// }
