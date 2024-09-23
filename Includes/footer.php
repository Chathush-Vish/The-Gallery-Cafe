 <style>
   /* footer */
/* Colors */
:root {
   --primaryColor: #ffa51d;
   --primaryBlack: #111111;
   --seconderyCream: #f5dea8;
   --lightGreen: #b5e48c;
   --mainWhite: #ffffff;
   --seconderyText: #2f3e46;
}

/* Globel styles */
* {
   padding: 0;
   margin: 0;
   box-sizing: border-box;
   transition: all 0.2s ease-in-out;
}

body {
   color: var(--primaryBlack);
   font-family: "Poppins", sans-serif;
}

a {
   text-decoration: none;
   color: var(--primaryBlack);
}

ul {
   list-style: none;
}

button {
   display: flex;
   align-items: center;
   justify-content: center;
   font-weight: 500;
   font-size: 0.95em;
   cursor: pointer;
   border-radius: 4px;
}

input:focus {
   outline: none;
}

textarea:focus {
   outline: none;
}

h1,
h2 {
   transition: all ease-in-out 0.2s;
}

/* style classes */
.flex {
   display: flex;
   align-items: start;
}

.center {
   display: flex;
   align-items: center;
   justify-content: center;
}

.between {
   display: flex;
   align-items: center;
   justify-content: space-between;
}

.between-y {
   display: flex;
   width: 100%;
   flex-direction: column;
   align-items: start;
   justify-content: space-between;
}

.column {
   display: flex;
   flex-direction: column;
}

.start {
   display: flex;
   align-items: start;
   justify-content: start;
   flex-direction: column;
}

.w-100 {
   width: 100%;
}

.w-50 {
   width: 50%;
}

.vh-100 {
   height: 100vh;
}

.vh-50 {
   height: 50vh;
}

.padding-x {
   padding-left: 150px;
   padding-right: 150px;
}

.padding-y {
   padding-top: 70px;
   padding-bottom: 70px;
}

.marging-x {
   margin-left: 150px;
   margin-right: 150px;
}

.marging-y {
   margin-top: 70px;
   margin-bottom: 70px;
}

.pt {
   padding-top: 50px;
}

.g-1 {
   gap: 10px;
}

.g-2 {
   gap: 20px;
}

.g-3 {
   gap: 30px;
}

.g-4 {
   gap: 40px;
}

.g-5 {
   gap: 50px;
}

.g-8 {
   gap: 80px;
}


footer {
   background: #111;
   color: #898989;
   margin-top: 70px;
}

.footer {
   align-items: start;
   justify-content: space-between;
   display: flex;
   padding-top: 70px;
   padding-bottom: 30px;
}

footer a {
   color: #898989;
}

.footer a:hover {
   color: var(--mainOrange);
}

footer .sub-link {
   align-items: start;
   justify-content: start;
   display: flex;
   flex-direction: column;
}

footer .line {
   width: 90%;
   height: 1px;
   background-color: #464646;
}

footer .copyright {
   padding: 15px 0;
}

footer input {
   height: 35px;
   padding: 5px 10px;
   width: 220px;
   border: none;
   border-radius: 3px 0 0 3px;
}

footer input:focus {
   outline-style: none;
}

footer button {
   height: 35px;
   width: 70px;
   border: none;
   border-radius: 0 3px 3px 0;
   background-color: #6b6b6b;
   color: #111;
   font-weight: 600;
   text-transform: uppercase;
   font-size: 12px;
   color: #464646;
}

footer img {
   cursor: pointer;
   opacity: 1;
}

footer img:hover {
   opacity: 1;
}

 </style>
 
 <!-- footer -->
 <footer class="w-100 center column">
         <div class="footer between w-100 padding-x">
            <div class="flex column g-3">
               <a href="./index.html" class="center logo n-link">
                  <h3><span>The</span> Gallery Cafe</h3>
               </a>
               <div class="newsletter flex">
                  <input type="text" placeholder="Email address" />
                  <button>Submit</button>
               </div>
               <div class="media flex g-1">
                  <img src="./assets/media/fb.png" alt="" width="35px" />
                  <img src="./assets/media/insta.png" alt="" width="35px" />
                  <img src="./assets/media/wa.png" alt="" width="35px" />
                  <img src="./assets/media/linkdin.png" alt="" width="35px" />
                  <img src="./assets/media/yt.png" alt="" width="35px" />
               </div>
            </div>
            <div class="main-link flex column g-1">
               <a href="#">Home</a>
               <a href="#">About Us</a>
               <a href="#">Appoinment</a>
               <a href="#">Services</a>
               <a href="#">Contact Us</a>
            </div>
            <div class="sub-link g-1">
               <a href="#">Privacy & policy</a>
               <a href="#">Terms & Conditions</a>
               <a href="#">F&Q</a>
               <a href="#">Reviews</a>
            </div>
            <div class="con-det center column g-1">
               <p>example@gallerycafe.com</p>
               <div>
                  <p>+94 77 5858 369</p>
                  <p>+94 57 1234 546</p>
               </div>
               <p>Main street, Vihara mawatha, Colombo 07</p>
            </div>
         </div>
         <div class="line"></div>
         <div class="copyright">
            &copy 2024 The gallery cafe. All rights reserved.
         </div>
      </footer>
