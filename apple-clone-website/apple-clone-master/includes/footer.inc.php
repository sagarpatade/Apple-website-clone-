<style>
    
.features {
  width: 40rem;
  display: flex;
  flex-direction: column;
  gap: 4rem;
}

.features .card {
  border-left: .3rem solid red;
  padding: .3rem 1rem;

}

.card:nth-child(1),
.card:nth-child(3) {
  margin-left: 4rem;
}


footer {
  width: 100%;
  height: 500px;
  background: #f1f1f1;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.footer-main {
  width: 1070px;
}

.footer-detail {
  font-size: .7rem;
  color: #95a5a6;
  padding: 20px 0;
  border-bottom: 1px solid #bdc3c7;
}

.footer-detail a {
  color: #2c3e50;
}

.footer-detail a:hover {
  text-decoration: underline;
}

.footer-welcome {
  display: flex;
  margin: 20px 0;
  font-size: .8rem;
  color: #34495e;
}

.footer-welcome i {
  margin-right: 10px;
}

.footer-ul {
  display: flex;
  justify-content: space-between;
}

.footer-ul ul {
  list-style: none;
}

.footer-ul ul li {
  margin: 7px 0;
}

.footer-ul ul li h4 {
  color: #34495e;
  font-size: .7rem;
}

.footer-ul ul li a {
  color: #7f8c8d;
  font-size: .7rem;
}

.footer-ul ul li a:hover {
  text-decoration: underline;
}

#mt {
  padding-top: 30px;
}

.footer-contact {
  border-bottom: 1px solid #bdc3c7;
  padding: 12px 0;
  margin: 10px 0;
  color: #7f8c8d;
  font-size: .7rem;
}

.footer-contact a {
  color: #3498db;
}

.footer-contact a:hover {
  text-decoration: underline;
}

.footer-copyright {
  color: #7f8c8d;
  font-size: .7rem;
  display: flex;
  justify-content: space-between;
}

.footer-copyright ul {
  display: flex;
  list-style: none;
  width: auto;
}

.footer-copyright ul li {
  margin: 0 10px;
}

.footer-copyright ul li a {
  color: #7f8c8d;
}

.footer-copyright ul li a:hover {
  text-decoration: underline;
}

.vr {
  height: 15px;
  width: 1px;
  background: #bdc3c7;
}

.footer-lang {
  display: flex;
}

.footer-lang p {
  margin: 0 10px;
}

.circle {
  width: 15px;
  height: 15px;
}

.circle img {
  width: 100%;
  height: 100%;
  background-size: cover;
  border-radius: 50%;
}

a:hover {
  color: #3498db;
}
</style>



<footer>
<link rel="stylesheet" href="footer.css">

    <!-- <hr>
     &copy; <?php echo date('Y'); ?>  -->
  

    <div class="footer-main">
				<div class="footer-detail">
					<p>Prices are inclusive of VAT. Free delivery for all orders.</p>
					<p>*Total order value must be less than 30,000 THB. Admin fee may be charged by bank/processing
						entity in addition to order value.</p>
					<p>**For approved customers only. Subject to approval. For more information, see <a
							href="#">http://www.apple.com/th-en/help/payments.</a></p>
				</div> <!-- end footer detail -->

				<div class="footer-welcome">
					<i class="fab fa-apple"></i>
					<i class="fas fa-chevron-right"></i>
					<p>Welcome to the Apple Store</p>
				</div> <!-- end footer-welcome -->

				<div class="footer-ul">
					<ul>
						<li>
							<h4>Shop and Learn</h4>
						</li>
						<li><a href="#">Mac</a></li>
						<li><a href="#">iPad</a></li>
						<li><a href="#">iPhone</a></li>
						<li><a href="#">Apple Watch</a></li>
						<li><a href="#">TV</a></li>
						<li><a href="#">Music</a></li>
						<li><a href="#">iTunes</a></li>
						<li><a href="#">iPod Touch</a></li>
						<li><a href="#">Accessories</a></li>
						<li><a href="#">Gift Cards</a></li>
					</ul>

					<ul>
						<li>
							<h4>Apple Store</h4>
						</li>
						<li><a href="#">Apple Store App</a></li>
						<li><a href="#">Financing</a></li>
						<li><a href="#">Order Status</a></li>
						<li><a href="#">Shopping Help</a></li>
					</ul>

					<ul>
						<li>
							<h4>For Education</h4>
						</li>
						<li><a href="#">Apple and Education</a></li>
						<li><a href="#">Shop for College</a></li>
						<li id="mt">
							<h4>For Business</h4>
						</li>
						<li><a href="#">Apple and Business</a></li>
						<li><a href="#">shop for Business</a></li>
					</ul>

					<ul>
						<li>
							<h4>Account</h4>
						</li>
						<li><a href="#">Manage Your Apple ID</a></li>
						<li><a href="#">Apple Store Account</a></li>
						<li><a href="#">iClound.com</a></li>
						<li id="mt">
							<h4>Apple Values</h4>
						</li>
						<li><a href="#">Accessibility</a></li>
						<li><a href="#">Environment</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Supplier Responsibility</a></li>
					</ul>

					<ul>
						<li>
							<h4>About Apple</h4>
						</li>
						<li><a href="#">Newsroom</a></li>
						<li><a href="#">Investors</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Contact Apple</a></li>
					</ul>
				</div>

				<div class="footer-contact">
					<p>More ways to shop: visit an <a href="#">Apple Store, </a>Call 001‑800‑65‑6957, or <a
							href="#">find a seller</a></p>
				</div>
				<div class="footer-copyright">
					<p>Copyright © 2019 Apple Inc. All rights reserved.</p>

					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<div class="vr"></div>
						<li><a href="#">Terms of Use</a></li>
						<div class="vr"></div>
						<li><a href="#">Sales and Refunds</a></li>
						<div class="vr"></div>
						<li><a href="#">Legal</a></li>
						<div class="vr"></div>
						<li><a href="#">Sitemap</a></li>
					</ul>

					<div class="footer-lang">
						<div class="circle">
							<img
								src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Flag_of_Thailand.svg/1200px-Flag_of_Thailand.svg.png">
						</div>
						<p>ไทย</p>
						<div class="vr"></div>
						<p>ภาษาไทย</p>
					</div>
				</div>

			</div>
</footer>