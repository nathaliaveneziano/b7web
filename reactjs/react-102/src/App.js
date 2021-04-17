import React from 'react';

// Forma muito usada até pouco tempo
/* class App extends React.Component {
  render() {
    return <h1>Testando 1, 2, 3...</h1>;
  }
} */

function formatarNome(usuario) {
	return usuario.nome + ' ' + usuario.sobrenome;
}

// Forma mais usada atualmente
function App() {
	let nome = 'Nathália';
	let idade = 35;
	let usuario = {
		nome: 'Nathália',
		sobrenome: 'Veneziano',
	};
	let imagem = 'https://www.google.com.br/google.jpg';

	return (
		// Só pode retornar 1 elemento, caso precise de mais, englobe com outras tags
		// <div> = muito utilizada para englobar
		// <> = fragmento que engloba o código, mas não aparce no HTML final
		<>
			<h1>Testando 4, 5, 6...</h1>

			{/* inserindo variáveis e funções dentro de texto e atributos */}
			<div>
				{' '}
				Meu nome é {nome} e tenho {idade} anos{' '}
			</div>
			<div> Nome Completo: {formatarNome(usuario)} </div>
			<div> Soma de 1 + 1 = {1 + 1} </div>
			<div> ... </div>
			<img src={imagem} alt="Logo original do Google" />
		</>
	);
}

// Constante que recebe uma função (Arrow Function)
/* let App = () => {
  return <h1>Testando 7, 8, 9...</h1>;
} */

// Arrow Function com retorno direto, pouco usado e para algo direto
// let App = () => <h1>Testando 10, 11, 12...</h1>;

export default App;
