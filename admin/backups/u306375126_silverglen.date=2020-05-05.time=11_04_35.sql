

CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `unitno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `altcontactno` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO admins VALUES
("1","Duane","DeSalvo","E302","duane.desalvo@gmail.com","admin","admin","306065801","507064834");




CREATE TABLE `chef` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chefname` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `altcontactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


INSERT INTO chef VALUES
("3","chef","324","asd","test@chef.com","chef"),
("5","Sam Columbi","4253726169","","samcolumbi@gmail.com","chef");




CREATE TABLE `dinertype` (
  `dinerid` int(11) NOT NULL,
  `dinername` varchar(255) NOT NULL,
  PRIMARY KEY (`dinerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO dinertype VALUES
("1","member"),
("2","guest"),
("3","freediner"),
("4","memberguest");




CREATE TABLE `diningdates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diningdate` date NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;


INSERT INTO diningdates VALUES
("1","2020-04-20","enabled"),
("2","2020-04-21","enabled"),
("3","2020-04-22","enabled"),
("4","2020-04-30","enabled"),
("5","2020-05-01","enabled"),
("6","2020-05-04","enabled"),
("7","2020-05-05","enabled"),
("8","2020-05-06","enabled"),
("9","2020-05-02","enabled"),
("10","2020-05-03","enabled"),
("11","2020-05-07","enabled"),
("12","2020-05-08","enabled"),
("13","2020-05-09","enabled"),
("14","2020-05-10","enabled"),
("15","2020-05-11","enabled"),
("16","2020-05-12","enabled"),
("17","2020-05-13","enabled"),
("18","2020-05-14","enabled"),
("19","2020-05-15","enabled"),
("20","2020-05-16","enabled"),
("21","2020-05-17","enabled");




CREATE TABLE `dish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dishname` text NOT NULL,
  `dishdescription` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;


INSERT INTO dish VALUES
("1","Pasta Bologna","Bolognese with red sauce reduction."),
("2","Chicken Burger","Deliciously seasoned 100% chicken breast"),
("3","Beef Burger","100% all natural Black Angus beef. Single and double patties offered for all Burgers."),
("4","Classic Hot Rueben Sandwich","with onion rings"),
("5","Meat Lasagna","With Asiago and Romano Cheese"),
("6","Chicken Alfredo over Penne Pasta","Juicy grilled chicken is served warm on a bed of fettuccine pasta with Parmesan cheese."),
("7","Denver Omelette","Bacon, Breakfast Potatoes"),
("8","Bacon Cheeseburger","With Bleu or Cheddar Cheese, French Fries"),
("9","Chipotle Burger (V)","With French Fries"),
("10","Beef Pot Roast","Mashed Potatoes and Gravy"),
("11","Almond Crusted Cod","Most and Flakey");




CREATE TABLE `freediner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookingid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dishname` varchar(255) NOT NULL,
  `roomid` int(50) NOT NULL,
  `room` varchar(255) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `guestno` varchar(255) NOT NULL,
  `isConfirmed` varchar(255) NOT NULL,
  `isCheckedin` varchar(255) NOT NULL,
  `diningdate` date NOT NULL,
  `diningtime` time NOT NULL,
  `dinerType` varchar(255) NOT NULL,
  `freedinermealprice` decimal(5,2) NOT NULL,
  `freedinermealtaxpercent` decimal(5,2) NOT NULL,
  `freedinermealtaxvalue` decimal(5,2) NOT NULL,
  `freedinermealtotalprice` decimal(5,2) NOT NULL,
  `grandtotal` decimal(5,2) NOT NULL,
  `freedinertotal` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO freediner VALUES
("1","SGFD2004200001","Free Diner","Classic Hot Rueben Sandwich","1","Main Dining Room","6","4","4","","","2020-04-20","11:20:00","freediner","14.00","0.00","0.00","14.00","56.00","0.00");




CREATE TABLE `host` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostname` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `altcontactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


INSERT INTO host VALUES
("4","host","4444","45345","mariott@host.com","host");




CREATE TABLE `menu` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `primarydishid` int(50) NOT NULL,
  `seconddishid` int(50) NOT NULL,
  `dishdate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `pickups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookingid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dishname` varchar(255) NOT NULL,
  `diningdate` date NOT NULL,
  `diningtime` time NOT NULL,
  `condono` varchar(255) NOT NULL,
  `membermealprice` decimal(5,2) NOT NULL,
  `membermealtaxpercent` decimal(5,2) NOT NULL,
  `membermealtaxvalue` decimal(5,2) NOT NULL,
  `membermealtotalprice` decimal(5,2) NOT NULL,
  `dinerType` varchar(255) NOT NULL,
  `grandtotal` decimal(5,2) NOT NULL,
  `isPickedup` varchar(255) NOT NULL,
  `timestamp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


INSERT INTO pickups VALUES
("1","","Duane and Toni","DeSalvo","Denver Omelette","2020-04-20","00:00:15","E302","14.00","0.00","0.00","14.00","Takeout","14.00","",""),
("2","","Duane and Toni","DeSalvo","Denver Omelette","2020-04-20","00:00:15","E302","14.00","0.00","0.00","14.00","Takeout","14.00","",""),
("3","","Duane and Toni","DeSalvo","Pasta Bologna","2020-05-04","18:00:00","E302","14.00","0.00","0.00","14.00","","14.00","",""),
("4","","Duane and Toni","DeSalvo","Chicken Burger","2020-05-05","20:00:00","E302","14.00","0.00","0.00","14.00","","14.00","",""),
("5","","Duane and Toni","DeSalvo","Meat Lasagna","2020-05-06","20:40:00","E302","14.00","0.00","0.00","14.00","","14.00","","");




CREATE TABLE `pickupweeklymenu` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `pickupdate` date NOT NULL,
  `roomid` int(50) NOT NULL,
  `pickuptime` time NOT NULL,
  `dishname1` varchar(255) NOT NULL,
  `dishname2` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;


INSERT INTO pickupweeklymenu VALUES
("1","2020-04-20","1","00:00:15","Denver Omelette","Meat Lasagna",""),
("2","2020-05-01","1","14:44:00","Chicken Burger","Classic Hot Rueben Sandwich",""),
("3","2020-05-04","1","18:00:00","Pasta Bologna","Beef Burger",""),
("4","2020-05-05","1","20:00:00","Pasta Bologna","Chicken Burger",""),
("5","2020-05-06","1","20:40:00","Beef Burger","Meat Lasagna",""),
("6","2020-05-07","0","15:10:00","Chicken Burger","Beef Burger","");




CREATE TABLE `pricingmodels` (
  `id` int(11) NOT NULL,
  `dinerid` varchar(255) NOT NULL,
  `mealprice` decimal(5,2) NOT NULL,
  `mealtaxpercent` decimal(5,2) NOT NULL,
  `mealtaxvalue` decimal(5,2) NOT NULL,
  `mealtotalprice` decimal(5,2) NOT NULL,
  `datemodified` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO pricingmodels VALUES
("1","1","14.00","0.00","0.00","14.00","30-01-2020 10:19:31 AM"),
("2","2","17.00","10.00","1.70","18.70","30-01-2020 10:19:57 AM"),
("3","3","0.00","0.00","0.00","0.00","2020-01-04 13:00:12"),
("4","4","14.00","0.00","0.00","14.00","04/03/2020");




CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookingid` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dishname` varchar(255) NOT NULL,
  `roomid` int(50) NOT NULL,
  `room` varchar(255) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `seatid` int(50) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `diningdate` date NOT NULL,
  `diningtime` time NOT NULL,
  `guestno` varchar(255) NOT NULL,
  `condono` varchar(255) NOT NULL,
  `freedinersmealtotalprice` decimal(5,2) DEFAULT NULL,
  `isConfirmed` varchar(255) NOT NULL,
  `isCheckedin` varchar(255) DEFAULT NULL,
  `dinerType` varchar(255) NOT NULL,
  `membermealprice` decimal(5,2) DEFAULT NULL,
  `membermealtaxpercent` decimal(5,2) DEFAULT NULL,
  `membermealtaxvalue` decimal(5,2) DEFAULT NULL,
  `membermealtotalprice` decimal(5,2) DEFAULT NULL,
  `guestmealprice` decimal(5,2) DEFAULT NULL,
  `guestmealtaxpercent` decimal(5,2) DEFAULT NULL,
  `guestmealtaxvalue` decimal(5,2) DEFAULT NULL,
  `guestmealtotalprice` decimal(5,2) DEFAULT NULL,
  `grandtotal` decimal(5,2) NOT NULL,
  `memberguestmealprice` decimal(5,2) DEFAULT NULL,
  `memberguestmealtaxpercent` decimal(5,2) DEFAULT NULL,
  `memberguestmealtaxvalue` decimal(5,2) DEFAULT NULL,
  `memberguestmealtotalprice` decimal(5,2) DEFAULT NULL,
  `freedinersmealprice` decimal(5,2) DEFAULT NULL,
  `freedinersmealtaxpercent` decimal(5,2) DEFAULT NULL,
  `freedinersmealtaxvalue` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;


INSERT INTO reservation VALUES
("1","SG2004200001","Duane and Toni","DeSalvo","Classic Hot Rueben Sandwich","1","Main Dining Room","5","0","4","2020-04-20","11:20:00","3","E302","0.00","","1","memberguest","0.00","0.00","0.00","14.00","0.00","0.00","0.00","0.00","56.00","14.00","0.00","0.00","14.00","0.00","0.00","0.00"),
("2","SG2004200002","Duane and Toni","DeSalvo","Classic Hot Rueben Sandwich","1","Main Dining Room","3","0","1","2020-04-20","11:20:00","0","E302","0.00","","1","member","0.00","0.00","0.00","14.00","0.00","0.00","0.00","0.00","14.00","14.00","0.00","0.00","14.00","0.00","0.00","0.00"),
("3","SG2004200003","Duane and Toni","DeSalvo","Classic Hot Rueben Sandwich","1","Main Dining Room","7","0","4","2020-04-20","11:20:00","3","E302","0.00","","1","memberguest","0.00","0.00","0.00","14.00","0.00","0.00","0.00","0.00","56.00","14.00","0.00","0.00","14.00","0.00","0.00","0.00"),
("4","SG2004200004","Duane and Toni","DeSalvo","Classic Hot Rueben Sandwich","1","Main Dining Room","8","0","4","2020-04-20","11:20:00","4","E302G","0.00","","","guest","0.00","0.00","0.00","0.00","17.00","10.00","1.70","17.00","68.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00"),
("5","SG2004210001","Duane and Toni","DeSalvo","Meat Lasagna","1","Main Dining Room","7","0","2","2020-04-21","08:30:00","1","E302","0.00","","1","memberguest","0.00","0.00","0.00","14.00","0.00","0.00","0.00","0.00","28.00","14.00","0.00","0.00","14.00","0.00","0.00","0.00"),
("7","SG2005050001","Duane and Toni","DeSalvo","Pasta Bologna","1","Main Dining Room","7","0","3","2020-05-05","20:00:00","2","E302","0.00","","1","memberguest","0.00","0.00","0.00","14.00","0.00","0.00","0.00","0.00","42.00","14.00","0.00","0.00","14.00","0.00","0.00","0.00"),
("8","SG2005050002","Duane and Toni","DeSalvo","Pasta Bologna","1","Main Dining Room","6","0","4","2020-05-05","20:00:00","4","E302G","0.00","","","guest","0.00","0.00","0.00","0.00","17.00","10.00","1.70","17.00","68.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00"),
("9","SG2005060001","Duane and Toni","DeSalvo","Pasta Bologna","1","Main Dining Room","9","0","4","2020-05-06","21:00:00","4","E302G","0.00","","","guest","0.00","0.00","0.00","0.00","17.00","10.00","1.70","17.00","68.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00"),
("10","SG2005050003","Duane and Toni","DeSalvo","Pasta Bologna","1","Main Dining Room","8","0","4","2020-05-05","21:00:00","3","E302","0.00","","1","memberguest","0.00","0.00","0.00","14.00","0.00","0.00","0.00","0.00","56.00","14.00","0.00","0.00","14.00","0.00","0.00","0.00"),
("11","SG2005040001","Duane and Toni","DeSalvo","Pasta Bologna","1","Main Dining Room","4","0","2","2020-05-04","21:00:00","1","E302","0.00","","","memberguest","0.00","0.00","0.00","14.00","0.00","0.00","0.00","0.00","28.00","14.00","0.00","0.00","14.00","0.00","0.00","0.00");




CREATE TABLE `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomname` varchar(255) NOT NULL,
  `totaltables` varchar(255) NOT NULL,
  `roomavailability` varchar(255) DEFAULT NULL,
  `productimage1` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO room VALUES
("1","Main Dining Room","13","1","SG Main Dining Room layout 2420.jpg");




CREATE TABLE `tablelayout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomid` int(50) NOT NULL,
  `tablename` varchar(255) NOT NULL,
  `totalseats` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;


INSERT INTO tablelayout VALUES
("1","1","1","5"),
("2","1","2","4"),
("3","1","3","4"),
("4","1","4","4"),
("5","1","5","8"),
("6","1","6","4"),
("7","1","7","4"),
("8","1","8","4"),
("9","1","9","4"),
("10","1","10","5"),
("11","1","11","5"),
("12","1","13","4"),
("13","1","14","4");




CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `unitno` varchar(255) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO userlog VALUES
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-03 23:08:28","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-03 23:08:28","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-03 23:08:28","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-03 23:08:28","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-03 23:08:28","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-03 23:08:28","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-03 23:08:28","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-01 18:18:03","","1"),
("0","admin","","::1\0\0\0\0\0\0\0\0\0\0\0\0\0","2020-05-03 23:08:28","","1");




CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `unitno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `altcontactno` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;


INSERT INTO users VALUES
("1","Duane and Toni","DeSalvo","","E302","duane.desalvo@gmail.com","E302","4254409304",""),
("2","Gary and Carolyn","Saaris/Reid","","W102","","W102","4254436979",""),
("3","Pattricia","Brown","","E304","","E304","4259570626",""),
("4","Blanche","Adams","","E208","","E208","4256441308",""),
("5","Gloria","Pong","","E201","","E201","4256435528",""),
("6","Susan","Bailey","","C209","","E209","4256412050",""),
("7","Colleen","Bangert","","E216","","E216","4254498940",""),
("8","Florence","Bannister","","C213","","C213","4257460116",""),
("9","Cathy","Barich","","E103","","E103","4254433643",""),
("10","Doris","Bean","","C114","","C114","4253789314",""),
("11","Marjorie","Benson","","E307","","E307","4255627921",""),
("12","Faith","Bentley","","C313","","C313","4256410755",""),
("13","Nina and David","Bergman/Reigel","","E112","","E112","4257461168",""),
("14","Jeanie","Boddy","","C205","","C205","4256439256",""),
("15","Barbara","Brachtl","","E301","","E301","2067997667","");




CREATE TABLE `weeklymenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diningdate` date NOT NULL,
  `diningtime` time NOT NULL,
  `roomid` int(50) NOT NULL,
  `tableid` int(50) NOT NULL,
  `dishname1` varchar(255) NOT NULL,
  `dishname2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;


INSERT INTO weeklymenu VALUES
("1","2020-05-04","19:30:00","1","1","Pasta Bologna","Chicken Burger"),
("2","2020-05-04","19:30:00","1","2","Pasta Bologna","Chicken Burger"),
("3","2020-05-04","19:30:00","1","3","Pasta Bologna","Chicken Burger"),
("4","2020-05-04","19:30:00","1","4","Pasta Bologna","Chicken Burger"),
("5","2020-05-04","19:30:00","1","5","Pasta Bologna","Chicken Burger"),
("6","2020-05-04","19:30:00","1","6","Pasta Bologna","Chicken Burger"),
("7","2020-05-04","19:30:00","1","7","Pasta Bologna","Chicken Burger"),
("8","2020-05-04","19:30:00","1","8","Pasta Bologna","Chicken Burger"),
("9","2020-05-04","19:30:00","1","9","Pasta Bologna","Chicken Burger"),
("10","2020-05-04","19:30:00","1","10","Pasta Bologna","Chicken Burger"),
("11","2020-05-04","19:30:00","1","11","Pasta Bologna","Chicken Burger"),
("12","2020-05-04","19:30:00","1","12","Pasta Bologna","Chicken Burger"),
("13","2020-05-04","19:30:00","1","13","Pasta Bologna","Chicken Burger"),
("14","2020-05-05","19:30:00","1","1","Beef Burger","Meat Lasagna"),
("15","2020-05-05","19:30:00","1","2","Beef Burger","Meat Lasagna"),
("16","2020-05-05","19:30:00","1","3","Beef Burger","Meat Lasagna"),
("17","2020-05-05","19:30:00","1","4","Beef Burger","Meat Lasagna"),
("18","2020-05-05","19:30:00","1","5","Beef Burger","Meat Lasagna"),
("19","2020-05-05","19:30:00","1","6","Beef Burger","Meat Lasagna"),
("20","2020-05-05","19:30:00","1","7","Beef Burger","Meat Lasagna"),
("21","2020-05-05","19:30:00","1","8","Beef Burger","Meat Lasagna"),
("22","2020-05-05","19:30:00","1","9","Beef Burger","Meat Lasagna"),
("23","2020-05-05","19:30:00","1","10","Beef Burger","Meat Lasagna"),
("24","2020-05-05","19:30:00","1","11","Beef Burger","Meat Lasagna"),
("25","2020-05-05","19:30:00","1","12","Beef Burger","Meat Lasagna"),
("26","2020-05-05","19:30:00","1","13","Beef Burger","Meat Lasagna"),
("27","2020-05-06","19:00:00","1","1","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("28","2020-05-06","19:00:00","1","2","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("29","2020-05-06","19:00:00","1","3","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("30","2020-05-06","19:00:00","1","4","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("31","2020-05-06","19:00:00","1","5","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("32","2020-05-06","19:00:00","1","6","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("33","2020-05-06","19:00:00","1","7","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("34","2020-05-06","19:00:00","1","8","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("35","2020-05-06","19:00:00","1","9","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("36","2020-05-06","19:00:00","1","10","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("37","2020-05-06","19:00:00","1","11","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("38","2020-05-06","19:00:00","1","12","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("39","2020-05-06","19:00:00","1","13","Chicken Alfredo over Penne Pasta","Denver Omelette"),
("40","2020-05-07","19:00:00","1","1","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("41","2020-05-07","19:00:00","1","2","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("42","2020-05-07","19:00:00","1","3","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("43","2020-05-07","19:00:00","1","4","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("44","2020-05-07","19:00:00","1","5","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("45","2020-05-07","19:00:00","1","6","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("46","2020-05-07","19:00:00","1","7","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("47","2020-05-07","19:00:00","1","8","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("48","2020-05-07","19:00:00","1","9","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("49","2020-05-07","19:00:00","1","10","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("50","2020-05-07","19:00:00","1","11","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("51","2020-05-07","19:00:00","1","12","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("52","2020-05-07","19:00:00","1","13","Chicken Alfredo over Penne Pasta","Bacon Cheeseburger"),
("53","2020-05-08","19:00:00","1","1","Chipotle Burger (V)","Beef Pot Roast"),
("54","2020-05-08","19:00:00","1","2","Chipotle Burger (V)","Beef Pot Roast"),
("55","2020-05-08","19:00:00","1","3","Chipotle Burger (V)","Beef Pot Roast"),
("56","2020-05-08","19:00:00","1","4","Chipotle Burger (V)","Beef Pot Roast"),
("57","2020-05-08","19:00:00","1","5","Chipotle Burger (V)","Beef Pot Roast"),
("58","2020-05-08","19:00:00","1","6","Chipotle Burger (V)","Beef Pot Roast"),
("59","2020-05-08","19:00:00","1","7","Chipotle Burger (V)","Beef Pot Roast"),
("60","2020-05-08","19:00:00","1","8","Chipotle Burger (V)","Beef Pot Roast"),
("61","2020-05-08","19:00:00","1","9","Chipotle Burger (V)","Beef Pot Roast"),
("62","2020-05-08","19:00:00","1","10","Chipotle Burger (V)","Beef Pot Roast"),
("63","2020-05-08","19:00:00","1","11","Chipotle Burger (V)","Beef Pot Roast"),
("64","2020-05-08","19:00:00","1","12","Chipotle Burger (V)","Beef Pot Roast"),
("65","2020-05-08","19:00:00","1","13","Chipotle Burger (V)","Beef Pot Roast"),
("66","2020-05-11","19:00:00","1","1","Beef Burger","Bacon Cheeseburger"),
("67","2020-05-11","19:00:00","1","2","Beef Burger","Bacon Cheeseburger"),
("68","2020-05-11","19:00:00","1","3","Beef Burger","Bacon Cheeseburger"),
("69","2020-05-11","19:00:00","1","4","Beef Burger","Bacon Cheeseburger"),
("70","2020-05-11","19:00:00","1","5","Beef Burger","Bacon Cheeseburger"),
("71","2020-05-11","19:00:00","1","6","Beef Burger","Bacon Cheeseburger"),
("72","2020-05-11","19:00:00","1","7","Beef Burger","Bacon Cheeseburger"),
("73","2020-05-11","19:00:00","1","8","Beef Burger","Bacon Cheeseburger"),
("74","2020-05-11","19:00:00","1","9","Beef Burger","Bacon Cheeseburger"),
("75","2020-05-11","19:00:00","1","10","Beef Burger","Bacon Cheeseburger"),
("76","2020-05-11","19:00:00","1","11","Beef Burger","Bacon Cheeseburger"),
("77","2020-05-11","19:00:00","1","12","Beef Burger","Bacon Cheeseburger"),
("78","2020-05-11","19:00:00","1","13","Beef Burger","Bacon Cheeseburger"),
("79","2020-05-12","20:00:00","1","1","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("80","2020-05-12","20:00:00","1","2","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("81","2020-05-12","20:00:00","1","3","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("82","2020-05-12","20:00:00","1","4","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("83","2020-05-12","20:00:00","1","5","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("84","2020-05-12","20:00:00","1","6","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("85","2020-05-12","20:00:00","1","7","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("86","2020-05-12","20:00:00","1","8","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("87","2020-05-12","20:00:00","1","9","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("88","2020-05-12","20:00:00","1","10","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("89","2020-05-12","20:00:00","1","11","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("90","2020-05-12","20:00:00","1","12","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("91","2020-05-12","20:00:00","1","13","Classic Hot Rueben Sandwich","Bacon Cheeseburger"),
("92","2020-05-13","19:30:00","1","2","Chicken Burger","Almond Crusted Cod"),
("93","2020-05-13","19:30:00","1","5","Chicken Burger","Almond Crusted Cod"),
("94","2020-05-13","19:30:00","1","7","Chicken Burger","Almond Crusted Cod"),
("95","2020-05-13","19:30:00","1","9","Chicken Burger","Almond Crusted Cod"),
("96","2020-05-13","19:30:00","1","12","Chicken Burger","Almond Crusted Cod"),
("97","2020-05-14","20:30:00","1","3","Meat Lasagna","Bacon Cheeseburger"),
("98","2020-05-14","20:30:00","1","5","Meat Lasagna","Bacon Cheeseburger"),
("99","2020-05-14","20:30:00","1","7","Meat Lasagna","Bacon Cheeseburger"),
("100","2020-05-14","20:30:00","1","10","Meat Lasagna","Bacon Cheeseburger");
INSERT INTO weeklymenu VALUES
("101","2020-05-14","20:30:00","1","12","Meat Lasagna","Bacon Cheeseburger"),
("102","2020-05-15","21:30:00","1","2","Pasta Bologna","Beef Pot Roast"),
("103","2020-05-15","21:30:00","1","3","Pasta Bologna","Beef Pot Roast"),
("104","2020-05-15","21:30:00","1","5","Pasta Bologna","Beef Pot Roast"),
("105","2020-05-15","21:30:00","1","7","Pasta Bologna","Beef Pot Roast"),
("106","2020-05-15","21:30:00","1","9","Pasta Bologna","Beef Pot Roast"),
("107","2020-05-15","21:30:00","1","12","Pasta Bologna","Beef Pot Roast");


