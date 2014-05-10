/*
Navicat SQLite Data Transfer

Source Server         : softdevelop
Source Server Version : 30706
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30706
File Encoding         : 65001

Date: 2014-05-10 10:39:11
*/

PRAGMA foreign_keys = OFF;

-- ----------------------------
-- Table structure for "main"."_sd_product_categories_old_20140212"
-- ----------------------------
DROP TABLE "main"."_sd_product_categories_old_20140212";
CREATE TABLE "_sd_product_categories_old_20140212" (
	"id" INTEGER PRIMARY KEY  NOT NULL ,
	"name" VARCHAR,
	"alias" VARCHAR,
	"image" VARCHAR,
	"description" TEXT,
	"lft" INTEGER,
	"rght" INTEGER,
	"parent_id" INTEGER,
	"level" INTEGER,
	"create_time" DATETIME,
	"update_time" DATETIME
);

-- ----------------------------
-- Records of _sd_product_categories_old_20140212
-- ----------------------------
INSERT INTO "main"."_sd_product_categories_old_20140212" VALUES (1, 'Test categories2', 'test-categories2', null, 'ccc', 1, 2, 3, null, null, null);
INSERT INTO "main"."_sd_product_categories_old_20140212" VALUES (2, 'Test categories 5', 'test-categories-5', null, null, 2, 1, null, null, null, null);
INSERT INTO "main"."_sd_product_categories_old_20140212" VALUES (3, 'Sprot', 'sprot', null, null, 12, 2, 2, null, null, '2014-02-12 10:24:07');

-- ----------------------------
-- Table structure for "main"."_sd_product_images_old_20131030"
-- ----------------------------
DROP TABLE "main"."_sd_product_images_old_20131030";
CREATE TABLE "_sd_product_images_old_20131030" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"product_id"  VARCHAR(16),
"name"  VARCHAR(64),
"image"  VARCHAR(255),
"description"  TEXT,
"priority"  INTEGER DEFAULT (0),
"is_published"  tinyint(1) NOT NULL DEFAULT (1),
"create_time"  DATETIME,
"update_time"  DATETIME,
CONSTRAINT "product" FOREIGN KEY ("product_id") REFERENCES "sd_products" ("id") ON DELETE CASCADE ON UPDATE CASCADE,
UNIQUE ("id" ASC)
);

-- ----------------------------
-- Records of _sd_product_images_old_20131030
-- ----------------------------

-- ----------------------------
-- Table structure for "main"."_sd_project_image_old_20140402"
-- ----------------------------
DROP TABLE "main"."_sd_project_image_old_20140402";
CREATE TABLE "_sd_project_image_old_20140402" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"project_id"  INTEGER NOT NULL,
"image"  VARCHAR(255) NOT NULL,
"create_time"  DATETIME DEFAULT NULL,
"update_time"  DATETIME DEFAULT NULL
);

-- ----------------------------
-- Records of _sd_project_image_old_20140402
-- ----------------------------

-- ----------------------------
-- Table structure for "main"."_sd_project_image_old_20140402_1"
-- ----------------------------
DROP TABLE "main"."_sd_project_image_old_20140402_1";
CREATE TABLE "_sd_project_image_old_20140402_1" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"project_id"  INTEGER NOT NULL,
"image"  VARCHAR(255) NOT NULL,
"create_time"  DATETIME DEFAULT NULL,
"update_time"  DATETIME DEFAULT NULL
);

-- ----------------------------
-- Records of _sd_project_image_old_20140402_1
-- ----------------------------

-- ----------------------------
-- Table structure for "main"."_sd_project_old_20140401"
-- ----------------------------
DROP TABLE "main"."_sd_project_old_20140401";
CREATE TABLE "_sd_project_old_20140401" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"title"  VARCHAR(127) NOT NULL,
"short_description"  VARCHAR(1000) NOT NULL,
"description"  TEXT NOT NULL,
"create_time"  DATETIME DEFAULT NULL,
"update_time"  DATETIME DEFAULT NULL
);

-- ----------------------------
-- Records of _sd_project_old_20140401
-- ----------------------------
INSERT INTO "main"."_sd_project_old_20140401" VALUES (1, 'Web develop', X'3C703E0D0A093C7374726F6E673E5061737365706172746F75742077656E742074696D69646C79206173686F7265206F6E207468697320736F20637572696F7573207465727269746F7279206F662074686520536F6E73206F66207468652053756E2E20486520686164206E6F7468696E672062657474657220746F20646F207468616E2C2074616B696E67206368616E636520666F72206869732067756964652C20746F2077616E6465723C2F7374726F6E673E3C2F703E0D0A', X'3C703E0D0A093C7370616E207374796C653D22666F6E742D73697A653A313470783B223E3C7370616E207374796C653D22666F6E742D66616D696C793A617269616C2C2068656C7665746963612C2073616E732D73657269663B223E3C7370616E207374796C653D22636F6C6F723A207267622835312C2035312C203531293B206C696E652D6865696768743A20323570783B206261636B67726F756E642D636F6C6F723A20726762283234392C203234392C20323439293B223E546865204361726E6174696320616E63686F726564206174207468652071756179206E6561722074686520637573746F6D2D686F7573652C20696E20746865206D69647374206F6620612063726F7764206F662073686970732062656172696E672074686520666C616773206F6620616C6C206E6174696F6E732E205061737365706172746F75742077656E742074696D69646C79206173686F7265206F6E207468697320736F20637572696F7573207465727269746F7279206F662074686520536F6E73206F66207468652053756E2E20486520686164206E6F7468696E672062657474657220746F20646F207468616E2C2074616B696E67206368616E636520666F72206869732067756964652C20746F2077616E6465722061696D6C6573736C79207468726F756768207468652073747265657473206F6620596F6B6F68616D612E20486520666F756E642068696D73656C6620617420666972737420696E20612074686F726F7567686C79204575726F7065616E20717561727465722C2074686520686F7573657320686176696E67206C6F772066726F6E74732C20616E64206265696E672061646F726E6564207769746820766572616E6461732C2062656E656174682077686963682068652063617567687420676C696D70736573206F66206E65617420706572697374796C65732E20546869732071756172746572206F636375706965642C20776974682069747320737472656574732C20737175617265732C20646F636B732C20616E642077617265686F757365732C20616C6C20746865207370616365206265747765656E20746865202671756F743B70726F6D6F6E746F7279206F6620746865205472656174792671756F743B20616E64207468652072697665722E20486572652C20617320617420486F6E67204B6F6E6720616E642043616C63757474612C2077657265206D697865642063726F776473206F6620616C6C3C2F7370616E3E3C2F7370616E3E3C2F7370616E3E3C2F703E0D0A', '2014-04-01 10:47:43', null);
INSERT INTO "main"."_sd_project_old_20140401" VALUES (2, 'Android', X'3C703E0D0A093C7374726F6E673E266E6273703B416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F696420416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F696420416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F696420266E6273703B416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F696420416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F696420416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F69643C2F7374726F6E673E3C2F703E0D0A', X'3C703E0D0A093C7370616E207374796C653D22666F6E742D73697A653A313470783B223E3C7370616E207374796C653D22666F6E742D66616D696C793A617269616C2C2068656C7665746963612C2073616E732D73657269663B223E5061737365706172746F75742077656E742074696D69646C79206173686F7265206F6E207468697320736F20637572696F7573207465727269746F7279206F662074686520536F6E73206F66207468652053756E2E20486520686164206E6F7468696E672062657474657220746F20646F207468616E2C2074616B696E67206368616E636520666F72206869732067756964652C20746F2077616E6465723C2F7370616E3E3C2F7370616E3E3C2F703E0D0A', '2014-04-01 10:51:02', null);

-- ----------------------------
-- Table structure for "main"."_sd_service_categories_old_20140212"
-- ----------------------------
DROP TABLE "main"."_sd_service_categories_old_20140212";
CREATE TABLE "_sd_service_categories_old_20140212" (
	"id" INTEGER PRIMARY KEY  NOT NULL ,
	"name" VARCHAR,
	"alias" VARCHAR,
	"image" VARCHAR,
	"description" TEXT,
	"lft" INTEGER,
	"rght" INTEGER,
	"parent_id" INTEGER,
	"level" INTEGER,
	"create_time" DATETIME,
	"update_time" DATETIME
);

-- ----------------------------
-- Records of _sd_service_categories_old_20140212
-- ----------------------------
INSERT INTO "main"."_sd_service_categories_old_20140212" VALUES (1, 'ser 2', 'ser-2', null, null, 2, 3, 4, 1, null, '2014-02-12 11:25:43');
INSERT INTO "main"."_sd_service_categories_old_20140212" VALUES (2, 'ser3', 'ser3', null, null, null, null, null, 1, null, null);
INSERT INTO "main"."_sd_service_categories_old_20140212" VALUES (3, 'Ser 4', 'ser-4', null, null, null, null, null, 1, null, null);
INSERT INTO "main"."_sd_service_categories_old_20140212" VALUES (4, 'ser 5', 'ser-5', null, null, null, null, null, null, null, null);
INSERT INTO "main"."_sd_service_categories_old_20140212" VALUES (5, 'root', 'root', null, null, 1, 10, null, 1, null, null);

-- ----------------------------
-- Table structure for "main"."_sd_static_pages_old_20131120"
-- ----------------------------
DROP TABLE "main"."_sd_static_pages_old_20131120";
CREATE TABLE "_sd_static_pages_old_20131120" (
	"id" INTEGER PRIMARY KEY  NOT NULL ,
	"title" varchar(128) NOT NULL ,
	"alias" varchar(128) NOT NULL ,
	"image" varchar(128) DEFAULT (NULL) ,
	"description" text,
	"content" text, 
	"position" varchar(128),
	"section" varchar(128), 
	"show_on_index" bool DEFAULT 0, 
	"priority" int(11) DEFAULT ('0') ,
	"create_time" datetime DEFAULT (NULL) ,
	"update_time" datetime DEFAULT (NULL) ,
	"is_published" tinyint(1) DEFAULT ('1')
);

-- ----------------------------
-- Records of _sd_static_pages_old_20131120
-- ----------------------------
INSERT INTO "main"."_sd_static_pages_old_20131120" VALUES (1, 'About us', 'About-us', '13834673913.jpg', 'About us About us About us
About us About us About us
About us About us About us
About us About us About us
About us About us About us
About us About us About us
About us About us About us
About us About us About us', null, null, null, 0, 2, null, '2013-11-20 04:01:12', 1);
INSERT INTO "main"."_sd_static_pages_old_20131120" VALUES (2, 'vdvdvd', 'vdvd', '13834673771.jpg', null, null, 'top', null, 0, 9, '2013-10-29 05:07:20', '2013-11-20 04:01:12', 1);
INSERT INTO "main"."_sd_static_pages_old_20131120" VALUES (3, 'kukd', 'kukd', '13831225142.jpg', null, null, 'top', null, 0, null, '2013-10-30 09:34:00', '2013-11-20 04:01:14', 1);

-- ----------------------------
-- Table structure for "main"."_sd_team_old_20140213"
-- ----------------------------
DROP TABLE "main"."_sd_team_old_20140213";
CREATE TABLE "_sd_team_old_20140213" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"name"  varchar(128) NOT NULL,
"position"  varchar(128) NOT NULL,
"image"  varchar(128) NOT NULL,
"showIndex"  tinyint(1)
);

-- ----------------------------
-- Records of _sd_team_old_20140213
-- ----------------------------
INSERT INTO "main"."_sd_team_old_20140213" VALUES (1, 'Hai Duong', 'CEO', '139228338613832796079.jpg', 1);
INSERT INTO "main"."_sd_team_old_20140213" VALUES (2, 'Linh Duong', 'Founder', '1392283566linhduong.jpg', 1);

-- ----------------------------
-- Table structure for "main"."AuthAssignment"
-- ----------------------------
DROP TABLE "main"."AuthAssignment";
CREATE TABLE AuthAssignment
(
   itemname varchar(64) not null,
   userid varchar(64) not null,
   bizrule text,
   data text,
   primary key (itemname,userid),
   foreign key (itemname) references AuthItem (name) on delete cascade on update cascade
);

-- ----------------------------
-- Records of AuthAssignment
-- ----------------------------

-- ----------------------------
-- Table structure for "main"."AuthItem"
-- ----------------------------
DROP TABLE "main"."AuthItem";
CREATE TABLE AuthItem
(
   name varchar(64) not null,
   type integer not null,
   description text,
   bizrule text,
   data text,
   primary key (name)
);

-- ----------------------------
-- Records of AuthItem
-- ----------------------------

-- ----------------------------
-- Table structure for "main"."AuthItemChild"
-- ----------------------------
DROP TABLE "main"."AuthItemChild";
CREATE TABLE AuthItemChild
(
   parent varchar(64) not null,
   child varchar(64) not null,
   primary key (parent,child),
   foreign key (parent) references AuthItem (name) on delete cascade on update cascade,
   foreign key (child) references AuthItem (name) on delete cascade on update cascade
);

-- ----------------------------
-- Records of AuthItemChild
-- ----------------------------

-- ----------------------------
-- Table structure for "main"."categories"
-- ----------------------------
DROP TABLE "main"."categories";
CREATE TABLE "categories" (
"id"  INTEGER NOT NULL,
"name"  VARCHAR,
"alias"  VARCHAR,
"image"  VARCHAR,
"created"  DATETIME,
"modified"  DATETIME,
"lft"  INTEGER,
"rgt"  INTEGER,
"level"  tinyint DEFAULT 0,
"root"  tinyint,
"parent_id"  INTEGER,
"description"  TEXT,
PRIMARY KEY ("id" ASC)
);

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO "main"."categories" VALUES (1, 'Root', null, null, null, null, 1, 22, 1, 1, null, null);
INSERT INTO "main"."categories" VALUES (2, 'Music', null, null, null, null, 8, 15, 2, 1, 1, null);
INSERT INTO "main"."categories" VALUES (3, 'Movie', null, null, null, null, 16, 17, 2, 1, 1, null);
INSERT INTO "main"."categories" VALUES (4, 'Sport', null, null, null, null, 2, 3, 2, 1, 1, null);
INSERT INTO "main"."categories" VALUES (5, 'Football', null, null, null, null, 9, 10, 3, 1, 2, null);
INSERT INTO "main"."categories" VALUES (6, 'Swimming', 'swimming', null, null, null, 19, 20, 3, 1, 8, null);
INSERT INTO "main"."categories" VALUES (7, 'Dance', null, null, null, null, 6, 7, 2, 1, 1, null);
INSERT INTO "main"."categories" VALUES (8, 'Economic', null, null, null, null, 18, 21, 2, 1, 1, null);
INSERT INTO "main"."categories" VALUES (9, 'Action', null, null, null, null, 13, 14, 3, 1, 2, null);
INSERT INTO "main"."categories" VALUES (10, 'Classic', 'classic', null, null, null, 4, 5, 2, 1, 1, null);
INSERT INTO "main"."categories" VALUES (11, 'Romantic', 'romantic', null, null, null, 11, 12, 3, 1, 2, null);

-- ----------------------------
-- Table structure for "main"."log"
-- ----------------------------
DROP TABLE "main"."log";
CREATE TABLE 'log' (
	"id" integer PRIMARY KEY AUTOINCREMENT NOT NULL,
	"level" varchar(128),
	"category" varchar(128),
	"logtime" integer,
	"message" text
);

-- ----------------------------
-- Records of log
-- ----------------------------

-- ----------------------------
-- Table structure for "main"."Rights"
-- ----------------------------
DROP TABLE "main"."Rights";
CREATE TABLE Rights
(
	itemname varchar(64) not null,
	type integer not null,
	weight integer not null,
	primary key (itemname),
	foreign key (itemname) references AuthItem (name) on delete cascade on update cascade
);

-- ----------------------------
-- Records of Rights
-- ----------------------------

-- ----------------------------
-- Table structure for "main"."sd_banners"
-- ----------------------------
DROP TABLE "main"."sd_banners";
CREATE TABLE "sd_banners" (
	"id" INTEGER PRIMARY KEY  AUTOINCREMENT  NOT NULL , 
	"title" VARCHAR, 
	"image" VARCHAR, 
	"description" text, 
	"url" VARCHAR,
	"priority" INTEGER, 
	"create_time" DATETIME, 
	"update_time" DATETIME
);

-- ----------------------------
-- Records of sd_banners
-- ----------------------------
INSERT INTO "main"."sd_banners" VALUES (1, 'Testes', '13831038402.jpg', null, null, 3, null, '2013-11-20 05:12:04');
INSERT INTO "main"."sd_banners" VALUES (2, 'Test', '138492058313831038402.jpg', null, null, 2, '2013-11-20 05:09:43', '2013-11-20 05:12:04');
INSERT INTO "main"."sd_banners" VALUES (3, 'aaa', '138492059413831038402.jpg', null, null, 1, '2013-11-20 05:09:54', '2013-11-20 05:12:04');

-- ----------------------------
-- Table structure for "main"."sd_contacts"
-- ----------------------------
DROP TABLE "main"."sd_contacts";
CREATE TABLE "sd_contacts" ("id" INTEGER PRIMARY KEY  NOT NULL ,"title" varchar(128) NOT NULL ,"email" varchar(128) NOT NULL , "name" varchar(128) NOT NULL ,  "content" text, "phone" VARCHAR(128), "address" VARCHAR(128), "city" VARCHAR(128), "country" VARCHAR(128), "created" datetime DEFAULT (NULL) , "status" tinyint(1) DEFAULT ('0'));

-- ----------------------------
-- Records of sd_contacts
-- ----------------------------
INSERT INTO "main"."sd_contacts" VALUES (1, 'Test', 'khuong@gmail.com', 'khuong', 'qwerty', 123456789, 'Cam Le', 'Da Nang', 'Viet Nam', null, 1);
INSERT INTO "main"."sd_contacts" VALUES (2, 'Test', 'congkhuong1308@gmail.com', 'congkhuong', 'hello!', null, null, null, null, null, 0);
INSERT INTO "main"."sd_contacts" VALUES (3, 'Ten', 'khuong@gmail.com', 'Ten', 'TenTen', null, null, null, null, null, 0);
INSERT INTO "main"."sd_contacts" VALUES (4, 'Test contact', 'congkhuong1308@gmail.com', 'Test contact', 'Test contact', null, null, null, null, null, 0);
INSERT INTO "main"."sd_contacts" VALUES (5, 'Test contact2', 'congkhuong1308@gmail.com', 'Test contact2', 'Test contact2', null, null, null, null, null, 0);

-- ----------------------------
-- Table structure for "main"."sd_countries"
-- ----------------------------
DROP TABLE "main"."sd_countries";
CREATE TABLE "sd_countries" (
  "id"  INTEGER PRIMARY KEY  AUTOINCREMENT  NOT NULL, 
  "name" varchar(255) DEFAULT NULL,
  "c_code" varchar(255) DEFAULT NULL,
  "order" int(4) DEFAULT '0'
);

-- ----------------------------
-- Records of sd_countries
-- ----------------------------
INSERT INTO "main"."sd_countries" VALUES (12, 'Aruba', 297, null);
INSERT INTO "main"."sd_countries" VALUES (13, 'Ashmore & Cartier', 0, null);
INSERT INTO "main"."sd_countries" VALUES (14, 'Australia', 61, 5);
INSERT INTO "main"."sd_countries" VALUES (15, 'Austria', 43, null);
INSERT INTO "main"."sd_countries" VALUES (16, 'Azerbaijan', 994, null);
INSERT INTO "main"."sd_countries" VALUES (17, 'The Bahamas', 1242, null);
INSERT INTO "main"."sd_countries" VALUES (18, 'Bahrain', 973, null);
INSERT INTO "main"."sd_countries" VALUES (19, 'Baker Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (20, 'Bangladesh', 880, null);
INSERT INTO "main"."sd_countries" VALUES (21, 'Barbados', 1246, null);
INSERT INTO "main"."sd_countries" VALUES (22, 'Bassas da India', 0, null);
INSERT INTO "main"."sd_countries" VALUES (23, 'Belarus', 375, null);
INSERT INTO "main"."sd_countries" VALUES (24, 'Belgium', 32, null);
INSERT INTO "main"."sd_countries" VALUES (25, 'Belize', 501, null);
INSERT INTO "main"."sd_countries" VALUES (26, 'Benin', 229, null);
INSERT INTO "main"."sd_countries" VALUES (27, 'Bermuda', 1441, null);
INSERT INTO "main"."sd_countries" VALUES (28, 'Bhutan', 975, null);
INSERT INTO "main"."sd_countries" VALUES (29, 'Bolivia', 591, null);
INSERT INTO "main"."sd_countries" VALUES (30, 'Bosnia & Herzegovina', 387, null);
INSERT INTO "main"."sd_countries" VALUES (31, 'Botswana', 267, null);
INSERT INTO "main"."sd_countries" VALUES (32, 'Bouvet Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (33, 'Brazil', 55, null);
INSERT INTO "main"."sd_countries" VALUES (34, 'British Indian Ocean Territory', 0, null);
INSERT INTO "main"."sd_countries" VALUES (35, 'British Virgin Islands', 1, null);
INSERT INTO "main"."sd_countries" VALUES (36, 'Brunei Darussalam', 673, null);
INSERT INTO "main"."sd_countries" VALUES (37, 'Bulgaria', 359, null);
INSERT INTO "main"."sd_countries" VALUES (38, 'Burkina Faso', 226, null);
INSERT INTO "main"."sd_countries" VALUES (39, 'Burma', 95, null);
INSERT INTO "main"."sd_countries" VALUES (40, 'Burundi', 257, null);
INSERT INTO "main"."sd_countries" VALUES (41, 'Cambodia', 855, null);
INSERT INTO "main"."sd_countries" VALUES (42, 'Cameroon', 237, null);
INSERT INTO "main"."sd_countries" VALUES (43, 'Canada', 1204, null);
INSERT INTO "main"."sd_countries" VALUES (44, 'Cape Verde', 238, null);
INSERT INTO "main"."sd_countries" VALUES (45, 'Cayman Islands', 1345, null);
INSERT INTO "main"."sd_countries" VALUES (46, 'Central African Republic', 236, null);
INSERT INTO "main"."sd_countries" VALUES (47, 'Chad', 235, null);
INSERT INTO "main"."sd_countries" VALUES (48, 'Chile', 56, null);
INSERT INTO "main"."sd_countries" VALUES (49, 'China', 86, null);
INSERT INTO "main"."sd_countries" VALUES (50, 'Christmas Island', 61, null);
INSERT INTO "main"."sd_countries" VALUES (51, 'Clipperton Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (52, 'Cocos (Keeling) Islands', 0, null);
INSERT INTO "main"."sd_countries" VALUES (53, 'Colombia', 57, null);
INSERT INTO "main"."sd_countries" VALUES (54, 'Comoros', 269, null);
INSERT INTO "main"."sd_countries" VALUES (55, 'Congo ', 236, null);
INSERT INTO "main"."sd_countries" VALUES (57, 'Cook Islands', 682, null);
INSERT INTO "main"."sd_countries" VALUES (58, 'Coral Sea Islands', 0, null);
INSERT INTO "main"."sd_countries" VALUES (59, 'Costa Rica', 506, null);
INSERT INTO "main"."sd_countries" VALUES (60, 'Cote d''Ivoire', 225, null);
INSERT INTO "main"."sd_countries" VALUES (61, 'Croatia', 385, null);
INSERT INTO "main"."sd_countries" VALUES (62, 'Cuba', 53, null);
INSERT INTO "main"."sd_countries" VALUES (63, 'Cyprus', 357, null);
INSERT INTO "main"."sd_countries" VALUES (64, 'Czech Republic', 420, null);
INSERT INTO "main"."sd_countries" VALUES (65, 'Denmark', 45, null);
INSERT INTO "main"."sd_countries" VALUES (66, 'Djibouti', 253, null);
INSERT INTO "main"."sd_countries" VALUES (67, 'Dominica', 1767, null);
INSERT INTO "main"."sd_countries" VALUES (68, 'Dominican Republic', 1809, null);
INSERT INTO "main"."sd_countries" VALUES (69, 'East Timor', 670, null);
INSERT INTO "main"."sd_countries" VALUES (70, 'Ecuador', 593, null);
INSERT INTO "main"."sd_countries" VALUES (71, 'Egypt', 20, null);
INSERT INTO "main"."sd_countries" VALUES (72, 'El Salvador', 503, null);
INSERT INTO "main"."sd_countries" VALUES (73, 'Equatorial Guinea', 240, null);
INSERT INTO "main"."sd_countries" VALUES (74, 'Eritrea', 291, null);
INSERT INTO "main"."sd_countries" VALUES (75, 'Estonia', 372, null);
INSERT INTO "main"."sd_countries" VALUES (76, 'Ethiopia', 251, null);
INSERT INTO "main"."sd_countries" VALUES (77, 'Europa Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (78, 'Falkland Islands', 500, null);
INSERT INTO "main"."sd_countries" VALUES (79, 'Faroe Islands', 298, null);
INSERT INTO "main"."sd_countries" VALUES (80, 'Fiji', 679, null);
INSERT INTO "main"."sd_countries" VALUES (81, 'Finland', 358, null);
INSERT INTO "main"."sd_countries" VALUES (82, 'France', 33, null);
INSERT INTO "main"."sd_countries" VALUES (84, 'French Guiana', 594, null);
INSERT INTO "main"."sd_countries" VALUES (85, 'French Polynesia', 689, null);
INSERT INTO "main"."sd_countries" VALUES (87, 'Gabon', 241, null);
INSERT INTO "main"."sd_countries" VALUES (88, 'The Gambia', 220, null);
INSERT INTO "main"."sd_countries" VALUES (89, 'Gaza Strip', 0, null);
INSERT INTO "main"."sd_countries" VALUES (90, 'Georgia', 995, null);
INSERT INTO "main"."sd_countries" VALUES (91, 'Germany', 49, null);
INSERT INTO "main"."sd_countries" VALUES (92, 'Ghana', 233, null);
INSERT INTO "main"."sd_countries" VALUES (93, 'Gibraltar', 350, null);
INSERT INTO "main"."sd_countries" VALUES (94, 'Glorioso Islands', 0, null);
INSERT INTO "main"."sd_countries" VALUES (95, 'Greece', 30, null);
INSERT INTO "main"."sd_countries" VALUES (96, 'Greenland', 299, null);
INSERT INTO "main"."sd_countries" VALUES (97, 'Grenada', 1473, null);
INSERT INTO "main"."sd_countries" VALUES (98, 'Guadeloupe', 590, null);
INSERT INTO "main"."sd_countries" VALUES (99, 'Guam', 1671, null);
INSERT INTO "main"."sd_countries" VALUES (100, 'Guatemala', 502, null);
INSERT INTO "main"."sd_countries" VALUES (101, 'Guernsey', 502, null);
INSERT INTO "main"."sd_countries" VALUES (102, 'Guinea', 224, null);
INSERT INTO "main"."sd_countries" VALUES (103, 'Guinea-Bissau', 245, null);
INSERT INTO "main"."sd_countries" VALUES (104, 'Guyana', 592, null);
INSERT INTO "main"."sd_countries" VALUES (105, 'Haiti', 509, null);
INSERT INTO "main"."sd_countries" VALUES (107, 'Holy See (Vatican City)', 0, null);
INSERT INTO "main"."sd_countries" VALUES (108, 'Honduras', 504, null);
INSERT INTO "main"."sd_countries" VALUES (109, 'Hong Kong (SAR)', 852, null);
INSERT INTO "main"."sd_countries" VALUES (110, 'Howland Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (111, 'Hungary', 36, null);
INSERT INTO "main"."sd_countries" VALUES (112, 'Iceland', 354, null);
INSERT INTO "main"."sd_countries" VALUES (113, 'India', 91, null);
INSERT INTO "main"."sd_countries" VALUES (114, 'Indonesia', 62, null);
INSERT INTO "main"."sd_countries" VALUES (115, 'Iran', 98, null);
INSERT INTO "main"."sd_countries" VALUES (116, 'Iraq', 964, null);
INSERT INTO "main"."sd_countries" VALUES (117, 'Ireland', 353, null);
INSERT INTO "main"."sd_countries" VALUES (118, 'Israel', 972, null);
INSERT INTO "main"."sd_countries" VALUES (119, 'Italy', 39, null);
INSERT INTO "main"."sd_countries" VALUES (120, 'Jamaica', 1876, null);
INSERT INTO "main"."sd_countries" VALUES (121, 'Jan Mayen', 0, null);
INSERT INTO "main"."sd_countries" VALUES (122, 'Japan', 81, null);
INSERT INTO "main"."sd_countries" VALUES (123, 'Jarvis Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (124, 'Jersey', 0, null);
INSERT INTO "main"."sd_countries" VALUES (125, 'Johnston Atoll', 0, null);
INSERT INTO "main"."sd_countries" VALUES (126, 'Jordan', 962, null);
INSERT INTO "main"."sd_countries" VALUES (127, 'Juan de Nova Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (128, 'Kazakhstan', 7, null);
INSERT INTO "main"."sd_countries" VALUES (129, 'Kenya', 254, null);
INSERT INTO "main"."sd_countries" VALUES (130, 'Kingman Reef', 0, null);
INSERT INTO "main"."sd_countries" VALUES (131, 'Kiribati', 686, null);
INSERT INTO "main"."sd_countries" VALUES (132, 'Korea   North', 850, null);
INSERT INTO "main"."sd_countries" VALUES (133, 'Korea   South', 82, null);
INSERT INTO "main"."sd_countries" VALUES (134, 'Kuwait', 965, null);
INSERT INTO "main"."sd_countries" VALUES (135, 'Kyrgyzstan', 996, null);
INSERT INTO "main"."sd_countries" VALUES (136, 'Laos', 856, null);
INSERT INTO "main"."sd_countries" VALUES (137, 'Latvia', 371, null);
INSERT INTO "main"."sd_countries" VALUES (138, 'Lebanon', 961, null);
INSERT INTO "main"."sd_countries" VALUES (139, 'Lesotho', 266, null);
INSERT INTO "main"."sd_countries" VALUES (140, 'Liberia', 231, null);
INSERT INTO "main"."sd_countries" VALUES (141, 'Libya', 218, null);
INSERT INTO "main"."sd_countries" VALUES (142, 'Liechtenstein', 423, null);
INSERT INTO "main"."sd_countries" VALUES (143, 'Lithuania', 370, null);
INSERT INTO "main"."sd_countries" VALUES (144, 'Luxembourg', 352, null);
INSERT INTO "main"."sd_countries" VALUES (145, 'Macao', 853, null);
INSERT INTO "main"."sd_countries" VALUES (146, 'Macedonia', 389, null);
INSERT INTO "main"."sd_countries" VALUES (147, 'Madagascar', 261, null);
INSERT INTO "main"."sd_countries" VALUES (148, 'Malawi', 265, null);
INSERT INTO "main"."sd_countries" VALUES (149, 'Malaysia', 60, null);
INSERT INTO "main"."sd_countries" VALUES (150, 'Maldives', 960, null);
INSERT INTO "main"."sd_countries" VALUES (151, 'Mali', 223, null);
INSERT INTO "main"."sd_countries" VALUES (152, 'Malta', 356, null);
INSERT INTO "main"."sd_countries" VALUES (153, 'Isle of Man', 0, null);
INSERT INTO "main"."sd_countries" VALUES (154, 'Marshall Islands', 692, null);
INSERT INTO "main"."sd_countries" VALUES (155, 'Martinique', 596, null);
INSERT INTO "main"."sd_countries" VALUES (156, 'Mauritania', 222, null);
INSERT INTO "main"."sd_countries" VALUES (157, 'Mauritius', 230, null);
INSERT INTO "main"."sd_countries" VALUES (158, 'Mayotte', 269, null);
INSERT INTO "main"."sd_countries" VALUES (159, 'Mexico', 52, null);
INSERT INTO "main"."sd_countries" VALUES (160, 'Micronesia ', 0, null);
INSERT INTO "main"."sd_countries" VALUES (161, 'Midway Islands', 0, null);
INSERT INTO "main"."sd_countries" VALUES (163, 'Moldova', 373, null);
INSERT INTO "main"."sd_countries" VALUES (164, 'Monaco', 377, null);
INSERT INTO "main"."sd_countries" VALUES (165, 'Mongolia', 976, null);
INSERT INTO "main"."sd_countries" VALUES (166, 'Montenegro', 0, null);
INSERT INTO "main"."sd_countries" VALUES (167, 'Montserrat', 1664, null);
INSERT INTO "main"."sd_countries" VALUES (168, 'Morocco', 212, null);
INSERT INTO "main"."sd_countries" VALUES (169, 'Mozambique', 258, null);
INSERT INTO "main"."sd_countries" VALUES (170, 'Myanmar', 95, null);
INSERT INTO "main"."sd_countries" VALUES (171, 'Namibia', 264, null);
INSERT INTO "main"."sd_countries" VALUES (172, 'Nauru', 674, null);
INSERT INTO "main"."sd_countries" VALUES (173, 'Navassa Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (174, 'Nepal', 977, null);
INSERT INTO "main"."sd_countries" VALUES (175, 'Netherlands', 31, null);
INSERT INTO "main"."sd_countries" VALUES (176, 'Netherlands Antilles', 599, null);
INSERT INTO "main"."sd_countries" VALUES (177, 'New Caledonia', 687, null);
INSERT INTO "main"."sd_countries" VALUES (178, 'New Zealand', 64, 2);
INSERT INTO "main"."sd_countries" VALUES (179, 'Nicaragua', 505, null);
INSERT INTO "main"."sd_countries" VALUES (180, 'Niger', 227, null);
INSERT INTO "main"."sd_countries" VALUES (181, 'Nigeria', 234, null);
INSERT INTO "main"."sd_countries" VALUES (182, 'Niue', 683, null);
INSERT INTO "main"."sd_countries" VALUES (183, 'Norfolk Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (184, 'Northern Mariana Islands', 599, null);
INSERT INTO "main"."sd_countries" VALUES (185, 'Norway', 47, null);
INSERT INTO "main"."sd_countries" VALUES (186, 'Oman', 968, null);
INSERT INTO "main"."sd_countries" VALUES (187, 'Pakistan', 92, null);
INSERT INTO "main"."sd_countries" VALUES (188, 'Palau', 680, null);
INSERT INTO "main"."sd_countries" VALUES (189, 'Palmyra Atoll', 0, null);
INSERT INTO "main"."sd_countries" VALUES (190, 'Panama', 507, null);
INSERT INTO "main"."sd_countries" VALUES (191, 'Papua New Guinea', 675, null);
INSERT INTO "main"."sd_countries" VALUES (192, 'Paracel Islands', 0, null);
INSERT INTO "main"."sd_countries" VALUES (193, 'Paraguay', 595, null);
INSERT INTO "main"."sd_countries" VALUES (194, 'Peru', 51, null);
INSERT INTO "main"."sd_countries" VALUES (195, 'Philippines', 63, null);
INSERT INTO "main"."sd_countries" VALUES (196, 'Pitcairn Islands', 0, null);
INSERT INTO "main"."sd_countries" VALUES (197, 'Poland', 48, null);
INSERT INTO "main"."sd_countries" VALUES (198, 'Portugal', 351, null);
INSERT INTO "main"."sd_countries" VALUES (199, 'Puerto Rico', 1787, null);
INSERT INTO "main"."sd_countries" VALUES (200, 'Qatar', 974, null);
INSERT INTO "main"."sd_countries" VALUES (201, 'Reunion', 262, null);
INSERT INTO "main"."sd_countries" VALUES (202, 'Romania', 40, null);
INSERT INTO "main"."sd_countries" VALUES (203, 'Russia', 7, null);
INSERT INTO "main"."sd_countries" VALUES (204, 'Rwanda', 250, null);
INSERT INTO "main"."sd_countries" VALUES (205, 'Saint Helena', 290, null);
INSERT INTO "main"."sd_countries" VALUES (206, 'St Kitts & Nevis', 1869, null);
INSERT INTO "main"."sd_countries" VALUES (207, 'Saint Lucia', 1758, null);
INSERT INTO "main"."sd_countries" VALUES (208, 'St Pierre & Miquelon', 508, null);
INSERT INTO "main"."sd_countries" VALUES (209, 'St Vincent & Grenadines', 1784, null);
INSERT INTO "main"."sd_countries" VALUES (210, 'Samoa', 685, null);
INSERT INTO "main"."sd_countries" VALUES (211, 'San Marino', 378, null);
INSERT INTO "main"."sd_countries" VALUES (212, 'Sao Tom & Principe', 239, null);
INSERT INTO "main"."sd_countries" VALUES (213, 'Saudi Arabia', 966, null);
INSERT INTO "main"."sd_countries" VALUES (214, 'Senegal', 221, null);
INSERT INTO "main"."sd_countries" VALUES (215, 'Serbia', 0, null);
INSERT INTO "main"."sd_countries" VALUES (216, 'Serbia & Montenegro', 0, null);
INSERT INTO "main"."sd_countries" VALUES (217, 'Seychelles', 248, null);
INSERT INTO "main"."sd_countries" VALUES (218, 'Sierra Leone', 232, null);
INSERT INTO "main"."sd_countries" VALUES (219, 'Singapore', 65, null);
INSERT INTO "main"."sd_countries" VALUES (220, 'Slovakia', 421, null);
INSERT INTO "main"."sd_countries" VALUES (221, 'Slovenia', 386, null);
INSERT INTO "main"."sd_countries" VALUES (222, 'Solomon Islands', 677, null);
INSERT INTO "main"."sd_countries" VALUES (223, 'Somalia', 252, null);
INSERT INTO "main"."sd_countries" VALUES (224, 'South Africa', 27, null);
INSERT INTO "main"."sd_countries" VALUES (226, 'Spain', 34, null);
INSERT INTO "main"."sd_countries" VALUES (227, 'Spratly Islands', 0, null);
INSERT INTO "main"."sd_countries" VALUES (228, 'Sri Lanka', 94, null);
INSERT INTO "main"."sd_countries" VALUES (229, 'Sudan', 249, null);
INSERT INTO "main"."sd_countries" VALUES (230, 'Suriname', 597, null);
INSERT INTO "main"."sd_countries" VALUES (231, 'Svalbard', 0, null);
INSERT INTO "main"."sd_countries" VALUES (232, 'Swaziland', 268, null);
INSERT INTO "main"."sd_countries" VALUES (233, 'Sweden', 46, null);
INSERT INTO "main"."sd_countries" VALUES (234, 'Switzerland', 41, null);
INSERT INTO "main"."sd_countries" VALUES (235, 'Syria', 963, null);
INSERT INTO "main"."sd_countries" VALUES (236, 'Taiwan', 886, null);
INSERT INTO "main"."sd_countries" VALUES (237, 'Tajikistan', 992, null);
INSERT INTO "main"."sd_countries" VALUES (238, 'Tanzania', 255, null);
INSERT INTO "main"."sd_countries" VALUES (239, 'Thailand', 66, null);
INSERT INTO "main"."sd_countries" VALUES (240, 'Togo', 228, null);
INSERT INTO "main"."sd_countries" VALUES (241, 'Tokelau', 690, null);
INSERT INTO "main"."sd_countries" VALUES (242, 'Tonga', 676, null);
INSERT INTO "main"."sd_countries" VALUES (243, 'Trinidad & Tobago', 1868, null);
INSERT INTO "main"."sd_countries" VALUES (244, 'Tromelin Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (245, 'Tunisia', 216, null);
INSERT INTO "main"."sd_countries" VALUES (246, 'Turkey', 90, null);
INSERT INTO "main"."sd_countries" VALUES (247, 'Turkmenistan', 993, null);
INSERT INTO "main"."sd_countries" VALUES (248, 'Turks & Caicos Islands', 1649, null);
INSERT INTO "main"."sd_countries" VALUES (249, 'Tuvalu', 688, null);
INSERT INTO "main"."sd_countries" VALUES (250, 'Uganda', 256, null);
INSERT INTO "main"."sd_countries" VALUES (251, 'Ukraine', 380, null);
INSERT INTO "main"."sd_countries" VALUES (252, 'United Arab Emirates', 971, null);
INSERT INTO "main"."sd_countries" VALUES (253, 'United Kingdom', 44, 3);
INSERT INTO "main"."sd_countries" VALUES (254, 'United States', 1, 4);
INSERT INTO "main"."sd_countries" VALUES (256, 'Uruguay', 598, null);
INSERT INTO "main"."sd_countries" VALUES (257, 'Uzbekistan', 998, null);
INSERT INTO "main"."sd_countries" VALUES (258, 'Vanuatu', 678, null);
INSERT INTO "main"."sd_countries" VALUES (259, 'Venezuela', 58, null);
INSERT INTO "main"."sd_countries" VALUES (260, 'Vietnam', 84, null);
INSERT INTO "main"."sd_countries" VALUES (261, 'Virgin Islands', 1284, null);
INSERT INTO "main"."sd_countries" VALUES (262, 'Virgin Islands (UK)', 1284, null);
INSERT INTO "main"."sd_countries" VALUES (263, 'Virgin Islands (US)', 1340, null);
INSERT INTO "main"."sd_countries" VALUES (264, 'Wake Island', 0, null);
INSERT INTO "main"."sd_countries" VALUES (265, 'Wallis and Futuna', 0, null);
INSERT INTO "main"."sd_countries" VALUES (266, 'West Bank', 0, null);
INSERT INTO "main"."sd_countries" VALUES (267, 'Western Sahara', 0, null);
INSERT INTO "main"."sd_countries" VALUES (268, 'Western Samoa', 0, null);
INSERT INTO "main"."sd_countries" VALUES (270, 'Yemen', 967, null);
INSERT INTO "main"."sd_countries" VALUES (271, 'Yugoslavia', 381, null);
INSERT INTO "main"."sd_countries" VALUES (272, 'Zaire', 0, null);
INSERT INTO "main"."sd_countries" VALUES (273, 'Zambia', 260, null);
INSERT INTO "main"."sd_countries" VALUES (274, 'Zimbabwe', 263, null);
INSERT INTO "main"."sd_countries" VALUES (275, 'AAATestCountry', 9999, 0);

-- ----------------------------
-- Table structure for "main"."sd_galleries"
-- ----------------------------
DROP TABLE "main"."sd_galleries";
CREATE TABLE "sd_galleries" (
	"id" INTEGER PRIMARY KEY  NOT NULL ,
	"title" varchar(250) NOT NULL ,
	"alias" varchar(255) NOT NULL ,
	"image" varchar(255) DEFAULT (NULL) ,
	"description" text,
	"content" text,
	"priority" int(11) NOT NULL ,
	"create_time" datetime,
	"update_time" datetime,
	"is_published" tinyint(1) DEFAULT (1)
);

-- ----------------------------
-- Records of sd_galleries
-- ----------------------------
INSERT INTO "main"."sd_galleries" VALUES (1, 'Sport', 'sport', '13832057502.jpg', null, null, 4, '2013-10-31 08:49:10', '2013-11-22 13:02:00', 1);
INSERT INTO "main"."sd_galleries" VALUES (2, 'Family', 'family', '13832057611.jpg', null, null, 1, '2013-10-31 08:49:21', '2013-11-22 13:01:59', 1);
INSERT INTO "main"."sd_galleries" VALUES (3, 'Friend', 'friend', '13832057743.jpg', null, null, 1, '2013-10-31 08:49:34', '2013-11-22 13:02:21', 0);

-- ----------------------------
-- Table structure for "main"."sd_gallery_images"
-- ----------------------------
DROP TABLE "main"."sd_gallery_images";
CREATE TABLE "sd_gallery_images" (
"id"  INTEGER NOT NULL,
"gallery_id"  VARCHAR(16),
"name"  VARCHAR(64),
"image"  VARCHAR(255),
"description"  TEXT,
"create_time"  DATETIME,
"update_time"  DATETIME,
"is_published"  tinyint(1) NOT NULL DEFAULT (1),
"priority"  INTEGER DEFAULT (0),
PRIMARY KEY ("id" ASC),
CONSTRAINT "gallery" FOREIGN KEY ("gallery_id") REFERENCES "sd_galleries" ("id") ON DELETE CASCADE ON UPDATE CASCADE
);

-- ----------------------------
-- Records of sd_gallery_images
-- ----------------------------
INSERT INTO "main"."sd_gallery_images" VALUES (1, 1, 'teset 12', '138320581011.jpg', null, '2013-10-31 08:50:10', '2013-11-16 09:19:52', 1, 0);
INSERT INTO "main"."sd_gallery_images" VALUES (2, 1, 'Teset 2', '138320582112.jpg', null, '2013-10-31 08:50:21', '2013-11-16 09:24:49', 0, 0);
INSERT INTO "main"."sd_gallery_images" VALUES (3, 3, 'Test 3', '138320583915.jpg', null, '2013-10-31 08:50:39', '2013-11-19 07:09:42', 0, 0);

-- ----------------------------
-- Table structure for "main"."sd_news"
-- ----------------------------
DROP TABLE "main"."sd_news";
CREATE TABLE "sd_news" (
"id"  INTEGER NOT NULL,
"title"  varchar(128) NOT NULL,
"alias"  varchar(64) NOT NULL,
"image"  varchar(128),
"description"  text,
"content"  text,
"priority"  int(11) DEFAULT ('0'),
"is_published"  tinyint(1) DEFAULT ('1'),
"create_time"  datetime DEFAULT (NULL),
"update_time"  datetime DEFAULT (NULL),
"news_time"  datetime DEFAULT (NULL),
PRIMARY KEY ("id" ASC)
);

-- ----------------------------
-- Records of sd_news
-- ----------------------------
INSERT INTO "main"."sd_news" VALUES (2, 'Test', 'test', null, null, null, 3, 0, null, '2013-11-22 12:58:04', null);
INSERT INTO "main"."sd_news" VALUES (4, 'grfdf', 'grfdf', null, null, null, 2, 1, 1383018403, '2013-11-22 12:58:04', null);
INSERT INTO "main"."sd_news" VALUES (5, 'khuong', 'khuong', null, null, null, 3, 0, '2013-10-29 06:17:25', '2013-11-22 12:59:56', null);
INSERT INTO "main"."sd_news" VALUES (6, 'test new', 'test new', null, null, null, 1, 0, '2013-10-29 08:05:51', '2013-11-22 12:58:04', null);

-- ----------------------------
-- Table structure for "main"."sd_news_categories"
-- ----------------------------
DROP TABLE "main"."sd_news_categories";
CREATE TABLE "sd_news_categories" (
"id"  INTEGER NOT NULL,
"name"  varchar(64) NOT NULL,
"alias"  varchar(64) NOT NULL,
"lft"  int(4),
"rght"  int(4),
"parent_id"  int(4),
"image"  varchar(255),
"description"  text,
"content"  text,
"is_published"  tinyint(1) DEFAULT ('1'),
"create_time"  datetime DEFAULT (NULL),
"update_time"  datetime DEFAULT (NULL),
PRIMARY KEY ("id" ASC)
);

-- ----------------------------
-- Records of sd_news_categories
-- ----------------------------
INSERT INTO "main"."sd_news_categories" VALUES (1, 'Sport', 'Sport', null, null, null, null, 'Text', 'Text', 0, null, null);
INSERT INTO "main"."sd_news_categories" VALUES (2, 'Family', 'family', 1, 2, 1, null, 'test', null, 0, null, null);
INSERT INTO "main"."sd_news_categories" VALUES (3, 'Building-test', 'building-test', 1, 2, 1, null, null, null, 1, null, null);

-- ----------------------------
-- Table structure for "main"."sd_news_middle"
-- ----------------------------
DROP TABLE "main"."sd_news_middle";
CREATE TABLE "sd_news_middle" (
"id"  INTEGER NOT NULL,
"category_id"  INTEGER NOT NULL,
"news_id"  INTEGER NOT NULL,
PRIMARY KEY ("id" ASC),
CONSTRAINT "news" FOREIGN KEY ("news_id") REFERENCES "sd_news" ("id") ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT "category" FOREIGN KEY ("category_id") REFERENCES "sd_news_categories" ("id") ON DELETE CASCADE ON UPDATE CASCADE
);

-- ----------------------------
-- Records of sd_news_middle
-- ----------------------------
INSERT INTO "main"."sd_news_middle" VALUES (11, 3, 6);
INSERT INTO "main"."sd_news_middle" VALUES (12, 1, 5);
INSERT INTO "main"."sd_news_middle" VALUES (13, 3, 5);

-- ----------------------------
-- Table structure for "main"."sd_product_categories"
-- ----------------------------
DROP TABLE "main"."sd_product_categories";
CREATE TABLE "sd_product_categories" (
"id"  INTEGER NOT NULL,
"name"  VARCHAR,
"alias"  VARCHAR,
"image"  VARCHAR,
"description"  TEXT,
"lft"  INTEGER,
"rght"  INTEGER,
"parent_id"  INTEGER,
"level"  INTEGER,
"create_time"  DATETIME,
"update_time"  DATETIME,
"root"  tinyint,
PRIMARY KEY ("id" ASC)
);

-- ----------------------------
-- Records of sd_product_categories
-- ----------------------------
INSERT INTO "main"."sd_product_categories" VALUES (1, 'Test categories2', 'test-categories2', null, 'ccc', 2, 3, 4, 2, null, null, 1);
INSERT INTO "main"."sd_product_categories" VALUES (2, 'Test categories 5', 'test-categories-5', null, null, 4, 5, 4, 2, null, null, 1);
INSERT INTO "main"."sd_product_categories" VALUES (3, 'Sprot', 'sprot', null, null, 6, 7, 4, 2, null, '2014-02-12 10:34:21', 1);
INSERT INTO "main"."sd_product_categories" VALUES (4, 'root', null, null, null, 1, 8, null, 1, null, null, 1);

-- ----------------------------
-- Table structure for "main"."sd_product_images"
-- ----------------------------
DROP TABLE "main"."sd_product_images";
CREATE TABLE "sd_product_images" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"product_id"  VARCHAR(16),
"name"  VARCHAR(64),
"image"  VARCHAR(255),
"description"  TEXT,
"priority"  INTEGER DEFAULT (0),
"is_published"  tinyint(1) NOT NULL DEFAULT (1),
"create_time"  DATETIME,
"update_time"  DATETIME,
"color"  TEXT(8),
CONSTRAINT "product" FOREIGN KEY ("product_id") REFERENCES "sd_products" ("id") ON DELETE CASCADE ON UPDATE CASCADE,
UNIQUE ("id" ASC)
);

-- ----------------------------
-- Records of sd_product_images
-- ----------------------------
INSERT INTO "main"."sd_product_images" VALUES (1, 1, null, '138327857416.jpg', null, 0, 1, null, null, '#FFFFFF');
INSERT INTO "main"."sd_product_images" VALUES (2, 1, 'cc', '138327858715.jpg', null, 0, 1, null, null, '#808000');
INSERT INTO "main"."sd_product_images" VALUES (4, 3, 'cscs', '13832796079.jpg', null, 0, 1, null, null, '#ff6600');
INSERT INTO "main"."sd_product_images" VALUES (5, 1, 'khuong', '138328155415.jpg', null, 0, 1, null, null, '#ff0000');
INSERT INTO "main"."sd_product_images" VALUES (6, 1, 'teste', '138328335117.jpg', null, 0, 1, null, null, '#ff0000');
INSERT INTO "main"."sd_product_images" VALUES (7, 2, 'Test khuong', '138328378824.jpg', null, 0, 1, null, null, '#ff0000');

-- ----------------------------
-- Table structure for "main"."sd_product_middle"
-- ----------------------------
DROP TABLE "main"."sd_product_middle";
CREATE TABLE "sd_product_middle" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"category_id"  INTEGER,
"product_id"  INTEGER,
CONSTRAINT "product" FOREIGN KEY ("product_id") REFERENCES "sd_products" ("id") ON DELETE CASCADE ON UPDATE CASCADE,
CONSTRAINT "category" FOREIGN KEY ("category_id") REFERENCES "sd_product_categories" ("id") ON DELETE CASCADE ON UPDATE CASCADE,
UNIQUE ("id" ASC)
);

-- ----------------------------
-- Records of sd_product_middle
-- ----------------------------
INSERT INTO "main"."sd_product_middle" VALUES (45, 1, 3);
INSERT INTO "main"."sd_product_middle" VALUES (46, 2, 1);
INSERT INTO "main"."sd_product_middle" VALUES (47, 1, 2);
INSERT INTO "main"."sd_product_middle" VALUES (48, 4, 4);

-- ----------------------------
-- Table structure for "main"."sd_products"
-- ----------------------------
DROP TABLE "main"."sd_products";
CREATE TABLE "sd_products" (
	"id" INTEGER PRIMARY KEY  NOT NULL ,
	"name"  VARCHAR,
	"alias"  VARCHAR NOT NULL,
	"description"  TEXT,
	"content"  TEXT,
	"image"  VARCHAR,
	"price"  VARCHAR(50),
	"special_price"  VARCHAR(50),
	"quantity"  INTEGER DEFAULT 0,
	"style"  VARCHAR(255),
	"priority"  INTEGER DEFAULT (0),
	"is_special"  BOOL DEFAULT 0,
	"is_published"  BOOL DEFAULT (0),
	"create_time"  DATETIME,
	"update_time"  DATETIME
);

-- ----------------------------
-- Records of sd_products
-- ----------------------------
INSERT INTO "main"."sd_products" VALUES (1, 'test 4', 'test-4', null, null, '138328360420.jpg', null, null, 0, null, 1, 0, 0, null, '2014-02-12 08:47:52');
INSERT INTO "main"."sd_products" VALUES (2, 'khuong', 'khuong', null, null, '138328361727.jpg', null, null, 0, null, 0, 0, 0, '2013-10-30 10:16:40', '2014-02-12 08:47:55');
INSERT INTO "main"."sd_products" VALUES (3, 'testtete', 'testtete', null, null, '138321120416.jpg', null, null, 0, null, 2, 0, 0, '2013-10-31 10:20:04', '2014-02-12 08:47:58');
INSERT INTO "main"."sd_products" VALUES (4, 'teat', 'teat', X'3C703E0D0A0964613C2F703E0D0A', X'3C703E0D0A096461643C2F703E0D0A', '139228182013832796079.jpg', null, null, 0, null, 0, 1, 0, '2014-02-13 09:57:00', null);

-- ----------------------------
-- Table structure for "main"."sd_products_copy"
-- ----------------------------
DROP TABLE "main"."sd_products_copy";
CREATE TABLE "sd_products_copy" (
	"id" INTEGER PRIMARY KEY  NOT NULL ,
	"name"  VARCHAR,
	"alias"  VARCHAR NOT NULL,
	"description"  TEXT,
	"content"  TEXT,
	"image"  VARCHAR,
	"price"  VARCHAR(50),
	"special_price"  VARCHAR(50),
	"quantity"  INTEGER DEFAULT 0,
	"style"  VARCHAR(255),
	"priority"  INTEGER DEFAULT (0),
	"is_special"  BOOL DEFAULT 0,
	"is_published"  BOOL DEFAULT (0),
	"create_time"  DATETIME,
	"update_time"  DATETIME
);

-- ----------------------------
-- Records of sd_products_copy
-- ----------------------------
INSERT INTO "main"."sd_products_copy" VALUES (1, 'test 4', 'test-4', null, null, '138328360420.jpg', null, null, 0, null, 1, 0, 0, null, '2014-02-12 08:47:52');
INSERT INTO "main"."sd_products_copy" VALUES (2, 'khuong', 'khuong', null, null, '138328361727.jpg', null, null, 0, null, 0, 0, 0, '2013-10-30 10:16:40', '2014-02-12 08:47:55');
INSERT INTO "main"."sd_products_copy" VALUES (3, 'testtete', 'testtete', null, null, '138321120416.jpg', null, null, 0, null, 2, 0, 0, '2013-10-31 10:20:04', '2014-02-12 08:47:58');
INSERT INTO "main"."sd_products_copy" VALUES (4, 'teat', 'teat', X'3C703E0D0A0964613C2F703E0D0A', X'3C703E0D0A096461643C2F703E0D0A', '139228182013832796079.jpg', null, null, 0, null, 0, 1, 0, '2014-02-13 09:57:00', null);

-- ----------------------------
-- Table structure for "main"."sd_profiles"
-- ----------------------------
DROP TABLE "main"."sd_profiles";
CREATE TABLE "sd_profiles" (
"user_id"  INTEGER NOT NULL,
"lastname"  varchar(50) NOT NULL DEFAULT '',
"firstname"  varchar(50) NOT NULL DEFAULT '',
PRIMARY KEY ("user_id" ASC),
CONSTRAINT "user" FOREIGN KEY ("user_id") REFERENCES "sd_users" ("id") ON DELETE CASCADE ON UPDATE CASCADE
);

-- ----------------------------
-- Records of sd_profiles
-- ----------------------------

-- ----------------------------
-- Table structure for "main"."sd_profiles_fields"
-- ----------------------------
DROP TABLE "main"."sd_profiles_fields";
CREATE TABLE "sd_profiles_fields" (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  varname varchar(50) NOT NULL,
  title varchar(255) NOT NULL,
  field_type varchar(50) NOT NULL,
  field_size int(3) NOT NULL DEFAULT '0',
  field_size_min int(3) NOT NULL DEFAULT '0',
  required int(1) NOT NULL DEFAULT '0',
  match varchar(255) NOT NULL DEFAULT '',
  range varchar(255) NOT NULL DEFAULT '',
  error_message varchar(255) NOT NULL DEFAULT '',
  other_validator TEXT NOT NULL DEFAULT '',
  'default' varchar(255) NOT NULL DEFAULT '',
  widget varchar(255) NOT NULL DEFAULT '',
  widgetparams TEXT NOT NULL DEFAULT '',
  position int(3) NOT NULL DEFAULT '0',
  visible int(1) NOT NULL DEFAULT '0'
);

-- ----------------------------
-- Records of sd_profiles_fields
-- ----------------------------

-- ----------------------------
-- Table structure for "main"."sd_project"
-- ----------------------------
DROP TABLE "main"."sd_project";
CREATE TABLE "sd_project" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"alias"  VARCHAR(127),
"title"  VARCHAR(127) NOT NULL,
"short_description"  VARCHAR(1000) NOT NULL,
"description"  TEXT NOT NULL,
"create_time"  DATETIME DEFAULT NULL,
"update_time"  DATETIME DEFAULT NULL
);

-- ----------------------------
-- Records of sd_project
-- ----------------------------
INSERT INTO "main"."sd_project" VALUES (1, 'web-develop', 'Web develop', X'3C68333E0D0A095061737365706172746F75742077656E742074696D69646C79206173686F7265206F6E207468697320736F20637572696F7573207465727269746F7279206F662074686520536F6E73206F66207468652053756E2E20486520686164206E6F7468696E672062657474657220746F20646F207468616E2C2074616B696E67206368616E636520666F72206869732067756964652C20746F2077616E6465723C2F68333E0D0A', X'3C703E0D0A093C7370616E207374796C653D22666F6E742D73697A653A313470783B223E3C7370616E207374796C653D22666F6E742D66616D696C793A617269616C2C2068656C7665746963612C2073616E732D73657269663B223E3C7370616E207374796C653D22636F6C6F723A207267622835312C2035312C203531293B206C696E652D6865696768743A20323570783B206261636B67726F756E642D636F6C6F723A20726762283234392C203234392C20323439293B223E546865204361726E6174696320616E63686F726564206174207468652071756179206E6561722074686520637573746F6D2D686F7573652C20696E20746865206D69647374206F6620612063726F7764206F662073686970732062656172696E672074686520666C616773206F6620616C6C206E6174696F6E732E205061737365706172746F75742077656E742074696D69646C79206173686F7265206F6E207468697320736F20637572696F7573207465727269746F7279206F662074686520536F6E73206F66207468652053756E2E20486520686164206E6F7468696E672062657474657220746F20646F207468616E2C2074616B696E67206368616E636520666F72206869732067756964652C20746F2077616E6465722061696D6C6573736C79207468726F756768207468652073747265657473206F6620596F6B6F68616D612E20486520666F756E642068696D73656C6620617420666972737420696E20612074686F726F7567686C79204575726F7065616E20717561727465722C2074686520686F7573657320686176696E67206C6F772066726F6E74732C20616E64206265696E672061646F726E6564207769746820766572616E6461732C2062656E656174682077686963682068652063617567687420676C696D70736573206F66206E65617420706572697374796C65732E20546869732071756172746572206F636375706965642C20776974682069747320737472656574732C20737175617265732C20646F636B732C20616E642077617265686F757365732C20616C6C20746865207370616365206265747765656E20746865202671756F743B70726F6D6F6E746F7279206F6620746865205472656174792671756F743B20616E64207468652072697665722E20486572652C20617320617420486F6E67204B6F6E6720616E642043616C63757474612C2077657265206D697865642063726F776473206F6620616C6C3C2F7370616E3E3C2F7370616E3E3C2F7370616E3E3C2F703E0D0A', '2014-04-01 10:47:43', '2014-04-02 10:20:58');
INSERT INTO "main"."sd_project" VALUES (2, 'android', 'Android', X'3C703E0D0A093C7374726F6E673E266E6273703B416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F696420416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F696420416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F696420266E6273703B416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F696420416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F696420416E64726F6964266E6273703B416E64726F6964266E6273703B416E64726F69643C2F7374726F6E673E3C2F703E0D0A', X'3C703E0D0A093C7370616E207374796C653D22666F6E742D73697A653A313470783B223E3C7370616E207374796C653D22666F6E742D66616D696C793A617269616C2C2068656C7665746963612C2073616E732D73657269663B223E5061737365706172746F75742077656E742074696D69646C79206173686F7265206F6E207468697320736F20637572696F7573207465727269746F7279206F662074686520536F6E73206F66207468652053756E2E20486520686164206E6F7468696E672062657474657220746F20646F207468616E2C2074616B696E67206368616E636520666F72206869732067756964652C20746F2077616E6465723C2F7370616E3E3C2F7370616E3E3C2F703E0D0A', '2014-04-01 10:51:02', null);
INSERT INTO "main"."sd_project" VALUES (5, 'ios', 'IOS', X'3C68333E0D0A09696F733C2F68333E0D0A', X'3C703E0D0A09696F733C7370616E207374796C653D22666F6E742D73697A653A20313270783B223E696F73696F733C2F7370616E3E3C2F703E0D0A', '2014-04-02 11:09:10', null);
INSERT INTO "main"."sd_project" VALUES (9, 'test', 'test', X'3C703E0D0A09746573743C2F703E0D0A', X'3C703E0D0A09746573743C2F703E0D0A', '2014-04-03 07:02:23', null);
INSERT INTO "main"."sd_project" VALUES (10, 'testa', 'testa', X'3C703E0D0A0974657374613C2F703E0D0A', X'3C703E0D0A0974657374613C2F703E0D0A', '2014-04-03 07:02:42', null);
INSERT INTO "main"."sd_project" VALUES (11, 'test3', 'test3', X'3C703E0D0A0974657374333C2F703E0D0A', X'3C703E0D0A0974657374333C2F703E0D0A', '2014-04-03 07:04:44', null);

-- ----------------------------
-- Table structure for "main"."sd_project_image"
-- ----------------------------
DROP TABLE "main"."sd_project_image";
CREATE TABLE "sd_project_image" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"project_id"  INTEGER NOT NULL,
"image"  VARCHAR(255) NOT NULL,
"create_time"  DATETIME,
"update_time"  DATETIME
);

-- ----------------------------
-- Records of sd_project_image
-- ----------------------------
INSERT INTO "main"."sd_project_image" VALUES (1, 1, '/upload_files/projects/detail/01.jpg', null, null);
INSERT INTO "main"."sd_project_image" VALUES (2, 1, '/upload_files/projects/detail/02.jpg', null, null);
INSERT INTO "main"."sd_project_image" VALUES (3, 1, '/upload_files/projects/detail/03.jpg', null, null);
INSERT INTO "main"."sd_project_image" VALUES (4, 1, '/upload_files/projects/detail/04.jpg', null, null);
INSERT INTO "main"."sd_project_image" VALUES (6, 11, '/upload_files/projects/detail/Desert.jpg', null, null);
INSERT INTO "main"."sd_project_image" VALUES (7, 11, '/upload_files/projects/detail/Hydrangeas.jpg', null, null);
INSERT INTO "main"."sd_project_image" VALUES (8, 11, '/upload_files/projects/detail/Jellyfish.jpg', null, null);

-- ----------------------------
-- Table structure for "main"."sd_service_categories"
-- ----------------------------
DROP TABLE "main"."sd_service_categories";
CREATE TABLE "sd_service_categories" (
"id"  INTEGER NOT NULL,
"name"  VARCHAR,
"alias"  VARCHAR,
"image"  VARCHAR,
"description"  TEXT,
"lft"  INTEGER,
"rght"  INTEGER,
"parent_id"  INTEGER,
"level"  INTEGER,
"create_time"  DATETIME,
"update_time"  DATETIME,
"root"  tinyint,
PRIMARY KEY ("id" ASC)
);

-- ----------------------------
-- Records of sd_service_categories
-- ----------------------------
INSERT INTO "main"."sd_service_categories" VALUES (1, 'ser 2', 'ser-2', null, null, 2, 3, 5, 2, null, '2014-02-12 11:25:43', 5);
INSERT INTO "main"."sd_service_categories" VALUES (2, 'ser3', 'ser3', null, null, 4, 5, 5, 2, null, null, 5);
INSERT INTO "main"."sd_service_categories" VALUES (3, 'Ser 4', 'ser-4', null, null, 6, 9, 5, 2, null, null, 5);
INSERT INTO "main"."sd_service_categories" VALUES (4, 'ser 5', 'ser-5', null, null, 7, 8, 3, 3, null, '2014-02-12 11:30:22', 5);
INSERT INTO "main"."sd_service_categories" VALUES (5, 'root', 'root', null, null, 1, 10, null, 1, null, null, 5);

-- ----------------------------
-- Table structure for "main"."sd_services"
-- ----------------------------
DROP TABLE "main"."sd_services";
CREATE TABLE "sd_services" (
"id"  INTEGER NOT NULL,
"name"  VARCHAR,
"alias"  VARCHAR NOT NULL,
"category_id"  INTEGER,
"description"  TEXT,
"content"  TEXT,
"image"  VARCHAR,
"price"  VARCHAR(50),
"special_price"  VARCHAR(50),
"quantity"  INTEGER DEFAULT 0,
"style"  VARCHAR(255),
"priority"  INTEGER DEFAULT (0),
"is_special"  BOOL DEFAULT 0,
"is_published"  BOOL DEFAULT (0),
"create_time"  DATETIME,
"update_time"  DATETIME,
PRIMARY KEY ("id" ASC),
CONSTRAINT "category" FOREIGN KEY ("category_id") REFERENCES "sd_service_categories" ("id") ON DELETE CASCADE ON UPDATE CASCADE
);

-- ----------------------------
-- Records of sd_services
-- ----------------------------
INSERT INTO "main"."sd_services" VALUES (1, 'khi em ra di', 'khi-em-ra-di', 2, X'3C703E0D0A093C7374726F6E673E636163733C2F7374726F6E673E3C2F703E0D0A', X'3C703E0D0A093C7374726F6E673E636163733C2F7374726F6E673E3C2F703E0D0A', '1384576031Chrysanthemum.jpg', null, null, 0, null, 3, 0, 0, '2013-11-16 05:27:11', '2013-11-22 12:54:17');
INSERT INTO "main"."sd_services" VALUES (2, 'vdsv', 'vdsvds', 3, null, null, '1384576500Tulips.jpg', null, null, 0, null, 2, 0, 0, '2013-11-16 05:35:01', '2013-11-22 12:54:15');
INSERT INTO "main"."sd_services" VALUES (3, 'Server', 'server', 4, null, null, '1384923167Lighthouse.jpg', null, null, 0, null, 1, 0, 0, '2013-11-20 05:52:48', '2013-11-22 12:54:16');

-- ----------------------------
-- Table structure for "main"."sd_static_pages"
-- ----------------------------
DROP TABLE "main"."sd_static_pages";
CREATE TABLE "sd_static_pages" (
"id"  INTEGER NOT NULL,
"title"  varchar(128) NOT NULL,
"alias"  varchar(128) NOT NULL,
"image"  varchar(128) DEFAULT (NULL),
"description"  text,
"content"  text,
"position"  varchar(128),
"section"  varchar(128),
"show_on_index"  bool DEFAULT 0,
"priority"  int(11) DEFAULT 0,
"create_time"  datetime DEFAULT (NULL),
"update_time"  datetime DEFAULT (NULL),
"is_published"  tinyint(1) DEFAULT ('1'),
PRIMARY KEY ("id" ASC)
);

-- ----------------------------
-- Records of sd_static_pages
-- ----------------------------
INSERT INTO "main"."sd_static_pages" VALUES (1, 'About us', 'About-us', '13834673913.jpg', 'About us About us About us
About us About us About us
About us About us About us
About us About us About us
About us About us About us
About us About us About us
About us About us About us
About us About us About us', null, null, null, 0, 0, '2013-10-29 05:07:23', '2013-11-22 12:50:12', 0);
INSERT INTO "main"."sd_static_pages" VALUES (2, 'vdvdvd', 'vdvd', '13834673771.jpg', null, null, 'top', null, 0, 4, '2013-10-29 05:07:20', '2013-11-22 12:50:12', 1);
INSERT INTO "main"."sd_static_pages" VALUES (3, 'kukd', 'kukd', '13831225142.jpg', null, null, 'top', null, 0, 3, '2013-10-30 09:34:00', '2013-11-22 12:50:18', 1);
INSERT INTO "main"."sd_static_pages" VALUES (4, 'K-Teset', 'k-teset', '1384916900Desert.jpg', null, null, null, null, 0, 2, '2013-11-20 04:08:20', '2013-11-22 12:50:19', 1);

-- ----------------------------
-- Table structure for "main"."sd_team"
-- ----------------------------
DROP TABLE "main"."sd_team";
CREATE TABLE "sd_team" (
"id"  INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
"name"  varchar(128) NOT NULL,
"position"  varchar(128) NOT NULL,
"image"  varchar(128),
"showIndex"  tinyint(1)
);

-- ----------------------------
-- Records of sd_team
-- ----------------------------
INSERT INTO "main"."sd_team" VALUES (1, 'Hai Duong', 'CEO', '139228583213832796079.jpg', 1);
INSERT INTO "main"."sd_team" VALUES (2, 'Linh Duong', 'Founder', '1392283566linhduong.jpg', 1);

-- ----------------------------
-- Table structure for "main"."sd_users"
-- ----------------------------
DROP TABLE "main"."sd_users";
CREATE TABLE "sd_users" (
  id INTEGER NOT NULL  PRIMARY KEY AUTOINCREMENT,
  username varchar(20) NOT NULL,
  password varchar(128) NOT NULL,
  email varchar(128) NOT NULL,
  activkey varchar(128) NOT NULL DEFAULT '',
  create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  lastvisit_at TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  superuser int(1) NOT NULL DEFAULT '0',
  status int(1) NOT NULL DEFAULT '0'
);

-- ----------------------------
-- Records of sd_users
-- ----------------------------
INSERT INTO "main"."sd_users" VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '21232f297a57a5a743894a0e4a801fc3', '2013-10-04 21:17:56', '2013-11-03 17:10:59', 1, 1);
INSERT INTO "main"."sd_users" VALUES (2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', 'fe01ce2a7fbac8fafaed7c982a04e229', '2013-10-04 21:17:56', '0000-00-00 00:00:00', 0, 1);
INSERT INTO "main"."sd_users" VALUES (4, 'Mobi', 'e10adc3949ba59abbe56e057f20f883e', 'modi.bixa0@gmail.com', '7e3322831ed94481effd9052798999a7', '2013-10-07 00:07:30', '0000-00-00 00:00:00', 0, 1);

-- ----------------------------
-- Table structure for "main"."sqlite_sequence"
-- ----------------------------
DROP TABLE "main"."sqlite_sequence";
CREATE TABLE sqlite_sequence(name,seq);

-- ----------------------------
-- Records of sqlite_sequence
-- ----------------------------
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_banners', 3);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_countries', 275);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_product_images', 7);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_product_middle', 48);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_users', 4);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_users', 4);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_profiles_fields', 2);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_product_middle', 47);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_countries', 275);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_banners', 2);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_product_images', 7);
INSERT INTO "main"."sqlite_sequence" VALUES ('_sd_team_old_20140213', 2);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_team', 2);
INSERT INTO "main"."sqlite_sequence" VALUES ('_sd_project_old_20140401', 2);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_project', 11);
INSERT INTO "main"."sqlite_sequence" VALUES ('_sd_project_image_old_20140402_1', 0);
INSERT INTO "main"."sqlite_sequence" VALUES ('sd_project_image', 8);
