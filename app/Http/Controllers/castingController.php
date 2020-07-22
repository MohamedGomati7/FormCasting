<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cvs;

class castingController extends Controller
{
    public function casting() {
        return view ('casting');
    }

    public function send(Request $request){

      $cv = new cvs;
      if ($request->file('image')) {
          $imagePath = $request->file('image');
          $imageName = $imagePath->getClientOriginalName();

          $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
        }

      $cv->name = request('name');
      $cv->email = request('email');
      $cv->phoneNumber = request('phoneNumber');
      $cv->address = request('address');
      $cv->birthday = request('birthday');
      $cv->talent = request('talent');
      $cv->image = '/storage/'.$path;
      $cv->accounts = request('accounts');
      $cv->talent =  request('talent');

      $cv->save();

      return redirect('/')->with('success','تم ارسال رسالتك بنجاح , شكـراً جزيلاً لك');

    }


  }
