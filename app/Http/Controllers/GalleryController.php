<?php
namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

	public function viewGalleryList()
	{
		$galleries = Gallery::where('created_by', Auth::user()->id)->get();
		return view('gallery.gallery')
		->with('galleries', $galleries);

	}

	public function saveGallery(Request $request)
	{	
		//validate through rules
		$validator = Validator::make($request->all(), [
				'gallery_name' => 'required|min:3',

			]);
		//action if fail
		if($validator->fails()){
			return redirect('gallery/list')
			->withErrors($validator)
			->withInput();

		}
		$gallery = new Gallery;
		//save new gallery
		$gallery->name = $request->input('gallery_name');
		$gallery->created_by = Auth::user()->id;
		$gallery->published = 1;
		$gallery->save();

		return redirect()->back();
		
	}
	public function viewGalleryPics($id)
	{

		$gallery = Gallery::findorfail($id);
		return view('gallery.gallery-view')
		->with('gallery', $gallery);
		
	}
	public function doImageUpload(Request $request)
	{
		//get file from post 
		$file = $request->file('file');
		//set filename
		$filename = uniqid().$file->getClientOriginalName();


		//move to location
		if (!file_exists('gallery/images')){
			mkdir('gallery/images', 0777, true);
		}
		$file->move('gallery/images', $filename);

		if (!file_exists('gallery/images/thumbs')){
			mkdir('gallery/images/thumbs', 0777, true);
		}
		//save image details to db
		$thumb = Image::make('gallery/images/'.$filename)->resize(240, 160)->save('gallery/images/thumbs/'.$filename, 50);
		$gallery = Gallery::find($request->input('gallery_id'));
		$image = $gallery->images()->create([
			'gallery_id' => $request->input('gallery_id'),
			'file_name' => $filename,
			'file_size' => $file->getClientSize(),
			'file_mime' => $file->getClientMimeType(),
			'file_path' => 'gallery/images/' . $filename,
			'created_by' => Auth::user()->id,
		]);

		return $image;
	}
	public function deleteGallery($id){
		//load gallery
		$currentGallery = Gallery::findorfail($id);
		//authentication
		if($currentGallery->created_by === !Auth::user()->id) {
			abort('403', 'You are not allowed to view this gallery');
		}
		//get images
		$images = $currentGallery->images();
		//delete images
		foreach ($currentGallery->images() as $image) {
			unlink(public_path($image->file_path));
		}
		//delete db records
		$currentGallery->images()->delete();

		$currentGallery->delete();

		return redirect()->back();
	}

}