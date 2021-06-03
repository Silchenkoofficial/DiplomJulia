$(document).ready(function() {

    const onLogout = () => {
        document.cookie = 'auth=0'
        document.cookie = 'login=0'
        document.cookie = 'userID=0'
        location.href = 'index.php'
    }
    
    const logoutBtn = document.querySelector('#logoutBtn')
    const burgerMenu = document.querySelector('.burger')
    const dropdownMenu = document.querySelector('.dropdown')
    const cards = document.querySelectorAll('.card');
    
    const tab1 = document.querySelector('.tab-1')
    const tab2 = document.querySelector('.tab-2')
    
    if ($('#logoutBtn').length > 0) {
        logoutBtn.addEventListener('click', () => {
            onLogout()
        })
    }
    
    burgerMenu.addEventListener('click', () => {
        burgerMenu.classList.contains('active') ? burgerMenu.classList.remove('active') : burgerMenu.classList.add('active')
        dropdownMenu.style.transform = burgerMenu.classList.contains('active') ? 'translate(0)' : 'translate(-101%)'
    })
    
    if ($('.tab-1').length > 0 && $('.tab-2').length > 0) {
        tab1.addEventListener('click', (e) => {
            tab2.classList.remove('active')
            e.target.classList.add('active')
            document.querySelector('.tab__content--1').style.display = 'block';
            document.querySelector('.tab__content--2').style.display = 'none';
        })
        
        tab2.addEventListener('click', (e) => {
            tab1.classList.remove('active')
            e.target.classList.add('active')
            document.querySelector('.tab__content--2').style.display = 'block';
            document.querySelector('.tab__content--1').style.display = 'none';
        })
    }

    $(".card").click((e) => {
        document.cookie='testID=' + e.target.getAttribute('data-id')
        location.href = 'testStart.php';
    })
    
});