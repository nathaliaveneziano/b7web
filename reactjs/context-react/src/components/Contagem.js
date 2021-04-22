import { useReducer } from 'react';

const initialState = {
	contagem: 0,
};

const reducer = (state, action) => {
	switch (action.type) {
		case 'increment':
			return { ...state, contagem: state.contagem + 1 };
		case 'decrement':
			return { ...state, contagem: state.contagem - 1 };
		case 'double':
			return { ...state, contagem: state.contagem * 2 };
		case 'set':
			return { ...state, contagem: action.novacontagem };
		default:
			return state;
	}
};

const Contagem = () => {
	const [state, dispatch] = useReducer(reducer, initialState);

	return (
		<div>
			<button onClick={() => dispatch({ type: 'increment' })}>+</button>
			<span>{state.contagem}</span>
			<button onClick={() => dispatch({ type: 'decrement' })}>-</button>
			<button onClick={() => dispatch({ type: 'double' })}>Dobrar</button>

			<button onClick={() => dispatch({ type: 'set', novacontagem: 20 })}>
				Setar como 20
			</button>
			<button onClick={() => dispatch({ type: 'set', novacontagem: 0 })}>
				Setar como 0
			</button>
		</div>
	);
};

export default Contagem;
