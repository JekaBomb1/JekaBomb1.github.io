let tg = window.Telegram.WebApp;

tg.expand();
tg.MainButton.setText("Просмотреть заказ");
tg.MainButton.show();
tg.MainButton.onClick('click', function() {

});

let to_cart_btns = document.querySelectorAll(".button_cart"); // распологать после показа всех товаров меню
for (i = 0; i < to_cart_btns.length; i++) {
    to_cart_btns[i].addEventListener("click", function(e) {
        document.getElementById(e.target.id).classList.add("button_cart_plus");
        document.getElementById(e.target.id).innerHTML = "+";
        document.getElementById(e.target.id).classList.add("button_text_pressed");
    });
}