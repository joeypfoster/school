-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 31 mrt 2022 om 07:27
-- Serverversie: 5.7.34
-- PHP-versie: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `VistaMovies`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `all_movies`
--

CREATE TABLE `all_movies` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `genre` text NOT NULL,
  `plot` text NOT NULL,
  `year` int(4) NOT NULL,
  `duration` text NOT NULL,
  `filmID` text NOT NULL,
  `poster` text NOT NULL,
  `movieFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `all_movies`
--

INSERT INTO `all_movies` (`id`, `name`, `genre`, `plot`, `year`, `duration`, `filmID`, `poster`, `movieFile`) VALUES
(0, 'Spider-Man: No Way Home', 'Action, Adventure, Fantasy', 'With Spider-Man/s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.', 2021, '148 min', 'tt10872600', 'https://m.media-amazon.com/images/M/MV5BZWMyYzFjYTYtNTRjYi00OGExLWE2YzgtOGRmYjAxZTU3NzBiXkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_SX300.jpg', 'https://www.imdb.com/title/tt10872600'),
(1, 'The Battle at Lake Changjin', 'Action, Drama, History', 'Set in the Second Phase Offensive of the Korean War, \"The Battle at Lake Changjin\" tells an epic historical tale: 71 years ago, the People/s Volunteer Army (PVA) entered North Korea for battle. Under extreme freezing conditions, the ', 2021, '176 min', 'tt13462900', 'https://m.media-amazon.com/images/M/MV5BNTlmOWQ2YjgtODk3MS00YzZhLTllYTUtYjIyN2U2YWYxNTRjXkEyXkFqcGdeQXVyMTk2MDc1MjQ@._V1_SX300.jpg', 'https://www.imdb.com/title/tt13462900'),
(2, 'Hi, Mom!', 'Comedy, Drama', 'A Vietnam vet moves into an apartment and peers through other people/s windows across the street, meets one of the women, and discovers Black theater.', 1970, '87 min', 'tt0065836', 'https://m.media-amazon.com/images/M/MV5BNDYxMmM3NmQtZjViMy00Mjc0LWIzOTYtMjkyMjFlNjBiNGI5XkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SX300.jpg', 'https://www.imdb.com/title/tt0065836'),
(3, 'No Time to Die', 'Action, Adventure, Thriller', 'James Bond has left active service. His peace is short-lived when Felix Leiter, an old friend from the CIA, turns up asking for help, leading Bond onto the trail of a mysterious villain armed with dangerous new technology.', 2021, '163 min', 'tt2382320', 'https://m.media-amazon.com/images/M/MV5BYWQ2NzQ1NjktMzNkNS00MGY1LTgwMmMtYTllYTI5YzNmMmE0XkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2382320'),
(4, 'F9: The Fast Saga', 'Action, Crime, Thriller', 'Dom and the crew must take on an international terrorist who turns out to be Dom and Mia/s estranged brother.', 2021, '143 min', 'tt5433138', 'https://m.media-amazon.com/images/M/MV5BMjI0NmFkYzEtNzU2YS00NTg5LWIwYmMtNmQ1MTU0OGJjOTMxXkEyXkFqcGdeQXVyMjMxOTE0ODA@._V1_SX300.jpg', 'https://www.imdb.com/title/tt5433138'),
(5, 'Detective Chinatown 3', 'Action, Adventure, Comedy', 'A major crime occurs in Tokyo when detectives Tang Ren and Qin Feng are invited to investigate the crime. A battle between the strongest detectives in Asia is about to break out with bursts of laughter.', 2021, '136 min', 'tt10370822', 'https://m.media-amazon.com/images/M/MV5BOTdhMDY2OWQtZDBjOC00ZTJiLTkzMTktODA3MDJkMTJkOGJkXkEyXkFqcGdeQXVyNjkzMzA2Njk@._V1_SX300.jpg', 'https://www.imdb.com/title/tt10370822'),
(6, 'Venom: Let There Be Carnage', 'Action, Adventure, Sci-Fi', 'Eddie Brock attempts to reignite his career by interviewing serial killer Cletus Kasady, who becomes the host of the symbiote Carnage and escapes prison after a failed execution.', 2021, '97 min', 'tt7097896', 'https://m.media-amazon.com/images/M/MV5BYTc3ZTAwYTgtMmM4ZS00MDRiLWI2Y2EtYmRiZmE0YjkzMGY1XkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt7097896'),
(7, 'Godzilla vs. Kong', 'Action, Sci-Fi, Thriller', 'The epic next chapter in the cinematic Monsterverse pits two of the greatest icons in motion picture history against one another - the fearsome Godzilla and the mighty Kong - with humanity caught in the balance.', 2021, '113 min', 'tt5034838', 'https://m.media-amazon.com/images/M/MV5BZmYzMzU4NjctNDI0Mi00MGExLWI3ZDQtYzQzYThmYzc2ZmNjXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_SX300.jpg', 'https://www.imdb.com/title/tt5034838'),
(8, 'The Eight Hundred', 'Action, Drama, History', 'From the acclaimed filmmaker behind Mr. Six comes a riveting war epic. In 1937, eight hundred Chinese soldiers fight under siege from a warehouse in the middle of the Shanghai battlefield, completely surrounded by the Japanese army.', 2020, '149 min', 'tt7294150', 'https://m.media-amazon.com/images/M/MV5BZDNmODAxZDAtODczZS00NDI2LThhYTQtMjAzNjgyMGQxN2NjXkEyXkFqcGdeQXVyMTIyNjI1ODc5._V1_SX300.jpg', 'https://www.imdb.com/title/tt7294150'),
(9, 'Shang-Chi and the Legend of the Ten Rings', 'Action, Adventure, Fantasy', 'Shang-Chi, the master of weaponry-based Kung Fu, is forced to confront his past after being drawn into the Ten Rings organization.', 2021, '132 min', 'tt9376612', 'https://m.media-amazon.com/images/M/MV5BNTliYjlkNDQtMjFlNS00NjgzLWFmMWEtYmM2Mzc2Zjg3ZjEyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt9376612'),
(10, 'Bad Boys for Life', 'Action, Comedy, Crime', 'Miami detectives Mike Lowrey and Marcus Burnett must face off against a mother-and-son pair of drug lords who wreak vengeful havoc on their city.', 2020, '124 min', 'tt1502397', 'https://m.media-amazon.com/images/M/MV5BMWU0MGYwZWQtMzcwYS00NWVhLTlkZTAtYWVjOTYwZTBhZTBiXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1502397'),
(11, 'My People, My Homeland', 'Drama', 'In different parts of rural China, various people explore what makes their communities unique.', 2020, '153 min', 'tt12363162', 'https://m.media-amazon.com/images/M/MV5BYmE4NTZjMTAtZTYyZC00YjM0LWJiMWYtODI2Y2E0MjJmOGRmXkEyXkFqcGdeQXVyNzk0MDg0MzE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt12363162'),
(12, 'Eternals', 'Action, Adventure, Fantasy', 'The saga of the Eternals, a race of immortal beings who lived on Earth and shaped its history and civilizations.', 2021, '156 min', 'tt9032400', 'https://m.media-amazon.com/images/M/MV5BMTExZmVjY2ItYTAzYi00MDdlLWFlOWItNTJhMDRjMzQ5ZGY0XkEyXkFqcGdeQXVyODIyOTEyMzY@._V1_SX300.jpg', 'https://www.imdb.com/title/tt9032400'),
(13, 'Dune', 'Action, Adventure, Drama', 'Feature adaptation of Frank Herbert/s science fiction novel about the son of a noble family entrusted with the protection of the most valuable asset and most vital element in the galaxy.', 2021, '155 min', 'tt1160419', 'https://m.media-amazon.com/images/M/MV5BN2FjNmEyNWMtYzM0ZS00NjIyLTg5YzYtYThlMGVjNzE1OGViXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1160419'),
(14, 'Black Widow', 'Action, Adventure, Sci-Fi', 'Natasha Romanoff confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises.', 2021, '134 min', 'tt3480822', 'https://m.media-amazon.com/images/M/MV5BNjRmNDI5MjMtMmFhZi00YzcwLWI4ZGItMGI2MjI0N2Q3YmIwXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt3480822'),
(15, 'Tenet', 'Action, Sci-Fi, Thriller', 'Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.', 2020, '150 min', 'tt6723592', 'https://m.media-amazon.com/images/M/MV5BYzg0NGM2NjAtNmIxOC00MDJmLTg5ZmYtYzM0MTE4NWE2NzlhXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_SX300.jpg', 'https://www.imdb.com/title/tt6723592'),
(16, 'Sing 2', 'Animation, Adventure, Comedy', 'Buster Moon and his friends must persuade reclusive rock star Clay Calloway to join them for the opening of a new show.', 2021, '110 min', 'tt6467266', 'https://m.media-amazon.com/images/M/MV5BMWRiZGQ1NDMtODQ2OS00MDlhLWJkZGYtM2ZmNjlhZThjOWRmXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt6467266'),
(17, 'Free Guy', 'Action, Adventure, Comedy', 'A bank teller discovers that he/s actually an NPC inside a brutal, open world video game.', 2021, '115 min', 'tt6264654', 'https://m.media-amazon.com/images/M/MV5BOTY2NzFjODctOWUzMC00MGZhLTlhNjMtM2Y2ODBiNGY1ZWRiXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt6264654'),
(18, 'Sonic the Hedgehog', 'Action, Adventure, Comedy', 'After discovering a small, blue, fast hedgehog, a small-town police officer must help him defeat an evil genius who wants to do experiments on him.', 2020, '99 min', 'tt3794354', 'https://m.media-amazon.com/images/M/MV5BMDk5Yzc4NzMtODUwOS00NTdhLTg2MjEtZTkzZjc0ZWE2MzAwXkEyXkFqcGdeQXVyMTA3MTA4Mzgw._V1_SX300.jpg', 'https://www.imdb.com/title/tt3794354'),
(19, 'A Quiet Place Part II', 'Drama, Horror, Sci-Fi', 'Following the events at home, the Abbott family now face the terrors of the outside world. Forced to venture into the unknown, they realize the creatures that hunt by sound are not the only threats lurking beyond the sand path.', 2020, '97 min', 'tt8332922', 'https://m.media-amazon.com/images/M/MV5BMTE2ODU4NDEtNmRjNS00OTk1LTg4NmMtNTAzYzVlNzJmYjgzXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_SX300.jpg', 'https://www.imdb.com/title/tt8332922'),
(20, 'Uncharted', 'Action, Adventure', 'Street-smart Nathan Drake is recruited by seasoned treasure hunter Victor \"Sully\" Sullivan to recover a fortune amassed by Ferdinand Magellan, and lost 500 years ago by the House of Moncada.', 2022, '116 min', 'tt1464335', 'https://m.media-amazon.com/images/M/MV5BMWEwNjhkYzYtNjgzYy00YTY2LThjYWYtYzViMGJkZTI4Y2MyXkEyXkFqcGdeQXVyNTM0OTY1OQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1464335'),
(21, 'The Batman', 'Action, Crime, Drama', 'When the Riddler, a sadistic serial killer, begins murdering key political figures in Gotham, Batman is forced to investigate the city/s hidden corruption and question his family/s involvement.', 2022, '176 min', 'tt1877830', 'https://m.media-amazon.com/images/M/MV5BMDdmMTBiNTYtMDIzNi00NGVlLWIzMDYtZTk3MTQ3NGQxZGEwXkEyXkFqcGdeQXVyMzMwOTU5MDk@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1877830'),
(22, 'Encanto', 'Animation, Comedy, Family', 'A Colombian teenage girl has to face the frustration of being the only member of her family without magical powers.', 2021, '102 min', 'tt2953050', 'https://m.media-amazon.com/images/M/MV5BNjE5NzA4ZDctOTJkZi00NzM0LTkwOTYtMDI4MmNkMzIxODhkXkEyXkFqcGdeQXVyNjY1MTg4Mzc@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2953050'),
(23, 'Dolittle', 'Adventure, Comedy, Family', 'A physician who can talk to animals embarks on an adventure to find a legendary island with a young apprentice and a crew of strange pets.', 2020, '101 min', 'tt6673612', 'https://m.media-amazon.com/images/M/MV5BMDNkODA5ZGQtODczOS00OTQxLThhMTItMjk0ZmNhMDM0YjNmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt6673612'),
(24, 'The Legend of Jiang Ziya', 'Action, Fantasy', 'When Jiang Ziya violates the code of the gods, he is banished to the mortal realm. He is saved by a kind young woman Qing Luan but disaster follows when the river god breaks the curse and starts slaughtering the locals.', 2019, '85 min', 'tt10732034', 'https://m.media-amazon.com/images/M/MV5BMDYzMWJlZWUtZWIyMi00ZjdhLWJmMzYtNjAxZjgxNWM1NmFmXkEyXkFqcGdeQXVyNzA2MDE5NDg@._V1_SX300.jpg', 'https://www.imdb.com/title/tt10732034'),
(25, 'Cruella', 'Adventure, Comedy, Crime', 'A live-action prequel feature film following a young Cruella de Vil.', 2021, '134 min', 'tt3228774', 'https://m.media-amazon.com/images/M/MV5BOWI5YTUxOWEtZmRiZS00ZmQxLWE2NzctYTRiODA2NzE1ZjczXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt3228774'),
(26, 'My Country, My Parents', 'Drama', 'Included as the third installment of \"National Day Celebration\" trilogy with My People, My Country (2019) and My People, My Homeland (2020), My Country, My Parents focuses on four Chinese families in four different eras. Combined wit', 2021, '157 min', 'tt15465312', 'https://m.media-amazon.com/images/M/MV5BZWMzNWZkYWEtOGQ3Zi00ZmEwLWI0YjQtNjM1Mjc3NzE3N2ZmXkEyXkFqcGdeQXVyMTI4MTY0NzI3._V1_SX300.jpg', 'https://www.imdb.com/title/tt15465312'),
(27, 'Jungle Cruise', 'Action, Adventure, Comedy', 'Based on Disneyland/s theme park ride where a small riverboat takes a group of travelers through a jungle filled with dangerous animals and reptiles but with a supernatural element.', 2021, '127 min', 'tt0870154', 'https://m.media-amazon.com/images/M/MV5BNDE1MGRlNTQtZjc4ZC00MTI0LWEwY2MtODk1YTM2NmFmYTNmXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_SX300.jpg', 'https://www.imdb.com/title/tt0870154'),
(28, 'Avengers: Endgame', 'Action, Adventure, Drama', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos/ actions and restore balance to the universe.', 2019, '181 min', 'tt4154796', 'https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_SX300.jpg', 'https://www.imdb.com/title/tt4154796'),
(29, 'RiffTrax: Star Wars: The Force Awakens', 'Comedy', 'Scavenger girl Rey leaves her junkyard home to fulfill her destiny of escorting a robot around the galaxy. Mike Nelson, Bill Corbett, and Kevin Murphy are here to see if there/s more to the story in this humorous commentary.', 2016, 'N/A', 'tt10321138', 'https://m.media-amazon.com/images/M/MV5BOTI1OTQ3N2YtNmY5YS00OWJkLWIzZGYtNWFiMjlhNTBlMTlmXkEyXkFqcGdeQXVyODk1MTg5MDU@._V1_SX300.jpg', 'https://www.imdb.com/title/tt10321138'),
(30, 'Avengers: Infinity War', 'Action, Adventure, Sci-Fi', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 2018, '149 min', 'tt4154756', 'https://m.media-amazon.com/images/M/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_SX300.jpg', 'https://www.imdb.com/title/tt4154756'),
(31, 'Jurassic World', 'Action, Adventure, Sci-Fi', 'A new theme park, built on the original site of Jurassic Park, creates a genetically modified hybrid dinosaur, the Indominus Rex, which escapes containment and goes on a killing spree.', 2015, '124 min', 'tt0369610', 'https://m.media-amazon.com/images/M/MV5BNzQ3OTY4NjAtNzM5OS00N2ZhLWJlOWUtYzYwZjNmOWRiMzcyXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg', 'https://www.imdb.com/title/tt0369610'),
(32, 'The Lion King', 'Animation, Adventure, Drama', 'Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.', 1994, '88 min', 'tt0110357', 'https://m.media-amazon.com/images/M/MV5BYTYxNGMyZTYtMjE3MS00MzNjLWFjNmYtMDk3N2FmM2JiM2M1XkEyXkFqcGdeQXVyNjY5NDU4NzI@._V1_SX300.jpg', 'https://www.imdb.com/title/tt0110357'),
(33, 'The Avengers', 'Action, Adventure, Sci-Fi', 'Earth/s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.', 2012, '143 min', 'tt0848228', 'https://m.media-amazon.com/images/M/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg', 'https://www.imdb.com/title/tt0848228'),
(34, 'Furious 7', 'Action, Crime, Thriller', 'Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother.', 2015, '137 min', 'tt2820852', 'https://m.media-amazon.com/images/M/MV5BMTQxOTA2NDUzOV5BMl5BanBnXkFtZTgwNzY2MTMxMzE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2820852'),
(35, 'Frozen II', 'Animation, Adventure, Comedy', 'Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land. They set out to find the origin of Elsa/s powers in order to save their kingdom.', 2019, '103 min', 'tt4520988', 'https://m.media-amazon.com/images/M/MV5BMjA0YjYyZGMtN2U0Ni00YmY4LWJkZTItYTMyMjY3NGYyMTJkXkEyXkFqcGdeQXVyNDg4NjY5OTQ@._V1_SX300.jpg', 'https://www.imdb.com/title/tt4520988'),
(36, 'Avengers: Age of Ultron', 'Action, Adventure, Sci-Fi', 'When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program called Ultron, things go horribly wrong and it/s up to Earth/s mightiest heroes to stop the villainous Ultron from enacting his terrible plan.', 2015, '141 min', 'tt2395427', 'https://m.media-amazon.com/images/M/MV5BMTM4OGJmNWMtOTM4Ni00NTE3LTg3MDItZmQxYjc4N2JhNmUxXkEyXkFqcGdeQXVyNTgzMDMzMTg@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2395427'),
(37, 'Black Panther', 'Action, Adventure, Sci-Fi', 'T/Challa, heir to the hidden but advanced kingdom of Wakanda, must step forward to lead his people into a new future and must confront a challenger from his country/s past.', 2018, '134 min', 'tt1825683', 'https://m.media-amazon.com/images/M/MV5BMTg1MTY2MjYzNV5BMl5BanBnXkFtZTgwMTc4NTMwNDI@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1825683'),
(38, 'Harry Potter and the Deathly Hallows: Part 2', 'Adventure, Fantasy, Mystery', 'Harry, Ron, and Hermione search for Voldemort/s remaining Horcruxes in their effort to destroy the Dark Lord as the final battle rages on at Hogwarts.', 2011, '130 min', 'tt1201607', 'https://m.media-amazon.com/images/M/MV5BMGVmMWNiMDktYjQ0Mi00MWIxLTk0N2UtN2ZlYTdkN2IzNDNlXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1201607'),
(39, 'Jurassic World: Fallen Kingdom', 'Action, Adventure, Sci-Fi', 'When the island/s dormant volcano begins roaring to life, Owen and Claire mount a campaign to rescue the remaining dinosaurs from this extinction-level event.', 2018, '128 min', 'tt4881806', 'https://m.media-amazon.com/images/M/MV5BNzIxMjYwNDEwN15BMl5BanBnXkFtZTgwMzk5MDI3NTM@._V1_SX300.jpg', 'https://www.imdb.com/title/tt4881806'),
(40, 'Frozen', 'Animation, Adventure, Comedy', 'When the newly crowned Queen Elsa accidentally uses her power to turn things into ice to curse her home in infinite winter, her sister Anna teams up with a mountain man, his playful reindeer, and a snowman to change the weather condi', 2013, '102 min', 'tt2294629', 'https://m.media-amazon.com/images/M/MV5BMTQ1MjQwMTE5OF5BMl5BanBnXkFtZTgwNjk3MTcyMDE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2294629'),
(41, 'Beauty and the Beast', 'Animation, Family, Fantasy', 'A prince cursed to spend his days as a hideous monster sets out to regain his humanity by earning a young woman/s love.', 1991, '84 min', 'tt0101414', 'https://m.media-amazon.com/images/M/MV5BMzE5MDM1NDktY2I0OC00YWI5LTk2NzUtYjczNDczOWQxYjM0XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 'https://www.imdb.com/title/tt0101414'),
(42, 'Incredibles 2', 'Animation, Action, Adventure', 'The Incredibles family takes on a new mission which involves a change in family roles: Bob Parr (Mr. Incredible) must manage the house while his wife Helen (Elastigirl) goes out to save the world.', 2018, '118 min', 'tt3606756', 'https://m.media-amazon.com/images/M/MV5BMTEzNzY0OTg0NTdeQTJeQWpwZ15BbWU4MDU3OTg3MjUz._V1_SX300.jpg', 'https://www.imdb.com/title/tt3606756'),
(43, 'The Fate of the Furious', 'Action, Crime, Thriller', 'When a mysterious woman seduces Dominic Toretto into the world of terrorism and a betrayal of those closest to him, the crew face trials that will test them as never before.', 2017, '136 min', 'tt4630562', 'https://m.media-amazon.com/images/M/MV5BMjMxODI2NDM5Nl5BMl5BanBnXkFtZTgwNjgzOTk1MTI@._V1_SX300.jpg', 'https://www.imdb.com/title/tt4630562'),
(44, 'Iron Man 3', 'Action, Adventure, Sci-Fi', 'When Tony Stark/s world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.', 2013, '130 min', 'tt1300854', 'https://m.media-amazon.com/images/M/MV5BMjE5MzcyNjk1M15BMl5BanBnXkFtZTcwMjQ4MjcxOQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1300854'),
(45, 'Minions', 'Animation, Adventure, Comedy', 'Minions Stuart, Kevin, and Bob are recruited by Scarlet Overkill, a supervillain who, alongside her inventor husband Herb, hatches a plot to take over the world.', 2015, '91 min', 'tt2293640', 'https://m.media-amazon.com/images/M/MV5BMTg2MTMyMzU0M15BMl5BanBnXkFtZTgwOTU3ODk4NTE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2293640'),
(46, 'Captain America: Civil War', 'Action, Adventure, Sci-Fi', 'Political involvement in the Avengers/ affairs causes a rift between Captain America and Iron Man.', 2016, '147 min', 'tt3498820', 'https://m.media-amazon.com/images/M/MV5BMjQ0MTgyNjAxMV5BMl5BanBnXkFtZTgwNjUzMDkyODE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt3498820'),
(47, 'Aquaman', 'Action, Adventure, Fantasy', 'Arthur Curry, the human-born heir to the underwater kingdom of Atlantis, goes on a quest to prevent a war between the worlds of ocean and land.', 2018, '143 min', 'tt1477834', 'https://m.media-amazon.com/images/M/MV5BOTk5ODg0OTU5M15BMl5BanBnXkFtZTgwMDQ3MDY3NjM@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1477834'),
(48, 'Spider-Man: Far from Home', 'Action, Adventure, Sci-Fi', 'Following the events of Avengers: Endgame (2019), Spider-Man must step up to take on new threats in a world that has changed forever.', 2019, '129 min', 'tt6320628', 'https://m.media-amazon.com/images/M/MV5BMGZlNTY1ZWUtYTMzNC00ZjUyLWE0MjQtMTMxN2E3ODYxMWVmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt6320628'),
(49, 'Captain Marvel', 'Action, Adventure, Sci-Fi', 'Carol Danvers becomes one of the universe/s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.', 2019, '123 min', 'tt4154664', 'https://m.media-amazon.com/images/M/MV5BMTE0YWFmOTMtYTU2ZS00ZTIxLWE3OTEtYTNiYzBkZjViZThiXkEyXkFqcGdeQXVyODMzMzQ4OTI@._V1_SX300.jpg', 'https://www.imdb.com/title/tt4154664'),
(50, 'Transformers: Dark of the Moon', 'Action, Adventure, Sci-Fi', 'The Autobots learn of a Cybertronian spacecraft hidden on the moon, and race against the Decepticons to reach it and to learn its secrets.', 2011, '154 min', 'tt1399103', 'https://m.media-amazon.com/images/M/MV5BMTkwOTY0MTc1NV5BMl5BanBnXkFtZTcwMDQwNjA2NQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1399103'),
(51, 'Skyfall', 'Action, Adventure, Thriller', 'James Bond/s loyalty to M is tested when her past comes back to haunt her. When MI6 comes under attack, 007 must track down and destroy the threat, no matter how personal the cost.', 2012, '143 min', 'tt1074638', 'https://m.media-amazon.com/images/M/MV5BMWZiNjE2OWItMTkwNy00ZWQzLWI0NTgtMWE0NjNiYTljN2Q1XkEyXkFqcGdeQXVyNzAwMjYxMzA@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1074638'),
(52, 'Transformers: Age of Extinction', 'Action, Adventure, Sci-Fi', 'When humanity allies with a bounty hunter in pursuit of Optimus Prime, the Autobots turn to a mechanic and his family for help.', 2014, '165 min', 'tt2109248', 'https://m.media-amazon.com/images/M/MV5BMjEwNTg1MTA5Nl5BMl5BanBnXkFtZTgwOTg2OTM4MTE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2109248'),
(53, 'The Dark Knight Rises', 'Action, Crime, Drama', 'Eight years after the Joker/s reign of anarchy, Batman, with the help of the enigmatic Catwoman, is forced from his exile to save Gotham City from the brutal guerrilla terrorist Bane.', 2012, '164 min', 'tt1345836', 'https://m.media-amazon.com/images/M/MV5BMTk4ODQzNDY3Ml5BMl5BanBnXkFtZTcwODA0NTM4Nw@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1345836'),
(54, 'Toy Story 4', 'Animation, Adventure, Comedy', 'When a new toy called \"Forky\" joins Woody and the gang, a road trip alongside old and new friends reveals how big the world can be for a toy.', 2019, '100 min', 'tt1979376', 'https://m.media-amazon.com/images/M/MV5BMTYzMDM4NzkxOV5BMl5BanBnXkFtZTgwNzM1Mzg2NzM@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1979376'),
(55, 'Joker', 'Crime, Drama, Thriller', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.', 2019, '122 min', 'tt7286456', 'https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt7286456'),
(56, 'Toy Story 3', 'Animation, Adventure, Comedy', 'The toys are mistakenly delivered to a day-care center instead of the attic right before Andy leaves for college, and it/s up to Woody to convince the other toys that they weren/t abandoned and to return home.', 2010, '103 min', 'tt0435761', 'https://m.media-amazon.com/images/M/MV5BMTgxOTY4Mjc0MF5BMl5BanBnXkFtZTcwNTA4MDQyMw@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt0435761'),
(57, 'Live from the Red Carpet of Star Wars: The Rise of Skywalker', 'N/A', 'N/A', 2019, '126 min', 'tt11464830', 'https://m.media-amazon.com/images/M/MV5BOWQzZDJiY2QtYTZiNS00YWFhLThlODMtZTU4M2Q0Y2E5ZGFhXkEyXkFqcGdeQXVyMjMyMjA0NTA@._V1_SX300.jpg', 'https://www.imdb.com/title/tt11464830'),
(58, 'Rogue One: A Star Wars Story', 'Action, Adventure, Sci-Fi', 'In a time of conflict, a group of unlikely heroes band together on a mission to steal the plans to the Death Star, the Empire/s ultimate weapon of destruction.', 2016, '133 min', 'tt3748528', 'https://m.media-amazon.com/images/M/MV5BMjEwMzMxODIzOV5BMl5BanBnXkFtZTgwNzg3OTAzMDI@._V1_SX300.jpg', 'https://www.imdb.com/title/tt3748528'),
(59, 'Aladdin', 'Animation, Adventure, Comedy', 'A kindhearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.', 1992, '90 min', 'tt0103639', 'https://m.media-amazon.com/images/M/MV5BY2Q2NDI1MjUtM2Q5ZS00MTFlLWJiYWEtNTZmNjQ3OGJkZDgxXkEyXkFqcGdeQXVyNTI4MjkwNjA@._V1_SX300.jpg', 'https://www.imdb.com/title/tt0103639'),
(60, 'Pirates of the Caribbean: On Stranger Tides', 'Action, Adventure, Fantasy', 'Jack Sparrow and Barbossa embark on a quest to find the elusive fountain of youth, only to discover that Blackbeard and his daughter are after it too.', 2011, '136 min', 'tt1298650', 'https://m.media-amazon.com/images/M/MV5BMjE5MjkwODI3Nl5BMl5BanBnXkFtZTcwNjcwMDk4NA@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1298650'),
(61, 'Despicable Me 3', 'Animation, Adventure, Comedy', 'Gru meets his long-lost, charming, cheerful, and more successful twin brother Dru, who wants to team up with him for one last criminal heist.', 2017, '89 min', 'tt3469046', 'https://m.media-amazon.com/images/M/MV5BNjUyNzQ2MTg3Ml5BMl5BanBnXkFtZTgwNzE4NDM3MTI@._V1_SX300.jpg', 'https://www.imdb.com/title/tt3469046'),
(62, 'Finding Dory', 'Animation, Adventure, Comedy', 'Friendly but forgetful blue tang Dory begins a search for her long-lost parents, and everyone learns a few things about the real meaning of family along the way.', 2016, '97 min', 'tt2277860', 'https://m.media-amazon.com/images/M/MV5BNzg4MjM2NDQ4MV5BMl5BanBnXkFtZTgwMzk3MTgyODE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2277860'),
(63, 'Alice in Wonderland', 'Adventure, Family, Fantasy', 'Nineteen-year-old Alice returns to the magical world from her childhood adventure, where she reunites with her old friends and learns of her true destiny: to end the Red Queen/s reign of terror.', 2010, '108 min', 'tt1014759', 'https://m.media-amazon.com/images/M/MV5BMTMwNjAxMTc0Nl5BMl5BanBnXkFtZTcwODc3ODk5Mg@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1014759'),
(64, 'Zootopia', 'Animation, Adventure, Comedy', 'In a city of anthropomorphic animals, a rookie bunny cop and a cynical con artist fox must work together to uncover a conspiracy.', 2016, '108 min', 'tt2948356', 'https://m.media-amazon.com/images/M/MV5BOTMyMjEyNzIzMV5BMl5BanBnXkFtZTgwNzIyNjU0NzE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2948356'),
(65, 'The Hobbit: An Unexpected Journey', 'Adventure, Fantasy', 'A reluctant Hobbit, Bilbo Baggins, sets out to the Lonely Mountain with a spirited group of dwarves to reclaim their mountain home, and the gold within it from the dragon Smaug.', 2012, '169 min', 'tt0903624', 'https://m.media-amazon.com/images/M/MV5BMTcwNTE4MTUxMl5BMl5BanBnXkFtZTcwMDIyODM4OA@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt0903624'),
(66, 'Despicable Me 2', 'Animation, Adventure, Comedy', 'When Gru, the world/s most super-bad turned super-dad has been recruited by a team of officials to stop lethal muscle and a host of Gru/s own, He has to fight back with new gadgetry, cars, and more minion madness.', 2013, '98 min', 'tt1690953', 'https://m.media-amazon.com/images/M/MV5BMjExNjAyNTcyMF5BMl5BanBnXkFtZTgwODQzMjQ3MDE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1690953'),
(67, 'The Jungle Book', 'Adventure, Drama, Family', 'After a threat from the tiger Shere Khan forces him to flee the jungle, a man-cub named Mowgli embarks on a journey of self discovery with the help of panther Bagheera and free-spirited bear Baloo.', 2016, '106 min', 'tt3040964', 'https://m.media-amazon.com/images/M/MV5BMTc3NTUzNTI4MV5BMl5BanBnXkFtZTgwNjU0NjU5NzE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt3040964'),
(68, 'Jumanji: Welcome to the Jungle', 'Action, Adventure, Comedy', 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.', 2017, '119 min', 'tt2283362', 'https://m.media-amazon.com/images/M/MV5BODQ0NDhjYWItYTMxZi00NTk2LWIzNDEtOWZiYWYxZjc2MTgxXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2283362'),
(69, 'Harry Potter and the Deathly Hallows: Part 1', 'Adventure, Family, Fantasy', 'As Harry, Ron, and Hermione race against time and evil to destroy the Horcruxes, they uncover the existence of the three most powerful objects in the wizarding world: the Deathly Hallows.', 2010, '146 min', 'tt0926084', 'https://m.media-amazon.com/images/M/MV5BMTQ2OTE1Mjk0N15BMl5BanBnXkFtZTcwODE3MDAwNA@@._V1_SX300.jpg', 'https://www.imdb.com/title/tt0926084'),
(70, 'The Hobbit: The Desolation of Smaug', 'Adventure, Fantasy', 'The dwarves, along with Bilbo Baggins and Gandalf the Grey, continue their quest to reclaim Erebor, their homeland, from Smaug. Bilbo Baggins is in possession of a mysterious and magical ring.', 2013, '161 min', 'tt1170358', 'https://m.media-amazon.com/images/M/MV5BMzU0NDY0NDEzNV5BMl5BanBnXkFtZTgwOTIxNDU1MDE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt1170358'),
(71, 'Bohemian Rhapsody', 'Biography, Drama, Music', 'The story of the legendary British rock band Queen and lead singer Freddie Mercury, leading up to their famous performance at Live Aid (1985).', 2018, '134 min', 'tt1727824', 'https://m.media-amazon.com/images/M/MV5BMTA2NDc3Njg5NDVeQTJeQWpwZ15BbWU4MDc1NDcxNTUz._V1_SX300.jpg', 'https://www.imdb.com/title/tt1727824'),
(72, 'Spectre', 'Action, Adventure, Thriller', 'A cryptic message from James Bond/s past sends him on a trail to uncover the existence of a sinister organisation named SPECTRE. With a new threat dawning, Bond learns the terrible truth about the author of all his pain in his most r', 2015, '148 min', 'tt2379713', 'https://m.media-amazon.com/images/M/MV5BOWQ1MDE1NzgtNTQ4OC00ZjliLTllZDAtN2IyOTVmMTc5YjUxXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2379713'),
(73, 'Spider-Man: Homecoming', 'Action, Adventure, Sci-Fi', 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.', 2017, '133 min', 'tt2250912', 'https://m.media-amazon.com/images/M/MV5BNTk4ODQ1MzgzNl5BMl5BanBnXkFtZTgwMTMyMzM4MTI@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2250912'),
(74, 'Ice Age Continental Drift: Scrat Got Your Tongue', 'Animation, Short', 'N/A', 2012, '7 min', 'tt2574050', 'https://m.media-amazon.com/images/M/MV5BYzA5NzMxNTEtMDdiMy00ZjRmLWE2YzItNzUxZmQ4OWQ1MjdmXkEyXkFqcGdeQXVyODk1MjAxNzQ@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2574050'),
(75, 'The Secret Life of Pets', 'Animation, Adventure, Comedy', 'The quiet life of a terrier named Max is upended when his owner takes in Duke, a stray whom Max instantly dislikes.', 2016, '87 min', 'tt2709768', 'https://m.media-amazon.com/images/M/MV5BMjIzMzA1OTkzNV5BMl5BanBnXkFtZTgwODE3MjM4NzE@._V1_SX300.jpg', 'https://www.imdb.com/title/tt2709768');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `gmail` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Users`
--

INSERT INTO `Users` (`id`, `name`, `gmail`, `password`) VALUES
(1, 'Joey', 'e0cabd2183d22e2eea86729504cfc9cb', 'f76f722d09f622d7bf5b1a73080fa4c4');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `User_data`
--

CREATE TABLE `User_data` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `genre` text NOT NULL,
  `mylist` text NOT NULL,
  `rewatch` text NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `User_data`
--

INSERT INTO `User_data` (`id`, `name`, `genre`, `mylist`, `rewatch`, `UserID`) VALUES
(1, 'Joey', '', '', '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
