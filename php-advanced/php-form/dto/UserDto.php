<?php
require_once("connection.php");
require_once("repositories/CrudRepository.php");
class UserDto implements CrudRepository{


    static function create($email=null,$pass=null)
    {
          try{
              $con=DatabaseConnection::getInstance();
              $sql="INSERT INTO users (email,password) VALUES ('$email','$pass')";
              if(mysqli_query($con,$sql)){
                  echo "Added gracefully!";
              }else{
                  echo "Bu adımda bir problem oldu";
              }
          }catch (Exception $e){
              echo $e->getMessage();
          }
    }

    static function update($id, $user)
    {
        // TODO: Implement update() method.
    }

    static function getById($id)
    {
        // TODO: Implement getById() method.
    }

    static function getAllUsers()
    {
        // TODO: Implement getAllUsers() method.
    }

    static function deleteById($user)
    {
        // TODO: Implement deleteById() method.
    }
}