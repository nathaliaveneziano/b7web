import React from 'react';
import { connect } from 'react-redux';

function Login(props) {
	const handleClaudia = () => {
		props.setName('Claudia');
	};

	return (
		<div>
			<h4>Página LOGIN</h4>

			<p>Nome: {props.name}</p>

			<p>
				<button type="button" onClick={handleClaudia}>
					Setar nome para Claudia
				</button>
			</p>
		</div>
	);
}

const mapStateToProps = (state) => ({
	name: state.usuario.name,
});

const mapDispatchToProps = (dispatch) => ({
	setName: (newName) =>
		dispatch({ type: 'SET_NAME', payload: { name: newName } }),
});

export default connect(mapStateToProps, mapDispatchToProps)(Login);
