create database if not exists ns_2019_0019_iteh_1;

use ns_2019_0019_iteh_1;

create table if not exists book_authors
(
    id          bigint unsigned not null auto_increment,
    author_name varchar(255)    not null,

    primary key (id)
);

create table if not exists books
(
    id            bigint unsigned not null auto_increment,
    book_name     varchar(255)    not null,
    released_year int unsigned    not null,
    author_id     bigint unsigned not null,

    primary key (id),
    foreign key (author_id) references book_authors (id) on delete cascade
);
