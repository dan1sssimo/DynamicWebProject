<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    public function HomeSlider()
    {
        $homeSlide = HomeSlide::find(1);

        return view('admin.home_slide.home_slide_all', compact('homeSlide'));
    }

    public function UpdateSlider(Request $request)
    {
        /*   $fileMimeType = $request->file('home_slide')->getMimeType();*/
      /*  $validator = $request->validate([
            'home_slide' => [
                'mimes:jpg,bmp,png,jpeg'
            ]
        ]);
        if(!empty($validator)){
            $notification = array(
                'message' => 'Home Slide Updated Successfully',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }*/
        /* if ($fileMimeType != 'image/jpeg') {
             $notification = array(
                 'message' => $fileMimeType,
                 'alert-type' => 'error'
             );
             return redirect()->back()->with($notification);
         }*/

        $slide_id = $request->id;

        if ($request->file('home_slide')) {
            $image = $request->file('home_slide');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1280, 1280)->save('upload/home_slide/' . $name_gen);
            $save_url = 'upload/home_slide/' . $name_gen;
            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_slide' => $save_url,
            ]);
        } else {
            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
            ]);
        }
        $notification = array(
            'message' => 'Home Slide Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }

}
