document.addEventListener("DOMContentLoaded", () => {
    Turbolinks.start()
    document.addEventListener("turbolinks:load", function (event) {
        // console.log("page loaded");

        document.querySelector(`nav a[href="${location.pathname}"]`).classList.add('active_button');
    });
    document.addEventListener("turbolinks:before-render", function (event) {});
    document.addEventListener("turbolinks:render", function (event) {});
});
