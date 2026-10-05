USE Appicoders;

CREATE TABLE Users
(
    id INT IDENTITY(1,1) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,

    CONSTRAINT UQ_Users_Email UNIQUE (email)
);

CREATE TABLE Posts
(
    id INT IDENTITY(1,1) PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,

    CONSTRAINT FK_Posts_Users
        FOREIGN KEY (user_id)
        REFERENCES Users(id)
);

INSERT INTO Users (name, email)
VALUES
    ('Ali', 'ali@example.com'),
    ('Ahmed', 'ahmed@example.com'),
    ('Usman', 'usman@example.com');

INSERT INTO Posts (user_id, title)
VALUES
    (1, 'Introduction to Backend Development'),
    (1, 'Understanding REST APIs'),
    (2, 'Getting Started with SQL'),
    (2, 'Database Relationships Explained'),
    (3, 'Introduction to Laravel');

SELECT
    Users.name,
    Users.email,
    Posts.title
FROM Users
INNER JOIN Posts
    ON Users.id = Posts.user_id;

SELECT *
FROM Posts
WHERE user_id = 1;