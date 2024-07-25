@extends('layouts.master-user')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="container-fluid py-4" style="font-family: 'Open Sans', sans-serif;">
    <div class="row">
        <!-- Welcome Card -->
        <div class="col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0 rounded-lg">
                <div class="card-body">
                    <h3 class="card-title">Hi, {{ Auth::user()->name }}</h3>
                    <p>Your dashboard gives you views of my information.</p>
                </div>
            </div>
        </div>

        <!-- Quick Stats Card -->
        <div class="col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0 rounded-lg">
                <div class="card-header bg-primary text-white">
                    Quick Stats
                </div>
                <div class="card-body">
                    <p class="card-text">Projects: 12</p>
                    <p class="card-text">Tasks: 37</p>
                    <p class="card-text">Completed: 24</p>
                </div>
            </div>
        </div>

        <!-- Recent Activities Card -->
        <div class="col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0 rounded-lg">
                <div class="card-header bg-success text-white">
                    Recent Activities
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>Updated project A</li>
                        <li>Completed task B</li>
                        <li>Added new task C</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Profile Overview Card -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-info text-white">
                    Profile Overview
                </div>
                <div class="card-body">
                    <p class="card-text">Name: {{ Auth::user()->name }}</p>
                    <p class="card-text">Email: {{ Auth::user()->email }}</p>
                    <p class="card-text">Role: User</p>
                </div>
            </div>
        </div>

        <!-- Notifications Card -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-warning text-dark">
                    Notifications
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>You have 5 new messages</li>
                        <li>Project D is nearing its deadline</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
