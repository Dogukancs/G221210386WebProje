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
    const kullaniciAdi = loginForm.querySelector("#kullaniciAdi");
    const sifre = loginForm.querySelector("#sifre");
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
      e.preventDefault(); 
    }
  });
 } 
});