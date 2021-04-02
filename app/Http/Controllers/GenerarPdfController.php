<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class GenerarPdfController extends Controller
{
    //
    public function generatePDF()
    {
        $data = ['title' => 'PDF de prueba'];
        $pdf = PDF::loadView('pdf_templates.myPDF', $data);

        return $pdf->download('Test.pdf');
    }
}
