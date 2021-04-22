import './App.css';

import { StateProvider } from './contexts/StateContext';

import Header from './components/Header';
import Menu from './components/Menu';
import Body from './components/Body';

function App() {
	return (
		<StateProvider>
			<div className="container">
				{/* <ThemeContext.Consumer>
					{(value) => <p>Tema: {value}</p>}
				</ThemeContext.Consumer> */}
				<Header />
				<section>
					<Menu />
					<Body />
				</section>
			</div>
		</StateProvider>
	);
}

export default App;
