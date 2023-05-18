<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Carbon;
use App\Repository\ContactRepositoryInterface;


class ContactController extends Controller
{

    protected $ContactMessage;

    public function __construct(ContactRepositoryInterface $ContactMessage)
    {
        $this->ContactMessage = $ContactMessage;
    }


    public function Contact(){
        return $this->ContactMessage->Contact();
    } // end mehtod 

    public function StoreMessage(Request $request){
        return $this->ContactMessage->StoreMessage($request);
        
    } // end mehtod 

    public function ContactMessage(){
        $contacts = $this->ContactMessage->ContactMessage();
        return view('admin.contact.allcontact',compact('contacts'));
    } // end mehtod

    public function DeleteMessage($id){
        return $this->ContactMessage->DeleteMessage($id);
    } // end mehtod 

    public function HomeAbout(){
        return $this->ContactMessage->HomeAbout();
     }// End Method
}
