<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Filable;
use App\State;
use App\User;
use App\Major;
use App\Degree;
use App\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class FileController extends Controller
{
	private $uploadsPath;
	private $thumbnailPath;
 
    public function __construct()
    {
        $this->uploadsPath = public_path('/img/uploads');
        $this->thumbnailPath = public_path('/img/uploads/thumbnails');
    }
    public function index()
    {
    	$photos = Filable::all();
        return view('file/index', [
        	'photoes' => $photos,
        ]);
    }

    public function store(Request $request)
    {
        $photos = $request->file('file');
 
        if (!is_array($photos)) {
            $photos = [$photos];
        }
 
        if (!is_dir($this->uploadsPath)) {
            mkdir($this->uploadsPath, 0777);
        }
        if (!is_dir($this->thumbnailPath)) {
            mkdir($this->thumbnailPath, 0777);
        }
        $uploadedFiles = [];
        foreach($photos as $photo) {
        	$name = time().uniqid(rand()).'.'.$photo->getClientOriginalExtension();
 
            Image::make($photo)
                ->resize(250, null, function ($constraints) {
                    $constraints->aspectRatio();
                })
                ->save($this->thumbnailPath . '/' . $name);
 
            $photo->move($this->uploadsPath, $name);
 
            $filable = new Filable();
            $filable->name = $name;
            $filable->src = $name;
            $filable->file_type = 'image';
            $filable->filable_id = 1;
            $filable->filable_type = 'dddd';
            $filable->save();
            $uploadedFiles[] = $filable->id;
        }
        return response()->json([
                'success'   =>1,
                'message'   => 'File is Uploaded: '.implode(',', $uploadedFiles)], 200);
    }
 
    /**
     * Remove the images from the storage.
     *
     * @param Request $request
     */
    public function destroy(Request $request)
    {
        $filename = $request->id;
        $Filableed_image = Filable::where('original_name', basename($filename))->first();
 
        if (empty($Filableed_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }
 
        $file_path = $this->photos_path . '/' . $Filableed_image->filename;
        $resized_file = $this->photos_path . '/' . $Filableed_image->resized_name;
 
        if (file_exists($file_path)) {
            unlink($file_path);
        }
 
        if (file_exists($resized_file)) {
            unlink($resized_file);
        }
 
        if (!empty($Filableed_image)) {
            $Filableed_image->delete();
        }
 
        return Response::json(['message' => 'File successfully delete'], 200);
    }
}
