<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Freelancer Protfilio</title>
    <script
      src="https://kit.fontawesome.com/937d72c3e9.js"
      crossorigin="anonymous"
    ></script>
    <script src="./css-js/handlebars.min.js"></script>
    <link rel="stylesheet" href="./css-js/bootstrap.css" />
    <link rel="stylesheet" href="./css-js/styles.css" />
  </head>
  <body data-spy="scroll" data-target="#nav-colps" data-offset="120">
    <!-- header -->
    <header class="navbar navbar-expand-md navbar-dark bg-info" id="header">
      <div class="container">
        <div class="navbar-brand">Start Page</div>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#nav-colps"
        >
          Menu <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="nav-colps">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contanct</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <!-- Welcoming Section -->
    <section class="bg-info text-light text-center py-5">
      <div class="container">
        <div class="d-flex flex-column f-cc" id="sec-intro">
          <img class="Avatar mb-5" src="./img/avataaars.svg" alt="Avatar" />
          <h1 class="display-3">WELCOME TO MY PORTFOLIO</h1>
          <div class="devider my-3" data-HB='{"color":"light"}'></div>
          <script
            class="HB_define_template"
            data-target-class="devider"
            type="text/x-handlebars-template"
          >
            <div class="d-flex f-cc">
              <span
                class="devider-hr p-0 m-0"
                style="background-color: var(--{{color}})"
              ></span>
              <span>
                <i
                  class="fa-2x fas fa-star mx-3"
                  aria-hidden="true"
                  style="color: var(--{{color}})"
                ></i>
              </span>
              <span
                class="devider-hr p-0 m-0"
                style="background-color: var(--{{color}})"
              ></span>
            </div>
          </script>

          <p class="lead">
            Graphic Designer - Front-End Developer - Back-End Developer
          </p>
        </div>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="py-5" id="portfolio">
      <div class="container">
        <div class="d-flex flex-column f-cc" id="sec-2">
          <h1 class="display-2">PORTFOLIO</h1>
          <div class="devider my-3" data-HB='{"color":"dark"}'></div>
          <div id="HB-div-card" class="row mt-3">
            <script type="text/x-handlbars-template">
              <div class="col-md-6 col-lg-4 mb-5">
                <div class="d-flex flex-coslumn f-cc">
                  <div
                    class="portfolio-item"
                    data-target="#cabin"
                    data-toggle="modal"
                  >
                    <img class="img-fluid" src="{{src}}" alt="item" />
                    <div class="overlay d-flex f-cc">
                      <i class="fas fa-plus fa-3x" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div id="cabin" class="portfolio-modal modal">
                    <div class="container">
                      <div class="modal-dialogue modal-dialog-centered my-5">
                        <div class="modal-content">
                          <div class="modal-body df-cc-c p-5">
                            <h1 class="display-2">{{name}}</h1>
                            <div class="devider my-3" data-HB='{"color":"dark"}'></div>
                            <img
                              class="img-fluid my-3 portfolio_img"
                              src="{{src}}"
                              alt="item"
                            />
                            <p class="max-p lead">
                              {{description}}
                            </p>
                            <button class="btn btn-danger" data-dismiss="modal">
                              <i class="fa fa-close mr-2" aria-hidden="true"></i
                              >Close Winddow
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </script>
            <script>
              this.addEventListener("load", () => {
                HB_duplicators.push({
                  Target: document.getElementById("HB-div-card"),
                  HB_JSON: [
                    {
                      name: "One Day Left",
                      description:
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti blanditiis delectus optio laudantium cupiditate, temporibus beatae enim laborum atque porro, voluptate sit officiis alias, dolor eaque placeat possimus dolorem earum?",
                      src: "./img/14317-2_03.gif",
                    },
                    {
                      name: "Two Days Left",
                      description:
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti blanditiis delectus optio laudantium cupiditate, temporibus beatae enim laborum atque porro, voluptate sit officiis alias, dolor eaque placeat possimus dolorem earum?",
                      src: "./img/14317-2_05.gif",
                    },
                    {
                      name: "Thre Days Left",
                      description:
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti blanditiis delectus optio laudantium cupiditate, temporibus beatae enim laborum atque porro, voluptate sit officiis alias, dolor eaque placeat possimus dolorem earum?",
                      src: "./img/14317-2_09.gif",
                    },
                    {
                      name: "Four Days Left",
                      description:
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti blanditiis delectus optio laudantium cupiditate, temporibus beatae enim laborum atque porro, voluptate sit officiis alias, dolor eaque placeat possimus dolorem earum?",
                      src: "./img/14317-2_10.gif",
                    },
                    {
                      name: "Five Days Left",
                      description:
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti blanditiis delectus optio laudantium cupiditate, temporibus beatae enim laborum atque porro, voluptate sit officiis alias, dolor eaque placeat possimus dolorem earum?",
                      src: "./img/14317-2_13.gif",
                    },
                    {
                      name: "Six Days Left",
                      description:
                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti blanditiis delectus optio laudantium cupiditate, temporibus beatae enim laborum atque porro, voluptate sit officiis alias, dolor eaque placeat possimus dolorem earum?",
                      src: "./img/14317-2_14.gif",
                    },
                  ],
                });
              });
            </script>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section class="bg-info text-light py-5" id="about">
      <div class="container">
        <div class="d-flex flex-column f-cc" id="sec-3">
          <h1 class="display-2">ABOUT</h1>
          <div class="devider my-3" data-HB='{"color":"light"}'></div>
          <div
            id="paragraphs-container"
            class="row mt-3 text-center text-md-left"
          >
            <script type="text/x-hanlebars-template">
              <div class="col-12 col-md-6">
                <p class="max-p mx-auto">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                  perspiciatis, quod quo blanditiis voluptatibus harum numquam
                  facere molestias illo velit ratione exercitationem officiis sit
                  consectetur assumenda sint explicabo tenetur ipsum?
                </p>
              </div>
            </script>
            <script>
              this.addEventListener("load", () => {
                HB_duplicators.push({
                  Target: document.getElementById("paragraphs-container"),
                  times: 2,
                });
              });
            </script>
          </div>
          <button class="btn btn-outline-light btn-lg my-4">
            <i class="fas fa-download mr-3" aria-hidden="true"></i>Free Downlaod
          </button>
        </div>
      </div>
    </section>

    <!-- Contanct Me -->
    <section class="py-5" id="contact">
      <div class="container">
        <div class="d-flex flex-column f-cc" id="sec-4">
          <h1 class="display-2 text-center">CONTACT ME</h1>
          <div class="devider my-3" data-HB='{"color":"dark"}'></div>
        </div>
        <form class="my-3 mx-auto" style="max-width: 690px">
          <div class="form-group">
            <label class="ml-2 text-info" for="fg-name">Name</label
            ><input
              type="text"
              class="form-control"
              id="fg-name"
              placeholder="Enter Your Name"
            />
          </div>
          <div class="form-group">
            <label class="ml-2 text-info" for="fg-email">Email address</label
            ><input
              type="email"
              class="form-control"
              id="fg-email"
              placeholder="Enter email"
            />
          </div>
          <div class="form-group">
            <label class="ml-2 text-info" for="fg-phone">Phone Number</label
            ><input
              type="text"
              class="form-control"
              id="fg-phone"
              placeholder="Enter Your Phone Number"
            />
          </div>
          <div class="form-group">
            <label class="ml-2 text-info" for="fg-text">Massage</label
            ><textarea
              type="text"
              rows="10"
              class="form-control"
              id="fg-text"
              placeholder="Massage"
            ></textarea>
          </div>
          <input type="submit" class="form-control btn btn-outline-info" />
        </form>
      </div>
    </section>

    <!-- footer one -- general information -->
    <section class="bg-info text-light text-center py-5">
      <div class="container">
        <div class="row my-5 f-cc">
          <div class="col col-sm-4 mt-3">
            <h2>LOCATION</h2>
            <span>59200 Kuala Lumpur, Federal Territory of Kuala Lumpur</span>
          </div>
          <div class="col col-sm-4 my-3">
            <h2>ABOUND THE WEB</h2>
            <span>59200 Kuala Lumpur, Federal Territory of Kuala Lumpur</span>
          </div>
          <div class="col col-sm-4 my-3">
            <span
              >This is one project of my portfolio, to see the rest of pls check
              my Github porfile
              <a href="https://github.com/karambarakat" class="text-light"
                >Karam Barakat</a
              >.</span
            >
            <hr />
            <div>
              <a
                class="text-light"
                href="https://www.freepik.com/vectors/business"
                >Business vector created by starline - www.freepik.com</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer two -- copyrights -->
    <section class="bg-dark text-light text-center py-5">
      <div class="text-center">
        <span>Copyright © My Website <span id="thisYear">2020</span></span>
        <script>
          const yearSpan = document.getElementById("thisYear");
          yearSpan.innerHTML = new Date().getFullYear();
        </script>
      </div>
    </section>

    <!-- this is used to automaticly duplicate an existing html -->
    <script>
      // to define the template follow:
      //   script's class: "HB_define_template"
      //   script's data-target-class: the class of the parent template
      //                                 where you want to place
      //                                 the template.
      //   script's type: "text/x-handlebars-template"
      //   parent's class: same as data-target-class
      //   additional data ((optional)):
      //      script's innet HTML: define the data with {{color}}
      //      parent's data-HB: pass the data as data-HB='{"color":"light"}'
      var HB_templates = document.getElementsByClassName("HB_define_template");
      for (HB_child of HB_templates) {
        let parent_attr = HB_child.getAttribute("data-target-class");
        var HB_parents = document.getElementsByClassName(parent_attr);

        var tmpl_compiled = Handlebars.compile(HB_child.innerHTML);
        for (HB_parent of HB_parents) {
          let dataHB = JSON.parse(HB_parent.getAttribute("data-HB"));
          HB_parent.innerHTML += tmpl_compiled(dataHB);
        }
      }
    </script>
    <!-- this script is used to duplicate elements -->
    <script type="text/javascript">
      // duplicator
      // 1.define the target you wand to duplicate with this code
      //    this.addEventListener("load",()=>{
      //      HB_duplicators.push({
      //        Target: document.getElementById("HB-div-card"),
      //        HB_JSON: [],
      //        times: 5
      //      })
      //    })
      // 2.Target is the parent that contains the text/x-handlebars script
      // 3.HB_JSON is the data you want to pass

      var HB_duplicators = [];
      this.addEventListener("load", () => {
        for (let HB_duplicator of HB_duplicators) {
          let Target, card_instance, tmpl_source;
          Target = HB_duplicator.Target;
          tmpl_source = Target.firstElementChild.innerHTML;
          tmpl_source = Handlebars.compile(tmpl_source);
          if (!HB_duplicator.times) {
            let HB_JSON = HB_duplicator.HB_JSON;
            for (let HB of HB_JSON) {
              card_instance = tmpl_source(HB);
              Target.innerHTML += card_instance;
            }
          } else {
            for (const x of Array(HB_duplicator.times).keys()) {
              card_instance = tmpl_source();
              Target.innerHTML += card_instance;
            }
          }
        }
      });
    </script>
    <script src="./css-js/jquery-3.5.1.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script>
      $(() => {
        const navBar = $("#header");
        let skip = true;
        document.onscroll = () => {
          if (window.pageYOffset > 500) {
            if (skip) {
              navBar.hide().css("position", "fixed").slideDown(200);
              skip = false;
            }
          } else {
            navBar.css("position", "static");
            skip = true;
          }
        };
      });
    </script>
  </body>
</html>
