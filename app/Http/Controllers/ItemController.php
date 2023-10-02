<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('FrontEnd.Exchange.Items.list', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$users = User::all();
        return view('FrontEnd.Exchange.Items.add',['users'=>$users]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->file('image'); 
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('echange/items'), $imageName); 
        } else {
            
            $imageName = null; 
        }
        
        Item::create([
            'user_id' => 19,
            'name' => $data['name'],
            'category' => $data['category'],
            'description' => $data['description'],
            'status' => $data['status'],
            'amount' => $data['amount'],
            'picture' => $imageName,
        ]);
    
      

       return redirect()->route('item.index')->with('success', 'Objet créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Item::where('user_id', 19)->get();

    // Passer les éléments à la vue
    return view('FrontEnd.Exchange.Items.show', compact('items'));
    }
    
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $item = Item::find($id);
            return view('FrontEnd.Exchange.Items.edit', compact('item'));
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
            $data = $request->all();
            $item = Item::find($id);
            if ($request->hasFile('image')) {
                $image = $request->file('image'); 
                $imageName = time() . '.' . $image->getClientOriginalExtension(); 
                $image->move(public_path('echange/items'), $imageName); 
            } else {
                
                $imageName = $item->picture; 
            }
            $item->update([
                'name' => $data['name'],
                'category' => $data['category'],
                'description' => $data['description'],
                'status' => $data['status'],
                'picture' => $imageName,
            ]);
        
           
            return redirect()->route('item.show',19)->with('success', 'Item mis à jour avec succès');
        }
        
     /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {   
            $item = Item::find($id) ;
            $item->delete() ;
            return redirect()->route('item.show',19)
                ->with('success','objet supprimé avec succées') ;
    
        }
    }
    
    
    
    
    