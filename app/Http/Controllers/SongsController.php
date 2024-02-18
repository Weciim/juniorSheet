<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongsController extends Controller
{
      public function home(){
        return View('songs.home');
      }
      public function song($id){
        $song=Song::findOrFail($id);
        return View('songs.song',compact('song'));
      }
      public function create(){
         return View('songs.create');
      }
      public function treat(Request $request){
        $request->validate(['title'=>'required',
        'artist'=>'required',
        'description'=>'required',
        'link'=>'required',
        'lyrics'=>'required',
        'platform'=>'required',]);
        $song=new Song();
        $song->song_title=$request->title;
        $song->artist=$request->artist;
        $song->description=$request->description;
        $song->song_link=$request->link;
        $song->lyrics=$request->lyrics;
        $song->platform=$request->platform;
        $song->save();
        return redirect()->route('songs.song',$song->id);
      }
}
