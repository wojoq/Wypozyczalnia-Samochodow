CREATE DATABASE rental;
USE rental;

CREATE TABLE workers (
	worker_id INT AUTO_INCREMENT NOT NULL,
    worker_login VARCHAR(30) NOT NULL UNIQUE,
	worker_password VARCHAR(256) NOT NULL,
	worker_role VARCHAR(256) NOT NULL,
    worker_first VARCHAR(256) NOT NULL,
    worker_last VARCHAR(256) NOT NULL,
    worker_email VARCHAR(256) NOT NULL,
    PRIMARY KEY (worker_id),
    CONSTRAINT CHECK_ROLE CHECK (worker_role='administrator' OR worker_role='workerOfRental')
);

CREATE TABLE users(
	user_id INT AUTO_INCREMENT NOT NULL,
    user_login VARCHAR(30) NOT NULL UNIQUE,
	user_password VARCHAR(256) NOT NULL,
    user_first VARCHAR(256) NOT NULL,
    user_last VARCHAR(256) NOT NULL,
    user_email VARCHAR(256) NOT NULL,
    PRIMARY KEY (user_id)
        CONSTRAINT CHECK_ROLE CHECK (worker_role='administrator' OR worker_role='workerOfRental')
);

CREATE TABLE cars (
	id INT AUTO_INCREMENT NOT NULL,
	brand VARCHAR(256) NOT NULL,
    model VARCHAR(256) NOT NULL,
    engine VARCHAR(256) NOT NULL,
    date_of_production INT(4) NOT NULL,
    power INT(4),
    VIN VARCHAR(256) NOT NULL,
    available VARCHAR(256) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE loans(
	id INT AUTO_INCREMENT NOT NULL,
    loan_date DATE NOT NULL,
    return_date DATE,
    id_from_users INT,
    id_from_cars INT,
    PRIMARY KEY(id),
    FOREIGN KEY (id_from_users) REFERENCES users(user_id),
    FOREIGN KEY (id_from_cars) REFERENCES cars(id)
);

INSERT INTO workers (worker_login, worker_password, worker_role, worker_first, worker_last, worker_email) VALUES ('admin', 'admin', 'administrator', 'Jan', 'Kowalski', 'jan.kowalski@kaszanka.pl');
INSERT INTO workers (worker_login, worker_password, worker_role, worker_first, worker_last, worker_email) VALUES ('worker', 'worker', 'workerOfRental', 'Adam', 'Korzeniowski', 'adam.korzeniowski@chlebek.pl');
INSERT INTO users (user_login, user_password, user_first, user_last, user_email) VALUES ('user', 'user', 'Krzysztof', 'Ogórek', 'krzysztof.ogorek@spam.pl');

INSERT INTO cars (brand, model, engine, date_of_production, power, VIN, available) VALUES ('Volkswagen', 'Passat', '2.0 TSI', 2019, 190, 'WDZ495DFT12365478', 'tak');
SELECT loans.id
	FROM loans
		INNER JOIN users ON loans.id_from_users = users.user_id
		INNER JOIN cars ON loans.id_from_cars = cars.id
			WHERE users.user_email = 'krzysztof.ogorek@spam.pl' AND users.user_last = 'Ogórek' AND cars.model = 'Passat';
