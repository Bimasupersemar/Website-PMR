import React, { useState } from 'react';

const MemberRegistration = () => {
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [confirmPassword, setConfirmPassword] = useState('');
  const [role, setRole] = useState('member');

  const handleSubmit = (event) => {
    event.preventDefault();
    // Validate form data
    if (password !== confirmPassword) {
      alert('Passwords do not match');
      return;
    }
    // Send registration data to API or database
    fetch('/api/register', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ name, email, password, role }),
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert('Registration successful!');
          // Redirect to login page or profile page
        } else {
          alert('Registration failed. Please try again.');
        }
      });
  };

  return (
    <div className="container">
      <h1>Pendaftaran</h1>
      <form onSubmit={handleSubmit}>
        <label>
          Name:
          <input type="text" value={name} onChange={(event) => setName(event.target.value)} />
        </label>
        <br />
        <label>
          Email:
          <input type="email" value={email} onChange={(event) => setEmail(event.target.value)} />
        </label>
        <br />
        <label>
          Password:
          <input type="password" value={password} onChange={(event) => setPassword(event.target.value)} />
        </label>
        <br />
        <label>
          Confirm Password:
          <input type="password" value={confirmPassword} onChange={(event) => setConfirmPassword(event.target.value)} />
        </label>
        <br />
        <label>
          Role:
          <select value={role} onChange={(event) => setRole(event.target.value)}>
            <option value="member">Member</option>
            <option value="admin">Admin</option>
          </select>
        </label>
        <br />
        <button type="submit">Daftar</button>
      </form>
    </div>
  );
};

export default MemberRegistration;
