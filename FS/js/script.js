document.getElementById('cadastroUserBtn').addEventListener('click', function() {
    renderForm('View/Entity/User/cadastro.php');
});

document.getElementById('cadastroUserEmpresaBtn').addEventListener('click', function() {
    renderForm('View/Entity/User/cadastroEmpresa.php');
});

document.getElementById('pessoaBtn').addEventListener('click', function() {
    renderForm('View/Entity/User/pessoa.php');
});

document.getElementById('produtoBtn').addEventListener('click', function() {
    renderForm('View/Entity/User/produto.php');
});

document.getElementById('categoriaBtn').addEventListener('click', function() {
    renderForm('View/Entity/User/categoria.php');
});

function renderForm(url) {
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById('cadastroFormContainer').innerHTML = data;
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}
