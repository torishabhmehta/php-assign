<?php
echo "<!DOCTYPE html>
<html>
<head>
  <title>complete profile</title>
  <style>
  body{
  background-color: peach;}
  fieldset{
background-color: pink;}
  </style>
  </head>
  <body>
  <form action='../upload.php' method='post' enctype='multipart/form-data' >
   <fieldset>
     <legend>Complete Profile:</legend>
      Select Profile picture: <input type='file' id='pp' name='pp' required=''><br>
      Select Cover picture: <input type='file' id='cp' name='cp' required=''><br>
      Educational Institute: <input type='text' name='ei' required=''><br>
      Working as: <input type='text' name='work' required=''><br>
      Name: <input type='name' name='name' required=''><br>
              <input type='submit' name='submit'>
               </fieldset>
               </form>

               </body>
               </html>";
?>
