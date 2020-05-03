<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\product;
use App\models\type;
use App\models\category;
use App\models\message;
use App\Http\Requests\messages\store;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        $type=type::all();
        
       $mens_shirts= product::where('cat_id',1)->where('type_id',4 )->first();
       $mens_trousers= product::where('cat_id',1)->where('type_id',2 )->first();
       $mens_shoes= product::where('cat_id',1)->where('type_id',3 )->first();
       /////////////////////
       $womens_shirts= product::where('cat_id',3)->where('type_id',4 )->first();
       $womens_trousers= product::where('cat_id',3)->where('type_id',2 )->first();
       $womens_shoes= product::where('cat_id',3)->where('type_id',3 )->first();
       /////////////////
       $kids_shirts= product::where('cat_id',4)->where('type_id',4 )->first();
       $kids_trousers= product::where('cat_id',4)->where('type_id',2 )->first();
       $kids_shoes= product::where('cat_id',4)->where('type_id',3 )->first();
      
 




        return view('home',compact(


            'mens_shirts',
            'mens_trousers',
            'mens_shoes',
            'womens_shirts',
            'womens_trousers',
            'womens_shoes',
            'kids_shirts',
            'kids_trousers',
            'kids_shoes'
        ));

       
    }


    public function mens_shirts()
    {
        $mens_shirts= product::where('cat_id',1)->where('type_id',4 )->get(); 

        return view('frontend.products.products',compact('mens_shirts'));

    }

    public function mens_trousers()
    {
        $mens_trousers= product::where('cat_id',1)->where('type_id',2 )->get();  

        return view('frontend.products.products',compact('mens_trousers'));

    }

    public function mens_shoes()
    {
        $mens_shoes= product::where('cat_id',1)->where('type_id',3 )->get();  
       // dd( $mens_shoes);

        return view('frontend.products.products',compact('mens_shoes'));

    } 


    public function womens_shirts()
    {
        $womens_shirts= product::where('cat_id',3)->where('type_id',4 )->get(); 

        return view('frontend.products.products',compact('womens_shirts'));

    }

    public function womens_trousers()
    {
        $womens_trousers= product::where('cat_id',3)->where('type_id',2 )->get();  

        return view('frontend.products.products',compact('womens_trousers'));

    }
    
    public function womens_shoes()
    {
        $womens_shoes= product::where('cat_id',3)->where('type_id',3 )->get();  

        return view('frontend.products.products',compact('womens_shoes'));

    }


    public function kids_shirts()
    {
        $kids_shirts= product::where('cat_id',4)->where('type_id',4 )->get(); 

        return view('frontend.products.products',compact('kids_shirts'));

    }

    public function kids_trousers()
    {
        $kids_trousers= product::where('cat_id',4)->where('type_id',2 )->get();  

        return view('frontend.products.products',compact('kids_trousers'));

    }

    public function kids_shoes()
    {
        $kids_shoes= product::where('cat_id',4)->where('type_id',3 )->get();  

        return view('frontend.products.products',compact('kids_shoes'));

    }


    public function all_products()
    {
       // $result='';
        $search=request('search');
        $allproducts= product::orderby('id','desc');  
          if(request()->has('search') && request()->get('search') !='')
          {
            $allproducts= $allproducts->where('desc','like','%'.$search.'%') ; 

          }
          $allproducts= $allproducts->paginate(6);
           
          if(empty($allproducts[0]))
          {
            $result='no matches found'; 
            
            $yoursearch='you searched for :'.$search; 
          }else{

            $result=$allproducts->count().' matches found'; 
            
            $yoursearch='you searched for : '.$search; 
          }
         

        return view('frontend.products.allproducts',compact(
            
            'allproducts',
            'result',
            'yoursearch'
        
        ));

    }

    public function contact_show()
    {

       return view('frontend.contact.contact'); 
    }

    public function contact_us(store $request)
    {
        
        message::create($request->all());
       return redirect()->route('home'); 
    }

}
