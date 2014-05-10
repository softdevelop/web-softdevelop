/*
Navicat SQLite Data Transfer

Source Server         : sdcmsModules
Source Server Version : 30706
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30706
File Encoding         : 65001

Date: 2013-10-10 00:29:16
*/

PRAGMA foreign_keys = OFF;

-- ----------------------------
-- Table structure for "main"."sd_service_categories"
-- ----------------------------
DROP TABLE "main"."sd_service_categories";
CREATE TABLE "sd_service_categories" (
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
-- Records of sd_service_categories
-- ----------------------------

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
