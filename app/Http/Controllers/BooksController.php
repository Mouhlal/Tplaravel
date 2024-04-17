<?php

namespace App\Http\Controllers;

use App\Http\Requests\booksRequest;
use App\Http\Requests\EditRequest;
use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BooksController extends Controller
{
    public function index(){
        //$book = Details::all();
        $book = Details::paginate(5);
        return view('books.list',compact('book'));
    }
    public function add(){
        return view('books.add');
    }
    public function store(booksRequest $request){
       /*  $valid = $request->validate([
            'nom' => 'required',
            'email' => 'required|unique:details',
            'password' => 'required|confirmed',
            'prix' => 'required',
            'description' =>  'required|min:3',
        ]); */
        $valid = $request->validated();
        $valid['image'] = $request->file('image')->store('books','public');
        $valid['password'] = Hash::make($request->password) ;
        Details::create($valid);
        return redirect()->route('index')->with('succes','');
        //->with('name de alert' , 'message que vous  voulez afficher')
    }
    public function delete($id){
        Details::find($id)->delete();
        return redirect()->route('index')->with('good','');
    }
    public function edit($id){
        $book = Details::findOrFail($id);
        return view('books.edit' , compact( 'book'));
    }
    public function update(Request $request, $id) {
        $form = $request->validate([
            'nom' => 'required',
            'image' => 'required|image',
            'prix'=>'required',
            'description'=>'required'
        ]);
        if($request->hasFile('image')){
            $form['image'] = $request->file('image')->store('books','public');
        }
        Details::findOrFail($id)->update( $form );
        return to_route('index')->with('edit', 'Modification réussie !');
    }

}
