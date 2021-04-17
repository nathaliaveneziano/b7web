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
	// mudando elemento de acordo com a props
	// background: ${(props) => props.color || '#00ff00'}

	background: ${(props) => (props.ativo ? '#0000FF' : '#CCC')};
	color: ${(props) => (props.ativo ? '#FFF' : '#000')};
`;

// Para utilizar StyledComponents, devemos instalar através do comando
// npm install styled-components --save
function App() {
	return (
		<Site>
			<Title>Título bem legal</Title>
			{/* <Botao color="#ff0000">Clique aqui</Botao> */}
			{/* <Botao color="#0000ff">Clique aqui</Botao> */}
			{/* <Botao>Clique aqui</Botao> */}
			<Botao ativo={true}>Clique aqui</Botao>
			<Botao ativo={false}>Clique aqui</Botao>
		</Site>
	);
}

export default App;
