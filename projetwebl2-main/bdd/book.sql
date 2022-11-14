-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 05 déc. 2020 à 20:44
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `books`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `couverture` varchar(200) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `langue_original` varchar(50) NOT NULL,
  `date_parution_originale` date DEFAULT NULL,
  `date_parution_fr` date DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `titre`, `couverture`, `auteur`, `description`, `theme`, `langue_original`, `date_parution_originale`, `date_parution_fr`, `date_sortie`) VALUES
(1, 'Les Vampires de Manhattan, Tome 1', 'https://cdn1.booknode.com/book_cover/6/full/les-vampires-de-manhattan-tome-1-6067.jpg', 'Melissa De La Cruz', 'Il n\'y a pas plus glamour que Mimi et son frere Jack au lycee ultra chic Duschene, a New York. Snobs et branches, ils forment avec leurs amis un club tres select.Theodora, qui est plus vintage que Prada, n\'est pourtant pas insensible au charme du tres sexy Jack. Pourquoi un garcon si populaire s\'interesse-t-il soudain a elle? Quel rapport avec Aggie, une eleve retrouvee morte, videe de son sang? Theodora est determinee a le decouvrir quand apparait sur sa peau un entrelacs de veines bleutees qui lui glace le sang.Elle non plus n\'est pas une fille tout a fait comme les autres...', 'Chic-lit', 'Anglais', NULL, NULL, NULL),
(2, 'Les Enquetes de Laurie Moran, Tome 1 : Le Bleu de tes yeux', 'https://cdn1.booknode.com/book_cover/723/full/les-enquetes-de-laurie-moran-tome-1-le-bleu-de-tes-yeux-722959.jpg', 'Mary Higgins Clark', 'Il y a cinq ans, Timmy a ete temoin du meurtre de son pere. Avant de s\'enfuir, l\'assassin, aux yeux tres bleus - ce dont le garcon se souvient precisement -, lui a lance : << Dis a ta mere qu\'elle est la prochaine. >> Depuis, l\'enfant et sa mere, Laurie, vivent sous cette menace. La jeune femme, celebre productrice tele, demarre une serie choc sur les affaires non resolues. Le premier episode revient sur l\'affaire du << Gala des laureates >> : il y a vingt ans, Betsy Powell et son mari organisaient une grande soiree en l\'honneur du diplome de leur fille. La nuit meme, Betsy mourait etouffee. Alors qu\'on s\'apprete a reconstituer la scene du crime dans la splendide demeure des Powell, quelqu\'un epie Laurie dans l\'ombre, quelqu\'un qui a les yeux d\'un bleu eclatant... Commence alors un huis clos haletant.', 'Polar', 'Anglais', NULL, NULL, NULL),
(3, 'Les Enquetes de Laurie Moran, Tome 2 : L\'Affaire Cendrillon', 'https://cdn1.booknode.com/book_cover/843/full/les-enquetes-de-laurie-moran-tome-2-l-affaire-cendrillon-842808.jpg', 'Mary Higgins Clark & Alafair Burke', 'Suspicion, un programme de tele-realite qui reconstruit des cold cases avec la participation des personnes proches des victimes, est la serie-evenement du moment.\r\n\r\nLa productrice tele Laurie Moran et l avocat Alex Buckley, ravis du succes du pilote, ont trouve l homicide parfait pour le deuxieme episode The Cinderella Murder. La victime est la belle Susan Dempsey, une brillante etudiante de l\'Universite de Californie a Los Angeles, assassinee apres une audition qu\'elle etait censee passer dans la villa d\'un grand realisateur hollywoodien. Retrouvee avec une seule chaussure au pied, a quelques kilometres de sa voiture, Susan ne s\'est peut-etre jamais rendue a son audition. Mais meme si les preuves ont ete dissimulees, les possibles suspects finiront tous sous les feux des projecteurs tele.\r\n\r\nEntre stars hollywoodiennes et multimillionnaires de l\'industrie des technologies de pointe, decouvrir ou Cendrillon a perdu sa chaussure ne sera pas si simple, et au bout du compte l\'enquete tele pourrait se reveler plus dangereuse que le meurtre qu\'elle cherche a elucider...', 'Polar', 'Anglais', NULL, NULL, NULL),
(4, 'L\'Affaire Jennifer Jones', 'https://cdn1.booknode.com/book_cover/47/full/l-affaire-jennifer-jones-47224.jpg', 'Anne Cassidy', 'Alice Tully. 17 ans, jolie, cheveux coupes tres court. Etudiante, serveuse dans un bistrot. Et Frankie, toujours la pour elle. Une vie sans histoire. Mais une vie trop lisse, sans passe, sans famille, sans ami. Comme si elle se cachait. Comme si un secret indicible la traquait...', 'Polar', 'Anglais', NULL, NULL, NULL),
(5, 'Charley Davidson, Tome 1 : Premiere tombe sur la droite\r\n', 'https://cdn1.booknode.com/book_cover/1954/full/charley-davidson-tome-1-premiere-tombe-sur-la-droite-1953602.jpg', 'Darynda Jones', 'Vous savez, ces mauvaises choses qui arrivent aux gens bien ? C\'est moi.\r\n\r\nMon nom c\'est Charley et je suis la Faucheuse.\r\n\r\nLes morts, je connais : j\'en vois depuis que je suis nee. Des fois, je les aide a faire des trucs du genre laisser un mot a leurs proches ou traquer leur assassin... Ca tombe bien parce que je suis aussi detective privee ! Pratique, non ? Ce qui l\'est moins, c\'est que les gens autour de moi ont du mal a y croire. Comme Swopes, l\'agent avec qui je bosse : je voudrais qu\'il me lache un peu la grappe.\r\n\r\nCela dit, je pourrais le gerer si je n\'avais pas d\'autres chats a fouetter... comme ce bel inconnu qui vient me rendre visite toutes les nuits dans des reves torrides et dont j\'aimerais bien decouvrir l\'identite...', 'Bit_lit', 'Anglais', NULL, NULL, NULL),
(6, 'Nom de code : Blackbird, tome 1 : Cours ou meurs', 'https://cdn1.booknode.com/book_cover/582/full/nom-de-code-blackbird-tome-1-cours-ou-meurs-582248.jpg', 'Anna Carey', 'Liste des choses que je sais :\r\n\r\nJe suis a Los Angeles\r\n\r\nJe me suis reveillee sur les voies du metro a la station Vermont-Sunset.\r\n\r\nJe suis une fille et j\'ai de longs cheveux noirs.\r\n\r\nJ\'ai un oiseau et un code (FNV02198) tatoues sur le poignet droit.\r\n\r\nJe suis en fuite.\r\n\r\nDes gens essaient de me tuer.', 'Mystere', 'Anglais', NULL, NULL, NULL),
(7, 'Mila, Tome 1 : Les Verites cachees', 'https://cdn1.booknode.com/book_cover/1340/full/mila-tome-1-les-verites-cachees-1340234.jpg', 'Mathilde Aloha', 'Chez les Lim-Sherman, l\'apparence est essentielle. On ne survit pas dans l\'Upper East Side sans donner l\'image d\'une famille parfaite. Chacun se prete au jeu... Sauf Mila, 18 ans, qui hait les mondanites et n\'hesite pas a enfreindre les regles. Finie la vie dictee par la pression familiale, la voila decidee a prendre son envol !\r\n\r\nMais quand elle recroise le regard de Travis, son premier coup de coeur, qui l\'a laissee sans nouvelles pendant de longs mois, Mila sent que ce nouveau depart sera plus difficile que prevu...\r\n\r\nD\'autant plus que les paroles d\'un inconnu, qui l\'a abordee lors d\'un gala de charite, la hantent : << Faites attention a vous, ils sont a votre recherche. >> Qui sont-ils et que lui veulent-ils ? Est-elle en danger ?\r\n\r\nMila l\'ignore encore, mais une chose est sure : son monde de faux-semblants est sur le point de s\'ecrouler. Saura-t-elle reconnaitre la verite parmi les debris ?', 'Young', 'Anglais', NULL, NULL, NULL),
(8, 'Agatha Raisin enquete, Tome 1 : La Quiche fatale', 'https://cdn1.booknode.com/book_cover/1239/full/agatha-raisin-enquete-tome-1-la-quiche-fatale-1238791.jpg', 'M. C. Beaton', 'Sur un coup de tete, Agatha Raisin decide de quitter Londres pour gouter aux delices d\'une retraite anticipee dans un paisible village des Costwolds, ou elle ne tarde pas a s\'ennuyer ferme. Afficher ses talents de cordon-bleu au concours de cuisine de la paroisse devrait forcement la rendre populaire.\r\n\r\nMais a la premiere bouchee de sa superbe quiche, l\'arbitre de la competition s\'effondre et Agatha doit reveler l\'amere verite : elle a achete la quiche fatale chez un traiteur. Pour se disculper, une seule solution : mettre la main a la pate et demasquer elle-meme l\'assassin.', 'Polar', 'Anglais', NULL, NULL, NULL),
(9, 'Le Chien des Baskerville', 'https://cdn1.booknode.com/book_cover/3185/full/le-chien-des-baskerville-3184652.jpg', 'Arthur Conan Doyle', 'Une malediction pese sur les Baskerville, qui habitent le vieux manoir de leurs ancetres, perdu au milieu d\'une lande sauvage quand un chien-demon, une bete immonde, gigantesque, surgit, c\'est la mort.\r\n\r\nLe deces subit et tragique de Sir Charles Baskerville et les hurlements lugubres que l\'on entend parfois venant du marais, le grand bourbier de Grimpen, accreditent d\'une facon saisissante la sinistre legende.\r\n\r\nDes son arrivee a Londres, venant du Canada, Sir Henry Baskerville, seul heritier de Sir Charles, recoit une lettre anonyme : << Si vous tenez a votre vie et a votre raison, eloignez-vous de la lande. >> Malgre ces menaces, Sir Henry decide de se rendre a Baskerville Hall. Consulte, Sherlock Holmes charge son fidele Watson de l\'accompagner.\r\n\r\nRoman captivant, angoissant, Le Chien des Basker-ville est l\'une des plus celebres aventures de Sherlock Holmes du grand Conan Doyle.', 'Mystere', 'Anglais', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
