import { useState } from 'react';
import './App.css';

import ThemeContext from './contexts/ThemeContext';
import UserContext from './contexts/UserContext';

import Header from './components/Header';
import Menu from './components/Menu';
import Body from './components/Body';

function App() {
	const [userName, setUserName] = useState('Nathália');
	const [userEmail, setUserEmail] = useState('nath@test.com');

	return (
		<ThemeContext.Provider value="dark">
			<UserContext.Provider value={{ name: userName, email: userEmail }}>
				<div className="container">
					<ThemeContext.Consumer>
						{(value) => <p>Tema: {value}</p>}
					</ThemeContext.Consumer>
					<Header />
					<section>
						<Menu />
						<Body setUserName={setUserName} />
					</section>
				</div>
			</UserContext.Provider>
		</ThemeContext.Provider>
	);
}

export default App;
