-- Review SQL code


-- Database table

CREATE TABLE reviews (
    id          int(3) NOT NULL AUTO_INCREMENT,
    designer    varchar(100) NOT NULL,
    url         varchar(200) NOT NULL,
    report      text         NOT NULL,
    score       int(1)       NOT NULL,
    date        date         NOT NULL,
    PRIMARY KEY (id)
);


-- Connection Settings  - PHP Variables 

$dbname = 'devinpan_reviews';
$username = 'devinpan';
$password = 'Goldhill02-05';
$port = '3306';
$host = "localhost:$port";


-- CREATE

INSERT INTO reviews (designer, url, report, score, date) 
VALUES (:designer, :url, :report, :score, :date);


-- READ

SELECT * FROM reviews;

SELECT * FROM reviews WHERE url = :url; 

foreach (reviews as row) {
    row['id']
    row['designer']
    row['url']
    row['report']
    row['score']
    row['date']
}

