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
        $text  = $request->input('text');

        // save the image to disk
        $imageName = '/images/' . time() . '.' . pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
        $image->move(public_path() . $imageName);

        $memory              = new Memory;
        $memory->image       = $imageName;
        $memory->description = $text;
        $memory->save();

        return redirect('/');
    }
}
