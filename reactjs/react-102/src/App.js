import React from 'react';
import { BrowserRouter, Switch, Route, Link, Redirect } from 'react-router-dom';
import Categoria from './pages/Categoria';
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
						<li>
							<Link to="/quem-somos">Quem Somos</Link>
						</li>
						<li>
							<Link to="/categoria?tipo=esportes">Esportes</Link>
						</li>
						<li>
							<Link to="/categoria?tipo=noticias">Notícias</Link>
						</li>
						<li>
							<Link to="/categoria?tipo=viagem&subtipo=newyork">Viagem</Link>
						</li>
					</ul>
				</nav>
			</header>
			<hr />

			<Switch>
				{/* O Switch verifica Rota por Rota na ordem passada */}
				<Route exact path="/">
					<Home />
				</Route>
				<Route path="/sobre">
					<Sobre />
				</Route>
				<Route path="/quem-somos">
					{/* Redireciona para a rota indicada */}
					<Redirect to="/sobre" />
				</Route>
				<Route path="/categoria">
					<Categoria />
				</Route>
				{/* Por isso, a última Rota deve ser a de erro */}
				<Route path="*">
					<h4>Página não encontrada!</h4>
				</Route>
			</Switch>

			<hr />
			<footer>Todos os diretos resevados...</footer>
		</BrowserRouter>
	);
}

export default App;
