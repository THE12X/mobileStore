<?php

namespace App\Http\Controllers;
use App\Models\Car;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    
    public function Products() {
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.admin');
        }
        else{
            $car= Car::all();
            return view('Products' ,compact('car'));
        }

    }
    public function Contact() {
        return view('Contact');
    }
    public function About() {
        return view('About');
    }
    public function Games(){
        return view('Games');
    }
    public function tictactoe(){
        return view('Games.tictactoe');
    }
    public function stick(){
            return view('Games.stick');
    }
    public function maze(){
        return view('Games.maze');
    }
    public function stack(){
        return view('Games.stack');
    }
    public function runner(){
        return view('Games.runner');
    }
    public function pin(){
        return view('Games.pin');
    }
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.admin');
        }
        else{
            $car= Car::all();
            return view('Products' ,compact('car'));
        }
    }
}
