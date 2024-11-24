<section class="brands-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brands-container">
                    @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9] as $item)
                        <div class="brand-logo">
                            <img src="{{ asset('assets/img/brands/brand-1.png') }}" alt="Brand 1">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
