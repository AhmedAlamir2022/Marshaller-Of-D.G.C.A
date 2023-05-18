<?php
 
namespace App\Repository;

interface PrivacyRepositoryInterface{

    // get all Gallaries
    public function AllPrivices();

    // Add New Gallary Image
    public function AddPrivicy($request);

    // Add New Gallary Image
    public function UpdatePrivicy($request);

    // Delete Gallarty Image 
    public function DeletePrivicy($request);

}