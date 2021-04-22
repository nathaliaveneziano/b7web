import Botao from './Botao';
import Contagem from './Contagem';
import { useStateValue } from '../contexts/StateContext';

const Body = () => {
	const [state, dispatch] = useStateValue();

	const handleButton = () => {
		dispatch({
			type: 'setName',
			name: 'Claudia',
		});
	};

	return (
		<article className={`box theme-${state.theme}`}>
			<Botao />
			<button onClick={handleButton}>Trocar para Claudia</button>
			<hr />
			<Contagem />
		</article>
	);
};

export default Body;
