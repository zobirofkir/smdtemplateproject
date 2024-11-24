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
                                <img src="{{ asset('assets/img/videos/videos-1.jpeg') }}" alt="Journée de Printemps de Neurologie 2023">
                            </div>
                            <div class="video-card-details">
                                <h2>Journée de Printemps de Neurologie 2023</h2>
                                <p>Mai 4, 5, 6 2023</p>
                                <div class="social-links">
                                    <a href="#" aria-label="LinkedIn">
                                        <i class="fa-brands fa-linkedin fa-xl"></i>
                                    </a>
                                    <a href="#" aria-label="WhatsApp">
                                        <i class="fa-brands fa-whatsapp fa-xl"></i>
                                    </a>
                                    <a href="#" aria-label="Facebook">
                                        <i class="fa-brands fa-facebook fa-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="main-video-card">
                        <a href="#" class="video-card-link" data-video-url="https://www.youtube.com/embed/video_id_2">
                            <div class="video-card-image">
                                <img src="{{ asset('assets/img/videos/videos-2.jpeg') }}" alt="Journée de Printemps de Neurologie 2023">
                            </div>
                            <div class="video-card-details">
                                <h2>Journée de Printemps de Neurologie 2023</h2>
                                <p>Mai 4, 5, 6 2023</p>
                                <div class="social-links">
                                    <a href="#" aria-label="LinkedIn">
                                        <i class="fa-brands fa-linkedin fa-xl"></i>
                                    </a>
                                    <a href="#" aria-label="WhatsApp">
                                        <i class="fa-brands fa-whatsapp fa-xl"></i>
                                    </a>
                                    <a href="#" aria-label="Facebook">
                                        <i class="fa-brands fa-facebook fa-xl"></i>
                                    </a>
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
        <iframe id="videoFrame" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
