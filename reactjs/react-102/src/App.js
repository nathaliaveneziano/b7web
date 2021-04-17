import React from 'react';
// Quando utilizar CSS, deve ser feita a importação do aquivo dessa forma
// import './App.css';

function Avatar(props) {
	return (
		// Utilizando CSS
		// <div className="avatar">

		// Utilizando StyleSheet
		// deve ser colocado um para cada elemento
		<div style={{ backgroundColor: '#FF0000', padding: 20, width: 150 }}>
			<img
				style={{ width: 50, height: 50 }}
				src={props.user.url}
				alt={props.user.name}
			/>
			<br />
			<span>{props.user.name}</span>
		</div>
	);
}

function App() {
	let user = {
		url: 'http://www.google.com.br/google.jpg',
		name: 'Nathália Veneziano',
	};

	return (
		<>
			<Avatar user={user} />
		</>
	);
}

export default App;
