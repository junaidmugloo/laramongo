<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Signup;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Signup::get();

      return view('home',compact('data'));

        // foreach ($data as $item) {
        //   echo "$item->name<br>";
        //   echo "$item->email<br>";
        //   echo "$item->password<br>";
        // }
    }
    public function send_otp(){
        return view('home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flag=9;
        $data = Signup::get();

        foreach ($data as $item) {
         if( $request->email==$item->email)
         {
            return response()->json(["result" => "email exist"]);
            $flag=1;
         }
         else
          $flag=0;
        }
        
        if($flag==0)
        {
        $yourModel = new Signup;
        $yourModel->name = $request->name;
        $yourModel->email =  $request->email;;  
        $yourModel->password =  $request->password;
        $yourModel->save();
        return redirect('show');
        }
    
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
        $data = signup::find($id);
        return view('edit',compact('data'));
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
       

        $post = signup::find($id);
        $post->name = $request->name;
        $post->email = $request->email;
        $post->password = $request->password;
        $post->save();
        return redirect('show'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Signup::find($id)->delete();
       return redirect('show'); 
    }

}

