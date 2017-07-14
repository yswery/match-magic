<?php

namespace App\Http\Controllers;

use App\Models\Memory;
use App\Services\Slack;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadReceipt(Request $request)
    {
        $file  = $request->file('receipt');
        $slack = new Slack();
        $slack->sendReceipt('@hanna', $file);

        return redirect('/');
    }

    public function uploadMemory(Request $request)
    {
        $image = $request->file('image');
        $text  = $request->input('comment');

        // save the image to disk
        $imageName = time() . '.' . pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
        $folder    = '/images/date-images/';
        $image->move(public_path() . $folder, $imageName);

        $memory              = new Memory;
        $memory->image       = $folder . $imageName;
        $memory->description = $text;
        $memory->save();

        return redirect('/');
    }
}
