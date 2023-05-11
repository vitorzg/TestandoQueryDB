SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `itens` (
  `ID` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'PD' COMMENT 'PD = pendente\nAP = aprovado\nNG = negado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO `itens` (`ID`, `item`, `status`) VALUES
(1, 'guarda-chuva', 'PD'),
(2, 'caneca de cerâmica com um desenho de gato', 'PD'),
(3, 'bola de basquete', 'PD'),
(4, 'lâmpada de mesa com luz ajustável', 'PD'),
(5, 'livro de receitas veganas', 'PD'),
(6, 'par de meias listradas coloridas', 'PD'),
(7, 'Chuvisco', 'PD');


ALTER TABLE `itens`
  ADD PRIMARY KEY (`ID`);



ALTER TABLE `itens`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
