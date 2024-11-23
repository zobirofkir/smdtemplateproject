<section id="team" class="team-section pt-150 pb-150">
    <div class="container">
        <div class="row">
            <!-- Foreach loop to display images -->
            @foreach ([1, 2, 3, 4] as $image)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="gallery-item">
                        <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" class="img-fluid rounded" alt="Gallery Image" onclick="showImageModal('https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp')">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Image Preview</h5>
                    <button type="button" class="btn-close" onclick="closeModal()" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" class="img-fluid" src="" alt="Preview">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
