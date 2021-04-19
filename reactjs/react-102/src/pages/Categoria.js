import React from 'react';
// import para receber o(s) parâmetro(s) da URL
import { useParams } from 'react-router-dom';

function Categoria() {
	let { cat } = useParams();

	return (
		<div>
			<h4>Página CATEGORIA</h4>
			<p>Exibindo itens da categoria: {cat}</p>
			<p>bla bla bla</p>
		</div>
	);
}

export default Categoria;
