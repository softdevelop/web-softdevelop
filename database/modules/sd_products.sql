/*
Navicat SQLite Data Transfer

Source Server         : sdcmsModules
Source Server Version : 30706
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30706
File Encoding         : 65001

Date: 2013-10-10 00:24:52
*/

PRAGMA foreign_keys = OFF;

-- ----------------------------
-- Table structure for "main"."sd_product_categories"
-- ----------------------------
DROP TABLE "main"."sd_product_categories";
CREATE TABLE "sd_product_categories" (
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
-- Records of sd_product_categories
-- ----------------------------

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
CONSTRAINT "product" FOREIGN KEY ("product_id") REFERENCES "sd_products" ("id") ON DELETE CASCADE ON UPDATE CASCADE,
UNIQUE ("id" ASC)
);

-- ----------------------------
-- Records of sd_product_images
-- ----------------------------

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
