import { useContext } from 'react';

import UserContext from '../contexts/UserContext';
import ThemeContext from '../contexts/ThemeContext';

const Botao = () => {
	const theme = useContext(ThemeContext);
	const user = useContext(UserContext);

	return (
		<button>
			{user.name} - {theme}
		</button>
	);
};

export default Botao;
