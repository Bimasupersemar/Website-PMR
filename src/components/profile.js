import React, { useState, useEffect } from 'react';

const Profile = () => {
  const [user, setUser] = useState({});

  useEffect(() => {
    // Fetch user data from API or database
    fetch('/api/user')
      .then(response => response.json())
      .then(data => setUser(data));
  }, []);

  const handleEdit = () => {
    // Handle edit profile button click
    console.log('Edit profile button clicked');
  };

  return (
    <div className="container">
      <h1>Profile</h1>
      <div className="profile-info">
        <p>Name: {user.name}</p>
        <p>Email: {user.email}</p>
        <p>Role: {user.role}</p>
      </div>
      <button onClick={handleEdit}>Edit Profile</button>
    </div>
  );
};

export default Profile;
