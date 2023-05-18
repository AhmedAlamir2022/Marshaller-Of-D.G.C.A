<?php
 
namespace App\Repository;

interface GallaryRepositoryInterface{

    // get all Gallaries
    public function AllGallary();

    // Add New Gallary Image
    public function AddGallary($request);

    // Delete Gallarty Image 
    public function DeleteGallary($id);

}