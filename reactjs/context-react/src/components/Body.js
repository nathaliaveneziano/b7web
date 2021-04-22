import Botao from './Botao';
import Contagem from './Contagem';
import { useStateValue } from '../contexts/StateContext';

const Body = (props) => {
	const context = useStateValue();

	const handleButton = () => {
		props.setUserName('Claudia');
	};

	return (
		<article className={`box theme-${context.theme}`}>
			<Botao />
			<button onClick={handleButton}>Trocar para Claudia</button>
			<hr/>
			<Contagem />
		</article>
	);
};

export default Body;
