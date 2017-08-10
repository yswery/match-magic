<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemoryUpload;
use App\Http\Requests\ReceiptUpload;
use App\Models\Memory;
use App\Services\Slack;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadReceipt(ReceiptUpload $request)
    {
        $file    = $request->file('receipt_image');
        $comment = $request->input('receipt_comment');
        $slack   = new Slack();
        $slack->sendReceipt('@hanna', $file, $comment);

        return redirect('/');
    }

    public function uploadMemory(MemoryUpload $request)
    {
        $image = $request->file('memory_image');
        $text  = $request->input('memory_comment');

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
