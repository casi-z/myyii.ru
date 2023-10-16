'use strict'
function menuBurger(){
    const burgerButton = document.querySelector('.header__burger-button')
    const mainMenu = document.querySelector('nav')
    burgerButton.addEventListener('click', () => {

        mainMenu.classList.toggle('--active')
    })

}
menuBurger()

