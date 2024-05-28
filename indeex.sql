
CREATE TABLE kullanicilar (
    kullanici_id INT AUTO_INCREMENT PRIMARY KEY,
    kullaniciadi VARCHAR(50) NOT NULL,
    eposta VARCHAR(100) NOT NULL,
    sifre VARCHAR(255) NOT NULL
);



CREATE TABLE gorevatama (
    gorev_id INT AUTO_INCREMENT PRIMARY KEY,
    goreva_di VARCHAR(255) NOT NULL,
    proje_id INT ,
    kullanici_id INT 
);


CREATE TABLE projeyonetimi (
    proje_id INT AUTO_INCREMENT PRIMARY KEY,
    proje_adi VARCHAR(255) NOT NULL,
    proje_durumu VARCHAR(100) NOT NULL,
    proje_lideri VARCHAR(100) NOT NULL
);




CREATE TABLE testyonetimi (
    test_id INT AUTO_INCREMENT PRIMARY KEY,
    test_adi VARCHAR(255) NOT NULL,
    test_sorumlusu VARCHAR(100) NOT NULL,
    proje_id INT NOT NULL
);
