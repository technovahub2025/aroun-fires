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

class PageController extends Controller
{
    public function dashboard()
    {
        // abort(500);
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
        $updatelatestnews = LatestNews::where('id', $id)->update([
            'message' => $message,
            'crm_id' => Auth::user()->id
        ]);
        return response()->json(['status' => '200', 'message' => 'Latest News Updated Successfuly']);
    }
    public function inactivelatestmessage(Request $request)
    {
        $id = $request->input('id');
        $updatelatestnews = LatestNews::where('id', $id)->update([
            'status' => 0,
            'crm_id' => Auth::user()->id

        ]);
        return response()->json(['status' => '200', 'message' => 'Latest News Updated Successfuly']);
    }
    public function reactivelatestmessage(Request $request)
    {
        $id = $request->input('id');
        $updatelatestnews = LatestNews::where('id', $id)->update([
            'status' => 1,
            'crm_id' => Auth::user()->id
        ]);
        return response()->json(['status' => '200', 'message' => 'Latest News Updated Successfuly']);
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
                $originalName = $file->getClientOriginalName();
                $sanitizedName = str_replace(' ', '_', $originalName);
                $filename = time() . '_' . $sanitizedName;
                $destinationPath = public_path('dynamic_images');

                $img = imagecreatefromstring(file_get_contents($file));

                if (!$img) {
                    return response()->json(['status' => '500', 'message' => 'Failed to create image.']);
                }

                $quality = 100;
                $maxFileSize = 4 * 1024 * 1024;
                $compressedFilePath = $destinationPath . '/' . $filename;
                while ($quality > 0) {
                    imagejpeg($img, $compressedFilePath, $quality);
                    if (filesize($compressedFilePath) <= $maxFileSize) {
                        break;
                    }

                    $quality -= 5;
                }

                imagedestroy($img);

                $gallery = Gallery::create([
                    'image' => $filename,
                    'category_id' => 1,
                    'status' => 1,
                    'crm_id' => Auth::user()->id
                ]);
            }
        }

        return response()->json(['status' => '200', 'message' => 'Images uploaded successfully.', 'data' => $gallery->id]);
    }

    public function getgallery(Request $request)
    {
        $id = $request->input('id');
        $getgallery = Gallery::where('id', $id)->first();
        return response()->json(['status' => '200', 'message' => 'Images uploaded successfully.', 'data' => $getgallery]);
    }
    public function addcategory(Request $request)
    {
        $category = $request->input('category');
        $insertcategory = Category::create([
            'category' => $category,
            'status' => 1,
            'crm_id' => Auth::user()->id,
            'created_at' => now('Asia/Kolkata'),
            'updated_at' => now('Asia/Kolkata'),
        ]);
        return response()->json(['status' => '200', 'message' => 'Images uploaded successfully.']);
    }
    public function editimage(Request $request)
    {
        $id = $request->input('id');
        $category = $request->input('category');
        $gallery = Gallery::find($id);
        if (!$gallery) {
            return response()->json(['status' => '404', 'message' => 'Gallery not found.']);
        }
        $filename = $gallery->image;
        if ($request->hasFile('image')) {
            if (file_exists(public_path('dynamic_images/' . $filename))) {
                unlink(public_path('dynamic_images/' . $filename));
            }
            $file = $request->file('image');
            $originalName = $file->getClientOriginalName();
            $sanitizedName = str_replace(' ', '_', $originalName);
            $filename = time() . '_' . $sanitizedName;
            $destinationPath = public_path('dynamic_images');
            $img = imagecreatefromstring(file_get_contents($file));

            if (!$img) {
                return response()->json(['status' => '500', 'message' => 'Failed to create image.']);
            }
            $quality = 50;
            $compressedFilePath = $destinationPath . '/' . $filename;
            imagejpeg($img, $compressedFilePath, $quality);
            imagedestroy($img);
        }
        $gallery->update([
            'image' => $filename,
            'category_id' => $category,
        ]);
        return response()->json(['status' => '200', 'message' => 'Images updated successfully.']);
    }
    public function deletegallery(Request $request)
    {
        $id = $request->input('id');
        $gallery = Gallery::find($id);
        if (!$gallery) {
            return response()->json(['status' => '404', 'message' => 'Gallery not found.']);
        }

        $imagePath = public_path('dynamic_images/' . $gallery->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $gallery->delete();

        return response()->json(['status' => '200', 'message' => 'Images deleted successfully.']);
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
            $file = $request->file('file');
            $destinationPath = public_path('dynamic_images');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($destinationPath, $fileName);
            $insertcatalogue = Catalogue::create([
                'file' => $fileName,
                'status' => 1,
                'crm_id' => Auth::user()->id,
                'created_at' => now('Asia/Kolkata'),
                'created_at' => now('Asia/Kolkata'),

            ]);
            return response()->json(['status' => '200', 'message' => 'File uploaded successfully', 'file' => $fileName]);
        }

        return response()->json(['status' => '400', 'message' => 'No file uploaded'], '400');
    }
    public function deletecatalogue(Request $request)
    {
        $id = $request->input('id');

        $catalogue = Catalogue::find($id);

        if ($catalogue) {
            $filePath = public_path('dynamic_images/' . $catalogue->file);

            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $catalogue->delete();
            return response()->json(['status' => '200', 'message' => 'Catalogue deleted successfully']);
        }

        return response()->json(['status' => '404', 'message' => 'Catalogue not found'], 404);
    }
    public function blog()
    {
        $blogs = Blog::where('status', 1)->paginate(5);
        return view('blogs.blogs', compact('blogs'));
    }
    public function addblog(Request $request)
    {
        if ($request->hasFile('image')) {
            $content = $request->input('code');
            $title = $request->input('title');
            $url = $request->input('url');
            $file = $request->file('image');
            $destinationPath = public_path('dynamic_images');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('dynamic_images');
            $img = imagecreatefromstring(file_get_contents($file));

            if (!$img) {
                return response()->json(['status' => '500', 'message' => 'Failed to create image.']);
            }
            $quality = 50;
            $compressedFilePath = $destinationPath . '/' . $fileName;
            imagejpeg($img, $compressedFilePath, $quality);
            imagedestroy($img);
            $insertblog = Blog::create([
                'image' => $fileName,
                'content' => $content,
                'title' => $title,
                'url' => $url,
                'status' => 1,
                'crm_id' => Auth::user()->id,
                'created_at' => now('Asia/Kolkata'),
                'updated_at' => now('Asia/Kolkata'),
            ]);
            return response()->json(['status' => '200', 'message' => 'File uploaded successfully']);
        }
    }
    public function editblog(Request $request)
    {
        $id = $request->input('id');
        $getblog = Blog::where('id', $id)->first();
        return response()->json(['status' => '200', 'message' => 'Edit blog successfully', 'data' => $getblog]);
    }
    public function updateblog(Request $request)
    {
        $id = $request->input('id');
        $blog = Blog::find($id);
        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        $title = $request->input('title');
        $content = $request->input('code');

        if ($request->hasFile('image')) {
            if ($blog->image) {
                $oldImagePath = public_path('dynamic_images/' . $blog->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
            $file = $request->file('image');
            $destinationPath = public_path('dynamic_images');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('dynamic_images');
            $img = imagecreatefromstring(file_get_contents($file));

            if (!$img) {
                return response()->json(['status' => '500', 'message' => 'Failed to create image.']);
            }
            $quality = 50;
            $compressedFilePath = $destinationPath . '/' . $fileName;
            imagejpeg($img, $compressedFilePath, $quality);
            imagedestroy($img);

            $blog->image = $fileName;
        }

        $blog->title = $title;
        $blog->content = $content;
        $blog->save();

        return response()->json(['status' => '200', 'message' => 'Blog updated successfully']);
    }
    public function deleteblog(Request $request)
    {
        $id = $request->input('id');
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['status' => '404', 'message' => 'Blog not found'], 404);
        }

        if ($blog->image) {
            $imagePath = public_path('dynamic_images/' . $blog->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
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
            if ($mainproduct->crm_id) {
                $crm = User::find($mainproduct->crm_id);
                $mainproduct->crm_name = $crm ? ucfirst($crm->name) : 'Unknown CRM';
            } else {
                $mainproduct->crm_name = 'Unknown Crm';
            }
        }
        return view('products.mainproduct', compact('mainproducts'));
    }
    public function insertmainproduct(Request $request)
    {
        $productname = $request->input('productname');
        $description = $request->input('description');
        if ($request->hasFile('croppedImage')) {
            $file = $request->file('croppedImage');
            $destinationPath = public_path('dynamic_images');
            $fileName = time() . '_' . $file->getClientOriginalName() . '.png';
            $destinationPath = public_path('dynamic_images');
            $img = imagecreatefromstring(file_get_contents($file));

            if (!$img) {
                return response()->json(['status' => '500', 'message' => 'Failed to create image.']);
            }
            $quality = 50;
            $compressedFilePath = $destinationPath . '/' . $fileName;
            imagejpeg($img, $compressedFilePath, $quality);
            imagedestroy($img);
            $insertmainproduct = MainProduct::create([
                'product_name' => $productname,
                'description' => $description,
                'image' => $fileName,
                'status' => 1,
                'crm_id' => Auth::user()->id,
                'created_at' => now('Asia/Kolkata'),
                'updated_at' => now('Asia/Kolkata'),
            ]);
            return response()->json(['status' => '200', 'message' => 'Main product added successfully']);
        }
    }
    public function editmainproduct(Request $request)
    {
        $id = $request->input('id');
        $getmainproduct = MainProduct::where('id', $id)->first();
        return response()->json(['status' => '200', 'message' => 'Main product added successfully', 'data' => $getmainproduct]);
    }
    public function updatemainproduct(Request $request)
    {
        $id = $request->input('id');
        $product = MainProduct::find($id);
        if (!$product) {
            return response()->json(['message' => 'product not found'], 404);
        }

        $productname = $request->input('productname');
        $description = $request->input('description');

        if ($request->hasFile('croppedImage')) {
            if ($product->image) {
                $oldImagePath = public_path('dynamic_images/' . $product->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
            $file = $request->file('croppedImage');
            $destinationPath = public_path('dynamic_images');
            $fileName = time() . '_' . $file->getClientOriginalName() . '.png';
            $destinationPath = public_path('dynamic_images');
            $img = imagecreatefromstring(file_get_contents($file));

            if (!$img) {
                return response()->json(['status' => '500', 'message' => 'Failed to create image.']);
            }
            $quality = 50;
            $compressedFilePath = $destinationPath . '/' . $fileName;
            imagejpeg($img, $compressedFilePath, $quality);
            imagedestroy($img);

            $product->image = $fileName;
        }

        $product->product_name = $productname;
        $product->description = $description;
        $product->save();

        return response()->json(['status' => '200', 'message' => 'Product Updated updated successfully']);
    }
    public function deletemainproduct(Request $request)
    {
        $id = $request->input('id');
        $product = MainProduct::find($id);
        if (!$product) {
            return response()->json(['status' => '404', 'message' => 'product not found.']);
        }

        $imagePath = public_path('dynamic_images/' . $product->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $product->delete();
        return response()->json(['status' => '200', 'message' => 'Product Deleted successfully']);
    }
    public function subproduct(Request $request)
    {
        $subproducts = SubProduct::where('status', 1)->with('mainproduct')->get();
        foreach ($subproducts as $subproduct) {
            $subproduct->created_log = Carbon::parse($subproduct->created_log)->format('d M Y h:i:s A');
            $subproduct->updated_log = Carbon::parse($subproduct->updated_log)->format('d M Y h:i:s A');
            if ($subproduct->crm_id) {
                $crm = User::find($subproduct->crm_id);
                $subproduct->crm_name = $crm ? ucfirst($crm->name) : 'Unknown CRM';
            } else {
                $subproduct->crm_name = 'Unknown Crm';
            }
        }
        // return $subproducts;
        $mainproducts = MainProduct::where('status', 1)->get();
        return view('products.subproduct', compact('mainproducts', 'subproducts'));
    }
    public function insertsubproduct(Request $request)
    {
        $mainproduct = $request->input('mainproduct');
        $subproduct = $request->input('subproduct');
        $url = $request->input('url');
        $price = $request->input('price');
        $description = $request->input('description');
        if ($request->hasFile('croppedImage')) {
            $file = $request->file('croppedImage');
            $destinationPath = public_path('dynamic_images');
            $fileName = time() . '_' . $file->getClientOriginalName() . '.png';
            $file->move($destinationPath, $fileName);
            $insertmainproduct = SubProduct::create([
                'main_product_id' => $mainproduct,
                'name' => $subproduct,
                'price' => $price,
                'description' => $description,
                'url' => $url,
                'image' => $fileName,
                'status' => 1,
                'crm_id' => Auth::user()->id,
                'created_at' => now('Asia/Kolkata'),
                'updated_at' => now('Asia/Kolkata'),
            ]);
            return response()->json(['status' => '200', 'message' => 'Sub product added successfully']);
        }
    }
    public function editsubproduct(Request $request)
    {
        $id = $request->input('id');
        $subproducts = SubProduct::where('id', $id)->with('mainproduct')->first();
        return response()->json(['status' => '200', 'message' => 'Sub product Details', 'data' => $subproducts]);
    }
    public function updatesubproduct(Request $request)
    {
        $id = $request->input('id');
        $product = SubProduct::find($id);
        if (!$product) {
            return response()->json(['message' => 'product not found'], 404);
        }

        $mainproduct = $request->input('mainproduct');
        $subproduct = $request->input('subproduct');
        $price = $request->input('price');
        $description = $request->input('description');

        if ($request->hasFile('croppedImage')) {
            if ($product->image) {
                $oldImagePath = public_path('dynamic_images/' . $product->image);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
            $file = $request->file('croppedImage');
            $destinationPath = public_path('dynamic_images');
            $fileName = time() . '_' . $file->getClientOriginalName() . '.png';
            $destinationPath = public_path('dynamic_images');
            $img = imagecreatefromstring(file_get_contents($file));

            if (!$img) {
                return response()->json(['status' => '500', 'message' => 'Failed to create image.']);
            }
            $quality = 50;
            $compressedFilePath = $destinationPath . '/' . $fileName;
            imagejpeg($img, $compressedFilePath, $quality);
            imagedestroy($img);

            $product->image = $fileName;
        }

        $product->main_product_id = $mainproduct;
        $product->name = $subproduct;
        $product->price = $price;
        $product->description = $description;
        $product->save();

        return response()->json(['status' => '200', 'message' => 'Product Updated updated successfully']);
    }
    public function deletesubproduct(Request $request)
    {
        $id = $request->input('id');
        $product = SubProduct::find($id);
        if (!$product) {
            return response()->json(['status' => '404', 'message' => 'product not found.']);
        }

        $imagePath = public_path('dynamic_images/' . $product->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $product->delete();
        return response()->json(['status' => '200', 'message' => 'Product Deleted successfully']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
