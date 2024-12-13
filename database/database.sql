CREATE DATABASE Africa_Pays;
CREATE TABLE Ville
      (id-ville int,
      name  VARCHAR(50),
      id_pays,
      );
 CREATE TABLE Pays
      (
      id_pays int,
      name VARCHAR(50),
      population int,
      langues VARCHAR(50),
      is_capitale int);

	CREATE TABLE capitale (  is_capitale int,name VARCHAR(50));

ALTER TABLE Pays
      ADD CONSTRAINT fk_id_capitale FOREIGN KEY (id_capitale) REFERENCES capitale(id_capitale);

alter table Pays
      add COLUMN description text after langues;



INSERT INTO Pays (id_pays, name, population, langues, description, id_continent) VALUES
(1, 'Algérie', 44100000, 'Arabe, Berbère', 'Pays d\'Afrique du Nord avec des paysages variés, des montagnes aux déserts.', 1),
(2, 'Nigeria', 223000000, 'Anglais, Yoruba, Igbo', 'Le pays le plus peuplé d\'Afrique avec une économie en pleine croissance.', 1),
(3, 'Afrique du Sud', 60500000, 'Anglais, Zoulou, Xhosa', 'Pays situé à l\'extrémité sud du continent, célèbre pour ses paysages et sa biodiversité.', 1),
(4, 'Égypte', 109000000, 'Arabe', 'Berceau d\'une des plus anciennes civilisations du monde, connu pour ses pyramides.', 1),
(5, 'Kenya', 55600000, 'Anglais, Swahili', 'Pays de l\'Afrique de l\'Est, connu pour ses safaris et ses réserves naturelles.', 1),
(6, 'Éthiopie', 127000000, 'Amharique', 'Un des pays les plus anciens avec une riche histoire et des traditions.', 1),
(7, 'Maroc', 37900000, 'Arabe, Amazigh', 'Un mélange unique de cultures arabes et berbères.', 1),
(8, 'Ghana', 32400000, 'Anglais, Akan', 'Connu pour ses ressources naturelles et sa démocratie stable.', 1),
(9, 'Angola', 36700000, 'Portugais', 'Riche en ressources naturelles avec une biodiversité unique.', 1),
(10, 'Tanzanie', 66300000, 'Swahili, Anglais', 'Célèbre pour le Kilimandjaro et le parc national du Serengeti.', 1),
(11, 'Sénégal', 18100000, 'Français, Wolof', 'Un pays ouest-africain reconnu pour sa musique et sa culture.', 1),
(12, 'Ouganda', 48000000, 'Anglais, Swahili', 'Connu pour ses lacs et sa faune diversifiée.', 1),
(13, 'Côte d\'Ivoire', 28400000, 'Français', 'Pays ouest-africain avec une économie en croissance rapide.', 1),
(14, 'Zimbabwe', 15700000, 'Anglais, Shona', 'Un pays enclavé d\'Afrique australe avec une histoire riche.', 1),
(15, 'Namibie', 2600000, 'Anglais, Afrikaans', 'Connu pour ses vastes déserts et sa faune sauvage.', 1),
(16, 'Mali', 22700000, 'Français, Bambara', 'Un pays sahélien connu pour son histoire et sa culture.', 1),
(17, 'Zambie', 20300000, 'Anglais', 'Pays d\'Afrique australe avec de nombreuses ressources naturelles.', 1),
(18, 'Botswana', 2600000, 'Anglais, Tswana', 'Reconnu pour sa stabilité politique et ses réserves naturelles.', 1),
(19, 'Madagascar', 30000000, 'Malgache, Français', 'Une île unique avec une biodiversité exceptionnelle.', 1),
(20, 'Soudan', 48700000, 'Arabe, Anglais', 'Pays d\'Afrique de l\'Est avec une histoire ancienne.', 1);



INSERT INTO Ville (id_ville, name, description, id_pays) VALUES
-- Algérie
(1, 'Alger', 'Capitale de l\'Algérie, située sur la côte méditerranéenne.', 1),
(2, 'Oran', 'Ville portuaire de l\'Algérie avec une riche histoire culturelle.', 1),
(3, 'Constantine', 'Ville historique connue pour ses ponts suspendus.', 1),
(4, 'Annaba', 'Ville côtière avec une forte activité économique.', 1),
(5, 'Tamanrasset', 'Ville située dans le désert du Sahara.', 1),

-- Nigeria
(6, 'Lagos', 'Plus grande ville du Nigeria et centre économique.', 2),
(7, 'Abuja', 'Capitale politique moderne du Nigeria.', 2),
(8, 'Kano', 'Centre commercial historique du nord.', 2),
(9, 'Port Harcourt', 'Ville pétrolière importante.', 2),
(10, 'Ibadan', 'Grande ville historique du sud-ouest.', 2),

-- Afrique du Sud
(11, 'Johannesburg', 'Centre économique majeur de l\'Afrique du Sud.', 3),
(12, 'Cape Town', 'Célèbre pour la Montagne de la Table.', 3),
(13, 'Durban', 'Ville portuaire avec une grande population indienne.', 3),
(14, 'Pretoria', 'Capitale administrative de l\'Afrique du Sud.', 3),
(15, 'Bloemfontein', 'Capitale judiciaire de l\'Afrique du Sud.', 3),

-- Égypte
(16, 'Le Caire', 'Capitale de l\'Égypte, célèbre pour ses pyramides.', 4),
(17, 'Alexandrie', 'Ville portuaire égyptienne avec une riche histoire.', 4),
(18, 'Gizeh', 'Connue pour les grandes pyramides et le Sphinx.', 4),
(19, 'Louxor', 'Centre de la civilisation ancienne.', 4),
(20, 'Assouan', 'Ville touristique sur le Nil.', 4),

-- Kenya
(21, 'Nairobi', 'Capitale du Kenya, connue pour son parc national.', 5),
(22, 'Mombasa', 'Ville portuaire et touristique importante.', 5),
(23, 'Kisumu', 'Ville sur les rives du lac Victoria.', 5),
(24, 'Nakuru', 'Connue pour ses parcs nationaux.', 5),
(25, 'Eldoret', 'Centre agricole et sportif.', 5),

-- Éthiopie
(26, 'Addis-Abeba', 'Capitale de l\'Éthiopie et siège de l\'Union africaine.', 6),
(27, 'Gondar', 'Ancienne capitale impériale.', 6),
(28, 'Lalibela', 'Connue pour ses églises taillées dans la roche.', 6),
(29, 'Dire Dawa', 'Ville industrielle.', 6),
(30, 'Harar', 'Ville historique entourée de murs.', 6),

-- Maroc
(31, 'Rabat', 'Capitale politique du Maroc.', 7),
(32, 'Casablanca', 'Centre économique et ville la plus peuplée.', 7),
(33, 'Marrakech', 'Célèbre pour ses souks et son patrimoine historique.', 7),
(34, 'Fès', 'Connue pour sa médina et son université ancienne.', 7),
(35, 'Tanger', 'Ville portuaire au nord.', 7),

-- Ghana
(36, 'Accra', 'Capitale et centre économique du Ghana.', 8),
(37, 'Kumasi', 'Ville historique du royaume ashanti.', 8),
(38, 'Tamale', 'Ville importante du nord.', 8),
(39, 'Sekondi-Takoradi', 'Ville côtière et portuaire.', 8),
(40, 'Cape Coast', 'Connue pour ses forts historiques.', 8),

-- Angola
(41, 'Luanda', 'Capitale et principale ville de l\'Angola.', 9),
(42, 'Huambo', 'Ville importante au centre de l\'Angola.', 9),
(43, 'Lobito', 'Ville portuaire.', 9),
(44, 'Benguela', 'Ville historique avec un riche patrimoine.', 9),
(45, 'Lubango', 'Connue pour son relief montagneux.', 9),

-- Tanzanie
(46, 'Dodoma', 'Capitale politique de la Tanzanie.', 10),
(47, 'Dar es Salaam', 'Centre économique et port principal.', 10),
(48, 'Arusha', 'Point de départ des safaris.', 10),
(49, 'Mwanza', 'Ville sur les rives du lac Victoria.', 10),
(50, 'Zanzibar', 'Archipel touristique célèbre.', 10),

-- Sénégal
(51, 'Dakar', 'Capitale et centre culturel du Sénégal.', 11),
(52, 'Saint-Louis', 'Ville historique.', 11),
(53, 'Thiès', 'Centre industriel.', 11),
(54, 'Touba', 'Ville religieuse importante.', 11),
(55, 'Ziguinchor', 'Ville principale en Casamance.', 11),

-- Ouganda
(56, 'Kampala', 'Capitale de l\'Ouganda.', 12),
(57, 'Entebbe', 'Ville sur le lac Victoria.', 12),
(58, 'Jinja', 'Source du Nil.', 12),
(59, 'Mbarara', 'Centre agricole.', 12),
(60, 'Gulu', 'Ville importante au nord.', 12),

-- Côte d'Ivoire
(61, 'Abidjan', 'Centre économique de la Côte d\'Ivoire.', 13),
(62, 'Yamoussoukro', 'Capitale politique.', 13),
(63, 'Bouaké', 'Centre industriel.', 13),
(64, 'San Pedro', 'Ville portuaire.', 13),
(65, 'Korhogo', 'Centre culturel.', 13),

-- Zimbabwe
(66, 'Harare', 'Capitale du Zimbabwe.', 14),
(67, 'Bulawayo', 'Deuxième plus grande ville.', 14),
(68, 'Mutare', 'Ville proche des montagnes.', 14),
(69, 'Gweru', 'Centre industriel.', 14),
(70, 'Victoria Falls', 'Ville touristique.', 14),

-- Namibie
(71, 'Windhoek', 'Capitale et centre économique.', 15),
(72, 'Swakopmund', 'Ville côtière.', 15),
(73, 'Walvis Bay', 'Ville portuaire.', 15),
(74, 'Lüderitz', 'Ville historique.', 15),
(75, 'Oshakati', 'Ville importante au nord.', 15),

-- Mali
(76, 'Bamako', 'Capitale du Mali.', 16),
(77, 'Timbuktu', 'Ville historique et culturelle.', 16),
(78, 'Ségou', 'Ville sur le fleuve Niger.', 16),
(79, 'Mopti', 'Ville portuaire.', 16),
(80, 'Kayes', 'Ville minière.', 16),

-- Zambie
(81, 'Lusaka', 'Capitale et centre économique.', 17),
(82, 'Kitwe', 'Ville minière.', 17),
(83, 'Ndola', 'Centre industriel.', 17),
(84, 'Livingstone', 'Proche des chutes Victoria.', 17),
(85, 'Chingola', 'Ville minière.', 17),

-- Botswana
(86, 'Gaborone', 'Capitale du Botswana.', 18),
(87, 'Francistown', 'Deuxième plus grande ville.', 18),
(88, 'Maun', 'Point de départ pour le delta de l\'Okavango.', 18),
(89, 'Kasane', 'Proche du parc Chobe.', 18),
(90, 'Lobatse', 'Ville historique.', 18),

-- Madagascar
(91, 'Antananarivo', 'Capitale de Madagascar.', 19),
(92, 'Toamasina', 'Ville portuaire importante.', 19),
(93, 'Fianarantsoa', 'Centre éducatif.', 19),
(94, 'Mahajanga', 'Ville côtière.', 19),
(95, 'Toliara', 'Ville côtière au sud-ouest.', 19),

-- Soudan
(96, 'Khartoum', 'Capitale du Soudan.', 20),
(97, 'Omdourman', 'Ville historique.', 20),
(98, 'Port-Soudan', 'Ville portuaire.', 20),
(99, 'Nyala', 'Centre de commerce dans le Darfour.', 20),
(100, 'El Obeid', 'Ville importante du centre.', 20);



ALTER TABLE Africa_Pays.Ville
DROP FOREIGN KEY fk_id_pays;

ALTER TABLE Africa_Pays.Ville
ADD CONSTRAINT fk_id_pays
FOREIGN KEY (id_pays) REFERENCES Africa_Pays.Pays(id_pays) ON DELETE CASCADE;
