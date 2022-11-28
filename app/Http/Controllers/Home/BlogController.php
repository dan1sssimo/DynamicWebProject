<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function AllBlog()
    {
        $blogs = Blog::latest()->get();

        return view('admin.blogs.blogs_all', compact('blogs'));
    }

    public function AddBlog()
    {
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.blogs.blog_add', compact('categories'));
    }

    public function StoreBlog(Request $request)
    {
        $request->validate([
            'blog_title' => 'required',
        ]);
        if ($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(430, 327)->save('upload/blog/' . $name_gen);
            $save_url = 'upload/blog/' . $name_gen;
            Blog::insert([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
        } else {
            Blog::insert([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'created_at' => Carbon::now(),
            ]);
        }
        $notification = array(
            'message' => 'Blog Data Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.blog')->with($notification);
    }

    public function EditBlog($id)
    {
        $blogs = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.blogs.blogs_edit', compact('blogs', 'categories'));
    }

    public function UpdateBlog(Request $request)
    {
        $blog_id = $request->id;

        if ($request->file('blog_image')) {
            $blogImage = Blog::findOrFail($blog_id);
            $img = $blogImage->blog_image;
            $image = $request->file('blog_image');
            unlink($img);
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(430, 327)->save('upload/blog/' . $name_gen);
            $save_url = 'upload/blog/' . $name_gen;
            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
                'blog_image' => $save_url,
            ]);
        } else {
            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'blog_title' => $request->blog_title,
                'blog_tags' => $request->blog_tags,
                'blog_description' => $request->blog_description,
            ]);
        }
        $notification = array(
            'message' => 'Blog Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.blog')->with($notification);
    }

    public function DeleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $img = $blog->blog_image;
        unlink($img);
        Blog::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.blog')->with($notification);
    }

    public function BlogDetails($id)
    {
        $allBlogs = Blog::latest()->limit(5)->get();
        $blogs = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('frontend.blog_details', compact('blogs', 'allBlogs', 'categories'));
    }

    public function CategoryBlog($id)
    {
        $allBlogs = Blog::latest()->limit(5)->get();
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        $blogpost = Blog::where('blog_category_id', $id)->orderBy('id', 'DESC')->get();
        $categoryName = BlogCategory::findOrFail($id);
        return view('frontend.category_blog_details', compact('blogpost', 'allBlogs', 'categories', 'categoryName'));
    }

    public function HomeBlog()
    {
        $allBlogs = Blog::latest()->get();
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('frontend.blog', compact('allBlogs','categories'));
    }
}
