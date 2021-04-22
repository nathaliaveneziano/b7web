const initialState = {
	name: 'Nathália',
	email: 'nath@example.com',
};

const userReducer = (state = initialState, action = {}) => {
	switch (action.type) {
		case 'setName':
			return { ...state, name: action.name };
		case 'setEmail':
			return { ...state, email: action.email };
		default:
			return state;
	}
};

export default userReducer;
