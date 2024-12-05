document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("imageModal");
    const modalImage = document.getElementById("modalImage");
    const closeModal = document.querySelector(".close-gallery");
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");
    const images = Array.from(document.querySelectorAll(".image-card img"));
    let currentIndex = 0;

    const openModal = (index) => {
        modal.classList.remove('close');
        modal.classList.add('open');
        modal.style.display = 'flex';
        modalImage.src = images[index].src;
        currentIndex = index;
    };

    const closeModalAnimation = () => {
        modal.classList.remove('open');
        modal.classList.add('close');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 500); // Matches the fadeOut animation duration
    };

    images.forEach((image, index) => {
        image.addEventListener("click", () => openModal(index));
    });

    closeModal.addEventListener("click", closeModalAnimation);

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
        if (!e.target.closest('.controls') && e.target !== modalImage) {
            closeModalAnimation();
        }
    });
});
