<?php
Class Admin_login extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('*');
   $this -> db -> from('admin_credential');
   $this -> db -> where('username', $username);
   $this -> db -> where('password',$password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();
   //echo $query -> num_rows();
   if($query -> num_rows() == 1)
   {
     return $query->num_rows();
   }
   else
   {
     return false;
   }
 }
}
?>
