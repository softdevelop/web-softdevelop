/*
Navicat SQLite Data Transfer

Source Server         : cms
Source Server Version : 30706
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30706
File Encoding         : 65001

Date: 2014-02-13 09:52:31
*/

PRAGMA foreign_keys = OFF;

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
