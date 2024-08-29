<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ConfigHome;
use App\Models\Message;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function print_pdf()
    {
        $pdf = Pdf::loadView('jozeaama');
        return $pdf->download('jozeaama.pdf');  
    }

    

    
}
