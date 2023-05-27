<?php

namespace App\Http\Controllers;

use Session;
use app\Services;
use App\Models\avion;
use App\Models\coffe;
use App\Models\contact;
use App\Models\voyageur;
use App\Models\restaurant;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

class siteController extends Controller
{
    public function about()
    {
        return view('home.about');
    }


    public function login()
    {
        return view('home.login');
    }

    public function signup(Request $request)
    {
        $request->validate(['email' => 'email|required', 'date_naissance' => 'required']);
    
        $voyageur = voyageur::where('email', $request->input('email'))
                             ->where('date_naissance', $request->input('date_naissance'))
                             ->first();
    
        if ($voyageur) {
            return redirect('/index')->with([
                'success' => 'You have successfully authenticated'
            ]);
        } else {
            return back()->with([
                'error' => 'Wrong email or date of birth! Or you do not have an account'
            ]);
        }
    }
    


    public function creation()
    {
        return view('home.create');
    }



    public function store(Request $request)
    {
        $request->validate([

            'nom'=>'required',
            'prenom'=>'required',
            'CNE'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'pays'=>'required',
            'ville'=>'required',
            'date_naissance'=>'required'
        ]);
        voyageur::create($request->except('_token'));
        return redirect('/laune')->with([
            'success'=>'traveler added successfully'
        ]);
    }



    public function laune()
    {
        return view('home.laune');
    }


    public function index()
    {
        return view('home.index');
    }


    public function store2(Request $request)
    {
        // Valider les données du formulaire de réservation
        $request->validate([
            'CNE' => 'required',
            'avion' => 'required',
            'destination' => 'required',
            'date' => 'required',
            'heure' => 'required',
            'places' => 'required|integer|min:1',
        ]);

        $voyageur = Voyageur::where('CNE', $request->input('CNE'))->first();

        if (!$voyageur) {
            return redirect()->back()->withErrors(['CNE' => 'Your CNE is invalid']);
        }
        
        $avion = Avion::find($request->input('avion'));

        if (!$avion) {
        
            return redirect()->back()->withErrors(['avion' => 'L\'avion sélectionné est invalide']);
        }
   
        $reservation = new Reservation();
        if($request->input('destination')==1){ $reservation->destination ="France (paris)";}
        elseif($request->input('destination')==2){ $reservation->destination ="Turkie (istanbul)";}
        elseif($request->input('destination')==3){ $reservation->destination ="États-Unis (Washington)";}
        elseif($request->input('destination')==4){ $reservation->destination ="Italie (Rome)";}
        elseif($request->input('destination')==5){ $reservation->destination ="Espagne (Madrid)";}
        elseif($request->input('destination')==6){ $reservation->destination ="Inde (New Delhi)";}
        elseif($request->input('destination')==7){ $reservation->destination ="Nigeria (Abuja)";}
        elseif($request->input('destination')==8){ $reservation->destination ="Canada (Autarou)";}
        elseif($request->input('destination')==9){ $reservation->destination ="Saudia (Riad)";}
    
        $reservation->date = $request->input('date');
        $reservation->heure = $request->input('heure');
        $reservation->places = $request->input('places');
        
        $reservation->voyageur()->associate($voyageur);
        $reservation->avion()->associate($avion);
        $reservation->save();

        return redirect('/index')->with([
            'success1'=>'Your request has been registered successfully'
        ]);
    }
  

    public function repas()
    {
        //$voyageur=voyageur::where('CNE',$id)->first();
        return view('home.restauration');
    }




    public function coffee(Request $request){
        $request->validate([
            'CNE' => 'required',
            'name' => 'required',
            'number' => 'required'
        ]);

        $voyageur = Voyageur::where('CNE', $request->input('CNE'))->first();

        if (!$voyageur) {
            return redirect()->back()->withErrors(['CNE' => 'Your CNE is invalid']);
        }
        $coffe=new coffe();
        $coffe->name = $request->input('name');
        $coffe->nomber = $request->input('number');
        $coffe->voyageur()->associate($voyageur);
        $coffe->save();

        return redirect('/restaurant')->with([
            'success'=>'Your request has been registered successfully'
        ]);
   
    }
    public function restauration(Request $request){
        $request->validate([
            'CNE' => 'required',
            'name' => 'required',
            'number' => 'required'
        ]);

        $voyageur = Voyageur::where('CNE', $request->input('CNE'))->first();

        if (!$voyageur) {
            return redirect()->back()->withErrors(['CNE' => 'Your CNE is invalid']);
        }
        $restaurant=new restaurant();
        $restaurant->name = $request->input('name');
        $restaurant->nomber = $request->input('number');
        $restaurant->voyageur()->associate($voyageur);
        $restaurant->save();

        return redirect('/restauration')->with([
            'success'=>'Your request has been registered successfully'
        ]);
   
    }

    
    public function restaurant()
    {
        //$voyageur=voyageur::where('CNE',$id)->first();
        return view('home.restaurant');
    }

    

    public function method(Request $request)
    {
       $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
    
        $nom = $request->input('nom');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
    
        // Faites quelque chose avec les valeurs récupérées...
    
        contact::create($request->except('_token'));
    
        return redirect('/contact')->with([
            'success' => 'your email has been received successfully'
        ]);
    }

}
