@extends('layouts.master-user')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Edit Subscription</h4>
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
                        <form action="{{ route('subscriptions.update', $subscription->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="type">Subscription Type</label>
                                <select class="form-control" id="type" name="type" required>
                                    <option value="free" {{ $subscription->type == 'free' ? 'selected' : '' }}>Free</option>
                                    <option value="pro" {{ $subscription->type == 'pro' ? 'selected' : '' }}>Pro</option>
                                    <option value="premium" {{ $subscription->type == 'premium' ? 'selected' : '' }}>Premium</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="plan">Subscription Plan</label>
                                <select class="form-control" id="plan" name="plan" required>
                                    <option value="monthly" {{ $subscription->plan == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                    <option value="yearly" {{ $subscription->plan == 'yearly' ? 'selected' : '' }}>Yearly</option>
                                    <option value="lifetime" {{ $subscription->plan == 'lifetime' ? 'selected' : '' }}>Lifetime</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Update Subscription</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
