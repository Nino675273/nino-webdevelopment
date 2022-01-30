<? 
$json = <<<JSON
[
   {
      "id":1,
      "title":"HP 245 G8",
      "price":309.95,
      "description":"De HP 245-laptop is geschikt voor mensen die op verschillende plekken werken dankzij het dunne en lichte ontwerp. Het prachtige display met smalle randen en hoge screen-to-body-ratio biedt meer dan genoeg ruimte om te werken of content te streamen.",
      "category":"HP",
      "image":"https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_90395853/fee_786_587_png/HP-245-G8",
      "rating":{
         "rate":3.9,
         "count":120
      }
   },
   {
      "id":2,
      "title":"APPLE MacBook Air 13.3 (2020) - Spacegrijs M1 256GB 16GB",
      "price":922.3,
      "description":"De dunne en krachtige MacBook Air is een 13-inch-laptop met een Retina-display. Dit scherm zorgt voor een ongekende scherpte en accurate kleurweergave, waardoor je geniet van jouw favoriete films, series of foto’s. Ook de graphics van de MacBook Air zijn scherper en vloeiender dan ooit tevoren dankzij de Apple M1-chip.",
      "category":"Apple",
      "image":"https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_81115270/fee_786_587_png/APPLE-MacBook-Air-13.3-%282020%29---Spacegrijs-M1-256GB-16GB",
      "rating":{
         "rate":4.1,
         "count":259
      }
   },
   {
      "id":3,
      "title":"HP 15s-fq2822nd",
      "price":555.99,
      "description":"Blijf verbonden met wat voor jou belangrijk is dankzij deze laptop met lange batterijduur en smalle randen. De HP 15 Laptop is ontwikkeld voor iedereen die overal productief wil blijven en optimaal van entertainment wil genieten en levert betrouwbare prestaties met een groot display, waardoor je probleemloos kunt streamen, internetten en werken. Bovendien gebruik je gemakkelijk jouw randapparatuur dankzij de verschillende aansluitmogelijkheden.",
      "category":"HP",
      "image":"https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_89563145/fee_786_587_png/HP-15s-fq2822nd",
      "rating":{
         "rate":4.7,
         "count":500
      }
   },
   {
      "id":4,
      "title":"ASUS Vivobook 17 (X712EA-BX176T)",
      "price":525.99,
      "description":"Probleemloos multitasken doe je met de snelle Asus Vivobook 17 (X712EA-BX176T). Het apparaat beschikt over een modern en stevig ontwerp, waardoor je er overal gebruik van maakt. Hierbij zorgt de combinatie van een krachtige processor, voldoende werkgeheugen en een razendsnel opslagmedium voor goede prestaties. Dit maakt deze laptop onder andere geschikt voor zwaardere programma’s en het werken met een grote hoeveelheid data. Verder gebruik je deze Asus-laptop natuurlijk ook voor het bijhouden van jouw social media en je kijkt films en series op het grote 17.3 inch scherm.",
      "category":"ASUS",
      "image":"https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_86565166/fee_786_587_png/ASUS-Vivobook-17-%28X712EA-BX176T%29",
      "rating":{
         "rate":2.1,
         "count":430
      }
   },
   {
      "id":5,
      "title":"LENOVO IdeaPad 3 6 - 15 Ryzen 3 5300U 4GB 128GB",
      "price":695,
      "description":"De IdeaPad 3 is gemaakt voor de hedendaagse laptop gebruiker die voor het maximale gaat en alles uit zijn of haar laptop haalt. Het is een moderne laptop die is voorzien van krachtige hardware. Aan de binnenkant zit een krachtige AMD Ryzen 3 5300U processor en zorgt in combinatie met het 4 GB aan werkgeheugen dat alles soepel loopt en hierdoor heb je geen last van lange laadtijden. Dankzij de 128 GB SSD harde schijf is de laptop en alle programma’s binnen no-time opgestart en heb jij bovendien genoeg ruimte om alle bestanden op te slaan.",
      "category":"LENOVO",
      "image":"https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_88421254/fee_786_587_png/LENOVO-IdeaPad-3-6---15-Ryzen-3-5300U-4GB-128GB",
      "rating":{
         "rate":4.6,
         "count":400
      }
   },
   {
      "id":6,
      "title":"APPLE MacBook Pro 13.3 (2020) - Spacegrijs M1 256GB 8GB",
      "price":1168,
      "description":"Satisfaction Guaranteed. Return or exchange any order within 30 days.Designed and sold by Hafeez Center in the United States. Satisfaction Guaranteed. Return or exchange any order within 30 days.",
      "category":"Apple",
      "image":"https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_78978123/fee_786_587_png/APPLE-MacBook-Pro-13.3-%282020%29---Spacegrijs-M1-256GB-8GB",
      "rating":{
         "rate":3.9,
         "count":70
      }
   },
   {
      "id":7,
      "title":"HP Pavilion 15-eh1825nd",
      "price":749.49,
      "description":"Elegant op het werk. Praktisch in je vrije tijd. De Pavilion 15.6-inch laptop biedt meer kracht in een kleiner profiel, zodat je overal kunt werken. Geniet van de mooiste films, video's en games met een scherm met flinterdunne randen en geluid van B&O. Bovendien gebruik je gemakkelijk jouw randapparatuur dankzij de verschillende aansluitmogelijkheden.",
      "category":"HP",
      "image":"https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_89563176/fee_786_587_png/HP-Pavilion-15-eh1825nd",
      "rating":{
         "rate":3,
         "count":400
      }
   }
]
JSON;

$products = json_decode($json);
?>