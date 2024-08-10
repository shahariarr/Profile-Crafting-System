<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class BlogPostController extends Controller
{
    public function create()
    {
        return view('UserProfile.blog.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            ]);

            $user = Auth::user();

            $blogPost = new BlogPost();
            $blogPost->user_id = $user->id;
            $blogPost->title = $request->title;
            $blogPost->content = $request->content;

            if ($request->hasFile('image')) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('blog_images'), $imageName);
                $blogPost->image = $imageName;
            }

            $blogPost->save();

            return redirect()->route('blog-post.index')->with('success', 'Blog post created successfully.');
        } catch (Exception $e) {
            return redirect()->route('blog-post.create')->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $blogPost = BlogPost::where('id', $id)->where('user_id', auth()->id())->first();

            if (!$blogPost) {
                return redirect()->route('blog-post.create')->with('error', 'Blog post not found.');
            }

            return view('UserProfile.blog.edit', compact('blogPost'));
        } catch (Exception $e) {
            return redirect()->route('blog-post.create')->with('error', 'An error occurred while retrieving your blog post.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            ]);

            $blogPost = BlogPost::where('id', $id)->where('user_id', auth()->id())->first();

            if (!$blogPost) {
                return redirect()->route('blog-post.create')->with('error', 'Blog post not found.');
            }

            $blogPost->title = $request->title;
            $blogPost->content = $request->content;

            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($blogPost->image && file_exists(public_path('blog_images/' . $blogPost->image))) {
                    unlink(public_path('blog_images/' . $blogPost->image));
                }

                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('blog_images'), $imageName);
                $blogPost->image = $imageName;
            }

            $blogPost->save();

            return redirect()->route('blog-post.index', ['id' => $id])->with('success', 'Blog post updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('blog-post.edit', ['id' => $id])->with('error', $e->getMessage());
        }
    }
    public function index()
    {
        try {
            $blogPosts = BlogPost::where('user_id', auth()->id())->get();
            return view('UserProfile.blog.index', compact('blogPosts'));
        } catch (Exception $e) {
            return redirect()->route('blog-post.create')->with('error', 'An error occurred while retrieving blog posts.');
        }
    }

    public function destroy($id)
    {
        try {
            $blogPost = BlogPost::where('id', $id)->where('user_id', auth()->id())->first();

            if (!$blogPost) {
                return redirect()->route('blog-post.index')->with('error', 'Blog post not found.');
            }

            $blogPost->delete();
            return redirect()->route('blog-post.index')->with('success', 'Blog post deleted successfully.');
        } catch (Exception $e) {
            return redirect()->route('blog-post.index')->with('error', 'An error occurred while deleting the blog post.');
        }
    }
}
