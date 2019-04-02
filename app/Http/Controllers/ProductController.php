<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Random as RandomService;
use App\Http\Requests\ProductRequest;
use App\Mail\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd( request()->session()->get('name', function() {
        //     return 'aaa' . random_int(1, 100);  
        // }) );

        // session()->put('name', session('name', []) );
        // session()->push('name', 1);

        // session(['a1' => '123', 'a2' => '321']);

        // dump(session()->all());

        // session()->flush();

        // dd( session()->all() );


        // Cache::put('key', 'value', 1);

        // dd(Cache::get('key', 'aaa'));

        // dd(Cache::increment('increment'));


        // dd( Cache::remember('key', 10, function () {
        //     return random_int(1, 4);
        // }) );

        // Cache::forget('key');
        // Cache::put('key', 'PutValue', 10);

        // Cache::add('key', 'addVal', 10);

        // dd(Cache::get('key'));

        // Cache::put('key', 'PutValue', 10);

        // cache(['key' => 111], 10);

        // dd(cache('key'));

        // $class = new \App\Http\Controllers\HomeController();

        // dd(class_basename($class));

        // echo e("<b>string</b>");

        // die();

        // dd(config('filesystems.disks'));


        
            
        Mail::to('test@mail.ru')->send(new Test('Ivan'));

        dd(1);


















        // DB::table('products')->insert([
            // [
            // 'name' => 'asdasdsad',
            // 'description' => 'asdasdsad',
            // 'price' => 1,
            // ],
        //     [
        //     'name' => 'asdasdsad1111',
        //     'description' => 'asdasdsad1111',
        //     'price' => 2,
        //     ],
        // ]);

        // dd(DB::table('products')->insertGetId(
        //     [
        //         'name' => 'asdasdsad',
        //         'description' => 'asdasdsad',
        //         'price' => 1,
        //     ]
        // ));

        // DB::table('products')->updateOrInsert(
        //     ['id' => 2],
        //     ['name' => '1111111111', 'description' => '222222']
        // );

        // DB::table('products')->where('id', 1)->update([
        //     'name' => '123455asdas'
        // ]);

        // DB::table('products')->where('id', 1)->delete();

        // $products = DB::table('products')
        //                 // ->where('id', 2)
        //                 // ->orWhere('price', 2)
        //                 ->get();
        //                 // ->avg('price');
        //                 // ->offset(2)
        //                 // ->limit(3)
        //                 // ->get();

        // $products = DB::table('products')
        // // ->join('users', 'users.id', '=', 'products.user_id')
        // ->get();

        // dd($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->only(['name', 'description']);
        $data['user_id'] = 1;
        // $data['user_id'] = Auth::id();

        DB::table('products')->insert($data);
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = [
            'name' => 'asdd',
            'description' => 'asddadsadas',
        ];

        // return view('products.edit', compact(['product']));
        return view('products.edit', [
            'product' => $product
        ]);
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
        $data = $request->only(['name', 'description', 'price']);
        $data['user_id'] = 1;

        DB::table('products')->whereId($id)->update($data);
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->whereId($id)->delete();
        return redirect(route('products.index'));
    }
}
