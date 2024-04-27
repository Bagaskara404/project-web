<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    // app/Http/Controllers/PDFController.php

    public function generatePDF()
    {
        $pdf = PDF::loadView('pdf');
        return $pdf->download('file.pdf');
    }


}
