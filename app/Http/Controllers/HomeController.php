<?php

namespace App\Http\Controllers;

use App\Jobs\ConvertVideo;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * To check the health of the app
     *
     * @method GET
     * @return \Illuminate\Http\Response - empty with 200 header response
     */
    public function health()
    {
        return response()->json();
    }

    /**
     * Used to convert video files from one format to another
     *
     * @method POST
     * @return \Illuminate\Http\Response
     */
    public function convertVideo()
    {
        try {
            // Run the video conversion job
            ConvertVideo::dispatch();

            return response()->json([
                'status' => 'success',
                'message' => 'Done'
            ]);
        } catch (\Throwable $th) {
            $error = $th->getMessage();
            Log::error($error);

            return response()->json([
                'status' => 'failed',
                'message' => json_encode($error)
            ]);
        }
    }
}
