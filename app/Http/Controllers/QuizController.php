<?php

namespace App\Http\Controllers;


class QuizController extends Controller
{
    public function downloadQuizPdf()
    {
        // Trigger the file download
        $filePath = storage_path('app/public/quiz.pdf');
        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        // Redirect to home if the file doesn't exist
        return redirect()->route('home')->with('error', 'File not found.');
    }
}
