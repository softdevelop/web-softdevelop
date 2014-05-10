/*
Navicat SQLite Data Transfer

Source Server         : cms
Source Server Version : 30706
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30706
File Encoding         : 65001

Date: 2014-02-13 09:50:42
*/

PRAGMA foreign_keys = OFF;

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
