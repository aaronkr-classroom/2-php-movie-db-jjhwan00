// MongoDB Playground: insert movie data into moviedb.movies

use('moviedb'); // 사용할 DB 선택

db.movies.insertMany([
  { title: "Inception", director: "Christopher Nolan", year: 2010 },
  { title: "Parasite", director: "Bong Joon-ho", year: 2019 },
  { title: "The Matrix", director: "Lana Wachowski, Lilly Wachowski", year: 1999 },
  { title: "Interstellar", director: "Christopher Nolan", year: 2014 }
]);
