/*
Navicat SQLite Data Transfer

Source Server         : blogdemo1.1.14
Source Server Version : 30706
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30706
File Encoding         : 65001

Date: 2013-10-09 23:48:02
*/

PRAGMA foreign_keys = OFF;

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
INSERT INTO "main"."sd_news" VALUES (1, 'qwerty', 'qwerty', null, 'qwerty', 'qwerty', 0, 0, null, null, null);

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
