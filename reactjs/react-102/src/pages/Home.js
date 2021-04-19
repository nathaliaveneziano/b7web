import React from 'react';
import { useHistory } from 'react-router-dom';

function Home() {
	let history = useHistory();

	const handleButton = () => {
    // Muda o histórico para a URL indicada
    setTimeout(() => {
      history.replace('/sobre');
    }, 2000);
  };

	return (
		<div>
			<h4>Página HOME</h4>
			<button type="button" onClick={handleButton}>
				Ir para a página SOBRE
			</button>
		</div>
	);
}

export default Home;
