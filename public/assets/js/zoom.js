let zoomLevel = 1;
const modalImage = document.getElementById('modalImage');
const zoomInBtn = document.getElementById('zoomInBtn');
const zoomOutBtn = document.getElementById('zoomOutBtn');

zoomInBtn.addEventListener('click', (event) => {
    event.stopPropagation();
    zoomLevel += 0.1;
    modalImage.style.transform = `scale(${zoomLevel})`;
});

zoomOutBtn.addEventListener('click', (event) => {
    event.stopPropagation();
    zoomLevel = Math.max(0.1, zoomLevel - 0.1);
    modalImage.style.transform = `scale(${zoomLevel})`;
});
