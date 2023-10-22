<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function getItemsData(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
    
        $query = Item::with('user');
    
       
        if (!empty($searchTerm)) {
            $query->where(function ($query) use ($searchTerm) {
                $query->whereHas('user', function ($query) use ($searchTerm) {
                    $query->where('name', 'LIKE', '%' . $searchTerm . '%');
                })->orWhere('category', 'LIKE', '%' . $searchTerm . '%');
            });
        }
        $items = $query->get();
    
        return response()->json($items);
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
   
    {   $userId = Auth::id();

       

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
    


    	
    
   

        if ($request->hasFile('image')) {
            $image = $request->file('image'); 
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('echange/items'), $imageName); 
        } else {
            
            $imageName = null; 
        }
        
        //qrCode

        $user = User::find($userId); 
        $itemData = "Nom de l'item: " . $data['name'] . ", Catégorie: " . $data['category'] . ", Description: " . $data['description'] . ", Statut: " . $data['status'] . ", Montant: " . $data['amount'];
        $userData = "Nom de l'utilisateur: " . $user->name . ", Email de l'utilisateur: " . $user->email . ", Télephone  de l'utilisateur: " . $user->phone;
        
        $combinedData = $itemData . "\n" . $userData;
    
        $qrcode =  Qrcode::encoding("UTF-8")
        ->color(0, 0, 255) // Couleur bleue
        ->backgroundColor(255, 255, 255) // Couleur blanche
        ->size(300)->generate($combinedData); 

        $fileName = $data['name'] . '_' . now()->format('YmdHis') . '.svg';
        $filePath = public_path('qrcodes/') . $fileName;
        file_put_contents($filePath, $qrcode);
        Item::create([
            'user_id' => $userId,
            'name' => $data['name'],
            'category' => $data['category'],
            'description' => $data['description'],
            'status' => $data['status'],
            'amount' => $data['amount'],
            'picture' => $imageName,
            'qrCode' => $fileName,
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
    {    $userId = Auth::id();
        $items = Item::where('user_id', $userId)->paginate(5);

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
            $userId = Auth::id(); 
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
        
           
            return redirect()->route('item.show',$userId)->with('success', 'Item mis à jour avec succès');
        }
        
     /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {     $userId = Auth::id(); 
            $item = Item::find($id) ;
            $item->delete() ;
            return redirect()->route('item.show',$userId)
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

            if ($item->requests->count() > 0) {
                return redirect('/dashboard/item/list')->with('error', 'Cet objet a des demandes associées et ne peut pas être supprimé.');
            }
            else{
            $item->delete() ;
            }
            return redirect('/dashboard/item/list')
                ->with('success','objet supprimé avec succées') ;
    
        }
     
        


      
    }
    
    
    
    
    