<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Catalogue;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\LatestNews;
use App\Models\MainProduct;
use App\Models\SubProduct;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function dashboard()
    {
        $gallerycount = Gallery::where('status', 1)->count();
        $blogcount = Blog::where('status', 1)->count();
        $subproductcount = SubProduct::where('status', 1)->count();
        $mainproductcount = MainProduct::where('status', 1)->count();
        $admincount = User::where('status', 1)->count();

        return view('pages.dashboard', compact('gallerycount', 'blogcount', 'subproductcount', 'mainproductcount', 'admincount'));
    }

    public function latestnews(Request $request)
    {
        $latestnews = LatestNews::first();
        return view('pages.news', compact('latestnews'));
    }

    public function updatelatestnews(Request $request)
    {
        $id = $request->input('id');
        $message = $request->input('message');
        LatestNews::where('id', $id)->update([
            'message' => $message,
            'crm_id' => Auth::user()->id
        ]);
        return response()->json(['status' => '200', 'message' => 'Latest News Updated Successfully']);
    }

    public function inactivelatestmessage(Request $request)
    {
        $id = $request->input('id');
        LatestNews::where('id', $id)->update([
            'status' => 0,
            'crm_id' => Auth::user()->id
        ]);
        return response()->json(['status' => '200', 'message' => 'Latest News Deactivated Successfully']);
    }

    public function reactivelatestmessage(Request $request)
    {
        $id = $request->input('id');
        LatestNews::where('id', $id)->update([
            'status' => 1,
            'crm_id' => Auth::user()->id
        ]);
        return response()->json(['status' => '200', 'message' => 'Latest News Activated Successfully']);
    }

    public function gallery()
    {
        $gallerys = Gallery::where('status', 1)->get();
        $categorys = Category::where('status', 1)->get();
        return view('pages.gallery', compact('gallerys', 'categorys'));
    }

    public function uploadimage(Request $request)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('gallery', 'public'); // Saves to storage/app/public/gallery

                Gallery::create([
                    'image' => $path,
                    'category_id' => 1,
                    'status' => 1,
                    'crm_id' => Auth::user()->id
                ]);
            }
        }

        return response()->json(['status' => '200', 'message' => 'Images uploaded successfully.']);
    }

    public function getgallery(Request $request)
    {
        $id = $request->input('id');
        $getgallery = Gallery::where('id', $id)->first();
        return response()->json(['status' => '200', 'data' => $getgallery]);
    }

    public function addcategory(Request $request)
    {
        $category = $request->input('category');
        Category::create([
            'category' => $category,
            'status' => 1,
            'crm_id' => Auth::user()->id,
            'created_at' => now('Asia/Kolkata'),
            'updated_at' => now('Asia/Kolkata'),
        ]);
        return response()->json(['status' => '200', 'message' => 'Category added successfully.']);
    }

    public function editimage(Request $request)
    {
        $id = $request->input('id');
        $category = $request->input('category');
        $gallery = Gallery::find($id);

        if (!$gallery) {
            return response()->json(['status' => '404', 'message' => 'Gallery not found.']);
        }

        if ($request->hasFile('image')) {
            // Delete old image
            if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }

            $path = $request->file('image')->store('gallery', 'public');
            $gallery->image = $path;
        }

        $gallery->category_id = $category;
        $gallery->save();

        return response()->json(['status' => '200', 'message' => 'Image updated successfully.']);
    }

    public function deletegallery(Request $request)
    {
        $id = $request->input('id');
        $gallery = Gallery::find($id);

        if (!$gallery) {
            return response()->json(['status' => '404', 'message' => 'Gallery not found.']);
        }

        if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return response()->json(['status' => '200', 'message' => 'Image deleted successfully.']);
    }

    public function catalogue()
    {
        $catalogue = Catalogue::where('status', 1)->first();
        return view('pages.catalogue', compact('catalogue'));
    }

    public function uploadcatalogue(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,gif,pdf,doc,docx|max:5048',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('catalogue', 'public');

            Catalogue::create([
                'file' => $path,
                'status' => 1,
                'crm_id' => Auth::user()->id,
            ]);

            return response()->json(['status' => '200', 'message' => 'File uploaded successfully', 'file' => $path]);
        }

        return response()->json(['status' => '400', 'message' => 'No file uploaded']);
    }

    public function deletecatalogue(Request $request)
    {
        $id = $request->input('id');
        $catalogue = Catalogue::find($id);

        if ($catalogue) {
            if ($catalogue->file && Storage::disk('public')->exists($catalogue->file)) {
                Storage::disk('public')->delete($catalogue->file);
            }
            $catalogue->delete();
            return response()->json(['status' => '200', 'message' => 'Catalogue deleted successfully']);
        }

        return response()->json(['status' => '404', 'message' => 'Catalogue not found']);
    }

    public function blog()
    {
        $blogs = Blog::where('status', 1)->paginate(5);
        return view('blogs.blogs', compact('blogs'));
    }

    public function addblog(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'code' => 'required',
            //'url' => 'nullable|url',
            'url' => ['nullable', 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        Blog::create([
            'image' => $imagePath,
            'content' => $request->code,
            'title' => $request->title,
            'url' => $request->url,
            'status' => 1,
            'crm_id' => Auth::user()->id,
        ]);

        return response()->json(['status' => '200', 'message' => 'Blog added successfully']);
    }

    public function editblog(Request $request)
    {
        $id = $request->input('id');
        $blog = Blog::find($id);
        return response()->json(['status' => '200', 'data' => $blog]);
    }

    public function updateblog(Request $request)
    {
        $id = $request->input('id');
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        $blog->title = $request->input('title');
        $blog->content = $request->input('code');

        if ($request->hasFile('image')) {
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save();

        return response()->json(['status' => '200', 'message' => 'Blog updated successfully']);
    }

    public function deleteblog(Request $request)
    {
        $id = $request->input('id');
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['status' => '404', 'message' => 'Blog not found']);
        }

        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return response()->json(['status' => '200', 'message' => 'Blog deleted successfully']);
    }

    public function mainproduct(Request $request)
    {
        $mainproducts = MainProduct::where('status', 1)->get();
        foreach ($mainproducts as $mainproduct) {
            $mainproduct->created_log = Carbon::parse($mainproduct->created_log)->format('d M Y h:i:s A');
            $mainproduct->updated_log = Carbon::parse($mainproduct->updated_log)->format('d M Y h:i:s A');
            $mainproduct->crm_name = $mainproduct->crm_id ? ucfirst(User::find($mainproduct->crm_id)?->name ?? 'Unknown') : 'Unknown';
        }
        return view('products.mainproduct', compact('mainproducts'));
    }

    public function insertmainproduct(Request $request)
    {
        $validated = $request->validate([
            'productname' => 'required|string|max:255',
            'description' => 'required',
            'croppedImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $imagePath = null;
        if ($request->hasFile('croppedImage')) {
            $imagePath = $request->file('croppedImage')->store('mainproducts', 'public');
        }

        MainProduct::create([
            'product_name' => $request->productname,
            'description' => $request->description,
            'image' => $imagePath,
            'status' => 1,
            'crm_id' => Auth::user()->id,
        ]);

        return response()->json(['status' => '200', 'message' => 'Main product added successfully']);
    }

    public function editmainproduct(Request $request)
    {
        $id = $request->input('id');
        $product = MainProduct::find($id);
        return response()->json(['status' => '200', 'data' => $product]);
    }

    public function updatemainproduct(Request $request)
    {
        $id = $request->input('id');
        $product = MainProduct::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->product_name = $request->input('productname');
        $product->description = $request->input('description');

        if ($request->hasFile('croppedImage')) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $product->image = $request->file('croppedImage')->store('mainproducts', 'public');
        }

        $product->save();

        return response()->json(['status' => '200', 'message' => 'Product updated successfully']);
    }

    public function deletemainproduct(Request $request)
    {
        $id = $request->input('id');
        $product = MainProduct::find($id);

        if (!$product) {
            return response()->json(['status' => '404', 'message' => 'Product not found']);
        }

        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return response()->json(['status' => '200', 'message' => 'Product deleted successfully']);
    }

    public function subproduct(Request $request)
    {
        $subproducts = SubProduct::where('status', 1)->with('mainproduct')->get();
        foreach ($subproducts as $subproduct) {
            $subproduct->created_log = Carbon::parse($subproduct->created_log)->format('d M Y h:i:s A');
            $subproduct->updated_log = Carbon::parse($subproduct->updated_log)->format('d M Y h:i:s A');
            $subproduct->crm_name = $subproduct->crm_id ? ucfirst(User::find($subproduct->crm_id)?->name ?? 'Unknown') : 'Unknown';
        }
        $mainproducts = MainProduct::where('status', 1)->get();
        return view('products.subproduct', compact('mainproducts', 'subproducts'));
    }

    public function insertsubproduct(Request $request)
    {
        $validated = $request->validate([
            'mainproduct' => 'required|exists:tb1_mainproduct,id',
            'subproduct' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            //'url' => 'nullable|url',
            'url' => 'nullable|string|max:500',
            //'url' => ['nullable', 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'],
            'croppedImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        $imagePath = null;
        if ($request->hasFile('croppedImage')) {
            $imagePath = $request->file('croppedImage')->store('subproducts', 'public');
        }

        SubProduct::create([
            'main_product_id' => $request->mainproduct,
            'name' => $request->subproduct,
            'price' => $request->price,
            'description' => $request->description,
            'url' => $request->url,
            'image' => $imagePath,
            'status' => 1,
            'crm_id' => Auth::user()->id,
        ]);

        return response()->json(['status' => '200', 'message' => 'Sub product added successfully']);
    }

    public function editsubproduct(Request $request)
    {
        $id = $request->input('id');
        $subproduct = SubProduct::where('id', $id)->with('mainproduct')->first();
        return response()->json(['status' => '200', 'data' => $subproduct]);
    }

    public function updatesubproduct(Request $request)
    {
        $id = $request->input('id');
        $product = SubProduct::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->main_product_id = $request->input('mainproduct');
        $product->name = $request->input('subproduct');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        if ($request->hasFile('croppedImage')) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $product->image = $request->file('croppedImage')->store('subproducts', 'public');
        }

        $product->save();

        return response()->json(['status' => '200', 'message' => 'Sub product updated successfully']);
    }

    public function deletesubproduct(Request $request)
    {
        $id = $request->input('id');
        $product = SubProduct::find($id);

        if (!$product) {
            return response()->json(['status' => '404', 'message' => 'Product not found']);
        }

        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return response()->json(['status' => '200', 'message' => 'Sub product deleted successfully']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
