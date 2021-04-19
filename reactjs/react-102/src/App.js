import React, { useState, useEffect } from 'react';
import styled from 'styled-components';

function App() {
	const [contagem, setContagem] = useState(0);

	// Por padrão recebe 2 parâmetros: função (existente ou anônima) e array
  // A função será executada quando alguma coisa acontecer
  // O array terá os observadores e quando algum dos valores ali contido, tiver alguma alteração, a função será chamada

  // componentDidMount = quando iniciamos o componente ou quando o array estiver vazio
	useEffect(() => {
    document.title = 'Começou a brincadeira';
  }, []);
  
  // componentDidUpdate = quando algum valor contido no array for alterado, a função será chamada novamente
	useEffect(() => {
    // Para exibir a mensagem acima, foi adicionado o if para mostrar apenas quando o valor for alterado
    if (contagem > 0) {
      document.title = 'Contagem: ' + contagem;
    }

    // componentWillUnmont = quando o componente sair do DOM (da tela)
    // o return recebe uma função existente ou anônima
    return () => {};
  }, [contagem]);

  // normalmente, em requisições, é usado o useEffect com array vazio.

	const aumentarAction = () => {
		setContagem(contagem + 1);
	};

	return (
		<>
			<h1>Contagem: {contagem}</h1>
			<button onClick={aumentarAction}>Aumentar Número</button>
		</>
	);
}

export default App;
