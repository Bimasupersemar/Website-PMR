export const fetchUser = () => {
  return dispatch => {
    fetch('/api/user')
      .then(response => response.json())
      .then(data => dispatch({ type: 'FETCH_USER_SUCCESS', payload: data }));
  };
};

export const editProfile = (user) => {
  return dispatch => {
    fetch('/api/user', {
      method: 'PUT',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(user),
    })
      .then(response => response.json())
      .then(data => dispatch({ type: 'EDIT_PROFILE_SUCCESS', payload: data }));
  };
};
