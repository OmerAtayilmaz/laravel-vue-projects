<?php

interface CrudRepository{
   static function create($email,$pass);
   static function update($id,$user);
   static function getById($id);
   static function getAllUsers();
   static function deleteById($user);
}