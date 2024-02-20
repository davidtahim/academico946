// document.write("Data Atual:");
// document.write(Date());
// function funcao1() {
//     alert ("Usando Função");
// }

function calcmedia(n1,n2) {
    var m = (n1+n2)/2;
    return m;
}

function resultado(form) {
    var media = calcmedia (parseFloat(form.nota1.value), parseFloat(form.nota2.value));
    if (media>=7) {
        alert ("Aprovado "+ media);
    } else {
        alert ("Reprovado "+ media);
    }
}