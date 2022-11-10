<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactAdminController extends Controller
{
    public function contact(){
        // $contacts= Contact::where('idUsers',Auth::user()->idUsers)->first();
        // dd($contacts.getContent);
        $contacts=Contact::where('idUsers',Auth::user()->idUsers)->first(); 
           
        return view('users.contact',['contacts'=>$contacts]);
    }
    public function saveMessage($content,$idContact){
        ContactContent::create(
            [
                'content'=>$content,
                'idContact'=>$idContact,
                'idAuthur'=>Auth::user()->idUsers
            ]
            );
    }

    public function send(Request $request){
        if($contact=Contact::where('idUsers',Auth::user()->idUsers)->first()){
            $this->saveMessage($request->content,$contact->id);
        }
        else{
            $contact=Contact::create(
                [
                    'admin'=>1,
                    'idUsers'=>Auth::user()->idUsers
                ]
               
            );
            $this->saveMessage($request->content,$contact->id);
        }
        return back();
    }
}   
