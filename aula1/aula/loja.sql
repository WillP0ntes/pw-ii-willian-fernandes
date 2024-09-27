SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tbcategoria` (
  `id_categoria` int(11) NOT NULL,
  `name_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbcategoria` (`id_categoria`, `name_categoria`) VALUES
(1, 'Laticineos'),
(2, 'Mercearia'),
(3, 'Higiene Pessoal'),
(4, 'Hortifruti');

CREATE TABLE `tbcontato` (
  `id_contato` int(11) NOT NULL,
  `name_contato` varchar(50) NOT NULL,
  `email_contato` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbcontato` (`id_contato`, `name_contato`, `email_contato`, `telefone`) VALUES
(1, 'Willian', 'willian@email.meu.com', '98433184343005');

CREATE TABLE `tbproduto` (
  `id_produto` int(11) NOT NULL,
  `name_produto` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(11,0) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tbproduto` (`id_produto`, `name_produto`, `quantidade`, `valor`, `id_categoria`) VALUES
(1, 'Leite', 2, '4', 1),
(2, 'Manteiga', 1, '6', 1),
(3, 'Creme de leite', 1, '6', 1),
(4, 'Queijos', 3, '7', 1),
(5, 'Iogurtes', 3, '7', 1),
(6, 'Arroz', 2, '13', 2),
(7, 'Feijão', 3, '8', 2),
(8, 'Macarrão', 5, '5', 2),
(9, 'Café', 2, '4', 2),
(10, 'Açucar', 3, '6', 2),
(11, 'Sabonetes', 4, '3', 3),
(12, 'Shampoos', 2, '10', 3),
(13, 'Desodorantes', 2, '7', 3),
(14, 'Creme Dental', 3, '7', 3),
(15, 'Papel Higienico', 2, '18', 3),
(16, 'Maça', 7, '1', 4),
(17, 'Banana', 6, '0', 4),
(18, 'Cebola', 3, '0', 4),
(19, 'Tomate', 4, '0', 4),
(20, 'Maça', 7, '1', 4),
(21, 'Banana', 6, '0', 4),
(22, 'Cebola', 3, '0', 4),
(23, 'Tomate', 4, '0', 4),
(24, 'Laranja', 6, '0', 4);

ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`id_categoria`);

ALTER TABLE `tbcontato`
  ADD PRIMARY KEY (`id_contato`);

ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`id_produto`);

ALTER TABLE `tbcategoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `tbcontato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `tbproduto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;
