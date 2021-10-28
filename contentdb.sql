-- -----------------------------------------------------
-- Schema contentdb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `contentdb` ;

-- -----------------------------------------------------
-- Schema contentdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `contentdb` DEFAULT CHARACTER SET utf8 ;
USE `contentdb` ;


-- -----------------------------------------------------
-- Table `contentdb`.`posts`
-- -----------------------------------------------------
CREATE TABLE `posts` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `posts` (`title`, `description`,`link`) VALUES
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com'),
('La belle et le beau', 'some description', 'www.google.com');