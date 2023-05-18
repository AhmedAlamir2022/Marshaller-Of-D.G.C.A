<?php
 
namespace App\Repository;

interface ContactRepositoryInterface{

    // Display contact page for client
    public function Contact();

    // Store client messages
    public function StoreMessage($request);

    // Get all contact messages 
    public function ContactMessage();

    // Delete message 
    public function DeleteMessage($id);
    
    // Display about page for client 
    public function HomeAbout();


}