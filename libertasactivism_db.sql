-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2021 at 05:26 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libertasactivism_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs_tbl`
--

DROP TABLE IF EXISTS `blogs_tbl`;
CREATE TABLE IF NOT EXISTS `blogs_tbl` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` text NOT NULL,
  `blog_text` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `blog_img` varchar(255) DEFAULT NULL,
  `blog_date` varchar(255) DEFAULT NULL,
  `url_link` varchar(255) NOT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `author_id` (`author_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs_tbl`
--

INSERT INTO `blogs_tbl` (`blog_id`, `blog_title`, `blog_text`, `author_id`, `blog_img`, `blog_date`, `url_link`) VALUES
(9, 'Some another random Blog', 'Caution\r\nIt is possible to over- and underflow the dd and DD format. Day 0 means the last day of previous month, whereas overflows count into the next month. This makes \"2008-08-00\" equivalent to \"2008-07-31\" and \"2008-06-31\" equivalent to \"2008-07-01\" (June only has 30 days).\r\n\r\nNote that the day range is restricted to 0-31 as indicated by the regular expression above. Thus \"2008-06-32\" is not a valid date string, for instance.\r\n\r\nIt is also possible to underflow the mm and MM formats with the value 0. A month value of 0 means December of the previous year. As example \"2008-00-22\" is equivalent to \"2007-12-22\".\r\n\r\nIf you combine the previous two facts and underflow both the day and the month, the following happens: \"2008-00-00\" first gets converted to \"2007-12-00\" which then gets converted to \"2007-11-30\". This also happens with the string \"0000-00-00\", which gets transformed into \"-0001-11-30\" (the year -1 in the ISO 8601 calendar, which is 2 BC in the proleptic Gregorian calendar).', 3, 'some-another-random-blog-370579.png', '23 Jun, 2021', 'some-another-random-blog-370579'),
(8, 'New Blog', 'No need of total lockdown, India equipped to handle 2nd Covid wave: PM Modi The chance of testing positive has just doubled but out of the entire Indian population, a meager 0.097% are getting tested in a day with more than 20% of them testing positive. This means the 2 lakh daily spike in cases could be much much lower than the actual number of active cases. Several states complained of a severe vaccine shortage but nevertheless Prime Minister Narendra Modi on Thursday ruled out a total lockdown to contain the second wave, instead emphasizing on better vaccination and testing whose resources arenâ€™t fully available. Labs and hospitals are overburdened by testing samples due to which sick people arenâ€™t getting their results on time. There is a massive rise in testing demands particularly in cities like Delhi and Bengaluru etc. In Delhi, the standard reply from the pathology giant SRL Diagnosticsâ€™ customer care was â€œSorry, all slots are booked. We will not be able to collect samples before upcoming Tuesday (i.e., 4 days later)â€. Other health tech and testing institutes declined to take the booking itself let alone give them an appointment, claiming that home collection of testing fluids is currently on hold! In states like Maharashtra, the test machinery lags by huge margins. Coming to vaccines, US restrictions have halved the number of Covovax doses that Serum Institute of India (SII) should be stockpiling and till now the White House has refused to comment anything on lifting the embargo. The significant inefficiency, dysfunctioning and acute shortage of the healthcare delivery from oxygen to bed availability to ventilator systems in the public sector do not match up with the rising cases. night curfews. Hence, instead of mere words to increase testing and vaccinations strong on-ground steps must be taken. This once again reflects the poor practices adopted by the Indian national healthcare administration. Fitch stated that despite several healthcare reforms, India remains badly placed to tackle the second wave of the virus. â€œThe continued lack of medical funding and healthcare infrastructure tell us the potential epidemic is to be worse in India if it is not adequately contained. With 8.5 hospital beds per 10,000 population and 8 physicians per 10,000, the countryâ€™s healthcare sector is not equipped for such a crisis. \" India still need experts to draft a efficient covid policy and lags behind US in that matter. Agreed that India has administered the largest number of vaccines to its population in the world we must keep in mind that it has vaccinated only about one in 25 people, compared with nearly one in two in Britain and one in three in the United States. But still the govt has chosen to continue exporting vaccines while the US ban on vaccine raw material export remains intact. There must have been forethought before exporting in such large numbers from SII before the big spike â€“ which is happening since April 2nd. Now the SII is skeptical about having enough supplies for its own population having exported more than administered. Now India has put a temporary hold on export but not completely banned it. The BBC reported that a five million doses had been held up to be exported by four weeks due to this sudden halt. This impacts jabs to the UK, Brazil, Saudi Arabia and Morocco. While not completely banning the export, the govt tries to secure import of a variety of COVID-19 vaccines authorised by Western countries and Japan -Pfizer (PFE.N), Johnson & Johnson (JNJ.N), and Moderna (MRNA.O) shots. Until now, SII has only administered 90% of shots given so far in India. This wouldnâ€™t have occurred if SII had taken the advantage of being the largest vaccine producer and secured for its own population first before moving on to exports and freely exporting vaccines to our 7 neighbours as a â€œgoodwill gestureâ€ from January and now suddenly halting the exports keeping their demands at bay too. The US and UK have kept all their vaccines for domestic consumption. EU countries are sharing within themselves. A few may call it a tactic to forge diplomatic relations or plain empathy, because at present, China and India are the only countries exporting almost half their vaccines to others, mostly those in the developing and underdeveloped world. In my opinion, providing something as crucial as vaccines for good intl relations while the GDP is dropping isnâ€™t very wise. Soaring virus cases in our country has also put Indiaâ€™s position as a global vaccine supplier at risk.', 3, 'new-blog-772026.png', '23 Jun, 2021', 'new-blog-772026');

-- --------------------------------------------------------

--
-- Table structure for table `fundraisers_tbl`
--

DROP TABLE IF EXISTS `fundraisers_tbl`;
CREATE TABLE IF NOT EXISTS `fundraisers_tbl` (
  `fundraise_id` int(11) NOT NULL AUTO_INCREMENT,
  `fundraiser_title` text NOT NULL,
  `raiser_email` varchar(255) NOT NULL,
  `raiser_mobile` varchar(255) NOT NULL,
  `payment_info` text NOT NULL,
  `description` text,
  `is_approved` varchar(2) DEFAULT '0',
  `date_posted` varchar(20) DEFAULT NULL,
  `url_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fundraise_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundraisers_tbl`
--

INSERT INTO `fundraisers_tbl` (`fundraise_id`, `fundraiser_title`, `raiser_email`, `raiser_mobile`, `payment_info`, `description`, `is_approved`, `date_posted`, `url_link`) VALUES
(4, 'Some fundraise for cancer', 'ayush@gmail.com', '99999999999', 'Do it in whichever way you like.', 'This is the description of fundraiser. Something more longer than what you are expecting to read in a jiffy.', '1', '20-06-2021', 'some-fundraise-for-cancer-167578');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

DROP TABLE IF EXISTS `users_tbl`;
CREATE TABLE IF NOT EXISTS `users_tbl` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `is_approved` varchar(2) DEFAULT '0',
  `is_admin` varchar(2) DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `user_email`, `user_password`, `user_name`, `is_approved`, `is_admin`) VALUES
(2, 'ayush@gmail.com', '123', 'Ayush', '1', '0'),
(3, 'admin@libertasactivism', 'admin@123', 'admin', '1', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
