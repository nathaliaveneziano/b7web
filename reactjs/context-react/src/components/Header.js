import Botao from './Botao';
import ThemeContext from '../contexts/ThemeContext';

const Header = (props) => (
	<ThemeContext.Consumer>
		{(value) => (
			<header className={`box theme-${value}`}>
				<Botao username={props.username} />
			</header>
		)}
	</ThemeContext.Consumer>
);

export default Header;
