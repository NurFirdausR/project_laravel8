<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{


    public function __construct()
    {
       $this->middleware(['auth:sanctum', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $post = DB::table('post')->get();
        $user = Auth::user();
        
        $post = $user->posts; 
                // dd($post);
        return view('table-post.index', compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('table-post.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required|unique:post',
            'body' => 'required',
        ]);
        //1.explode untuk menggubah request tags menjadi array
        $tags_arr = explode(',',$request["tags"]);
        // dd($tags_arr);
        //2.looping array teks yang tadi ,buat array penampung  
        //3.setiap sekali looping lakukan pengecekan apakah sudah ada tag nya
        //4.kalo sudah ada ambil id nya
        //5.kalo belom ada simpan dulu tag nya, lalu ambil id nya
        //6.tampung id di array penampung
        $tag_ids = [];
        foreach($tags_arr as $tag_name){
            $tag = Tag::firstOrCreate(["tag_name" => $tag_name]);
            $tag_ids[] = $tag->id;
            // if ($tag) {
            //     $tag_ids[] = $tag->id;
            // }else{
            //     $new_tag = Tag::create(["tag_name"=>$tag_name]);
            //     $tag_ids[] = $new_tag->id;
            // }
        }
    //  $a  = wdw:ss{{

         // dd($tag_ids);
         // Menggunakan MEtode Query Builder
         // $query = DB::table('post')->insert([
         //     "title" => $request["title"],
         //     "body" => $request["body"]
         // ]);
 
 
         // Menggunakan Metode ORM
         // $post = new Post;
         // $post->title = $request["title"];
         // $post->body =  $request["body"];
         // $post->save();
    //   }}

        //Menggunakan Mass Assigment
        

        $post  = Post::create([
            "title" => $request["title"],
            "body" => $request["body"],
            "user_id" => Auth::id(),
            
        ]);
        $post->tags()->sync($tag_ids);

        return redirect('layout/post')->with('success', 'Data Berhasil di tambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $show = DB::table('post')->where('id', $id)->get();
        //menggunakan find
        $post = Post::find($id);

        //menggunakan WHere 
        // $post = Post::where('id', $id)->first();
        return view('table-post.show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $post = DB::table('post')->where('id', $id)->first();
        $post = Post::find($id);
        return view('table-post.edit', compact('post'));

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
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        // $query = DB::table('post')
        //     ->where('id', $id)
        //     ->update([
        //         'title' => $request["title"],
        //         'body' => $request["body"]
        //     ]);

        //menggunakan where
        $update = Post::where('id',$id)->update([
            "title"=> $request["title"],
            "body"=>$request["body"]
        ]);
        return redirect('/layout/post')->with('success','Data Berhasil Di Ubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  $query = DB::table('post')->where('id', $id)->delete();

        $post = Post::destroy($id);
        return redirect('/layout/post')->with('success','Data berhasil Di hapus');

    }
}
