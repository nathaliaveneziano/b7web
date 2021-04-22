import { createContext, useContext, useEffect, useReducer } from 'react';
import ThemeReducer from '../reducers/ThemeReducer';
import UserReducer from '../reducers/UserReducer';

// Múltiplos reducers
const initialState = {
	theme: ThemeReducer(),
	user: UserReducer(),
};

const MainReducer = (state, action) => ({
	theme: ThemeReducer(state.theme, action),
	user: UserReducer(state.user, action),
});

// LocalStorage
const localState = JSON.parse(localStorage.getItem('ctx'));

// Contexto
export const StateContext = createContext();

// Provider
export const StateProvider = ({ children }) => {
	const [state, dispatch] = useReducer(MainReducer, localState || initialState);

	useEffect(() => {
		localStorage.setItem('ctx', JSON.stringify(state));
	}, [state]);

	return (
		<StateContext.Provider value={[state, dispatch]}>
			{children}
		</StateContext.Provider>
	);
};

// Consumer
export const useStateValue = () => useContext(StateContext);
