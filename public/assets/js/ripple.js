const sliderWrapper = document.querySelector('.slider-wrapper');

sliderWrapper.addEventListener('mousemove', function (e) {
    const ripple = document.createElement('span');
    ripple.classList.add('ripple');

    const rect = sliderWrapper.getBoundingClientRect();

    ripple.style.left = `${e.clientX - rect.left}px`;
    ripple.style.top = `${e.clientY - rect.top}px`;

    const size = Math.random() * 20 + 10;
    const opacity = Math.random() * 0.5 + 0.5;

    ripple.style.width = `${size}px`;
    ripple.style.height = `${size}px`;
    ripple.style.opacity = opacity;

    sliderWrapper.appendChild(ripple);

    setTimeout(() => {
        ripple.remove();
    }, 600);
});
