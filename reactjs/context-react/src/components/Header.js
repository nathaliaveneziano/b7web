import Botao from './Botao';
import ThemeContext from '../contexts/ThemeContext';

const Header = () => (
	<ThemeContext.Consumer>
		{(value) => (
			<header className={`box theme-${value}`}>
				<Botao />
			</header>
		)}
	</ThemeContext.Consumer>
);

export default Header;
