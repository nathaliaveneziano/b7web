import React from 'react';
import { BrowserRouter, Switch, Route, Link } from 'react-router-dom';
import Home from './pages/Home';
import Sobre from './pages/Sobre';

function App() {
	return (
		<BrowserRouter>
			<header>
				<h1>Meu Site Legal</h1>
				<nav>
					<ul>
						<li>
							<Link to="/">Home</Link>
						</li>
						<li>
							<Link to="/sobre">Sobre</Link>
						</li>
					</ul>
				</nav>
			</header>
			<hr/>

			<Switch>
				{/* Será feito o redirecionamento quando for EXATAMENTE /, senão, redireciona para outra do route ou ignora */}
				<Route exact path="/">
					<Home />
				</Route>
				{/* Rota para um componente */}
				<Route path="/sobre">
					<Sobre />
				</Route>
			</Switch>

			<hr/>
			<footer>
				Todos os diretos resevados...
			</footer>
		</BrowserRouter>
	);
}

export default App;
