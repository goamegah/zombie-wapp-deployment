

CREATE TABLE IF NOT EXISTS recette (
        `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
        `username` VARCHAR(100) NOT NULL,
        `email` VARCHAR(100) NOT NULL,
        `title` VARCHAR(100) NOT NULL,
        `descript` VARCHAR(5000) NOT NULL
        );

INSERT INTO recette (`id`, `username`, `email`, `title`, `descript`) VALUES
        (1, 'user1', 'user1@gmail.com', 'title1', 'first description'),
        (2, 'user2', 'user2@gmail.com', 'title2', 'second description'),
        (3, 'user3', 'user3@gmail.com', 'title3', 'third description'),
        (4, 'user4', 'user4@gmail.com', 'title4', 'fourth description'),
        (5, 'user5', 'user5@gmail.com', 'title5', 'fith description'),
        (6, 'user6', 'user6@gmail.com', 'title6', 'sixth description');