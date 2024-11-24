document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");
    const closeModal = document.querySelector(".close");
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");
    const images = Array.from(document.querySelectorAll(".image-card img"));
    const imageCards = Array.from(document.querySelectorAll(".image-card"));
    let currentIndex = 0;

    const leftFlash = document.getElementById("leftFlash");
    const rightFlash = document.getElementById("rightFlash");

    imageCards.forEach((card, index) => {
        card.addEventListener("click", (event) => {
            const image = images[index];
            modal.style.display = "flex";
            modalImage.src = image.src;
            currentIndex = index;
        });
    });

    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    prevButton.addEventListener("click", (event) => {
        event.stopPropagation();
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        modalImage.src = images[currentIndex].src;
    });

    nextButton.addEventListener("click", (event) => {
        event.stopPropagation();
        currentIndex = (currentIndex + 1) % images.length;
        modalImage.src = images[currentIndex].src;
    });

    modal.addEventListener("click", (e) => {
        if (!e.target.closest('.controls')) {
            const modalWidth = modal.offsetWidth;
            const clickPosition = e.clientX;

            if (clickPosition < modalWidth / 2) {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                modalImage.src = images[currentIndex].src;
                leftFlash.classList.add("active");
                setTimeout(() => leftFlash.classList.remove("active"), 500);
            } else {
                currentIndex = (currentIndex + 1) % images.length;
                modalImage.src = images[currentIndex].src;
                rightFlash.classList.add("active");
                setTimeout(() => rightFlash.classList.remove("active"), 500);
            }
        } else if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});

let zoomLevel = 1;
const modalImage = document.getElementById('modalImage');
const zoomInBtn = document.getElementById('zoomInBtn');
const zoomOutBtn = document.getElementById('zoomOutBtn');

zoomInBtn.addEventListener('click', (event) => {
    event.stopPropagation(); // Prevent the modal click logic from triggering
    zoomLevel += 0.1;
    modalImage.style.transform = `scale(${zoomLevel})`;
});

zoomOutBtn.addEventListener('click', (event) => {
    event.stopPropagation(); // Prevent the modal click logic from triggering
    zoomLevel = Math.max(0.1, zoomLevel - 0.1);
    modalImage.style.transform = `scale(${zoomLevel})`;
});
