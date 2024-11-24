<section>
    <div class="last-events">
        <div class="events-container">
            <div class="events-header">
                Last Events
            </div>
            <div class="events-body">
                <div class="events-list">
                    @foreach ([1, 2, 3, 4] as $event)
                        <div class="event-card" style="background-image: url({{ asset('assets/img/album/album-2.jpeg') }});">
                            <a href="#" class="event-card-link">
                                <div class="event-card-description">
                                    Lorem ipsum dolor sit amet consectetur
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
