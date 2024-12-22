let response_box = document.getElementById('response');

const close_response = () => {
    response_box.classList.remove('top-6')
    response_box.classList.add('-top-full')
};

response_box.addEventListener('mouseover', () => {
    response_box.classList.remove('animate-pulse');
})

response_box.addEventListener('mouseleave', () => {
    response_box.classList.add('animate-pulse');
})
