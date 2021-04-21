import { useContext } from 'react';
import Botao from './Botao';
import ThemeContext from '../contexts/ThemeContext';

const Body = (props) => {
	const theme = useContext(ThemeContext);

	const handleButton = () => {
		props.setUserName('Claudia');
	};

	return (
		<article className={`box theme-${theme}`}>
			<Botao />
			<button onClick={handleButton}>Trocar para Claudia</button>
		</article>
	);
};

export default Body;
