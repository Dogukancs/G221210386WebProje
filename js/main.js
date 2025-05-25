    document.getElementById("contactForm").addEventListener("submit", function(e) {
      let hata = "";
      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      if (!name) hata += "Ad soyad gerekli.\n";
      if (!/^\S+@\S+\.\S+$/.test(email)) hata += "Geçerli bir e-posta giriniz.\n";
      if (hata) {
        alert(hata);
        e.preventDefault();
      }
    });

  const loginForm = document.getElementById('loginForm');
  if (loginForm) {
    loginForm.addEventListener('submit', function(e){
      const username = document.getElementById('username').value.trim();
      const password = document.getElementById('password').value.trim();
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (username === '' || password === '') {
        alert('Kullanıcı adı ve şifre boş bırakılamaz.');
        e.preventDefault();
      } else if (!emailPattern.test(username)) {
        alert('Geçerli bir e-posta adresi giriniz.');
        e.preventDefault();
      } else if (!/^\d+$/.test(password)) {
        alert('Şifre yalnızca rakamlardan oluşmalıdır.');
        e.preventDefault();
      }
    });
  }

  const movieApp = document.getElementById('movieApp');
  if (movieApp) {
    const API_KEY = '266ea3709c4fecf891fc5425477392e4'; // Buraya TheMovieDB API anahtarınızı giriniz
    new Vue({
      el: '#movieApp',
      data: {
        query: '',
        movies: []
      },
      methods: {
        searchMovies: function() {
          if (this.query.trim() === '') {
            this.movies = [];
            return;
          }
          axios.get(`https://api.themoviedb.org/3/search/movie?api_key=${API_KEY}&query=` + encodeURIComponent(this.query))
            .then(response => {
              this.movies = response.data.results;
            })
            .catch(error => {
              console.error(error);
            });
        },
        getPosterUrl: function(path) {
          return path ? 'https://image.tmdb.org/t/p/w500' + path : 'https://via.placeholder.com/300x450?text=No+Image';
        }
      }
    });
  }
