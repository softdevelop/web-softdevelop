/*
Navicat SQLite Data Transfer

Source Server         : Socialnetwork
Source Server Version : 30706
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30706
File Encoding         : 65001

Date: 2013-10-08 12:22:15
*/

PRAGMA foreign_keys = OFF;

-- ----------------------------
-- Table structure for "main"."tbl_static_pages"
-- ----------------------------
/*
DROP TABLE "main"."sd_static_pages";
*/
CREATE TABLE "sd_static_pages" (
	"id" INTEGER PRIMARY KEY  NOT NULL ,
	"title" varchar(128) NOT NULL ,
	"alias" varchar(128) NOT NULL ,
	"image" varchar(128) DEFAULT (NULL) ,
	"description" text,
	"content" text, 
	"position" varchar(128) NOT NULL ,
	"section" varchar(128) NOT NULL ,
	"show_on_index" bool DEFAULT 0, 
	"priority" int(11) DEFAULT ('0'),
	"is_published" tinyint(1) DEFAULT ('1'),
	"create_time" datetime DEFAULT (NULL),
	"update_time" datetime DEFAULT (NULL)
);