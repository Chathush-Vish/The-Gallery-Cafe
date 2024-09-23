let okBtn = document.querySelectorAll(".ok-btn");
let notify = document.querySelectorAll(".notify");

okBtn.forEach((n) => {
   n.addEventListener("click", function (e) {
      e.preventDefault();
      notify.forEach((x) => {
         x.style.display = "none";
         if (e.target.id === "home") {
            window.location.href = "http://localhost/cafe/index.php";
         } else if (e.target.id === "log") {
            window.location.href = "http://localhost/cafe/login.php";
         } else if (e.target.id === "reg") {
            window.location.href = "http://localhost/cafe/register.php";
         } else if (e.target.id === "admin") {
            window.location.href = "http://localhost/cafe/admin.php";
         }
      });
   });
});
