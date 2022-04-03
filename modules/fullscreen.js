export default function () {
    const fullscreenBtn = document.getElementById('fullscreen-btn');

    const toggleFullScreen = () => {
        fullscreenBtn.classList.toggle('fullscreen-active');

        if (!document.fullscreenElement) {
            return document.documentElement.requestFullscreen();
        }
        if (document.exitFullscreen) {
            return document.exitFullscreen();
        }
    };

    fullscreenBtn.addEventListener('click', toggleFullScreen);
}
