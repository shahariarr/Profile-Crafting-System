@extends('layouts.master-user')
@section('title', 'Subscription')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Create Subscription</h4>
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{ route('subscriptions.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="type">Subscription Type</label>
                                <select class="form-control" id="type" name="type" required>
                                    <option value="free">Free</option>
                                    <option value="pro">Pro</option>
                                    <option value="premium">Premium</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="plan">Subscription Plan</label>
                                <select class="form-control" id="plan" name="plan" required>
                                    <option value="monthly">Monthly</option>
                                    <option value="yearly">Yearly</option>
                                    <option value="lifetime">Lifetime</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Create Subscription</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
