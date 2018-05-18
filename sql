CREATE DATABASE jcubitgr_wecare;

CREATE TABLE Customer(
  CustomerID int,
  LastName varchar(255),
  FirstName varchar(255),
  E-mail varchar(255),
  Phone varchar(255),
  BookDate varchar(255),
  BookService varchar(255),
  Notes varchar(255)
);
  
CREATE TABLE Workers(
  WorkerID int,
  LastName varchar(255),
  FirstName varchar(255),
  Phone varchar(255)
);

CREATE TABLE Prices(
  TreatmentID int,
  TreatmentName varchar(255),
  Time varchar(255),
  Price varchar(255),
  WorkerID int
);
