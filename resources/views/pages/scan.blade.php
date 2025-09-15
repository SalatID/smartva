@extends('index')

@section('title', 'Scan')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{asset("assets")}}/dashboard/index.html">Home</a></li>
<li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
<li class="breadcrumb-item" aria-current="page">Scan</li>
@endsection

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="#" class="btn btn-primary">New Scan</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Scan Date</th>
                        <th>Name</th>
                        <th>Scan Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @php($scantype = ["Host Discovery","Web Application", "Network"])
                <tbody>
                    @for($i = 1; $i <= 10; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ now()->subDays(10 - $i)->format('Y-m-d H:i') }}</td>
                            <td>Scaning Domain {{ $i }}</td>
                            <td>{{ $scantype[rand(0, 2)] }}</td>
                            <td>
                                <a href="{{route('scan.detail',1)}}" class="btn btn-sm btn-info">View</a>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection