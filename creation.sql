CREATE TABLE USER(
    USER_id INT PRIMARY KEY auto_increment,
    fullname varchar(255),
    email varchar(255),
    passwd varchar(255)
);

CREATE TABLE DATAS_PRODUCTS (
    DATAS_PRODUCTS_id INT PRIMARY KEY auto_increment,
    libelle varchar(255)
);

CREATE TABLE surf_datas(
    surf_datas_id INT PRIMARY KEY auto_increment,
    ville varchar(255),
    Spot varchar(255),
    date_entree DATETIME,
    date_sortie DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE USED_PRODUCT_ON_RIDE (
    surf_datas_id INT,
    FOREIGN KEY (surf_datas_id) REFERENCES surf_datas(surf_datas_id),
    DATAS_PRODUCTS_id INT,
    FOREIGN KEY (DATAS_PRODUCTS_id) REFERENCES DATAS_PRODUCTS(DATAS_PRODUCTS_id),
    PRIMARY KEY (DATAS_PRODUCTS_id,surf_datas_id)
);

