import { useState } from 'react';
import './App.css';

import ThemeContext from './contexts/ThemeContext';

import Header from './components/Header';
import Menu from './components/Menu';
import Body from './components/Body';

function App() {
	const [userName, setUserName] = useState('Nathália');

	return (
		<ThemeContext.Provider value="dark">
			<div className="container">
				<ThemeContext.Consumer>
					{(value) => <p>Tema: {value}</p>}
				</ThemeContext.Consumer>
				<Header username={userName} />
				<section>
					<Menu username={userName} />
					<Body username={userName} setUserName={setUserName} />
				</section>
			</div>
		</ThemeContext.Provider>
	);
}

export default App;
