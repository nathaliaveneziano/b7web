import { createContext, useContext, useReducer } from 'react';

// Reducer
const initialState = {
	theme: 'dark',
	user: {
		name: 'Nathália',
		email: 'nath@test.com',
	},
};

const reducer = (state, action) => {
	switch (action.type) {
		case 'setTheme':
			return { ...state, theme: action.theme };
		case 'setName':
			var newUser = { ...state.user };
			newUser.name = action.name;
			return { ...state, user: newUser };
		case 'setEmail':
			return { ...state, user: { email: action.email } };
		default:
			return state;
	}
};

// Contexto
export const StateContext = createContext();

// Provider
export const StateProvider = ({ children }) => (
	<StateContext.Provider value={useReducer(reducer, initialState)}>
		{children}
	</StateContext.Provider>
);

// Consumer
export const useStateValue = () => useContext(StateContext);
