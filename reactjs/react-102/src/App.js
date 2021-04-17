import React from 'react';
import styled from 'styled-components';

// cria um componente já estilizado
const Site = styled.div`
	width: 400px;
	height: 400px;
	background: #00ff00;
`;

const Title = styled.h1`
	color: #ff0000;
	font-size: 18px;
`;

const Botao = styled.button`
	font-size: 19px;
	padding: 10px 15px;
`;

// Para utilizar StuledComponents, devemos instalar através do comando
// npm install styled-components --save
function App() {
	return (
		<Site>
			<Title>Título bem legal</Title>
			<Botao>Clique aqui</Botao>
		</Site>
	);
}

export default App;
