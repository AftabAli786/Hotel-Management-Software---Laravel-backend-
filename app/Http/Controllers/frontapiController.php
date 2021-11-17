<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Mypro_ContactQuery;
use App\Models\Mypro_subscribeUser;
use App\Models\Mypro_service;

class frontapiController extends Controller
{
    public function testing(Request $request){
       print_r($request->all());
    }
    public function save_contact_query(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
            'message' => 'required',
        ]);
        if($validator->passes())
        {
            $contact = new Mypro_ContactQuery();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->mobile_no = $request->mobile_no;
            $contact->message = $request->message;
            $contact->save();
            return response()->json(['success'=>'Contact query is submitted successfully']);
        }
        else
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
    }
    public function subscribe_user(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'email'
        ]);
        
        if($validator->passes())
        {
            $user = Mypro_subscribeUser::where('email',$request->email)->get()->toArray();
            if($user)
            {
                return response()->json(['success'=>'This email already subscribed.']);
            }
            else{
                $subscriber = new Mypro_subscribeUser();
                $subscriber->email = $request->email;
                $subscriber->save();
                return response()->json(['success'=>'User successfully subscribed.']);

            }
            
        }
        else
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
    }

    public function get_service()
    {
        $service = Mypro_service::get()->toArray();
        if($service)
        {
            return response()->json(['status'=>'true','data'=>$service]);
        }
        else
        {
            return response()->json(['false'=>'true','errors'=>'There are no any services in this table!']);

        }
    }
}
