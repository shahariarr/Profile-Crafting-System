@php
    $projects = App\Models\Project::where('user_id', Auth::id())->get();
@endphp

<section class="ftco-section ftco-project" id="projects-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Projects</h1>
                <h2 class="mb-4">Our Projects</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-{{ $loop->iteration % 2 == 0 ? '8' : '4' }}">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('storage/' . $project->image) }}');">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3 ><a href="{{ $project->demo }}">{{ $project->name }}</a></h3>
                            <span>{{ $project->tools }}</span>
                            {{-- <span>{{ $project->source_code }}</span> --}}
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 2 == 0 && !$loop->last)
                    </div><div class="row">
                @endif
            @endforeach
        </div>
    </div>
</section>
