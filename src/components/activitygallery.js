import React, { useState, useEffect } from 'react';

const ActivityGallery = () => {
  const [activities, setActivities] = useState([]);

  useEffect(() => {
    // Fetch activity data from API or database
    fetch('/api/activities')
      .then(response => response.json())
      .then(data => setActivities(data));
  }, []);

  return (
    <div className="container">
      <h1>Galeri Aktivitas</h1>
      <div className="activity-gallery">
        {activities.map((activity, index) => (
          <div key={index} className="activity">
            <h2>{activity.title}</h2>
            <p>{activity.description}</p>
            <img src={activity.image} alt={activity.title} />
          </div>
        ))}
      </div>
    </div>
  );
};

export default ActivityGallery;
