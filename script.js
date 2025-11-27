document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('videoModal');
    const btn = document.getElementById('openVideo');
    const close = document.querySelector('.close');

    btn.onclick = () => {
        modal.style.display = 'flex';
    }

    close.onclick = () => {
        modal.style.display = 'none';
        modal.querySelector('video').pause();
    }

    window.onclick = (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            modal.querySelector('video').pause();
        }
    }
});
