CREATE TABLE user(
    user_id INT PRIMARY KEY auto_increment,
    fullname varchar(255),
    email varchar(255),
    passwd varchar(255),
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE datas_products (
    datas_products_id INT PRIMARY KEY auto_increment,
    libelle varchar(255)
);

CREATE TABLE surf_spot (
    surf_spot_id INT PRIMARY KEY auto_increment,
    spot_name  varchar(255),
    lng varchar(10),
    lat varchar(10),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE surf_datas(
    surf_datas_id INT PRIMARY KEY auto_increment,
    city varchar(255),
    surf_spot_id INT,
    baigneurs INT,
    praticants INT,
    bateaux_peche INT,
    bateaux_loisir INT,
    bateaux_voile INT,
    FOREIGN KEY (surf_spot_id) REFERENCES surf_spot(surf_spot_id),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    date_entree DATETIME,
    date_sortie DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE surf_spot_like (
    surf_spot_id INT,
    FOREIGN KEY (surf_spot_id) REFERENCES surf_spot(surf_spot_id),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    PRIMARY KEY (surf_spot_id, user_id),
    date_like DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE used_products_on_ride (
    surf_datas_id INT,
    FOREIGN KEY (surf_datas_id) REFERENCES surf_datas(surf_datas_id),
    datas_products_id INT,
    FOREIGN KEY (datas_products_id) REFERENCES datas_products(datas_products_id),
    PRIMARY KEY (datas_products_id,surf_datas_id)
);

