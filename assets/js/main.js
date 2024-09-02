// navbar
$(window).scroll(function () {
  if ($(this).scrollTop() > 300) {
    $(".sticky-top").addClass("shadow-sm").css("top", "0px");
  } else {
    $(".sticky-top").removeClass("shadow-sm").css("top", "-200px");
  }
});

// navbar klik remove
$(document).ready(function () {
  $(document).click(function (event) {
    var clickover = $(event.target);
    var $navbar = $(".navbar-collapse");
    var _opened = $navbar.hasClass("show");

    if (_opened === true && !clickover.hasClass("navbar-toggler")) {
      $navbar.collapse("hide");
    }
  });
});

// count number
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".number");
  console.log("Counters found:", counters.length);

  counters.forEach((counter) => {
    const target = +counter.getAttribute("data-number");
    console.log("Target:", target);

    const updateCount = () => {
      const count = +counter.innerText;
      console.log("Current count:", count);

      const increment = target / 100;
      if (count < target) {
        counter.innerText = Math.ceil(count + increment);
        setTimeout(updateCount, 80);
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  });
});

// carousel testi
$(".latest-news-carousel").owlCarousel({
  autoplay: true,
  smartSpeed: 2000,
  center: false,
  dots: true,
  loop: true,
  margin: 25,
  nav: true,
  navText: [
    '<i class="bi bi-arrow-left"></i>',
    '<i class="bi bi-arrow-right"></i>',
  ],
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    576: {
      items: 1,
    },
    768: {
      items: 2,
    },
    992: {
      items: 3,
    },
    1200: {
      items: 4,
    },
  },
});

function calculate() {
  // Ambil nilai dari checkbox
  const penginapan = document.getElementById("penginapan").checked
    ? 1000000
    : 0;
  const transportasi = document.getElementById("transportasi").checked
    ? 1200000
    : 0;
  const servis = document.getElementById("servis").checked ? 500000 : 0;

  // Total harga paket
  const hargaPaket = penginapan + transportasi + servis;

  // Ambil jumlah peserta dan waktu
  const jumlahPeserta =
    parseInt(document.getElementById("jumlahPeserta").value) || 0;
  const waktu =
    (new Date(document.getElementById("waktu").value) -
      new Date(document.getElementById("tanggal").value)) /
      (1000 * 60 * 60 * 24) || 0;

  // Tambahkan harga pendaftaran (200.000 per orang)
  const hargaPendaftaran = jumlahPeserta * 200000;

  // Hitung harga paket per peserta dan tagihan
  const totalHargaPaket = hargaPaket + hargaPendaftaran;
  const totalTagihan = waktu * jumlahPeserta * totalHargaPaket;

  // Update input harga dan tagihan
  document.getElementById("harga").value = totalHargaPaket;
  document.getElementById("tagihan").value = totalTagihan;
}
