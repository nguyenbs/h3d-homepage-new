
/** admins indexes **/
db.getCollection("admins").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** albums indexes **/
db.getCollection("albums").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** contacts indexes **/
db.getCollection("contacts").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** documents indexes **/
db.getCollection("documents").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** donates indexes **/
db.getCollection("donates").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** feedbacks indexes **/
db.getCollection("feedbacks").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** notices indexes **/
db.getCollection("notices").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** options indexes **/
db.getCollection("options").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** our_teams indexes **/
db.getCollection("our_teams").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** slugs indexes **/
db.getCollection("slugs").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** time_lines indexes **/
db.getCollection("time_lines").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** videos indexes **/
db.getCollection("videos").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** admins records **/
db.getCollection("admins").insert({
  "_id": ObjectId("5a7123b95cd7e8203b26390d"),
  "user": "admin",
  "password": "0192023a7bbd73250516f069df18b500",
  "powers": [
    "infoSite",
    "listNotices",
    "listNotices",
    "categoryNotice",
    "listPages",
    "listAlbums",
    "listVideos",
    "listFiles",
    "languages",
    "themes",
    "themes",
    "menus",
    "plugins",
    "sitemap",
    "listUser",
    "listAccount",
    "logout",
    "facebookSetting",
    "contactList",
    "contactSetting",
    "staticSetting",
    "allInSeo",
    "listLinkWeb",
    "groupLinkWeb",
    "feedbackSetting",
    "listTeam",
    "settingIndex",
    "settingIntroduce",
    "platformSetting",
    "designtoolSetting",
    "3dvrCloudMediaSetting",
    "3dvrarMarketingSetting",
    "nenTangDichVu3DSetting",
    "nenTangMuaBanNoiThatSetting",
    "nenTangMuaBan3DSetting",
    "productSetting",
    "downloadSetting",
    "gallerySetting",
    "footerSetting"
  ],
  "modified": ISODate("2018-01-31T02:02:33.630Z"),
  "created": ISODate("2018-01-31T02:02:33.630Z"),
  "id": "5a7123b95cd7e8203b26390d",
  "email": "",
  "information": ""
});

/** albums records **/
db.getCollection("albums").insert({
  "_id": ObjectId("554d670e47c7def51d8b4569"),
  "view": 0,
  "title": "slideImageHome",
  "key": "",
  "img": [
    {
      "src": "/app/webroot/upload/admin/images/GreenID%20team%201-%20web.jpg",
      "alt": "slideImageHome",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/images/IMG_8175.JPG",
      "alt": "slideImageHome",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/images/solar%20PV%20for%20household%20in%20An%20GIang.JPG",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/images/_MG_3582.JPG",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/images/LED%20light%20in%20kindergarten%20school%20in%20Hai%20Ha%20commune%2C%20Hai%20Chinh%20district%2C%20Nam%20Dinh%20province.JPG",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    }
  ],
  "time": 1431162129,
  "slug": "slideimagehome",
  "lock": 1,
  "modified": ISODate("2015-05-09T01:46:54.493Z"),
  "created": ISODate("2015-05-09T01:46:54.493Z")
});
db.getCollection("albums").insert({
  "_id": ObjectId("555ede2e47c7de2d268b4568"),
  "view": 0,
  "title": "Thinking abt Growth",
  "key": "",
  "img": [
    {
      "src": "/app/webroot/upload/images/album/Thinking%20abt%20Growth/dsc06684.jpg",
      "alt": "Thinking abt Growth"
    },
    {
      "src": "/app/webroot/upload/images/album/Thinking%20abt%20Growth/dsc06727.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Thinking%20abt%20Growth/dsc06726.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Thinking%20abt%20Growth/dsc06716.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Thinking%20abt%20Growth/dsc06707.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Thinking%20abt%20Growth/dsc06703.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Thinking%20abt%20Growth/dsc06700.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Thinking%20abt%20Growth/dsc06697.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Thinking%20abt%20Growth/dsc06685.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Thinking%20abt%20Growth/dsc06684.jpg",
      "alt": "",
      "link": ""
    }
  ],
  "time": 1432280622,
  "slug": "thinking-abt-growth",
  "lock": 0,
  "modified": ISODate("2015-05-22T07:43:42.458Z"),
  "created": ISODate("2015-05-22T07:43:42.458Z")
});
db.getCollection("albums").insert({
  "_id": ObjectId("5b05345d5cd7e8890d8bb01c"),
  "view": NumberInt(0),
  "idSlug": "5b05345d5cd7e8890d8bb01d",
  "title": "?????i t??c c???a ch??ng t??i",
  "key": "",
  "img": [
    {
      "src": "/app/webroot/upload/admin/files/album-anh/sectwo_services3.png",
      "alt": "",
      "link": "",
      "title": "?????i t??c c???a ch??ng t??i",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/sectwo_services9.png",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/sectwo_services8.png",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/sectwo_services7.png",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/sectwo_services6.png",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/sectwo_services5.png",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/sectwo_services4.png",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/sectwo_services2.png",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/sectwo_services1.png",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    }
  ],
  "time": NumberInt(1527067741),
  "slug": "doi-tac-cua-chung-toi",
  "lock": NumberInt(0),
  "modified": ISODate("2018-05-23T09:29:01.169Z"),
  "created": ISODate("2018-05-23T09:29:01.169Z")
});
db.getCollection("albums").insert({
  "_id": ObjectId("555edf0847c7de84268b4567"),
  "view": 0,
  "title": "Mcknight_IR",
  "key": "",
  "img": [
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8393.jpg",
      "alt": "Mcknight_IR"
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/untitled_panorama1.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/mg_3689.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/mg_3575.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/mg_3529.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8964.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8958.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8953.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8935.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8931.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8921.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8912.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8908.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8905.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8902.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8902.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8833.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8789.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8912.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8702.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8690.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8688.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8677.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8671.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8613.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8612.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8603.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8501.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8491.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8472.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8464.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8405.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8393.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8378.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8378.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8358.jpg",
      "alt": "",
      "link": ""
    },
    {
      "src": "/app/webroot/upload/images/album/Mcknight_IR/img_8348.jpg",
      "alt": "",
      "link": ""
    }
  ],
  "time": 1432280840,
  "slug": "mcknight-ir",
  "lock": 0,
  "modified": ISODate("2015-05-22T07:47:20.242Z"),
  "created": ISODate("2015-05-22T07:47:20.242Z")
});
db.getCollection("albums").insert({
  "_id": ObjectId("5af5d6145cd7e8d461782b8a"),
  "view": NumberInt(0),
  "idSlug": "5af5d6145cd7e8d461782b8b",
  "title": "Thi???t k??? ???n t?????ng",
  "key": "",
  "img": [
    {
      "src": "/app/webroot/upload/admin/files/album-anh/1.png",
      "alt": "Thi???t k??? ???n t?????ng",
      "link": "https://720.house3d.net/panorama-player/09169234",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/2.png",
      "alt": "",
      "link": "https://720.house3d.net/panorama-player/09437270",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/7.png",
      "alt": "",
      "link": "https://720.house3d.net/panorama-player/08517050",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/8.png",
      "alt": "",
      "link": "https://720.house3d.net/panorama-player/07660320",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/3.png",
      "alt": "",
      "link": "https://720.house3d.net/panorama-player/03462690",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/4.png",
      "alt": "",
      "link": "https://720.house3d.net/panorama-player/05549035",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/5.png",
      "alt": "",
      "link": "https://720.house3d.net/panorama-player/09532355",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/9.png",
      "alt": "",
      "link": "https://720.house3d.net/panorama-player/05941594",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/6.png",
      "alt": "",
      "link": "https://720.house3d.net/panorama-player/09436963",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/8.png",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    }
  ],
  "time": NumberInt(1526115182),
  "slug": "thiet-ke-an-tuong",
  "lock": NumberInt(0),
  "modified": ISODate("2018-05-11T17:42:44.320Z"),
  "created": ISODate("2018-05-11T17:42:44.320Z")
});
db.getCollection("albums").insert({
  "_id": ObjectId("5b11114b5cd7e80b73f7aa9a"),
  "view": NumberInt(0),
  "idSlug": "5b111ceb5cd7e82535f7aa9a",
  "title": "Thi???t k??? ???n t?????ng",
  "key": "",
  "img": [
    {
      "src": "/app/webroot/upload/admin/files/album-anh/slide1.jpg",
      "alt": "Thi???t k??? ???n t?????ng",
      "link": "google.com.vn",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/slide1.jpg",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/slide1.jpg",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/slide1.jpg",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    },
    {
      "src": "/app/webroot/upload/admin/files/album-anh/slide1.jpg",
      "alt": "",
      "link": "",
      "title": "",
      "description": ""
    }
  ],
  "time": NumberInt(1527861619),
  "slug": "thiet-ke-an-tuong-1",
  "lock": NumberInt(0),
  "modified": ISODate("2018-06-01T09:26:45.713Z"),
  "created": ISODate("2018-06-01T09:26:45.713Z")
});

/** contacts records **/
db.getCollection("contacts").insert({
  "_id": ObjectId("5ad989995cd7e8165db6e03e"),
  "fullName": "Joe Addison",
  "email": "joeaddison79@gmail.com",
  "fone": "0981759214",
  "title": "volunteer",
  "content": "This message is for Nguy Thi Hai, Pham Thi Huyen Trang, Nguy Thi Hoan, and Quyen.\r\n\r\nPlease tell them that unfortunately, I am still ill and will not be able to give a lesson this afternoon.\r\n\r\nIf they have any questions, they can contact me at my email address (joeaddison79@gmail.com).",
  "time": NumberInt(1524205977),
  "modified": ISODate("2018-04-20T06:32:57.261Z"),
  "created": ISODate("2018-04-20T06:32:57.261Z")
});
db.getCollection("contacts").insert({
  "_id": ObjectId("5afe4a865cd7e863288c6d56"),
  "fullName": "V?? V??n D????ng",
  "email": "josvuduong@gmail.com",
  "fone": "01665645451",
  "title": "",
  "content": "test",
  "time": NumberInt(1526614662),
  "modified": ISODate("2018-05-18T03:37:42.295Z"),
  "created": ISODate("2018-05-18T03:37:42.295Z")
});
db.getCollection("contacts").insert({
  "_id": ObjectId("5afe4b525cd7e80c118c6d56"),
  "fullName": "V?? V??n D????ng",
  "email": "josvuduong@gmail.com",
  "fone": "01665645451",
  "title": "",
  "content": "sadasd",
  "time": NumberInt(1526614866),
  "modified": ISODate("2018-05-18T03:41:06.117Z"),
  "created": ISODate("2018-05-18T03:41:06.117Z")
});
db.getCollection("contacts").insert({
  "_id": ObjectId("5b1beda05cd7e80f1adc3455"),
  "fullName": "V?? V??n D????ng",
  "email": "josvuduong@gmail.com",
  "fone": "1665645451",
  "title": "",
  "content": "????s",
  "time": NumberInt(1528556960),
  "modified": ISODate("2018-06-09T15:09:20.611Z"),
  "created": ISODate("2018-06-09T15:09:20.611Z")
});
db.getCollection("contacts").insert({
  "_id": ObjectId("5b1bedfe5cd7e8ff07dc3452"),
  "fullName": "V?? V??n D????ng",
  "email": "josvuduong@gmail.com",
  "fone": "1665645451",
  "title": "",
  "content": "????s",
  "time": NumberInt(1528557054),
  "modified": ISODate("2018-06-09T15:10:54.714Z"),
  "created": ISODate("2018-06-09T15:10:54.714Z")
});
db.getCollection("contacts").insert({
  "_id": ObjectId("5b1bee045cd7e89822dc3453"),
  "fullName": "V?? V??n D????ng",
  "email": "josvuduong@gmail.com",
  "fone": "1665645451",
  "title": "",
  "content": "????s",
  "time": NumberInt(1528557060),
  "modified": ISODate("2018-06-09T15:11:00.71Z"),
  "created": ISODate("2018-06-09T15:11:00.71Z")
});
db.getCollection("contacts").insert({
  "_id": ObjectId("5b1bee105cd7e8ff07dc3453"),
  "fullName": "V?? V??n D????ng",
  "email": "josvuduong@gmail.com",
  "fone": "1665645451",
  "title": "",
  "content": "????s",
  "time": NumberInt(1528557072),
  "modified": ISODate("2018-06-09T15:11:12.470Z"),
  "created": ISODate("2018-06-09T15:11:12.470Z")
});
db.getCollection("contacts").insert({
  "_id": ObjectId("5b1bee1c5cd7e80d1adc3455"),
  "fullName": "V?? V??n D????ng",
  "email": "josvuduong@gmail.com",
  "fone": "1665645451",
  "title": "",
  "content": "????s",
  "time": NumberInt(1528557084),
  "modified": ISODate("2018-06-09T15:11:24.176Z"),
  "created": ISODate("2018-06-09T15:11:24.176Z")
});
db.getCollection("contacts").insert({
  "_id": ObjectId("5b1bee385cd7e89c3fdc3452"),
  "fullName": "V?? V??n D????ng",
  "email": "josvuduong@gmail.com",
  "fone": "1665645451",
  "title": "",
  "content": "????s",
  "time": NumberInt(1528557112),
  "modified": ISODate("2018-06-09T15:11:52.925Z"),
  "created": ISODate("2018-06-09T15:11:52.925Z")
});

/** documents records **/

/** donates records **/
db.getCollection("donates").insert({
  "_id": ObjectId("5a72e8115cd7e89b08951910"),
  "fullName": "donate2",
  "email": "01276687588",
  "fone": "donate2@gmail.com",
  "content": "n???i dung 2",
  "time": NumberInt(1517479953),
  "modified": ISODate("2018-02-01T10:12:33.590Z"),
  "created": ISODate("2018-02-01T10:12:33.590Z")
});
db.getCollection("donates").insert({
  "_id": ObjectId("5a72e88c5cd7e8cd14951910"),
  "fullName": "donate3",
  "email": "01276687588",
  "fone": "duy1@gmail.com",
  "content": "n???i dung",
  "time": NumberInt(1517480076),
  "modified": ISODate("2018-02-01T10:14:36.602Z"),
  "created": ISODate("2018-02-01T10:14:36.602Z")
});

/** feedbacks records **/
db.getCollection("feedbacks").insert({
  "_id": ObjectId("5af7f8f15cd7e8f94cee7e54"),
  "fullName": "ALBERTO KAYEL",
  "avatar": "/app/webroot/upload/admin/files/album-anh/secfour_services1.png",
  "positions": "",
  "content": "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>\r\n",
  "link": "",
  "modified": ISODate("2018-05-13T08:36:01.920Z"),
  "created": ISODate("2018-05-13T08:36:01.920Z")
});
db.getCollection("feedbacks").insert({
  "_id": ObjectId("5af7f9085cd7e8860cee7e52"),
  "fullName": "PHAM VAN DUNG",
  "avatar": "/app/webroot/upload/admin/files/album-anh/secfour_services1.png",
  "positions": "",
  "content": "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>\r\n",
  "link": "",
  "modified": ISODate("2018-05-13T08:36:24.966Z"),
  "created": ISODate("2018-05-13T08:36:24.966Z")
});
db.getCollection("feedbacks").insert({
  "_id": ObjectId("5af7f9255cd7e86f50ee7e53"),
  "fullName": "V?? V??n D????ng",
  "avatar": "/app/webroot/upload/admin/files/album-anh/secfour_services1.png",
  "positions": "",
  "content": "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>\r\n",
  "link": "",
  "modified": ISODate("2018-05-13T08:36:53.315Z"),
  "created": ISODate("2018-05-13T08:36:53.315Z")
});

/** notices records **/
db.getCollection("notices").insert({
  "_id": ObjectId("5a78314c5cd7e84e701c28cc"),
  "view": NumberInt(25),
  "idSlug": "5a78314c5cd7e84e701c28cd",
  "title": "S??? li???u cho th???y 300 tri???u tr??? em s???ng t???i c??c khu v???c v???i kh??ng kh?? c???c k??? ?? nhi???m",
  "slug": "so-lieu-cho-thay-300-trieu-tre-em-song-tai-cac-khu-vuc-voi-khong-khi-cuc-ky-o-nhiem",
  "key": "S??? li???u cho th???y 300 tri???u tr??? em s???ng t???i c??c khu v???c v???i kh??ng kh?? c???c k??? ?? nhi???m",
  "content": "<div style=\"text-align: center;\"><img alt=\"\" src=\"http://greenidvietnam.org.vn/app/webroot/upload/images/02(1).jpg\" style=\"height:481px; width:800px\" /></div>\r\n\r\n<p>Theo nghi&ecirc;n c???u m???i b???i Unicef, 300 tri???u tr??? em tr&ecirc;n th??? gi???i s???ng t???i c&aacute;c khu v???c v???i kh&ocirc;ng kh&iacute; b??? &ocirc; nhi???m c???c cao, n??i nh???ng kh&oacute;i ?????c nhi???u g???p 6 l???n quy ?????nh th??? gi???i.<br />\r\nNghi&ecirc;n c???u, s??? d???ng d??? li???u v??? tinh, l&agrave; nghi&ecirc;n c???u ?????u ti&ecirc;n tr&ecirc;n th??? gi???i c&oacute; s??? li???u ??o l?????ng m???c ????? ph??i nhi???m v&agrave; ch??? ra r???ng g???n 90% tr??? em tr&ecirc;n th??? gi???i &ndash; 2 t???&nbsp; tr??? em &ndash; s???ng t???i c&aacute;c khu v???c n??i &ocirc; nhi???m kh&ocirc;ng kh&iacute; b&ecirc;n ngo&agrave;i v?????t qu&aacute; m???c gi???i h???n c???a T??? ch???c Y t??? th??? gi???i WHO.<br />\r\nUnicef ??&atilde; c???nh b&aacute;o m???c ????? &ocirc; nhi???m kh&ocirc;ng kh&iacute; to&agrave;n c???u ??&atilde; g&oacute;p ph???n g&acirc;y n&ecirc;n c&aacute;i ch???t c???a 600000 tr??? em m???i n??m &ndash; nhi???u h??n s??? tr??? em ch???t do s???t xu???t huy???t v&agrave; HIV/Aids c???ng l???i. Tr??? em d??? b??? t???n th????ng b???i &ocirc; nhi???m kh&ocirc;ng kh&iacute; h??n nhi???u, nh???t l&agrave; v??? nh???ng t???n th????ng s???c kh???e k&eacute;o d&agrave;i v&agrave; s??? ph&aacute;t tri???n n&atilde;o b??? tr??? em, Unicef ??&atilde; c???nh b&aacute;o v&agrave; th&uacute;c gi???c c&aacute;c qu???c gia tham gia h???i ngh??? th?????ng ?????nh v??? kh&iacute; h???u to&agrave;n c???u v&agrave;o th&aacute;ng t???i ????? gi???m nhanh m???c ????? ?????t nguy&ecirc;n li???u h&oacute;a th???ch.<br />\r\nGi&aacute;m ?????c ??i???u h&agrave;nh c???a Unicef &ndash; Anthony Lake n&oacute;i &ldquo;T???m quan tr???ng c???a nh???ng nguy h???i do &ocirc; nhi???m kh&ocirc;ng kh&iacute; l&agrave; r???t l???n. Kh&ocirc;ng m???t x&atilde; h???i n&agrave;o c&oacute; th??? ????? n??ng l???c ????? ph???t l??? &ocirc; nhi???m kh&ocirc;ng kh&iacute;. Ch&uacute;ng ta b???o v??? tr??? em khi ch&uacute;ng ta b???o v??? ch???t l?????ng kh&ocirc;ng kh&iacute; c???a m&igrave;nh. C??? hai ?????u l&agrave; trung t&acirc;m cho t????ng lai c???a ch&uacute;ng ta.&quot;<br />\r\n&Ocirc; nhi???m kh&ocirc;ng kh&iacute; l&agrave; nguy c?? g&acirc;y h???i cho s???c kh???e l???n nh???t tr&ecirc;n th??? gi???i, theo WHO, v&agrave; hi???n t&igrave;nh h&igrave;nh ??ang t??? d???n, v???i c&aacute;c m???c ????? kh&ocirc;ng kh&iacute; ?????c h???i t??ng l&ecirc;n 8% trong v&ograve;ng 5 n??m qua. H??n 3 tri???u ng?????i m???i n??m qua ?????i do &ocirc; nhi???m kh&ocirc;ng kh&iacute; b&ecirc;n ngo&agrave;i &ndash; trung b&igrave;nh 6 ng?????i m???i ph&uacute;t &ndash; v&agrave; con s??? n&agrave;y s??? t??ng l&ecirc;n g???p ??&ocirc;i v&agrave;o n??m 2050 do nh???ng th&agrave;nh ph??? ph&aacute;t tri???n nhanh ???????c m??? r???ng. &Ocirc; nhi???m kh&ocirc;ng kh&iacute; trong nh&agrave;, ch??? y???u t??? b???p ?????t g??? ho???c ph&acirc;n, g&acirc;y ra 3 tri???u c&aacute;i ch???t m???t n??m.<br />\r\nB&aacute;o c&aacute;o c???a Unicef cho bi???t, tr??? em ?????c bi???t c&oacute; nguy c?? b???i ch&uacute;ng th??? nhanh h??n ng?????i tr?????ng th&agrave;nh v&agrave; c&aacute;c l???p t??? b&agrave;o trong ph???i ch&uacute;ng c??ng d??? ????? c&aacute;c ch???t &ocirc; nhi???m th???m qua h??n. C&aacute;c ch???t b&eacute; t&iacute; c&oacute; th??? ??i d???c qua h&agrave;ng r&agrave;o m&aacute;u &ndash; n&atilde;o, ??? tr??? em h??? th???ng n&agrave;y &iacute;t ch???ng th???m h??n, v??nh vi???n g&acirc;y nguy h???i ?????n ph&aacute;t tri???n nh???n th???c v&agrave; t????ng lai c???a ch&uacute;ng. Th???m ch&iacute; c??? nh???ng ?????a tr??? ch??a ???????c ch&agrave;o ?????i c??ng b??? ???nh h?????ng, v&igrave; c&aacute;c ch???t &ocirc; nhi???m b??? ph??? n??? mang thai h&iacute;t v&agrave;o c&oacute; th??? ??i qua h&agrave;ng r&agrave;o d??? con, g&acirc;y nguy hi???m cho b&agrave;o thai.<br />\r\nGi&aacute;o s?? Jos Lelieveld t???i Vi???n Max Planck t???i Mainz, ?????c, ??&atilde; n&oacute;i trong b???n b&aacute;o c&aacute;o xu???t s???c c???a m&igrave;nh :&rdquo; &Ocirc; nhi???m kh&ocirc;ng kh&iacute; l&agrave; m???t v???n ????? ti&ecirc;u bi???u t???i c&aacute;c qu???c gia ??ang ph&aacute;t tri???n, n??i c&aacute;c tr??? em c&oacute; &iacute;t trang b??? ch???ng l???i &ocirc; nhi???m do v???n ????? dinh d?????ng ngh&egrave;o n&agrave;n v&agrave; n??i y t??? c&ograve;n thi???u th???n.&rdquo;<br />\r\nNghi&ecirc;n c???u c???a Unicef bao g???m c??? nh???ng d??? li???u v??? c&aacute;c th&agrave;nh t??? g&acirc;y &ocirc; nhi???m t??? m???t d???i v??? tinh v???i tr???m ??i???u khi???n ??? m???t ?????t ????? ??o s??? tr??? em ??? c&aacute;c khu v???c b??? &ocirc; nhi???m. Trong 300 tri???u tr??? em ph????i nhi???m v???i c&aacute;c m???c ????? &ocirc; nhi???m c&aacute;o h??n g???p 6 l???n so v???i gi???i h???n c???a WHO, 220 tri???u tr??? em ??ang s???ng ??? nam &Aacute;, n??i c&oacute; ???n ????? - ?????t n?????c c???a r???t nhi???u th&agrave;nh ph??? &ocirc; nhi???m nh???t th??? gi???i.<br />\r\n70 tri???u tr??? em kh&aacute;c ??ang s???ng v???i b???u kh&ocirc;ng kh&iacute; c???c ?????c t???i ??&ocirc;ng &Aacute;, ch??? y???u t???i Trung QU???c. Nh??ng nhi???u tr??? em b??? ph??i nhi???m v???i &ocirc; nhi???m kh&ocirc;ng kh&iacute; cao h??n gi???i h???n c???a WHO t???i Ch&acirc;u Phi &ndash; 520 tri???u &ndash; so v???i ??&ocirc;ng &Aacute;.<br />\r\nKh???ng ho???ng &ocirc; nhi???m kh&ocirc;ng kh&iacute; t??? nh???t t???i c&aacute;c qu???c gia c&oacute; thu nh???p th???p v&agrave; trung b&igrave;nh, n??i 98% th&agrave;nh ph???&nbsp; kh&ocirc;ng ?????t y&ecirc;u c???u c???a WHO, nh??ng h??n n???a s??? th&agrave;nh ph??? t???i c&aacute;c qu???c gia gi&agrave;u c&oacute; c??ng th???t b???i trong vi???c ?????t y&ecirc;u c???u tr&ecirc;n. T???i Ch&acirc;u &Acirc;u, 120 tri???u tr??? em s???ng t???i c&aacute;c khu v???c n??i &ocirc; nhi???m kh&ocirc;ng kh&iacute; b&ecirc;n ngo&agrave;i v?????t qua ng?????ng gi???i h???n qu???c t???m v&agrave; 20 tri???u tr??? em ch???u ?????ng &ocirc; nhi???m kh&ocirc;ng kh&iacute; cao g???p ??&ocirc;i gi???i h???n.<br />\r\nTi???n s??? Penny Woods, gi&aacute;m ?????c ??i???u h&agrave;nh c???a Qu??? Ph???i Anh Qu???c, ??&atilde; ph&aacute;t bi???u: &ldquo;T???i Anh Qu???c, ch&uacute;ng ta bi???t r???ng s???c kh???e tr??? em ??ang b??? ?????t trong nguy c?? nguy hi???m h???ng ng&agrave;y b???i c&aacute;c m???c ????? &ocirc; nhi???m kh&ocirc;ng an to&agrave;n t???i r???t nhi???u th??? tr???n v&agrave; th&agrave;nh ph???. &Iacute;t nh???t 3000 tr?????ng h???c ?????t ??? n??i c&oacute; m???c ????? &ocirc; nhi???m v?????t qu&aacute; ph&aacute;p lu???t quy ?????nh. Tuy nhi&ecirc;n ch??? r???t &iacute;t tr?????ng h???c c&oacute; thi???t b??? gi&aacute;m s&aacute;t xung quanh. Gi??? l&agrave; th???i ??i???m cho ch&iacute;nh ph??? thi h&agrave;nh m???t b??? lutaaj kh&ocirc;ng kh&iacute; s???ch m???i ????? gi???i quy???t v???n ????? &ocirc; nhi???m m&ocirc;i tr?????ng th???i hi???n ?????i n&agrave;y v&agrave; b???o v??? s???c kh???e c???a t???t c??? ch&uacute;ng ta.&rdquo;<br />\r\n??? b&aacute;o c&aacute;o, Unicef khuy???n kh&iacute;ch t???t c??? c&aacute;c qu???c gia gi???m thi???u &ocirc; nhi???m kh&ocirc;ng kh&iacute; bang c&aacute;ch gi???m ?????t nguy&ecirc;n li???u h&oacute;a th???ch t???i c&aacute;c nh&agrave; m&aacute;y ??i???n v&agrave; ph????ng ti???n giao th&ocirc;ng, ?????ng th???i c??ng gi&uacute;p gi???i quy???t bi???n ?????i kh&iacute; h???u. Vi???c nh&acirc;n ??&ocirc;i l???i &iacute;ch n&agrave;y ??&atilde; d???n ?????n c&aacute;c h&agrave;nh ?????ng quan tr???ng ??? Trung Qu???c trong nh???ng n??m g???n ??&acirc;y. Gi???i quy???t &ocirc; nhi???m kh&ocirc;ng kh&iacute; c??ng gi&uacute;p ti???t ki???m chi ph&iacute;: Ng&acirc;n h&agrave;ng Th??? gi???i t&iacute;nh ???????c s??? ti???n m???t cho &ocirc; nhi???m kh&ocirc;ng kh&iacute; nhi???u h??n 5 ngh&igrave;n t??? $ m???t n??m.<br />\r\nUnicef c??ng g???i &yacute; gi???m t???i ??a ph??i nhi???m c???a tr??? em v???i &ocirc; nhi???m b???ng c&aacute;ch ?????m b???o ngu???n &ocirc; nhi???m nh?? c&aacute;c con ???????ng ??&ocirc;ng ??&uacute;c v&agrave; c&aacute;c nh&agrave; m&aacute;y kh&ocirc;ng b??? ?????t g???n nh???ng tr?????ng h???c v&agrave; s&acirc;n ch??i v&agrave; b???ng c&aacute;ch ph??? bi???n c&aacute;c b???p ??un s???ch h??n.<br />\r\n<br />\r\nD???ch: H&agrave; Di???p<br />\r\nNgu???n: <a href=\"https://www.theguardian.com/environment/2016/oct/31/300-million-children-live-in-areas-with-extreme-air-pollution-data-reveals\">TheGuardian</a></p>",
  "category": [
    NumberInt(1),
    NumberInt(19)
  ],
  "image": "/app/webroot/upload/admin/images/greenid/03.jpg",
  "event": NumberInt(1),
  "author": "TheGuardian",
  "introductory": "Theo nghi??n c???u m???i b???i Unicef, 300 tri???u tr??? em tr??n th??? gi???i s???ng t???i c??c khu v???c v???i kh??ng kh?? b??? ?? nhi???m c???c cao, n??i nh???ng kh??i ?????c nhi???u g???p 6 l???n quy ?????nh th??? gi???i.",
  "time": NumberInt(1491123539),
  "type": "post",
  "modified": ISODate("2018-02-05T10:26:20.518Z"),
  "created": ISODate("2018-02-05T10:26:20.518Z")
});
db.getCollection("notices").insert({
  "_id": ObjectId("5a7830ee5cd7e87f441c28cc"),
  "view": NumberInt(20),
  "idSlug": "5a7830ee5cd7e87f441c28cd",
  "title": "C??c v??? ph??? huynh ???????c c???nh b??o s??? d???ng che xe ?????y ????? ?????i ph?? v???i ?? nhi???m kh??ng kh??.",
  "slug": "cac-vi-phu-huynh-duoc-canh-bao-su-dung-che-xe-day-de-doi-pho-voi-o-nhiem-khong-khi",
  "key": "",
  "content": "<p><span style=\"font-size:14px\">Theo l???i c???a c&aacute;c chuy&ecirc;n gia, c&aacute;c b???c ph??? huynh n&ecirc;n s??? d???ng che xe ?????y trong su???t qu&atilde;ng ???????ng ????a tr??? ?????n tr?????ng ????? b???o v??? tr??? kh???i &ocirc; nhi???m kh&ocirc;ng kh&iacute;.</span></p>\r\n\r\n<div style=\"text-align: center;\"><span style=\"font-size:14px\"><img alt=\"\" src=\"http://greenidvietnam.org.vn/app/webroot/upload/images/01(3).jpg\" style=\"height:540px; width:900px\" /></span></div>\r\n\r\n<p><span style=\"font-size:14px\">C&aacute;c nh&agrave; khoa h???c ??&atilde; ki???m tra m???c ????? &ocirc; nhi???m kh&ocirc;ng kh&iacute; trong xe ?????y ????? ??&aacute;nh gi&aacute; m???c ????? ph??i nhi???m c???a tr??? em ???????c ????a theo ?????n tr?????ng so v???i v???i c&aacute;c anh ch??? l???n h??n. C&aacute;c nh&agrave; nghi&ecirc;n c???u ??&atilde; t&igrave;m ra r???ng c&aacute;c ph???n t??? g&acirc;y &ocirc; nhi???m ?????c bi???t nguy h???i ???????c th???i ra t??? xe c??? c&oacute; m???t ????? cao h??n v&agrave;o bu???i s&aacute;ng.<br />\r\nTi???n s??? Prashant Kumar t???i ?????i h???c Surey, ng?????i ?????ng ?????u nghi&ecirc;n c???u cho bi???t &ldquo;Tr??? em d??? b??? ???nh h?????ng b???i &ocirc; nhi???m h??n ng?????i tr?????ng th&agrave;nh, do c&aacute;c c?? ch??? c???a c?? th??? c&ograve;n ??ang ph&aacute;t tri???n v&agrave; ch??a ho&agrave;n thi???n c&ugrave;ng v???i vi???c c&ograve;n th???p b&eacute; nh??? c&acirc;n. Nh???ng y???u t??? tr&ecirc;n cung c???p m???t c&aacute;i nh&igrave;n s&aacute;ng su???t cho c&aacute;c gia ??&igrave;nh hay ????a con ??i m???u gi&aacute;o v&agrave; tr?????ng ti???u h???c b???ng vi???c ??i b???. Quan tr???ng kh&ocirc;ng k&eacute;m l&agrave; tr??? em c&oacute; th??? c&oacute; nguy c?? h&iacute;t ph???i m???t s??? ch???t h&oacute;a h???c nguy hi???m v&agrave; c???c b???n. M???t trong nh???ng c&aacute;ch ????n gi???n nh???t ????? ch???ng l???i t&igrave;nh tr???ng tr&ecirc;n l&agrave; s??? d???ng m???t r&agrave;o ch???n gi???a tr??? trong xe ?????y v&agrave; x??? th???i &ocirc; nhi???m, ?????c bi???t l&agrave; c&aacute;c ??i???m c&oacute; ????? &ocirc; nhi???m cao nh?? ng&atilde; t?? ???????ng, v&igrave; v???y ba m??? c???n s??? d???ng che xe ?????y n???u c&oacute; th???.&rdquo;<br />\r\nNghi&ecirc;n c???u m???i ???????c c&ocirc;ng b??? tr&ecirc;n t???p ch&iacute; &Ocirc; nhi???m M&ocirc;i tr?????ng, ?????t m&aacute;y ph&aacute;t hi???n h???t v???t ch???t &ocirc; nhi???m trong c&aacute;c xe ?????y v&agrave; ??i ?????n tr?????ng h???c, v??? nh&agrave; trong 64 l???n t???i Guildford ??? c&aacute;c th???i ??i???m ????a ??&oacute;n tr???. Nh???ng nh&agrave; nghi&ecirc;n c???u th???y r???ng &ocirc; nhi???m kh&ocirc;ng kh&iacute; t??ng v???t t???i nh???ng ng&atilde; ba ng&atilde; t?? v&agrave; t???i c&aacute;c ??i???m d???ng xe bu&yacute;t, v&agrave; c&aacute;c h???t &ocirc; nhi???m c&oacute; m???t ????? cao h??n v&agrave;o bu???i s&aacute;ng, khi xe c??? ??&ocirc;ng nh???t.<br />\r\nTheo k???t lu???n c???a c&aacute;c nh&agrave; nghi&ecirc;n c???u &ldquo;C&aacute;c h???t v???t ch???t g&acirc;y ???nh h?????ng ?????n s???c kh???e nhi???u h??n nh???ng ch???t &ocirc; nhi???m k&iacute;ch th?????c l???n kh&aacute;c v&agrave; tr??? em d??? b??? ???nh h?????ng h??n v???i &ocirc; nhi???m h???t v???t ch???t, c&oacute; nhu c???u r&otilde; r&agrave;ng cho vi???c &aacute;p d???ng c&aacute;c bi???n ph&aacute;p ph&ograve;ng ng???a ????? h???n ch??? ti???p x&uacute;c c???a tr??? em v???i &ocirc; nhi???m tr&ecirc;n qu&atilde;ng ???????ng ??i h???c d???c theo c&aacute;c tuy???n ???????ng ??&ocirc;ng ??&uacute;c.&rdquo;<br />\r\nNghi&ecirc;n c???u tr?????c ??&oacute; v??? vi???c li???u ng?????i tr?????ng th&agrave;nh c&oacute; ti???p x&uacute;c v???i &ocirc; nhi???m &iacute;t h??n tr??? em kh&ocirc;ng khi m&agrave; tr??? em c&oacute; chi???u cao g???n ch???m t???i nh???ng ???ng x??? th???i h??n, ??&atilde; cho k???t qu??? tr&aacute;i chi???u. M???t nghi&ecirc;n c???u kh&aacute;c cho th???y tr??? em ph??i nhi???m v???i c&aacute;c ch???t &ocirc; nhi???m nhi???u g???p ??&ocirc;i, trong khi m???t nghi&ecirc;n c???u kh&aacute;c l???i ch??? ra r???ng tr??? em trong xe ?????y ti???p x&uacute;c v???i c&aacute;c h???t v???t ch???t &ocirc; nhi???m &iacute;t h??n. Nghi&ecirc;n c???u m???i l???i kh&ocirc;ng t&igrave;m ra s??? kh&aacute;c bi???t r&otilde; r???t n&agrave;o.<br />\r\nM???c ????? &ocirc; nhi???m h???t v???t ch???t t???i Anh nh&igrave;n chung d?????i m???c lu???t cho ph&eacute;p, nh??ng 40 trong 51 khu v???c ??o ch???t l?????ng kh&ocirc;ng kh&iacute; ??? Anh v?????t qu&aacute; m???c T??? ch???c Y t??? Th??? gi???i (WHO) cho ph&eacute;p ?????i v???i c&aacute;c h???t v???t ch???t &ocirc; nhi???m, v&agrave; WHO ??ang th&uacute;c gi???c Anh h&agrave;nh ?????ng nhi???u h??n ????? gi???m &ocirc; nhi???m. G???n ??&acirc;y, WHO ??&atilde; cho bi???t tr&ecirc;n th??? gi???i c&oacute; kho???ng 560.000 tr??? em d?????i 5 tu???i ch???t h&agrave;ng n??m do &ocirc; nhi???m kh&ocirc;ng kh&iacute;.<br />\r\n&Ocirc; nhi???m h???t v???t ch???t g&acirc;y n&ecirc;n t???ng c???ng 29.000 ca ch???t y???u ??? ng?????i tr?????ng th&agrave;nh m???i n??m ??? Anh. M???c ????? c???a m???t ch???t g&acirc;y &ocirc; nhi???m kh&aacute;c &ndash; NO2 &ndash; tr&ecirc;n m???c lu???t &nbsp;cho ph&eacute;p r???t nhi???u t???i Anh. M???t nghi&ecirc;n c???u m???i ???????c ???y th&aacute;c b???i Th??? tr?????ng Lu&acirc;n ??&ocirc;n, Sadiq Khan ??&atilde; cho th???y h??n 800 tr?????ng h???c, tr?????ng m???u gi&aacute;o v&agrave; ?????i h???c ??? Lu&acirc;n ??&ocirc;n ??? t???i c&aacute;c khu v???c c&oacute; m???t ????? NO2 v?????t ng?????ng cho ph&eacute;p.<br />\r\n&Ocirc;ng Khan c??ng ??&atilde; tuy&ecirc;n b??? 12 &ldquo;??i???m xe bu&yacute;t &iacute;t x??? th???i&rdquo;, n??i m&agrave; ch??? nh???ng xa bu&yacute;t s???ch nh???t ???????c ph&eacute;p ho???t ?????ng. ??i???m ?????u ti&ecirc;n l&agrave; ph??? Putney High Street, m???t ?????a ??i???m kh&eacute;t ti???ng &ocirc; nhi???m, v???i c&aacute;c ?????a ??i???m kh&aacute;c bao g???m c??? Brixton.<br />\r\n&Ocirc;ng Khan, ng?????i ??&atilde; n&oacute;i c&aacute;c khu v???c tr&ecirc;n ?????i di???n cho m???ng l?????i s&acirc;u r???ng nh???t c???a c&aacute;c xe bu&yacute;t x??? th??? gi???i, cho bi???t: &ldquo;Kh&ocirc;ng kh&iacute; ?????c h???i ??? Lu&acirc;n ??&ocirc;n l&agrave; m???t ??i???u ??&aacute;ng x???u h???. Vi???c t&ocirc;i l&agrave;m s??? t???o n&ecirc;n m???t s??? kh&aacute;c bi???t to l???n ?????i v???i &ocirc; nhi???m g&acirc;y ra b???i h??? th???ng giao th&ocirc;ng c&ocirc;ng c???ng c???a ch&uacute;ng ta&rdquo;.<br />\r\nNghi&ecirc;n c???u ???????c c&ocirc;ng b??? b???i ?????i nghi&ecirc;n c???u c???a Kumar v&agrave;o th&aacute;ng Hai ??&atilde; cho th???y nh???ng t&agrave;i x??? ??? Lu&acirc;n ??&ocirc;n l&agrave; nh???ng ng?????i ti???p x&uacute;c v???i &iacute;t &ocirc; nhi???m h???t v???t ch???t nh???t, trong khi nh???ng ng?????i s??? d???ng ph????ng ti???n c&ocirc;ng c???ng nh?? t&agrave;u ??i???n ng???m hay xe bu&yacute;t. Kumar ph&aacute;t bi???u &ldquo;Hi???n nhi&ecirc;n c&oacute; m???t y???u t??? kh&ocirc;ng c&ocirc;ng b???ng v??? m&ocirc;i tr?????ng trong vi???c tham gia giao th&ocirc;ng ??? Lu&acirc;n ??&ocirc;n, khi nh???ng ng?????i th???i ra nhi???u &ocirc; nhi???m nh???t l???i l&agrave; nh???ng ng?????i &iacute;t b??? ph??i nhi???m nh???t&rdquo;.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Ngu???n:&nbsp;<a href=\"https://www.theguardian.com/environment/2017/mar/09/use-buggy-covers-to-combat-air-pollution-danger-parents-warned\">TheGuardian</a><br />\r\nD???ch: H&agrave; Di???p</span></p>",
  "category": [
    NumberInt(1)
  ],
  "image": "/app/webroot/upload/admin/images/01(3).jpg",
  "event": NumberInt(1),
  "author": "TheGuardian",
  "introductory": "Theo l???i c???a c??c chuy??n gia, c??c b???c ph??? huynh n??n s??? d???ng che xe ?????y trong su???t qu??ng ???????ng ????a tr??? ?????n tr?????ng ????? b???o v??? tr??? kh???i ?? nhi???m kh??ng kh??.",
  "time": NumberInt(1490754437),
  "type": "post",
  "modified": ISODate("2018-02-05T10:24:46.843Z"),
  "created": ISODate("2018-02-05T10:24:46.843Z")
});
db.getCollection("notices").insert({
  "_id": ObjectId("555ea93347c7de1c238b4567"),
  "title": "Long-term warming likely to be significant despite recent slowdown",
  "slug": "long-term-warming-likely-to-be-significant-despite-recent-slowdown",
  "key": "",
  "content": "<p>A new NASA study shows Earth&#39;s climate likely will continue to warm during this century on track with previous estimates, despite the recent slowdown in the rate of global warming.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://greenidvietnam.org.vn/en/wp-content/uploads/2014/03/140311184706-large.jpg\"><img alt=\"140311184706-large\" class=\"alignnone size-full wp-image-1044\" src=\"/app/webroot/upload/images/140311184706-large-800x400.jpg\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div id=\"caption\"><em>Projection of Earth warming by 2099: A new NASA study suggests that projections of Earth&#39;s future warming should be more in line with previous estimates that indicated a higher sensitivity to increasing greenhouse gas emissions.</em></div>\r\n\r\n<div id=\"credit\"><em>Credit: NASA SVS/NASA Center for Climate Simulation</em></div>\r\n\r\n<p>This research hinges on a new and more detailed calculation of the sensitivity of Earth&#39;s climate to the factors that cause it to change, such as greenhouse gas emissions. Drew Shindell, a climatologist at NASA&#39;s Goddard Institute for Space Studies in New York, found Earth is likely to experience roughly 20 percent more warming than estimates that were largely based on surface temperature observations during the past 150 years.</p>\r\n\r\n<p>Shindell&#39;s paper on this research was published March 9 in the journal&nbsp;<em>Nature Climate Change.</em></p>\r\n\r\n<p>Global temperatures have increased at a rate of 0.22 Fahrenheit (0.12 Celsius) per decade since 1951. But since 1998, the rate of warming has been only 0.09 F (0.05 C) per decade -- even as atmospheric carbon dioxide continues to rise at a rate similar to previous decades. Carbon dioxide is the most significant greenhouse gas generated by humans.</p>\r\n\r\n<p>Some recent research, aimed at fine-tuning long-term warming projections by taking this slowdown into account, suggested Earth may be less sensitive to greenhouse gas increases than previously thought. The Fifth Assessment Report of the Intergovernmental Panel on Climate Change (IPCC), which was issued in 2013 and was the consensus report on the state of climate change science, also reduced the lower range of Earth&#39;s potential for global warming.</p>\r\n\r\n<p>To put a number to climate change, researchers calculate what is called Earth&#39;s &quot;transient climate response.&quot; This calculation determines how much global temperatures will change as atmospheric carbon dioxide continues to increase -- at about 1 percent per year -- until the total amount of atmospheric carbon dioxide has doubled. The estimates for transient climate response range from near 2.52 F (1.4 C) offered by recent research, to the IPCC&#39;s estimate of 1.8 F (1.0 C). Shindell&#39;s study estimates a transient climate response of 3.06 F (1.7 C), and determined it is unlikely values will be below 2.34 F (1.3 C).</p>\r\n\r\n<p>Shindell&#39;s paper further focuses on improving our understanding of how airborne particles, called aerosols, drive climate change in the Northern Hemisphere. Aerosols are produced by both natural sources -- such as volcanoes, wildfire and sea spray -- and sources such as manufacturing activities, automobiles and energy production. Depending on their make-up, some aerosols cause warming, while others create a cooling effect. In order to understand the role played by carbon dioxide emissions in global warming, it is necessary to account for the effects of atmospheric aerosols.</p>\r\n\r\n<p>While multiple studies have shown the Northern Hemisphere plays a stronger role than the Southern Hemisphere in transient climate change, this had not been included in calculations of the effect of atmospheric aerosols on climate sensitivity. Prior to Shindell&#39;s work, such calculations had assumed aerosol impacts were uniform around the globe.</p>\r\n\r\n<p>This difference means previous studies have underestimated the cooling effect of aerosols. When corrected, the range of likely warming based on surface temperature observations is in line with earlier estimates, despite the recent slowdown.</p>\r\n\r\n<p>One reason for the disproportionate influence of the Northern Hemisphere, particularly as it pertains to the impact of aerosols, is that most human-made aerosols are released from the more industrialized regions north of the equator. Also, the vast majority of Earth&#39;s landmasses are in the Northern Hemisphere. This furthers the effect of the Northern Hemisphere because land, snow and ice adjust to atmospheric changes more quickly than the oceans of the world.</p>\r\n\r\n<p>&quot;Working on the IPCC, there was a lot of discussion of climate sensitivity since it&#39;s so important for our future,&quot; said Shindell, who was lead author of the IPCC Fifth Assessment Report&#39;s chapter on Anthropogenic and Natural Radiative Forcing. &quot;The conclusion was that the lower end of the expected warming range was smaller than we thought before. That was a big discussion. Yet, I kept thinking, we know the Northern Hemisphere has a disproportionate effect, and some pollutants are unevenly distributed. But we don&#39;t take that into account. I wanted to quantify how much the location mattered.&quot;</p>\r\n\r\n<p>Shindell&#39;s climate sensitivity calculation suggests countries around the world need to reduce greenhouse gas emissions at the higher end of proposed emissions reduction ranges to avoid the most damaging consequences of climate change. &quot;I wish it weren&#39;t so,&quot; said Shindell, &quot;but forewarned is forearmed.&quot;</p>\r\n\r\n<p>More information, Please visit the website: http://www.sciencedaily.com/releases/2014/03/140311184706.htm</p>",
  "category": [
    NumberInt(1)
  ],
  "image": "/app/webroot/upload/admin/files/12.jpg",
  "event": 0,
  "author": "",
  "introductory": "A new NASA study shows Earth's climate likely will continue to warm during this century on track with previous estimates, despite the recent slowdown in the rate of global warming.\r\n\r\n\t\r\n\r\n\t??\r\n\r\n\tProjection ...",
  "time": NumberInt(1432296188),
  "type": "post",
  "view": 215,
  "modified": ISODate("2015-05-22T03:57:39.700Z"),
  "created": ISODate("2015-05-22T03:57:39.700Z"),
  "idSlug": "5afec0fc5cd7e80425630453"
});
db.getCollection("notices").insert({
  "_id": ObjectId("555ea97347c7de1c238b4569"),
  "title": "Large dams costs too much",
  "slug": "large-dams-costs-too-much",
  "key": "",
  "content": "<p>ThienNhien.Net - New research given by the University of Oxford (UK) states that three-quarters of large dam projects that the research team surveyed face situation of over spending with actual expenditure of 96% higher than planned budget.</p>\r\n\r\n<p>According to the team, apart from the offset cost for social and environmental losses, only actual payments for the construction of large dams was too high to hit in exchange for benefits brought.</p>\r\n\r\n<p>The report makes an analysis in all 245 major dam projects built in 65 countries during 1934-2007 which is the period with good keeping of full documentation on dams.</p>\r\n\r\n<p>The materials were collected from resources of the World Bank (WB), Asian Development Bank (ADB), the World Commission on Dams (WCD), United States Army Corps of Engineers (USACE), Tennessee Valley Authority (TVA) and the U.S. Bureau of Reclamation (USBR).</p>\r\n\r\n<p>The study shows that the over spending state in the construction of large dams is caused by both objective and subjective reasons. The objective reason is identified as particular feature of location for dam construction as unfavorable geology, fluctuated material price and exchange rate differences in the developing countries.</p>\r\n\r\n<p>Subjective reasons is the over optimism of dam developers on project completion speed and wrong cost estimate on purpose to reach an approval for the projects.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;<a href=\"http://greenidvietnam.org.vn/en/wp-content/uploads/2014/05/180314_MK_Daplon1.jpg\"><img alt=\"180314_MK_Daplon\" class=\"alignnone size-full wp-image-1141\" src=\"/app/webroot/upload/images/180314_MK_Daplon-300x225.jpg\" /></a></p>\r\n\r\n<p><em>Most of the world&#39;s large dams are facing the high cost overruns (Artwork: HaiHoi.com)</em></p>\r\n\r\n<p>The researchers acknowledge that the large dams in North America don&rsquo;t have to face the same problems of investors and dam builders in developing countries. Because materials for dam construction in North America are domestic, without affected by fluctuations in exchange rates or global supply chain. However, the dams inevitably fell in over-spending condition, normally due to delay in project progress.</p>\r\n\r\n<p>In another research result, over-spending proportion in large dam projects is higher than almost large-scale projects in other areas. To demonstrate that, the group offers some typical numbers such as: expected overrun rate of geothermal power projects is 6%; 20% for the roads; 34% for bridges and tunnels; 45% for the railway works. The only nuclear power plants have occurred over-spending status up to 207%.</p>\r\n\r\n<p>The above research results &ldquo;is certainly not intended to boycott hydropower but to oppose mistakes in the construction of large dams&quot; &ndash; stressed Mr. Bent Flyvbjerg, a professor at Sa&iuml;d Business School, Oxford University.</p>\r\n\r\n<p>In spite of an agreement that all applied assessment methods are reliable, Mr. Keith Ferguson, President of the American Association on Dam said that research scope was quite narrow. He explained: &quot;The study only focused on clarifying the past challenges of the dam industry on construction cost estimation. Meanwhile the fact that the challenge has been solved in huge attempt by the U.S. and many countries through a number of measures as an addition of risk and uncertainty in the cost modeling for more accurate estimate of dam construction cost&quot;.</p>\r\n\r\n<p>In the standpoint of the interests of poor communities lacking electricity, the International Energy Agency (IEA) proposes to implement renewable energy projects and the construction of small grid which is enough to meet the power needs for a small community.</p>\r\n\r\n<p>In a consensus, Mr. Peter Bosshard, policy director of International Rivers (IR) stated that &quot;The expansion of the national power grid to provide electricity to the poor rural areas in Africa and South Asia is not cost-effective. Regarding disinterested investing perspective, perhaps, the future of wind power, photovoltaic power and small hydro power will be much more promising.&quot;</p>\r\n\r\n<p>According resistance / Vanhien.vn, 03 / 2014</p>\r\n\r\n<p>Translator: Phuong Linh - GreenID</p>",
  "category": [
    NumberInt(1)
  ],
  "image": "/app/webroot/upload/admin/files/4.png",
  "event": 0,
  "author": "",
  "introductory": "ThienNhien.Net - New research given by the University of Oxford (UK) states that three-quarters of large dam projects that the research team surveyed face situation of over spending with actual ...",
  "time": NumberInt(1432296172),
  "type": "post",
  "view": 231,
  "modified": ISODate("2015-05-22T03:58:43.750Z"),
  "created": ISODate("2015-05-22T03:58:43.750Z"),
  "idSlug": "5afec0ec5cd7e80425630452"
});
db.getCollection("notices").insert({
  "_id": ObjectId("555ead6a47c7de6e238b456a"),
  "title": "Don Sahong dam 'fatal blow' to Mekong Delta: scientists",
  "slug": "don-sahong-dam-fatal-blow-to-mekong-delta-scientists",
  "key": "",
  "content": "<div>Laos&rsquo; new hydropower project on the Mekong will likely kill off an endangered species of dolphin and do further damage to Vietnam&#39;s delta region, which is already reeling from the effects of Chinese dams.</div>\r\n\r\n<div style=\"text-align: center;\"><a href=\"http://greenidvietnam.org.vn/en/wp-content/uploads/2014/12/don_sahong_TOCO.jpg\"><img alt=\"don_sahong_TOCO\" class=\"aligncenter size-full wp-image-1430\" src=\"/app/webroot/upload/images/don_sahong_TOCO-840x400.jpg\" /></a></div>\r\n\r\n<div style=\"text-align: center;\">Men are fishing in Vietnam&#39;s Mekong Delta. Photo: Tien Trinh</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>Vietnamese officials and experts raised these and other environmental concerns at meeting on Tuesday in the delta&rsquo;s An Giang Province.</div>\r\n\r\n<div>Nguyen Thanh Hai, a spokesman from the Mekong Delta Steering Committee, said China&#39;s operation of four of its eight planned upstream dams have already brought salinization and erosion to Vietnam.</div>\r\n\r\n<div>More projects in Laos and Cambodia will further threaten the river and the 60 million people who live along it, Hai said.</div>\r\n\r\n<div>Though the 260 megawatt Don Sahong dam is rather small compared to the US$3.8-billion Xayaburi dam that Laos began building in November 2012,&nbsp;experts say it will do more ecological damage due to its planned location in the heart of a migratory fish pathway -- roughly&nbsp;two kilometers from Cambodia and 420 kilometers from Vietnam.</div>\r\n\r\n<div>The Hou Sahong, the main tributary to the Khone waterfall, serves as the pathway for around 100 migrating fish species every year, experts said.</div>\r\n\r\n<div>The dam will block their way and severely threaten food security for Thailand, Laos, Cambodia and Vietnam.</div>\r\n\r\n<div>The dam&#39;s construction alone might suffice to kill off the last remaining members of the endangered Irrawadyy dolphin population that lives between Laos and Cambodia.</div>\r\n\r\n<div>Nguyen Huu Thien, a researcher who joined an international project on the Mekong River&#39;s environment in 2009, said: &ldquo;It&rsquo;s frightful reading the study results as a resident of the Mekong Delta.&rdquo;</div>\r\n\r\n<div>Thien said the dam could kill the delta, which was first formed millions of years ago.</div>\r\n\r\n<div>The damage, he warned, will be irreparable.</div>\r\n\r\n<div>The delta&#39;s three biggest threats, Thien maintains, are climate change, water pollution and hydropower dams.</div>\r\n\r\n<div>But while climate change has allowed people time to adapt and pollution can be cleaned up, there&rsquo;s no going back on the dams.</div>\r\n\r\n<div>&ldquo;The dams are a very big threat that will worsen the existing problems,&rdquo; he said.</div>\r\n\r\n<div>Dr Duong Van Ni from Can Tho University in the eponymous town, said the dams will hinder all efforts to deal with climate change in the region.</div>\r\n\r\n<div>&ldquo;While we&rsquo;re busy adapting to climate change and rising sea levels, the dam will come like a hit to the back of the head. It will be the fatal blow,&rdquo; Ni said.</div>\r\n\r\n<div>China has already built seven dams along the upstream Mekong, within its borders. It has planned and is building 20 others.</div>\r\n\r\n<div>Laos and Cambodia have plans for another 11, starting with Xayaburi and now Don Sahong.</div>\r\n\r\n<div>The Hanoi-based Green Innovation and Development Center (GreenID), the Vietnam Rivers Network and the delta authorities held the Tuesday conference for experts&rsquo; insights over the new dam after they gathered unanimous objections from delta farmers during a two-week survey in November.</div>\r\n\r\n<div>All of the 758 respondents from the delta&rsquo;s six provinces strongly objected to the dam.</div>\r\n\r\n<div>Pham Minh Hung, chairman of An Giang Farmers&rsquo; Association, said they have experienced adverse environmental changes in the past five to seven years.</div>\r\n\r\n<div>An Giang is one of several provinces in the delta that enjoys huge fishery resources and other blessings from the annual monsoon flood.</div>\r\n\r\n<div>But Hung said the floods have grown milder and brought less fish and other riparian creatures.</div>\r\n\r\n<div>He said salinity has affected a quarter of the province&rsquo;s area -- particularly the communities along the shore.</div>\r\n\r\n<div>&ldquo;Coastal communities are very worried about whether or not 5,000 hectares of dragon fruit will survive,&rdquo; he said.</div>\r\n\r\n<div>Le Thi Nhum, a representative of farmers from Tan Hiep District, Kien Giang, said they enjoy better harvests after the monsoon floods, which carry nutrient-rich alluvium down the Mekong.</div>\r\n\r\n<div>They also enjoy better meals and the additional income the fish and shrimp the flood brings with it.</div>\r\n\r\n<div>If the dams stop the annual flooding, there won&rsquo;t be fish, shrimp or good crop yields.</div>\r\n\r\n<div>&ldquo;We can survive without electricity, but without water, we will die,&rdquo; Nhum said.</div>\r\n\r\n<div>Nguy Thi Khanh, director of GreenID, said people are fighting against damming the Mekong dams everywhere.</div>\r\n\r\n<div>The Xayaburi dam, which is already 30 percent complete, is facing a Thai lawsuit filed against the banks funding the project.</div>\r\n\r\n<div>People in Cambodia have also voiced their objections.</div>\r\n\r\n<div>&ldquo;People are hoping to change things at the last minute,&rdquo; Khanh said.</div>\r\n\r\n<div>Reference at:&nbsp;http://www.thanhniennews.com/society/don-sahong-dam-fatal-blow-to-mekong-delta-scientists-34824.html</div>",
  "category": [
    NumberInt(1)
  ],
  "image": "/app/webroot/upload/admin/files/3(1).png",
  "event": 0,
  "author": "",
  "introductory": "Laos??? new hydropower project on the Mekong will likely kill off an endangered species of dolphin and do further damage to Vietnam's delta region, which is already reeling from the ...",
  "time": NumberInt(1432296160),
  "type": "post",
  "view": 318,
  "modified": ISODate("2015-05-22T04:15:38.513Z"),
  "created": ISODate("2015-05-22T04:15:38.513Z"),
  "idSlug": "5afec0e05cd7e8ab25630452"
});
db.getCollection("notices").insert({
  "_id": ObjectId("5b14aae75cd7e8953cdf3266"),
  "view": NumberInt(9),
  "idSlug": "5b14ab0c5cd7e80e6cdf3266",
  "title": "Kh??n gi??? Britain???s Got Talent b???t ng??? v?? Qu???c C??, Qu???c Nghi???p tr?????t Top 3",
  "key": "Kh??n gi??? Britain???s Got Talent b???t ng??? v?? Qu???c C??, Qu???c Nghi???p tr?????t Top 3",
  "content": "<h1>Kh&aacute;n gi??? Britain&rsquo;s Got Talent b???t ng??? v&igrave; Qu???c C??, Qu???c Nghi???p tr?????t Top 3</h1>\r\n\r\n<h2>Th&iacute; sinh Lost Voice Guy ??o???t qu&aacute;n qu&acirc;n, v??? nh&igrave; l&agrave; m&agrave;n ca h&aacute;t c???a Donchez Dacres v&agrave; x???p th??? ba l&agrave; ph???n di???n h&agrave;i c???a Robert White.</h2>\r\n\r\n<p><a href=\"https://giaitri.vnexpress.net/tin-tuc/gioi-sao/trong-nuoc/quoc-nghiep-giau-vo-chan-thuong-truoc-ban-ket-britain-s-got-talent-3758230.html#ctr=related_news_click\" title=\"Qu???c Nghi???p gi???u v??? ch???n th????ng tr?????c b??n k???t Britain's Got Talent\">Qu???c Nghi???p gi???u v??? ch???n th????ng tr?????c b&aacute;n k???t Britain&#39;s Got Talent</a>&nbsp;/&nbsp;<a href=\"https://giaitri.vnexpress.net/tin-tuc/truyen-hinh/quoc-co-quoc-nghiep-vao-chung-ket-britain-s-got-talent-3757868.html#ctr=related_news_click\" title=\"Qu???c C??, Qu???c Nghi???p v??o chung k???t Britain???s Got Talent\">Qu???c C??, Qu???c Nghi???p v&agrave;o chung k???t Britain&rsquo;s Got Talent</a></p>\r\n\r\n<p>??&ecirc;m&nbsp;<a href=\"https://giaitri.vnexpress.net/tin-tuc/truyen-hinh/quoc-co-quoc-nghiep-vao-chung-ket-britain-s-got-talent-3757868.html\">chung k???t&nbsp;</a><em>Britain&rsquo;s Got Talent 2018</em>&nbsp;v???a k???t th&uacute;c tr&ecirc;n s&oacute;ng tr???c ti???p k&ecirc;nh&nbsp;<em>ITV,&nbsp;</em>??? Anh ng&agrave;y 3/6. Th&iacute; sinh chi???n th???ng l&agrave; ngh??? s?? c&acirc;m Lost Voice Guy. Ngh??? s?? h&agrave;i - t&ecirc;n th???t l&agrave; Lee Ridlley - nh???n k??? ni???m ch????ng, ph???n th?????ng 250.000 b???ng Anh v&agrave; m???t su???t bi???u di???n tr?????c Ho&agrave;ng gia Anh. V??? tr&iacute; th??? hai thu???c v??? Donchez Dacres v&agrave; th??? ba l&agrave; Robert White.</p>\r\n\r\n<p>* Ch????ng tr&igrave;nh c&ocirc;ng b??? k???t qu???</p>\r\n\r\n<p>&nbsp;00:06| 04:41</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MC Dec Donnelly nh???n x&eacute;t ??&acirc;y l&agrave; ??&ecirc;m thi c??ng th???ng v&agrave; kh&oacute; ch???n ng?????i chi???n th???ng. K???t qu??? cu???i c&ugrave;ng r???t s&aacute;t sao. Tr&ecirc;n m???ng x&atilde; h???i, nhi???u ng?????i h&acirc;m m??? b&agrave;y t??? r???t b???t ng??? khi&nbsp;<a href=\"https://giaitri.vnexpress.net/tin-tuc/gioi-sao/trong-nuoc/quoc-nghiep-giau-vo-chan-thuong-truoc-ban-ket-britain-s-got-talent-3758230.html\">Qu???c C??</a>&nbsp;v&agrave; Qu???c Nghi???p kh&ocirc;ng c&oacute; m???t trong Top 3, sau m&agrave;n tr&igrave;nh di???n&nbsp;<a href=\"https://giaitri.vnexpress.net/tin-tuc/truyen-hinh/quoc-co-quoc-nghiep-khong-dung-day-bao-hiem-thi-chung-ket-britain-s-got-talent-3758378.html\" target=\"_blank\">nguy hi???m</a>&nbsp;?????n t&iacute;nh m???ng. M???t ng?????i n&oacute;i hai ngh??? s?? xi???c n&ecirc;n ???????c ghi nh???n khi tr&ecirc;n s&acirc;n kh???u chung k???t&nbsp;<em>Britain&rsquo;s Got Talent,&nbsp;</em>h??? c&oacute; m&agrave;n thi nguy hi???m nh???t trong s??? nghi???p v&agrave; kh&ocirc;ng d&ugrave;ng d&acirc;y b???o hi???m. S??? kh&aacute;c cho r???ng m&agrave;n di???n c&oacute; th??? l&agrave;m h???ng ??&ecirc;m ph&aacute;t s&oacute;ng tr???c ti???p n???u x???y ra sai s&oacute;t khi c&aacute;c c???t ch???ng ch&acirc;n b??? ?????, c&ograve;n ?????i c???u h??? ??&atilde; ph???i ?????n g???n s&acirc;n kh???u ????? quan s&aacute;t ph???n thi.</p>\r\n\r\n<p>* Ph???n thi c???a Qu???c C??, Qu???c Nghi???p</p>\r\n\r\n<p><img alt=\"Qu???c C??, Qu???c Nghi???p m???c qu???n ??o b??? ?????i thi chung k???t Britain???s Got Talent\" src=\"https://iv.vnecdn.net/giaitri/images/web/2018/06/04/quoc-co-quoc-nghiep-mac-quan-ao-bo-doi-thi-chung-ket-britain-1528061192_500x300.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>??&ecirc;m&nbsp;<a href=\"https://giaitri.vnexpress.net/photo/trong-nuoc/quoc-co-chung-toi-man-nguyen-khi-vao-chung-ket-britains-got-talent-3757938.html\">chung k???t&nbsp;</a>c&oacute; m&agrave;n th??? hi???n kh??? n??ng ca h&aacute;t c???a Calum Courtney, nh&oacute;m The D-Day Darlings, c???p b??? con Jack &amp; Tim, ph???n di???n h&agrave;i c???a Lost Voice Guy, nh&oacute;m nh???y DVJ&hellip; Ti???t m???c c???a Qu???c C??, Qu???c Nghi???p l&agrave; m&agrave;n thi xi???c duy nh???t.&nbsp;Theo&nbsp;<em>Digital Spy</em>, anh em &quot;Ho&agrave;ng t??? xi???c&quot; gi&agrave;nh ???????c 9,5% l?????t b&igrave;nh ch???n, ?????ng th??? n??m. C&ograve;n qu&aacute;n qu&acirc;n nh???n 21% ???ng h??? c???a kh&aacute;n gi???, Robert White v&agrave; Donchez Dacres l???n l?????t c&oacute; 17,2% v&agrave; 11,2% l?????t b&igrave;nh ch???n.</p>\r\n\r\n<p><em><a href=\"https://giaitri.vnexpress.net/tin-tuc/truyen-hinh/3-tiet-muc-lam-day-song-britain-s-got-talent-2018-3741531.html\"><em>Britain&rsquo;s Got Talent</em></a>&nbsp;</em>l&agrave; s&acirc;n ch??i t&igrave;m ki???m t&agrave;i n??ng n???i ti???ng c???a Anh. Ch????ng tr&igrave;nh b???t ?????u ph&aacute;t s&oacute;ng t??? n??m 2007 v???i c&aacute;c gi&aacute;m kh???o n???i ti???ng nh?? Simon Cowell, Amanda Holden, Piers Morgan, David Hasselhoff, Michael McIntyre, Alesha Dixon, David Walliams. Qu&aacute;n qu&acirc;n cu???c thi s??? c&oacute; c?? h???i ???????c bi???u di???n cho N??? ho&agrave;ng Anh.</p>\r\n\r\n<p>* M&agrave;n bi???u di???n c???a Lost Voice Guy</p>\r\n\r\n<p><img alt=\"M??n bi???u di???n c???a Lost Voice Guy\" src=\"https://iv.vnecdn.net/giaitri/images/web/2018/06/04/man-bieu-dien-cua-lost-voice-guy-1528063363_500x300.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>",
  "author": "mt",
  "slug": "khan-gia-britains-got-talent-bat-ngo-vi-quoc-co-quoc-nghiep-truot-top-3",
  "type": "page",
  "image": "",
  "introductory": "Kh??n gi??? Britain???s Got Talent b???t ng??? v?? Qu???c C??, Qu???c Nghi???p tr?????t Top 3\r\n\r\nTh?? sinh Lost Voice Guy ??o???t qu??n qu??n, v??? nh?? l?? m??n ca h??t c???a Donchez ...",
  "time": NumberInt(1528081164),
  "modified": ISODate("2018-06-04T02:58:47.601Z"),
  "created": ISODate("2018-06-04T02:58:47.601Z")
});

/** options records **/
db.getCollection("options").insert({
  "_id": ObjectId("5a7123b95cd7e8203b26390f"),
  "key": "theme",
  "value": "house3d",
  "modified": ISODate("2018-01-31T02:02:33.362Z"),
  "created": ISODate("2018-01-31T02:02:33.362Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a7126cb5cd7e8ba3826390e"),
  "key": "contact",
  "value": {
    "address": "Ph??ng 608, T??a nh?? Toyota, M??? ????nh, C???u Gi???y, H?? N???i",
    "fone": "support@house3d.com",
    "email": "contact@house3d.com",
    "fax": "0988.767.555"
  },
  "modified": ISODate("2018-01-31T02:15:39.977Z"),
  "created": ISODate("2018-01-31T02:15:39.977Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a712c215cd7e83c3426390d"),
  "key": "static",
  "value": {
    "mday": NumberInt(158),
    "mon": NumberInt(458),
    "total": NumberInt(12626),
    "oldMon": NumberInt(5),
    "oldMday": NumberInt(11)
  },
  "modified": ISODate("2018-01-31T02:38:25.352Z"),
  "created": ISODate("2018-01-31T02:38:25.352Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a712e6b5cd7e8bd3826390d"),
  "key": "settingFacebook",
  "value": {
    "idApp": "",
    "idAdmin": "",
    "linkFanpage": "https://www.facebook.com/GreenID.vn",
    "nameFanpage": "GreenID",
    "url_share_facebook": "",
    "urlShare": "url_currently",
    "image": "/app/webroot/upload/admin/images/greenid/congdong.jpg"
  },
  "modified": ISODate("2018-01-31T02:48:11.435Z"),
  "created": ISODate("2018-01-31T02:48:11.435Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a713a5b5cd7e8974326390f"),
  "key": "slidebannerSetting",
  "value": {
    "tData": NumberInt(10),
    "Data": {
      "6": {
        "id": NumberInt(6),
        "image": "/app/webroot/upload/admin/images/Air%20quality_traffic%20jam%20hour.JPG"
      },
      "7": {
        "id": NumberInt(7),
        "image": "/app/webroot/upload/admin/images/Untitled-2.png"
      },
      "9": {
        "id": NumberInt(9),
        "image": "/app/webroot/upload/admin/images/GreenID%20team.png"
      },
      "10": {
        "id": NumberInt(10),
        "image": "/app/webroot/upload/admin/images/DacLak.png"
      }
    }
  },
  "modified": ISODate("2018-01-31T03:39:07.708Z"),
  "created": ISODate("2018-01-31T03:39:07.708Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a73dc805cd7e8621d2a096b"),
  "key": "documentCategory",
  "value": {
    "tData": NumberInt(6),
    "allData": {
      "3": {
        "id": NumberInt(3),
        "name": "Truy???n th??ng",
        "slug": "truyen-thong"
      },
      "4": {
        "id": NumberInt(4),
        "name": "Khuy???n ngh??? ch??nh s??ch",
        "slug": "khuyen-nghi-chinh-sach"
      },
      "5": {
        "id": NumberInt(5),
        "name": "D??? ??n",
        "slug": "du-an"
      },
      "6": {
        "id": NumberInt(6),
        "name": "B??o c??o nghi??n c???u",
        "slug": "bao-cao-nghien-cuu"
      }
    }
  },
  "modified": ISODate("2018-02-02T03:35:28.880Z"),
  "created": ISODate("2018-02-02T03:35:28.880Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("554883ef47c7de305a8b456b"),
  "key": "language",
  "value": {
    "code": "vi",
    "file": "vi.php"
  },
  "modified": ISODate("2015-05-05T08:48:47.530Z"),
  "created": ISODate("2015-05-05T08:48:47.530Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("554883ef47c7de0a5b8b4567"),
  "key": "theme",
  "value": "greenid",
  "modified": ISODate("2015-05-05T08:48:47.593Z"),
  "created": ISODate("2015-05-05T08:48:47.593Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("555ac2b147c7de45358b456b"),
  "key": "yahooSkypeSupport",
  "value": null,
  "modified": ISODate("2015-05-19T04:57:21.649Z"),
  "created": ISODate("2015-05-19T04:57:21.649Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a715cf95cd7e8470626390d"),
  "key": "partnerSetting",
  "value": {
    "tData": NumberInt(39),
    "Data": {
      "32": {
        "id": NumberInt(32),
        "image": "/app/webroot/upload/admin/images/BIC-logo.gif",
        "url": ""
      },
      "33": {
        "id": NumberInt(33),
        "image": "/app/webroot/upload/admin/images/greenid/dt3.png",
        "url": ""
      },
      "34": {
        "id": NumberInt(34),
        "image": "/app/webroot/upload/admin/images/greenid/dt4.png",
        "url": ""
      },
      "35": {
        "id": NumberInt(35),
        "image": "/app/webroot/upload/admin/images/greenid/dt5.png",
        "url": ""
      },
      "36": {
        "id": NumberInt(36),
        "image": "/app/webroot/upload/admin/images/greenid/dt6.png",
        "url": ""
      },
      "38": {
        "id": NumberInt(38),
        "image": "",
        "url": ""
      },
      "39": {
        "id": NumberInt(39),
        "image": "/app/webroot/upload/admin/images/images%20(2).jpg",
        "url": ""
      }
    }
  },
  "modified": ISODate("2018-01-31T06:06:49.917Z"),
  "created": ISODate("2018-01-31T06:06:49.917Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5564244f47c7def7228b4567"),
  "key": "sitemapMantan",
  "value": {
    "freq": "",
    "lastmod": "0",
    "lastmodtime": "",
    "priority": "0",
    "priorityCategory": "",
    "priorityDetail": ""
  },
  "modified": ISODate("2015-05-26T07:44:15.390Z"),
  "created": ISODate("2015-05-26T07:44:15.390Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5548842447c7de7d598b456a"),
  "key": "infoSite",
  "value": {
    "title": "House3D",
    "domain": "house3d.com",
    "key": "",
    "description": "",
    "postsOnThePage": NumberInt(10),
    "seoURL": {
      "notices": "notices",
      "cat": "cat",
      "albums": "albums",
      "videos": "videos",
      "search": "search",
      "users": "users",
      "login": "login",
      "register": "register"
    },
    "embedScript": ""
  },
  "modified": ISODate("2015-05-05T08:49:40.595Z"),
  "created": ISODate("2015-05-05T08:49:40.595Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("56c6ca9947c7dedc358b4567"),
  "key": "smtpSetting",
  "value": {
    "account": "mantanhost@gmail.com",
    "password": "************",
    "show": "House3D",
    "host": "ssl://smtp.gmail.com",
    "port": "465"
  },
  "modified": ISODate("2016-02-19T07:56:09.862Z"),
  "created": ISODate("2016-02-19T07:56:09.862Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("56c6cbdb47c7dedc358b4568"),
  "key": "allSeo",
  "value": {
    "general": {
      "title": "%title%",
      "keyword": "%keyword%",
      "description": "%description%",
      "image": ""
    },
    "category": {
      "title": "%categoryName%",
      "keyword": "%categoryKeyword%",
      "description": "%categoryDescription%"
    },
    "post": {
      "title": "%postName%",
      "keyword": "%postKeyword%",
      "description": "%postDescription%"
    },
    "expand": {
      "title": "%title%",
      "keyword": "%keyword%",
      "description": "%description%"
    }
  },
  "modified": ISODate("2016-02-19T08:01:31.189Z"),
  "created": ISODate("2016-02-19T08:01:31.189Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("56c6cdec47c7de3f368b4567"),
  "key": "idSelectSliderBanner",
  "value": {
    "id": "554d670e47c7def51d8b4569",
    "width": "100%",
    "height": "300px"
  },
  "modified": ISODate("2016-02-19T08:10:20.948Z"),
  "created": ISODate("2016-02-19T08:10:20.948Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("554b125347c7de22058b4568"),
  "key": "plugins",
  "value": {
    "0": "facebook",
    "1": "contact",
    "3": "static",
    "4": "allSEO",
    "5": "viewPDF",
    "8": "linkWeb",
    "9": "feedback",
    "10": "ourTeam"
  },
  "modified": ISODate("2015-05-07T07:20:51.461Z"),
  "created": ISODate("2015-05-07T07:20:51.461Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5afd82b05cd7e83438bde13a"),
  "key": "defaultMenuMantan",
  "value": "5afd7e305cd7e83438bde139",
  "modified": ISODate("2018-05-17T13:25:04.288Z"),
  "created": ISODate("2018-05-17T13:25:04.288Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a7123b95cd7e8203b26390e"),
  "key": "language",
  "value": {
    "code": "vi",
    "file": "vi.php"
  },
  "modified": ISODate("2018-01-31T02:02:33.310Z"),
  "created": ISODate("2018-01-31T02:02:33.310Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a7126cb5cd7e8ba3826390d"),
  "key": "infoSite",
  "value": {
    "title": "GreenID",
    "domain": "mantan170.webmantan.com",
    "key": "",
    "description": "",
    "postsOnThePage": NumberInt(10),
    "seoURL": {
      "notices": "notices",
      "cat": "cat",
      "albums": "albums",
      "videos": "videos",
      "search": "search",
      "users": "users",
      "login": "login",
      "register": "register"
    },
    "embedScript": ""
  },
  "modified": ISODate("2018-01-31T02:15:39.975Z"),
  "created": ISODate("2018-01-31T02:15:39.975Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a7126cb5cd7e8ba3826390f"),
  "key": "smtpSetting",
  "value": {
    "account": "mantanhost@gmail.com",
    "show": "Mantan Source",
    "host": "ssl://smtp.gmail.com",
    "port": "465",
    "password": "************"
  },
  "modified": ISODate("2018-01-31T02:15:39.979Z"),
  "created": ISODate("2018-01-31T02:15:39.979Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a712bf25cd7e8e638263911"),
  "key": "plugins",
  "value": [
    "allSEO",
    "contact",
    "facebook",
    "static",
    "donate",
    "document",
    "viewPDF",
    "timeline"
  ],
  "modified": ISODate("2018-01-31T02:37:38.772Z"),
  "created": ISODate("2018-01-31T02:37:38.772Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a72860c5cd7e8385a951912"),
  "key": "contactSettings",
  "value": {
    "info": "<div class=\"col-sm-6\">\r\n<h4>&nbsp;</h4>\r\n</div>\r\n",
    "map": "<p><iframe frameborder=\"0\" height=\"450\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.0349357039527!2d105.78221400822837!3d21.029890096499404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3032f77a9%3A0xbae01a71112e4136!2zVG95b3RhIE3hu7kgxJDDrG5o!5e0!3m2!1svi!2s!4v1526632534470\" style=\"border:0\" width=\"100%\"></iframe></p>\r\n",
    "sendEmail": NumberInt(0),
    "displayName": null,
    "email": null
  },
  "modified": ISODate("2018-02-01T03:14:20.726Z"),
  "created": ISODate("2018-02-01T03:14:20.726Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5548842447c7de7d598b456b"),
  "key": "contact",
  "value": {
    "address": "Ph??ng 707 , t???ng 7, t??a nh?? Sunrise Building, 90 Tr???n Th??i T??ng,C???u Gi???y, H?? N???i ",
    "fone": "043 795 6372  ",
    "email": "info@greenidvietnam.org.vn",
    "fax": "043 7956372"
  },
  "modified": ISODate("2015-05-05T08:49:40.596Z"),
  "created": ISODate("2015-05-05T08:49:40.596Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("55599af747c7de6b298b4569"),
  "key": "contactSettings",
  "value": {
    "info": "",
    "map": "<iframe allowfullscreen=\"\" frameborder=\"0\"  src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0514242816707!2d105.78577721432859!3d21.030628293091823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4c0028d065%3A0xd5d50a2f08dd631!2sSunrise+Building!5e0!3m2!1sen!2s!4v1449731426508\" style=\"border:0\" ></iframe>",
    "sendEmail": 1,
    "displayName": "GreenID",
    "email": "info@greenidvietnam.org.vn"
  },
  "modified": ISODate("2015-05-18T07:55:35.201Z"),
  "created": ISODate("2015-05-18T07:55:35.201Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("555aa2cd47c7de34338b4567"),
  "key": "yahooSkypeSupportCategory",
  "value": {
    "tData": 5,
    "allData": {
      "2": {
        "id": 2,
        "name": "skype"
      },
      "3": {
        "id": 3,
        "name": "Truy???n th??ng"
      },
      "4": {
        "id": 4,
        "name": "Truy???n th??ng"
      },
      "5": {
        "id": 5,
        "name": "Truy???n th??ng"
      }
    }
  },
  "modified": ISODate("2015-05-19T02:41:17.660Z"),
  "created": ISODate("2015-05-19T02:41:17.660Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("555aae2a47c7dec7338b4567"),
  "key": "documentCategory",
  "value": {
    "tData": 7,
    "allData": {
      "1": {
        "id": 1,
        "name": "Truy???n th??ng",
        "slug": "truyen-thong"
      },
      "2": {
        "id": 2,
        "name": "D??? ??n",
        "slug": "du-an"
      },
      "4": {
        "id": 4,
        "name": "Khuy???n ngh??? ch??nh s??ch",
        "slug": "khuyen-nghi-chinh-sach"
      }
    }
  },
  "modified": ISODate("2015-05-19T03:29:46.170Z"),
  "created": ISODate("2015-05-19T03:29:46.170Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("55598d3247c7de66288b4568"),
  "key": "settingFacebook",
  "value": {
    "idApp": "1678109889123142",
    "linkFanpage": "https://www.facebook.com/GreenID.vn",
    "idAdmin": "",
    "nameFanpage": "",
    "url_share_facebook": "",
    "urlShare": "url_currently"
  },
  "modified": ISODate("2015-05-18T06:56:50.737Z"),
  "created": ISODate("2015-05-18T06:56:50.737Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("56c6d1a047c7de9a378b4567"),
  "key": "greenidThemeSettings",
  "value": {
    "textHeader": "",
    "textMenu": "<p>Trung T&acirc;m Ph&aacute;t Tri???n S&aacute;ng T???o Xanh (GreenID) hi???n ch??? c&oacute; 1 trang tin ??i???n t??? duy nh???t l&agrave; greenidvietnam.org.vn. GreenID kh&ocirc;ng ch???u tr&aacute;ch nhi???m v???i b???t c??? th&ocirc;ng tin n&agrave;o ???????c ????a ra t??? c&aacute;c trang web c&oacute; t&ecirc;n t????ng t???</p>\r\n",
    "idSelectSlider": "554d773947c7de26038b4568",
    "idSelectSliderNTT": "554e16b947c7de360b8b4568",
    "sukien": NumberInt(19)
  },
  "modified": ISODate("2016-02-19T08:26:08.279Z"),
  "created": ISODate("2016-02-19T08:26:08.279Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("55504e5547c7decb288b4567"),
  "key": "categoryNotice",
  "value": {
    "tCategory": 31,
    "category": {
      "1": {
        "name": "Tin t???c",
        "id": 1,
        "slug": "tin-tuc",
        "key": "",
        "description": "",
        "sub": [
          
        ]
      }
    }
  },
  "modified": ISODate("2015-05-11T06:38:13.102Z"),
  "created": ISODate("2015-05-11T06:38:13.102Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a7355b65cd7e8586a951912"),
  "key": "categoryNotice",
  "value": {
    "tCategory": NumberInt(16),
    "category": {
      "6": {
        "name": "S??? ki???n",
        "id": NumberInt(6),
        "slug": "su-kien",
        "idSlug": "5a77867f5cd7e878041c28ce",
        "key": "S??? ki???n",
        "description": "S??? ki???n",
        "image": "",
        "sub": null
      },
      "7": {
        "name": "L??nh v???c",
        "id": NumberInt(7),
        "slug": "linh-vuc",
        "idSlug": "5a77c2dc5cd7e82a4c1c28ce",
        "key": "L??nh v???c",
        "description": "L??nh v???c",
        "image": "",
        "sub": null
      },
      "13": {
        "name": "Tin t???c",
        "id": NumberInt(13),
        "slug": "tin-tuc-1",
        "idSlug": "5a7b11285cd7e82144ff24c0",
        "key": "Tin t???c",
        "description": "Tin t???c",
        "image": "",
        "sub": {
          "8": {
            "name": "Greenid tr??n b??o ch??",
            "id": NumberInt(8),
            "slug": "greenid-tren-bao-chi",
            "idSlug": "5a7b101c5cd7e82067ff24c0",
            "key": "Greenid tr??n b??o ch??",
            "description": "Greenid tr??n b??o ch??",
            "image": "",
            "sub": null
          },
          "9": {
            "name": "Tin t???c &amp; s??? ki???n",
            "id": NumberInt(9),
            "slug": "tin-tuc-amp-su-kien",
            "idSlug": "5a7b118d5cd7e82144ff24c1",
            "key": "Tin t???c &amp; s??? ki???n",
            "description": "Tin t???c &amp; s??? ki???n",
            "image": "",
            "sub": null
          },
          "10": {
            "name": "Tuy???n d???ng",
            "id": NumberInt(10),
            "slug": "tuyen-dung",
            "idSlug": "5a7b102d5cd7e8e563ff24c0",
            "key": "Tuy???n d???ng",
            "description": "Tuy???n d???ng",
            "image": "",
            "sub": null
          },
          "11": {
            "name": "Ho???t ?????ng c???a GreenID",
            "id": NumberInt(11),
            "slug": "hoat-dong-cua-greenid",
            "idSlug": "5a7b10355cd7e82067ff24c1",
            "key": "Ho???t ?????ng c???a GreenID",
            "description": "Ho???t ?????ng c???a GreenID",
            "image": "",
            "sub": null
          },
          "12": {
            "name": "Th??ng c??o b??o ch??",
            "id": NumberInt(12),
            "slug": "thong-cao-bao-chi",
            "idSlug": "5a7b103d5cd7e8982cff24c0",
            "key": "Th??ng c??o b??o ch??",
            "description": "Th??ng c??o b??o ch??",
            "image": "",
            "sub": null
          }
        }
      },
      "15": {
        "name": "S??ng ki???n xanh",
        "id": NumberInt(15),
        "slug": "sang-kien-xanh",
        "idSlug": "5a7b11da5cd7e8982cff24c1",
        "key": "S??ng ki???n xanh",
        "description": "S??ng ki???n xanh",
        "image": "",
        "sub": {
          "16": {
            "name": "S??ng ki???n trong n?????c",
            "id": NumberInt(16),
            "slug": "sang-kien-trong-nuoc",
            "idSlug": "5a7b11e75cd7e8982cff24c2",
            "key": "S??ng ki???n trong n?????c",
            "description": "S??ng ki???n trong n?????c",
            "image": ""
          }
        }
      }
    }
  },
  "modified": ISODate("2018-02-01T18:00:22.794Z"),
  "created": ISODate("2018-02-01T18:00:22.794Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a7771be5cd7e8bc051c28cc"),
  "key": "donorSetting",
  "value": {
    "tData": NumberInt(21),
    "Data": {
      "16": {
        "id": NumberInt(16),
        "image": "/app/webroot/upload/admin/images/oxfam-logo.png",
        "url": ""
      },
      "17": {
        "id": NumberInt(17),
        "image": "/app/webroot/upload/admin/images/logo_mcknight_200.gif",
        "url": ""
      },
      "18": {
        "id": NumberInt(18),
        "image": "/app/webroot/upload/admin/images/Logo%20EU(1).jpg",
        "url": ""
      },
      "19": {
        "id": NumberInt(19),
        "image": "/app/webroot/upload/admin/images/BFTW%20logo(1).jpg",
        "url": ""
      },
      "20": {
        "id": NumberInt(20),
        "image": "/app/webroot/upload/admin/images/hbs%20logo%20separate2.jpg",
        "url": ""
      }
    }
  },
  "modified": ISODate("2018-02-04T20:49:02.788Z"),
  "created": ISODate("2018-02-04T20:49:02.788Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af7ef085cd7e8e831ee7e52"),
  "key": "ourTeam",
  "value": [
    {
      "name": "V?? V??n D????ng2"
    },
    {
      "position": "Gi??m ?????c ??i???u h??nh"
    },
    {
      "avatar": "/app/webroot/upload/admin/files/album-anh/secfour_services1.png"
    }
  ],
  "modified": ISODate("2018-05-13T07:53:44.995Z"),
  "created": ISODate("2018-05-13T07:53:44.995Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5a7140d85cd7e83c3426390e"),
  "key": "setting",
  "value": {
    "fb": "https://www.facebook.com/GreenID.vn",
    "twitter": "https://twitter.com/GreenIDVietnam",
    "youtube": "https://www.youtube.com/channel/UCGgzWCm8i1wWbJ1ZqROOLQw",
    "sukien": NumberInt(30),
    "tab1": "5a77d23d5cd7e87a521c28cf",
    "tab2": "5a77d2665cd7e8ab011c28d0",
    "tab3": "5a77d27b5cd7e87a411c28ce",
    "tab4": "5a77d29e5cd7e8575c1c28ce",
    "duan1": "5a774a935cd7e8ef5caf8b72",
    "duan2": "5a7749a65cd7e88165af8b6c",
    "donghanh": NumberInt(21),
    "linkDangKyNgay": "#",
    "linkTaiUngDung": " #    ",
    "AnhBanner": "sdfsdf",
    "BannerMota1": "sdf",
    "BannerMota2": "sdfsd",
    "Menu": "",
    "CongCuThietKeNDDong1": "fsdf",
    "CongCuThietKeNDDong2": "df",
    "CongCuTkND1TieuDe": "fgdf",
    "CongCuTkND1NoiDung": "&lt;p&gt;gdfg&lt;/p&gt;\r\n",
    "CongCuTkND1Video": "dasdasd",
    "CongCuTkND2Video": "dasdas",
    "CongCuTkND2TieuDe": "dasd",
    "CongCuTkND2NoiDung": "&lt;p&gt;gdfg&lt;/p&gt;\r\n",
    "CongCuTkND3TieuDe": "dasdsad",
    "CongCuTkND3NoiDung": "&lt;p&gt;dfgfdg&lt;/p&gt;\r\n",
    "CongCuTkND3Video": "gdfg",
    "CongCuTkND4TieuDe": "gdfgfd",
    "CongCuTkND4NoiDung": "&lt;p&gt;gdfgdfg&lt;/p&gt;\r\n",
    "CongCuTkND4Video": "fdsfsdf",
    "CongCuTkND5TieuDe": "ggdfgdf",
    "CongCuTkND5NoiDung": "&lt;p&gt;gdfgdfg&lt;/p&gt;\r\n",
    "CongCuTkND5Video": "gdfgdf",
    "YouHaveIdeaNen": "gdfgdfg",
    "YouHaveIdeaTieuDe1": "dfgdfg",
    "YouHaveIdeaTieuDe2": "dfgdfg",
    "YouHaveNoiDung": "dfgdfg",
    "IconEmail": "gdfgdf",
    "Email": "gdfgdfg",
    "IconSale": "gdfgdf",
    "Sale": "gdfgdfg",
    "IconSupport": "gdfgdfg",
    "Support": "dfgdfg"
  },
  "modified": ISODate("2018-01-31T04:06:48.137Z"),
  "created": ISODate("2018-01-31T04:06:48.137Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5afd7e305cd7e83438bde139"),
  "key": "menus",
  "value": {
    "name": "Menu ngang",
    "tCategory": NumberInt(18),
    "category": {
      "1": {
        "id": NumberInt(1),
        "name": "Trang ch???",
        "url": "/",
        "description": "",
        "sub": null
      },
      "2": {
        "id": NumberInt(2),
        "name": "V??? ch??ng t??i",
        "url": "/about-us",
        "description": "",
        "sub": null
      },
      "3": {
        "id": NumberInt(3),
        "name": "N???n t???ng H3D",
        "url": "/platform",
        "description": "",
        "sub": null
      },
      "4": {
        "id": NumberInt(4),
        "name": "S???n ph???m",
        "url": "/product",
        "description": "",
        "sub": {
          "5": {
            "id": NumberInt(5),
            "name": "C??ng c??? thi???t k???",
            "url": "/design-tools",
            "description": "",
            "sub": null
          },
          "6": {
            "id": NumberInt(6),
            "name": "3D/VR Cloud Media",
            "url": "/3d-vr-cloud-media",
            "description": "",
            "sub": null
          },
          "7": {
            "id": NumberInt(7),
            "name": "3D/VR/AR Marketing",
            "url": "/3d-vrar-marketing",
            "description": "",
            "sub": null
          },
          "8": {
            "id": NumberInt(8),
            "name": "N???n t???ng cho d???ch v??? d???ng 3D",
            "url": "/3d-service-platform",
            "description": "",
            "sub": null
          },
          "9": {
            "id": NumberInt(9),
            "name": "N???n t???ng Mua - B??n n???i th???t",
            "url": "/furniture-ecommerce",
            "description": "",
            "sub": null
          },
          "10": {
            "id": NumberInt(10),
            "name": "N???n t???ng Mua - B??n thi???t k??? 3D",
            "url": "/3d-trading-platform",
            "description": "",
            "sub": null
          },
          "18": {
            "id": NumberInt(18),
            "name": "L??? tr??nh ph??t tri???n",
            "url": "/roadmap",
            "description": ""
          }
        }
      },
      "11": {
        "id": NumberInt(11),
        "name": "B???ng gi??",
        "url": "/pricing",
        "description": "",
        "sub": null
      },
      "12": {
        "id": NumberInt(12),
        "name": "T???i ???ng d???ng",
        "url": "/download",
        "description": "",
        "sub": null
      },
      "13": {
        "id": NumberInt(13),
        "name": "B??? s??u t???p VR",
        "url": "/gallery",
        "description": "",
        "sub": null
      },
      "17": {
        "id": NumberInt(17),
        "name": "Li??n h???",
        "url": "/contact",
        "description": "",
        "sub": null
      }
    }
  },
  "modified": ISODate("2018-05-17T13:05:52.761Z"),
  "created": ISODate("2018-05-17T13:05:52.761Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af8257a5cd7e81947ee7e52"),
  "key": "settingInstroduce",
  "value": {
    "LinkDangKyNgay": "#",
    "LinkTaiUngDung": "/download",
    "anhBanner": "/app/webroot/upload/admin/files/secthree_platform1.jpg",
    "BannerMotaDong1": "V??? CH??NG T??I",
    "BannerMotaDong2": "T???m nh??n - S??? m???nh - Tri???t l?? ph??t tri???n",
    "VeChungToiTieuDe": "V??? ch??ng t??i",
    "VeChungToiNoiDung": "<p>House3D cung c???p m???t n???n t???ng T??? thi???t k??? ?????n Th????ng m???i ??i???n t???, d&agrave;nh cho c??n nh&agrave; v&agrave; c&aacute;c thi???t b??? ????? d&ugrave;ng trong nh&agrave; d???a tr&ecirc;n c&ocirc;ng ngh??? 3D/VR/AR&nbsp;<br />\r\n<br />\r\nV???i t?? duy chi???n&nbsp;l?????c ?????t ph&aacute; c&ugrave;ng ?????i ng?? nh???n s??? ch???t l?????ng cao, House3D tin t?????ng s??? thay ?????i t?? duy thi???t k??? &amp; th&oacute;i quen mua s???m truy???n th???ng trong l??nh v???c Nh&agrave; ??? v&agrave; N???i th???t</p>\r\n",
    "VeChungToiAnhNoiDung": "/app/webroot/upload/admin/files/album-anh/section_one1.png",
    "TamNhinTieuDe": "T???m nh??n",
    "TamNhinNoiDung": "Tr??? th??nh doanh nghi???p cung c???p N???n t???ng Thi???t k?? v?? Th????ng m???i ??i???n t??? trong l??nh v???c Nh?? ??? & N???i th???t h??ng ?????u th??? gi???i",
    "SuMenhTieuDe": "S??? m???nh",
    "SuMenhNoiDung": "House3D s??? t???o n??n m???t h??? sinh th??i ??a d???ng v?? t??? do t??? cung ?????n c???u trong l??nh v???c Nh?? ??? & N???i th???t",
    "TrietLyPTTieuDe": "Tri???t l?? ph??t tri???n",
    "TrietLyPTNoiDung": "S???n ph???m & D???ch v??? c???a House3D ?????u h?????ng ?????n th??c ?????y gia t??ng gi?? tr??? cho to??n x?? h???i",
    "GiaTriCLAnhNoiDung": "/app/webroot/upload/admin/files/album-anh/section_one2.png",
    "GiaTriCLTieuDe": "Gi?? tr??? c???t l??i",
    "GiaTriCLNoiDung": "<p><strong>1. Nh&acirc;n s???</strong>&nbsp;<br />\r\nNh&acirc;n s??? l&agrave; y???u t??? n???n t???ng cho s??? th&agrave;nh c&ocirc;ng c???a House3D<br />\r\n<br />\r\n<strong>2. Quy tr&igrave;nh</strong>&nbsp;<br />\r\nQuy tr&igrave;nh l&agrave; ch&igrave;a kh&oacute;a ?????m b???o m???i ho???t ?????ng trong House3D ???????c di???n ra th&ocirc;ng su???t<br />\r\n<br />\r\n<strong>3. Ch???t l?????ng</strong>&nbsp;<br />\r\nCh&uacute;ng t&ocirc;i cam k???t mang ?????n cho kh&aacute;ch h&agrave;ng nh???ng s???n ph???m, d???ch v??? v???i ch???t l?????ng cao nh???t<br />\r\n<br />\r\n<strong>4. T??? ch???c h???c t???p</strong>&nbsp;<br />\r\nT??? ch???c h???c t???p l&agrave; y???u t??? trung t&acirc;m, quan trong nh???t ????? ph&aacute;t tri???n House3D</p>\r\n",
    "OurTeamTieuDe": "?????i ng?? House3D",
    "OurTeamNoiDung": "Ch??ng t??i ??ang n??? l???c h??ng ng??y ????? mang nh???ng tr???i nghi???m t???t nh???t ?????n ng?????i d??ng",
    "ThamGiaCCTTieuDe": "Tham gia c??ng ch??ng t??i",
    "ThamGiaCCTMoTaKhoi": "Mi???n ph?? ????ng k?? v?? tr???i nghi???m s???n ph???m",
    "WhatClientSayTieuDe": "Kh??ch h??ng n??i v??? ch??ng t??i",
    "TamNhinIcon": "/app/webroot/upload/admin/files/album-anh/intro1.png",
    "SuMenhIcon": "/app/webroot/upload/admin/files/album-anh/intro2.jpg",
    "TrietLyPTIcon": "/app/webroot/upload/admin/files/album-anh/intro3.jpg"
  },
  "modified": ISODate("2018-05-13T11:46:02.532Z"),
  "created": ISODate("2018-05-13T11:46:02.532Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af9af1f5cd7e8ce4143a3bd"),
  "key": "marketingSetting",
  "value": {
    "linkDangKyNgay": "#",
    "linkTaiUngDung": "/download",
    "AnhBanner": null,
    "BannerMota1": "3D/VR/AR MARKETING",
    "BannerMota2": "Ti???p c???n tr???i nghi???m v?? ph???n h???i c???a kh??ch h??ng ngay sau khi c?? thi???t k???",
    "Menu": "5b039ecc5cd7e8f05f850fba",
    "CongCuThietKeNDDong1": "C??ng c??? thi???t k??? ",
    "CongCuThietKeNDDong2": "Tr???c quan, d??? s??? d???ng",
    "CongCuTkND1TieuDe": "Thi???t k??? nhanh h??n",
    "CongCuTkND1NoiDung": "<p>- Giao di???n tr???c quan d??? s??? d???ng&nbsp;<br />\r\n- Th?? vi???n 3D Model v&agrave; M???u thi???t k??? 3D phong ph&uacute;, ??a d???ng - Kh&ocirc;ng y&ecirc;u c???u k??? n??ng thi???t k??? qu&aacute; cao</p>\r\n",
    "CongCuTkND1Video": "/app/webroot/upload/admin/files/album-anh/section_one1.png",
    "CongCuTkND2Video": "/app/webroot/upload/admin/files/album-anh/section_one2.png",
    "CongCuTkND2TieuDe": "Thi???t k??? tr???i nghi???m",
    "CongCuTkND2NoiDung": "<p>- C&oacute; thi???t k??? c???a c&aacute;c s???n ph???m th???t, ??ang ???????c b&aacute;n tr&ecirc;n th??? tr?????ng c???a c&aacute;c nh&agrave; san xu???t, kinh doanh ????? n???i th???t&nbsp;<br />\r\n- C&oacute; th??? tr???c ti???p ?????t mua c&aacute;c s???n ph???m n???i th???t ???????c cung c???p tr&ecirc;n ???ng d???ng</p>\r\n",
    "CongCuTkND3TieuDe": "D??? d??ng Import",
    "CongCuTkND3NoiDung": "<p>D??? d&agrave;ng Import c&aacute;c thi???t k??? t??? c&aacute;c ?????nh d???ng th&ocirc;ng d???ng:&nbsp;<br />\r\n- 3DX MAX&nbsp;<br />\r\n- CAD&nbsp;<br />\r\n- Blender&nbsp;<br />\r\n- ...</p>\r\n",
    "CongCuTkND3Video": "/app/webroot/upload/admin/files/album-anh/section_one3.png",
    "IconEmail": "fsdf",
    "Email": "fsdf",
    "IconSale": "fsdfsd",
    "Sale": "sdfsdf",
    "IconSupport": "dsfsdf",
    "Support": "fsdfsdf",
    "ThietKeAlbum": "5af5d6145cd7e8d461782b8a",
    "AlbumThietKeTieuDe": null,
    "ThietKeAnTuongTieuDe": "Thi???t k??? ???n t?????ng"
  },
  "modified": ISODate("2018-05-14T15:45:35.98Z"),
  "created": ISODate("2018-05-14T15:45:35.98Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af9b0905cd7e83e4b43a3bd"),
  "key": "nenTangDichVu3DSetting",
  "value": {
    "linkDangKyNgay": "#",
    "AnhBanner": null,
    "BannerMota1": "N???n t???ng D???ch v??? d???ng 3D",
    "BannerMota2": "",
    "BannerMota3": "Cung c???p d???ch v??? Render n???i dung video v?? ???nh VR 720<sup>o</sup> t??? c??c thi???t k??? 3D",
    "Menu": "5b039ecc5cd7e8f05f850fba",
    "ThietKeAlbum": "5af5d6145cd7e8d461782b8a",
    "IconEmail": "fsdf",
    "Email": "fsdf",
    "IconSale": "fsdf",
    "Sale": "sdfsdf",
    "IconSupport": "fsdf",
    "Support": "sdfsdf",
    "linkTaiUngDung": "/download",
    "BannerMota4": "N???i dung sau khi Render c?? th??? hi???n th??? m???i n??i tr??n th??? gi???i Internet",
    "CongCuTkND1TieuDe": "C??ng c??? d???ng 3D",
    "CongCuTkND1NoiDung": "<p>- Giao di???n tr???c quan d??? s??? d???ng&nbsp;<br />\r\n- Th?? vi???n 3D Model v&agrave; M???u thi???t k??? 3D phong ph&uacute;, ??a d???ng - Kh&ocirc;ng y&ecirc;u c???u k??? n??ng thi???t k??? qu&aacute; cao</p>\r\n",
    "CongCuTkND1Video": "/app/webroot/upload/admin/files/album-anh/section_one1.png",
    "CongCuTkND2Video": "/app/webroot/upload/admin/files/album-anh/section_one2.png",
    "CongCuTkND2TieuDe": "N???n t???ng k???t n???i cung - c???u d???ch v??? d???ng 3D",
    "CongCuTkND2NoiDung": "<p>- C&oacute; thi???t k??? c???a c&aacute;c s???n ph???m th???t, ??ang ???????c b&aacute;n tr&ecirc;n th??? tr?????ng c???a c&aacute;c nh&agrave; san xu???t, kinh doanh ????? n???i th???t&nbsp;<br />\r\n- C&oacute; th??? tr???c ti???p ?????t mua c&aacute;c s???n ph???m n???i th???t ???????c cung c???p tr&ecirc;n ???ng d???ng</p>\r\n",
    "AlbumThietKeTieuDe": "Thi???t k??? ???n t?????ng"
  },
  "modified": ISODate("2018-05-14T15:51:44.734Z"),
  "created": ISODate("2018-05-14T15:51:44.734Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5afdb4de5cd7e8231dbde139"),
  "key": "nenTangMuaBan3DSetting",
  "value": {
    "linkDangKyNgay": "#",
    "linkTaiUngDung": "/download",
    "AnhBanner": null,
    "BannerMota1": "N???n t???ng Mua - B??n thi???t k??? 3D",
    "BannerMota2": "",
    "BannerMota3": "Cung c???p d???ch v??? Render n???i dung video v?? ???nh VR 720<sup>o</sup> t??? c??c thi???t k??? 3D ",
    "BannerMota4": "N???i dung sau khi Render c?? th??? hi???n th??? m???i n??i tr??n th??? gi???i Internet",
    "Menu": "5b039ecc5cd7e8f05f850fba",
    "ThietKeAlbum": "5af5d6145cd7e8d461782b8a",
    "IconEmail": null,
    "Email": null,
    "IconSale": null,
    "Sale": null,
    "IconSupport": null,
    "Support": null,
    "CongCuTkND1TieuDe": "Ch??? mua b??n thi???t k??? 3D",
    "CongCuTkND1NoiDung": "<p>- T???o ra ngu???n cung s???n ph???m thi???t k??? ch???t l?????ng cao v???i gi&aacute; c???nh tranh&nbsp;<br />\r\n- ??&aacute;nh gi&aacute; kh&aacute;ch quan t??? c???ng ?????ng v??? ch???t l?????ng s???n ph???m thi???t k???</p>\r\n",
    "CongCuTkND1Video": "/app/webroot/upload/admin/files/album-anh/section_one1.png",
    "CongCuTkND2Video": "/app/webroot/upload/admin/files/album-anh/section_one2.png",
    "CongCuTkND2TieuDe": "Ch??? vi???c l??m thi???t k??? 3D",
    "CongCuTkND2NoiDung": "<p>- T???o ra ngu???n vi???c l???n, d??? ti???p c???n cho c&aacute;c Freelancer v??? thi???t k??? 3D&nbsp;<br />\r\n- Th&uacute;c ?????y nhu c???u muam, thu&ecirc; thi???t k??? n???i th???t trong x&atilde; h???i</p>\r\n"
  },
  "modified": ISODate("2018-05-17T16:59:10.874Z"),
  "created": ISODate("2018-05-17T16:59:10.875Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5afe96115cd7e8b944630452"),
  "key": "linkWebCategory",
  "value": {
    "tData": NumberInt(3),
    "allData": {
      "1": {
        "id": NumberInt(1),
        "name": "S???n ph???m"
      },
      "2": {
        "id": NumberInt(2),
        "name": "B???n c???n gi??p ?????"
      },
      "3": {
        "id": NumberInt(3),
        "name": "Th??ng tin"
      }
    }
  },
  "modified": ISODate("2018-05-18T09:00:01.350Z"),
  "created": ISODate("2018-05-18T09:00:01.350Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5afe9bba5cd7e8b744630452"),
  "key": "footerSetting",
  "value": {
    "ThongTinThemId": "3",
    "BanCanTroGiupId": "2",
    "sanPhamId": "1",
    "logo": "/app/webroot/upload/admin/files/album-anh/logo.png",
    "facebook": "https://www.facebook.com/house3d",
    "twitter": "#",
    "linkedin": "#",
    "youtube": "https://www.youtube.com/channel/UCpmI-nefEiYGVeMoPoJotow",
    "TieuDeKhoi1": "S???n ph???m",
    "TieuDeKhoi2": "B???n c???n gi??p g??",
    "TieuDeKhoi3": "Th??ng tin"
  },
  "modified": ISODate("2018-05-18T09:24:10.827Z"),
  "created": ISODate("2018-05-18T09:24:10.827Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af812105cd7e86f50ee7e55"),
  "key": "settingIndex",
  "value": {
    "linkDangKyNgay": "#",
    "linkTaiUngDung": "/download",
    "videoBanner": "/app/webroot/upload/admin/files/video/h3d-intro-landing-page.mp4",
    "moTadong1Banner": "N???N T???NG THI???T K???",
    "moTadong2Banner": "V?? TH????NG M???I ??I???N T??? </br> TR??N 3D/VR",
    "thongKeModel": "500000",
    "thongKeMauThietKe": "10000",
    "tieuDeCongCuThietKeDong1": "C??ng c??? thi???t k??? ",
    "tieuDeCongCuThietKeDong2": "Tr???c quan, d??? s??? d???ng",
    "CongCuThietKeTieuDeND1": "Thi???t k??? m???t s??n",
    "CongCuThietKeVideoND1": "/app/webroot/upload/admin/files/video/Scene1.mp4",
    "CongCuThietMoTaND1": "H??? tr??? t???o thi???t k??? nhanh b???ng c??ch l???a ch???n t??? th?? vi???n ho???c import t??? file CAD",
    "CongCuThietKeTieuDeND2": "S???p ?????t n???i th???t",
    "CongCuThietMoTaND2": "Tri???n khai ?? t?????ng thi???t k??? cho ng??i nh?? b???ng thao t??c k??o th??? tr???c quan",
    "CongCuThietKeVideoND2": "/app/webroot/upload/admin/files/video/Scene2.mp4",
    "CongCuThietKeTieuDeND3": "Render thi???t k???",
    "CongCuThietMoTaND3": "Tr???i nghi???m ngay kh??ng gian c???a b???n v???i c??ng ngh??? Render si??u t???c",
    "CongCuThietKeVideoND3": "/app/webroot/upload/admin/files/video/Scene3.mp4",
    "NangCaoHieuQuaTieuDeDong1": "N??ng cao hi???u qu??? ",
    "NangCaoHieuQuaTieuDeDong2": "H?????ng ?????n thi???t k??? tr???i nghi???m",
    "NangCaoHieuQuaIconKhoi1": "/app/webroot/upload/admin/files/album-anh/Shape1.png",
    "NangCaoHieuQuaTieuDeKhoi1": "Thi???t k??? nhanh h??n",
    "NangCaoHieuQuaMoTaKhoi1": "Gi???m 90% th???i gian thi???t k??? nh??? C??ng c??? tr???c quan v?? Th?? vi???n 500.000+ 3D Model, 10.000+ Thi???t k??? nh?? m???u",
    "NangCaoHieuQuaIconKhoi2": "/app/webroot/upload/admin/files/album-anh/Shape2.png",
    "NangCaoHieuQuaTieuDeKhoi2": "Thi???t k??? tr???i nghi???m",
    "NangCaoHieuQuaMoTaKhoi2": "S??? d???ng thi???t k??? c???a s???n ph???m n???i th???t ??ang ???????c b??n tr??n th??? tr?????ng, gi??p c??c thi???t k??? c?? t??nh th???c t??? cao",
    "NangCaoHieuQuaIconKhoi3": "/app/webroot/upload/admin/files/album-anh/Shape3.png",
    "NangCaoHieuQuaTieuDeKhoi3": "3D/VR Cloud Media",
    "NangCaoHieuQuaMoTaKhoi3": "Render 10 gi??y v???i C??ng ngh??? Cloud Rendering. N???i dung sau khi Render c?? th??? chia s??? kh???p n??i tr??n Internet",
    "ThietKeAnTuongTieuDe": "Thi???t k??? ???n t?????ng",
    "ThietKeAnTuongAlbum": "5af5d6145cd7e8d461782b8a",
    "TraiNghiemSanPhamTieuDe": "Tr???i nghi???m s???n ph???m ch??ng t??i",
    "TraiNghiemSanPhamLinkWindow": "#",
    "TraiNghiemSanPhamLinkMac": "#",
    "poster1": "/app/webroot/upload/admin/files/album-anh/q1.png",
    "poster2": "/app/webroot/upload/admin/files/album-anh/q2.png",
    "poster3": "/app/webroot/upload/admin/files/album-anh/q3.png",
    "poster0": "/app/webroot/upload/admin/files/album-anh/tn.png",
    "UngDungThietKe3DTieuDe": "???ng d???ng thi???t k??? 3D",
    "UngDungThietKe3DNoiDung": "<ul>\r\n\t<li>C&ocirc;ng c??? tr???c quan, d??? s??? d???ng</li>\r\n\t<li>K&iacute;ch th?????c d?????i 50MB</li>\r\n\t<li>H??? tr??? h??? ??i???u h&agrave;nh Windows v&agrave; Mac OSX</li>\r\n</ul>\r\n",
    "UngDungThietKe3DLinkHDSD": "https://wiki.house3d.com",
    "UngDungThietKe3DAnh": "/app/webroot/upload/admin/files/ud1.png"
  },
  "modified": ISODate("2018-05-13T10:23:12.255Z"),
  "created": ISODate("2018-05-13T10:23:12.255Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af9b5d35cd7e83f5143a3c0"),
  "key": "nenTangMuaBan3D",
  "value": {
    "linkDangKyNgay": "fdsf",
    "AnhBanner": "fsdf",
    "BannerMota1": "fsdf",
    "BannerMota2": "fsdf",
    "BannerMota3": "fsdf",
    "Menu": "",
    "ThietKeAlbum": "5af5d6145cd7e8d461782b8a",
    "IconEmail": "fds",
    "Email": "fsdf",
    "IconSale": "dsf",
    "Sale": "fsdf",
    "IconSupport": "dsf",
    "Support": "fsdf"
  },
  "modified": ISODate("2018-05-14T16:14:11.684Z"),
  "created": ISODate("2018-05-14T16:14:11.684Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af9ac645cd7e8515c43a3bd"),
  "key": "designToolSetting",
  "value": {
    "linkDangKyNgay": "#",
    "linkTaiUngDung": "/download",
    "AnhBanner": null,
    "BannerMota1": "C??NG C??? THI???T K??? CAO C???P TR??N 3D/VR",
    "BannerMota2": "sdfsd",
    "Menu": "5b039ecc5cd7e8f05f850fba",
    "CongCuThietKeNDDong1": "C??ng c??? thi???t k??? ",
    "CongCuThietKeNDDong2": "Tr???c quan, d??? s??? d???ng",
    "CongCuTkND1TieuDe": "Thi???t k??? nhanh h??n",
    "CongCuTkND1NoiDung": "<p>- Giao di???n tr???c quan d??? s??? d???ng&nbsp;<br />\r\n- Th?? vi???n 3D Model v&agrave; M???u thi???t k??? 3D phong ph&uacute;, ??a d???ng - Kh&ocirc;ng y&ecirc;u c???u k??? n??ng thi???t k??? qu&aacute; cao</p>\r\n",
    "CongCuTkND1Video": "/app/webroot/upload/admin/files/album-anh/section_one1.png",
    "CongCuTkND2Video": "/app/webroot/upload/admin/files/album-anh/section_one2.png",
    "CongCuTkND2TieuDe": "Thi???t k??? tr???i nghi???m",
    "CongCuTkND2NoiDung": "<p>- C&oacute; thi???t k??? c???a c&aacute;c s???n ph???m th???t, ??ang ???????c b&aacute;n tr&ecirc;n th??? tr?????ng c???a c&aacute;c nh&agrave; s???n xu???t, kinh doanh ????? n???i th???t&nbsp;<br />\r\n- C&oacute; th??? tr???c ti???p ?????t mua c&aacute;c s???n ph???m n???i th???t ???????c cung c???p tr&ecirc;n ???ng d???ng</p>\r\n",
    "CongCuTkND3TieuDe": "D??? d??ng tr??ch xu???t th??ng tin",
    "CongCuTkND3NoiDung": "<p>- Xu???t ra c&aacute;c b???n v??? thi???t k??? ????? g???i ?????n ????n v??? thi c&ocirc;ng n???i th???t ( Kh&ocirc;ng c???n file CAD)&nbsp;<br />\r\n- Xu???t ra b???ng d??? to&aacute;n chi ph&iacute; thi c&ocirc;ng n???i th???t ( Chu???n BIM) - XU???t ra 3D Model theo c&aacute;c ?????nh d???ng th&ocirc;ng d???ng</p>\r\n",
    "CongCuTkND3Video": "/app/webroot/upload/admin/files/album-anh/section_one3.png",
    "CongCuTkND4TieuDe": "C?? nhi???u Module t??y ch???nh",
    "CongCuTkND4NoiDung": "<p>- Module thi???t k??? tr???n&nbsp;<br />\r\n- Module thi???t k??? l&aacute;t g???ch&nbsp;<br />\r\n- Module thi???t k??? t??? k???&nbsp;<br />\r\n- Module thi???t k??? h??? th???ng ??i???n, n?????c</p>\r\n",
    "CongCuTkND4Video": "/app/webroot/upload/admin/files/album-anh/section_one2.png",
    "CongCuTkND5TieuDe": "Render thi???t k???",
    "CongCuTkND5NoiDung": "<p>Tr???i nghi???m ngay kh&ocirc;ng gian c???a b???n v???i c&ocirc;ng ngh??? Render si&ecirc;u t???c</p>\r\n",
    "CongCuTkND5Video": "/app/webroot/upload/admin/files/album-anh/section_one3.png",
    "YouHaveIdeaNen": "/app/webroot/upload/admin/files/album-anh/section_three2.jpg",
    "YouHaveIdeaTieuDe1": "You have an idea ",
    "YouHaveIdeaTieuDe2": "We have a powerful tool",
    "YouHaveNoiDung": "T???p trung ph??t tri???n ?? t?????ng thay v?? loay hoay s??? d???ng c??ng c???",
    "IconEmail": null,
    "Email": null,
    "IconSale": null,
    "Sale": null,
    "IconSupport": null,
    "Support": null,
    "bannerWindowOs": "#",
    "bannerMacOs": "#",
    "TraiNghiemTieuDe": "Tr???i nghi???m s???n ph???m ch??ng t??i"
  },
  "modified": ISODate("2018-05-14T15:33:56.99Z"),
  "created": ISODate("2018-05-14T15:33:56.99Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af9addc5cd7e83f5143a3be"),
  "key": "cloudMediaSetting",
  "value": {
    "linkDangKyNgay": "#",
    "linkTaiUngDung": "/download",
    "AnhBanner": null,
    "BannerMota1": "3D/VR CLOUD MEDIA",
    "BannerMota2": "Cung c???p d???ch v??? Render n???i dung video v?? ???nh VR720<sup>o</sup> t??? c??c thi???t k??? 3D  <br>\r\nN???i dung sau khi Render c?? th??? hi???n th??? m???i n??i tr??n th??? gi???i Internet",
    "Menu": "5b039ecc5cd7e8f05f850fba",
    "CongCuThietKeNDDong1": "C??ng c??? thi???t k??? ",
    "CongCuThietKeNDDong2": "Tr???c quan, d??? s??? d???ng",
    "CongCuTkND1TieuDe": "D???ch v??? Cloud Rendering",
    "CongCuTkND1NoiDung": "<p>House3D cung c???p D???ch v??? Render n???i dung video v&agrave; ???nh VR 720&nbsp;<sup>o</sup>&nbsp;t??? c&aacute;c thi???t k??? 3D&nbsp;<br />\r\n<br />\r\nGi???i ph&aacute;p t???i ??u chi ph&iacute; Render cho c&aacute;c h&atilde;ng B???t ?????ng s???n, X&acirc;y d???ng v&agrave; n???i th???t (??ang ph???i ?????u t?? r???t t???n k&eacute;m cho Render Farm)</p>\r\n",
    "CongCuTkND1Video": "/app/webroot/upload/admin/files/album-anh/section_one1.png",
    "CongCuTkND2Video": "/app/webroot/upload/admin/files/album-anh/section_one2.png",
    "CongCuTkND2TieuDe": "C??ng c??? qu???n l?? n???i dung Render",
    "CongCuTkND2NoiDung": "<p>C&ocirc;ng c??? h??? tr??? ng?????i d&ugrave;ng qu???n l&yacute; d??? d&agrave;ng c&aacute;c n???i dung Render v&agrave; t???o ra c&aacute;c link cho ph&eacute;p chia s??? c&aacute;c n???i dung render tr&ecirc;n Internet</p>\r\n",
    "CongCuTkND3TieuDe": "H??? t???ng l??u tr??? v?? ph???c v??? n???i dung 3D",
    "CongCuTkND3NoiDung": "<p>House3D cung c???p h??? t???ng m&aacute;y ch??? ??&aacute;p ???ng nhu c???u l??u tr??? v&agrave; ph???c v??? n???i dung 3D.&nbsp;<br />\r\n<br />\r\nN???i dung sau khi render c&oacute; th??? hi???n th??? m???i n??i tr&ecirc;n th??? gi???i internet: t??? Facebook, Youtube cho ?????n ch&iacute;nh c&aacute;c trang web ri&ecirc;ng c???a c&aacute;c h&atilde;ng, hay tr&ecirc;n c&aacute;c h??? th???ng&nbsp;</p>\r\n",
    "CongCuTkND3Video": "/app/webroot/upload/admin/files/album-anh/section_one3.png",
    "IconEmail": null,
    "Email": null,
    "IconSale": null,
    "Sale": null,
    "IconSupport": null,
    "Support": null,
    "ThietKeAlbum": "5af5d6145cd7e8d461782b8a",
    "AlbumThietKeTieuDe": "Thi???t k??? ???n t?????ng"
  },
  "modified": ISODate("2018-05-14T15:40:12.902Z"),
  "created": ISODate("2018-05-14T15:40:12.902Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af9b4b35cd7e83f5143a3bf"),
  "key": "nenTangMuaBanNoiThatSetting",
  "value": {
    "linkDangKyNgay": "#",
    "AnhBanner": "/app/webroot/upload/admin/files/album-anh/section_three2.jpg",
    "BannerMota1": " N???n t???ng Mua - B??n n???i th???t",
    "BannerMota2": "T??m mua ????? n???i th???t ngay tr??n ???ng d???ng 3D/VR v?? th??? s???p ?????t trong ch??nh c??n nh?? c???a ",
    "BannerMota3": "m??nh b???ng tr???i nghi???m th???c t??? tr??n C??ng ngh??? 3D/VR/AR\r\n",
    "Menu": "5b039ecc5cd7e8f05f850fba",
    "MuaSamNen": null,
    "MuaSamMoTa": null,
    "MuaSamIcon": null,
    "TraiNghiemTTATieuDe": "Tr???i nghi???m th???c t???i ???o",
    "TraiNghiemTTANoiDung": "Th??? s???p ?????t c??c ????? n???i th???t trong ch??nh c??n nh?? c???a m??nh v???i c??ng ngh??? 3D/VR/AR",
    "DanhGiaSanPhamTieuDe": "????nh gi?? v??? s???n ph???m",
    "DanhGiaSanPhamNoiDung": "????nh gi?? c???a c???ng ?????ng l?? th?????c ??o ch??nh x??c nh???t cho ch???t l?????ng c??c s???n ph???m ???????c b??n tr??n n???n t???ng",
    "SanPhamDaDangTieuDe": "S???n ph???m ??a d???ng",
    "SanPhamDaDangNoiDung": "Ti???p c???n ???????c ngu???n cung ??a d???ng, ch???t l?????ng cao v???i gi?? c???nh tranh",
    "BanHangNen": null,
    "BanHangMoTa": null,
    "BanHangIcon": null,
    "MarketingTieuDe": "Marketing",
    "MarketingNoiDung": "???ng d???ng t????ng t??c 3D/VR/AR gi??p qu???ng c??o s???n ph???m tr???c quan h??n, k??ch th??ch nhu c???u mua s???m",
    "KenhBanHangTieuDe": "K??nh b??n h??ng",
    "KenhBanHangNoiDung": "C??ng c??? qu???n l?? b??n h??ng, ch??m s??c kh??c h??ng mang ?????n cho c??c nh?? cung c???p m???t k??nh b??n h??ng th???c s??? hi???u qu???",
    "KhachHangTiemNangTieuDe": "Kh??ch h??ng ti???m n??ng",
    "KhachHangTiemNangNoiDung": "Ng?????i ti??u d??ng tham gia n???n t???ng ?????u c?? nhu c???u v??? n???i th???t",
    "IconEmail": null,
    "Email": null,
    "IconSale": null,
    "Sale": null,
    "IconSupport": null,
    "Support": "fsdfsd",
    "BannerMota4": "m??nh b???ng tr???i nghi???m th???c t??? tr??n C??ng ngh??? 3D/VR/AR",
    "SanPhamDaDangIcon": "/app/webroot/upload/admin/files/album-anh/ex3.png",
    "DanhGiaSanPhamIcon": "/app/webroot/upload/admin/files/album-anh/ex2.jpg",
    "TraiNghiemTTAIcon": "/app/webroot/upload/admin/files/album-anh/ex1.jpg",
    "KhachHangTiemNangIcon": "/app/webroot/upload/admin/files/album-anh/ex6.png",
    "KenhBanHangIcon": "/app/webroot/upload/admin/files/album-anh/ex3.png",
    "MarketingIcon": "/app/webroot/upload/admin/files/album-anh/ex4.png",
    "NguoiTieuDungTieuDe": "Ng?????i ti??u d??ng",
    "NguoiTieuDungNoiDung": "<p>Ra quy???t ?????nh mua s???m m&agrave; kh&ocirc;ng c???n ?????n t???n n??i b&aacute;n</p>\r\n",
    "NguoiTieuDungVideo": "/app/webroot/upload/admin/files/album-anh/section_one1(1).png",
    "NhaCungCapNoiDung": "<p>K&ecirc;nh b&aacute;n h&agrave;ng hi???u qu??? cho c&aacute;c nh&agrave; cung c???p ????? n???i th???t</p>\r\n",
    "NhaCungCapTieuDe": "Nh?? cung c???p",
    "NhaCungCapVideo": "/app/webroot/upload/admin/files/section_one2.png"
  },
  "modified": ISODate("2018-05-14T16:09:23.647Z"),
  "created": ISODate("2018-05-14T16:09:23.647Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af9bb9a5cd7e8784943a3bd"),
  "key": "productSetting",
  "value": {
    "LinkDanKyNgay": "#",
    "AnhBanner": "/app/webroot/upload/admin/files/secthree_platform1.jpg",
    "BannerMota1": "S???N PH???M V?? D???CH V???",
    "BannerMota2": "N???n t???ng thi???t k??? - Th????ng m???i ??i???n t???",
    "SanPhamDichVuNDDong1": "S???n ph???m v?? d???ch v???",
    "SanPhamDichVuNDDong2": "c???a ch??ng t??i",
    "SPKhoi1Icon": "/app/webroot/upload/admin/files/album-anh/secone_sv1.png",
    "SPKhoi1TieuDe": "C??ng c??? thi???t k???",
    "SPKhoi1NoiDung": "Gi???m 90% th???i gian thi???t k??? nh??? C??ng c??? tr???c quan v?? Th?? vi???n 500.000+ 3D Model, 10.000+ Thi???t k??? nh?? m???u",
    "SPKhoi2Icon": "/app/webroot/upload/admin/files/album-anh/secone_sv2.png",
    "SPKhoi2TieuDe": "3D/VR Cloud Media",
    "SPKhoi2NoiDung": "Render 10 gi??y v???i C??ng ngh??? Cloud Rendering. N???i dung sau khi Render c?? th??? chia s??? kh???p n??i tr??n Internet",
    "SPKhoi3Icon": "/app/webroot/upload/admin/files/album-anh/secone_sv3.png",
    "SPKhoi3TieuDe": "3D/VR/AR Marketing",
    "SPKhoi3NoiDung": "Cung c???p c??ng c??? Marketing c?? t????ng t??c v?? h??? t???ng l??u tr???, ph???c v??? n???i dung 3D",
    "SPKhoi4Icon": "/app/webroot/upload/admin/files/album-anh/secone_sv4.png",
    "SPKhoi4TieuDe": "N???n t???ng mua b??n N???i th???t",
    "SPKhoi4NoiDung": "K??nh mua - b??n s???n ph???m n???i th???t v?? c??c thi???t b??? trong nh??, ???ng d???ng c??ng ngh??? 3D/VR/AR ",
    "SPKhoi5Icon": "/app/webroot/upload/admin/files/album-anh/secone_sv5.png",
    "SPKhoi5TieuDe": "N???n t???ng mua b??n Thi???t k???",
    "SPKhoi5NoiDung": "Cung c???p n???n t???ng mua b??n 3D Model, m???u thi???t k??? 3D v?? k???t n???i cung - c???u d???ch v??? thi???t k??? 3D",
    "SPKhoi6Icon": "/app/webroot/upload/admin/files/album-anh/secone_sv6.png",
    "SPKhoi6TieuDe": "N???n t???ng cho d???ch v??? D???ng 3D",
    "SPKhoi6NoiDung": "Cung c???p c??ng c??? v?? k???t n???i cung - c???u d???ch v??? d???ng 3D",
    "DoitacTieuDe": "?????i t??c c???a ch??ng t??i",
    "DoitacNoiDung": "N???n t???ng House3D c?? s??? tham gia c???a c??c h??ng B???t ?????ng s???n - X??y d???ng v?? S???n xu???t - Kinh doanh n???i th???t uy t??n",
    "AlbumDoiTac": "5b05345d5cd7e8890d8bb01c",
    "ThamGiaCungChungToiNen": "/app/webroot/upload/admin/files/secthree_platform1.jpg",
    "ThamGiaCungChungToiTieuDe": "Tham gia c??ng ch??ng t??i",
    "ThamGiaCungChungToiNoiDung": "Mi???n ph?? ????ng k?? v?? tr???i nghi???m s???n ph???m",
    "KhachHangNoiGiTieuDe": "Kh??ch h??ng n??i v??? ch??ng t??i"
  },
  "modified": ISODate("2018-05-14T16:38:50.535Z"),
  "created": ISODate("2018-05-14T16:38:50.535Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5afe58185cd7e8fb5e8c6d58"),
  "key": "platformSetting",
  "value": {
    "LinkDanKyNgay": "#",
    "AnhBanner": "/app/webroot/upload/admin/files/secthree_platform1.jpg",
    "BannerMota1": "HOUSE3D PLATFORM",
    "BannerMota2": "C??ch m???ng t??? Thi???t k??? ?????n Mua s???m nh?? ??? & n???i th???t",
    "BanLaAiKhoi1Icon": "/app/webroot/upload/admin/files/album-anh/sectwo2.png",
    "BanLaAiKhoi1TieuDe": "H??ng B??S & XD",
    "BanLaAiKhoi2Icon": "/app/webroot/upload/admin/files/album-anh/sectwo1.png",
    "BanLaAiKhoi2TieuDe": "Ki???n tr??c s??",
    "BanLaAiKhoi3Icon": "/app/webroot/upload/admin/files/album-anh/sectwo3.png",
    "BanLaAiKhoi3TieuDe": "H??ng SX v?? kinh doanh n???i th???t",
    "BanLaAiKhoi4Icon": "/app/webroot/upload/admin/files/album-anh/sectwo4.png",
    "BanLaAiKhoi4TieuDe": "Ng?????i ti??u d??ng ",
    "HayThamGiaTieuDe": "Tham gia ngay N???n t???ng House3D",
    "HayThamGiaKhoi1Icon": "/app/webroot/upload/admin/files/album-anh/secone_p2_1.png",
    "HayThamGiaKhoi2Icon": "/app/webroot/upload/admin/files/album-anh/secone_p2_2.png",
    "HayThamGiaKhoi3Icon": "/app/webroot/upload/admin/files/album-anh/secone_p2_3.png",
    "HayThamGiaKhoi4Icon": "/app/webroot/upload/admin/files/album-anh/secone_p2_4.png",
    "HayThamGiaKhoi1TieuDe": "C??ng c??? thi???t k??? ",
    "HayThamGiaKhoi2TieuDe": "3D/VR Cloud Media",
    "HayThamGiaKhoi3TieuDe": "3D/VR/AR Marketing",
    "HayThamGiaKhoi4TieuDe": "N???n t???ng mua b??n N???i th???t",
    "ThamGiaCungChungToiNen": "/app/webroot/upload/admin/files/album-anh/secthree_platform1.jpg",
    "ThamGiaCungChungToiTieuDe": "Tham gia c??ng ch??ng t??i",
    "ThamGiaCungChungToiNoiDung": "Mi???n ph?? ????ng k?? v?? tr???i nghi???m s???n ph???m",
    "DeTraiNghiemTieuDe1": "????? tr???i nghi???m v?? ",
    "DeTraiNghiemTieuDe2": "nh???n ???????c l???i ??ch",
    "DeTraiNghiemKhoi1Icon": "/app/webroot/upload/admin/files/album-anh/sectwo1.png",
    "DeTraiNghiemKhoi2Icon": "/app/webroot/upload/admin/files/album-anh/sectwo2.png",
    "DeTraiNghiemKhoi31Icon": null,
    "DeTraiNghiemKhoi4Icon": "/app/webroot/upload/admin/files/album-anh/sectwo4.png",
    "DeTraiNghiemKhoi5Icon": "/app/webroot/upload/admin/files/album-anh/sectwo5.png",
    "DeTraiNghiemKhoi6Icon": "/app/webroot/upload/admin/files/album-anh/sectwo6.png",
    "DeTraiNghiemKhoi1TieuDe": "Ki???n tr??c s??",
    "DeTraiNghiemKhoi2TieuDe": "H??ng B??S & XD",
    "DeTraiNghiemKhoi3TieuDe": "H??ng SX v?? KD n???i th???t",
    "DeTraiNghiemKhoi4TieuDe": "Ng?????i ti??u d??ng",
    "DeTraiNghiemKhoi5TieuDe": "Thi???t k??? 3D",
    "DeTraiNghiemKhoi6TieuDe": "3D/VR Cloud Media",
    "DeTraiNghiemKhoi1NoiDung": "C?? nhi???u th???i gian cho ph??t tri???n ?? t?????ng thay v?? loay hoay s??? d???ng c??ng c???",
    "DeTraiNghiemKhoi2NoiDung": "Gi???m chi ph?? X??y - S???a nh?? m???u v?? s???n ph???m m???u xu???ng nhi???u l???n. C?? c??ng c??? Marketing d???a tr??n 3D/VR/AR",
    "DeTraiNghiemKhoi3NoiDung": "Ti???t ki???m t???i ??a chi ph?? g??y d???ng v?? qu???n l?? ?????i ng?? nh??n s??? thi???t k???",
    "DeTraiNghiemKhoi4NoiDung": "???????c tr???i nghi???m th???c t??? s???n ph???m tr?????c khi mua ngay ch??nh t???i ng??i nh?? c???a m??nh",
    "DeTraiNghiemKhoi5NoiDung": "C??ng c??? tr???c quan h??n. M???u thi???t k??? ??a d???ng. Gi???m th???i gian ho??n th??nh b???n thi???t k???",
    "DeTraiNghiemKhoi6NoiDung": "C??ng ngh??? Cloud Rendering gi??p t??ng t???c ????? Render. N???i dung sau khi Render c?? th??? hi???n th??? kh???p n??i tr??n Internet",
    "HayThamGiaKhoi5Icon": "/app/webroot/upload/admin/files/album-anh/secone_p2_5.png",
    "HayThamGiaKhoi6Icon": "/app/webroot/upload/admin/files/album-anh/secone_p2_6.png",
    "HayThamGiaKhoi5TieuDe": "N???n t???ng mua b??n Thi???t k???",
    "HayThamGiaKhoi6TieuDe": "N???n t???ng d???ch v??? D???ng 3D",
    "DeTraiNghiemKhoi3Icon": "/app/webroot/upload/admin/files/album-anh/sectwo3.png",
    "BanLaAiTieuDe": "B???n l??"
  },
  "modified": ISODate("2018-05-18T04:35:36.812Z"),
  "created": ISODate("2018-05-18T04:35:36.812Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5afe96315cd7e85048630452"),
  "key": "linkWeb",
  "value": {
    "tData": NumberInt(15),
    "allData": {
      "1": {
        "id": NumberInt(1),
        "name": "C??ng c??? thi???t k???",
        "image": "",
        "category": NumberInt(1),
        "link": "/design-tools"
      },
      "2": {
        "id": NumberInt(2),
        "name": "3D/VR Cloud Media",
        "image": "",
        "category": NumberInt(1),
        "link": "/3d-vr-cloud-media"
      },
      "3": {
        "id": NumberInt(3),
        "name": "3D/VR/AR Marketing",
        "image": "",
        "category": NumberInt(1),
        "link": "/3d-vrar-marketing"
      },
      "4": {
        "id": NumberInt(4),
        "name": "N???n t???ng cho d???ch v??? d???ng 3D",
        "image": "",
        "category": NumberInt(1),
        "link": "/3d-service-platform"
      },
      "5": {
        "id": NumberInt(5),
        "name": "N???n t???ng Mua - B??n n???i th???t",
        "image": "",
        "category": NumberInt(1),
        "link": "/furniture-buying-platform"
      },
      "6": {
        "id": NumberInt(6),
        "name": "N???n t???ng Mua - B??n thi???t k??? 3D",
        "image": "",
        "category": NumberInt(1),
        "link": "/3d-trading-platform"
      },
      "7": {
        "id": NumberInt(7),
        "name": "T??i li???u h?????ng d???n",
        "image": "",
        "category": NumberInt(2),
        "link": "https://wiki.house3d.com/"
      },
      "8": {
        "id": NumberInt(8),
        "name": "Video h?????ng d???n",
        "image": "",
        "category": NumberInt(2),
        "link": "https://www.youtube.com/channel/UCpmI-nefEiYGVeMoPoJotow"
      },
      "9": {
        "id": NumberInt(9),
        "name": "H??? tr??? tr???c tuy???n",
        "image": "",
        "category": NumberInt(2),
        "link": "/"
      },
      "10": {
        "id": NumberInt(10),
        "name": "House3D Wiki",
        "image": "",
        "category": NumberInt(2),
        "link": "https://wiki.house3d.com/"
      },
      "11": {
        "id": NumberInt(11),
        "name": "Gi???i thi???u",
        "image": "",
        "category": NumberInt(3),
        "link": "/about-us"
      },
      "12": {
        "id": NumberInt(12),
        "name": "Li??n h???",
        "image": "",
        "category": NumberInt(3),
        "link": "/contact"
      },
      "13": {
        "id": NumberInt(13),
        "name": "L??? tr??nh ph??t tri???n",
        "image": "",
        "category": NumberInt(3),
        "link": "/roadmap"
      },
      "14": {
        "id": NumberInt(14),
        "name": "??i???u kho???n d???ch v???",
        "image": "",
        "category": NumberInt(3),
        "link": ""
      }
    }
  },
  "modified": ISODate("2018-05-18T09:00:33.841Z"),
  "created": ISODate("2018-05-18T09:00:33.841Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5afea8cf5cd7e8d16d630452"),
  "key": "gallerySetting",
  "value": {
    "AnhBanner": "/app/webroot/upload/admin/files/secthree_platform1.jpg",
    "BannerMota1": "VR Gallery",
    "BannerMota2": "Nh???ng thi???t k??? n???i b???t nh???t",
    "TieuDeThietKeAnTuong": "Nh???ng thi???t k??? n???i b???t nh???t",
    "AlbumThietKeAnTuong": "5af5d6145cd7e8d461782b8a"
  },
  "modified": ISODate("2018-05-18T10:19:59.590Z"),
  "created": ISODate("2018-05-18T10:19:59.590Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5b039ecc5cd7e8f05f850fba"),
  "key": "menus",
  "value": {
    "name": "Menu s???n ph???m",
    "tCategory": NumberInt(6),
    "category": {
      "1": {
        "id": NumberInt(1),
        "name": "C??ng c??? thi???t k???",
        "url": "/design-tools",
        "description": "",
        "sub": null
      },
      "2": {
        "id": NumberInt(2),
        "name": "3D/VR Cloud Media",
        "url": "/3d-vr-cloud-media",
        "description": "",
        "sub": null
      },
      "3": {
        "id": NumberInt(3),
        "name": "3D/VR/AR Marketing",
        "url": "/3d-vrar-marketing",
        "description": "",
        "sub": null
      },
      "4": {
        "id": NumberInt(4),
        "name": "N???n t???ng cho d???ch v??? d???ng 3D",
        "url": "/3d-service-platform",
        "description": "",
        "sub": null
      },
      "5": {
        "id": NumberInt(5),
        "name": "N???n t???ng Mua - B??n n???i th???t",
        "url": "/furniture-buying-platform",
        "description": "",
        "sub": null
      },
      "6": {
        "id": NumberInt(6),
        "name": "N???n t???ng Mua - B??n thi???t k??? 3D",
        "url": "/3d-trading-platform",
        "description": "",
        "sub": null
      }
    }
  },
  "modified": ISODate("2018-05-22T04:38:36.109Z"),
  "created": ISODate("2018-05-22T04:38:36.109Z")
});
db.getCollection("options").insert({
  "_id": ObjectId("5af9b69e5cd7e80f0643a3bd"),
  "key": "downloadSetting",
  "value": {
    "AndroidLink": "#",
    "AndroidMota1": "Lorem ipsum dolor sit amet, consectetur adipisicing elit",
    "AndroidMota2": "Lorem ipsum dolor sit amet, consectetur adipisicing elit\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit",
    "IosLink": "#",
    "IosMota1": "Lorem ipsum dolor sit amet, consectetur adipisicing elit",
    "IosMota2": "Lorem ipsum dolor sit amet, consectetur adipisicing elit\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit",
    "AnhBanner": "/app/webroot/upload/admin/files/album-anh/secthree_platform1.jpg",
    "BannerMota1": "T???i ???ng d???ng",
    "BannerMota2": "???ng d???ng v?? c??ng c??? h??? tr???",
    "WindowMacTieuDe": "???ng d???ng thi???t k??? 3D",
    "IconWindow": "/app/webroot/upload/admin/files/album-anh/window(2).png",
    "LinkWindow32": "#",
    "LinkWindow64": "#",
    "IconMac": "/app/webroot/upload/admin/files/album-anh/apple(1).png",
    "LinkMac": "#",
    "KhoiCongCuTieuDe": "Module h??? tr???",
    "CongCuTKKhoi1Icon": "/app/webroot/upload/admin/files/album-anh/dl1.png",
    "CongCuTKKhoi2Icon": "/app/webroot/upload/admin/files/album-anh/dl1.png",
    "CongCuTKKhoi3Icon": "/app/webroot/upload/admin/files/album-anh/dl1.png",
    "CongCuTKKhoi4Icon": "/app/webroot/upload/admin/files/album-anh/dl1.png",
    "CongCuTKKhoi1MoTa1": "H3D Editor",
    "CongCuTKKhoi2MoTa1": "H3d Editor",
    "CongCuTKKhoi3MoTa1": "H3d Editor",
    "CongCuTKKhoi4MoTa1": "H3d Editor",
    "CongCuTKKhoi1MoTa2": "C??ng c??? ch???nh s???a H3D Model",
    "CongCuTKKhoi2MoTa2": "C??ng c??? ch???nh s???a H3D Model",
    "CongCuTKKhoi3MoTa2": "C??ng c??? ch???nh s???a H3D Model",
    "CongCuTKKhoi4MoTa2": "C??ng c??? ch???nh s???a H3D Model",
    "CongCuTKKhoi1LinkTai": "#",
    "CongCuTKKhoi2LinkTai": "#",
    "CongCuTKKhoi3LinkTai": "#",
    "CongCuTKKhoi4LinkTai": "#",
    "VersionMac": "Version 1.0.1",
    "VersionWindow": "Version 1.0.1"
  },
  "modified": ISODate("2018-05-14T16:17:34.44Z"),
  "created": ISODate("2018-05-14T16:17:34.44Z")
});

/** our_teams records **/
db.getCollection("our_teams").insert({
  "_id": ObjectId("5af7f3425cd7e8f94cee7e53"),
  "name": "B??i S??? Nguy??n",
  "position": "CEO - Founder",
  "avatar": "/app/webroot/upload/admin/files/album-anh/secfour_services1.png",
  "modified": ISODate("2018-05-13T08:11:46.949Z"),
  "created": ISODate("2018-05-13T08:11:46.949Z"),
  "sort": "1"
});
db.getCollection("our_teams").insert({
  "_id": ObjectId("5af7f6b35cd7e8e84cee7e52"),
  "name": "??inh Nho H??o",
  "position": "Data Architect",
  "avatar": "/app/webroot/upload/admin/files/album-anh/secfour_services1.png",
  "modified": ISODate("2018-05-13T08:26:27.940Z"),
  "created": ISODate("2018-05-13T08:26:27.940Z"),
  "sort": "2"
});
db.getCollection("our_teams").insert({
  "_id": ObjectId("5b0fc0ed5cd7e87832097e81"),
  "name": "????o Quang Huy",
  "position": "Artist",
  "avatar": "/app/webroot/upload/admin/files/download.jpg",
  "modified": ISODate("2018-05-31T09:31:25.497Z"),
  "created": ISODate("2018-05-31T09:31:25.497Z"),
  "sort": "3"
});
db.getCollection("our_teams").insert({
  "_id": ObjectId("5b2db2b15cd7e8903d5e7c7b"),
  "name": "L?? Quang H??m",
  "position": "Scrum Master",
  "avatar": "/app/webroot/upload/admin/files/download.jpg",
  "modified": ISODate("2018-06-23T02:38:41.401Z"),
  "created": ISODate("2018-06-23T02:38:41.401Z"),
  "sort": "4"
});

/** slugs records **/
db.getCollection("slugs").insert({
  "_id": ObjectId("5a2025345cd7e8644c9916b9"),
  "slug": "anh-sang-den-led-den-vung-bien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2017-11-30T15:35:16.111Z"),
  "created": ISODate("2017-11-30T15:35:16.111Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a2b5c105cd7e8dc5cbd5483"),
  "slug": "tuyen-dung-chuyen-gia-san-xuat-phim",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2017-12-09T03:44:16.661Z"),
  "created": ISODate("2017-12-09T03:44:16.661Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a30b0965cd7e81d1de38b6c"),
  "slug": "tuyen-chuyen-gia-san-xuat-phim",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2017-12-13T04:46:14.908Z"),
  "created": ISODate("2017-12-13T04:46:14.908Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4b3b3a5cd7e86d6a510819"),
  "slug": "tcbc-su-kien-tuan-le-nang-luong-tai-tao-2017",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-02T07:56:42.941Z"),
  "created": ISODate("2018-01-02T07:56:42.941Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c383a5cd7e8db5dade99a"),
  "slug": "tuyen-giang-vien-tap-huan-truyen-thong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T01:56:10.222Z"),
  "created": ISODate("2018-01-03T01:56:10.222Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c390f5cd7e8da5dade99a"),
  "slug": "tuyen-can-bo-truyen-thong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T01:59:43.821Z"),
  "created": ISODate("2018-01-03T01:59:43.821Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c39965cd7e8717aade99a"),
  "slug": "tuyen-tap-huan-vien-gia-nang-luong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T02:01:58.596Z"),
  "created": ISODate("2018-01-03T02:01:58.596Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c564f5cd7e8717aade99b"),
  "slug": "lam-mat-khong-can-dien-than-thien-moi-truong-ma-rat-re",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:04:31.301Z"),
  "created": ISODate("2018-01-03T04:04:31.301Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c56605cd7e8d85dade99a"),
  "slug": "nghien-cuu-san-xuat-dien-tu-cay",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:04:48.777Z"),
  "created": ISODate("2018-01-03T04:04:48.777Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c566d5cd7e8ee5dade99a"),
  "slug": "nama-giai-phap-ho-tro-chong-bien-doi-khi-hau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:05:01.287Z"),
  "created": ISODate("2018-01-03T04:05:01.287Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c56775cd7e8cc7aade99c"),
  "slug": "ung-dung-thanh-cong-mo-hinh-xu-ly-nuoc-sinh-hoat-nhiem-sat",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:05:11.660Z"),
  "created": ISODate("2018-01-03T04:05:11.660Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c56865cd7e8717aade99c"),
  "slug": "bep-cui-cai-tien-tiet-kiem-hieu-qua",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:05:26.756Z"),
  "created": ISODate("2018-01-03T04:05:26.756Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c569a5cd7e8fd75ade99c"),
  "slug": "cung-ca-p-nuo-c-ba-ng-nang-luo-ng-ma-t-tro-i-gia-i-pha-p-nuo-c-sa-ch-vu-ng-nong-thon",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:05:46.327Z"),
  "created": ISODate("2018-01-03T04:05:46.327Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c56a45cd7e8f95fade99c"),
  "slug": "dam-bao-nguon-nuoc-uong-sach-de-bao-ve-suc-khoe-cong-dong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:05:56.684Z"),
  "created": ISODate("2018-01-03T04:05:56.684Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c56b55cd7e8ac5dade99b"),
  "slug": "cac-cau-lac-bo-nang-luong-ben-vung-gop-phan-thuc-day-nang-luong-tai-tao-tai-xa-nguyen-phich",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:06:13.180Z"),
  "created": ISODate("2018-01-03T04:06:13.180Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c56c45cd7e8d85dade99b"),
  "slug": "phat-dong-giai-thuong-sang-tao-xanh-lan-thu-nhat",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:06:28.348Z"),
  "created": ISODate("2018-01-03T04:06:28.348Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c56d45cd7e8ee5dade99b"),
  "slug": "chuyen-nang-luong-thu-duoc-tu-buoc-chan-nguoi-thanh-dien-nang",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:06:44.132Z"),
  "created": ISODate("2018-01-03T04:06:44.132Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c56e85cd7e8db5dade99b"),
  "slug": "dien-mat-troi-se-hieu-qua-va-re-hon",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:07:04.306Z"),
  "created": ISODate("2018-01-03T04:07:04.306Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4c57205cd7e8ac5dade99c"),
  "slug": "sang-tao-vi-cong-dong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-03T04:08:00.535Z"),
  "created": ISODate("2018-01-03T04:08:00.535Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4d8f045cd7e813405cfbd7"),
  "slug": "nang-luong-ben-vung-cho-nguoi-dan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-04T02:18:44.300Z"),
  "created": ISODate("2018-01-04T02:18:44.300Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4d8f105cd7e897015cfbd5"),
  "slug": "powering-vietnam-8-xu-huong-cho-nang-luong-quoc-gia-trong-tuong-lai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-04T02:18:56.278Z"),
  "created": ISODate("2018-01-04T02:18:56.278Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4d8f195cd7e86c015cfbd5"),
  "slug": "nang-lu-o-ng-ta-i-ta-o-tru-co-t-chi-nh-trong-pha-t-trie-n-nga-nh-na-ng-lu-o-ng",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-04T02:19:05.813Z"),
  "created": ISODate("2018-01-04T02:19:05.813Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4d8f695cd7e8e3125cfbd5"),
  "slug": "lan-toa-nhung-mo-hinh-nang-luong-xanh-den-voi-nguoi-dan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-04T02:20:25.422Z"),
  "created": ISODate("2018-01-04T02:20:25.422Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4d8f935cd7e899015cfbd5"),
  "slug": "hoi-thao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-04T02:21:07.959Z"),
  "created": ISODate("2018-01-04T02:21:07.960Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4d8fa95cd7e8b02a5cfbd6"),
  "slug": "giam-thieu-tac-dong-o-nhiem-khong-khi-can-cac-bien-phap-toan-dien-va-dong-bo",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-04T02:21:29.270Z"),
  "created": ISODate("2018-01-04T02:21:29.270Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4d8ffa5cd7e855505cfbd6"),
  "slug": "hoi-thao-nhan-rong-mo-hinh-nang-luong-thanh-cong-tai-thai-binh-va-nam-dinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-04T02:22:50.614Z"),
  "created": ISODate("2018-01-04T02:22:50.614Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4d90075cd7e8e3125cfbd6"),
  "slug": "niem-vui-lan-toa-mang-anh-sang-toi-moi-nha-cho-nguoi-dan-an-giang",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-04T02:23:03.387Z"),
  "created": ISODate("2018-01-04T02:23:03.387Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4d90155cd7e855505cfbd7"),
  "slug": "o-nhiem-khong-khi-khien-600000-tre-em-tu-vong-moi-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-04T02:23:17.420Z"),
  "created": ISODate("2018-01-04T02:23:17.420Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a4d90215cd7e86c015cfbd6"),
  "slug": "trien-lam-cac-ket-qua-du-an-ung-dung-cong-nghe-led-cho-truong-hoc-va-ung-dung-nang-luong-mat-troi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-04T02:23:29.882Z"),
  "created": ISODate("2018-01-04T02:23:29.882Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55743b5cd7e810109dfb74"),
  "slug": "can-ban-hanh-luat-rieng-de-kiem-soat-o-nhiem-khong-khi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:02:35.897Z"),
  "created": ISODate("2018-01-10T02:02:35.897Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5afec0ec5cd7e80425630452"),
  "slug": "large-dams-costs-too-much",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-05-18T12:02:52.267Z"),
  "created": ISODate("2018-05-18T12:02:52.267Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7355b65cd7e8586a951911"),
  "slug": "tin-tuc",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-01T18:00:22.793Z"),
  "created": ISODate("2018-02-01T18:00:22.793Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7358dc5cd7e8586a951918"),
  "slug": "f",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-02-01T18:13:48.821Z"),
  "created": ISODate("2018-02-01T18:13:48.822Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7358e65cd7e8586a95191a"),
  "slug": "f-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-02-01T18:13:58.731Z"),
  "created": ISODate("2018-02-01T18:13:58.731Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7358ef5cd7e82b69951911"),
  "slug": "f-2",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-02-01T18:14:07.160Z"),
  "created": ISODate("2018-02-01T18:14:07.160Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7365c35cd7e8f17b951911"),
  "slug": "qua-tang-handmade",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-01T19:08:51.559Z"),
  "created": ISODate("2018-02-01T19:08:51.559Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7365da5cd7e8dd18951914"),
  "slug": "meo-chon-qua",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-01T19:09:14.592Z"),
  "created": ISODate("2018-02-01T19:09:14.592Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7365e55cd7e84527951916"),
  "slug": "cach-lam-qua-tang",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-01T19:09:25.733Z"),
  "created": ISODate("2018-02-01T19:09:25.734Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7365fc5cd7e84527951917"),
  "slug": "thoi-trang-cong-so",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-01T19:09:48.843Z"),
  "created": ISODate("2018-02-01T19:09:48.843Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374a25cd7e82b69951916"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:12:18.294Z"),
  "created": ISODate("2018-02-01T20:12:18.294Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374ba5cd7e8f17b951912"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-1",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:12:42.598Z"),
  "created": ISODate("2018-02-01T20:12:42.598Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374c25cd7e8323f951911"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-2",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:12:50.778Z"),
  "created": ISODate("2018-02-01T20:12:50.778Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374cb5cd7e8586a95191b"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-3",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:12:59.249Z"),
  "created": ISODate("2018-02-01T20:12:59.249Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374d15cd7e8427a951911"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-4",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:13:05.860Z"),
  "created": ISODate("2018-02-01T20:13:05.860Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374d65cd7e8586a95191d"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-5",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:13:10.951Z"),
  "created": ISODate("2018-02-01T20:13:10.951Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374da5cd7e86972951912"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-6",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:13:14.697Z"),
  "created": ISODate("2018-02-01T20:13:14.697Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374dd5cd7e84527951918"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-7",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:13:17.585Z"),
  "created": ISODate("2018-02-01T20:13:17.585Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374e05cd7e8427a951913"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-8",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:13:20.296Z"),
  "created": ISODate("2018-02-01T20:13:20.296Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374e25cd7e8452795191a"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-9",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:13:22.962Z"),
  "created": ISODate("2018-02-01T20:13:22.962Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7374e95cd7e86e1a951910"),
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-10",
  "controller": "videos",
  "action": "index",
  "modified": ISODate("2018-02-01T20:13:29.343Z"),
  "created": ISODate("2018-02-01T20:13:29.343Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a77c2dc5cd7e82a4c1c28ce"),
  "slug": "linh-vuc",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-05T02:35:08.946Z"),
  "created": ISODate("2018-02-05T02:35:08.946Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5aa1f1c05cd7e89251f6d0d4"),
  "slug": "nang-luong-ben-vung-2",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-03-09T02:30:24.971Z"),
  "created": ISODate("2018-03-09T02:30:24.971Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5aa1f1e15cd7e8a251f6d0d6"),
  "slug": "nuoc-va-khong-khi-sach",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-03-09T02:30:57.426Z"),
  "created": ISODate("2018-03-09T02:30:57.426Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5aa1f1f45cd7e89051f6d0d4"),
  "slug": "phat-trien-xanh-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-03-09T02:31:16.636Z"),
  "created": ISODate("2018-03-09T02:31:16.636Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a777ab55cd7e878041c28cd"),
  "slug": "chung-toi-la-ai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-02-04T21:27:17.895Z"),
  "created": ISODate("2018-02-04T21:27:17.895Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a77867f5cd7e878041c28ce"),
  "slug": "su-kien",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-04T22:17:35.900Z"),
  "created": ISODate("2018-02-04T22:17:35.900Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a77d23d5cd7e87a521c28d0"),
  "slug": "nang-luong-ben-vung-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-02-05T03:40:45.383Z"),
  "created": ISODate("2018-02-05T03:40:45.383Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a77d2665cd7e8ab011c28d1"),
  "slug": "van-dong-chinh-sach-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-02-05T03:41:26.381Z"),
  "created": ISODate("2018-02-05T03:41:26.381Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a77d27b5cd7e87a411c28cf"),
  "slug": "nghien-cuu-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-02-05T03:41:47.648Z"),
  "created": ISODate("2018-02-05T03:41:47.648Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a77d29e5cd7e8575c1c28cf"),
  "slug": "vsea-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-02-05T03:42:22.575Z"),
  "created": ISODate("2018-02-05T03:42:22.575Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7830ee5cd7e87f441c28cd"),
  "slug": "cac-vi-phu-huynh-duoc-canh-bao-su-dung-che-xe-day-de-doi-pho-voi-o-nhiem-khong-khi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-02-05T10:24:46.841Z"),
  "created": ISODate("2018-02-05T10:24:46.841Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a78314c5cd7e84e701c28cd"),
  "slug": "so-lieu-cho-thay-300-trieu-tre-em-song-tai-cac-khu-vuc-voi-khong-khi-cuc-ky-o-nhiem",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-02-05T10:26:20.516Z"),
  "created": ISODate("2018-02-05T10:26:20.516Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a03194e5cd7e8f139d8cdee"),
  "slug": "tuyen-phien-dich-vien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2017-11-08T14:48:46.485Z"),
  "created": ISODate("2017-11-08T14:48:46.485Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a05b9125cd7e8c954bf00e8"),
  "slug": "dien-nuoc-ve-voi-nguoi-hmong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2017-11-10T14:34:58.788Z"),
  "created": ISODate("2017-11-10T14:34:58.788Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a14efb55cd7e8fc70fac5ed"),
  "slug": "tham-quan-mo-hinh-nang-luong-ben-vung-cho-cac-nha-bao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2017-11-22T03:32:05.859Z"),
  "created": ISODate("2017-11-22T03:32:05.859Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a1a518e5cd7e883782dbddb"),
  "slug": "su-kien",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2017-11-26T05:30:54.827Z"),
  "created": ISODate("2017-11-26T05:30:54.827Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a264f1b5cd7e8e0310a5d5b"),
  "slug": "dien-gia-trinh-bay-tai-hoi-thao-thuc-day-cac-giai-phap-nang-luong-xanh-ben-vung-cho-khu-vuc-chua-noi-luoi-khu-vuc-dong-bang-song-cuu-long",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2017-12-05T07:47:39.810Z"),
  "created": ISODate("2017-12-05T07:47:39.810Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5578765cd7e80b4a9dfb74"),
  "slug": "thoat",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:20:38.274Z"),
  "created": ISODate("2018-01-10T02:20:38.274Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5578975cd7e8596e9dfb74"),
  "slug": "khong-xay-dung-nha-may-nhiet-dien-than-moi-tai-dong-bang-song-cuu-long-truoc-nam-2020",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:21:11.654Z"),
  "created": ISODate("2018-01-10T02:21:11.654Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5578a95cd7e810109dfb75"),
  "slug": "noi-lo-dien-than",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:21:29.343Z"),
  "created": ISODate("2018-01-10T02:21:29.343Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5578c05cd7e810109dfb76"),
  "slug": "iea-du-bao-se-bung-no-nang-luong-tai-tao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:21:52.581Z"),
  "created": ISODate("2018-01-10T02:21:52.581Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5578d75cd7e80b4a9dfb75"),
  "slug": "thu-vien-xanh-cho-the-he-tuong-lai-xanh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:22:15.107Z"),
  "created": ISODate("2018-01-10T02:22:15.107Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5578f75cd7e8596e9dfb75"),
  "slug": "tcbc-ha-noi-trung-binh-moi-tuan-co-it-hon-2-ngay-chat-luong-khong-khi-o-muc-chap-nhan-duoc",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:22:47.623Z"),
  "created": ISODate("2018-01-10T02:22:47.623Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55791a5cd7e804109dfb74"),
  "slug": "tcbc-khoi-dong-du-an-tang-cuong-nang-luc-cho-cac-to-chuc-xa-hoi-nghe-nghiep-va-dia-phuong-ve-cac-giai-phap-nang-luong-tai-tao-va-su-dung-hieu-qua-va-tiet-kiem-nang-luong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:23:22.356Z"),
  "created": ISODate("2018-01-10T02:23:22.356Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55796e5cd7e84f6b9dfb74"),
  "slug": "tuyen-chuyen-gia-xay-dung-ban-do-mo-hinh-nang-luong-ben-vung-truc-tuyen",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:24:46.884Z"),
  "created": ISODate("2018-01-10T02:24:46.884Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5579a75cd7e810109dfb77"),
  "slug": "tuyen-phien-dich-cho-hoi-thao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:25:43.418Z"),
  "created": ISODate("2018-01-10T02:25:43.418Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5579c05cd7e8083b9dfb74"),
  "slug": "tuyen-thuc-tap-sinh-ho-tro-du-an",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:26:08.270Z"),
  "created": ISODate("2018-01-10T02:26:08.270Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5579dc5cd7e80f109dfb74"),
  "slug": "tuyen-thuc-tap-sinh-nhom-truyen-thong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:26:36.934Z"),
  "created": ISODate("2018-01-10T02:26:36.934Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5579ff5cd7e810109dfb78"),
  "slug": "kien-nghi-cua-cac-to-chuc-xa-hoi-dan-su-viet-nam-ve-chien-luoc-nang-luong-cua-ngan-hang-phat-trien-ha-tang-chau-a-aiib",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:27:11.343Z"),
  "created": ISODate("2018-01-10T02:27:11.343Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557a145cd7e804109dfb77"),
  "slug": "ky-luc-moi-cua-nang-luong-tai-tao-cong-suat-tang-chi-phi-giam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:27:32.414Z"),
  "created": ISODate("2018-01-10T02:27:32.414Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557a235cd7e84f6b9dfb75"),
  "slug": "blackrock-nhan-dinh-than-da-het-thoi-va-xem-xet-dau-tu-manh-vao-nang-luong-tai-tao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:27:47.925Z"),
  "created": ISODate("2018-01-10T02:27:47.925Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557a3e5cd7e8f93e9dfb74"),
  "slug": "thue-bao-ve-moi-truong-co-thuc-vi-moi-truong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:28:14.739Z"),
  "created": ISODate("2018-01-10T02:28:14.739Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557a4e5cd7e80f109dfb75"),
  "slug": "giai-phap-nuoc-sach-nang-luong-xanh-cho-cac-cong-dong-nong-thon-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:28:30.246Z"),
  "created": ISODate("2018-01-10T02:28:30.246Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557aba5cd7e804109dfb78"),
  "slug": "nghien-cuu-cho-thay-khoi-bui-tan-the-tai-trung-quoc-co-lien-quan-toi-hien-tuong-bang-tan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:30:18.948Z"),
  "created": ISODate("2018-01-10T02:30:18.948Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557abf5cd7e810109dfb79"),
  "slug": "nguoi-tieu-dung-nen-su-dung-suc-manh-mua-do-cua-ho-de-dan-den-cuoc-cach-mang-san-pham-xanh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:30:23.448Z"),
  "created": ISODate("2018-01-10T02:30:23.448Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557ac45cd7e80f109dfb76"),
  "slug": "cuoc-cach-mang-xanh-green-vietnam-chuong-trinh-1-trieu-ngoi-nha-xanh-cho-viet-nam-green-homes",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:30:28.340Z"),
  "created": ISODate("2018-01-10T02:30:28.340Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557ac85cd7e88b319dfb74"),
  "slug": "cac-nha-khoa-hoc-hy-vong-thi-nghiem-ve-dam-lay-du-tru-carbon-se-la-tach-tra-cua-tat-ca-moi-nguoi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:30:32.723Z"),
  "created": ISODate("2018-01-10T02:30:32.723Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557acc5cd7e80f109dfb77"),
  "slug": "so-lieu-cho-thay-300-trieu-tre-em-song-tai-cac-khu-vuc-voi-khong-khi-cuc-ky-o-nhiem",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:30:36.597Z"),
  "created": ISODate("2018-01-10T02:30:36.597Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557ad05cd7e88b319dfb75"),
  "slug": "gan-2-trieu-tre-em-tu-vong-moi-nam-vi-o-nhiem-va-moi-truong-nguy-hai-cho-suc-khoe",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:30:40.486Z"),
  "created": ISODate("2018-01-10T02:30:40.486Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557ad55cd7e8f93e9dfb75"),
  "slug": "cac-vi-phu-huynh-duoc-canh-bao-su-dung-che-xe-day-de-doi-pho-voi-o-nhiem-khong-khi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:30:45.570Z"),
  "created": ISODate("2018-01-10T02:30:45.570Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557ad95cd7e8083b9dfb75"),
  "slug": "ban-do-nay-cho-thay-cac-quoc-gia-co-moi-truong-nhiem-doc-nhieu-nhat-tren-trai-dat",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:30:49.782Z"),
  "created": ISODate("2018-01-10T02:30:49.782Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557add5cd7e80b4a9dfb76"),
  "slug": "tuong-lai-doc-start-up-tai-luan-don-khoi-dong-mot-thiet-bi-de-giai-quyet-o-nhiem-khong-khi-tai-cac-thanh-pho-lon",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:30:53.752Z"),
  "created": ISODate("2018-01-10T02:30:53.752Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557ae15cd7e8da419dfb74"),
  "slug": "nghien-cuu-cua-mit-chi-ra-xa-thai-tu-diesel-cua-volkswagen-gay-ra-hon-ngan-ca-chet-yeu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:30:57.637Z"),
  "created": ISODate("2018-01-10T02:30:57.637Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557ae65cd7e84f6b9dfb76"),
  "slug": "nghien-cuu-cho-thay-eu-phai-dong-cua-het-cac-nha-may-dung-than-vao-nam-2030-de-dat-duoc-nhung-cam-ket-cua-hiep-uoc-paris-ve-bien-doi-khi-hau-toan-cau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:31:02.232Z"),
  "created": ISODate("2018-01-10T02:31:02.232Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557aeb5cd7e8083b9dfb76"),
  "slug": "cuoi-cung-2016-la-nam-cac-tam-nang-luong-mat-troi-re-hon-nhien-lieu-hoa-thach-hay-cho-doi-nam-2017",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:31:07.248Z"),
  "created": ISODate("2018-01-10T02:31:07.248Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b245cd7e8da419dfb75"),
  "slug": "tuyen-dung-giang-vien-lop-tap-huan-ve-ky-nang-to-chuc-truyen-thong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:32:04.405Z"),
  "created": ISODate("2018-01-10T02:32:04.405Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b385cd7e80f109dfb78"),
  "slug": "con-duong-pin-nang-luong-mat-troi-dau-tien-tren-the-gioi-o-lang-normandy",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:32:24.800Z"),
  "created": ISODate("2018-01-10T02:32:24.800Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b3c5cd7e810109dfb7a"),
  "slug": "hoa-hoan-o-nha-may-nhiet-dien-vinh-tan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:32:28.379Z"),
  "created": ISODate("2018-01-10T02:32:28.379Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b405cd7e84f6b9dfb77"),
  "slug": "phat-trien-nhiet-dien-than-la-tat-yeu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:32:32.473Z"),
  "created": ISODate("2018-01-10T02:32:32.473Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b445cd7e8596e9dfb76"),
  "slug": "tuyen-can-bo-ke-toan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:32:36.910Z"),
  "created": ISODate("2018-01-10T02:32:36.910Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b485cd7e8596e9dfb77"),
  "slug": "kien-nghi-cua-cac-to-chuc-phi-chinh-phu-viet-nam-gui-uy-hoi-song-me-cong-quoc-te",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:32:40.145Z"),
  "created": ISODate("2018-01-10T02:32:40.145Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b515cd7e8da419dfb76"),
  "slug": "cac-nha-may-nhiet-dien-than-duoc-cho-la-nguyen-nhan-gay-ra-hang-ngan-cai-chet-se-duoc-ho-tro-10-trieu-bang-tu-chinh-phu-trong-mot-nam-cung-cap-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:32:49.359Z"),
  "created": ISODate("2018-01-10T02:32:49.359Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b555cd7e8f93e9dfb76"),
  "slug": "bac-kinh-du-kien-giam-su-dung-than-den-30-de-giam-o-nhiem-khong-khi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:32:53.890Z"),
  "created": ISODate("2018-01-10T02:32:53.890Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b5a5cd7e8da419dfb77"),
  "slug": "bao-cao-cho-thay-nganh-nang-luong-mat-troi-o-my-tao-nhieu-viec-lam-hon-ca-nganh-nang-luong-dau-than-va-khi-dot-cong-lai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:32:58.863Z"),
  "created": ISODate("2018-01-10T02:32:58.863Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b5f5cd7e80b4a9dfb77"),
  "slug": "go-green-city-2017",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:33:03.920Z"),
  "created": ISODate("2018-01-10T02:33:03.920Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b665cd7e88b319dfb76"),
  "slug": "tong-thong-trump-khong-the-ngung-nang-luong-tai-tao-phat-trien-ca-trong-va-ngoai-nuoc",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:33:10.710Z"),
  "created": ISODate("2018-01-10T02:33:10.710Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557b6d5cd7e810109dfb7b"),
  "slug": "cuoc-thi-cong-nghe-sach-2017-clean-tech-competition-2017",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:33:17.144Z"),
  "created": ISODate("2018-01-10T02:33:17.144Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557bc65cd7e8083b9dfb77"),
  "slug": "viet-nam-va-thai-lan-chia-se-van-de-an-toan-trong-su-dung-nang-luong-tai-tao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:34:46.600Z"),
  "created": ISODate("2018-01-10T02:34:46.600Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557bcb5cd7e84f6b9dfb78"),
  "slug": "nam-2017-google-se-su-dung-100-nang-luong-tai-tao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:34:51.110Z"),
  "created": ISODate("2018-01-10T02:34:51.110Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557bce5cd7e810109dfb7c"),
  "slug": "hoi-thao-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:34:54.545Z"),
  "created": ISODate("2018-01-10T02:34:54.545Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557bd15cd7e8da419dfb78"),
  "slug": "via-he-lat-nhua-tai-che-thu-nang-luong-tu-mat-troi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:34:57.112Z"),
  "created": ISODate("2018-01-10T02:34:57.112Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557bd95cd7e84f6b9dfb79"),
  "slug": "cu-bat-tay-170-ty-usd-giua-bill-gates-jeff-bezos-jack-ma-va-nhieu-ty-phu-nham-giai-cuu-loai-nguoi-tu-2017",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:35:05.846Z"),
  "created": ISODate("2018-01-10T02:35:05.846Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557bdd5cd7e810109dfb7d"),
  "slug": "lap-ke-hoach-nang-luong-dia-phuong-mo-hinh-phat-trien-tieu-bieu-nam-2016",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:35:09.250Z"),
  "created": ISODate("2018-01-10T02:35:09.250Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557be05cd7e8083b9dfb78"),
  "slug": "nha-may-nhiet-dien-duyen-hai-dot-chay-tam-can-nguoi-dan-tra-vinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:35:12.194Z"),
  "created": ISODate("2018-01-10T02:35:12.194Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557be35cd7e8da419dfb79"),
  "slug": "phat-trien-dien-gio-can-go-nut-that-ve-tai-chinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:35:15.140Z"),
  "created": ISODate("2018-01-10T02:35:15.140Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557be55cd7e8f93e9dfb77"),
  "slug": "ky-2-phat-trien-dien-gio-kho-chua-lo-khon",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:35:17.824Z"),
  "created": ISODate("2018-01-10T02:35:17.824Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557be95cd7e88b319dfb77"),
  "slug": "ky-1-viet-nam-va-co-hoi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:35:21.232Z"),
  "created": ISODate("2018-01-10T02:35:21.232Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557beb5cd7e8d5719dfb74"),
  "slug": "khoi-cong-nha-may-san-xuat-pin-mat-troi-tai-bac-giang",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:35:23.887Z"),
  "created": ISODate("2018-01-10T02:35:23.887Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557bef5cd7e8083b9dfb79"),
  "slug": "khanh-thanh-du-an-nha-may-dien-gio-phu-lac",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:35:27.793Z"),
  "created": ISODate("2018-01-10T02:35:27.793Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557bf25cd7e8da419dfb7a"),
  "slug": "ung-ho-dung-dien-hat-nhan-va-khuyen-nghi-uu-tien-phat-trien-nguon-dien-tu-cac-nguon-nang-luong-tai-tao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:35:30.156Z"),
  "created": ISODate("2018-01-10T02:35:30.156Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557bf65cd7e8f93e9dfb78"),
  "slug": "nang-luong-tai-tao-cho-tuong-lai-ben-vung",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:35:34.191Z"),
  "created": ISODate("2018-01-10T02:35:34.191Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557c4e5cd7e810109dfb7e"),
  "slug": "tuyen-giang-vien-lop-tap-huan-ve-ky-nang-to-chuc-truyen-thong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:37:02.351Z"),
  "created": ISODate("2018-01-10T02:37:02.351Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557c525cd7e8d5719dfb75"),
  "slug": "trung-quoc-tiep-tuc-han-che-xay-dung-cac-nha-may-nhiet-dien-than",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:37:06.701Z"),
  "created": ISODate("2018-01-10T02:37:06.701Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557c575cd7e84f6b9dfb7a"),
  "slug": "10-kien-nghi-giam-nguy-co-o-nhiem-moi-truong-tu-nhiet-dien-than",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:37:11.563Z"),
  "created": ISODate("2018-01-10T02:37:11.563Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557c5a5cd7e8f93e9dfb79"),
  "slug": "tuyen-chuyen-gia-danh-gia-ve-mo-hinh-lap-ke-hoach-nang-luong-dia-phuong-do-greenid-trien-khai-tai-nam-dinh-thai-binh-va-ca-mau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:37:14.318Z"),
  "created": ISODate("2018-01-10T02:37:14.318Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557c5f5cd7e810109dfb7f"),
  "slug": "hoi-thao-nang-luong-hat-nhan-o-viet-nam-va-the-gioi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:37:19.368Z"),
  "created": ISODate("2018-01-10T02:37:19.368Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557c635cd7e8d5719dfb76"),
  "slug": "nhiet-dien-than-lam-suy-giam-nang-suat-lua-dong-bang-song-cuu-long",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:37:23.392Z"),
  "created": ISODate("2018-01-10T02:37:23.392Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557c665cd7e84f6b9dfb7b"),
  "slug": "den-luc-phai-giam-dien-than-phat-trien-dien-sach",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:37:26.267Z"),
  "created": ISODate("2018-01-10T02:37:26.267Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557c735cd7e8f93e9dfb7a"),
  "slug": "bac-lieu-bo-nhiet-dien-than-chon-nang-luong-sach-moi-truong-sach-tom-sach",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:37:39.605Z"),
  "created": ISODate("2018-01-10T02:37:39.605Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557c765cd7e88b319dfb78"),
  "slug": "ban-khoan-ve-sinh-ke-va-tuong-lai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:37:42.841Z"),
  "created": ISODate("2018-01-10T02:37:42.841Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557c7d5cd7e88b319dfb79"),
  "slug": "du-an-thep-ca-na-nguy-co-tac-dong-o-nhiem-cong-huong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:37:49.921Z"),
  "created": ISODate("2018-01-10T02:37:49.921Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557ce75cd7e88b319dfb7a"),
  "slug": "du-an-bao-ve-suc-khoe-cho-nguoi-dan-huong-di-ket-hop-hai-hoa-giua-to-chuc-nghien-cuu-sang-tao-tai-chinh-va-nguoi-dan-o-nong-thon",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:39:35.315Z"),
  "created": ISODate("2018-01-10T02:39:35.315Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557cee5cd7e80b4a9dfb78"),
  "slug": "gan-kinh-te-xa-hoi-voi-nang-cao-suc-khoe-cong-dong-theo-huong-phat-trien-xanh-viec-lam-thiet-thuc-cua-xa-tu-mai-sau-ngay-dat-chuan-nong-thon-moi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:39:42.525Z"),
  "created": ISODate("2018-01-10T02:39:42.525Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557cfa5cd7e8596e9dfb78"),
  "slug": "hoi-thao-gioi-thieu-lap-ke-hoach-va-trien-khai-du-an-tai-tinh-bien-an-giang",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:39:54.209Z"),
  "created": ISODate("2018-01-10T02:39:54.209Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b3f4a5cd7e85d41ff24c0"),
  "slug": "sang-kien-quoc-te",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T18:02:50.901Z"),
  "created": ISODate("2018-02-07T18:02:50.901Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5aa1f3e85cd7e82547f6d0d4"),
  "slug": "phat-trien-xanh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-03-09T02:39:36.457Z"),
  "created": ISODate("2018-03-09T02:39:36.457Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5aa1f4045cd7e88f51f6d0d6"),
  "slug": "nang-luong-ben-vung",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-03-09T02:40:04.911Z"),
  "created": ISODate("2018-03-09T02:40:04.911Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557cfc5cd7e80b4a9dfb79"),
  "slug": "le-khanh-thanh-he-thong-cung-cap-nuoc-uong-tinh-khiet-cong-nghe-ro-su-dung-nang-luong-mat-troi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:39:56.791Z"),
  "created": ISODate("2018-01-10T02:39:56.791Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d005cd7e804109dfb79"),
  "slug": "nha-may-chay-thu-va-moi-hoa-moi-truong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:40:00.468Z"),
  "created": ISODate("2018-01-10T02:40:00.468Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d055cd7e8596e9dfb79"),
  "slug": "nhiet-dien-than-da-het-thoi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:40:05.691Z"),
  "created": ISODate("2018-01-10T02:40:05.691Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d0c5cd7e8083b9dfb7a"),
  "slug": "chinh-phu-xem-xet-co-che-khuyen-khich-du-an-dien-mat-troi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:40:12.295Z"),
  "created": ISODate("2018-01-10T02:40:12.295Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d0f5cd7e8d5719dfb77"),
  "slug": "thi-nhau-xe-thit-dong-me-kong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:40:15.473Z"),
  "created": ISODate("2018-01-10T02:40:15.473Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d125cd7e80b4a9dfb7a"),
  "slug": "tuyen-chuyen-gia-tap-huan-tai-an-giang",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:40:18.659Z"),
  "created": ISODate("2018-01-10T02:40:18.659Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d155cd7e810109dfb80"),
  "slug": "dong-bang-song-cuu-long-qua-tai-nhiet-dien-nguy-co-o-nhiem-cao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:40:21.921Z"),
  "created": ISODate("2018-01-10T02:40:21.921Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d195cd7e84f6b9dfb7c"),
  "slug": "lo-ngai-formosa-o-long-an",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:40:25.526Z"),
  "created": ISODate("2018-01-10T02:40:25.526Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5afec0e05cd7e8ab25630452"),
  "slug": "don-sahong-dam-fatal-blow-to-mekong-delta-scientists",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-05-18T12:02:40.403Z"),
  "created": ISODate("2018-05-18T12:02:40.403Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5afec0fc5cd7e80425630453"),
  "slug": "long-term-warming-likely-to-be-significant-despite-recent-slowdown",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-05-18T12:03:08.397Z"),
  "created": ISODate("2018-05-18T12:03:08.397Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5b05345d5cd7e8890d8bb01d"),
  "slug": "doi-tac-cua-chung-toi",
  "controller": "albums",
  "action": "index",
  "modified": ISODate("2018-05-23T09:29:01.163Z"),
  "created": ISODate("2018-05-23T09:29:01.163Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5b1111555cd7e80b73f7aa9b"),
  "slug": "slide",
  "controller": "albums",
  "action": "index",
  "modified": ISODate("2018-06-01T09:26:45.408Z"),
  "created": ISODate("2018-06-01T09:26:45.408Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5b14aae75cd7e8953cdf3267"),
  "slug": "test1-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-06-04T02:58:47.595Z"),
  "created": ISODate("2018-06-04T02:58:47.595Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d1d5cd7e8083b9dfb7b"),
  "slug": "y-tuong-thien-tai-den-tu-nhung-dieu-nho-nhat",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:40:29.615Z"),
  "created": ISODate("2018-01-10T02:40:29.615Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d205cd7e8d5719dfb78"),
  "slug": "nha-may-khong-lo-xa-khoi-den-dat-chuan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:40:32.447Z"),
  "created": ISODate("2018-01-10T02:40:32.447Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d7c5cd7e80b4a9dfb7b"),
  "slug": "suc-khoe-cong-dong-va-an-toan-moi-sinh-can-duoc-uu-tien-khi-vn-tham-gia-hiep-dinh-tpp",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:04.358Z"),
  "created": ISODate("2018-01-10T02:42:04.358Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d855cd7e8f93e9dfb7b"),
  "slug": "hoi-thao-khoa-hoc-hiep-dinh-doi-tac-xuyen-thai-binh-duong-tpp-tu-goc-nhin-suc-khoe-cong-dong-va-an-toan-moi-sinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:13.189Z"),
  "created": ISODate("2018-01-10T02:42:13.189Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d8c5cd7e88b319dfb7b"),
  "slug": "ket-thuc-thoi-dai-cua-than",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:20.948Z"),
  "created": ISODate("2018-01-10T02:42:20.948Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d905cd7e8da419dfb7b"),
  "slug": "trung-quoc-ra-lenh-cam-cap-phep-xay-dung-cac-nha-may-nhiet-dien-than-cho-den-het-nam-2018",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:24.372Z"),
  "created": ISODate("2018-01-10T02:42:24.372Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d935cd7e88b319dfb7c"),
  "slug": "tuyen-tro-ly-bien-tap",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:27.669Z"),
  "created": ISODate("2018-01-10T02:42:27.669Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d965cd7e84f6b9dfb7d"),
  "slug": "tuyen-chuyen-gia-bien-tap-tai-lieu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:30.196Z"),
  "created": ISODate("2018-01-10T02:42:30.196Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d995cd7e8596e9dfb7a"),
  "slug": "nen-tang-hieu-qua-nang-luong-cua-cac-do-thi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:33.344Z"),
  "created": ISODate("2018-01-10T02:42:33.344Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d9c5cd7e8d5719dfb79"),
  "slug": "dung-de-xay-ra-mot-tham-hoa-moi-truong-o-tay-nam-bo",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:36.333Z"),
  "created": ISODate("2018-01-10T02:42:36.333Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557d9f5cd7e84f6b9dfb7e"),
  "slug": "trung-tam-nghien-cuu-nang-luong-sach-va-phat-trien-ben-vung-cleaned",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:39.821Z"),
  "created": ISODate("2018-01-10T02:42:39.821Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557da45cd7e8f93e9dfb7c"),
  "slug": "trung-tam-nghien-cuu-va-dao-tao-phat-trien-cong-dong-rtccd",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:44.860Z"),
  "created": ISODate("2018-01-10T02:42:44.860Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557da65cd7e84f6b9dfb7f"),
  "slug": "cuoc-thi-video-ve-khi-hau-tim-kiem-cac-thong-diep-truyen-cam-hung-cho-the-gioi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:46.664Z"),
  "created": ISODate("2018-01-10T02:42:46.664Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557dab5cd7e8d5719dfb7a"),
  "slug": "tuyen-chuyen-gia-tai-lieu-hoa-san-pham",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:51.230Z"),
  "created": ISODate("2018-01-10T02:42:51.230Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557db05cd7e88b319dfb7d"),
  "slug": "indonesia-san-xuat-khi-dot-nau-an-tu-dau-phu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:42:56.444Z"),
  "created": ISODate("2018-01-10T02:42:56.444Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557db55cd7e80b4a9dfb7c"),
  "slug": "ky-nguyen-moi-cho-nang-luong-tai-tao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:43:01.469Z"),
  "created": ISODate("2018-01-10T02:43:01.469Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e0c5cd7e80b4a9dfb7d"),
  "slug": "tang-cuong-quan-ly-chat-luong-khong-khi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:44:28.644Z"),
  "created": ISODate("2018-01-10T02:44:28.644Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e195cd7e8da419dfb7c"),
  "slug": "trien-lam-dong-sang-tao-nghe-thuat-ve-nang-luong-tai-tao-cua-sinh-vien-dai-hoc-hue",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:44:41.543Z"),
  "created": ISODate("2018-01-10T02:44:41.543Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e1c5cd7e88b319dfb7e"),
  "slug": "trung-tam-hanh-dong-va-lien-ket-vi-moi-truong-va-phat-trien-change",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:44:44.673Z"),
  "created": ISODate("2018-01-10T02:44:44.673Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e205cd7e8d5719dfb7b"),
  "slug": "tap-doan-ge-ky-ket-phat-trien-1000-mw-dien-gio-tai-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:44:48.722Z"),
  "created": ISODate("2018-01-10T02:44:48.722Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e245cd7e8da419dfb7d"),
  "slug": "thuy-lo-xuyen-a-va-thuy-dien-tren-song-hong-goc-nhin-tu-nghien-cuu-tu-van-va-quan-ly-ky-2",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:44:52.647Z"),
  "created": ISODate("2018-01-10T02:44:52.647Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e285cd7e8083b9dfb7c"),
  "slug": "thuy-lo-xuyen-a-va-thuy-dien-tren-dong-song-hong-tu-goc-nhin-nghien-cuu-tu-van-va-quan-ly-ky-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:44:56.600Z"),
  "created": ISODate("2018-01-10T02:44:56.600Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e2b5cd7e8d5719dfb7c"),
  "slug": "world-bank-nhiet-dien-than-viet-nam-nam-trong-danh-sach-de-doa-hanh-tinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:44:59.194Z"),
  "created": ISODate("2018-01-10T02:44:59.194Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e2e5cd7e8596e9dfb7b"),
  "slug": "nghien-cuu-moi-viet-nam-co-the-tien-toi-100-dien-tai-tao-vao-nam-2050",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:45:02.979Z"),
  "created": ISODate("2018-01-10T02:45:02.979Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e315cd7e804109dfb7a"),
  "slug": "thong-bao-ket-qua-goi-ho-tro-nang-luong-ben-vung",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:45:05.685Z"),
  "created": ISODate("2018-01-10T02:45:05.685Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e6b5cd7e84f6b9dfb80"),
  "slug": "nhung-sang-tao-kinh-ngac-tu-cong-nghe-nang-luong-mat-troi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:46:03.762Z"),
  "created": ISODate("2018-01-10T02:46:03.762Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e975cd7e8d5719dfb7d"),
  "slug": "tuyen-can-bo-du-an-lam-viec-tai-dac-lac",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:46:47.982Z"),
  "created": ISODate("2018-01-10T02:46:47.982Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557e9e5cd7e8da419dfb7e"),
  "slug": "tuyen-chuyen-gia-nghien-cuu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:46:54.480Z"),
  "created": ISODate("2018-01-10T02:46:54.480Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557ea15cd7e804109dfb7b"),
  "slug": "tuyen-chuyen-gia-tu-van-danh-gia-ket-qua-du-an",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:46:57.307Z"),
  "created": ISODate("2018-01-10T02:46:57.307Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557ea45cd7e810109dfb81"),
  "slug": "chuyen-gia-dao-tao-ve-su-dung-nang-luong-an-toan-hop-ly-tiet-kiem-hieu-qua-va-lap-rap-bong-den-led",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:47:00.474Z"),
  "created": ISODate("2018-01-10T02:47:00.474Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f065cd7e84f6b9dfb81"),
  "slug": "giang-vien-lop-tap-huan-ve-ky-nang-to-chuc-truyen-thong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:48:38.460Z"),
  "created": ISODate("2018-01-10T02:48:38.460Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f105cd7e84f6b9dfb82"),
  "slug": "tuyen-chuyen-gia-nghien-cuu-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:48:48.892Z"),
  "created": ISODate("2018-01-10T02:48:48.892Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f155cd7e8083b9dfb7d"),
  "slug": "may-say-nong-sa-n-ba-ng-nang-luong-mat-troi-bie-n-uo-c-mo-tha-nh-hie-n-thu-c",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:48:53.504Z"),
  "created": ISODate("2018-01-10T02:48:53.504Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f195cd7e80b4a9dfb7e"),
  "slug": "keu-goi-nop-de-xuat-du-an-goi-ho-tro-phat-trien-nang-luong-ben-vung",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:48:57.104Z"),
  "created": ISODate("2018-01-10T02:48:57.104Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f1d5cd7e88b319dfb7f"),
  "slug": "tuyen-can-bo-du-an-nhom-nghien-cuu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:01.403Z"),
  "created": ISODate("2018-01-10T02:49:01.403Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f245cd7e810109dfb82"),
  "slug": "tuyen-tinh-nguyen-vien-truyen-thong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:08.813Z"),
  "created": ISODate("2018-01-10T02:49:08.813Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f345cd7e88b319dfb80"),
  "slug": "dap-cua-trung-quoc-tren-dong-mekong-co-the-gay-bat-on-toan-cau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:24.225Z"),
  "created": ISODate("2018-01-10T02:49:24.225Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f385cd7e8d5719dfb7e"),
  "slug": "nguo-i-tho-die-n-dam-me-nghien-cu-u-thie-t-bi-tie-t-kie-m-nang-luo-ng",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:28.188Z"),
  "created": ISODate("2018-01-10T02:49:28.188Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f3a5cd7e8596e9dfb7c"),
  "slug": "9x-tro-thanh-ceo-cong-ty-nang-luong-hang-dau-dong-nam-a",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:30.934Z"),
  "created": ISODate("2018-01-10T02:49:30.934Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f3f5cd7e8d5719dfb7f"),
  "slug": "dien-hat-nhan-phai-can-nhac-ky",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:35.735Z"),
  "created": ISODate("2018-01-10T02:49:35.735Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f425cd7e8da419dfb7f"),
  "slug": "phan-ung-ket-qua-nghien-cuu-ve-tac-dong-cua-dap-thuy-dien-song-me-kong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:38.313Z"),
  "created": ISODate("2018-01-10T02:49:38.313Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f445cd7e810109dfb83"),
  "slug": "tuyen-can-bo-du-an-lam-viec-tai-hien-truong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:40.755Z"),
  "created": ISODate("2018-01-10T02:49:40.755Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f475cd7e88b319dfb81"),
  "slug": "tuyen-phien-dich-hoi-thao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:43.727Z"),
  "created": ISODate("2018-01-10T02:49:43.727Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f4b5cd7e8596e9dfb7d"),
  "slug": "kinh-doanh-sach-hon-thong-qua-giai-phap-thong-minh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:47.240Z"),
  "created": ISODate("2018-01-10T02:49:47.240Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f4e5cd7e8da419dfb80"),
  "slug": "dap-thuy-dien-tren-dong-chinh-song-me-cong-van-de-trao-doi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:49:50.122Z"),
  "created": ISODate("2018-01-10T02:49:50.122Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557f9a5cd7e8da419dfb81"),
  "slug": "tuyen-can-bo-du-an-nhom-van-dong-chinh-sach-mang-luoi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:06.253Z"),
  "created": ISODate("2018-01-10T02:51:06.253Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fa25cd7e8d5719dfb80"),
  "slug": "thu-tuong-chinh-phu-viet-nam-cat-giam-nhiet-dien-than-tin-hieu-to-dam-su-lao-doc-cua-nganh-cong-nghiep-than-toan-cau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:14.390Z"),
  "created": ISODate("2018-01-10T02:51:14.390Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fa65cd7e80b4a9dfb7f"),
  "slug": "thuong-truc-chinh-phu-hop-ve-dieu-chinh-quy-hoach-dien-vii-va-quy-hoach-than-60",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:18.163Z"),
  "created": ISODate("2018-01-10T02:51:18.163Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fa85cd7e8596e9dfb7e"),
  "slug": "den-thuc-vat-lay-nguon-dien-tu-dat",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:20.830Z"),
  "created": ISODate("2018-01-10T02:51:20.830Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fab5cd7e8f93e9dfb7d"),
  "slug": "mo-hinh-trong-rau-sach-tu-rac",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:23.947Z"),
  "created": ISODate("2018-01-10T02:51:23.947Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fae5cd7e8596e9dfb7f"),
  "slug": "thu-hinh-dung-dong-bang-song-cuu-long-se-bien-mat-tren-ban-do-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:26.473Z"),
  "created": ISODate("2018-01-10T02:51:26.473Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fb15cd7e80b4a9dfb80"),
  "slug": "tang-truong-xanh-viet-nam-can-nhung-buoc-di-thich-hop",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:29.634Z"),
  "created": ISODate("2018-01-10T02:51:29.634Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fc35cd7e8f93e9dfb7e"),
  "slug": "thuy-dien-me-cong-khong-mang-lai-loi-ich-kinh-te",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:47.800Z"),
  "created": ISODate("2018-01-10T02:51:47.800Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fc55cd7e8083b9dfb7e"),
  "slug": "xay-dung-co-che-ho-tro-du-an-phat-trien-dien-mat-troi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:49.896Z"),
  "created": ISODate("2018-01-10T02:51:49.896Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fc85cd7e810109dfb84"),
  "slug": "khi-sinh-vien-hien-ke-bao-ve-dong-song-me-cong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:52.804Z"),
  "created": ISODate("2018-01-10T02:51:52.804Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fcb5cd7e8596e9dfb80"),
  "slug": "dang-sau-su-thanh-cong-cua-uruguay-voi-95-dien-nang-den-tu-nang-luong-tai-tao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:55.131Z"),
  "created": ISODate("2018-01-10T02:51:55.131Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fcd5cd7e8083b9dfb7f"),
  "slug": "that-vong-truoc-phan-quyet-cua-toa-an-thai-lan-lien-quan-den-dap-xayaburi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:57.470Z"),
  "created": ISODate("2018-01-10T02:51:57.470Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fcf5cd7e816779dfb74"),
  "slug": "nong-dan-thai-lan-thua-kien-xayaburi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:51:59.705Z"),
  "created": ISODate("2018-01-10T02:51:59.705Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fd25cd7e810109dfb85"),
  "slug": "trung-tam-nghien-cuu-phap-luat-va-chinh-sach-phat-trien-ben-vung-lpsd",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:52:02.238Z"),
  "created": ISODate("2018-01-10T02:52:02.238Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a557fd55cd7e8596e9dfb81"),
  "slug": "nguoi-dan-xa-nguyen-phich-hieu-duoc-vai-tro-quan-trong-cua-viec-su-dung-nang-luong-hieu-qua",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:52:05.143Z"),
  "created": ISODate("2018-01-10T02:52:05.143Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580165cd7e84f6b9dfb83"),
  "slug": "phat-trien-mo-hinh-nang-luong-ben-vung-trong-cong-dong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:53:10.196Z"),
  "created": ISODate("2018-01-10T02:53:10.196Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55801e5cd7e8da419dfb82"),
  "slug": "tap-huan-cho-nhom-nang-luong-dia-phuong-let-ky-nang-dieu-tra-su-dung-bang-hoi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:53:18.935Z"),
  "created": ISODate("2018-01-10T02:53:18.935Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580245cd7e816779dfb75"),
  "slug": "van-de-ve-nang-luong-viet-nam-khi-dot-trong-nuoc-va-than-da-nhap-khau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:53:24.980Z"),
  "created": ISODate("2018-01-10T02:53:24.980Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580285cd7e80b4a9dfb81"),
  "slug": "viet-nam-truoc-moi-de-doa-khoi-bui-xuyen-bien-gioi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:53:28.200Z"),
  "created": ISODate("2018-01-10T02:53:28.200Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580305cd7e8f93e9dfb7f"),
  "slug": "hoi-nghi-cop-21-nhieu-sang-kien-moi-cho-cong-nghe-xanh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:53:36.840Z"),
  "created": ISODate("2018-01-10T02:53:36.840Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580325cd7e810109dfb86"),
  "slug": "toa-dam-dong-gop-y-kien-cho-quy-hoach-dien-7-hieu-chinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:53:38.964Z"),
  "created": ISODate("2018-01-10T02:53:38.964Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580435cd7e8f93e9dfb80"),
  "slug": "chien-luoc-phat-trien-nang-luong-tai-tao-viet-nam-den-nam-2030-tam-nhin-den-2050",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:53:55.534Z"),
  "created": ISODate("2018-01-10T02:53:55.534Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580475cd7e810109dfb87"),
  "slug": "8-de-xuat-hoan-thien-de-an-dieu-chinh-quy-hoach-dien-vii",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:53:59.369Z"),
  "created": ISODate("2018-01-10T02:53:59.369Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580495cd7e80b4a9dfb82"),
  "slug": "xac-dinh-cac-bien-phap-kiem-soat-khi-nha-kinh-trong-linh-vuc-nhiet-dien-dot-than-nddt-va-de-xuat-lo-trinh-ap-dung",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:54:01.329Z"),
  "created": ISODate("2018-01-10T02:54:01.329Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55804c5cd7e8d5719dfb81"),
  "slug": "dong-gop-y-kien-cho-quy-hoach-dien-vii-hieu-chinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:54:04.160Z"),
  "created": ISODate("2018-01-10T02:54:04.160Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55804e5cd7e8083b9dfb80"),
  "slug": "bieu-gia-dien-ho-tro-fit-duoc-thuc-hien-hieu-qua-se-gop-phan-thuc-day-phat-trien-tang-truong-xanh-tai-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:54:06.650Z"),
  "created": ISODate("2018-01-10T02:54:06.650Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580505cd7e810109dfb88"),
  "slug": "tuyen-dieu-phoi-chuong-trinh-nghien-cuu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:54:08.335Z"),
  "created": ISODate("2018-01-10T02:54:08.335Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580535cd7e8596e9dfb82"),
  "slug": "hay-cung-lang-nghe-tieng-noi-cua-nguoi-dan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:54:11.165Z"),
  "created": ISODate("2018-01-10T02:54:11.165Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580545cd7e8da419dfb83"),
  "slug": "gia-thanh-nang-luong-tai-tao-se-giam-toi-40-trong-nhung-nam-toi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:54:12.869Z"),
  "created": ISODate("2018-01-10T02:54:12.869Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580935cd7e8da419dfb84"),
  "slug": "sach-uong-duoc",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:55:15.749Z"),
  "created": ISODate("2018-01-10T02:55:15.749Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580975cd7e8da419dfb85"),
  "slug": "gia-nhiet-dien-se-tang-cao-neu-phai-nhap-khau-than",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:55:19.935Z"),
  "created": ISODate("2018-01-10T02:55:19.935Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55809b5cd7e8083b9dfb81"),
  "slug": "ha-noi-trong-danh-sach-bi-de-doa-boi-bien-doi-khi-hau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:55:23.979Z"),
  "created": ISODate("2018-01-10T02:55:23.979Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55809e5cd7e8083b9dfb82"),
  "slug": "bao-cao-tac-dong-thuy-dien-song-mekong-dang-don-gian-hoa-van-de",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:55:26.635Z"),
  "created": ISODate("2018-01-10T02:55:26.635Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580a15cd7e8da419dfb86"),
  "slug": "bo-tn-mt-tra-loi-vu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:55:29.877Z"),
  "created": ISODate("2018-01-10T02:55:29.877Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580a65cd7e8d5719dfb82"),
  "slug": "hoi-thao-2",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:55:34.980Z"),
  "created": ISODate("2018-01-10T02:55:34.980Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580b85cd7e8d5719dfb83"),
  "slug": "mot-ket-luan-nguy-hiem-ve-nhung-con-dap-tren-song-mekong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:55:52.333Z"),
  "created": ISODate("2018-01-10T02:55:52.333Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580bb5cd7e8083b9dfb83"),
  "slug": "nhiet-dien-than-van-de-trao-doi-ky-2",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:55:55.300Z"),
  "created": ISODate("2018-01-10T02:55:55.300Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580be5cd7e8083b9dfb84"),
  "slug": "nhiet-dien-chay-bang-than-tai-viet-nam-van-chiem-ty-le-lon-du-gay-o-nhiem",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:55:58.120Z"),
  "created": ISODate("2018-01-10T02:55:58.120Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580c05cd7e80b4a9dfb83"),
  "slug": "thuc-tap-sinhtinh-nguyen-vien-greenid-nhom-chinh-sach-mang-luoi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:56:00.329Z"),
  "created": ISODate("2018-01-10T02:56:00.329Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580c35cd7e84f6b9dfb84"),
  "slug": "buc-thiet-minh-bach-gia-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:56:03.298Z"),
  "created": ISODate("2018-01-10T02:56:03.298Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580c55cd7e88b319dfb82"),
  "slug": "nhiet-dien-than-van-de-trao-doi-ky-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:56:05.505Z"),
  "created": ISODate("2018-01-10T02:56:05.505Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580c75cd7e8596e9dfb83"),
  "slug": "gia-dien-se-huong-den-nguoi-ngheo",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:56:07.951Z"),
  "created": ISODate("2018-01-10T02:56:07.951Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580ca5cd7e810109dfb89"),
  "slug": "dien-va-moi-truong-mau-thuan-ve-tam-nhin",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:56:10.278Z"),
  "created": ISODate("2018-01-10T02:56:10.278Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5580cd5cd7e8da419dfb87"),
  "slug": "khong-khi-o-nhiem-tu-trung-quoc-tran-sang-viet-nam-vao-mua-dong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:56:13.471Z"),
  "created": ISODate("2018-01-10T02:56:13.471Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55810a5cd7e8da419dfb88"),
  "slug": "cac-nha-lanh-dao-the-gioi-keu-goi-ap-dat-thue-khi-thai-carbon",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:57:14.450Z"),
  "created": ISODate("2018-01-10T02:57:14.450Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55810f5cd7e816779dfb76"),
  "slug": "co-so-khoa-hoc-cua-viec-tinh-gia-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:57:19.125Z"),
  "created": ISODate("2018-01-10T02:57:19.125Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581135cd7e8083b9dfb85"),
  "slug": "lao-xay-td-don-sahong-hay-lang-nghe-tieng-noi-nguoi-dan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:57:23.384Z"),
  "created": ISODate("2018-01-10T02:57:23.384Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581165cd7e8d5719dfb84"),
  "slug": "tham-van-va-chia-se-y-kien-cua-nguoi-dan-dia-phuong-bi-anh-huong-boi-cac-dap-thuy-dien-tai-khu-vuc-song-me-cong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:57:26.785Z"),
  "created": ISODate("2018-01-10T02:57:26.785Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55811c5cd7e816779dfb77"),
  "slug": "oto-nang-luong-mat-troi-tu-che-cua-cau-hoc-sinh-nam-dinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:57:32.570Z"),
  "created": ISODate("2018-01-10T02:57:32.570Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55811f5cd7e8083b9dfb86"),
  "slug": "thuyen-chay-bang-nang-luong-mat-troi-cua-bon-lao-khung",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:57:35.424Z"),
  "created": ISODate("2018-01-10T02:57:35.424Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581225cd7e810109dfb8a"),
  "slug": "can-cong-khai-cach-tinh-gia-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:57:38.918Z"),
  "created": ISODate("2018-01-10T02:57:38.918Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581255cd7e8083b9dfb87"),
  "slug": "su-dung-giai-phap-nang-luong-ben-vung-huong-di-cua-xa-hai-chinh-sau-ngay-dat-chuan-quoc-gia-xay-dung-nong-thon-moi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:57:41.339Z"),
  "created": ISODate("2018-01-10T02:57:41.339Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581375cd7e80b4a9dfb84"),
  "slug": "khong-de-nguoi-ngheo-co-muc-thu-nhap-thap-tra-gia-dien-cao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:57:59.882Z"),
  "created": ISODate("2018-01-10T02:57:59.882Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55813c5cd7e8d5719dfb85"),
  "slug": "than-va-nhiet-dien-than-viet-nam-dang-di-nguoc-the-gioi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:58:04.294Z"),
  "created": ISODate("2018-01-10T02:58:04.294Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55813e5cd7e8083b9dfb88"),
  "slug": "nhiet-dien-than-cai-kho-bo-cai-khon",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:58:06.910Z"),
  "created": ISODate("2018-01-10T02:58:06.910Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581405cd7e84f6b9dfb85"),
  "slug": "khai-thac-than-va-su-danh-doi-voi-moi-truong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:58:08.851Z"),
  "created": ISODate("2018-01-10T02:58:08.851Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581435cd7e8083b9dfb89"),
  "slug": "trung-tam-phat-trien-sang-kien-cong-dong-va-moi-truong-ce",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:58:11.687Z"),
  "created": ISODate("2018-01-10T02:58:11.687Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581455cd7e8f93e9dfb81"),
  "slug": "nhiet-dien-than-va-sinh-mang-con-nguoi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:58:13.946Z"),
  "created": ISODate("2018-01-10T02:58:13.946Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581495cd7e8596e9dfb85"),
  "slug": "the-gioi-duoi-long-dat-quang-ninh-bi-tac-dong-manh-vi-lu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:58:17.803Z"),
  "created": ISODate("2018-01-10T02:58:17.803Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581955cd7e8d5719dfb86"),
  "slug": "to-chuc-phat-trien-ha-lan-snv",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:59:33.395Z"),
  "created": ISODate("2018-01-10T02:59:33.395Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581995cd7e8f93e9dfb82"),
  "slug": "lao-quyet-thuy-dien-don-sahong-viet-nam-khong-bo-cuoc",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:59:37.823Z"),
  "created": ISODate("2018-01-10T02:59:37.823Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55819c5cd7e8083b9dfb8a"),
  "slug": "giai-phap-nuoc-sach-nang-luong-xanh-cho-cac-cong-dong-nong-thon-viet-nam-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:59:40.339Z"),
  "created": ISODate("2018-01-10T02:59:40.339Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581a15cd7e8da419dfb89"),
  "slug": "huynh-kim-duyen-tam-guong-sang-cua-phu-nu-dong-bang-song-cuu-long",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:59:45.964Z"),
  "created": ISODate("2018-01-10T02:59:45.964Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581a55cd7e810109dfb8b"),
  "slug": "su-kien-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:59:49.604Z"),
  "created": ISODate("2018-01-10T02:59:49.605Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581a85cd7e8083b9dfb8b"),
  "slug": "xay-dung-chien-luoc-ve-phat-trien-nang-luong-tai-tao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T02:59:52.206Z"),
  "created": ISODate("2018-01-10T02:59:52.206Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581bd5cd7e8596e9dfb86"),
  "slug": "bo-tn-mt-yeu-cau-3-nha-may-thuy-dien-xa-nuoc-ve-ha-du-song-vu-gia",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:00:13.220Z"),
  "created": ISODate("2018-01-10T03:00:13.220Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581c25cd7e80b4a9dfb85"),
  "slug": "new-zealand-loai-bo-dien-than-dat-muc-tieu-dat-90-nang-luong-tai-tao-nam-2025",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:00:18.354Z"),
  "created": ISODate("2018-01-10T03:00:18.354Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581c55cd7e8f93e9dfb83"),
  "slug": "tuyen-tinh-nguyen-vienthuc-tap-sinh-nhom-nghien-cuu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:00:21.911Z"),
  "created": ISODate("2018-01-10T03:00:21.911Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581c75cd7e8596e9dfb87"),
  "slug": "tang-toc-dau-tu-dam-bao-dien-cho-phat-trien-kinh-te",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:00:23.824Z"),
  "created": ISODate("2018-01-10T03:00:23.824Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581ca5cd7e8d5719dfb87"),
  "slug": "loi-thoat-nao-cho-dien-than",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:00:26.802Z"),
  "created": ISODate("2018-01-10T03:00:26.803Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581cc5cd7e8083b9dfb8c"),
  "slug": "than-cho-cac-nha-may-dien-cua-pvn-gap-nhieu-kho-khan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:00:28.462Z"),
  "created": ISODate("2018-01-10T03:00:28.462Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5581ce5cd7e8f93e9dfb84"),
  "slug": "viet-nam-se-phai-nhap-khau-than-de-phat-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:00:30.856Z"),
  "created": ISODate("2018-01-10T03:00:30.856Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582285cd7e816779dfb78"),
  "slug": "toa-dam-ve-chu-de-nang-luong-va-bien-doi-khi-hau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:00.327Z"),
  "created": ISODate("2018-01-10T03:02:00.327Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55822c5cd7e84f6b9dfb86"),
  "slug": "bien-khoi-bui-o-nhiem-thanh-do-trang-suc",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:04.336Z"),
  "created": ISODate("2018-01-10T03:02:04.336Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55822e5cd7e8d5719dfb88"),
  "slug": "anh-huong-cua-cac-hien-tuong-thoi-tiet-cuc-doan-ngap-lut-va-chat-thai-nguy-hai-chay-tran-tu-cac-mo-than-va-cac-nha-may-nhiet-dien-quanh-vinh-ha-long",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:06.356Z"),
  "created": ISODate("2018-01-10T03:02:06.356Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582305cd7e816779dfb79"),
  "slug": "xoa-bo-doc-quyen-dien-xang-dau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:08.958Z"),
  "created": ISODate("2018-01-10T03:02:08.958Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582355cd7e84f6b9dfb87"),
  "slug": "6-cach-tiet-kiem-dien-trong-nha-bep",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:13.628Z"),
  "created": ISODate("2018-01-10T03:02:13.628Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582385cd7e8596e9dfb88"),
  "slug": "tai-che-tai-nguyen-rac-thanh-nguyen-lieu-san-xuat",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:16.289Z"),
  "created": ISODate("2018-01-10T03:02:16.289Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55823a5cd7e8d5719dfb89"),
  "slug": "gach-tu-rac-thai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:18.447Z"),
  "created": ISODate("2018-01-10T03:02:18.447Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55824d5cd7e8da419dfb8a"),
  "slug": "su-bung-no-ve-su-dung-nang-luong-gio-va-mat-troi-tren-the-gioi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:37.802Z"),
  "created": ISODate("2018-01-10T03:02:37.802Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55824f5cd7e8596e9dfb89"),
  "slug": "binh-thuan-gui-cong-van-hoa-toc-ve-nhiet-dien-vinh-tan-2",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:39.783Z"),
  "created": ISODate("2018-01-10T03:02:39.783Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582525cd7e810109dfb8c"),
  "slug": "tuye-n-ti-nh-nguye-n-vien-cho-nho-m-chi-nh-sa-ch",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:42.120Z"),
  "created": ISODate("2018-01-10T03:02:42.120Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582545cd7e8f93e9dfb85"),
  "slug": "dien-dan-khoa-hoc-ve-bien-doi-khi-hau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:44.614Z"),
  "created": ISODate("2018-01-10T03:02:44.614Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582565cd7e80b4a9dfb86"),
  "slug": "khoi-dong-du-an-dien-mat-troi-tai-ninh-thuan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:46.965Z"),
  "created": ISODate("2018-01-10T03:02:46.965Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55825a5cd7e8083b9dfb8d"),
  "slug": "dap-thuy-dien-co-the-lam-tuyet-chung-70-so-dong-vat-hoang-da",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:02:50.153Z"),
  "created": ISODate("2018-01-10T03:02:50.153Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582d35cd7e810109dfb8d"),
  "slug": "huong-toi-tang-truong-xanh-thach-thuc-va-giai-phap-cho-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:04:51.622Z"),
  "created": ISODate("2018-01-10T03:04:51.622Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582eb5cd7e810109dfb8e"),
  "slug": "can-co-mot-tieng-noi-chung-cho-thuy-dien-mien-trung",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:15.795Z"),
  "created": ISODate("2018-01-10T03:05:15.795Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582ef5cd7e810109dfb8f"),
  "slug": "menh-lenh-nang-luong-bat-buoc-tong-ket-va-loi-cam-on",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:19.960Z"),
  "created": ISODate("2018-01-10T03:05:19.960Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582f25cd7e816779dfb7a"),
  "slug": "sang-kien-hieu-qua-nang-luong-cua-sinh-vien-tai-entech-hanoi-2015",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:22.533Z"),
  "created": ISODate("2018-01-10T03:05:22.533Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582f55cd7e80b4a9dfb87"),
  "slug": "cau-hoc-tro-biet-tao-dien-nang-tu-buoc-chan-nguoi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:25.578Z"),
  "created": ISODate("2018-01-10T03:05:25.578Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582f75cd7e810109dfb90"),
  "slug": "phat-trien-kinh-te-xanh-la-buoc-di-tat-yeu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:27.995Z"),
  "created": ISODate("2018-01-10T03:05:27.995Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582fb5cd7e8083b9dfb8e"),
  "slug": "phat-trien-kinh-te-chua-quan-tam-dung-muc-den-bao-ve-moi-truong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:31.820Z"),
  "created": ISODate("2018-01-10T03:05:31.820Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5582fe5cd7e8f93e9dfb86"),
  "slug": "bien-rac-thai-thanh-nang-luong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:34.530Z"),
  "created": ISODate("2018-01-10T03:05:34.530Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5583025cd7e80b4a9dfb88"),
  "slug": "tru-luong-than-bun-rung-u-minh-ha-gia-tri-hang-nghin-ty-dong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:38.988Z"),
  "created": ISODate("2018-01-10T03:05:38.988Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5583045cd7e88b319dfb83"),
  "slug": "vai-tro-cong-dong-trong-viec-ung-pho-voi-bien-doi-khi-hau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:40.269Z"),
  "created": ISODate("2018-01-10T03:05:40.269Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5583065cd7e8596e9dfb8a"),
  "slug": "cau-chuyen-nang-luong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:42.209Z"),
  "created": ISODate("2018-01-10T03:05:42.209Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55830a5cd7e8f93e9dfb87"),
  "slug": "thuy-dien-ialy-duoc-bo-sung-vao-quy-hoach-dien-vii",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:46.325Z"),
  "created": ISODate("2018-01-10T03:05:46.325Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55830e5cd7e8596e9dfb8b"),
  "slug": "nhung-con-so-canh-bao-ve-moi-truong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:50.288Z"),
  "created": ISODate("2018-01-10T03:05:50.288Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5583155cd7e816779dfb7b"),
  "slug": "ngoi-lang-thanh-dia-cua-nang-luong-tai-sinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:05:57.179Z"),
  "created": ISODate("2018-01-10T03:05:57.179Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5583185cd7e80b4a9dfb89"),
  "slug": "du-an-ho-tro-lien-minh-nang-luong-viet-nam-vsea-trong-van-dong-chinh-sach-cho-quy-hoach-nang-luong-thay-the-cua-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:06:00.726Z"),
  "created": ISODate("2018-01-10T03:06:00.726Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5584515cd7e8083b9dfb8f"),
  "slug": "xa-nang-luong-sach-tung-duoc-nhieu-don-vi-lanh-dao-den-xem",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:11:13.276Z"),
  "created": ISODate("2018-01-10T03:11:13.276Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55845e5cd7e816779dfb7c"),
  "slug": "thuy-dien-lon",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:11:26.730Z"),
  "created": ISODate("2018-01-10T03:11:26.730Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5584635cd7e810109dfb91"),
  "slug": "ngos-giup-phat-trien-nang-luong-tai-tao-bat-dau-tu-bep-lua-vung-que",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:11:31.566Z"),
  "created": ISODate("2018-01-10T03:11:31.566Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5584685cd7e8f93e9dfb88"),
  "slug": "ban-cach-quan-ly-luu-vuc-song-mekong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:11:36.890Z"),
  "created": ISODate("2018-01-10T03:11:36.890Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55846c5cd7e816779dfb7d"),
  "slug": "dau-tu-cho-dien-tai-tao-vuot-thach-thuc-bang-the-che-hoa",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:11:40.451Z"),
  "created": ISODate("2018-01-10T03:11:40.451Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5584715cd7e810109dfb92"),
  "slug": "se-cam-han-che-mot-so-nganh-nghe-tren-luu-vuc-song",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:11:45.330Z"),
  "created": ISODate("2018-01-10T03:11:45.330Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5584745cd7e8f93e9dfb89"),
  "slug": "thuy-dien-hiem-hoa-sinh-thai-doi-voi-song-me-cong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:11:48.905Z"),
  "created": ISODate("2018-01-10T03:11:48.905Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5584885cd7e80b4a9dfb8a"),
  "slug": "thong-qua",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:12:08.641Z"),
  "created": ISODate("2018-01-10T03:12:08.641Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55848d5cd7e84f6b9dfb88"),
  "slug": "se-cam-san-xuat-su-dung-bong-den-soi-dot-tren-60w",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:12:13.694Z"),
  "created": ISODate("2018-01-10T03:12:13.695Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5584915cd7e8083b9dfb90"),
  "slug": "imf-wb-hoi-thuc-cac-nuoc-danh-thue-khi-thai-carbon",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:12:17.643Z"),
  "created": ISODate("2018-01-10T03:12:17.643Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5584955cd7e8083b9dfb91"),
  "slug": "tuyen-bo-chung-cua-hoa-ky-va-ha-lan-ve-bien-doi-khi-va-ho-tro-tai-chinh-cho-qua-trinh-chuyen-doi-sang-dau-tu-carbon-thap-o-nuoc-ngoai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:12:21.504Z"),
  "created": ISODate("2018-01-10T03:12:21.504Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55849b5cd7e816779dfb7e"),
  "slug": "dap-lon-tieu-ton-qua-nhieu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:12:27.183Z"),
  "created": ISODate("2018-01-10T03:12:27.183Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55849f5cd7e8596e9dfb8c"),
  "slug": "tiet-kiem-nang-luong-yeu-to-song-con",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:12:31.183Z"),
  "created": ISODate("2018-01-10T03:12:31.183Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5584a25cd7e8083b9dfb92"),
  "slug": "viet-nam-dong-tinh-voi-cac-quoc-gia-thanh-vien-uy-hoi-song-me-cong-quoc-te-yeu-cau-du-an-thuy-dien-don-sa-hong-can-thuc-hien-theo-quy-trinh-tham-van-truoc",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:12:34.989Z"),
  "created": ISODate("2018-01-10T03:12:34.989Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5584a65cd7e816779dfb7f"),
  "slug": "co-quan-thuong-mai-va-phat-trien-my-ho-tro-de-thuc-day-phat-trien-dien-gio-tai-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:12:38.577Z"),
  "created": ISODate("2018-01-10T03:12:38.577Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55852c5cd7e84f6b9dfb89"),
  "slug": "tang-truong-xanh-co-hoi-va-thach-thuc-cho-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:14:52.667Z"),
  "created": ISODate("2018-01-10T03:14:52.667Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5585345cd7e8f93e9dfb8a"),
  "slug": "thuy-dien-len-loi-vao-ca-vung-dat-nhay-cam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:15:00.655Z"),
  "created": ISODate("2018-01-10T03:15:00.655Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5585b05cd7e8d5719dfb8a"),
  "slug": "long-ghep-von-tu-nhien-vao-chinh-sach-quoc-gia-ve-moi-truong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:17:04.598Z"),
  "created": ISODate("2018-01-10T03:17:04.598Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5585b95cd7e80b4a9dfb8b"),
  "slug": "long-ghep-von-tu-nhien-vao-chinh-sach-quoc-gia-ve-moi-truong-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:17:13.491Z"),
  "created": ISODate("2018-01-10T03:17:13.491Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5585bd5cd7e84f6b9dfb8a"),
  "slug": "nga-cap-1-ty-usd-xay-nha-may-dien-hat-nhan-o-vn",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:17:17.900Z"),
  "created": ISODate("2018-01-10T03:17:17.900Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5585c15cd7e8596e9dfb8d"),
  "slug": "da-dang-hoa-nguon-cung-nang-luong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:17:21.634Z"),
  "created": ISODate("2018-01-10T03:17:21.634Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5585c55cd7e8f93e9dfb8b"),
  "slug": "toa-dam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:17:25.724Z"),
  "created": ISODate("2018-01-10T03:17:25.724Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5585ca5cd7e8e17e9dfb74"),
  "slug": "viet-nam-khang-dinh-quan-diem-su-dung-nang-luong-tai-hoi-nghi-rio20",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:17:30.117Z"),
  "created": ISODate("2018-01-10T03:17:30.117Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5585ce5cd7e8d5719dfb8b"),
  "slug": "lien-minh-nang-luong-tai-tao-quoc-te-tai-cop18-tai-doha-neu-khong-co-thuy-dien-cac-muc-tieu-ve-khi-hau-se-khong-duoc-dap-ung-thu-ba-ngay-422013",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:17:34.777Z"),
  "created": ISODate("2018-01-10T03:17:34.777Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5585d15cd7e84f6b9dfb8b"),
  "slug": "can-mot-su-ton-vinh-danh-cho-cac-to-chuc-xa-hoi-dan-su",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:17:37.170Z"),
  "created": ISODate("2018-01-10T03:17:37.170Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5585da5cd7e80b4a9dfb8c"),
  "slug": "ket-qua-so-bo-cua-hoat-dong-nghien-cuu-o-thuy-dien-song-tranh-2",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:17:46.820Z"),
  "created": ISODate("2018-01-10T03:17:46.820Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5586085cd7e8596e9dfb8e"),
  "slug": "quy-hoach-thuy-dien-mien-trung-quan-ly-nguon-nuoc-yeu-kem",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:18:32.577Z"),
  "created": ISODate("2018-01-10T03:18:32.577Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55860c5cd7e8d5719dfb8c"),
  "slug": "can-som-thuc-tinh-nguon-nang-luong-xanh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:18:36.957Z"),
  "created": ISODate("2018-01-10T03:18:36.957Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5586fd5cd7e8d5719dfb8d"),
  "slug": "tiet-kiem-nang-luong-ung-pho-bien-doi-khi-hau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:22:37.840Z"),
  "created": ISODate("2018-01-10T03:22:37.840Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587025cd7e8596e9dfb8f"),
  "slug": "hoi-thao-phat-trien-phat-thai-thap-o-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:22:42.164Z"),
  "created": ISODate("2018-01-10T03:22:42.164Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587065cd7e84f6b9dfb8c"),
  "slug": "trien-lam-mo-hinh-nang-luong-ben-vung-cap-cong-dong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:22:46.348Z"),
  "created": ISODate("2018-01-10T03:22:46.348Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55870c5cd7e8d5719dfb8e"),
  "slug": "nang-luong-thong-minh-mo-vang-con-bo-ngo",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:22:52.137Z"),
  "created": ISODate("2018-01-10T03:22:52.137Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55870f5cd7e816779dfb80"),
  "slug": "khi-nao-su-dung-nang-luong-thich-ung-voi-bien-doi-khi-hau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:22:55.643Z"),
  "created": ISODate("2018-01-10T03:22:55.643Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587145cd7e8e17e9dfb75"),
  "slug": "thuc-day-phat-trien-nang-luong-ben-vung-o-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:23:00.246Z"),
  "created": ISODate("2018-01-10T03:23:00.246Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587185cd7e8f93e9dfb8c"),
  "slug": "cong-dong-chung-tay-cai-thien-moi-truong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:23:04.268Z"),
  "created": ISODate("2018-01-10T03:23:04.268Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55871e5cd7e8d5719dfb8f"),
  "slug": "giai-bai-toan-nang-luong-tu-dia-phuong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:23:10.314Z"),
  "created": ISODate("2018-01-10T03:23:10.314Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587285cd7e8da419dfb8b"),
  "slug": "adb-hoi-thuc-chau-a-tang-su-dung-nang-luong-sach",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:23:20.206Z"),
  "created": ISODate("2018-01-10T03:23:20.206Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55872a5cd7e8e17e9dfb76"),
  "slug": "dai-su-quan-hoa-ky-nang-cao-nang-luc-cho-can-bo-lam-viec-tai-khu-vuc-ha-luu-song-me-kong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:23:22.216Z"),
  "created": ISODate("2018-01-10T03:23:22.216Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55872c5cd7e8f93e9dfb8d"),
  "slug": "su-dung-nang-luong-hieu-qua-va-ung-dung-nang-luong-tai-tao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:23:24.897Z"),
  "created": ISODate("2018-01-10T03:23:24.897Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55872e5cd7e8d5719dfb90"),
  "slug": "tang-cuong-nang-luc-de-giai-quyet-nhung-thach-thuc-ve-moi-truong-va-thuc-day-tang-truong-la-muc-tieu-quoc-gia",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:23:26.291Z"),
  "created": ISODate("2018-01-10T03:23:26.291Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55873b5cd7e8083b9dfb93"),
  "slug": "xay-nha-may-nhiet-dien-duyen-hai-3",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:23:39.316Z"),
  "created": ISODate("2018-01-10T03:23:39.316Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587435cd7e8596e9dfb90"),
  "slug": "nam-2012-nam-quoc-te-ve-nang-luong-ben-vung-cho-tat-ca-chung-ta",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:23:47.111Z"),
  "created": ISODate("2018-01-10T03:23:47.111Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587475cd7e8f93e9dfb8e"),
  "slug": "ung-dung-cntt-trong-tiet-kiem-nang-luong-va-quan-ly-moi-truong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:23:51.410Z"),
  "created": ISODate("2018-01-10T03:23:51.410Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55878b5cd7e80b4a9dfb8d"),
  "slug": "dien-lai-tang-gia-chuyen-gia-keu-vo-ly",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:24:59.589Z"),
  "created": ISODate("2018-01-10T03:24:59.589Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55878d5cd7e84f6b9dfb8d"),
  "slug": "chuyen-gia-phan-tich-va-xu-ly-so-lieu-du-an-rosa",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:01.973Z"),
  "created": ISODate("2018-01-10T03:25:01.973Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587935cd7e8e17e9dfb77"),
  "slug": "dien-dan-khu-vuc",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:07.272Z"),
  "created": ISODate("2018-01-10T03:25:07.272Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587965cd7e8083b9dfb94"),
  "slug": "yeu-cau-thoi-gian-tham-van-voi-du-an-thuy-dien-don-sahong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:10.657Z"),
  "created": ISODate("2018-01-10T03:25:10.657Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55879a5cd7e810109dfb93"),
  "slug": "ket-qua-thuc-hien-phuong-phap-lap-ke-hoach-nang-luong-dia-phuong-lep-tai-nam-dinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:14.610Z"),
  "created": ISODate("2018-01-10T03:25:14.610Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55879d5cd7e8596e9dfb91"),
  "slug": "lao-xay-thuy-dien-don-shahong-phai-len-tieng",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:17.759Z"),
  "created": ISODate("2018-01-10T03:25:17.759Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587a15cd7e8e17e9dfb78"),
  "slug": "an-do-tang-ty-le-dau-tu-cho-nang-luong-sach-dat-13-tuong-ung-voi-79-ty-do-trong-nam-2014",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:21.533Z"),
  "created": ISODate("2018-01-10T03:25:21.533Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587b65cd7e8e17e9dfb79"),
  "slug": "ket-qua-tham-van-cong-dong-ve-du-an-thuy-dien-don-sahong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:42.610Z"),
  "created": ISODate("2018-01-10T03:25:42.610Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587b85cd7e8596e9dfb92"),
  "slug": "hoi-thao-huong-toi-phat-trien-nang-luong-ben-vung-tai-dong-bang-song-cuu-long",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:44.485Z"),
  "created": ISODate("2018-01-10T03:25:44.485Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587ba5cd7e816779dfb81"),
  "slug": "trung-tam-song-va-hoc-tap-vi-moi-truong-va-cong-dong-live-learn",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:46.421Z"),
  "created": ISODate("2018-01-10T03:25:46.421Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587bc5cd7e8d5719dfb91"),
  "slug": "quy-quoc-te-bao-ve-thien-nhien-wwf",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:48.959Z"),
  "created": ISODate("2018-01-10T03:25:48.959Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587be5cd7e8083b9dfb95"),
  "slug": "trung-tam-tu-van-phat-trien-ben-vung-tai-nguyen-nuoc-va-thich-nghi-voi-bien-doi-khi-hau-cewarec",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:50.445Z"),
  "created": ISODate("2018-01-10T03:25:50.445Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587c15cd7e84f6b9dfb8e"),
  "slug": "hoi-thao-tham-van-cac-tinh-dong-bang-song-cuu-long-cho-bao-cao-nen-nghien-cuu-tac-dong-cua-cac-cong-trinh-thuy-dien-tren-dong-chinh-song-me-cong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:53.550Z"),
  "created": ISODate("2018-01-10T03:25:53.550Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587c35cd7e8f93e9dfb8f"),
  "slug": "cac-to-chuc-chinh-tri-xa-hoi-khoa-hoc-va-ngos-viet-nam-len-tieng-ve-du-an-thuy-dien-don-sahong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:55.588Z"),
  "created": ISODate("2018-01-10T03:25:55.588Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5587c65cd7e8d5719dfb92"),
  "slug": "le-trao-giai-bao-chi-vi-cong-dong-lan-thu-hai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:25:58.247Z"),
  "created": ISODate("2018-01-10T03:25:58.247Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588065cd7e816779dfb82"),
  "slug": "dung-dem-tuong-lai-ra-danh-cuoc",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:02.151Z"),
  "created": ISODate("2018-01-10T03:27:02.151Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588155cd7e80b4a9dfb8e"),
  "slug": "vua-lua-dbscl-doi-mat-nguy-co-kep-bien-doi-khi-hau-va-thuy-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:17.155Z"),
  "created": ISODate("2018-01-10T03:27:17.155Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588185cd7e8596e9dfb93"),
  "slug": "qua-bom-lo-lung-tren-dong-bang-song-cuu-long",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:20.480Z"),
  "created": ISODate("2018-01-10T03:27:20.480Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55881f5cd7e8d5719dfb93"),
  "slug": "lao-muon-xay-thuy-dien-don-sahong-phia-my-canh-bao-thang",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:27.420Z"),
  "created": ISODate("2018-01-10T03:27:27.420Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588215cd7e810109dfb94"),
  "slug": "nguoi-nong-dan-viet-nam-len-tieng-phan-doi-ke-hoach-xay-dung-dap-cua-lao-tren-song-me-cong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:29.652Z"),
  "created": ISODate("2018-01-10T03:27:29.652Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588255cd7e8f93e9dfb90"),
  "slug": "nguoi-dan-dong-bang-song-cuu-long-duoc-tham-van-truc-tiep-ve-du-an-thuy-dien-donsahong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:33.976Z"),
  "created": ISODate("2018-01-10T03:27:33.976Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588345cd7e80b4a9dfb8f"),
  "slug": "tham-van-truc-tuyen-nguoi-dan-ve-thuy-dien-don-sahong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:48.620Z"),
  "created": ISODate("2018-01-10T03:27:48.620Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588375cd7e8596e9dfb94"),
  "slug": "don-chi-mang-vao-sinh-ke-nguoi-dan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:51.255Z"),
  "created": ISODate("2018-01-10T03:27:51.255Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588395cd7e8e17e9dfb7a"),
  "slug": "bien-doi-khi-hau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:53.345Z"),
  "created": ISODate("2018-01-10T03:27:53.345Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55883b5cd7e8083b9dfb96"),
  "slug": "sinh-vien-va-tiet-kiem-nang-luong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:55.729Z"),
  "created": ISODate("2018-01-10T03:27:55.729Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55883d5cd7e8da419dfb8c"),
  "slug": "bai-hoc-ve-nang-luong-mat-troi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:27:57.864Z"),
  "created": ISODate("2018-01-10T03:27:57.864Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588405cd7e8f93e9dfb91"),
  "slug": "dung-bang-cap-3-gia-vo-dap-thuy-dien-that",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:28:00.772Z"),
  "created": ISODate("2018-01-10T03:28:00.772Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588435cd7e8e17e9dfb7b"),
  "slug": "cu-dan-thai-lan-quyet-chong-viec-xay-dap-xayaburi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:28:03.747Z"),
  "created": ISODate("2018-01-10T03:28:03.747Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588775cd7e8083b9dfb97"),
  "slug": "nguon-nang-luong-nao-cho-dong-bang-song-cuu-long",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:28:55.496Z"),
  "created": ISODate("2018-01-10T03:28:55.496Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588815cd7e816779dfb83"),
  "slug": "trien-lam-cac-giai-phap-nang-luong-ben-vung-cap-cong-dong-tai-xa-hai-chinh-huyen-hai-hau-tinh-nam-dinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:05.233Z"),
  "created": ISODate("2018-01-10T03:29:05.233Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588845cd7e8f93e9dfb92"),
  "slug": "hoi-thao-huong-toi-phat-trien-nang-luong-ben-vung-tai-dong-bang-song-cuu-long-ngay-14102014",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:08.828Z"),
  "created": ISODate("2018-01-10T03:29:08.828Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588875cd7e8083b9dfb98"),
  "slug": "hoi-thao-tham-van-cac-to-chuc-xa-hoi-ve-ke-hoach-hanh-dong-tang-truong-xanh-cua-tinh-hoa-binh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:11.846Z"),
  "created": ISODate("2018-01-10T03:29:11.846Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55888b5cd7e8d5719dfb94"),
  "slug": "nam-cuong-xa-ve-dich-som-trong-xay-dung-nong-thon-moi-o-tinh-thai-binh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:15.232Z"),
  "created": ISODate("2018-01-10T03:29:15.232Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55888d5cd7e80b4a9dfb90"),
  "slug": "quy-hoach-dien-vii-can-mot-giai-phap-dong-bo",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:17.809Z"),
  "created": ISODate("2018-01-10T03:29:17.809Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588905cd7e8e17e9dfb7c"),
  "slug": "tim-loi-giai-cho-phat-trien-nang-luong-ben-vung-o-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:20.605Z"),
  "created": ISODate("2018-01-10T03:29:20.605Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588995cd7e84f6b9dfb8f"),
  "slug": "tuyen-can-bo-du-an-nhom-truyen-thong-van-dong-chinh-sach",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:29.186Z"),
  "created": ISODate("2018-01-10T03:29:29.186Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55889a5cd7e8e17e9dfb7d"),
  "slug": "cac-du-an-thuy-dien-de-doa-nguon-song-va-he-sinh-thai-dbscl",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:30.930Z"),
  "created": ISODate("2018-01-10T03:29:30.930Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588b15cd7e8083b9dfb99"),
  "slug": "phat-trien-mo-hinh-nang-luong-ben-vung-tai-dia-phuong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:53.980Z"),
  "created": ISODate("2018-01-10T03:29:53.980Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588b45cd7e8d5719dfb95"),
  "slug": "thuy-dien-de-doa-hang-chuc-trieu-dan-o-luu-vuc-song-me-kong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:56.996Z"),
  "created": ISODate("2018-01-10T03:29:56.996Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588b65cd7e816779dfb84"),
  "slug": "hoi-thao-ve-chuan-bi-tham-van-du-an-thuy-dien-don-sahong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:29:58.919Z"),
  "created": ISODate("2018-01-10T03:29:58.919Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588b95cd7e8e17e9dfb7e"),
  "slug": "chien-dich-truyen-thong-nang-cao-nhan-thuc-ve-cac-giai-phap-nang-luong-ben-vung-quan-ly-va-xu-ly-rac-thai-tai-xa-hai-chinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:30:01.792Z"),
  "created": ISODate("2018-01-10T03:30:01.792Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588bc5cd7e8083b9dfb9a"),
  "slug": "du-an-gop-phan-vao-no-luc-tim-cac-giai-phap-nang-luong-tien-toi-thay-the-nhiet-dien-than-tai-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:30:04.800Z"),
  "created": ISODate("2018-01-10T03:30:04.800Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588c05cd7e80b4a9dfb91"),
  "slug": "chia-se-kinh-nghiem-lap-ke-hoach-nang-luong-dia-phuong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:30:08.177Z"),
  "created": ISODate("2018-01-10T03:30:08.177Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588f25cd7e810109dfb95"),
  "slug": "nam-bo-can-gap-kich-ban-chung-song-voi-bao-lu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:30:58.414Z"),
  "created": ISODate("2018-01-10T03:30:58.414Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5588f85cd7e8083b9dfb9b"),
  "slug": "lao-chiu-tham-van-truoc-don-sahong-thuc-hu-va-co-hoi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:31:04.538Z"),
  "created": ISODate("2018-01-10T03:31:04.538Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589085cd7e8f93e9dfb93"),
  "slug": "lao-dang-vi-pham-nghiem-trong-hiep-dinh-mekong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:31:20.626Z"),
  "created": ISODate("2018-01-10T03:31:20.626Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55893c5cd7e8f93e9dfb94"),
  "slug": "nan-o-nhiem-nguon-nuoc-mat-o-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:12.580Z"),
  "created": ISODate("2018-01-10T03:32:12.580Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55893f5cd7e8596e9dfb95"),
  "slug": "cong-ty-mua-dien-tu-dap-xayaburi-bi-kien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:15.635Z"),
  "created": ISODate("2018-01-10T03:32:15.635Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589415cd7e80b4a9dfb92"),
  "slug": "lao-dong-y-thuc-hien-tham-van-cho-dap-thuy-dien-don-sahong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:17.968Z"),
  "created": ISODate("2018-01-10T03:32:17.968Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589445cd7e8083b9dfb9c"),
  "slug": "viet-nam-tro-gia-nang-luong-mang-lai-nhieu-loi-ich-cho-nguoi-giau-hon-nguoi-ngheo",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:20.461Z"),
  "created": ISODate("2018-01-10T03:32:20.461Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589465cd7e8596e9dfb96"),
  "slug": "dap-thuy-dien-va-so-phan-song-mekong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:22.659Z"),
  "created": ISODate("2018-01-10T03:32:22.659Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589495cd7e8d5719dfb96"),
  "slug": "lao-van-tiep-tuc-xay-dung-thuy-dien-don-sahong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:25.470Z"),
  "created": ISODate("2018-01-10T03:32:25.470Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55894e5cd7e8da419dfb8d"),
  "slug": "tap-huan-cac-giai-phap-nang-luong-ben-vung-cap-cong-dong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:30.638Z"),
  "created": ISODate("2018-01-10T03:32:30.638Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589525cd7e8f93e9dfb95"),
  "slug": "toa-dam-duc-rut-kinh-nghiem-cho-phat-trien-xanh-tai-nong-thon-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:34.428Z"),
  "created": ISODate("2018-01-10T03:32:34.429Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589585cd7e8596e9dfb97"),
  "slug": "tap-huan-phuong-phap-quy-hoach-nang-luong-dia-phuong-lep-va-cac-giai-phap-nang-luong-ben-vung-cap-cong-dong-tai-ca-mau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:40.129Z"),
  "created": ISODate("2018-01-10T03:32:40.129Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55895f5cd7e8e17e9dfb7f"),
  "slug": "cong-trinh-dien-gio-lon-nhat-the-gioi-duoc-khanh-thanh-tai-cua-song-thames",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:47.165Z"),
  "created": ISODate("2018-01-10T03:32:47.165Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a55895f5cd7e84f6b9dfb90"),
  "slug": "tuyen-dien-gia-tap-huan-chinh-sach-phat-trien-nang-luong-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:32:47.456Z"),
  "created": ISODate("2018-01-10T03:32:47.456Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589a15cd7e8e17e9dfb80"),
  "slug": "tuyen-chuyen-gia-nghien-cuu-du-an-gsi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:33:53.202Z"),
  "created": ISODate("2018-01-10T03:33:53.202Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589a55cd7e8da419dfb8e"),
  "slug": "viet-nam-my-ky-hiep-dinh-su-dung-nang-luong-hat-nhan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:33:57.551Z"),
  "created": ISODate("2018-01-10T03:33:57.551Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589a95cd7e80b4a9dfb93"),
  "slug": "khoi-den-phun-ra-tu-nha-may-nhiet-dien-uong-bi-toa-kin-bau-troi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:34:01.327Z"),
  "created": ISODate("2018-01-10T03:34:01.327Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589b35cd7e8596e9dfb98"),
  "slug": "gia-ban-dien-gio-o-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:34:11.494Z"),
  "created": ISODate("2018-01-10T03:34:11.494Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589ba5cd7e810109dfb96"),
  "slug": "da-den-luc-thua-nhan-xa-hoi-dan-su",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:34:18.584Z"),
  "created": ISODate("2018-01-10T03:34:18.584Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589be5cd7e8d5719dfb97"),
  "slug": "tuyen-chuyen-gia-nghien-cuu-2",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:34:22.186Z"),
  "created": ISODate("2018-01-10T03:34:22.186Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589c55cd7e8da419dfb8f"),
  "slug": "du-an-chien-luoc-cai-cach-tro-cap-nhien-lieu-hoa-thach",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:34:29.118Z"),
  "created": ISODate("2018-01-10T03:34:29.118Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589d65cd7e810109dfb97"),
  "slug": "tam-nhin-chien-luoc-cho-su-phat-trien-cua-nganh-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:34:46.952Z"),
  "created": ISODate("2018-01-10T03:34:46.952Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589d95cd7e8e17e9dfb81"),
  "slug": "tuyen-chuyen-gia-xu-ly-so-lieu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:34:49.570Z"),
  "created": ISODate("2018-01-10T03:34:49.570Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589dc5cd7e816779dfb85"),
  "slug": "tuyen-chuyen-gia-nghien-cuu-3",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:34:52.850Z"),
  "created": ISODate("2018-01-10T03:34:52.850Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589e05cd7e810109dfb98"),
  "slug": "tuyen-chuyen-gia-gop-y-va-hieu-chinh-tai-lieu-truyen-thong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:34:56.475Z"),
  "created": ISODate("2018-01-10T03:34:56.475Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589e25cd7e8e17e9dfb82"),
  "slug": "kinh-te-khi-hau-xa-va-gan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:34:58.977Z"),
  "created": ISODate("2018-01-10T03:34:58.977Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589e55cd7e8b70a9dfb74"),
  "slug": "tuyen-tro-ly-nghien-cuu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:35:01.255Z"),
  "created": ISODate("2018-01-10T03:35:01.255Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5589e75cd7e8da419dfb90"),
  "slug": "tuyen-chuyen-gia-tap-huan-cong-nghe-va-cach-tinh-gia-thanh-dien-than",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:35:03.411Z"),
  "created": ISODate("2018-01-10T03:35:03.411Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a265cd7e810109dfb99"),
  "slug": "tuyen-chuyen-gia-bien-tap-va-thiet-ke-tai-lieu-truyen-thong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:36:06.723Z"),
  "created": ISODate("2018-01-10T03:36:06.723Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a2a5cd7e84f6b9dfb91"),
  "slug": "tuyen-chuyen-gia-tap-huan-tai-chinh-nang-luong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:36:10.289Z"),
  "created": ISODate("2018-01-10T03:36:10.289Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a2f5cd7e816779dfb86"),
  "slug": "phan-ung-tam-thoi-cua-trai-dat-voi-khi-hau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:36:15.843Z"),
  "created": ISODate("2018-01-10T03:36:15.843Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a325cd7e8f93e9dfb96"),
  "slug": "viet-nam-dat-phat-trien-nang-luong-tai-tao-len-uu-tien-hang-dau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:36:18.909Z"),
  "created": ISODate("2018-01-10T03:36:18.909Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a365cd7e8b70a9dfb75"),
  "slug": "yeu-cau-khan-cap-ve-viec-ngan-chan-du-an-xay-dung-thuy-dien-ha-sensan-2-cam-pu-chia",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:36:22.220Z"),
  "created": ISODate("2018-01-10T03:36:22.221Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a395cd7e84f6b9dfb92"),
  "slug": "chau-au-pin-nang-luong-mat-troi-tren-mai-nha-se-re-hon-dien-than",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:36:25.352Z"),
  "created": ISODate("2018-01-10T03:36:25.352Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a445cd7e8da419dfb91"),
  "slug": "trang-trai-phong-dien-dong-gop-nang-luong-cho-luoi-dien-quoc-gia",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:36:36.212Z"),
  "created": ISODate("2018-01-10T03:36:36.212Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a455cd7e816779dfb87"),
  "slug": "thuy-dien-tren-dong-chinh-song-me-cong-ai-loi-ai-hai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:36:37.974Z"),
  "created": ISODate("2018-01-10T03:36:37.974Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a465cd7e80b4a9dfb94"),
  "slug": "dong-song-mien-thuong-mi-dang-chay-di-dau",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:36:38.661Z"),
  "created": ISODate("2018-01-10T03:36:38.661Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a5c5cd7e8d5719dfb98"),
  "slug": "thu-tuong-co-the-hoan-nha-may-dien-hat-nhan-toi-2020",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:37:00.213Z"),
  "created": ISODate("2018-01-10T03:37:00.213Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a5e5cd7e84f6b9dfb93"),
  "slug": "vien-nang-luong-va-lien-minh-nang-luong-phoi-hop-to-chuc-toa-dam-quy-hoach-phat-trien-dien-o-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:37:02.648Z"),
  "created": ISODate("2018-01-10T03:37:02.648Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a615cd7e80b4a9dfb95"),
  "slug": "can-giai-phap-chien-luoc-ve-van-de-di-dan-va-giam-ngheo-vung-thuy-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:37:05.384Z"),
  "created": ISODate("2018-01-10T03:37:05.384Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a635cd7e8e17e9dfb83"),
  "slug": "pv-engineering-la-tong-thau-epc-du-an-dien-gio-con-dao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:37:07.696Z"),
  "created": ISODate("2018-01-10T03:37:07.696Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a655cd7e8da419dfb92"),
  "slug": "loai-thuy-dien-vua-va-nho-khoi-danh-muc-uu-dai-dau-tu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:37:09.571Z"),
  "created": ISODate("2018-01-10T03:37:09.571Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558a685cd7e80b4a9dfb96"),
  "slug": "tang-cuong-su-dung-nang-luong-tai-tao-trong-tat-ca-cac-linh-vuc",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:37:12.292Z"),
  "created": ISODate("2018-01-10T03:37:12.292Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558aab5cd7e810109dfb9a"),
  "slug": "biogas-cong-dong-huong-di-moi-cho-nang-luong-nong-thon",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:38:19.792Z"),
  "created": ISODate("2018-01-10T03:38:19.792Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558aaf5cd7e8e17e9dfb84"),
  "slug": "huong-di-moi-cho-phat-trien-nang-luong-ben-vung-tai-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:38:23.644Z"),
  "created": ISODate("2018-01-10T03:38:23.644Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558ab25cd7e8f93e9dfb97"),
  "slug": "su-dung-nang-luong-tiet-kiem-va-hieu-qua-van-con-nhieu-rao-can",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:38:26.241Z"),
  "created": ISODate("2018-01-10T03:38:26.241Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558ab55cd7e80b4a9dfb97"),
  "slug": "tap-huan-ve-ky-nang-viet-de-xuat-du-an-voi-doi-tac-dia-phuong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:38:29.153Z"),
  "created": ISODate("2018-01-10T03:38:29.153Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558ab75cd7e8b70a9dfb76"),
  "slug": "trien-lam-goc-nhin-moi-ve-phat-trien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:38:32.100Z"),
  "created": ISODate("2018-01-10T03:38:32.100Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558abe5cd7e8d5719dfb99"),
  "slug": "loai-bo-thuy-dien-dong-nai-6-6a-ra-khoi-quy-hoach-cac-nha-khoa-hoc-dong-tinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:38:38.585Z"),
  "created": ISODate("2018-01-10T03:38:38.585Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558ac45cd7e8e17e9dfb85"),
  "slug": "dak-lak-nguy-co-vo-nhieu-ho-dap-thuy-loi-do-mua-lu",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:38:44.743Z"),
  "created": ISODate("2018-01-10T03:38:44.743Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558ac65cd7e8da419dfb93"),
  "slug": "can-long-ghep-gioi-vao-phat-trien-thuy-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:38:46.429Z"),
  "created": ISODate("2018-01-10T03:38:46.429Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558ad05cd7e810109dfb9b"),
  "slug": "binh-dang-gioi-trong-phat-trien-thuy-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:38:56.920Z"),
  "created": ISODate("2018-01-10T03:38:56.920Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558ad15cd7e80b4a9dfb98"),
  "slug": "thi-diem-phat-trien-nang-luong-tai-dia-phuong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:38:57.200Z"),
  "created": ISODate("2018-01-10T03:38:57.200Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558ad65cd7e8d5719dfb9a"),
  "slug": "cong-vien-nang-luong-mat-troi-thu-hai-cua-cuba-van-hanh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:39:02.163Z"),
  "created": ISODate("2018-01-10T03:39:02.163Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558ad65cd7e8e17e9dfb86"),
  "slug": "thong-bao-tuyen-kiem-toan",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:39:02.553Z"),
  "created": ISODate("2018-01-10T03:39:02.553Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558ad75cd7e8b70a9dfb77"),
  "slug": "nguoi-dan-luu-vuc-mekong-len-tieng-ve-nhung-quan-ngai-xung-quanh-van-de-phat-trien-thuy-dien",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:39:03.243Z"),
  "created": ISODate("2018-01-10T03:39:03.243Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b255cd7e8596e9dfb99"),
  "slug": "mong-manh-cay-lua-dbscl-truoc-thuy-dien-me-kong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:40:21.178Z"),
  "created": ISODate("2018-01-10T03:40:21.179Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b2e5cd7e810109dfb9c"),
  "slug": "dieu-chinh-co-che-tai-chinh-du-an-nang-luong-tai-tao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:40:30.955Z"),
  "created": ISODate("2018-01-10T03:40:30.955Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b325cd7e816779dfb88"),
  "slug": "thuc-day-su-dung-cac-giai-phap-nang-luong-ben-vung-tai-dia-phuong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:40:34.439Z"),
  "created": ISODate("2018-01-10T03:40:34.439Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b355cd7e8e17e9dfb87"),
  "slug": "thong-bao-tuyen-dung-tinh-nguyen-vien-greenid",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:40:37.348Z"),
  "created": ISODate("2018-01-10T03:40:37.348Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b385cd7e8d5719dfb9b"),
  "slug": "toa-dam-gioi-tre-voi-nang-luong-xanh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:40:40.537Z"),
  "created": ISODate("2018-01-10T03:40:40.537Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b3c5cd7e8f93e9dfb98"),
  "slug": "khia-canh-phap-ly-trong-hop-tac-quan-ly-luu-vuc-song-me-cong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:40:44.614Z"),
  "created": ISODate("2018-01-10T03:40:44.614Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b3e5cd7e80b4a9dfb99"),
  "slug": "vi-mot-moi-truong-xanh-thai-binh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:40:46.264Z"),
  "created": ISODate("2018-01-10T03:40:46.264Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b405cd7e816779dfb89"),
  "slug": "hai-xa-tien-phong-bien-phe-thai-thanh-nang-luong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:40:48.978Z"),
  "created": ISODate("2018-01-10T03:40:48.978Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b445cd7e80b4a9dfb9a"),
  "slug": "sap-dien-ra-hoi-nghi-doi-thoai-delta-tai-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:40:52.608Z"),
  "created": ISODate("2018-01-10T03:40:52.608Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b495cd7e8da419dfb94"),
  "slug": "greenid-to-chuc-hoi-thao-danh-rieng-cho-sinh-vien-can-tho",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:40:57.320Z"),
  "created": ISODate("2018-01-10T03:40:57.320Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b4e5cd7e80b4a9dfb9b"),
  "slug": "tap-huan-va-dien-tap-phong-chong-giam-thieu-rui-ro-thien-tai-dua-vao-cong-dong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:41:02.635Z"),
  "created": ISODate("2018-01-10T03:41:02.635Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b4f5cd7e84f6b9dfb94"),
  "slug": "thong-bao-tuyen-dung-tinh-nguyen-vien-nuoc-ngoai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:41:03.130Z"),
  "created": ISODate("2018-01-10T03:41:03.130Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b545cd7e8b70a9dfb78"),
  "slug": "tap-ban-do-the-gioi-dau-tien-ve-nang-luong-tai-tao-duoc-cong-bo",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:41:08.181Z"),
  "created": ISODate("2018-01-10T03:41:08.181Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558b5b5cd7e8da419dfb95"),
  "slug": "tam-cong-nghe-san-xuat-dien-trong-tuong-lai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:41:15.970Z"),
  "created": ISODate("2018-01-10T03:41:15.970Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bc75cd7e80b4a9dfb9c"),
  "slug": "cong-nghe-nang-luong-moi-tro-thanh-dai-tra-vao-2050",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:03.388Z"),
  "created": ISODate("2018-01-10T03:43:03.388Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bcf5cd7e8596e9dfb9a"),
  "slug": "y-tuong-xanh-cho-thanh-pho-hanh-trinh-xanh-cho-tuong-lai",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:11.963Z"),
  "created": ISODate("2018-01-10T03:43:11.963Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bd45cd7e816779dfb8a"),
  "slug": "greenid-tham-gia-tinh-nguyen",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:16.491Z"),
  "created": ISODate("2018-01-10T03:43:16.491Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bd65cd7e8596e9dfb9b"),
  "slug": "khanh-thanh-nha-may-phong-dien-tren-dao-phu-quy",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:18.889Z"),
  "created": ISODate("2018-01-10T03:43:18.889Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bd95cd7e8b70a9dfb79"),
  "slug": "nuoc-sach-da-ve-voi-nam-cuong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:21.438Z"),
  "created": ISODate("2018-01-10T03:43:21.438Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bdb5cd7e8da419dfb96"),
  "slug": "lanh-dao-the-gioi-hoi-thuc-phat-trien-nang-luong-tai-sinh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:23.530Z"),
  "created": ISODate("2018-01-10T03:43:23.530Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bde5cd7e80b4a9dfb9d"),
  "slug": "danh-thuc-tiem-nang-dien-gio",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:26.193Z"),
  "created": ISODate("2018-01-10T03:43:26.193Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558be55cd7e84f6b9dfb95"),
  "slug": "dien-lai-tang-gia-chuyen-gia-keu-vo-ly-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:33.804Z"),
  "created": ISODate("2018-01-10T03:43:33.804Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558be95cd7e8f93e9dfb99"),
  "slug": "toa-dam-phat-trien-nang-luong-ben-vung-o-viet-nam",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:37.182Z"),
  "created": ISODate("2018-01-10T03:43:37.182Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bec5cd7e816779dfb8b"),
  "slug": "tang-cuong-su-dung-nang-luong-tai-tao-trong-tat-ca-cac-linh-vuc-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:40.362Z"),
  "created": ISODate("2018-01-10T03:43:40.362Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bef5cd7e8e17e9dfb88"),
  "slug": "xay-nha-may-nhiet-dien-duyen-hai-3-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:43.338Z"),
  "created": ISODate("2018-01-10T03:43:43.338Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bf75cd7e8b70a9dfb7a"),
  "slug": "puerto-rico-xay-dung-cong-vien-nang-luong-mat-troi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:51.558Z"),
  "created": ISODate("2018-01-10T03:43:51.558Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558bf85cd7e8d5719dfb9c"),
  "slug": "puerto-rico-xay-dung-cong-vien-nang-luong-mat-troi-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:43:52.513Z"),
  "created": ISODate("2018-01-10T03:43:52.513Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558c025cd7e816779dfb8c"),
  "slug": "tham-van-y-kien-luat-dien-luc-sua-doi",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:44:02.340Z"),
  "created": ISODate("2018-01-10T03:44:02.340Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558c035cd7e810109dfb9d"),
  "slug": "hoi-thao-tham-van-y-kien-luat-dien-luc-sua-doi-nam-2012",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:44:03.118Z"),
  "created": ISODate("2018-01-10T03:44:03.118Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558c2f5cd7e84f6b9dfb96"),
  "slug": "ung-dung-cntt-trong-tiet-kiem-nang-luong-va-quan-ly-moi-truong-1",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:44:47.735Z"),
  "created": ISODate("2018-01-10T03:44:47.735Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558c345cd7e8da419dfb97"),
  "slug": "xay-dung-lien-minh-nang-luong-vi-su-phat-trien-nang-luong-ben-vung-o-viet-nam-va-khu-vuc-me-cong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:44:52.510Z"),
  "created": ISODate("2018-01-10T03:44:52.510Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a558c895cd7e8e17e9dfb89"),
  "slug": "ap-dung-quy-hoach-tong-hop-tai-nguyen-trong-nganh-nang-luong",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-10T03:46:17.208Z"),
  "created": ISODate("2018-01-10T03:46:17.208Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5c75a85cd7e860715a6db0"),
  "slug": "tam-nhin-su-menh",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-15T09:34:32.910Z"),
  "created": ISODate("2018-01-15T09:34:32.910Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5d682a5cd7e8180e95afd0"),
  "slug": "ngoi-nha-khong-ton-mot-dong-tien-dien-cua-me-viet-o-nhat",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-16T02:49:14.680Z"),
  "created": ISODate("2018-01-16T02:49:14.680Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a5d83c65cd7e81d3195afcf"),
  "slug": "moi-dau-thau-hoi-thao",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-16T04:47:02.474Z"),
  "created": ISODate("2018-01-16T04:47:02.474Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a694ec15cd7e8570549f87c"),
  "slug": "toi-nam-2020-dien-mat-troi-cua-viet-nam-se-dat-7-gigawatt",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-25T03:28:01.160Z"),
  "created": ISODate("2018-01-25T03:28:01.170Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7191aa5cd7e84a5f26390e"),
  "slug": "ha-noi-chi-duoc-huong-38-ngay-khong-khi-sach-vao-nam-2017",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-01-31T09:51:38.613Z"),
  "created": ISODate("2018-01-31T09:51:38.613Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a77bb5f5cd7e86e411c28cc"),
  "slug": "linh-vuc",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-05T02:03:11.870Z"),
  "created": ISODate("2018-02-05T02:03:11.870Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b101c5cd7e82067ff24c0"),
  "slug": "greenid-tren-bao-chi",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:41:32.786Z"),
  "created": ISODate("2018-02-07T14:41:32.786Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b10255cd7e87e39ff24c0"),
  "slug": "tin-tuc-su-kien",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:41:41.805Z"),
  "created": ISODate("2018-02-07T14:41:41.805Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b102d5cd7e8e563ff24c0"),
  "slug": "tuyen-dung",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:41:49.870Z"),
  "created": ISODate("2018-02-07T14:41:49.870Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b10355cd7e82067ff24c1"),
  "slug": "hoat-dong-cua-greenid",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:41:57.647Z"),
  "created": ISODate("2018-02-07T14:41:57.647Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b103d5cd7e8982cff24c0"),
  "slug": "thong-cao-bao-chi",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:42:05.555Z"),
  "created": ISODate("2018-02-07T14:42:05.555Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b10e05cd7e8f46bff24c0"),
  "slug": "test1",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:44:48.141Z"),
  "created": ISODate("2018-02-07T14:44:48.141Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b11285cd7e82144ff24c0"),
  "slug": "tin-tuc-1",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:46:00.904Z"),
  "created": ISODate("2018-02-07T14:46:00.904Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b11505cd7e8f46bff24c1"),
  "slug": "test11",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:46:40.500Z"),
  "created": ISODate("2018-02-07T14:46:40.500Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b118d5cd7e82144ff24c1"),
  "slug": "tin-tuc-amp-su-kien",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:47:41.109Z"),
  "created": ISODate("2018-02-07T14:47:41.109Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b11da5cd7e8982cff24c1"),
  "slug": "sang-kien-xanh",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:48:58.145Z"),
  "created": ISODate("2018-02-07T14:48:58.145Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5a7b11e75cd7e8982cff24c2"),
  "slug": "sang-kien-trong-nuoc",
  "controller": "notices",
  "action": "cat",
  "modified": ISODate("2018-02-07T14:49:11.869Z"),
  "created": ISODate("2018-02-07T14:49:11.869Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5aab7ae95cd7e8497c99893e"),
  "slug": "water-and-clean-air",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-03-16T08:06:01.129Z"),
  "created": ISODate("2018-03-16T08:06:01.129Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5af5d6145cd7e8d461782b8b"),
  "slug": "thiet-ke-an-tuong",
  "controller": "albums",
  "action": "index",
  "modified": ISODate("2018-05-11T17:42:44.314Z"),
  "created": ISODate("2018-05-11T17:42:44.314Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5b111ceb5cd7e82535f7aa9a"),
  "slug": "thiet-ke-an-tuong-1",
  "controller": "albums",
  "action": "index",
  "modified": ISODate("2018-06-01T10:16:11.904Z"),
  "created": ISODate("2018-06-01T10:16:11.904Z")
});
db.getCollection("slugs").insert({
  "_id": ObjectId("5b14ab0c5cd7e80e6cdf3266"),
  "slug": "khan-gia-britains-got-talent-bat-ngo-vi-quoc-co-quoc-nghiep-truot-top-3",
  "controller": "notices",
  "action": "index",
  "modified": ISODate("2018-06-04T02:59:24.165Z"),
  "created": ISODate("2018-06-04T02:59:24.165Z")
});

/** system.indexes records **/
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.admins"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.notices"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.options"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.slugs"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.contacts"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.albums"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.videos"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.documents"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.donates"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.time_lines"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.our_teams"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "mantan180.feedbacks"
});

/** time_lines records **/
db.getCollection("time_lines").insert({
  "_id": ObjectId("5a7749a65cd7e88165af8b6c"),
  "name": " EU",
  "image": "/app/webroot/upload/admin/images/greenid/Logo%20EU.jpg",
  "timeup": "2017-11-26",
  "timeCp": NumberInt(1511629200),
  "slug": "eu",
  "content": "<h2 style=\"text-align:center\"><strong>B???n ch??a bi???t v??? chi???n d???ch?</strong></h2>\r\n\r\n<p>&quot;V&igrave; m???t An Giang Xanh S???ch ?????p&rdquo; l&agrave; m???t chi???n d???ch nh???m th&uacute;c ?????y c&aacute;c s&aacute;ng ki???n b???o v??? m&ocirc;i tr?????ng t???i An Giang. Trong chi???n d???ch n&agrave;y, Qu??? Alphanam Green Foundation cam k???t t&agrave;i tr??? 3 t??? ?????ng cho c&aacute;c d??? &aacute;n c???a thanh ni&ecirc;n t???i An Giang trong 3 n??m 2016-2018</p>\r\n\r\n<p>&nbsp;</p>\r\n",
  "modified": ISODate("2018-02-04T17:57:58.387Z"),
  "created": ISODate("2018-02-04T17:57:58.387Z"),
  "id": "5a7749a65cd7e88165af8b6c",
  "listTimeline": {
    "0": {
      "time": "",
      "content": ""
    },
    "1511629200": {
      "time": "2017-11-26",
      "content": "<h2><strong>Qu???n l&yacute; danh s&aacute;ch c?? s??? l??u tr&uacute;</strong></h2>\r\n\r\n<p>Cho ph&eacute;p ch??? c?? s??? qu???n l&yacute; nhi???u c?? s??? l??u tr&uacute; v???i nhi???u lo???i h&igrave;nh l??u tr&uacute; kh&aacute;c nhau, t???t c??? ?????u c&ugrave;ng n???m trong m???t t&agrave;i kho???n qu???n l&yacute;. Cho ph&eacute;p ch??? c?? s??? qu???n l&yacute; nhi???u c?? s??? l??u tr&uacute; v???i nhi???u lo???i&amp;;nbsp;h&igrave;nh l??u tr&uacute; kh&aacute;c nhau, t???t c??? ?????u c&ugrave;ng n???m trong m???t t&agrave;i kho???n qu???n l&yacute;. Cho ph&eacute;p ch??? c?? s??? qu???n l&yacute; nhi???u c?? s??? l??u tr&uacute; v???i nhi???u lo???i h&igrave;nh l??u tr&uacute; kh&aacute;c nhau, t???t c??? ?????u c&ugrave;ng n???m trong m???t t&agrave;i kho???n qu???n l&yacute;. Cho ph&eacute;p ch??? c?? s??? qu???n l&yacute; nhi???u c?? s??? l??u tr&uacute; v???i nhi???u lo???i h&igrave;nh l??u tr&uacute; kh&aacute;c nhau, t???t c??? ?????u c&ugrave;ng n???m trong m???t t&agrave;i kho???n qu???n l&yacute;.&nbsp;&nbsp;&nbsp;</p>\r\n"
    },
    "1512061200": {
      "time": "2017-12-01",
      "content": "<h2><strong>Qu???n l&yacute; s?? ????? ph&ograve;ng</strong></h2>\r\n\r\n<p>V???i h&igrave;nh ???nh tr???c quan m&ocirc; h&igrave;nh h&oacute;a ph&ograve;ng cho thu&ecirc; gi&uacute;p ch??? c?? s??? l??u tr&uacute; d??? d&agrave;ng qu???n l&yacute; ???????c tr???ng th&aacute;i ph&ograve;ng tr???ng hay c&oacute; kh&aacute;ch hay ph&ograve;ng b???n</p>\r\n"
    }
  }
});
db.getCollection("time_lines").insert({
  "_id": ObjectId("5a774a935cd7e8ef5caf8b72"),
  "name": "COBENEFITS",
  "image": "/app/webroot/upload/admin/images/greenid/logo_IASS.jpg",
  "timeup": "2017-08-01",
  "timeCp": NumberInt(1501520400),
  "slug": "cobenefits",
  "content": "<p><span style=\"font-size:14px\"><strong>D??? &aacute;n &quot;Th&uacute;c ?????y nh???ng ?????ng l???i &iacute;ch v??? kinh t??? - x&atilde; h???i c???a vi???c ph&aacute;t tri???n n??ng l?????ng t&aacute;i t???o trong gi???m nh??? c&aacute;c t&aacute;c ?????ng </strong></span><span style=\"font-size:14px\"><strong>c???a bi???n ?????i kh&iacute; h???u ??? Vi???t Nam&quot;</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Gi???i thi???u d??? &aacute;n</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Ph&aacute;t tri???n N??ng l?????ng t&aacute;i t???o v&agrave; S??? d???ng n??ng l?????ng ti???t ki???m, hi???u qu??? kh&ocirc;ng ch??? l&agrave; gi???i ph&aacute;p quan tr???ng trong ???ng ph&oacute; bi???n ?????i kh&iacute; h???u to&agrave;n c???u m&agrave; c&ograve;n mang l???i c&aacute;c l???i &iacute;ch v??? kinh t??? x&atilde; h???i nh?? t??ng c?????ng ti???p c???n n??ng l?????ng cho ng?????i ngh&egrave;o, gi???m thi???u &ocirc; nhi???m m&ocirc;i tr?????ng v&agrave; g&oacute;p ph???n ?????m b???o an ninh n??ng l?????ng c???a c&aacute;c qu???c gia. T???i Vi???t Nam, h???u h???t c&aacute;c l???i &iacute;ch v&agrave; t&aacute;c ?????ng tr&ecirc;n v???n ch??a ???????c ????a v&agrave;o nghi&ecirc;n c???u chuy&ecirc;n s&acirc;u v&agrave; ??&aacute;nh gi&aacute; ??&uacute;ng m???c. Trong b???i c???nh ??&oacute;, Vi???n Nghi&ecirc;n c???u Cao c???p v??? Ph&aacute;t tri???n B???n V???ng (IASS) c&oacute; tr??? s??? t???i Potsdam (?????c), Vi???n nghi&ecirc;n c???u ?????c l???p v??? c&aacute;c v???n ????? m&ocirc;i tr?????ng Berlin (UfU), H???c vi???n N??ng l?????ng T&aacute;i t???o (RENAC) v&agrave; Trung t&acirc;m Chuy???n d???ch N??ng l?????ng Qu???c t??? (IET) c&ugrave;ng v???i c&aacute;c t??? ch???c ?????i t&aacute;c t???i Vi???t Nam s??? th???c hi???n d??? &aacute;n <strong>&ldquo;Th&uacute;c ?????y nh???ng ?????ng l???i &iacute;ch v??? kinh t??? - x&atilde; h???i c???a vi???c ph&aacute;t tri???n n??ng l?????ng t&aacute;i t???o trong gi???m nh??? c&aacute;c t&aacute;c ?????ng c???a bi???n ?????i kh&iacute; h???u ??? Vi???t Nam&rdquo; (COBENEFITS)</strong>.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">COBENEFITS l&agrave; m???t d??? &aacute;n h???p t&aacute;c song ph????ng gi???a ch&iacute;nh ph??? Vi???t Nam v&agrave; C???ng H&ograve;a Li&ecirc;n Bang ?????c v&agrave; ???????c t&agrave;i tr??? trong khu&ocirc;n kh??? S&aacute;ng ki???n Kh&iacute; h???u Qu???c t??? (IKI) nh???n ngu???n v???n h??? tr??? t??? Ch&iacute;nh Ph??? ?????c.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Ngo&agrave;i Vi???t Nam, d??? &aacute;n ?????ng th???i c??ng ???????c th???c hi???n t???i ba qu???c gia kh&aacute;c bao g???m: ???n ?????, Nam Phi v&agrave; Th??? Nh?? K&igrave; v???i k&igrave; v???ng ph&aacute;t tri???n m???t m???ng l?????i m&atilde;nh m??? nh???m x&oacute;a b??? nh???ng r&agrave;o c???n trong ph&aacute;t tri???n n??ng l?????ng t&aacute;i t???o v&agrave; gi???m nh??? t&aacute;c ?????ng c???a bi???n ?????i kh&iacute; h???u tr&ecirc;n th??? gi???i.</span></p>\r\n\r\n<p><a href=\"http://www.iass-potsdam.de/en/research/renewables\"><span style=\"font-size:14px\">www.cobenefits.info</span></a></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>T&ecirc;n d??? &aacute;n:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Th&uacute;c ?????y nh???ng ?????ng l???i &iacute;ch v??? kinh t??? - x&atilde; h???i trong ph&aacute;t tri???n n??ng l?????ng t&aacute;i t???o ??? Vi???t Nam (COBENEFITS)</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>C&aacute;c b&ecirc;n th???c hi???n t???i Vi???t Nam:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">Vi???n Nghi&ecirc;n c???u Cao c???p v??? Ph&aacute;t tri???n b???n v???ng (IASS) l&agrave; ??i???u ph???i ch&iacute;nh c???a d??? &aacute;n, Trung t&acirc;m Ph&aacute;t tri???n S&aacute;ng t???o Xanh (GreenID) l&agrave; ?????i t&aacute;c th???c hi???n t???i Vi???t Nam. Ngo&agrave;i ra l&agrave; Vi???n nghi&ecirc;n c???u ?????c l???p v??? c&aacute;c v???n ????? m&ocirc;i tr?????ng Berlin (UfU), H???c vi???n N??ng l?????ng T&aacute;i t???o (RENAC) v&agrave; Trung t&acirc;m Chuy???n d???ch N??ng l?????ng Qu???c t??? (IET) l&agrave; c&aacute;c ?????i t&aacute;c c???a d??? &aacute;n. D??? &aacute;n n&agrave;y l&agrave; m???t ph???n c???a S&aacute;ng ki???n Kh&iacute; h???u Qu???c t??? (IKI) ???????c h??? tr??? b???i B??? M&ocirc;i tr?????ng, B???o t???n Thi&ecirc;n nhi&ecirc;n v&agrave; X&acirc;y d???ng v&agrave; An to&agrave;n H???t nh&acirc;n c???a ?????c (BMUB).</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>C&aacute;c ho???t ?????ng ch&iacute;nh v&agrave; th???i gian c???a d??? &aacute;n:</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\">D??? &aacute;n COBENEFITS s??? cung c???p ki???n th???c li&ecirc;n quan ?????n nh???ng ?????ng th???i &iacute;ch v??? kinh t??? - x&atilde; h???i trong ph&aacute;t tri???n n??ng l?????ng t&aacute;i t???o v&agrave; gi???m nh??? c&aacute;c t&aacute;c ?????ng c???a bi???n ?????i kh&iacute; h???u ?????n c&aacute;c nh&agrave; ho???ch ?????nh ch&iacute;nh s&aacute;ch v&agrave; nh???ng ?????i t&aacute;c ?????a ph????ng th&ocirc;ng qua:</span></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><span style=\"font-size:14px\">2017-2018: Th???c hi???n c&aacute;c nghi&ecirc;n c???u v??? nh???ng ?????ng th???i &iacute;ch v??? kinh t??? - x&atilde; h???i trong ph&aacute;t tri???n n??ng l?????ng t&aacute;i t???o t???i Vi???t Nam.</span></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><span style=\"font-size:14px\">2018-2019: T???p hu???n t???i ch???/online v??? nh???ng ?????ng th???i &iacute;ch v??? kinh t??? - x&atilde; h???i trong ph&aacute;t tri???n n??ng l?????ng t&aacute;i t???o t???i Vi???t Nam.</span></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><span style=\"font-size:14px\">2019: ?????i tho???i c&ugrave;ng c&aacute;c ?????i t&aacute;c thu???c c&aacute;c B??? ban ng&agrave;nh nh???m kh???c ph???c nh???ng r&agrave;o c???n v&agrave; t???n d???ng nh???ng ?????ng l???i &iacute;ch tr&ecirc;n.</span></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><span style=\"font-size:14px\">2019: X&acirc;y d???ng chi???n l?????c ????? l???ng gh&eacute;p nh???ng ?????ng l???i &iacute;ch tr&ecirc;n c&aacute;c c&aacute;c chi???n l?????c, ch????ng tr&igrave;nh h&agrave;nh ?????ng v&igrave; m&ocirc;i tr?????ng v&agrave; vi???c th???c hi???n NDC.</span></p>\r\n\t</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/app/webroot/upload/admin/images/logo_IASS.jpg\" style=\"height:80px; width:130px\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"/app/webroot/upload/admin/images/Logo%20Green%20ID_pnG(1).PNG\" style=\"height:52px; width:150px\" />&nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"/app/webroot/upload/admin/images/logo%20Ufu(2).png\" style=\"height:63px; width:150px\" /><img alt=\"\" src=\"/app/webroot/upload/admin/images/Logo%20IET.jpg\" style=\"height:75px; width:150px\" /><img alt=\"\" src=\"/app/webroot/upload/admin/images/Logo%20Recna.jpg\" style=\"height:82px; width:150px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n",
  "modified": ISODate("2018-02-04T18:01:55.756Z"),
  "created": ISODate("2018-02-04T18:01:55.756Z"),
  "id": "5a774a935cd7e8ef5caf8b72",
  "listTimeline": {
    "1503421200": {
      "time": "2017-11-16",
      "content": "<p><a href=\"https://drive.google.com/file/d/1qGGIly6OnHCgCmPLJqtV1RygIvvkMY9c/view?usp=sharing\">T???a ??&agrave;m:</a> &quot;Th&uacute;c ?????y nh???ng ?????ng l???i &iacute;ch v??? kinh t??? - X&atilde; h???i c???a vi???c ph&aacute;t tri???n n??ng l?????ng t&aacute;i t???o trong gi???m nh??? c&aacute;c t&aacute;c ?????ng c???a bi???n ?????i kh&iacute; h???u ??? Vi???t Nam&quot;&nbsp;</p>\r\n"
    },
    "1510765200": {
      "time": "2017-08-23",
      "content": "<p>T??? ng&agrave;y 16 ?????n 20 th&aacute;ng 11 n??m 2017, ph&aacute;i ??o&agrave;n d??? &aacute;n COBENEFITS ti???p t???c tri???n khai c&aacute;c <a href=\"http://bit.ly/2i4JVbE\">cu???c g???p g??? song ph????ng</a> v???i c&aacute;c b??? ban ng&agrave;nh, c&aacute;c c?? quan v&agrave; ????n v??? ??? Vi???t Nam.&nbsp;&nbsp;</p>\r\n"
    }
  }
});

/** videos records **/
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374a25cd7e82b69951917"),
  "time": NumberInt(1517515938),
  "view": NumberInt(0),
  "idSlug": "5a7374a25cd7e82b69951916",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:12:18.296Z"),
  "created": ISODate("2018-02-01T20:12:18.296Z")
});
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374ba5cd7e8f17b951913"),
  "time": NumberInt(1517515962),
  "view": NumberInt(0),
  "idSlug": "5a7374ba5cd7e8f17b951912",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-1",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:12:42.599Z"),
  "created": ISODate("2018-02-01T20:12:42.599Z")
});
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374c25cd7e8323f951912"),
  "time": NumberInt(1517515970),
  "view": NumberInt(0),
  "idSlug": "5a7374c25cd7e8323f951911",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-2",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:12:50.780Z"),
  "created": ISODate("2018-02-01T20:12:50.780Z")
});
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374cb5cd7e8586a95191c"),
  "time": NumberInt(1517515979),
  "view": NumberInt(0),
  "idSlug": "5a7374cb5cd7e8586a95191b",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-3",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:12:59.251Z"),
  "created": ISODate("2018-02-01T20:12:59.251Z")
});
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374d15cd7e8427a951912"),
  "time": NumberInt(1517515985),
  "view": NumberInt(0),
  "idSlug": "5a7374d15cd7e8427a951911",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-4",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:13:05.862Z"),
  "created": ISODate("2018-02-01T20:13:05.862Z")
});
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374d65cd7e8586a95191e"),
  "time": NumberInt(1517515990),
  "view": NumberInt(0),
  "idSlug": "5a7374d65cd7e8586a95191d",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-5",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:13:10.953Z"),
  "created": ISODate("2018-02-01T20:13:10.953Z")
});
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374da5cd7e86972951913"),
  "time": NumberInt(1517515994),
  "view": NumberInt(0),
  "idSlug": "5a7374da5cd7e86972951912",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-6",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:13:14.698Z"),
  "created": ISODate("2018-02-01T20:13:14.698Z")
});
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374dd5cd7e84527951919"),
  "time": NumberInt(1517515997),
  "view": NumberInt(0),
  "idSlug": "5a7374dd5cd7e84527951918",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-7",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:13:17.587Z"),
  "created": ISODate("2018-02-01T20:13:17.587Z")
});
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374e05cd7e8427a951914"),
  "time": NumberInt(1517516000),
  "view": NumberInt(0),
  "idSlug": "5a7374e05cd7e8427a951913",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-8",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:13:20.297Z"),
  "created": ISODate("2018-02-01T20:13:20.298Z")
});
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374e25cd7e8452795191b"),
  "time": NumberInt(1517516002),
  "view": NumberInt(0),
  "idSlug": "5a7374e25cd7e8452795191a",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-9",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:13:22.964Z"),
  "created": ISODate("2018-02-01T20:13:22.964Z")
});
db.getCollection("videos").insert({
  "_id": ObjectId("5a7374e95cd7e86e1a951911"),
  "time": NumberInt(1517516009),
  "view": NumberInt(0),
  "idSlug": "5a7374e95cd7e86e1a951910",
  "name": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "code": "P-7rRs53zBc",
  "slug": "dieu-khien-coi-hu-bang-nhiet-do-10",
  "image": "http://img.youtube.com/vi/P-7rRs53zBc/0.jpg",
  "description": "??i???u khi???n c??i h?? b???ng nhi???t ?????",
  "modified": ISODate("2018-02-01T20:13:29.345Z"),
  "created": ISODate("2018-02-01T20:13:29.345Z")
});
