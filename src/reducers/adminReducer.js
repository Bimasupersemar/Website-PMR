const initialState = {
  admin: {},
};

export default function adminReducer(state = initialState, action) {
  switch (action.type) {
    case 'FETCH_ADMIN_SUCCESS':
      return { ...state, admin: action.payload };
    case 'EDIT_ADMIN_SUCCESS':
      return { ...state, admin: action.payload };
    default:
      return state;
  }
}
