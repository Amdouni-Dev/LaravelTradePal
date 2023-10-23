<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\User;
use App\Models\Request as ModelRequest;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class RequestController extends Controller
{  

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         $requests = ModelRequest::all();
         return view('FrontEnd.Exchange.Requests.index', compact('requests'));
     }

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDash()
    {  $viewPath = 'BackOffice.request.list'; 
        $requests = ModelRequest::with(['user', 'desired','exchangeable']);
        if (request('list') == 1) {
            $requests = $requests->where('status', 'EN_COURS')->simplePaginate(5);
        } elseif (request('list') == 2) {
            $requests = $requests->where('status', 'CONFIRME')->simplePaginate(5);
        } elseif (request('list') == 3) {
            $requests = $requests->where('status', 'ANNULE')->simplePaginate(5);
        }else{
            $requests = $requests->simplePaginate(5);  
        }
       
        return view('BackOffice.template', compact('requests','viewPath'));
    }




 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
     public function create($id)
     {   $userId = Auth::id();
        $desired = Item::find($id);
    
        $items = Item::where('status', 'DISPONIBLE')
             ->where('user_id', $userId)
             ->get();
        $users = User::all();
    
        return view('FrontEnd.Exchange.Requests.add', ['desired' => $desired, 'users' => $users, 'items'=>$items]);
     }
      /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(HttpRequest $request)
     {   
        $userId = Auth::id();
       
        $data = $request->validate([
            'note' => 'nullable', 
            'input_object' => 'nullable',
            'amount_nuts' => [
                'nullable',
                'numeric',
                function ($attribute, $value, $fail) use ($request) {
                    $desiredId = $request->input('desired_id');
                    $amount = $value; 
                    $desired = Item::find($desiredId);
                    $userId2 = Auth::id();
                    $user = User::find($userId2);
    
                    if ($desired && $amount < $desired->amount) {
                        $fail('La somme des noisettes pour la première methode  doit être au minimum égal à la somme de l\'objet  volu');
                    }
                    if ($desired && $amount > $user->hazelnuts) {
                        $fail('Vous n\'avez pas assez de noisettes');
                    }
                },
            ],
            'amount'=>'nullable',
            'exchangeable_id'=>'nullable',
            'amount_nuts_object' =>'nullable',
            'desired_id'=>'required|numeric'

        ]);
        
      
        if (!isset($data['input_object']) && !isset($data['amount_nuts']) && !(isset($data['amount_nuts_object']) && isset($data['exchangeable_id']))) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Au moins une méthode doit être renseignée .',
             
            ]);
        }
        
      
        if (isset($data['input_object'])) {
            $exchangeableId = $data['input_object'];
        } elseif (isset($data['exchangeable_id'])) {
            $exchangeableId = $data['exchangeable_id'];
        } else {
            $exchangeableId = null;
        }
        
        if (isset($data['amount_nuts'])) {
            $amount = $data['amount_nuts'];
        } elseif (isset($data['amount_nuts_object'])) {
            $amount = $data['amount_nuts_object'];
        } else {
            $amount = null;
        }
        
     
        ModelRequest::create([
            'user_id' => $userId,
            'desired_id' => $data['desired_id'],
            'exchangeable_id' => $exchangeableId,
            'note' => $data['note'],
            'status' => "EN_COURS",
            'amount' => $amount
        ]);
        
        
 
         return redirect('/requests/show-offer')->with('success', 'Demande créé avec succès.');
     }
 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function showOffer()
 {  $userId = Auth::id();

    $requests = ModelRequest::where('user_id', $userId)->paginate(6);

   
    return view('FrontEnd.Exchange.Requests.showOffer', compact('requests'));
 }

 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function showRequest()
{   
     
 
    $requests = ModelRequest::whereHas('desired', function ($query) {
        $query->where('user_id',Auth::id());
    })->paginate(6);

    return view('FrontEnd.Exchange.Requests.showRequest', compact('requests'));
}

  
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {   
         $request = ModelRequest::find($id);
 $items= Item::all();
 return view('FrontEnd.Exchange.Requests.edit', compact('request', 'items'));
 
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(HttpRequest $request, $id)
     {  
  

        $basic  = new \Vonage\Client\Credentials\Basic("ad80402e", "geKnB8ff6FG5cNOn");
        $client = new \Vonage\Client($basic);

        $data = $request->all();
        $requestmodel = ModelRequest::find($id);
       
        $requestmodel->update([
          
            'status' => $data['status'],
           
        ]);
        if($data['status']==="CONFIRME"){
            $phone = "216" . $requestmodel->user->phone;

        $message =  $client->sms()->send(
            new \Vonage\SMS\Message\SMS($phone, "TradePal", "Votre demande d'échange a été confirmée .Merci de me contacter :)")

        );
        
        $desired=Item::find($requestmodel->desired_id);
        //$desired->delete();
        $desired->status="NONDISPONIBLE";
        $desired->save();
        $exchangeable=Item::find($requestmodel->exchangeable_id);
        if ($exchangeable) {
        $exchangeable->status="NONDISPONIBLE";
        $exchangeable->save();
        }
        $amount=$requestmodel->amount;
        
        if ($amount) {
            $userOwnerRequest = User::find($requestmodel->user_id);
            $userOwnerRequest->hazelnuts-=$amount;
            $userOwnerRequest->save();
            
            $userOwnerObject = User::find($desired->user_id);
            $userOwnerObject->hazelnuts+=$amount;
            $userOwnerObject->save();

        }
        $requestmodel->delete();
        



    }
     return redirect('/requests/show-request');
 
     }
  /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $request = ModelRequest::find($id) ;
         $request->delete() ;
         return redirect('/profile')
             ->with('success','demande supprimée avec succées') ;
 
     }
     /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroyDash($id)
        {   
            $request = ModelRequest::find($id) ;
            $request->delete() ;
            return redirect('/dashboard/request/list')
                ->with('success','demande supprimée avec succées') ;
    
        }

/***** update All request */


 /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
      public function editAll($id)
      {   $userId = Auth::id(); 
          $request = ModelRequest::find($id);
      
          $items = Item::where('status', 'DISPONIBLE')
          ->where('user_id', $userId)
          ->get();
          return view('FrontEnd.Exchange.Requests.edit', compact('request', 'items'));
  
      }
  
      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function updateAll(HttpRequest $request, $id)
      {  
         $data = $request->all();
         $requestmodel = ModelRequest::find($id);

         if (isset($data['amount'])) {
            $amount = $data['amount'];
       
        } else {
            $amount = null;
        }
        if (isset($data['exchangeable_id'])) {
            $exchangeable_id = $data['exchangeable_id'];
       
        } else {
            $exchangeable_id = null;
        }


         $requestmodel->update([
             'note' => $data['note'],
             'amount' => $amount,
             'exchangeable_id' => $exchangeable_id,
         
            
         ]);
       
     
      return redirect('/requests/show-offer');
  
      }


/*************** */












 }
 
 
 
 
 
 