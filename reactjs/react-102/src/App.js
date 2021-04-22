import React from 'react';
import { BrowserRouter, Switch, Route, Link, Redirect } from 'react-router-dom';
import Home from './pages/Home';
import Login from './pages/Login';
import Sobre from './pages/Sobre';

// Pertence a 1º forma de acesso a URL Privada
const isLogged = false;

// Pertence a 2º forma de acesso a URL Privada
const PrivateRoute = ({ children, ...rest }) => {
	return (
		// Retorna todas as props incluídas na tag
		<Route {...rest}>
			{/* Adiciona o componente presente dentro da tag */}
			{isLogged ? children : <Redirect to="/login" />}
		</Route>
	);
};

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
			<hr />

			<Switch>
				{/* O Switch verifica Rota por Rota na ordem passada */}
				<Route exact path="/">
					<Home />
				</Route>

				<Route path="/login">
					<Login />
				</Route>

				{/* Uma forma de fazer a validação de acesso a URL
				<Route path="/sobre">
					{isLogged ? <Sobre /> : <Redirect to="/login" />}
				</Route> */}

				{/* Uma forma de fazer a validação de acesso a URL */}
				<PrivateRoute path="/sobre">
					<Sobre />
				</PrivateRoute>

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
