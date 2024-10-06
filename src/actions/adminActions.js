export const fetchAdmin = () => {
  return dispatch => {
    fetch('/api/admin')
      .then(response => response.json())
      .then(data => dispatch({ type: 'FETCH_ADMIN_SUCCESS', payload: data }));
  };
};

export const editAdmin = (admin) => {
  return dispatch => {
    fetch('/api/admin', {
      method: 'PUT',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(admin),
    })
      .then(response => response.json())
      .then(data => dispatch({ type: 'EDIT_ADMIN_SUCCESS', payload: data }));
  };
};
