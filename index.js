fetch("https://online-movie-database.p.rapidapi.com/auto-complete?q=game%20", {
  method: "GET",
  headers: {
    "X-RapidAPI-Key": "d1b229669dmsh5a4046288666705p18dad0jsn6b8ce1d350a5",
    "X-RapidAPI-Host": "online-movie-database.p.rapidapi.com",
  },
})
  .then((response) => response.json())
  .then((data) => {
    const list = data.d;
    list.map((item) => {
      const name = item.l;
      const poster = item.i.imageUrl;
      const movie = `<li><img src="${poster}"><h2>${name}</h2></li>`;
      document.querySelector(".movies").innerHTML += movie;
    });
  })

  .catch((err) => {
    console.error(err);
  });
