<?php
 
 namespace App\Repository;
 
interface QuieryRepositoryInterface{
 
     // Display contact page for client
     public function ContacQuery();
 
     // Store client messages
     public function EditQuery($request);
 
 }