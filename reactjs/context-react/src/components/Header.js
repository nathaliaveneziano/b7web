import { useContext } from 'react';
import Botao from './Botao';
import ThemeContext from '../contexts/ThemeContext';

const Header = () => {
	const theme = useContext(ThemeContext);

	return (
		<header className={`box theme-${theme}`}>
			<Botao />
		</header>
	);
};

export default Header;
