import React from 'react';
import styled from 'styled-components';

const Site = styled.div`
	width: 400px;
	height: 400px;
	background: #00ff00;
`;

const Botao = styled.button`
	font-size: 19px;
	padding: 10px 15px;
	border: 3px dashed #ff0000;
	color: #ff0000;
	background: #ffff;
	margin: 5px;
	border-radius: 5px;
`;

const BotaoPequeno = styled(Botao)`
	font-size: 16px;
	padding: 5px 10px;
`;

function App() {
	return (
		<Site>
			<Botao>Clique aqui</Botao>
			<BotaoPequeno>Clique aqui</BotaoPequeno>
		</Site>
	);
}

export default App;
