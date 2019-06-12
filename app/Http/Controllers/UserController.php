<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Helpers\ImageHelper;
use App\User;
use Auth;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Auth.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nume' => 'required|string|max:255',
            'prenume' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefon' => 'required|string|max:255|unique:users',
            'an_studiu' => 'required',
            'nr_matricol' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'nume' => 'required|string|max:255',
            'prenume' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'telefon' => 'required|string|max:255|unique:users',
            'an_studiu' => 'required',
            'nr_matricol' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            // get the error messages from the validator
            $messages = $validator->messages();
            return response()->json($messages, 500);
        } else {
            $user = new User;
            $user->nume = $request->nume;
            $user->prenume = $request->prenume;
            $user->email = $request->email;
            $user->telefon = $request->telefon;
            $user->an_studiu = $request->an_studiu;
            $user->nr_matricol = $request->nr_matricol;
            $user->password = Hash::make($request->password);
            $user->save();
        }
    }

    public function setImageForUserWithId(Request $request) 
    {
        $user = Auth::user();
        $imageUrl = ImageHelper::saveImageFrom($request, 'file' ,'Utilizatori');
        $user->imagine_profil =  $imageUrl;
        $user->save();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $user = User::findOrFail($id);
        $user->nume = $request->nume;
        $user->prenume = $request->prenume;
        $user->email = $request->email;
        $user->nr_matricol = $request->nr_matricol;
        $user->telefon = $request->telefon;
        $user->save();

        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
