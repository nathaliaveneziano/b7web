import { useState } from 'react';
import './App.css';

import Header from './components/Header';
import Menu from './components/Menu';
import Body from './components/Body';

function App() {
	const [userName, setUserName] = useState('Nathália');

	return (
		<div className="container">
			<Header username={userName} />
			<section>
				<Menu username={userName} />
				<Body username={userName} setUserName={setUserName} />
			</section>
		</div>
	);
}

export default App;
