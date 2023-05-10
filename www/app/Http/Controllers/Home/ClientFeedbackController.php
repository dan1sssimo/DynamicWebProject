<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ClientFeedback;
use App\Models\ClientFeedbackMulti;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ClientFeedbackController extends Controller
{
    public function AllFeedback()
    {
        $allFeedback = ClientFeedback::all();

        return view('admin.client_feedback.all_feedback', compact('allFeedback'));
    }

    public function AddFeedback()
    {
        return view('admin.client_feedback.add_feedback');
    }

    public function StoreFeedback(Request $request)
    {
        ClientFeedback::insert([
            'short_description' => $request->short_description,
            'full_name' => $request->full_name,
            'job_type' => $request->job_type,
            'created_at' => Carbon::now()
        ]);
        $notification = array(
            'message' => 'Client Feedback Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.feedback')->with($notification);
    }

    public function DeleteFeedback($id)
    {
        ClientFeedback::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Client Feedback Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function AllFeedbackMulti()
    {
        $allMultiImage = ClientFeedbackMulti::all();

        return view('admin.client_feedback.all_feedback_multi', compact('allMultiImage'));
    }

    public function AddFeedbackMulti()
    {
        return view('admin.client_feedback.add_feedback_multi');
    }

    public function StoreFeedbackMultiImage(Request $request)
    {
        $image = $request->file('multi_image');

        foreach ($image as $multi_image) {
            $name_gen = hexdec(uniqid()) . '.' . $multi_image->getClientOriginalExtension();
            Image::make($multi_image)->resize(120, 120)->save('upload/feedback/' . $name_gen);
            $save_url = 'upload/feedback/' . $name_gen;
            ClientFeedbackMulti::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Feedback Multi Image Inserted Successfully',
                'alert-type' => 'success'
            );
        }
        return redirect()->route('all.feedback.multi')->with($notification);
    }

    public function EditFeedbackMultiImage($id)
    {
        $multiImage = ClientFeedbackMulti::findOrFail($id);

        return view('admin.client_feedback.edit_feedback_multi_image', compact('multiImage'));
    }

    public function UpdateFeedbackMultiImage(Request $request)
    {
        $multi_image_id = $request->id;

        if ($request->file('multi_image')) {
            $multiImage = ClientFeedbackMulti::findOrFail($multi_image_id);
            $img = $multiImage->multi_image;
            $image = $request->file('multi_image');
            unlink($img);
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(120, 120)->save('upload/feedback/' . $name_gen);
            $save_url = 'upload/feedback/' . $name_gen;
            ClientFeedbackMulti::findOrFail($multi_image_id)->update([
                'multi_image' => $save_url,
            ]);
        }
        $notification = array(
            'message' => 'Feedback Multi Image Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.feedback.multi')->with($notification);
    }

    public function DeleteFeedbackMultiImage($id)
    {
        $multiImage = ClientFeedbackMulti::findOrFail($id);
        $img = $multiImage->multi_image;
        unlink($img);
        ClientFeedbackMulti::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Feedback Multi Image Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
