function showImageModal(imageUrl) {
    var modal = document.getElementById('imageModal');
    var modalImage = document.getElementById('modalImage');

    modalImage.src = imageUrl;

    modal.style.display = 'block';
    setTimeout(function() {
        modal.classList.add('open');
    }, 10);
}

function closeModal() {
    var modal = document.getElementById('imageModal');

    modal.classList.remove('open');
    setTimeout(function() {
        modal.style.display = 'none';
    }, 300); 
}

window.onclick = function(event) {
    var modal = document.getElementById('imageModal');
    if (event.target == modal) {
        closeModal();
    }
}
