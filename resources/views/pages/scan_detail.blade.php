@extends('index')

@section('title', 'Scan Detail')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{asset("assets")}}/dashboard/index.html">Home</a></li>
<li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
<li class="breadcrumb-item" aria-current="page">Scan</li>
<li class="breadcrumb-item" aria-current="page">Detail</li>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Severity</th>
                                <th>CVSS</th>
                                <th>Name</th>
                                <th>Family</th>
                                <th>Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($scanDetails as $index => $detail)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $detail->severity }}</td>
                                <td>{{ $detail->cvss }}</td>
                                <td><a href="{{ route('vulnerability.detail', ['id' => $id,'vulnId' => $detail->id]) }}">{{ $detail->name }}</a></td>
                                <td>{{ $detail->family }}</td>
                                <td>{{ $detail->count }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Severity Summary
                </div>
                <div class="card-body">
                    <canvas id="severityChart" width="100%" height="100"></canvas>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        // Dummy data for demonstration
                        const ctx = document.getElementById('severityChart').getContext('2d');
                        const data = {
                            labels: ['Critical', 'High', 'Medium', 'Low', 'Info'],
                            datasets: [{
                                data: [5, 12, 8, 3, 2],
                                backgroundColor: [
                                    '#dc3545', // red
                                    '#ffc107', // yellow
                                    '#198754', // green
                                    '#0d6efd', // blue
                                    '#6c757d', // gray
                                ],
                            }]
                        };
                        new Chart(ctx, {
                            type: 'doughnut',
                            data: data,
                            options: {
                                plugins: {
                                    legend: {
                                        position: 'bottom'
                                    }
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection