CREATE DATABASE IF NOT EXISTS lab_agent_db;
USE lab_agent_db;

CREATE TABLE IF NOT EXISTS articles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO articles (title, content, created_at) VALUES 
('Premier Article', 'Ceci est le contenu du premier article de test.', NOW()),
('Deuxième Article', 'Un autre article pour tester la pagination ou l\'affichage.', NOW());
