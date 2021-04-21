import { useStateValue } from '../contexts/StateContext';

const Botao = () => {
	const context = useStateValue();

	return (
		<button>
			{context.user.name} - {context.theme}
		</button>
	);
};

export default Botao;
