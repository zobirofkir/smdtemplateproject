<section id="about" class="about-section pt-120">
    <div class="shape shape-2">
        <img src="assets/img/shapes/shape-2.svg" alt="">
    </div>

    <div class="container">
        <div class="row">
            <!-- Cards -->
            @foreach ([1, 2, 3, 4, 5, 6] as $item)
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="{{asset('assets/img/about/about-img.png')}}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Card Title 1</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
