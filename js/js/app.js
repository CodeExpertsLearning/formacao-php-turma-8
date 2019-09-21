//const name = 'JS';

//EcmaScript6 - 2015

/*
let nome = prompt('Qual seu nome?');

alert('Olá, ' + nome);

console.log('Olá, ' + nome);
*/

// let cursos = [
//     'Curso 1',
//     'Curso 2',
//     'Curso 3',
//     'Curso 4'
// ];

/* 
for (c in cursos) {
    console.log(cursos[c]);
}
*/

// for (c of cursos) {
//     console.log('Curso: ' + c);
// }

//Seletores
let ipt = document.querySelector('input[name=curso]');
let btn = document.querySelector('button');

//let stg = document.querySelector('strong');

//ipt.addEventListener('keyup', function(){
    //stg.textContent = ipt.value;
//});

btn.addEventListener('click', function(){

    // localStorage.setItem('curso', ipt.value);
    // localStorage.removeItem('curso');

    let li = document.createElement('li');
    li.textContent = ipt.value;

    document.querySelector('ul.list').appendChild(li);
});