@extends('layouts.master-user')
@section('title', 'Subscription')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">My Subscription</h4>
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

                        @if($subscription)
                            <p><strong>Subscription Type:</strong> {{ ucfirst($subscription->type) }}</p>
                            <p><strong>Subscription Plan:</strong> {{ ucfirst($subscription->plan) }}</p>
                            <p><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($subscription->start_date)->format('Y-m-d') }}</p>
                            @if($subscription->end_date)
                                <p><strong>End Date:</strong> {{ \Carbon\Carbon::parse($subscription->end_date)->format('Y-m-d') }}</p>
                            @else
                                <p><strong>End Date:</strong> Lifetime</p>
                            @endif
                            <a href="{{ route('subscriptions.edit', $subscription->id) }}" class="btn btn-primary btn-block mb-3">Edit Subscription</a>
                        @else
                            <p>You have no active subscription. Please subscribe to a plan.</p>
                            <a href="{{ route('subscriptions.create') }}" class="btn btn-primary btn-block mb-3">Subscribe Now</a>
                        @endif

                        @if(!$subscription || ($subscription && $subscription->type !== 'free'))
                            <form action="{{ route('payment.process') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success btn-block mb-3">Make Payment</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
