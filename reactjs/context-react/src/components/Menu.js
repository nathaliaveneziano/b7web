import Botao from './Botao';
import ThemeContext from '../contexts/ThemeContext';

const Menu = (props) => (
	<ThemeContext.Consumer>
		{(value) => (
			<aside className={`box theme-${value}`}>
				<Botao username={props.username} />
			</aside>
		)}
	</ThemeContext.Consumer>
);

export default Menu;
