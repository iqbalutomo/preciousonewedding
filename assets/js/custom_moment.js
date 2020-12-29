// content
const materialbox = document.querySelectorAll('.materialboxed');
M.Materialbox.init(materialbox);

// video play button
function playVideo() {
    return videox.paused ? videox.play() : videox.pause();
}

