<?php
  $persone= '[
    {
      "src": "https://cdn.calciomercato.com/images/2013-02/foto.calciomercato.com.franco.neri.zelig.460x340.jpg",
      "firstName": "Franco",
      "lastName": "Neri",
      "gender": "M",
      "age": 50 ,
      "address": {
          "streetAddress": "Via Zelig 12",
          "city": "Schiavonea",
          "state": "Italy",
          "postalCode": "42059"
      }
    },
    {
      "src": "https://www.luccacomicsandgames.com/fileadmin/images/music-cosplay/_Cosplay_Ospiti__Merluzzo_INTERNA2.jpg",
      "firstName": "Maurizio",
      "lastName": "Merluzzo",
      "gender": "M",
      "age": 34 ,
      "address": {
          "streetAddress": "Via Cotta 6",
          "city": "Prato",
          "state": "Italy",
          "postalCode": "64175"
      }
    },
    {
      "src": "https://necrologie.lanuovasardegna.gelocal.it/uploads/image/file/000/895/904/895904/2555100_1_35.jpg",
      "firstName": "Antonia",
      "lastName": "Hopkins",
      "gender": "F",
      "age": 78 ,
      "address": {
          "streetAddress": "Street Offilm",
          "city": "Manhattan",
          "state": "USA",
          "postalCode": "65436"
      }
    },
    {
      "src": "https://biografieonline.it/img/bio/Mara_Maionchi.jpg",
      "firstName": "Mara",
      "lastName": "Maionchi",
      "gender": "F",
      "age": 73 ,
      "address": {
          "streetAddress": "Vias de le roses",
          "city": "Barcellona",
          "state": "Spain",
          "postalCode": "54753"
      }
    }
  ]';

  $cards = json_decode($persone, true);
  return $cards;
