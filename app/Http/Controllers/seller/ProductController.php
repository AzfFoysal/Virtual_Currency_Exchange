<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Http\Requests\seller\ProductRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $user=User::find($request->session()->get('id'));
        $product=Product::where('seller_id',$user->id)->get();
        return view('seller.sellerProducts',compact('product','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user=User::find($request->session()->get('id'));
        return view('seller.createproduct',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product;

        if($request->hasFile('product_picture')){
            $extension = $request->product_picture->getClientOriginalExtension();
            $newName = date('U').'.'.$extension;
            $folderPath = "seller/image/product/";
            $product->product_picture = $folderPath.$newName;
            $request->product_picture->move($folderPath, $newName);
        }

        $product->name= $request->input('name');
        $product->price= $request->input('price');
        $product->description= $request->input('description');
        $product->number_of_info= $request->input('number_of_info');
        $product->Pyament_recive_no= $request->input('Pyament_recive_no');
        // $product->delete_status= $request->input('delete_status');

        $product->from_currency= $request->input('from_currency');
        $product->To_currency= $request->input('To_currency');
        $product->seller_id=1;
        if($product->save()){
            $request->session()->flash('msg',"Product Added Successfully!");
        }
        else
        {
            $request->session()->flash('msg'," Failed To Add Product!");
        }

         return redirect()->Back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,Request $request)
    {
        $user=User::find($request->session()->get('id'));
        $payment_methods = array('none',"Bkash", "Nagod", "roket","Mkash","Ukash","Gkash");
        $counter=0;
        $counter2=0;
        return View('seller.showproduct',compact('product','payment_methods','counter','counter2','user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,Request $request)
    {
        $user=User::find($request->session()->get('id'));
        $payment_methods = array('none',"Bkash", "Nagod", "roket","Mkash","Ukash","Gkash");
        $counter=0;
        $counter2=0;
        return View('seller.editproduct',compact('product','payment_methods','counter','counter2','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {

        $product=Product::find($id);
        if($request->hasFile('product_picture')){
        if($product->product_picture)unlink($product->product_picture);
        $extension = $request->product_picture->getClientOriginalExtension();
        $newName = date('U').'.'.$extension;
        $folderPath = "seller/image/product/";
        $product->product_picture = $folderPath.$newName;
        $request->product_picture->move($folderPath, $newName);
        }


        $product->name= $request->input('name');
        $product->price= $request->input('price');
        // $product->product_picture= $request->input('product_picture');
        $product->description= $request->input('description');
        $product->number_of_info= $request->input('number_of_info');
        $product->Pyament_recive_no= $request->input('Pyament_recive_no');
        // $product->delete_status= $request->input('delete_status');
        $product->from_currency= $request->input('from_currency');
        $product->To_currency= $request->input('To_currency');
        $product->number_of_info=$request->input('number_of_info');
        $product->update();
        $request->session()->flash('msg','Product is Updated!');
        // return redirect()->route('seller.product.show',$product);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active(Request $request, $id )
    {   $product=Product::find($id);
        $product->delete_status= 'active';
        $product->update();
        $request->session()->flash('msg','Product activated Successfully');
        return redirect()->back();
    }

    public function deactive(Request $request, $id )
    {   $product=Product::find($id);
        $product->delete_status= 'deactive';
        $product->update();
        $request->session()->flash('msg','Product deactivated Successfully');
        return redirect()->back();
    }




    public function destroy(Product $product, ProductRequest $request)
    {
        $product->delete_status= 'deleted';
        $product->update();
        $request->session()->flash('msg','Product Deleted Successfully');
        return redirect()->route('seller.product.index');
    }
}
