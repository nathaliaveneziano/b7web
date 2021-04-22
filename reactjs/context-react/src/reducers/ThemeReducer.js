const initialState = 'light';

const themeReducer = (state = initialState, action = {}) => {
	switch (action.type) {
		case 'setTheme':
			return action.theme;
		default:
			return state;
	}
};

export default themeReducer;
