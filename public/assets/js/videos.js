document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("customModal");
    const closeModalButton = document.getElementById("closeModal");
    const videoFrame = document.getElementById("videoFrame");

    if (modal && closeModalButton && videoFrame) {
        document.querySelectorAll(".video-card-link").forEach((link) => {
            link.addEventListener("click", function(event) {
                event.preventDefault();
                const videoUrl = link.getAttribute("data-video-url");
                videoFrame.src = videoUrl;
                modal.classList.remove("hidden");
                modal.style.display = "block";
            });
        });

        closeModalButton.addEventListener("click", function() {
            modal.style.display = "none";
            videoFrame.src = "";
        });

        modal.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
                videoFrame.src = "";  
            }
        });
    }
});
