<section class="last-videos-section pt-120 pb-120">
    <div class="last-videos">
        <div>
            <div class="videos-header">
                <h1>Nos Travaux</h1>
            </div>
            <div class="videos-body">
                <div class="videos-grid">
                    <!-- Main Video Card -->
                    <div class="main-video-card">
                        <a href="#" class="video-card-link" data-video-url="https://www.youtube.com/embed/video_id_1">
                            <div class="video-card-image">
                                <img src="{{ asset('assets/img/videos/videos-1.jpeg') }}" alt="{{config('app.name')}}">
                            </div>
                            <div class="video-card-details">
                                <h2>{{config('app.name')}}</h2>
                                <p class="video-card-date">16 Mai 2024</p>
                                <div class="social-links">
                                    <i class="fa-solid fa-play fa-2xl"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="main-video-card">
                        <a href="#" class="video-card-link" data-video-url="https://www.youtube.com/embed/video_id_2">
                            <div class="video-card-image">
                                <img src="{{ asset('assets/img/videos/videos-2.jpeg') }}" alt="{{config('app.name')}}">
                            </div>
                            <div class="video-card-details">
                                <h2>{{config('app.name')}}</h2>
                                <p class="video-card-date">16 Novembre 2024</p>
                                <div class="social-links">
                                    <i class="fa-solid fa-play fa-2xl"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal for displaying the video -->
<div id="customModal" class="modal hidden">
    <div class="modal-content">
        <span id="closeModal" class="close">&times;</span>
        <iframe id="videoFrame" style="border-radius: 20px;" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
