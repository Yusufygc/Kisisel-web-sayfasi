function validateForm() {
  var name = document.getElementById("isimsoyisim").value;
  var email = document.getElementById("mail").value;
  /*var checkbox = document.getElementById("secimkontrol");*/
  var select = document.getElementById("dil");
  var textarea = document.getElementById("mesaj").value;

  if (name == "") {
    alert("İsim alanı boş bırakılamaz.");
    return false;
  }

  if (email == "") {
    alert("E-posta alanı boş bırakılamaz.");
    return false;
  }

  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Geçerli bir e-posta adresi giriniz.");
    return false;
  }

  /*if (!checkbox.checked) {
      alert(
        "Lütfen sevdiğiniz sayfaları işaretleyiniz.Sevmediyseniz hiçbirini seçeneğini işaretleyiniz."
      );
      return false;
    }*/

  if (select.value === "") {
    alert("Öğrenmek istediğiniz bir seçenek seçiniz.");
    return false;
  }

  if (textarea.trim() === "") {
    alert("Yorumlarınız benim için çok önemli.Lütfen yorum yapınız.");
    return false;
  }

  return true;
}
