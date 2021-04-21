import Botao from './Botao';
import ThemeContext from '../contexts/ThemeContext';

const Body = (props) => {
	const handleButton = () => {
		props.setUserName('Claudia');
	};

	return (
		<ThemeContext.Consumer>
			{(value) => (
				<article className={`box theme-${value}`}>
					<Botao />
					<button onClick={handleButton}>Trocar para Claudia</button>
				</article>
			)}
		</ThemeContext.Consumer>
	);
};

export default Body;
