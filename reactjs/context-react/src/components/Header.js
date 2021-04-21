import Botao from './Botao';
import { useStateValue } from '../contexts/StateContext';

const Header = () => {
	const context = useStateValue();

	return (
		<header className={`box theme-${context.theme}`}>
			<Botao />
		</header>
	);
};

export default Header;
