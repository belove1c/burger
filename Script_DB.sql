 CREATE TABLE `Products` (
  `idProducts` decimal(10,0) NOT NULL,
  `img_burg` VARCHAR(255) NOT NULL,
  `name_burg` VARCHAR(100) NOT NULL,
  `descrip` VARCHAR(500) NOT NULL,
  `price` DECIMAL(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Products` (`idProducts`, `img_burg`, `name_burg`, `descrip`, `price`) VALUES
('1', '', 'GRAND de LUX', 'Большой бургер с говядиной', '350'),
('2', '', 'de LUX', 'Бургер с говядиной', '250'),
('3', '', 'Cheesburger', 'Бургер с сыром', '85');