
function resumen(){
    const valor=Number(200);
    var cant=document.getElementById('cantidad').value
    var categ= document.getElementById('categoria').value
    var t
    var total=valor*cant
    switch (categ){
        case "estudiante":
        t = Number(total - (80*(total))/100);
        break;
        case "trainee":
        t = Number(total - (50*(total))/100);
        break;
        case "junior":
        t = Number(total - (15*(total))/100);
        break;
    }
    document.getElementById('total').textContent="Total a Pagar: $"+t
}


