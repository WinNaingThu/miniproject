<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatformController extends Controller
{
    
    public function showForm()
    {
        return view('platform_form');
    }

    
    public function redirectToPlatform(Request $request)
    {
       
        $request->validate([
            'platform' => 'required',
        ], [
            
            'platform.required' => 'Please select one of the cloud platforms before submitting.',
        ]);

       
        $selectedPlatform = $request->input('platform');

        switch ($selectedPlatform) {
            case 'google_drive':
                return redirect()->away('https://drive.google.com');
                
            case 'dropbox':
                return redirect()->away('https://www.dropbox.com');
                
            case 'onedrive':
                return redirect()->away('https://onedrive.live.com');
                
            default:
                return redirect()->back()->withErrors(['platform' => 'Invalid platform selected.']);
        }
    }
}