<section id="events" class="service-section pt-150 pb-150">
    <div>
        <div class="mb-60">
            <h1 style="color: black; font-weight: bold; text-align: center;">Evénements</h1>
        </div>
        <div class="row">
            @foreach (range(1, 1000) as $key => $event)
                @php
                    $imagePath = public_path('assets/img/events/event-' . ($key + 1) . '.jpeg');
                @endphp
                @if (file_exists($imagePath))
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg rounded border-0 h-100 position-relative">
                            <img src="{{ asset('assets/img/events/event-' . ($key + 1) . '.jpeg') }}" alt="Event Image" class="card-img-top rounded-top">
                            <!-- Event Info Overlay -->
                            <div class="event-info-overlay">
                                <h3 class="text-white">Event Info</h3>
                                <p class="text-white">Event details or actions can go here.</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
