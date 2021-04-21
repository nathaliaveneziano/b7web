import Botao from './Botao';
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
		</article>
	);
};

export default Body;
