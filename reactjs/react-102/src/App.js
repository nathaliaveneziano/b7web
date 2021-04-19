import React, { useState, useEffect } from 'react';
import SearchBox from './components/SearchBox';

function App() {
	const [list, setList] = useState([]);

	useEffect(() => {
		setList([
			{ title: 'Comprar o bolo', done: false },
			{ title: 'Pegar o cachorro no Petshop', done: true },
			{ title: 'Gavar aula', done: false },
		]);
	}, []);

	function addAction(newItem) {
		// Essa lógica não endente que o array foi atualizado, pois é uma atribuição do array
		/* let newlist = list;

		newlist.push({
			title: newItem,
			done: false,
		});

		setList(newlist); */

		// Já nessa, ele entende que é um novo array e renderiza a lista
		
		// forma direta
		// let newlist = [...list, { title: newItem, done: false }];

		// forma mais descritiva
		let newlist = [...list];
		newlist.push({
			title: newItem,
			done: false,
		});

		setList(newlist);
	}

	return (
		<>
			<h1>Lista de Tarefas</h1>
			<SearchBox frasePadrao="Adicione um item" onEnter={addAction} />
			<hr />
			<ul>
				{list.map((item, index) => (
					<li key={index}>
						{item.done && <del>{item.title}</del>}
						{!item.done && item.title}
					</li>
				))}
			</ul>
		</>
	);
}

export default App;
