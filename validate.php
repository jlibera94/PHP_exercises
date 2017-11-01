<?php
   $name=$_POST["uname"];
   $phone=$_POST["phone"];

   if(preg_match("/([0-9]{3})-([0-9]{3})-([0-9]{4})$/",$phone))
   {
                print "phone number enter is correct";
   }
     else
   {
                print "phone number enter is incorrect";
   }
  ?>