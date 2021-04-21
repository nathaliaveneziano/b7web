import Botao from './Botao';
import ThemeContext from '../contexts/ThemeContext';

const Menu = () => (
	<ThemeContext.Consumer>
		{(value) => (
			<aside className={`box theme-${value}`}>
				<Botao />
			</aside>
		)}
	</ThemeContext.Consumer>
);

export default Menu;
