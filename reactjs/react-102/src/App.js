import React, { useState } from 'react';
import styled from 'styled-components';

const Input = styled.input`
	width: 400px;
	height: 30px;
	font-size: 16px;
	padding: 10px;
	border: 1px solid #000;
`;

function App() {
	const [email, setEmail] = useState('');
	const [isLogged, setIsLogged] = useState(false);

	return (
		<>
			<Input
				placeholder="Digite um e-mail"
				type="email"
				value={email}
				onChange={(e) => setEmail(e.target.value)}
			/>

			{/* Renderização Condicional */}
			{/* Quando a condição for verdadeira, será mostrado */}
			{email.length > 0 && (
				<p>
					{/* IF ternário na condição */}
					{email.length} caractere{email.length > 0 ? 's' : ''}
				</p>
			)}

			{isLogged
        ? <button>Sair</button>
        : <button>Fazer Login</button>
      }
		</>
	);
}

export default App;
