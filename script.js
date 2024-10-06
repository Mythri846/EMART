let searchform = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () =>
{
    searchform.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form');
document.querySelector('#login-btn').onclick = ()=>
{
    loginForm.classList.toggle('active');
}