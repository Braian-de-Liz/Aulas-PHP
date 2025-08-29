import prompt from "prompt-sync";

const promptt = prompt();

function compararPalavra(palavrinhazada){
    const adazahnirvalap = palavrinhazada.split('').reverse().join('');
    const resposta = (palavrinhazada != adazahnirvalap) ? `sua palavra (${palavrinhazada}) é não é palindromo e seu inverso é (${adazahnirvalap})` : `Sua ${palavrinhazada} é palindromo de${adazahnirvalap}`;
    
    return resposta;
}

const palavrinhazada = promptt(" fala ai uma palavra");




console.log(compararPalavra(palavrinhazada));