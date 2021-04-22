import { createContext, useContext, useReducer } from 'react';
import ThemeReducer from '../reducers/ThemeReducer';
import UserReducer from '../reducers/UserReducer';

// Múltiplos reducers
const initialState = {
	theme: ThemeReducer(),
	user: UserReducer(),
};

const MainReducer = (state,action) => ({
  theme: ThemeReducer(state.theme, action),
  user: UserReducer(state.user, action),
});

// Contexto
export const StateContext = createContext();

// Provider
export const StateProvider = ({ children }) => (
	<StateContext.Provider value={useReducer(MainReducer, initialState)}>
		{children}
	</StateContext.Provider>
);

// Consumer
export const useStateValue = () => useContext(StateContext);
