window.addEventListener("load", function () {
    var logo = document.getElementById("loadd");

    setTimeout(function () {
        logo.classList.add("f");
        logo.style.display = "none";

        var pageContent = document.getElementById("logo-content");
        pageContent.classList.add("f");
        pageContent.style.display = "block";
    }, 800);
});

function changeBackgroundAndContent() {
    var backgrounds = [
        "../images/pexels-ken-tomita-389818.jpg",
        "../images/pexels-cottonbro-studio-4069289.jpg",
        "../images/pexels-rdne-stock-project-6069237.jpg",
    ];
    var contentArray = [
        {
            heading: "ميكروسمارت",
            content: "نحن الصلة بين الموهبة والإبداع",
            buttonText1: "ميكروسمارت ",
            buttonText2: "تواصل معنا ",
        },
        {
            heading: "الاستراتيجة",
            content: "نحن الصلة بين التخطيط والأهداف",
            buttonText1: "الاستراتيجية",
            buttonText2: "تواصل معنا ",
        },
        {
            heading: "تكنولوجيا المعلومات",
            content: "طريقك نحو تحقيق افكارك الابداعية",
            buttonText1: "تكنولوجيا المعلومات",
            buttonText2: "تواصل معنا ",
        },
    ];

    var currentBackground = 0;
    var currentContent = 0;
    var img = document.querySelector("#img1");
    let slid1 = document.getElementById("bu1");
    let slid2 = document.getElementById("bu2");
    let slid3 = document.getElementById("bu3");

    var container = document.querySelector(".Home-text");
    var headingElement = document.getElementById("heading");
    var contentElement = document.getElementById("content");
    var buttonElement1 = document.getElementById("button1");
    var buttonElement2 = document.getElementById("button2");

    setInterval(function () {
        currentBackground = (currentBackground + 1) % backgrounds.length;
        currentContent = (currentContent + 1) % contentArray.length;

        container.classList.add("hidden");
        img1.classList.add("buSlide");

        setTimeout(function () {
            img.style.backgroundImage =
                "url(" + backgrounds[currentBackground] + ")";
            headingElement.textContent = contentArray[currentContent].heading;
            contentElement.textContent = contentArray[currentContent].content;
            buttonElement1.textContent =
                contentArray[currentContent].buttonText1;
            buttonElement2.textContent =
                contentArray[currentContent].buttonText2;

            container.classList.remove("hidden");
        }, 500);
        img1.classList.remove("buSlide");
    }, 3000);
}

window.onload = changeBackgroundAndContent;

window.onscroll = function () {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
        navbar.classList.remove("sticky");
    } else {
        navbar.classList.add("sticky");
    }
    prevScrollPos = currentScrollPos;
};

window.addEventListener("scroll", function () {
    let nav = document.getElementById("nav");
    nav.classList.toggle("st", scrollY > 175);
});

window.addEventListener("scroll", function () {
    let arr = document.getElementById("arr");
    arr.classList.toggle("vi", scrollY > 220);
    arr.classList.toggle("fade-in", scrollY > 220);
});

// Start of auto Slideshow
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
        myIndex = 1;
    }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
// End of auto Slideshow
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides((slideIndex += n));
}

function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function showHideElements() {
    var workingCondition = document.getElementById("workingCondition").value;
    if (workingCondition === "طالب") {
        document.getElementById("student").style.display = "block";
    } else {
        document.getElementById("student").style.display = "none";
    }

    if (workingCondition === "خريج") {
        document.getElementById("graduate").style.display = "block";
    } else {
        document.getElementById("graduate").style.display = "none";
    }

    if (workingCondition === "موظف") {
        document.getElementById("employee").style.display = "block";
    } else {
        document.getElementById("employee").style.display = "none";
    }
}

function showtran() {
    document.getElementById("tran").style.display = "block";
}

function hidetran() {
    document.getElementById("tran").style.display = "none";
}

function showC() {
    document.getElementById("newC").style.display = "block";
}

function hideC() {
    document.getElementById("newC").style.display = "none";
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    document.getElementById("myDropdown1").classList.remove("show");
    document.getElementById("myDropdown-side").classList.remove("show");
    document.getElementById("myDropdown-side2").classList.remove("show");
}
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
    document.getElementById("myDropdown").classList.remove("show");
    document.getElementById("myDropdown-side").classList.remove("show");
    document.getElementById("myDropdown-side2").classList.remove("show");
}
function myFunctionside() {
    document.getElementById("myDropdown-side").classList.toggle("show");
    document.getElementById("myDropdown1").classList.add("show");
    document.getElementById("myDropdown-side2").classList.remove("show");
}
function myFunctionside2() {
    document.getElementById("myDropdown-side2").classList.toggle("show");
    document.getElementById("myDropdown1").classList.add("show");
    document.getElementById("myDropdown-side").classList.remove("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches(".dropbtn")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var dropdowns1 = document.getElementsByClassName(
            "dropdown-content-side"
        );
        var dropdowns2 = document.getElementsByClassName(
            "dropdown-content-side2"
        );
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
        for (i = 0; i < dropdowns1.length; i++) {
            var openDropdown = dropdowns1[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
        for (i = 0; i < dropdowns2.length; i++) {
            var openDropdown = dropdowns2[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
};
