const events = document.getElementById('images');

const viewer = new Viewer(events, {
    toolbar: {
        zoomIn: 1,
        zoomOut: 1,
        prev: 1,
        reset: 1,
        next: 1,
    },
    title: [1, (image) => image.alt]
});
