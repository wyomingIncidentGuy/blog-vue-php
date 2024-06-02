

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `Posts` (
  `ID` varchar(21) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `theme` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




ALTER TABLE `Posts`
  ADD UNIQUE KEY `uuid` (`ID`);
COMMIT;

