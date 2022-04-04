<?php
 function connectDb(){
     $host = 'iutdoua-web.univ-lyon1.fr'; // ou sql.hebergeur.com
     $user = 'p2029637';      // ou login
     $pwd = '603776';      // ou xxxxxx
     $db = 'p2029637';
 try 
   {
      $bdd = new PDO('mysql:host='.$host.';dbname='.$db.
                     ';charset=utf8', $user, $pwd,
                 array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      return $bdd;
   } catch (Exception $e) {
      exit('Erreur : '.$e->getMessage());
       }
   }
   
?>