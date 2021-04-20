import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import { createStore } from 'redux';
import Reducers from './reducers';
import App from './App';

// Criando Store
const store = createStore(Reducers);

ReactDOM.render(
  // Ligando todo o projeto ao Store
	<Provider store={store}>
		<App />
	</Provider>,
	document.getElementById('root')
);
