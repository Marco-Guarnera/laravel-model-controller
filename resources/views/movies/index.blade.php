@extends("layouts.app")

@section("page-title", "Movies")

<!-- Movies -->
@section("main")
    <div class="container-fluid">
        <div class="row g-3">
            @forelse ($movies_list as $item)
                <div class="col-2">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><h5 class="card-title">{{ $item->title }}</h5></li>
                            <li class="list-group-item">Date: {{ $item->date }}</li>
                            <li class="list-group-item">Vote: {{ $item->vote }}</li>
                        </ul>
                    </div>
                </div>
            @empty
                <div>Not Available</div>
            @endforelse
        </div>
    </div>
@endsection
