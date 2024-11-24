<section id="events" class="service-section pt-150 pb-150">
    <div >
        <div class="mb-60">
            <h1 style="color: #8fd2ff; font-weight: bold; text-align: center;">Evénements</h1>
        </div>
        <div class="row">
            @foreach ([1, 2, 3, 4, 5] as $key =>$event)
            @php
                $imagePath = public_path('assets/img/events/event-' . ($key + 1) . '.jpeg');
            @endphp
            @if (file_exists($imagePath))
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg rounded border-0 h-100">
                        <img src="{{ asset('assets/img/events/event-' . ($key + 1) . '.jpeg') }}" alt="Event Image" class="card-img-top rounded-top">
                        <div class="card-body">
                            <h5 class="card-title event-title">Event {{ $event }}</h5>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
</section>
