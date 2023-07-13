if (localStorage.getItem('token') == null) {
    alert("Tem que estar logado para acessar essa página!");
    window.location.href = '../signin.html';
}

let userLogado = JSON.parse(localStorage.getItem('userLogado'));

let logado = document.getElementById("#logado");
logado.innerHTML = `Olá ${userLogado.name}`;

function logout() {
    localStorage.removeItem('token');
    localStorage.removeItem('userLogado');
    window.location.href = '../signin.html';
}