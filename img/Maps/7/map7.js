(function(name,data){
 if(typeof onTileMapLoaded === 'undefined') {
  if(typeof TileMaps === 'undefined') TileMaps = {};
  TileMaps[name] = data;
 } else {
  onTileMapLoaded(name,data);
 }
 if(typeof module === 'object' && module && module.exports) {
  module.exports = data;
 }})("map7",
{ "compressionlevel":-1,
 "height":11,
 "infinite":false,
 "layers":[
        {
         "data":[16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16],
         "height":11,
         "id":1,
         "name":"Kachelebene 1",
         "opacity":1,
         "type":"tilelayer",
         "visible":true,
         "width":20,
         "x":0,
         "y":0
        }, 
        {
         "data":[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            204, 204, 204, 204, 204, 204, 204, 204, 204, 204, 204, 204, 204, 204, 204, 204, 204, 204, 205, 0,
            224, 224, 224, 224, 224, 224, 224, 224, 224, 224, 224, 224, 224, 224, 224, 224, 224, 224, 225, 0,
            244, 244, 244, 244, 244, 244, 244, 244, 244, 244, 244, 244, 244, 244, 244, 244, 246, 224, 225, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 223, 224, 225, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 223, 224, 225, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 223, 224, 225, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 223, 224, 225, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 223, 224, 225, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 223, 224, 225, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 223, 224, 225, 0],
         "height":11,
         "id":2,
         "name":"pfad",
         "opacity":1,
         "type":"tilelayer",
         "visible":true,
         "width":20,
         "x":0,
         "y":0
        }, 
        {
         "data":[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 300, 241, 242, 292, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 57, 0, 241, 242, 300, 261, 262, 300, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 57, 71, 0, 261, 262, 300, 270, 282, 300, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 71, 0, 0, 281, 282, 300, 300, 351, 352, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 300, 300, 371, 372, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 338, 339, 0, 0, 0, 0, 0],
         "height":11,
         "id":3,
         "name":"details",
         "opacity":1,
         "type":"tilelayer",
         "visible":true,
         "width":20,
         "x":0,
         "y":0
        }, 
        {
         "data":[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 58, 0, 289, 290, 291, 292, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 72, 0, 309, 310, 311, 312, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 58, 287, 288, 329, 330, 331, 332, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 72, 307, 308, 349, 350, 119, 120, 121, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 369, 370, 133, 134, 135, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 147, 148, 149, 0, 0, 0, 320, 321, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 340, 341, 0, 0, 0, 0],
         "height":11,
         "id":4,
         "name":"deails2",
         "opacity":1,
         "type":"tilelayer",
         "visible":true,
         "width":20,
         "x":0,
         "y":0
        }, 
        {
         "data":[45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45,
            0, 0, 0, 0, 0, 0, 0, 0, 157, 158, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45,
            0, 0, 0, 0, 0, 0, 0, 0, 171, 172, 48, 0, 0, 0, 0, 0, 0, 0, 0, 45,
            0, 0, 0, 0, 0, 0, 157, 158, 0, 0, 48, 43, 0, 0, 0, 0, 0, 0, 0, 45,
            0, 0, 0, 0, 0, 0, 171, 172, 0, 43, 43, 0, 0, 0, 0, 0, 0, 0, 0, 45,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 338, 339, 0, 0, 0, 0, 45],
         "height":11,
         "id":5,
         "name":"d3",
         "opacity":1,
         "type":"tilelayer",
         "visible":true,
         "width":20,
         "x":0,
         "y":0
        }, 
        {
         "draworder":"topdown",
         "id":6,
         "name":"weg",
         "objects":[
                {
                 "class":"",
                 "height":0,
                 "id":1,
                 "name":"",
                 "polyline":[
                        {
                         "x":0,
                         "y":0
                        }, 
                        {
                         "x":-89,
                         "y":160
                        }, 
                        {
                         "x":1114,
                         "y":158
                        }, 
                        {
                         "x":1115,
                         "y":750
                        }],
                 "rotation":0,
                 "visible":true,
                 "width":0,
                 "x":0,
                 "y":0
                }],
         "opacity":1,
         "type":"objectgroup",
         "visible":true,
         "x":0,
         "y":0
        }, 
        {
         "data":[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            14, 0, 14, 0, 14, 0, 0, 0, 0, 0, 14, 0, 14, 0, 14, 0, 0, 0, 0, 0,
            14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 0, 14, 0, 14, 0, 0, 0, 0, 0,
            14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 0, 14, 0, 14, 0, 0, 0, 0, 0,
            14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 0, 14, 0, 0, 0, 0, 0,
            14, 0, 14, 0, 14, 0, 0, 0, 0, 0, 0, 0, 14, 0, 14, 0, 0, 0, 0, 0,
            14, 0, 14, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
            14, 0, 14, 0, 14, 0, 14, 0, 14, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 0],
         "height":11,
         "id":7,
         "name":"placement",
         "opacity":1,
         "type":"tilelayer",
         "visible":true,
         "width":20,
         "x":0,
         "y":0
        }],
 "nextlayerid":8,
 "nextobjectid":2,
 "orientation":"orthogonal",
 "renderorder":"right-down",
 "tiledversion":"1.9.2",
 "tileheight":64,
 "tilesets":[
        {
         "columns":14,
         "firstgid":1,
         "image":"..\/..\/..\/Users\/reich\/Downloads\/tileset.png",
         "imageheight":897,
         "imagewidth":896,
         "margin":0,
         "name":"8",
         "spacing":0,
         "tilecount":196,
         "tileheight":64,
         "tilewidth":64
        }, 
        {
         "columns":20,
         "firstgid":197,
         "image":"..\/Designelemente\/tileset2.png",
         "imageheight":1280,
         "imagewidth":1280,
         "margin":0,
         "name":"tileset2",
         "spacing":0,
         "tilecount":400,
         "tileheight":64,
         "tilewidth":64
        }],
 "tilewidth":64,
 "type":"map",
 "version":"1.9",
 "width":20
});