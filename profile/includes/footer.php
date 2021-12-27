    <footer>
        <div class="footer-main-content">
            <div class="footer-main">
                <div class="footer-main-left">
                <h2>Our Seervices</h2>
                    A one stop online shop Where all </br>
                    your computing needs are met </br>
                    From your software needs to hadware </br>forgeting
                    not repair.
                </div>
                <div class="footer-main-right">
                    <h2>Links</h2>
                    <li>Home</li>
                    <li>Market</li>
                    <li>Cart</li>
                    <li>Help</li>
                
                </div>
            </div>
            
            
            <div class="footer-right">
                <div class="footer-right-left">
                    <h2>Our Products</h2>
                    <li>Hardware</li>
                    <li>Software</li>
                    <li>Repair</li>
                </div>
                <div class="footer-right-right">
                    <h2>Categories</h2>
                    <li>Laptops</li>
                    <li>workstations</li>
                    <li>servers</li>
                    <li>Phones</li>
                </div>
            
            </div>
        </div>
        
        <div class="footer-footer">
            <h1>Infinite</h1>
                <p>Copyright Infinite@2021</p>
        </div>
        
    </footer>
    <script src="/static/index.js"></script>
    <script>
        const navslide = () => {
            const burger = document.querySelector('.burger');
            const navi = document.querySelector('.nav-toggle');
            const navDrop = document.querySelector('.nav-drop');
            const nav = document.querySelector('nav');

            
            burger.addEventListener('click', () => {
                navi.classList.toggle('active');

                burger.classList.toggle('toggle');

            })

        }
        
        const navbar = document.getElementById("navbar");

        const sticky = navbar.offsetTop;
        window.onscroll = function(){
            if (window.pageYOffset > sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        };
        //Theme tonggle

        const themeToggler = document.getElementById("theme");
        const navColor = document.querySelector(".nav-container");
        const body = document.getElementById("body");
        themeToggler.addEventListener("click", () => {
            navColor.classList.toggle("dark");
            body.classList.toggle('dark-body');
            console.log("Toggler clicked");
        })
        navslide();
    </script>

    
</body>


</html>
