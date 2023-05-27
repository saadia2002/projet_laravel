<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\avion;
use App\Models\contact;
use App\Models\voyageur;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class voyageurController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyageurs=voyageur::all();
        return view('pages.listvoy')->with([
            'voyageurs'=>$voyageurs
        ]);
    }
    public function avion()
    {
        $avions=avion::all();
        return view('pages.avion')->with([
            'avions'=>$avions
        ]);
    }
    public function reservation()
    {
        $reservations=reservation::all();
        return view('pages.reservation')->with([
            'reservations'=>$reservations
        ]);
    }
    public function contacts()
    {
        $contacts=contact::all();
        return view('pages.contacts')->with([
            'contacts'=>$contacts
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }
    public function addavion()
    {
        return view('pages.addavion');
    }


    public function addreservation()
    {
        return view('pages.addreservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request,[

            'nom'=>'required',
            'prenom'=>'required',
            'CNE'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'pays'=>'required',
            'ville'=>'required',
            'date_naissance' => 'required'
        ]);

        voyageur::create($request->except('_token'));
        return redirect('/listvoy')->with([
            'success'=>'traveler added successfully'
        ]);
    }
    public function store2(Request $request)
    {
        $this ->validate($request,[

            'type'=>'required',
            'prix'=>'required',
            'capacite'=>'required',
        
        ]);
        avion::create($request->except('_token'));
        return redirect('/avion')->with([
            'success'=>'flight added successfully'
        ]);
    }
    public function store3(Request $request)
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

        return redirect('/reservation')->with([
            'success'=>'Your request has been registered successfully'
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voyageur=voyageur::where('id',$id)->first();
        return view('pages.show')->with(['voyageur'=>$voyageur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(voyageur $voyageur)
    {
        //$voyageur=voyageur::where('CNE',$id)->first();
        return view('pages.edit')->with(['voyageur'=>$voyageur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $voyageur=voyageur::where('id',$id)->first();
        $this ->validate($request,[

            'nom'=>'required',
            'prenom'=>'required',
            'CNE'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'pays'=>'required',
            'ville'=>'required',
            'date_naissance' 
        ]);
        $voyageur->update($request->except('_token', '_method'));
        return redirect('/listvoy')->with([
            'success'=>'traveler apdated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voyageur=voyageur::where('id',$id)->first();
        $voyageur->delete();
        return redirect('/listvoy')->with([
            'success'=>'traveler deleted successfully'
        ]);
    }




    public function loginstore(Request $request)
    {
        $request->validate(['email' => 'email|required', 'password' => 'required']);
    
        $user = User::where('email', $request->input('email'))
                             ->where('password', $request->input('password'))
                             ->first();
    
        if ($user) {
            return redirect('/home')->with([
                'success' => 'You have successfully authenticated'
            ]);
        } else {
            return back()->with([
                'error' => 'Wrong email or password ! try again'
            ]);
        }
    }
}
