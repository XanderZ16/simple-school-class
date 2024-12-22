let modal = document.getElementById('modal');
let register_form = document.getElementById('register-form');
let login_form = document.getElementById('login-form');

const open_modal = (form) => {
    modal.show();
    if (form == 'register') {
        console.log(login_form);
        register_form.style.display = 'block';
        login_form.style.display = 'none';
    } else if (form == 'login') {
        login_form.style.display = 'block';
        register_form.style.display = 'none';
    } else {
        alert("Something went wrong");
    }
};

const close_modal = () => {
    modal.close();
};

const stop_propagation = (event) => {
    event.stopPropagation();
}

let btn_teacher = document.getElementById('btn-teacher');
let btn_student = document.getElementById('btn-student');
let btns_usertype = document.getElementById('btns-usertype');
let usertype = document.getElementById('usertype');

let btn_active = 'bg-slate-500 text-white';
let btn_deactive = 'hover:bg-slate-500 hover:text-white';

btn_teacher.addEventListener('click', () => {
    btns_usertype.classList.remove('student');
    btns_usertype.classList.add('teacher');
    usertype.value = 'teacher';
    setTimeout(() => {
        btn_teacher.className = btn_active;
        btn_student.className = btn_deactive;
    }, 500);
});

btn_student.addEventListener('click', () => {
    btns_usertype.classList.remove('teacher');
    btns_usertype.classList.add('student');
    usertype.value = 'student';
    setTimeout(() => {
        btn_student.className = btn_active;
        btn_teacher.className = btn_deactive;
    }, 500);
});

