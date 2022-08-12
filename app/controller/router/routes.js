import { engine } from 'express-handlebars';
const Express = require('express');

const app = new Express();

app.engine('handlebars', engine({ defaultLayout: 'main' }));
app.set('view engine', 'handlebars');

function rotas() {
    app.get('/', function (req, res) {
        res.render('paginaInicial');
    });
}


// Startando o servidor
app.liste(3000, function () {
    console.log('Servidor rodando!');
});

module.exports = {
    rotas: rotas,
};
