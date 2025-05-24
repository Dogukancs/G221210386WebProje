document.addEventListener("DOMContentLoaded", () => {
  const iletisimForm = document.getElementById("iletisimForm");
  if (iletisimForm) {
    iletisimForm.addEventListener("submit", (e) => {
      e.preventDefault();

      
      const ad = iletisimForm.querySelector("#ad");
      const email = iletisimForm.querySelector("#email");
      const telefon = iletisimForm.querySelector("#telefon");

      
      const telPattern = /^\d*$/;

      
      let valid = true;

      if (!ad.value.trim()) {
        ad.classList.add("is-invalid");
        valid = false;
      } else {
        ad.classList.remove("is-invalid");
      }

      if (!email.value.trim() || !email.checkValidity()) {
        email.classList.add("is-invalid");
        valid = false;
      } else {
        email.classList.remove("is-invalid");
      }

      if (telefon.value && !telPattern.test(telefon.value)) {
        telefon.classList.add("is-invalid");
        valid = false;
      } else {
        telefon.classList.remove("is-invalid");
      }

      if (!valid) return;

      alert("Mesajınız gönderildi. Teşekkürler!");
      iletisimForm.reset();
    });
  }

  
  const loginForm = document.getElementById("loginForm");
  if (loginForm) {
    loginForm.addEventListener("submit", (e) => {
      e.preventDefault();

      const kullaniciAdi = loginForm.querySelector("#kullaniciAdi");
      const sifre = loginForm.querySelector("#sifre");
      const loginMesaj = document.getElementById("loginMesaj");

      const dogruKullanici = "g221210386@sakarya.edu.tr";
      const dogruSifre = "g221210386";

      let valid = true;

      if (!kullaniciAdi.value.trim() || !kullaniciAdi.checkValidity()) {
        kullaniciAdi.classList.add("is-invalid");
        valid = false;
      } else {
        kullaniciAdi.classList.remove("is-invalid");
      }

      if (!sifre.value.trim()) {
        sifre.classList.add("is-invalid");
        valid = false;
      } else {
        sifre.classList.remove("is-invalid");
      }

      if (!valid) {
        loginMesaj.textContent = "";
        return;
      }

      if (
        kullaniciAdi.value === dogruKullanici &&
        sifre.value === dogruSifre
      ) {
        loginMesaj.textContent = "Giriş başarılı! Hoş geldiniz.";
        loginMesaj.style.color = "green";
        loginForm.reset();
      } else {
        loginMesaj.textContent = "Kullanıcı adı veya şifre yanlış.";
        loginMesaj.style.color = "red";
      }
    });
  }
});