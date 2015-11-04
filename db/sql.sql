create table  users (id integer primary key AUTOINCREMENT NOT NULL, name varchar(150), pass varchar(50), descr varchar(255));

create table  purchases (id integer primary key AUTOINCREMENT NOT NULL, product varchar(255), quantity integer, price integer,  descr text, id_user integer,
CONSTRAINT fk_user_purchases
FOREIGN KEY (id_user)
REFERENCES users (id)
ON DELETE CASCADE
ON UPDATE CASCADE
);

create table  events (id integer primary key AUTOINCREMENT NOT NULL, id_product integer, e_date integer, id_status integer, descr text, id_user integer, 
CONSTRAINT fk_user_events
FOREIGN KEY (id_user)
REFERENCES users (id)
ON DELETE CASCADE
ON UPDATE CASCADE,
CONSTRAINT fk_purchase_events
FOREIGN KEY (id_product)
REFERENCES purchases (id)
ON DELETE CASCADE
ON UPDATE CASCADE,
CONSTRAINT fk_status_events
FOREIGN KEY (id_status)
REFERENCES statuses (id)
ON DELETE CASCADE
ON UPDATE CASCADE
);

create table  statuses (id integer primary key AUTOINCREMENT NOT NULL, name varchar(50), descr varchar(255), id_user integer, 
CONSTRAINT fk_user_statuses
FOREIGN KEY (id_user)
REFERENCES users (id)
ON DELETE CASCADE
ON UPDATE CASCADE);

create table  blog (id integer primary key AUTOINCREMENT NOT NULL, b_date date, title varchar(255), b_text text, tags varchar(255), id_category integer, published BOOLEAN, id_user integer,  
CONSTRAINT fk_user_blog
FOREIGN KEY (id_user)
REFERENCES users (id)
ON DELETE CASCADE
ON UPDATE CASCADE,
CONSTRAINT fk_category_blog
FOREIGN KEY (id_category)
REFERENCES categories (id)
ON DELETE CASCADE
ON UPDATE CASCADE
);

create table  categories (id integer primary key AUTOINCREMENT NOT NULL, name varchar(50), descr varchar(255), id_parent integer, id_user integer, 
CONSTRAINT fk_user_categories
FOREIGN KEY (id_user)
REFERENCES users (id)
ON DELETE CASCADE
ON UPDATE CASCADE);

insert into categories (id, name, id_parent) values (0, 'Без категории', -1);
insert into categories (id, name, id_parent) values (1, 'Гараж', -1);
insert into categories (id, name, id_parent) values (2, 'Квартира', -1);
insert into categories (id, name, id_parent) values (100, 'Мотоцикл', 1);
insert into categories (id, name, id_parent) values (101, 'Машина', 1);
insert into categories (id, name, id_parent) values (200, 'Ремонт', 2);
insert into categories (id, name, id_parent) values (201, 'Умный дом', 2);
insert into categories (id, name, id_parent) values (3, 'Покатухи', -1);

PRAGMA foreign_keys=ON; 
