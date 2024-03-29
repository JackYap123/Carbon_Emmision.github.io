<?php
  include_once("php/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Carbon Emmision</title>
  <meta property="og:title" content="Carbon Emmision" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    blockquote,
    figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"]button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth
    }
  </style>
  <style data-tag="default-style-sheet">
    html {
      font-family: Inter;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-gray-black);
      background-color: var(--dl-color-gray-white);

    }
  </style>

  <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
  <style>
    @keyframes fade-in-left {
      0% {
        opacity: 0;
        transform: translateX(-20px);
      }

      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }
  </style>
</head>

<body>
  <link rel="stylesheet" href="css/style_1.css" />
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">

  </script>
  <div>
    <link rel="stylesheet" href="css/index.css" />

    <div class="home-container">
      <div class="home-hero">
        <div class="heroContainer home-hero1">
          <div class="home-container1">
            <h1 class="home-hero-heading heading1">
              Calculate Your Carbon Footprint
            </h1>
            <div class="home-btn-group">
              <a href="#CAL"><button class="buttonFilled">Get Started</button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="home-features">
        <div class="featuresContainer">
          <div class="home-features1">
            <div class="home-container2">
              <h2 class="home-features-heading heading2" id="CAL">Carbon Calculator</h2>
              <span class="home-features-sub-heading bodyLarge">
                Enter Your Information To Calculate the Carbon Emmision
              </span>
            </div>
            <div class="home-container3">
              <div class="featuresCard feature-card-feature-card">
                <img src="Image/Electric_Icon.jpg" style="height: 50px; width:50px">
                <svg class="featuresIcon">
                  <path d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"></path>
                </svg>
                <div class="feature-card-container">
                  <h3 class="feature-card-text heading3">
                    <span>Electric</span>
                  </h3>
                  <span class="bodySmall">
                    <span>
                      All household appliances
                      have carbon emissions,
                      please turn them off
                      when not in use
                    </span>
                  </span>
                </div>
              </div>
              <div class="featuresCard feature-card-feature-card">
                <img src="Image/Car_Icon.jpg" style="height: 50px; width:50px">
                <svg class="featuresIcon">
                  <path d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"></path>
                </svg>
                <div class="feature-card-container">
                  <h3 class="feature-card-text heading3">
                    <span>Car Carbon Emmision</span>
                  </h3>
                  <span class="bodySmall">
                    <span>
                      Get instant calculations of your carbon footprint based
                      on your activities
                    </span>
                  </span>
                </div>
              </div>
              <div class="featuresCard feature-card-feature-card">
                <img src="Image/Food_Icon.png" style="width:50px; height:50px">
                <svg class="featuresIcon">
                  <path d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"></path>
                </svg>
                <div class="feature-card-container">
                  <h3 class="feature-card-text heading3">
                    <span>Food Wasted</span>
                  </h3>
                  <span class="bodySmall">
                    <span>
                      Receive tailored suggestions to reduce your
                      environmental impact
                    </span>
                  </span>
                </div>
              </div>
              <div class="featuresCard feature-card-feature-card">
                <img src="Image/RecycleBin_Icon.jpg" style="width:50px; height:50px">
                <svg class="featuresIcon">
                  <path d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"></path>
                </svg>
                <div class="feature-card-container">
                  <h3 class="feature-card-text heading3">
                    <span>Garbage Classification</span>
                  </h3>
                  <span class="bodySmall">
                    <span>
                      Engage with friends through challenges and share your
                      progress
                    </span>
                  </span>
                </div>
              </div>
              <div class="featuresCard feature-card-feature-card">
                <img src="Image/Solar_Energy_Icon.jpg" style="width:50px; height:50px">
                <svg class="featuresIcon">
                  <path d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"></path>
                </svg>
                <div class="feature-card-container">
                  <h3 class="feature-card-text heading3">
                    <span>Nature's Power Supply</span>
                  </h3>
                  <span class="bodySmall">
                    <span>
                      Engage with friends through challenges and share your
                      progress
                    </span>
                  </span>
                </div>
              </div>
              <div class="featuresCard feature-card-feature-card">
                <img src="Image/Buying_Icon.jpg" style="width:50px; height:50px;">
                <svg class="featuresIcon">
                  <path d="M809.003 291.328l-297.003 171.819-297.003-171.819 275.456-157.397c4.779-2.731 9.899-4.48 15.147-5.333 9.301-1.451 18.987 0.128 27.904 5.291zM491.776 979.669c6.016 3.243 12.928 5.077 20.224 5.077 7.381 0 14.336-1.877 20.395-5.163 15.189-2.475 29.909-7.68 43.392-15.36l298.709-170.709c26.368-15.232 45.269-38.315 55.424-64.597 5.675-14.592 8.619-30.165 8.747-46.251v-341.333c0-20.395-4.821-39.723-13.397-56.917-0.939-3.029-2.219-5.973-3.883-8.832-1.963-3.371-4.267-6.357-6.912-8.96-1.323-1.835-2.731-3.669-4.139-5.419-9.813-12.203-21.845-22.528-35.456-30.507l-299.051-170.88c-26.027-15.019-55.467-19.84-83.328-15.531-15.531 2.432-30.507 7.637-44.288 15.488l-298.709 170.709c-16.341 9.429-29.824 21.888-40.149 36.267-2.56 2.56-4.864 5.547-6.784 8.832-1.664 2.901-2.987 5.888-3.925 8.96-1.707 3.456-3.243 6.955-4.608 10.496-5.632 14.635-8.576 30.208-8.704 45.995v341.632c0.043 30.293 10.581 58.197 28.331 80.128 9.813 12.203 21.845 22.528 35.456 30.507l299.051 170.88c13.824 7.979 28.587 13.099 43.605 15.445zM469.333 537.045v340.949l-277.12-158.336c-4.736-2.773-8.832-6.315-12.16-10.411-5.931-7.381-9.387-16.512-9.387-26.581v-318.379zM554.667 877.995v-340.949l298.667-172.757v318.379c-0.043 5.163-1.067 10.496-2.987 15.445-3.413 8.789-9.6 16.384-18.176 21.333z"></path>
                </svg>
                <div class="feature-card-container">
                  <h3 class="feature-card-text heading3">
                    <span>Flood buying</span>
                  </h3>
                  <span class="bodySmall">
                    <span>
                      Engage with friends through challenges and share your
                      progress
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="home-pricing"></div>
      <div class="home-banner">
        <div class="bannerContainer home-banner1">
          <h1 class="home-banner-heading heading2">
            Create a Sustainable Lifestyle with Our App
          </h1>
          <span class="home-banner-sub-heading bodySmall">
            <span>
              Our app helps you monitor and reduce your carbon footprint
              by tracking transportation, energy use, and diet. Receive
              personalized recommendations and join challenges to make a
              positive impact on the environment. Start your journey
              towards a greener future today!
            </span>
          </span>
          <button class="buttonFilled">Learn More</button>
        </div>
      </div>
      <div class="home-faq">
        <div class="faqContainer">
          <div class="home-faq1">
            <div class="container-fluid">

              <div class="row">
                <div class="col-xl-12 pa-0">

                  <div class="container mt-sm-60 mt-30">
                    <div class="hk-row">
                      <div class="col-xl-4">
                      <h3 class="TitleFAQ">
                            Terms and Conditions
                        </h3>
                      </div>
                      <div class="col-xl-8">
                        <div class="card card-lg">
                          <h3 class="card-header border-bottom-0">
                            Terms and Conditions
                          </h3>
                          <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                            <div class="card">
                              <div class="card-header d-flex justify-content-between activestate">
                                <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">The Intellectual Property</a>
                              </div>
                              <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                <div class="card-body pa-15">The Intellectual Property disclosure will
                                  inform users that the contents, logo and other visual media you created
                                  is your property and is protected by copyright laws.</div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header d-flex justify-content-between">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Termination clause</a>
                              </div>
                              <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                <div class="card-body pa-15">A Termination clause will inform that users’
                                  accounts on your website and mobile app or users’ access to your website
                                  and mobile (if users can’t have an account with you) can be terminated
                                  in case of abuses or at your sole discretion.</div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header d-flex justify-content-between">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">Governing Law</a>
                              </div>
                              <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                <div class="card-body pa-15">A Governing Law will inform users which laws
                                  govern the agreement. This should the country in which your company is
                                  headquartered or the country from which you operate your website and
                                  mobile app.</div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header d-flex justify-content-between">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">Limit what users can do</a>
                              </div>
                              <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                <div class="card-body pa-15">A Limit What Users Can Do clause can inform
                                  users that by agreeing to use your service, they’re also agreeing to not
                                  do certain things. This can be part of a very long and thorough list in
                                  your Terms and Conditions agreements so as to encompass the most amount
                                  of negative uses.</div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header d-flex justify-content-between">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">Limitation of liability of
                                  your products</a>
                              </div>
                              <div id="collapse_5i" class="collapse" data-parent="#accordion_2">
                                <div class="card-body pa-15">No matter what kind of goods you sell, best
                                  practices direct you to present any warranties you are disclaiming and
                                  liabilities you are limiting in a way that your customers will notice.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header d-flex justify-content-between">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_6i" aria-expanded="false">How to enforce Terms and
                                  Conditions</a>
                              </div>
                              <div id="collapse_6i" class="collapse" data-parent="#accordion_2">
                                <div class="card-body pa-15">While creating and having a Terms and
                                  Conditions is important, it’s far more important to understand how you
                                  can make the Terms and Conditions enforceable. You should always use
                                  clickwrap to get users to agree to your Terms and Conditions. Clickwrap
                                  is when you make your users take some action – typically clicking
                                  something – to show they’re agreeing. Here’s how Engine Yard uses the
                                  clickwrap agreement with the I agree check box:</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
      <div class="home-footer">
        <footer class="footerContainer home-footer1">
          <div class="home-separator"></div>
          <div class="home-container6">
            <span class="bodySmall home-text52">
              © 2023 myCompany, All Rights Reserved.
            </span>
            <div class="home-icon-group1">
              <svg viewBox="0 0 950.8571428571428 1024" class="home-icon10 socialIcons">
                <path d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"></path>
              </svg><svg viewBox="0 0 877.7142857142857 1024" class="home-icon12 socialIcons">
                <path d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"></path>
              </svg><svg viewBox="0 0 602.2582857142856 1024" class="home-icon14 socialIcons">
                <path d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"></path>
              </svg>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script data-section-id="navbar" src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
</body>

</html>