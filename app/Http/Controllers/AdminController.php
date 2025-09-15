<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard() {
        return view('pages.dashboard');
    }
    function scan(){
        return view('pages.scan');
    }

    function scan_detail($id){
        $scanDetails = [
            (object)[ 'id' => 1, 'severity' => 'Critical', 'cvss' => 9.8, 'name' => 'SQL Injection', 'family' => 'Web', 'count' => 3 ],
            (object)[ 'id' => 2, 'severity' => 'High', 'cvss' => 8.2, 'name' => 'Cross-Site Scripting (XSS)', 'family' => 'Web', 'count' => 5 ],
            (object)[ 'id' => 3, 'severity' => 'Medium', 'cvss' => 6.5, 'name' => 'Remote Code Execution', 'family' => 'Application', 'count' => 2 ],
            (object)[ 'id' => 4, 'severity' => 'Low', 'cvss' => 3.1, 'name' => 'Directory Traversal', 'family' => 'File System', 'count' => 1 ],
            (object)[ 'id' => 5, 'severity' => 'Info', 'cvss' => 0.0, 'name' => 'Server Banner Disclosure', 'family' => 'Other', 'count' => 7 ],
        ];

        return view('pages.scan_detail', ['id' => $id, 'scanDetails' => $scanDetails]);
    }
    function vulnerability_detail($id, $vulnId){
        return view('pages.vulnerability_detail', ['id' => $id, 'vulnId' => $vulnId]);
    }
    function chat(){
        return view('pages.chat');
    }
}
