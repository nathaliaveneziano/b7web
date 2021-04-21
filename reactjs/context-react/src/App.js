import { useState } from 'react';
import './App.css';

import { StateProvider } from './contexts/StateContext';

import Header from './components/Header';
import Menu from './components/Menu';
import Body from './components/Body';

function App() {
	const [userName, setUserName] = useState('Nathália');
	const [userEmail, setUserEmail] = useState('nath@test.com');

	let providerValue = {
		theme: 'dark',
		user: {
			name: userName,
			email: userEmail,
		},
	};

	return (
		<StateProvider value={providerValue}>
			<div className="container">
				{/* <ThemeContext.Consumer>
					{(value) => <p>Tema: {value}</p>}
				</ThemeContext.Consumer> */}
				<Header />
				<section>
					<Menu />
					<Body setUserName={setUserName} />
				</section>
			</div>
		</StateProvider>
	);
}

export default App;
