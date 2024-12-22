let input_image = document.getElementById('class_image');

function dragOverHandler(event) {
    event.preventDefault();
    document.getElementById('drop-area').classList.remove('border-dashed');
}

function dragLeaveHandler(event) {
    event.preventDefault();
    document.getElementById('drop-area').classList.add('border-dashed');
}

function dropHandler(event) {
    event.preventDefault();
    document.getElementById('drop-area').classList.add('border-dashed');

    const files = event.dataTransfer.files;
    handleFiles(files);
}

function handleFiles(files) {
    const fileList = Array.from(files);
}

document.addEventListener('dragover', function (event) {
    event.preventDefault();
});

document.addEventListener('drop', function (event) {
    event.preventDefault();
});
