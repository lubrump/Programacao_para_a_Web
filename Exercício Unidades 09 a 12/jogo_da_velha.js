var count = 0
var listax = []
var listao = []

function pedirNomes() {
    nome1 = prompt("Nome do jogador 1: ");
    nome2 = prompt("Nome do jogador 2: ")

    if (nome1 == '') {
        nome1 = 'Jogador1';
    }
    if (nome2 == '') {
        nome2 = 'Jogador2';
    }

    
    if (nome1.length > 10) {
        mensagem.textContent = nome1.slice(0, 10) + "...";
    }
    else {
        mensagem.textContent = nome1;
    }
}


function trocarImagem(id) {
    const img = document.getElementById(id)
    const mensagem = document.getElementById("mensagem")

    if (!img.src.includes("Imagens/Fundo_verde.png")) {
        return;
    }

    count++

    if (count % 2 != 0) {
        if (nome2.length > 10) {
            mensagem.textContent = nome2.slice(0, 10) + "...";
        }
        else {
            mensagem.textContent = nome2;
        }

        img.src = "Imagens/Pixel_art_X.png"
        listax.push(Number(id))
    }
    else if (count % 2 == 0) {
        if (nome1.length > 10) {
            mensagem.textContent = nome1.slice(0, 10) + "...";
        }
        else {
            mensagem.textContent = nome1;
        }

        img.src = "Imagens/Pixel_art_O.png"
        listao.push(Number(id))
    }

    verifica(listax, listao, count);

}

function verifica(listax, listao, count) {
    if ((listax.includes(1) && listax.includes(2) && listax.includes(3)) ||
        (listax.includes(4) && listax.includes(5) && listax.includes(6)) ||
        (listax.includes(7) && listax.includes(8) && listax.includes(9)) ||
        (listax.includes(1) && listax.includes(5) && listax.includes(9)) ||
        (listax.includes(3) && listax.includes(5) && listax.includes(7)) ||
        (listax.includes(2) && listax.includes(5) && listax.includes(8)) ||
        (listax.includes(3) && listax.includes(6) && listax.includes(9)) ||
        (listax.includes(1) && listax.includes(4) && listax.includes(7))) {
        alert(nome1 + " venceu!")
        window.location.reload();
    }

    else if ((listao.includes(1) && listao.includes(2) && listao.includes(3)) ||
        (listao.includes(4) && listao.includes(5) && listao.includes(6)) ||
        (listao.includes(7) && listao.includes(8) && listao.includes(9)) ||
        (listao.includes(1) && listao.includes(5) && listao.includes(9)) ||
        (listao.includes(3) && listao.includes(5) && listao.includes(7)) ||
        (listao.includes(2) && listao.includes(5) && listao.includes(8)) ||
        (listao.includes(3) && listao.includes(6) && listao.includes(9)) ||
        (listao.includes(1) && listao.includes(4) && listao.includes(7))) {
        alert(nome2 + " venceu!")
        window.location.reload();
    }

    else if (count == 9) {
        alert("Deu velha!")
        window.location.reload();
    }


}
