<section id="events" class="service-section pt-150 pb-150 album-page">
    <div class="album-container">
        <div class="mb-60">
            <h1 style="color: #8fd2ff; font-weight: bold; text-align: center;">Gallerie</h1>
        </div>

        <div class="gallery">
            @foreach ([1, 2, 3, 4, 5] as $key => $item)
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
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">

        <div class="controls">
            <div class="prev">
                &lt;
            </div>
            <div class="next">
                &gt;
            </div>
        </div>


        <div class="zoom-controls">
            <button id="zoomInBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-plus" viewBox="0 0 16 16">
                    <path d="M11.742 10.742a6.5 6.5 0 1 0-1.415 1.415l3.5 3.5a1 1 0 0 0 1.415-1.415l-3.5-3.5zM12 7a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5V6h1a.5.5 0 0 1 .5.5A.5.5 0 0 1 9.5 7h-2A.5.5 0 0 1 7 6.5a.5.5 0 0 1 .5-.5h1V4.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </button>
            <button id="zoomOutBtn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-minus" viewBox="0 0 16 16">
                    <path d="M11.742 10.742a6.5 6.5 0 1 0-1.415 1.415l3.5 3.5a1 1 0 0 0 1.415-1.415l-3.5-3.5zM12 7a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M7 7h4a.5.5 0 0 1 .5.5A.5.5 0 0 1 11 8h-4a.5.5 0 0 1-.5-.5A.5.5 0 0 1 7 7z"/>
                </svg>
            </button>
        </div>

    </div>
</section>

