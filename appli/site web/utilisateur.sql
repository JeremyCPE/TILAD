CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idS` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL ,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(100) COLLATE utf8mb4_unicode_ci ,
  `nom` varchar(30) COLLATE utf8mb4_unicode_ci ,
  `prenom` varchar(30) COLLATE utf8mb4_unicode_ci ,
  PRIMARY KEY (`idS`)
);
