CREATE DATABASE arcadia;

CREATE TABLE arcadia.users(
    `Id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` varchar(50),
    `password` varchar(50),
    `status` varchar(15),
    `group` varchar(15),
    `created` datetime,
    `modified` datetime,
    `xguid` varchar(10)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE arcadia.groups(
    `Id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `group_name` varchar(50),
    `group_desc` varchar(150),
    `group_short_desc` varchar(50),
    `created` datetime,
    `modified` datetime,
    `xguid` varchar(10)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;