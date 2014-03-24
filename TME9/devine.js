
function init(){
    d = setTimeout("Fin()",10000);
    return nbadeviner = Math.floor(Math.random()*11);
}
        
        
function controle(input){
    var val = input.value;
            
    if(/^[^\d]*$/.test(val))
        alert("farceur");
    else if(nbadeviner == Number(val)){
        clearTimeout(d);
        alert("gagné");
    }
    else if(nbadeviner > Number(val))
        alert("C'est plus");
    else
        alert("C'est moins");
}

function Fin(){
    alert("Temps écloué vous avez perdu !!");
    var conf = window.confirm("Voulez-vous réesayer ?");
    if(conf)
       init();
}