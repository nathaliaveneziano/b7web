import UserContext from '../contexts/UserContext';
import ThemeContext from '../contexts/ThemeContext';

const Botao = () => (
	<UserContext.Consumer>
		{(value) => (
			<ThemeContext.Consumer>
				{(themeValue) => (
					<button>
						{value.name} - {themeValue}
					</button>
				)}
			</ThemeContext.Consumer>
		)}
	</UserContext.Consumer>
);

export default Botao;
