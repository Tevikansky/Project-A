const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo-dark");
const mMenuToggle = document.querySelector(".mobile-menu");
const menu = document.querySelector(".mobile-menu-main");
const isFront = document.body.classList.contains("front-page");
const lightModeOn = (block) => {
  block.classList.add("navbar-light");

};
const lightModeOff = (block) => {
  block.classList.remove("navbar-light");

};

const changeNavHeight = (height) => {
  navbar.style.height = height;
}

const openMenu = (event) => {
  // функцияя открывания мею
  menu.classList.add("is-open");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden";
  lightModeOn();

};
const closeMenu = (event) => {
  // функцияя закрывания мею
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = "";
  this.scrollY < 1 ? lightModeOff() : lightModeOn();
};
console.log(window.screen.width)

window.addEventListener("scroll", () => {
  // this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  // if (window.screen.width < 992) {
  //   this.scrollY > 1 ? changeMobileMenuPadding("18px 21px 16px 31px") : changeMobileMenuPadding("27px 21px 26px 31px");
  // } else {
  //   changeMobileMenuPadding("0px");
  // }

  if (isFront) {
    this.scrollY > 1 ? lightModeOn(navbar) : lightModeOff(navbar);
  } else {
    const headerPageNav = document.querySelector(".header-page-navbar");
    this.scrollY > 1 ? lightModeOn(headerPageNav) : lightModeOff(headerPageNav);
  }
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();
});

const swiper = new Swiper('.swiper-features', {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    300: {
      slidesOffsetAfter: 362,
      slidesPerView: 2,
    },
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 640px
    1200: {
      slidesPerView: 5,
    }
  },

});
const swiperWork = new Swiper('.swiper-work', {
  speed: 500,
  autoHeight: false,
  width: 1320,
  slidesPerView: 1,
  navigation: {
    nextEl: '.steps-button-next',
    prevEl: '.steps-button-prev',
  },
  breakpoints: {
    // when window width is >= 300px
    300: {
      slidesPerView: 2,
      slidesOffsetAfter: 400,
      width: 500
    },
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 640px
    1200: {
      slidesPerView: 4,
    }
  },

});

const swiperBlog = new Swiper('.swiper-blog', {
  speed: 500,
  spaceBetween: 30,
  slidesPerView: 2,
  navigation: {
    nextEl: '.blog-button-next',
    prevEl: '.blog-button-prev',
  },
  breakpoints: {
    // when window width is >= 300px
    300: {
      slidesPerView: 1,
    },
    1200: {
      slidesPerView: 2,
    }
  }
});

const swiperProduction = new Swiper('.swiper-production', {
  loop: true,
  slidesPerView: 4,
  speed: 500,
  autoHeight: false,
  width: 1470,
  slidesOffsetBefore: 241,
  navigation: {
    nextEl: '.blog-button-next',
    prevEl: '.blog-button-prev',
  },
  breakpoints: {
    // when window width is >= 300px
    300: {
      slidesPerView: 1,
      slidesOffsetBefore: 16,
      width: 375,
      spaceBetween: -20,
    },
    1200: {
      slidesPerView: 2,
      slidesOffsetBefore: 241,
    }
  }
});





let currentModal;
let modalDialog;
let alertModal = document.querySelector("#alert-modal");


const modalButtons = document.querySelectorAll("[data-toggle=modal]");
modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target);
    currentModal.classList.toggle("is-open");
    modalDialog = currentModal.querySelector(".modal-dialog");
    currentModal.addEventListener("click", (event) => {
      if (!event.composedPath().includes(modalDialog)) {
        currentModal.classList.remove("is-open")
      }
    });
  });
});





document.addEventListener('keyup', (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});








const forms = document.querySelectorAll("form");
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField('[name=username]', [{
        rule: 'required',
        errorMessage: "Укажите имя",
      },
      {
        rule: 'maxLength',
        value: 30,
        errorMessage: "Максимально 30 символов",
      },
    ])
    .addField('[name=userphone]', [{
      rule: 'required',
      errorMessage: 'Укажите телефон',
    }, ])
    .onSuccess((event) => {
      const thisForm = event.target;
      const formData = new FormData(thisForm);
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            currentModal.classList.remove("is-open");
            alertModal.classList.add("is-open");
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");
            currentModal.addEventListener("click", (event) => {
              if (!event.composedPath().includes(modalDialog)) {
                currentModal.classList.remove("is-open")
              }
            });
          } else {
            alert("Ошибка. Текст ошибки: "
              .response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});
/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});