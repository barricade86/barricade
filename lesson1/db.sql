create table News(NewsId INTEGER primary key auto_increment,NewsHeader VARCHAR(100) NOT NULL,NewsPreview TINYTEXT NOT NULL,NewsText TEXT NOT NULL,publishdate datetime,tags VARCHAR(50));*/
ALTER TABLE `devastator`.`news` CHANGE COLUMN `NewsPreview` `NewsPreview` MEDIUMTEXT NOT NULL ;

