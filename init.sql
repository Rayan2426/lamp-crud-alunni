CREATE TABLE `alunni` (
  `cf` varchar(16) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  'eta' int(11) NOT NULL CHECK (>=0) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `alunni` (`cf`, `nome`, `cognome`, 'eta') VALUES
("aa","Mario","Rossi",16),
("bb","Luigi","Bianchi",17),
("cc","Carlo","Bruni",15),
("dd","Tommaso","Da Vinci",16),
("ee","Lorenzo","Pilenzi",13),
("ff","Pasquale","Percivale",18);

ALTER TABLE `alunni`
ADD PRIMARY KEY (`cf`);