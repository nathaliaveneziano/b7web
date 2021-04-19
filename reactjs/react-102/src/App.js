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
		let newlist = [...list];
		newlist.push({
			title: newItem,
			done: false,
		});

		setList(newlist);
	}

	function handleToggleDone(index) {
		let newlist = [...list];
		newlist[index].done = !newlist[index].done;

		setList(newlist);
	}

	return (
		<>
			<h1>Lista de Tarefas</h1>
			<SearchBox frasePadrao="Adicione um item" onEnter={addAction} />
			<hr />
			<ul>
				{list.map((item, index) => (
					// quando o onClick tem uma função anônima, significa que podemos passar um parâmetro na função informada

					// Se estiver mudando o status no clique do item
					<li key={index} onClick={() => handleToggleDone(index)}>
						{item.done && <del>{item.title}</del>}
						{!item.done && item.title}
					</li>

					// Se estiver usando um botão para alterar o status, seria da seguinte forma:
					// <li key={index}>
					// 	{item.done && <del>{item.title}</del>}
					// 	{!item.done && item.title}
					// 	{/* Caso quisesse adicinar um botão para fazer a alteração */}
					// 	<button type="button" onClick={() => handleToggleDone(index)}>
					// 		{item.done ? 'Desfazer' : 'Fazer' }
					// 	</button>
					// </li>
				))}
			</ul>
		</>
	);
}

export default App;
