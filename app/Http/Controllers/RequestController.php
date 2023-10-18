<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\User;
use App\Models\Request as ModelRequest;
use Illuminate\Http\Request as HttpRequest;


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
     {  
        $desired = Item::find($id);
    
        $items = Item::all();
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
       
       
        $data = $request->validate([
            'note' => 'nullable', 
            'input_object' => 'nullable',
            'amount_nuts'=> 'nullable',
            'amount'=>'nullable',
            'input_nuts_object'=>'nullable',
            'amount_nuts_object' =>'nullable',
            'desired_id'=>'required|numeric'

        ]);
        
      
        if (!isset($data['input_object']) && !isset($data['amount_nuts']) && !(isset($data['input_nuts_object']) && isset($data['amount_nuts_object']))) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Au moins une méthode doit être renseignée .']);
        }
        
      
        if (isset($data['input_object'])) {
            $exchangeableId = $data['input_object'];
        } elseif (isset($data['input_nuts_object'])) {
            $exchangeableId = $data['input_nuts_object'];
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
            'user_id' => 1,
            'desired_id' => $data['desired_id'],
            'exchangeable_id' => $exchangeableId,
            'note' => $data['note'],
            'status' => "EN_COURS",
            'amount' => $amount
        ]);
        
        
 
         return  redirect('/item')->with('success', 'Demande créé avec succès.');
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


      
        $data = $request->all();
        $requestmodel = ModelRequest::find($id);
        $requestmodel->update([
          
            'status' => $data['status'],
           
        ]);
     
     return redirect('/item');
 
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














 }
 
 
 
 
 
 