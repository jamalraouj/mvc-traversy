<?php

class User
{

    private $db;
    public function __construct( )    {

      

    $this->db = new Database;
}


public function getUser(){



    $this->db->query("SELECT * FROM tests");
   

   
   return $this->db->single();
}

public function regitry($model){
    $this->db->query('INSERT INTO `user`(`name`, `email`, `password`) VALUES (? ,? , ?)');

    $this->db->bind(1 ,$model['name']);
    $this->db->bind(2 ,$model['email']);
    $this->db->bind(3 ,$model['password']);
    
    $this->db->execute();

    // try{
    //     $this->db->execute();
    //   } catch(PDOException $e){
    //     $this->error = $e->getMessage();
    //     echo $this->error;
    //   }
   
}
}


