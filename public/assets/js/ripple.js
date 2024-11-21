const sliderWrapper = document.querySelector('.slider-wrapper');

sliderWrapper.addEventListener('mousemove', function (e) {
    const ripple = document.createElement('span');
    ripple.classList.add('ripple');

    const rect = sliderWrapper.getBoundingClientRect();

    ripple.style.left = `${e.clientX - rect.left}px`;
    ripple.style.top = `${e.clientY - rect.top}px`;

    sliderWrapper.appendChild(ripple);

    setTimeout(() => {
        ripple.remove();
    }, 600); 
});
