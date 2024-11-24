<section>
    <div class="last-events">
        <div class="px-5">
            <div class="events-header" style="text-align: center;">
                Derniers événements
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
