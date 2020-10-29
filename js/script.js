function teste_forca(elemento){
    if (elemento.value.length < 6){
        console.log("Senha Fraca");

        document.getElementById("vermelho").style.display = "inline-block";

    }else if (elemento.value.length >=6 && elemento.value.length <10){
        console.log("Senha Mediana");

        document.getElementById("amarelo").style.display = "inline-block";

    }else{
        console.log("Senha forte");

        document.getElementById("verde").style.display = "inline-block";
    }
}