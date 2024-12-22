let modal_bg = document.getElementById('modal-bg');
let search_title = document.getElementById('search-title');
let search_btn = document.getElementById('search-btn');
let search_input = document.getElementById('search');
let search_wrapper = document.getElementById('search-wrapper');
let search_form = document.getElementById('search-form');

search_input.addEventListener('focus', () => {
    modal_bg.classList.replace('bg-opacity-0', 'bg-opacity-50');
    modal_bg.classList.replace('h-0', 'h-screen');
    modal_bg.classList.replace('w-0', 'w-screen');
    search_btn.classList.remove('h-0', '!p-0');
    search_title.classList.remove('h-0', '!p-0');
    search_form.classList.add('px-3');
    search_wrapper.classList.add('my-4', 'bg-gray-200');
    search_input.classList.add('bg-gray-200');
});

search_input.addEventListener('focusout', () => {
    modal_bg.classList.replace('bg-opacity-50', 'bg-opacity-0');
    modal_bg.classList.replace('h-screen', 'h-0');
    modal_bg.classList.replace('w-screen', 'w-0');
    setTimeout(() => {
        search_btn.classList.add('h-0', '!p-0');
        search_title.classList.add('h-0', '!p-0');
        search_form.classList.remove('px-3');
        search_form.classList.remove('px-3');
        search_wrapper.classList.remove('my-4', 'bg-gray-200');
        search_input.classList.remove('bg-gray-200');
    }, 150)
});
