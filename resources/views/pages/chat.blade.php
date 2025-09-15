@extends('index')
@section('title', 'Chat')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{asset("assets")}}/dashboard/index.html">Chat</a></li>
@endsection

@section('content')
<div class="container py-1">
    <div class="card shadow-sm">
        <div class="card-body" style="height: 550px; overflow-y: auto; background: #f7f7f8;">
            <!-- Sample chat conversation -->
            <div class="d-flex mb-3">
                <div class="flex-shrink-0">
                    <img src="https://ui-avatars.com/api/?name=AI Agent" class="rounded-circle" width="40" alt="AI Agent">
                </div>
                <div class="flex-grow-1 ms-2">
                    <div class="bg-white rounded px-3 py-2 shadow-sm">
                        Hi, can you help me with my project?
                    </div>
                    <small class="text-muted">AI Agent • 10:00 AM</small>
                </div>
            </div>
            <div class="d-flex mb-3 flex-row-reverse">
                <div class="flex-shrink-0">
                    <img src="https://ui-avatars.com/api/?name=User" class="rounded-circle" width="40" alt="User">
                </div>
                <div class="flex-grow-1 me-2 text-end">
                    <div class="bg-primary text-white rounded px-3 py-2 shadow-sm">
                Sure, let's validate the SQL Injection finding step by step.<br>
                <code>Vulnerability : SQL Injection</code>
                </div>
                    <small class="text-muted">User • 10:01 AM</small>
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="flex-shrink-0">
                    <img src="https://ui-avatars.com/api/?name=AI Agent" class="rounded-circle" width="40" alt="AI Agent">
                </div>
                <div class="flex-grow-1 ms-2">
                    <div class="bg-white rounded px-3 py-2 shadow-sm">
                Sure, let's validate the SQL Injection finding step by step.<br>
                <b>Step 1:</b> Create the SQL injection command.<br>
                <code>SELECT * FROM users WHERE username = 'admin' --'</code>
                </div>
                    <small class="text-muted">AI Agent • 10:02 AM</small>
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="flex-shrink-0">
                    <img src="https://ui-avatars.com/api/?name=AI Agent" class="rounded-circle" width="40" alt="AI Agent">
                </div>
                <div class="flex-grow-1 ms-2">
                    <div class="bg-white rounded px-3 py-2 shadow-sm">
                <b>Step 2:</b> Execute the command on the target application.<br>
                <code>
    $ sqlmap -u "http://target-app/login?username=admin&password=1" --risk=3 --level=5
                </code>
                </div>
                    <small class="text-muted">AI Agent • 10:03 AM</small>
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="flex-shrink-0">
                    <img src="https://ui-avatars.com/api/?name=AI Agent" class="rounded-circle" width="40" alt="AI Agent">
                </div>
                <div class="flex-grow-1 ms-2">
                    <div class="bg-white rounded px-3 py-2 shadow-sm">
                <b>Step 3:</b> Compare the result with vulnerability assessment tool output.<br>
                <code>
    [INFO] the back-end DBMS is MySQL
    [INFO] the parameter "username" is vulnerable to SQL injection
                </code>
                </div>
                    <small class="text-muted">AI Agent • 10:04 AM</small>
                </div>
            </div>
        </div>
        <div class="card-footer bg-white">
            <form class="d-flex">
                <input type="text" class="form-control me-2" placeholder="Type your message..." disabled>
                <button class="btn btn-primary" type="button" disabled>Send</button>
            </form>
        </div>
    </div>
</div>
@endsection