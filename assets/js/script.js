// Animasi masuk saat halaman diload
document.addEventListener("DOMContentLoaded", function () {
  const animatedElements = document.querySelectorAll(".animate");
  animatedElements.forEach((el, index) => {
    setTimeout(() => {
      el.classList.add("show");
    }, 100 * index); // animasi berurutan
  });
});

// Validasi sederhana untuk form (opsional)
const form = document.querySelector("form");
if (form) {
  form.addEventListener("submit", function (e) {
    const name = form.querySelector("input[name='name']");
    const email = form.querySelector("input[name='email']");

    if (!name.value.trim() || !email.value.trim()) {
      e.preventDefault();
      alert("Nama dan Email wajib diisi!");
    }
  });
}

