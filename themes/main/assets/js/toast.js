function toastHandler(type) {
    const toast = document.getElementsByClassName(type);

    setTimeout(() => {
        toast[0].remove();
    }, 5000)
}
