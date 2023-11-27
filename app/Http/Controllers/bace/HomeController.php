<?php

namespace App\Http\Controllers\bace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\bace\Seminar;
use App\Models\bace\Category;
Use App\Models\bace\Book;
Use App\Models\bace\Dynamic;
Use App\Models\bace\Yatra;
Use App\Models\bace\Alumni;
Use App\Models\bace\Event;
Use App\Models\bace\Program;
Use App\Models\bace\Bace;
Use App\Models\bace\Cart;
Use App\Models\bace\Order;
use Session;
Use App\Models\bace\Youth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function Home(Request $req){
        $dynamic = Dynamic::first();
        $seminar = Seminar::all();
        $bace = Bace::all();
        $bacecount = count($bace);
        return view('welcome',compact('dynamic','seminar','bace','bacecount'));
    }

    public function allseminars(Request $req){
        $seminar = Seminar::all();
        return view('bace.home.allseminars',compact('seminar'));
    }

    public function alumni(Request $req){
        $alumnis = Alumni::all();
        return view('bace.home.alumni',compact('alumnis'));
    }

    public function bookdetails(Request $req,$id){
        $bookdata = Book::find($id);
        $books = Book::take(4)->get();
        return view('home.bookdetails',compact('bookdata','books'));
    } 

    public function cart(Request $req){
        $carts = Cart::where(['userid'=>session()->get('userid')])->get();
        $cartssum = Cart::where(['userid'=>session()->get('userid')])->get()->sum('total');
        $cartsitem = Cart::where(['userid'=>session()->get('userid')])->get()->count();
        // return view('home.cart',compact('carts','cartssum','cartsitem'));
    }

    public function checkout(){
        $items = Cart::where(['userid'=>session()->get('userid')])->get();
        $carttotal = Cart::where(['userid'=>session()->get('userid')])->get()->sum('total');
        return view('home.chekout',compact('items','carttotal'));
    }

    public function sundayprogram(Request $req){
        $programs = Program::all();
        $count = $programs->count();
        return view('bace.home.sundayprogram',compact('programs','count'));
    }

    public function events(){
        $events = Event::all();
        $count = $events->count();
        return view('bace.home.events',compact('events','count'));
    }

    public function yatras(){
        $yatras = Yatra::all();
        return view('bace.home.yatras',compact('yatras'));
    }

    public function allbooks(){
        $books = Book::all();
        return view('bace.home.allbooks',compact('books'));
    }

    public function addtocartnow(Request $req,$id){
        $books = Book::find($id);
        if($req->session()->has('userid')){
            $userid = $req->session()->put('userid',$id);
        }
        else{
            $id = "ISCKON".rand(1,999).time();
            $put = $req->session()->put('userid',$id);
            $userid = $req->session()->get('userid');
        }

        $quantity = '1';
        $cart = new Cart;
        $cart->userid = userid;
        $cart->productid = $books->id;
        $cart->quantity = $quantity;
        $cart->bookname = $books->name;
        $cart->category = $books->category;
        $cart->sku = $books->sku;
        $cart->shortdesc = $books->shortdesc;
        $cart->longdesc = $books->longdesc;
        $cart->weight = $books->weight;
        $cart->dimensions = $books->dimensions;
        $cart->bookprice = $books->price;
        $cart->bookimage = $books->image;
        $cart->total = $books->price * $quantity;
        $cart->save();
        return redirect()->json(['success'=>'0','message'=>'Item Added to Cart']);
    }

    public function addcart(Request $request){
        $id = $request->id;
        $books = Book::find($id);

        if($request->session()->has('userid')){
            $userid = $request->session()->get('userid');
        }
        else{
            $id = "ISCKON".rand(1,999).time();
            $put = $request->session()->put('userid', $id);
            $userid = $request->session()->get('userid');

        }

        $cart = new Cart;
        $cart->userid = $userid;
        $cart->productid = $books->id;
        $cart->quantity = $request->quantity;
        $cart->bookname = $books->name;
        $cart->category = $books->category;
        $cart->sku = $books->sku;
        $cart->shortdesc = $books->shortdesc;
        $cart->longdesc = $books->longdesc;
        $cart->weight = $books->weight;
        $cart->dimensions = $books->dimensions;
        $cart->bookprice = $books->price;
        $cart->bookimage = $books->bookimage;
        $cart->total = $books->price;
        $cart->save();

        return back()->with('success','Successfully Add To Cart Item');
    }

    public function updatecart(Request $req){
        $id = $req->id;
        $cart = Cart::find($id);

        $update = Cart::where('id',$id)->update([
            'quantity'=> $req->quantity,
            'total'=> $req->total,
        ]);

        return back()->with('success','Successfully Update Cart Item');
    }
    
    public function deletecart(Request $req){
        $cart = Cart::find($id);
        $delete = cart::find($id)->delete();
        
        return back()->with('success','Successfully Delete Cart Item');
    }

    public function setproductid(Request $req){
        $id = $req->id;
        $data = Cart::find($id);
        
        
        
    }

    public function youthtraining(Request $req){
        $alldata = Youth::all();
        return view('bace.home.youthtraining',compact('alldata'));
    }
    

}
