@extends('layouts.master-user')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">About Me</h4>
                    <form>
                        <div class="form-group">
                            <label for="aboutMe">Tell Us About Yourself</label>
                            <textarea class="form-control" id="aboutMe" name="about_me" rows="6" placeholder="Your bio..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
