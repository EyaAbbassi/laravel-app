
<div class='footer-container'>
      <section class='footer-subscription'>
        <p class='footer-subscription-heading'>
          Join our newsletter to receive our best deals
        </p>
        <p class='footer-subscription-text'>
          You can unsubscribe at any time.
        </p>
        <div class='input-areas'>
          <form>
            <input
              class='footer-input'
              name='email'
              type='email'
              placeholder='Your Email'
            />
            <Button buttonStyle='btn--outline'>Subscribe</Button>
          </form>
        </div>
      </section>
      <div class='footer-links'>
        <div class='footer-link-wrapper'>
          <div class='footer-link-items'>
            <h2>About Us</h2>
            <a href='/sign-up'>How it works</a>
            <a href='/'>Testimonials</a>
            <a href='/'>Careers</a>
            <a href='/'>Investors</a>
            <a href='/'>Terms of Service</a>
          </div>
          <div class='footer-link-items'>
            <h2>Contact Us</h2>
            <a href='/'>Contact</a>
            <a href='/'>Support</a>
            <a href='/'>Destinations</a>
            <a href='/'>Sponsorships</a>
          </div>
        </div>
        <div class='footer-link-wrapper'>
          <div class='footer-link-items'>
            <h2>Videos</h2>
            <a href='/'>Submit Video</a>
            <a href='/'>Ambassadors</a>
            <a href='/'>Agency</a>
            <a href='/'>Influencer</a>
          </div>
          <div class='footer-link-items'>
            <h2>Social Media</h2>
            <a href='/'>Instagram</a>
            <a href='/'>Facebook</a>
            <a href='/'>Youtube</a>
            <a href='/'>Twitter</a>
          </div>
        </div>
      </div>
      <section class='social-media'>
        <div class='social-media-wrap'>
        
          <small class='website-rights'>Mall stand © 2021</small>
         
        </div>
      </section>
    </div>
    
    <style>
 .footer-container {
  background-color: #D77709;
  padding: 4rem 0 2rem 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color : #D77709;
}

.footer-subscription {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;

  margin-bottom: 24px;
  padding: 24px;
  color: #3A1703;
}

.footer-subscription > p {
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
}

.footer-subscription-heading {
  margin-bottom: 24px;
  font-size: 24px;
}

.footer-subscription-text {
  margin-bottom: 24px;
  font-size: 20px;
}

.footer-input {
  padding: 8px 20px;
  border-radius: 2px;
  margin-right: 10px;
  outline: none;
  border: none;
  font-size: 18px;
  margin-bottom: 16px;
  border: 1px solid #0AE2FF;
}

.footer-links {
  width: 100%;
  max-width: 1000px;
  display: flex;
  justify-content: center;
}

.footer-link-wrapper {
  display: flex;
}

.footer-link-items {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin: 16px;
  text-align: left;
  width: 160px;
  box-sizing: border-box;
}

.footer-link-items h2 {
  margin-bottom: 16px;
}

.footer-link-items > h2 {
  color: #f2e8cf;
}

.footer-link-items a {
  color: #f2e8cf;
  text-decoration: none;
  margin-bottom: 0.5rem;
}

.footer-link-items a:hover {
  color: #e9e9e9;
  transition: 0.3s ease-out;
}

.footer-email-form h2 {
  margin-bottom: 2rem;
}

.footer-input::placeholder {
  color: #b1b1b1;
}

/* Social Icons */
.social-icon-link {
  color: #f2e8cf;
  font-size: 24px;
}

.social-media {
  max-width: 1000px;
  width: 100%;
}

.social-media-wrap {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 90%;
  max-width: 1000px;
  margin: 40px auto 0 auto;
}

.social-icons {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 240px;
}

.social-logo {
  color: #f2e8cf;
  justify-self: start;
  margin-left: 20px;
  cursor: pointer;
  text-decoration: none;
  font-size: 2rem;
  display: flex;
  align-items: center;
  margin-bottom: 16px;
}

.website-rights {
  color: #f2e8cf;
  margin-bottom: 16px;
}

@media screen and (max-width: 820px) {
  .footer-links {
    padding-top: 2rem;
  }

  .footer-input {
    width: 100%;
  }

  .btn {
    width: 100%;
  }

  .footer-link-wrapper {
    flex-direction: column;
  }

  .social-media-wrap {
    flex-direction: column;
  }
}

@media screen and (max-width: 768px) {
}

 </style>