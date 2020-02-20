<?php

namespace App\Http\Controllers\Site;


use App\Model\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{

    public function __construct()
    {
        parent::middleware('auth', ['only' => ['contact_list']]);

    }
    public function save(Request $request)
    {


        $this->validate($request,[

            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',

        ]);
        $res = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'ip' => getIp()


        ]);

        if($res){
            return response()->json(['status'=>200,'message'=>"پیام شما با موفقیت ارسال شد"]);

        }
     }

    public function contact_list()
    {
        $contacts=Contact::orderBy('id','DESC')->paginate(30);
        return view('admin.contact_list',compact('contacts'));
    }
}

