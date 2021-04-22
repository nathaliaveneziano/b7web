import Botao from './Botao';
import Contagem from './Contagem';
import { useStateValue } from '../contexts/StateContext';

const Body = () => {
	const [state, dispatch] = useStateValue();

	const handleButton = (name) => {
		dispatch({
			type: 'setName',
			name,
		});
	};

	const changeName = state.user.name === 'Nathália' ? 'Claudia' : 'Nathália';

	return (
		<article className={`box theme-${state.theme}`}>
			<Botao />
			<button onClick={() => handleButton(changeName)}>Trocar para {changeName}</button>
			<hr />
			<Contagem />
		</article>
	);
};

export default Body;
