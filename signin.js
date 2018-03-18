$(document).ready(function(){
    $("#submit").click(function(){
      var username =document.forms['form']['username'].value;
      var passwd =document.forms['form']['passwd'].value;

      // Returns successful data submission message when the entered information is stored in database.
      var dataString = 'username='+ username + '&passwd='+ passwd;
      if(username==''||passwd=='')
      {
      alert("Please Fill All Fields");
      }
      else
      {
      // AJAX Code To Submit Form.
      $.ajax({
type: "POST",
url: "../valid.php",
data: dataString,
cache: false,
success: function(response){
console.log(response);
if (response=="OK")
{
alert("Welcome");
window.location="profile.html";}
else{
alert("Sorry!")}
}});
}
return false;
});
});
