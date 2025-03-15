document.getElementById('solde').addEventListener('keyup',verifySolde);
function verifySolde(){
    let solde = document.getElementById('solde').value;
    if(solde<0 || solde==''){
        document.getElementById('soldeerror').innerHTML="ne peut etre negatif";
        console.log("ne peut etre negatif")

    }else{
        document.getElementById('soldeerror').innerHTML="";

        console.log("nice");
    }
}