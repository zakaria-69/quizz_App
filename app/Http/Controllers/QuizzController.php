<?php

namespace App\Http\Controllers;

use App\Models\Quizz;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function quiz()
    {
        $client = new Client(['verify' => false]);
        $response = $client->get('https://opentdb.com/api.php?amount=10&type=multiple');
        $data = json_decode($response->getBody(), true);
        
        $questions = $data['results'];
        
        return view('quiz', compact('questions'));
    }
}
