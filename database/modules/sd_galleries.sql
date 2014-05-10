/*
Navicat SQLite Data Transfer

Source Server         : sdcmsModules
Source Server Version : 30706
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30706
File Encoding         : 65001

Date: 2013-10-09 21:52:32
*/

PRAGMA foreign_keys = OFF;

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