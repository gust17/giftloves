function windowScroll() {
    var t = document.getElementById("navbar");
    t && (50 <= document.body.scrollTop || 50 <= document.documentElement.scrollTop ? t.classList.add("is-sticky") : t.classList.remove("is-sticky"))
}

window.addEventListener("scroll", function (t) {
    t.preventDefault(), windowScroll()
});
var filterBtns = document.querySelectorAll(".filter-btns .nav-link"),
    productItems = document.querySelectorAll(".product-item"), swiper = (Array.from(filterBtns).forEach(function (t) {
        t.addEventListener("click", function (t) {
            t.preventDefault();
            for (var e = 0; e < filterBtns.length; e++) filterBtns[e].classList.remove("active");
            this.classList.add("active");
            var n = t.target.dataset.filter;
            Array.from(productItems).forEach(function (t) {
                "all" === n || t.classList.contains(n) ? t.style.display = "block" : t.style.display = "none"
            })
        })
    }), new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        autoplay: { delay: 10000, disableOnInteraction: false }, // Aumente o valor de delay
        pagination: { el: ".swiper-pagination", clickable: true },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        breakpoints: { 576: { slidesPerView: 6 }, 768: { slidesPerView: 6 }, 1200: { slidesPerView: 6 } }
    })), mybutton = document.getElementById("back-to-top");

function scrollFunction() {
    100 < document.body.scrollTop || 100 < document.documentElement.scrollTop ? mybutton.style.display = "block" : mybutton.style.display = "none"
}

function topFunction() {
    document.body.scrollTop = 0, document.documentElement.scrollTop = 0
}

window.onscroll = function () {
    scrollFunction()
};
