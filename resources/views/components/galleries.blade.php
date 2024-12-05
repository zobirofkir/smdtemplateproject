<section id="events" class="service-section pt-150 pb-150 album-page">
    <div class="album-container">
        <div class="mb-60">
            <h1 style="color: black; font-weight: bold; text-align: center;">Galerie</h1>
        </div>

        <div class="gallery">
            @foreach (range(1, 1000) as $key => $item)
                @php
                    $imagePath = public_path('assets/img/album/album-' . ($key + 1) . '.jpeg');
                @endphp
                @if (file_exists($imagePath))
                    <div class="image-card" data-index="{{ $key }}">
                        <img src="{{ asset('assets/img/album/album-' . ($key + 1) . '.jpeg') }}" alt="Image {{ $key + 1 }}">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12 4.5C7.305 4.5 3.034 7.362 1.5 12c1.534 4.638 5.805 7.5 10.5 7.5s8.966-2.862 10.5-7.5c-1.534-4.638-5.805-7.5-10.5-7.5zm0 12.5c-2.761 0-5-2.239-5-5s2.239-5 5-5 5 2.239 5 5-2.239 5-5 5zm0-8.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7z" />
                        </svg>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div id="imageModal" class="modal">
        <span class="close-gallery">&times;</span>
        <img class="modal-content" id="modalImage">

        <div class="controls">
            <div class="prev">
                &lt;
            </div>
            <div class="next">
                &gt;
            </div>
        </div>
    </div>
</section>

