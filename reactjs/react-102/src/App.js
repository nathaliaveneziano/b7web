import React from 'react';

// Função recebendo parâmetros(props) 
/* function BemVindo(props) {
	return <h1>Olá {props.nome}! Você tem {props.idade} anos.</h1>;
} */

function Avatar(props) {
  return <div>
      <img src={props.user.url} alt={props.user.name}/>
      <br/>
      <span>{props.user.name}</span>
    </div>
}

function App() {
  let user = {
    url: 'http://www.google.com.br/google.jpg',
    name: 'Nathália Veneziano',
  };

	return (
		<>
			{/* <BemVindo nome="Nathália" idade="34" />
			<BemVindo nome="Marcelo" idade ="50" /> */}
			<Avatar user={user} />
		</>
	);
}

export default App;
