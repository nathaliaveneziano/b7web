import { createContext, useContext } from 'react';

// Contexto
export const StateContext = createContext();

// Provider
export const StateProvider = ({ children, value }) => (
	<StateContext.Provider value={value}>{children}</StateContext.Provider>
);

// Consumer
export const useStateValue = () => useContext(StateContext);
