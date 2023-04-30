CREATE DATABASE dbRedlockWeb;

USE dbRedlockWeb;

CREATE TABLE users
(
    IdUsers INT PRIMARY KEY,
    NameUsers VARCHAR(255),
    AddressUsers VARCHAR(255),
    DepartmentUsers VARCHAR(255)
);

INSERT INTO users VALUES
(0001, 'Steven Satya', 'Jl. Sekip Jaya', 'Founder'),
(0002, 'Moreno Samuel', 'Jl. Foresta BSD', 'CEO'),
(0003, 'Maulana Rumy T', 'Jl. Safir No.196', 'CO Founder'),
(0004, 'Siti Fathimah A', 'Jl. Anggrek Loka', 'Director'),
(0005, 'Angelene U', 'Jl. Alam Sutera', 'Manager');
