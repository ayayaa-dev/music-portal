-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 07 2023 г., 14:10
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `music_portal_jptv20`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` text NOT NULL,
  `release_date` date NOT NULL,
  `genre` text NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `name`, `picture`, `release_date`, `genre`, `artist_id`) VALUES
(1, 'All Eyez On Me', 'https://upload.wikimedia.org/wikipedia/en/1/16/Alleyezonme.jpg', '1996-02-13', 'West Coast Hip-Hop, Gangsta Rap, G-Funk', 1),
(2, 'Me Against The World', 'https://upload.wikimedia.org/wikipedia/en/3/3d/Meagainsttheworldcover.jpg', '1995-03-14', 'Hip-Hop, Consious Rap, G-Funk', 1),
(3, 'BLAME IT ON BABY', 'https://upload.wikimedia.org/wikipedia/en/c/c2/DaBaby_-_Blame_It_on_Baby.png', '2020-04-17', 'Hip-Hop, Trap', 2),
(4, 'Baby On Baby 2', 'https://upload.wikimedia.org/wikipedia/en/c/ca/DaBaby_-_Baby_on_Baby_2.png', '2022-09-23', 'Hip-Hop, Trap', 2),
(5, 'Meteora', 'https://upload.wikimedia.org/wikipedia/en/0/0c/Linkin_Park_Meteora_Album_Cover.jpg', '2003-03-25', 'Nu Metal, Rap Metal, Alternative Metal, Rap Rock, Alternative Rock', 3),
(6, 'One More Light', 'https://upload.wikimedia.org/wikipedia/en/b/b2/Linkin_Park%2C_One_More_Light%2C_album_art_final.jpeg', '2017-05-19', 'Pop, Pop Rock, ElectroPop, Electronic Rock', 3),
(7, 'AM', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/%22AM%22_%28Arctic_Monkeys%29.jpg/330px-%22AM%22_%28Arctic_Monkeys%29.jpg', '2013-09-09', 'Indie Rock', 4),
(8, 'Favorite Worst Nightmare', 'https://upload.wikimedia.org/wikipedia/en/a/ae/Favourite_Worst_Nightmare.jpg', '2007-04-23', 'Post-Punk Revival, Indie Rock, Garage Rock, Post-BrtiPop', 4),
(9, 'Unleashed', 'https://upload.wikimedia.org/wikipedia/en/8/8c/SkilletUnleasedCover.jpg', '2016-08-05', 'Christian Rock, Symphonic Rock', 5),
(10, 'Comatose', 'https://upload.wikimedia.org/wikipedia/en/e/ea/Skilletcomatose.jpg', '2006-10-03', 'Christian Rock, Christian Metal', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `artists`
--

INSERT INTO `artists` (`id`, `name`, `picture`, `description`) VALUES
(1, '2Pac', 'https://cdn.britannica.com/02/162002-050-02512608/Tupac-Shakur-1993.jpg', 'Tupac Amaru Shakur, also known by his stage names 2Pac and Makaveli, was an American rapper and actor. He is widely considered one of the most influential rappers of all time.Shakur is among the best-selling music artists, having sold more than 75 million records worldwide. Much of Shakur\'s music has been noted for addressing contemporary social issues that plagued inner cities, and he is considered a symbol of activism against inequality.'),
(2, 'DaBaby', 'https://media.pitchfork.com/photos/5c7d4c1b4101df3df85c41e5/1:1/w_800,h_800,c_limit/Dababy_BabyOnBaby.jpg', 'Jonathan Lyndale Kirk (born December 22, 1991), known professionally as DaBaby (formerly known as Baby Jesus), is an American rapper. After releasing several mixtapes between 2014 and 2018, he rose to mainstream prominence with his debut album Baby on Baby (2019), which included the Billboard Hot 100 top ten single \"Suge\".'),
(3, 'Linkin Park', 'https://townsquare.media/site/366/files/2014/12/Linkin-Park.jpg?w=980&q=75', 'Linkin Park is an American rock band from Agoura Hills, California. The band\'s current lineup comprises vocalist/rhythm guitarist/keyboardist Mike Shinoda, lead guitarist Brad Delson, bassist Dave Farrell, DJ/turntablist Joe Hahn and drummer Rob Bourdon, all of whom are founding members. Vocalists Mark Wakefield and Chester Bennington are former members of the band. Categorized as alternative rock, Linkin Park\'s earlier music spanned a fusion of heavy metal and hip hop, while their later music features more electronica and pop elements.'),
(4, 'Arctic Monkeys', 'https://i.scdn.co/image/ab6761610000e5eb7da39dea0a72f581535fb11f', 'Arctic Monkeys are an English rock band formed in Sheffield in 2002. The group consists of Alex Turner (lead vocals, guitar, keyboards), Jamie Cook (guitar, keyboards), Nick O\'Malley (bass guitar, backing vocals), and Matt Helders (drums, backing vocals). Former band member Andy Nicholson (bass guitar, backing vocals) left the band in 2006 shortly after their debut album was released.'),
(5, 'Skillet', 'https://www.skillet.com/sites/g/files/g2000015186/files/2022-09/Skillet_Site_NewSite_Assets_2560_PressShot3.jpg', 'Skillet is an American Christian rock band formed in Memphis, Tennessee, in 1996. The band currently consists of husband John Cooper (lead vocals, bass) and wife Korey Cooper (rhythm guitar, keyboards, backing vocals) along with Jen Ledger (drums, vocals) and Seth Morrison (lead guitar). The band has released eleven albums, two of which, Collide and Comatose, received Grammy nominations. Two of their albums, Comatose and Awake, are certified Platinum and Double Platinum respectively by the RIAA, while Rise and Unleashed are certified Gold as of June 29, 2020. Four of their songs, \"Monster\", \"Hero\", \"Awake and Alive\", and \"Feel Invincible\", are certified Multi-Platinum (5× Platinum, 3× Platinum, and 2× Platinum respectively), while another two, \"Whispers in the Dark\" and \"Comatose\", are certified Platinum, and another four, \"Rebirthing\", \"Not Gonna Die\", \"The Last Night\", and \"The Resistance\" are certified Gold.');

-- --------------------------------------------------------

--
-- Структура таблицы `tracks`
--

CREATE TABLE `tracks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` varchar(5) NOT NULL,
  `link` text NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tracks`
--

INSERT INTO `tracks` (`id`, `name`, `time`, `link`, `album_id`) VALUES
(1, 'Ambitionz Az A Ridah', '4:38', 'https://open.spotify.com/embed/track/5g9lS8deSIxItFBmZRC4vN', 1),
(2, 'All About U (ft. Nate Dogg, Snoop Dogg, Fatal, Yani Hadati)', '4:36', 'https://open.spotify.com/embed/track/3j9UIPpivEXyfV67agjXKH', 1),
(3, 'Skandalouz (ft. Nate Dogg)', '4:08', 'https://open.spotify.com/embed/track/43P5sm3VJt3zLUhDk9kDDB', 1),
(4, 'Got My Mind Made Up(ft. Dat Nigga Daz, Kurupt, Redman and Method Man)', '5:13', 'https://open.spotify.com/embed/track/5iTyKHHx9efbjrOXPP48gG', 1),
(5, 'How Do U Want It (ft. K-Ci & JoJo)', '4:47', 'https://open.spotify.com/embed/track/5iTyKHHx9efbjrOXPP48gG', 1),
(6, '2 of Amerikaz Most Wanted (ft. Snoop Dogg)', '4:07', 'https://open.spotify.com/embed/track/6LwrEZNkvFTOypNwSLjua', 1),
(7, 'No More Pain', '6:15', 'https://open.spotify.com/embed/track/7xeh81c3bxTgqUgy2WN56u', 1),
(8, 'Heartz of Men', '4:44', 'https://open.spotify.com/embed/track/6VAdOq9sndm8QQqXx4BhkK', 1),
(9, 'Life Goes On', '5:02', 'https://open.spotify.com/embed/track/1qZqFtSINOOmjYH1UE9805', 1),
(10, 'Only God Can Judge Me (ft. Rappin\' 4-Tay)', '4:57', 'https://open.spotify.com/embed/track/7sKt5Y2zJpYw78iAxndB8y', 1),
(11, 'Tradin\' War Stories (ft. Dramacydal, C-Bo and Storm)', '5:30', 'https://open.spotify.com/embed/track/3QT55sRs0R7AVFhBxSxrZN', 1),
(12, 'California Love (Remix) (ft. Dr. Dre and Roger Troutman)', '6:25', 'https://open.spotify.com/embed/track/4DLVB91nzswc4wD7EchmXs', 1),
(13, 'I Ain\'t Mad at Cha (ft. Danny Boy)', '4:54', 'https://open.spotify.com/embed/track/70uktTEq3AiRQAtqdl20qG', 1),
(14, 'What\'z Ya Phone # (ft. Danny Boy)', '5:08', 'https://open.spotify.com/embed/track/5kLt3PlMzxw2xdRZuNXEgn', 1),
(15, 'Can\'t C Me (ft. George Clinton)', '5:31', 'https://open.spotify.com/embed/track/7rUchbZxrhF29Q0vYjKEU0', 1),
(16, 'Shorty Wanna Be a Thug', '3:52', 'https://open.spotify.com/embed/track/4U6qrE2SSWYGVKCnT6VbmF', 1),
(17, 'Holla at Me', '4:55', 'https://open.spotify.com/embed/track/0QbzR4Li7d8LrADxqS2Jto', 1),
(18, 'Wonda Why They Call U Bitch', '4:19', 'https://open.spotify.com/embed/track/2dHnJmZMNJlKLmCNV0Ahnt', 1),
(19, 'When We Ride (ft. Outlaw Immortalz)', '5:09', 'https://open.spotify.com/embed/track/3rzgN5U6Q8EviM03LijE31', 1),
(20, 'Thug Passion (ft. Jewell, Dramacydal and Storm)', '5:09', 'https://open.spotify.com/embed/track/3aL7uOGU9S77L4pfFr43Es', 1),
(21, 'Picture Me Rollin\' (ft. Danny Boy, Syke and CPO)', '5:15', 'https://open.spotify.com/embed/track/1zB0kXKLQr7tYifth69jlG', 1),
(22, 'Check Out Time (ft. Kurupt and Syke)', '4:39', 'https://open.spotify.com/embed/track/65X7IUg2rPy57wK7mnVNqS', 1),
(23, 'Ratha Be Ya Nigga (ft. Richie Rich)', '4:14', 'https://open.spotify.com/embed/track/5hzoEKZvvov9EKzrx419Ys', 1),
(24, 'All Eyez on Me (ft. Syke)', '5:08', 'https://open.spotify.com/embed/track/4VQNCzfZ3MdHEwwErNXpBo', 1),
(25, 'Run tha Streetz (ft. Michel\'le, Mutah and Storm)', '5:17', 'https://open.spotify.com/embed/track/4FzMYYcuQg10kBzXgauodD', 1),
(26, 'Ain\'t Hard 2 Find (ft. E-40, B-Legit, C-Bo and Richie Rich)', '4:29', 'https://open.spotify.com/embed/track/3JVVBG4lyaUX2Mvxaw9viu', 1),
(27, 'Heaven Ain\'t Hard 2 Find', '3:58', 'https://open.spotify.com/embed/track/2O5j27YkttbDS68wVuBjyy', 1),
(28, 'Intro', '1:40', 'https://open.spotify.com/embed/track/0Hv5csiUhbfzO6VLFv4wtY', 2),
(29, 'If I Die 2Nite', '4:02', 'https://open.spotify.com/embed/track/4Y2Fc21SqMaqTcJSt69oSQ', 2),
(30, 'Me Against the World (ft. Dramacydal)', '4:41', 'https://open.spotify.com/embed/track/76wJIkA63AgwA92hUhpE2V', 2),
(31, 'So Many Tears', '3:59', 'https://open.spotify.com/embed/track/0NzNKU2MJ9LCetT2uZMJH2', 2),
(32, 'Temptations', '5:01', 'https://open.spotify.com/embed/track/1PU3Hy2uNXmWGDe9gh4Ukb', 2),
(33, 'Young Niggaz', '4:53', 'https://open.spotify.com/embed/track/4tNWSM8gQDsx28Nw1qafkg', 2),
(34, 'Heavy in the Game (ft. Richie Rich)', '4:24', 'https://open.spotify.com/embed/track/1YPwFckhjQgoorq7cNsPw4', 2),
(35, 'Lord Knows', '4:32', 'https://open.spotify.com/embed/track/4CQUVgzAKW76g3BsQ8KSBS', 2),
(36, 'Dear Mama', '4:40', 'https://open.spotify.com/embed/track/6tDxrq4FxEL2q15y37tXT9', 2),
(37, 'It Ain\'t Easy', '4:54', 'https://open.spotify.com/embed/track/6pFfeJceBPGdzTOGgUcLWZ', 2),
(38, 'Can U Get Away', '5:46', 'https://open.spotify.com/embed/track/4bFi6vwibnjz38OYapehT7', 2),
(39, 'Old School', '4:41', 'https://open.spotify.com/embed/track/4GGbJ60q5HIN8wKOp9Xabz', 2),
(40, 'Fuck the World', '4:14', 'https://open.spotify.com/embed/track/3oRcZ0wdQQJXYKQjIUawyg', 2),
(41, 'Death Around the Corner', '4:07', 'https://open.spotify.com/embed/track/4WbPQ8qumpjMzPS0oubUGU', 2),
(42, 'Outlaw (ft. Dramacydal)', '4:33', 'https://open.spotify.com/embed/track/140RrIlCVv0FfGuSTrV54f', 2),
(43, 'Can\'t Stop', '2:48', 'https://open.spotify.com/embed/track/57crda5Lx9OVaYCzb4Wrnd', 3),
(44, 'Pick Up (feat. Quavo)', '1:58', 'https://open.spotify.com/embed/track/5gNOINI5dXZVom2b36LMOd', 3),
(45, 'Lightskin Shit (feat. Future and JetsonMade)', '1:51', 'https://open.spotify.com/embed/track/16oi4OiKmkO51l60F5R9kR', 3),
(46, 'Talk About It', '2:39', 'https://open.spotify.com/embed/track/3QSLoxRguKgK0knOG7EGyn', 3),
(49, 'Sad Shit', '3:37', 'https://open.spotify.com/embed/track/6ChpgWt7s2ksM1Y3l0D9sk', 2),
(50, 'Find My Way', '2:19', 'https://open.spotify.com/embed/track/1gVCEnryJhkdQcuC0Kbvor', 3),
(51, 'Rockstar (feat. Roddy Ricch)', '3:01', 'https://open.spotify.com/embed/track/7ytR5pFWmSjzHJIeQkgog4', 3),
(52, 'Jump (feat. YoungBoy Never Broke Again)	\r\n', '3:32', 'https://open.spotify.com/embed/track/0oT9ElXYSxvnOOagP9efDq', 3),
(53, 'Champion', '2:12', 'https://open.spotify.com/embed/track/19eeh4pgEGHdSTc26U1y89', 3),
(54, 'Drop (feat. A Boogie wit da Hoodie and London on da Track)', '2:29', 'https://open.spotify.com/embed/track/5rFGVn8fCFjnRwCebW0XbS', 3),
(55, 'Blame It on Baby', '2:05', 'https://open.spotify.com/embed/track/0jWm0VyD8p3MrSInczpows', 3),
(56, 'Nasty (feat. Ashanti and Megan Thee Stallion)', '3:35', 'https://open.spotify.com/embed/track/3oHiR89Y8gn6xt3YGAAzFj', 3),
(57, 'Amazing Grace', '1:28', 'https://open.spotify.com/embed/track/2ulB68v8LGCfQMk0giZZ5S', 3),
(58, 'Go Again (Intro)', '2:06', 'https://open.spotify.com/embed/track/7gDBTPpsYhVi93lvhVTJWZ', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usename` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `usename`, `role`) VALUES
(1, 'admin@test.com', 'admin123', 'admin', 'admin'),
(2, 'user@test.com', 'user123', 'user', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_FK` (`artist_id`);

--
-- Индексы таблицы `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tracks_FK` (`album_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_FK` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`);

--
-- Ограничения внешнего ключа таблицы `tracks`
--
ALTER TABLE `tracks`
  ADD CONSTRAINT `tracks_FK` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
