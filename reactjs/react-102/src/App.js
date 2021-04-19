import React, { useState } from 'react';
import styled from 'styled-components';
import SearchBox from './components/SearchBox';

function App() {
	const [searchText, setSearchText] = useState('');

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
			<SearchBox
				frasePadrao={searchText}
			/>
			<hr />
			Texto procurado: {searchText}
		</>
	);
}

export default App;
