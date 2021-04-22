import { useStateValue } from '../contexts/StateContext';

const Header = () => {
	const [state, dispatch] = useStateValue();

	return (
		<header className={`box theme-${state.theme}`}>
			{state.theme === 'light' ? (
				<button onClick={() => dispatch({ type: 'setTheme', theme: 'dark' })}>
					Dark
				</button>
			) : (
				<button onClick={() => dispatch({ type: 'setTheme', theme: 'light' })}>
					Light
				</button>
			)}
		</header>
	);
};

export default Header;
