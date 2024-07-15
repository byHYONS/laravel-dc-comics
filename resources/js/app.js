import './bootstrap';

//? import scss:
import '~resources/scss/app.scss';

//? import boostrap:
import * as bootstrap from 'bootstrap';

//? import per le immagini:
import.meta.glob(['../img/**']);


//? MODALE:
const deleteBtn = document.querySelector('.destroy');
const closeBtn = document.querySelector('.modale__exit');
const modale = document.querySelector('.delete__modale');
const overLay = document.querySelector('.screen');

deleteBtn.addEventListener('click', function(){
    console.log('ho cliccato il bottone');
    modale.classList.remove('holding');
    document.body.classList.add('no-scroll');
    overLay.classList.remove('screen');

});

closeBtn.addEventListener('click', function(){
    console.log('ho cliccato il bottone');
    modale.classList.add('holding');
    document.body.classList.remove('no-scroll');
    overLay.classList.add('screen');

});


