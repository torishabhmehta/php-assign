var email =document.forms['form']['email'].value;
var passwd =document.forms['form']['passwd'].value;
var cpasswd =document.forms['form']['cpasswd'].value;
var a=0;
var b=0;
var c=0;
var d=0;
var e=0;
var f=0;
var g=0;

function usrname()
{var username =document.forms['form']['username'].value;
  var x=/^[a-zA-Z0-9@!-]{0,32}$/
  if (username.length>32)
  {document.getElementById('inform').innerHTML="username too long";
  a=0;}
  else if(!x.test(username))
  {document.getElementById('inform').innerHTML="username wierd";
      a=0;}
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
         { $("#inform").html("username accepted");
       a=1; }
         else
         {$("#inform").html("username not available"); 
        a=0; } }
       });
    }}}

function nme()
{var name=document.forms['form']['name'].value;
  var x=/^[a-z A-Z]{1,64}[\s]{1}[a-zA-Z]{1,64}$/;
  if (name.length>64)
  {document.getElementById('inform').innerHTML="Name too long";
  b=0;}
  else if (!x.test(name))
  {document.getElementById('inform').innerHTML="Invalid name";
   b=0;}
    else
  {document.getElementById('inform').innerHTML="";
b=1; }}

function ag()
{var age =document.forms['form']['age'].value;
  var x= /^[1-9][0-9]{0,2}$/;
  if(!x.test(age))
  {document.getElementById('inform').innerHTML="Invalid aage";
  c=0;}
  else if (age>110)
  {document.getElementById('inform').innerHTML="Too old to continue";
  c=0;}
  else
  {document.getElementById('inform').innerHTML="";
c=1; }}

function phNo()
{var phno =document.forms['form']['phno'].value;
  var x=/^(\+91|0){0,1}(\s){0,1}[7-9]{1}[0-9]{4}(\-|\s){0,1}[0-9]{5}$/;
  if(!x.test(phno))
  {document.getElementById('inform').innerHTML="Invalid phone number";
  d=0;}
  else
  {document.getElementById('inform').innerHTML="";
d=1; }}

function pass()
{ passwd =document.forms['form']['passwd'].value;
if (passwd.length<6)
{document.getElementById('inform').innerHTML="password of inappropriate length";
 e=0;}
 else
{document.getElementById('inform').innerHTML="";
e=1; }}

function cpass()
{cpasswd =document.forms['form']['cpasswd'].value;
if (passwd!=cpasswd)
{document.getElementById('inform').innerHTML="passwords don't match";
 f=0;}
  else
{document.getElementById('inform').innerHTML="";
f=1; }}

function em()
{email =document.forms['form']['email'].value;
  var re = /^[a-z][a-z0-9\-\-\.\_]{0,64}(@)[a-z0-9]{1,64}[a-z](.)[a-z]{0,10}$/;
if(!re.test(email))
{document.getElementById('inform').innerHTML="invalid email";
g=0;}
else
{document.getElementById('inform').innerHTML="";
g=1;}}

 function sub()
{
  if (a*b*c*d*e*f*g==1){
   return true;
           }else{
             alert('Something wrong with your input');
   return false;
}} 
