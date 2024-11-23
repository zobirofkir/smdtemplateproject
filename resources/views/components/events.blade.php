<section id="events" class="service-section pt-150 pb-150">
    <div class="container">
        @foreach ([1, 2, 3, 4, 5] as $event)
            <div class="row event-item mb-4">
                <div class="col-md-6">
                    <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" alt="Event Image" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h2 class="event-title">Event Title</h2>
                    <p class="event-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio sapien. Duis ut turpis eget odio ultricies sollicitudin non ac lorem. Vivamus malesuada ipsum a leo maximus, eget condimentum nulla varius.
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>
