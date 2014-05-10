/*
Navicat SQLite Data Transfer

Source Server         : Socialnetwork
Source Server Version : 30706
Source Host           : :0

Target Server Type    : SQLite
Target Server Version : 30706
File Encoding         : 65001

Date: 2013-10-08 12:04:21
*/

PRAGMA foreign_keys = OFF;

-- ----------------------------
-- Table structure for "main"."tbl_contacts"
-- ----------------------------
DROP TABLE "main"."sd_contacts";
CREATE TABLE "sd_contacts" ("id" INTEGER PRIMARY KEY  NOT NULL ,"title" varchar(128) NOT NULL ,"email" varchar(128) NOT NULL , "name" varchar(128) NOT NULL ,  "content" text, "phone" VARCHAR(128), "address" VARCHAR(128), "city" VARCHAR(128), "country" VARCHAR(128), "created" datetime DEFAULT (NULL) , "status" tinyint(1) DEFAULT ('0'));