import { useStateValue } from '../contexts/StateContext';

const Botao = () => {
	const [state, dispatch] = useStateValue();

	return (
		<button>
			{state.user.name} - {state.theme}
		</button>
	);
};

export default Botao;
