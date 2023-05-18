<?php
 
namespace App\Repository;

interface PlansRepositoryInterface{

    // get all Gallaries
    public function GetPlans();

    // get all Gallaries
    public function GetEmployees();

    // Add New Gallary Image
    public function EditPlane($request);

    // Delete Gallarty Image 
    public function AddPlan($request);

    // get all Gallaries
    public function DeletePlan($id);

    // Add New Gallary Image
    public function Delete1Plan($id);

    // Delete Gallarty Image 
    public function AddNewPlan($request);

}