var email =document.forms['form']['email'].value;
var passwd =document.forms['form']['passwd'].value;
var cpasswd =document.forms['form']['cpasswd'].value;


function usrname()
{var username =document.forms['form']['username'].value;
  if (username.length>32)
  {document.getElementById('inform').innerHTML="username too long";}
  else
  {document.getElementById('inform').innerHTML="";
    if (username)
    {$.ajax
      ({ type: 'post',
       url: '../check.php',
       data: { urname:username,},
       success: function (response)
       { console.log({res:response});
         if(response=="OK")
         { $("#inform").html("username accepted"); }
         else
         {$("#inform").html("username not available");  } }
       });
    }}}

function nme()
{var name=document.forms['form']['name'].value
  if (name.length>64)
  {document.getElementById('inform').innerHTML="Name too long";}
  else
  {document.getElementById('inform').innerHTML="";}}

function ag()
{var age =document.forms['form']['age'].value;
  var x= /^[1-9][0-9]{0,2}$/;
  if(!x.test(age))
  {document.getElementById('inform').innerHTML="Invalid aage";}
  else if (age>110)
  {document.getElementById('inform').innerHTML="Too old to continue";}
  else
  {document.getElementById('inform').innerHTML="";}}

function phNo()
{var phno =document.forms['form']['phno'].value;
  var x=/^(\+91|0){0,1}(\s){0,1}[1-9]{1}[0-9]{4}(\-|\s){0,1}[0-9]{5}$/;
  if(!x.test(phno))
  {document.getElementById('inform').innerHTML="Invalid phone number";}
  else
  {document.getElementById('inform').innerHTML="";}}

