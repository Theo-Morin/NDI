CREATE TABLE USER(
    user_id INT PRIMARY KEY auto_increment,
    fullname varchar(255),
    email varchar(255),
    passwd varchar(255),
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE DATAS_PRODUCTS (
    DATAS_PRODUCTS_id INT PRIMARY KEY auto_increment,
    libelle varchar(255)
);

CREATE TABLE surf_datas(
    surf_datas_id INT PRIMARY KEY auto_increment,
    city varchar(255),
    surf_spot_id INT,
    FOREIGN KEY (surf_spot_id) REFERENCES surf_spot(surf_spot_id),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES USER(user_id),
    date_entree DATETIME,
    date_sortie DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE surf_spot (
    surf_spot_id INT PRIMARY KEY auto_increment,
    spot_name varchar(255),
    lng varchar(10),
    lat varchar(10),
    user_id INT,
    FOREIGN KEY user_id REFERENCES USER(user_id),
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE surf_spot_like (
    surf_spot_id INT,
    FOREIGN KEY (surf_spot_id) REFERENCES surf_spot(surf_spot_id),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES USER(user_id),
    PRIMARY KEY (surf_spot_id, user_id),
    date_like DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE USED_PRODUCT_ON_RIDE (
    surf_datas_id INT,
    FOREIGN KEY (surf_datas_id) REFERENCES surf_datas(surf_datas_id),
    DATAS_PRODUCTS_id INT,
    FOREIGN KEY (DATAS_PRODUCTS_id) REFERENCES DATAS_PRODUCTS(DATAS_PRODUCTS_id),
    PRIMARY KEY (DATAS_PRODUCTS_id,surf_datas_id)
);

