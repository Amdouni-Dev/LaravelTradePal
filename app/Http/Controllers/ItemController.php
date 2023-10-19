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
    public function index(Request $request)
    {
        $query = Item::with('user');
    
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('category', 'LIKE', '%' . $search . '%');
        }
        $items = $query;

        if (request('sort') == 1) {
            $items = $items->orderBy('created_at', 'desc')->paginate(5);
        } elseif (request('sort') == 2) {
            $items = $items->orderBy('amount', 'asc')->paginate(5);
        } else {
            $items = $items->paginate(5);
        }
        
       
    
        return view('FrontEnd.Exchange.Items.list', compact('items'));
    }
    
    
    

     /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function indexDash(Request $request)
    {  
        $viewPath = 'BackOffice.item.list'; 

        $items = Item::with('user')->simplePaginate(5);
      
        $itemsStat = Item::with('user')->get();
        return view('BackOffice.template', compact('items','viewPath','itemsStat'));
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
    {  $data = $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'required',
        'description' => 'required|string',
        'status' => 'required',
        'amount' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ], [
        'name.required' => 'Le nom est obligatoire.',
        'name.string' => 'Le nom doit être une chaîne de caractères.',
        'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',
        'category.required' => 'La catégorie est obligatoire.',
        'description.required' => 'La description est obligatoire.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'status.required' => 'Le  statut est obligatoire.',
        'amount.required' => 'Le nombre de noisette est obligatoire.',
        'amount.numeric' => 'Le nombre de noisette doit être un nombre.',
        'image.image' => 'Le fichier doit être une image.',
        'image.mimes' => 'Le fichier doit être de type JPEG, PNG, JPG ou GIF.',
        'image.max' => 'Le fichier ne doit pas dépasser 2048 kilo-octets (2 Mo).',
    ]);
    



        if ($request->hasFile('image')) {
            $image = $request->file('image'); 
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('echange/items'), $imageName); 
        } else {
            
            $imageName = null; 
        }
        
        Item::create([
            'user_id' => 35,
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
        $items = Item::where('user_id', 35)->paginate(5);

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
            
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'category' => 'required',
                'description' => 'required|string',
                'status' => 'required',
                'amount' => 'required|numeric',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ], [
                'name.required' => 'Le nom est obligatoire.',
                'name.string' => 'Le nom doit être une chaîne de caractères.',
                'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',
                'category.required' => 'La catégorie est obligatoire.',
                'description.required' => 'La description est obligatoire.',
                'description.string' => 'La description doit être une chaîne de caractères.',
                'status.required' => 'Le  statut est obligatoire.',
                'amount.required' => 'Le nombre de noisette est obligatoire.',
                'amount.numeric' => 'Le nombre de noisette doit être un nombre.',
                'image.image' => 'Le fichier doit être une image.',
                'image.mimes' => 'Le fichier doit être de type JPEG, PNG, JPG ou GIF.',
                'image.max' => 'Le fichier ne doit pas dépasser 2048 kilo-octets (2 Mo).',
            ]);



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
                'amount' => $data['amount'],
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
            return redirect()->route('item.show',35)
                ->with('success','objet supprimé avec succées') ;
    
        }


     /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroyDash($id)
        {   
            $item = Item::find($id) ;
            $item->delete() ;
            return redirect('/dashboard/item/list')
                ->with('success','objet supprimé avec succées') ;
    
        }



      
    }
    
    
    
    
    