<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with('user', 'review')->orderByDesc('created_at')->get();
        return view('Report.index', compact('reports'));
    }

}
