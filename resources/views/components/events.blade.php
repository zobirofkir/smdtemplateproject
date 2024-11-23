<section id="events" class="service-section pt-150 pb-150">
    <div class="container">
        <div class="row">
            @foreach ([1, 2, 3, 4, 5] as $event)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg rounded border-0">
                        <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" alt="Event Image" class="card-img-top rounded-top">
                        <div class="card-body">
                            <h5 class="card-title event-title">Event Title</h5>
                            <p class="card-text event-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio sapien. Duis ut turpis eget odio ultricies sollicitudin non ac lorem. Vivamus malesuada ipsum a leo maximus, eget condimentum nulla varius.
                            </p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
