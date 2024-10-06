import React, { useState, useEffect } from 'react';

const News = () => {
  const [news, setNews] = useState([]);

  useEffect(() => {

    fetch('/api/news')
      .then(response => response.json())
      .then(data => setNews(data));
  }, []);

  return (
    <div className="container">
      <h1>Berita</h1>
      <div className="news">
        {news.map((article, index) => (
          <div key={index} className="article">
            <h2>{article.title}</h2>
            <p>{article.content}</p>
          </div>
        ))}
      </div>
    </div>
  );
};

export default News;
