import { createStore } from 'redux';
import { persistStore, persistReducer } from 'redux-persist';
import storage from 'redux-persist/lib/storage';
import Reducers from './reducers';

const persistConfig = {
	// chave que serve para descriptografar (obrigatória)
	key: 'root',
	// local do armazenamento. Forma comprimida, pois seria 'storage : storage' (obrigatória)
	storage,
	// array com reducers que manteram os valores
	whitelist: ['usuario'],
};

// Criando o persisteReducer
const pReducer = persistReducer(persistConfig, Reducers);

// Criando Store
const store = createStore(pReducer);

// Cria a persistência da store
const persistor = persistStore(store);

export { store, persistor };
