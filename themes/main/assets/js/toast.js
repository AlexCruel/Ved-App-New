function toastHandler(type) {
    setTimeout(() => {
        const toast = document.getElementById(type);
        toast.style.opacity = '0';
        deleteToast(toast);
    }, 2000)
}

function deleteToast(toast) {
    setTimeout(() => {
        toast.remove();
    }, 4000)
}
