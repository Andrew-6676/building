create table  users (id integer primary key AUTOINCREMENT NOT NULL, name varchar(150), pass varchar(50), descr varchar(255));

create table  purchases (id integer primary key AUTOINCREMENT NOT NULL, product varchar(255), quantity integer, price integer, id_status integer, descr text, id_user integer,
CONSTRAINT fk_user_purchases
FOREIGN KEY (id_user)
REFERENCES users (id)
ON DELETE CASCADE
ON UPDATE CASCADE);

create table  events (id integer primary key AUTOINCREMENT NOT NULL, id_product integer, e_date integer, id_status integer, descr text, id_user integer, 
CONSTRAINT fk_user_events
FOREIGN KEY (id_user)
REFERENCES users (id)
ON DELETE CASCADE
ON UPDATE CASCADE);

create table  statuses (id integer primary key AUTOINCREMENT NOT NULL, name varchar(50), descr varchar(255), id_user integer, 
CONSTRAINT fk_user_statuses
FOREIGN KEY (id_user)
REFERENCES users (id)
ON DELETE CASCADE
ON UPDATE CASCADE);

create table  blog (id integer primary key AUTOINCREMENT NOT NULL, title varchar(255), b_text text, id_category integer, published BOOLEAN, id_user integer, CONSTRAINT fk_user_blog FOREIGN KEY (id_user) REFERENCES users (id) ON DELETE CASCADE ON UPDATE CASCADE, 
CONSTRAINT fk_user_blog
FOREIGN KEY (id_user)
REFERENCES users (id)
ON DELETE CASCADE
ON UPDATE CASCADE);

create table  categories (id integer primary key AUTOINCREMENT NOT NULL, name varchar(50), descr varchar(255), id_user integer, 
CONSTRAINT fk_user_categories
FOREIGN KEY (id_user)
REFERENCES users (id)
ON DELETE CASCADE
ON UPDATE CASCADE);

PRAGMA foreign_keys=ON; 
