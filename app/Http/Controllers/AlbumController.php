<?php


namespace App\Http\Controllers;

use App\Album;
use App\AlbumPhotos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::where('dept_id',\Auth::user()->dept->id)->get();
        $albumIds = Album::where('dept_id',\Auth::user()->dept->id)->lists('id','id');
        $photos = AlbumPhotos::whereIn('album_id',$albumIds)->get();
        return view('album.index', compact('albums','photos'))->with('title',"Your Albums");
    }


    /**
     * @param $id
     * @return $this
     */
    public function search($id){
        $albums = Album::where('dept_id',\Auth::user()->dept->id)->get();
        //$albumIds = Album::where('id',$id)->first();
        $al = Album::findOrFail($id);
        $photos = AlbumPhotos::where('album_id',$id)->get();
        return view('album.index', compact('albums','photos','al'))->with('title','Album - '.$al->album_title);
    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.create')->with('title',"Create New Album");
    }





    public function store(Request $request)
    {

        $data = $request->all();

        $album = new Album();
        $album->dept_id = $request->dept_id;
        $album->album_title = $data['album_title'];
        $album->album_details = $data['album_details'];
        if($album->save()){

            //file save
            if( $request->hasFile('file')) {
                $files =$data['file'];
                foreach ($files as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
                    //path set
                    $img_url = 'upload/albumImage/Album-'.$album->id.'_'.$fileName;
                    //resize and crop image using Image Intervention
                    // Image::make($file)->crop(558, 221, 30, 30)->save(public_path($img_url));


                    list($width, $height) = getimagesize($file);
                    $h = ($height/$width)*600;
               //     Image::make($file)->resize(600, $h)->save(public_path($img_url));
                    Image::make($file)->save(public_path($img_url));

                    $albumFile = new AlbumPhotos();
                    $albumFile->album_id = $album->id;
                    $albumFile->album_photo = $img_url;
                    $albumFile->album_photo_title = str_slug($album->album_title,'-').rand(11111, 99999).rand(7889,546678);
                    $albumFile->save();
                }
            }
            return redirect()->route('album.index')->with('success', 'Album Successfully Created');
        }
        return redirect()->route('album.index')->withInput()->with('error', 'Something went wrong');
    }








    /**
     * Destroy the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function photoDestroy($id)
    {
        $photos = AlbumPhotos::find($id);

        $filename = public_path().'upload/AlbumImage/Album-'.$photos->album_photo;

        if (\File::exists($filename)) {

            if(\File::delete($filename) && AlbumPhotos::destroy($id)){
                return redirect()->route('album.index')->with('success',"Photo deleted Successfully.");
            }
            else{
                return redirect()->route('dashboardalbum.index')->with('error',"Something went wrong.Try again");
            }
        }
        else{
            if(AlbumPhotos::destroy($id)){
                return redirect()->back()->with('success',"Photo deleted Successfully.");
            }
            else{
                return redirect()->back()->with('error',"Something went wrong.Try again");
            }
        }

    }








    public function updateAlbumImage()
    {
        $data = \Input::all();

        //file save
        if (\Input::hasFile('file')) {
            $files = $data['file'];
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
                //path set
                $img_url = 'upload/albumImage/Album-' . $data['album_id'] . '_' . $fileName;
                //resize and crop image using Image Intervention
                // Image::make($file)->crop(558, 221, 30, 30)->save(public_path($img_url));
                list($width, $height) = getimagesize($file);
                $h = ($height/$width)*600;
               // Image::make($file)->resize(600, $h)->save(public_path($img_url));
                Image::make($file)->save(public_path($img_url));
                $albumFile = new AlbumPhotos();
                $albumFile->album_id = $data['album_id'];
                $albumFile->album_photo = $img_url;
                $albumFile->album_photo_title = 'newImage-' . rand(11111, 99999) . rand(7889, 546678);
                $albumFile->save();
            }
            return redirect()->route('album.search', $data['album_id'])->with('success', 'Photos Successfully Updated');

        }else{
            return redirect()->route('album.search', $data['album_id'])->with('error', 'Something went wrong');
        }



    }










}
