<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use App\Models\Categories;
use App\Models\ContactUs;
use App\Models\Product;
use App\Models\Review;
use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redis;
use Termwind\Components\Raw;

class IController extends Controller
{
    public function index()
    {
        $categories = Categories::paginate(20);
        return view('/index', compact('categories'));
    }
    public function login_register()
    {
        return view('/loginRegister');
    }
    //add users information//
    public function sign_up(Request $request)
    {
        $add = new Login;
        if ($request->isMethod('post')) {
            $add->fullname = $request->get('fullname');
            $add->email = $request->get('email');
            $add->password = $request->get('password');

            $add->save();
            echo "Data saved successfully";
        }
        return redirect('/loginRegister');
    }
    //login with username & password//
    public function login(Request $request)
    {
        $username = $request->get('email');
        $password = $request->get('password');
        $data = Login::select('*')->where('email', $username)
            ->where('password', $password)
            ->first();
        if (!empty($data)) {
            Session()->put("user_session", $username);
            Session()->put("user_id", $data->id);
            Session()->put("fullname", $data->fullname);
            return redirect("/indexUser");
            echo "Login Successful";
        } else {
            return redirect('/loginRegister');
            echo "Username & Password didnot match!";
        }
    }
    public function index_user(Request $request)
    {
        $username = $request->session()->get('user_session');
        echo $username;
        $userid = $request->session()->get('user_id');
        echo $userid;
        $fullname = $request->session()->get('fullname');
        echo $fullname;
        $categories = Categories::paginate(20);
        return view('/indexUser', compact('categories'));
    }
    public function product()
    {
        $categories = Categories::paginate(20);
        $product = Product::paginate(5);
        return view('/product', compact('categories', 'product'));
    }
    public function product_id($id)
    {
        $categories = Categories::all();
        $product = Product::where('categoryid', $id)->get();
        return view('/Product', compact('categories', 'product'));
    }

    public function buy_product($id)
    {
        $categories = Categories::paginate();
        $product = Product::where('id', $id)->get();
        return view('/buyProduct', compact('categories', 'product'));
    }
    //add product to cart//
    public function add_to_cart(Request $request)
    {
        $add = new Cart;
        //$add = new Checkout;
        if ($request->isMethod('post')) {
            $add->quantity = $request->get('quantity');
            $add->userid = $request->get('userid');
            $add->productid = $request->get('productid');
            $add->username = $request->get('username');
            $add->productname = $request->get('productname');
            $add->productprice = $request->get('productprice');
            $add->total = $request->get('quantity') * $request->get('productprice');

            $add->save();
        }
        return redirect('checkout');
    }
    //products info in cart//
    public function checkout()
    {
        $categories = Categories::paginate(20);
        $cart = Cart::all();
        // $cart = Checkout::all();
        $userid = session()->get('user_id');
        $fullname = session()->get('fullname');
        $subtotal = Cart::where('userid', $userid)->get()->sum('total');
        $data = Cart::where('userid', $userid)
            ->where('username', $fullname)->with('Product')->with('Login')->get();

        return view('/checkout', compact('categories', 'cart', 'data', 'subtotal'));
    }
    //remove from cart//
    public function remove_product($id)
    {
        $ob = Cart::find($id);
        $ob->delete();
        return redirect("checkout");
    }

    //reviews form//
    public function reviews_form(Request $request)
    {
        $add = new Review;
        if ($request->isMethod('post')) {
            $add->name = $request->get('name');
            $add->email = $request->get('email');
            $add->review = $request->get('review');
            $add->rating = $request->get('rating');

            $add->save();
        }
        return redirect('/reviewSummary');
    }
    public function review_summary()
    {
        $categories = Categories::paginate(20);
        $reviewdata = Review::paginate(5);
        return redirect('/reviewSummary', compact('categories', 'reviewdata'));
    }

    //contact us//
    public function contact_us()
    {
        $categories = Categories::paginate(20);
        return view('/contactUs', compact('categories'));
    }
    public function contact_us_form(Request $request)
    {
        $add = new ContactUs;
        if ($request->isMethod('post')) {
            $add->fullname = $request->get('fullname');
            $add->email = $request->get('email');
            $add->message = $request->get('message');

            $add->save();
            echo "Data saved successfully";
        }
        return redirect('/index');
    }

    //Logout//
    public function logout()
    {
        session()->forget(('user_session'));
        return redirect('/index');
    }
}
