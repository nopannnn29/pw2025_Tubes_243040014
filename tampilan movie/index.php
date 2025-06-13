<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <!-- navigation -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">Movie</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
             <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cartoon">Cartoon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#trending">Trending</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
     <!-- home -->
        <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
          <h2 class="display-3" id="home">Home</h2>
          <p></p>
          <div class="row pt-4 gx-4 gy-4">
              <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="1.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Toys Story</h5>
                        <p class="card-text">Toy Story adalah film komedi animasi komputer Amerika tahun 1995 yang diproduksi oleh Pixar Animation Studios dan dirilis oleh Walt Disney Pictures.</p>
                        <p class="card-rating">4.7 ***</p>
                        <p class="card-duration">1j 21m</p>
                        <p class="card-release">22 November 1995</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
                  </div>
              <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="2.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Cars</h5>
                        <p class="card-text">Cars adalah sebuah film animasi yang diproduksi Pixar Animation Studios dan dirilis oleh Walt Disney Pictures pada 9 Juni 2006.</p>
                        <p class="card-rating">Ratting  4.8 ***</p>
                        <p class="card-duration">Durasi 2j 15m</p>
                        <p class="card-release">Rilis 9 Juni 2006</p>
                        <p class="card-language">Bahasa Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
                   </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="3.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Nemo</h5>
                        <p class="card-text">Finding Nemo is an Academy Award-winning American computer-animated film. It was released on May 30, 2003 in Canada and the United States.</p>
                        <p class="card-rating">4.7 ***</p>
                        <p class="card-duration">1j 40m</p>
                        <p class="card-release">30 Mei 2003</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="a.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">The Lion King</h5>
                        <p class="card-text">Finding Nemo is an Academy Award-winning American computer-animated film. It was released on May 30, 2003 in Canada and the United States.</p>
                        <p class="card-rating">3.9 **</p>
                        <p class="card-duration">1j 40m</p>
                        <p class="card-release">15 Juni 1994</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="b.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Tom and Jerry adalah waralaba media animasi Amerika dan serial film pendek komedi yang dibuat pada tahun 1940 oleh William Hanna dan Joseph Barbera .</p>
                        <p class="card-rating">4.0 **</p>
                        <p class="card-duration">1j 41m</p>
                        <p class="card-release">10 Februari 1940</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="c.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Moana</h5>
                        <p class="card-text">Moana adalah sebuah film petualangan fantasi musikal animasi komputer 3D Amerika 2016 yang diproduksi oleh Walt Disney Animation Studios dan film ke-56 dalam kanon fitur animasi Disney.</p>
                        <p class="card-rating">4.6 ***</p>
                        <p class="card-duration">1j 47m</p>
                        <p class="card-release">25 November 2016</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>

          </div>
      </div>
     
    <!-- trending -->
     <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
          <h2 class="display-3" id="trending">Trending</h2>
          <p></p>
          <div class="row pt-4 gx-4 gy-4">
              <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="11.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Agak Laen</h5>
                        <p class="card-text">empat sahabat, yaitu Bene Dion, Boris Bokir, Indra Jegel, dan Oki Rengga, yang bekerja sebagai penjaga rumah hantu di sebuah pasar malam</p>
                        <p class="card-rating">4.7 ***</p>
                        <p class="card-duration">1j 21m</p>
                        <p class="card-release">22 November 1995</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
                  </div>
              <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="12.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">The Dark Knight</h5>
                        <p class="card-text">Film The Dark Knight menceritakan perjuangan Batman (Christian Bale) dalam menjaga Kota Gotham.</p>
                        <p class="card-rating">Ratting  4.8 ***</p>
                        <p class="card-duration">Durasi 2j 15m</p>
                        <p class="card-release">Rilis 9 Juni 2006</p>
                        <p class="card-language">Bahasa Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
                   </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="13.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Semesta</h5>
                        <p class="card-text">berkisah tentang tujuh tokoh dari berbagai provinsi di Indonesia yang berjuang melawan perubahan iklim dengan cara mereka masing-masing, dengan mengedepankan peran agama, kepercayaan, dan budaya setempat.</p>
                        <p class="card-rating">4.7 ***</p>
                        <p class="card-duration">1j 40m</p>
                        <p class="card-release">30 Mei 2003</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="14.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Dilan1990</h5>
                        <p class="card-text">Dilan: Dia adalah Dilanku Tahun 1990" adalah novel karya Pidi Baiq yang menceritakan kisah cinta antara Milea dan Dilan di Bandung tahun 1990.</p>
                        <p class="card-rating">3.9 **</p>
                        <p class="card-duration">1j 40m</p>
                        <p class="card-release">15 Juni 1994</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="15.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Pengabdi Setan</h5>
                        <p class="card-text">film horor Indonesia yang menceritakan tentang keluarga yang menghadapi teror dari ibunya yang telah meninggal dunia</p>
                        <p class="card-rating">4.0 **</p>
                        <p class="card-duration">1j 41m</p>
                        <p class="card-release">10 Februari 1940</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="16.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Titanic</h5>
                        <p class="card-text">RMS Titanic adalah sebuah kapal penumpang super Britania Raya yang tenggelam di Samudra Atlantik Utara pada tanggal 15 April 1912 setelah menabrak sebuah gunung es pada pelayaran perdananya dari Southampton, Inggris ke New York City.</p>
                        <p class="card-rating">4.6 ***</p>
                        <p class="card-duration">1j 47m</p>
                        <p class="card-release">25 November 2016</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>

          </div>
      </div>

      <!-- cartoon -->
       <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
          <h2 class="display-3" id="cartoon">Cartoon</h2>
          <p></p>
          <div class="row pt-4 gx-4 gy-4">
              <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="1.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Toys Story</h5>
                        <p class="card-text">Toy Story adalah film komedi animasi komputer Amerika tahun 1995 yang diproduksi oleh Pixar Animation Studios dan dirilis oleh Walt Disney Pictures.</p>
                        <p class="card-rating">4.7 ***</p>
                        <p class="card-duration">1j 21m</p>
                        <p class="card-release">22 November 1995</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
                  </div>
              <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="2.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Cars</h5>
                        <p class="card-text">Cars adalah sebuah film animasi yang diproduksi Pixar Animation Studios dan dirilis oleh Walt Disney Pictures pada 9 Juni 2006.</p>
                        <p class="card-rating">Ratting  4.8 ***</p>
                        <p class="card-duration">Durasi 2j 15m</p>
                        <p class="card-release">Rilis 9 Juni 2006</p>
                        <p class="card-language">Bahasa Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
                   </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="3.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Nemo</h5>
                        <p class="card-text">Finding Nemo is an Academy Award-winning American computer-animated film. It was released on May 30, 2003 in Canada and the United States.</p>
                        <p class="card-rating">4.7 ***</p>
                        <p class="card-duration">1j 40m</p>
                        <p class="card-release">30 Mei 2003</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="a.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">The Lion King</h5>
                        <p class="card-text">Finding Nemo is an Academy Award-winning American computer-animated film. It was released on May 30, 2003 in Canada and the United States.</p>
                        <p class="card-rating">3.9 **</p>
                        <p class="card-duration">1j 40m</p>
                        <p class="card-release">15 Juni 1994</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="b.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Tom and Jerry adalah waralaba media animasi Amerika dan serial film pendek komedi yang dibuat pada tahun 1940 oleh William Hanna dan Joseph Barbera .</p>
                        <p class="card-rating">4.0 **</p>
                        <p class="card-duration">1j 41m</p>
                        <p class="card-release">10 Februari 1940</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>
               <div class="col-md-4">
                  <div class="card crop-img">
                      <img src="c.jpg" class="card-img-top"
                      width="200"
                      height="200">
                      <div class="card-body">
                        <h5 class="card-title">Moana</h5>
                        <p class="card-text">Moana adalah sebuah film petualangan fantasi musikal animasi komputer 3D Amerika 2016 yang diproduksi oleh Walt Disney Animation Studios dan film ke-56 dalam kanon fitur animasi Disney.</p>
                        <p class="card-rating">4.6 ***</p>
                        <p class="card-duration">1j 47m</p>
                        <p class="card-release">25 November 2016</p>
                        <p class="card-language">Indonesia</p>
                        <button class="btn-nonton-movie">Nonton Sekarang</button>
                      </div>
                    </div>
              </div>

          </div>
      </div>
    <!-- services -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="services">Our Services</h2>
        <p></p>
        <div class="row pt-4">
          <div class="col-md-4">
            <h3 class="mt-3">Web Development</h3>
            <p>build professional websites that are attractive and easy to use.></p>
          </div>

          <div class="col-md-4">
            <h3 class="mt-3">Mobile App Development</h3>
            <p>Mobile applications are intuitive and can enhance the user experience.</p>
          </div>

          <div class="col-md-4">
            <h3 class="mt-3">Cloud Services</h3>
            <p>solutions to increase the scalability and operational efficiency of your company.</p>
          </div>
        </div>
      </div>
    </div>
     <!-- kontak -->
     <div class="container-fluid pt-5 pb-5 kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="contact">Contact Us</h2>
        <p class="text-center">
          We’re here to help! Feel free to reach out to us for inquiries, support, or collaboration opportunities.
        </p>
        <div class="row pb-3">
          <div class="col-md-6">
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Name"
            />
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Email"
            />
            <input
              class="form-control form-control-lg"
              type="text"
              placeholder="No. Phone"
            />
          </div>
          <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5"></textarea>
          </div>
        </div>
        <div class="col-md-3 mx-auto text-center">
          <button type="button" class="btn btn-danger btn-lg">
            Send Message
          </button>
        </div>
      </div>
    </div>
    <div class="container text-center pt-5 pb-5">
      All Rights Reserved &copy; 2025
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>

</html>
