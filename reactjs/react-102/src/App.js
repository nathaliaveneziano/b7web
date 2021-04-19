import React, { useState, useEffect } from 'react';
import styled from 'styled-components';
import SearchBox from './components/SearchBox';

function App() {
	const [searchText, setSearchText] = useState('');
	const [list, setList] = useState([]);

	useEffect(() => {
		setList([
			{ title: 'Comprar o bolo', done: false },
			{ title: 'Pegar o cachorro no Petshop', done: true },
			{ title: 'Gavar aula', done: false },
		]);
	}, []);

	const handleSearchInput = (novoTexto) => {
		setSearchText(novoTexto);
	};

	return (
		<>
			<h1>Lista de Tarefas</h1>
			<SearchBox
				frasePadrao="Faça sua busca..."
				onChangeText={handleSearchInput}
			/>
			<hr />
			<ul>
				{list.map((item, index) => (
					// toda vez que um elemento ou componente estiver num MAP, deve adicionar KEY
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
