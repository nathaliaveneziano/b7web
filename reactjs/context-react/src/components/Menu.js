import Botao from './Botao';
import { useStateValue } from '../contexts/StateContext';

const Menu = () => {
	const context = useStateValue();

	return (
		<aside className={`box theme-${context.theme}`}>
			<Botao />
		</aside>
	);
};

export default Menu;
