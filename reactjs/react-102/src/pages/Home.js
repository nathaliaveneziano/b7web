import React from 'react';
import { useHistory } from 'react-router-dom';
import { useSelector, useDispatch } from 'react-redux';

function Home() {
	let history = useHistory();
	const dispatch = useDispatch();

	const name = useSelector((state) => state.usuario.name);
	const contador = useSelector((state) => state.usuario.contador);

	const handleButton = () => {
		setTimeout(() => {
			history.replace('/sobre');
		}, 2000);
	};

	const handleNathalia = () => {
		dispatch({
			type: 'SET_NAME',
			payload: { name: 'Nathália' },
		});
	};

	const handleIncrement = () => {
		dispatch({ type: 'INCREMENT_CONTADOR' });
	};

	return (
		<div>
			<h4>Página HOME</h4>

			<p>Nome: {name}</p>
			<p>Contagem: {contador}</p>

			<p>
				<button type="button" onClick={handleNathalia}>
					Setar nome para Nathália
				</button>
			</p>
			<p>
				<button type="button" onClick={handleIncrement}>
					+1
				</button>
			</p>

			<button type="button" onClick={handleButton}>
				Ir para a página SOBRE
			</button>
		</div>
	);
}

export default Home;
