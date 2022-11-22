CREATE TABLE IF NOT EXISTS users (
    user_id SERIAL PRIMARY KEY,
    username VARCHAR (50) UNIQUE NOT NULL,
    password VARCHAR (255) NOT NULL,
    email VARCHAR(255),
    created_on TIMESTAMP NOT NULL,
    last_login TIMESTAMP NOT NULL,
);

CREATE TABLE roles(
    role_id SERIAL PRIMARY KEY,
    role_name VARCHAR (255) UNIQUE NOT NULL
);

CREATE TABLE user_roles (
    user_id INT NOT NULL REFERENCES users (user_id),
    role_id INT NOT NULL REFERENCES roles (role_id),
    grant_date TIMESTAMP NOT NULL,
    PRIMARY KEY (user_id, role_id)
);

CREATE TABLE message (
    message_id SERIAL PRIMARY KEY,
    sender_id INT NOT NULL REFERENCES users (user_id),
    receiver_id INT NOT NULL REFERENCES users (user_id),
    content VARCHAR (1000) NOT NULL,
    created_on TIMESTAMP NOT NULL
);
