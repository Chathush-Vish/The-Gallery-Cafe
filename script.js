// Admin dashboard
document.addEventListener("DOMContentLoaded", () => {
   // tab-menu
   let tab_1 = document.querySelector(".tab-1");
   let tab_2 = document.querySelector(".tab-2");
   let tab_3 = document.querySelector(".tab-3");
   let tab_4 = document.querySelector(".tab-4");

   //sections
   let sec_1 = document.querySelector(".sec-1");
   let sec_2 = document.querySelector(".sec-2");
   let sec_3 = document.querySelector(".sec-3");
   let sec_4 = document.querySelector(".sec-4");

   if (tab_1 && sec_1) {
      tab_1.addEventListener("click", function () {
         tab_1.classList.add("active");
         if (tab_2) tab_2.classList.remove("active");
         if (tab_3) tab_3.classList.remove("active");
         if (tab_4) tab_4.classList.remove("active");
         sec_1.classList.add("active");
         if (sec_2) sec_2.classList.remove("active");
         if (sec_3) sec_3.classList.remove("active");
         if (sec_4) sec_4.classList.remove("active");
      });
   }

   if (tab_2 && sec_2) {
      tab_2.addEventListener("click", function () {
         tab_2.classList.add("active");
         if (tab_1) tab_1.classList.remove("active");
         if (tab_3) tab_3.classList.remove("active");
         if (tab_4) tab_4.classList.remove("active");
         sec_2.classList.add("active");
         if (sec_1) sec_1.classList.remove("active");
         if (sec_3) sec_3.classList.remove("active");
         if (sec_4) sec_4.classList.remove("active");
      });
   }

   if (tab_3 && sec_3) {
      tab_3.addEventListener("click", function () {
         tab_3.classList.add("active");
         if (tab_1) tab_1.classList.remove("active");
         if (tab_2) tab_2.classList.remove("active");
         if (tab_4) tab_4.classList.remove("active");
         sec_3.classList.add("active");
         if (sec_1) sec_1.classList.remove("active");
         if (sec_2) sec_2.classList.remove("active");
         if (sec_4) sec_4.classList.remove("active");
      });
   }

   if (tab_4 && sec_4) {
      tab_4.addEventListener("click", function () {
         tab_4.classList.add("active");
         if (tab_1) tab_1.classList.remove("active");
         if (tab_2) tab_2.classList.remove("active");
         if (tab_3) tab_3.classList.remove("active");
         sec_4.classList.add("active");
         if (sec_1) sec_1.classList.remove("active");
         if (sec_2) sec_2.classList.remove("active");
         if (sec_3) sec_3.classList.remove("active");
      });
   }
});
