



create table if not exists users(
    id int(6) AUTO_INCREMENT PRIMARY KEY,
    email varchar(50) not null,
    password varchar(50) not null
);

create table if not exists addresses(
    id int(6) AUTO_INCREMENT PRIMARY KEY,
    name varchar(50) not null,
    address varchar(500),
    contact varchar(500),
    emailcontact varchar(50),
    user_id int(6),
    FOREIGN KEY(user_id) REFERENCES users(id)
);

-- insert into users(email, password) values('smkpobon@gmail.com','smkpobon');

--insert into addresses(name,address,contact,emailcontact, user_id) values('Rahim','Dhaka','01714601116,01998474454','rahim@hotmail.com', 1);