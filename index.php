<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- Animasi -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>My Portofolio | Feri Andrianto</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Feri Andrianto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Projects">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/Myphoto.jpg" alt="Feri Andrianto" width="200" class="rounded-circle img-thumbnail" />
      <h1 id="full_name" class="display-4">Feri Andrianto</h1>
      <p id="job_position" class="lead">Mahasiswa | Gamers | Analyst</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L34.3,192C68.6,192,137,192,206,160C274.3,128,343,64,411,64C480,64,549,128,617,138.7C685.7,149,754,107,823,101.3C891.4,96,960,128,1029,149.3C1097.1,171,1166,181,1234,165.3C1302.9,149,1371,107,1406,85.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="About">
      <div class="container">
        <div id="message"></div>
        <h1 class="mt-4 mb-4 text-center text-danger">SKILLS CRUD</h1>
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col col-sm-9">SKILLS</div>
              <div class="col col-sm-3">
                <button type="button" id="add_data" class="btn btn-success btn-sm float-end">Add</button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="sample_data">
                <thead>
                  <tr>
                    <th>User Id</th>
                    <th>Skill Name</th>
                    <th>Rating</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal" tabindex="-1" id="action_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" id="sample_form">
                <div class="modal-header">
                  <h5 class="modal-title" id="dynamic_modal_title"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">User Id</label>
                    <input type="text" name="user_id" id="user_id" class="form-control" />
                    <span id="user_id_error" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Skill Name</label>
                    <input type="skill_name" name="skill_name" id="skill_name" class="form-control" />
                    <span id="skill_name_error" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Rating</label>
                    <input type="rating" name="rating" id="rating" class="form-control" />
                    <span id="rating_error" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" name="description" id="description" class="form-control" />
                    <span id="description_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="hidden" name="id" id="id" />
                  <input type="hidden" name="action" id="action" value="Add" />
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="action_button">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,128L48,128C96,128,192,128,288,144C384,160,480,192,576,192C672,192,768,160,864,138.7C960,117,1056,107,1152,112C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Project -->
    <section id="Projects">
      <div class="conteiner" data-aos="fade-up" data-aos-duration="2000">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Projects/1.jpg" class="card-img-top" alt="Projects 1" />
              <div class="card-body">
                <p class="card-text">
                  PC ini adalah kombinasi kuat dan serbaguna yang dirancang untuk gaming dan produktivitas tinggi. Dengan spesifikasi premium, ini mampu menjalankan permainan terbaru dan tugas berat dengan lancar. Solusi yang efisien dan
                  elegan untuk kebutuhan game dan project saya.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Projects/2.jpg" class="card-img-top" alt="Projects 1" />
              <div class="card-body">
                <p class="card-text">
                  Sebuah laptop yang menampilkan antarmuka yang sederhana dan intuitif, dengan aplikasi produktivitas yang terbuka. Di layar, terlihat dokumen-dokumen terbuka, spreadsheet, dan grafik yang menggambarkan aktivitas
                  multitasking. Keyboard dan touchpad digunakan dengan lancar, menciptakan lingkungan kerja yang efisien dan nyaman.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Projects/3.jpg" class="card-img-top" alt="Projects 1" />
              <div class="card-body">
                <p class="card-text">Pemandangan meriah dari acara wisuda, dengan wisudawan tersenyum bahagia memakai jubah dan topi wisuda di hadapan keluarga dan teman-teman yang memberikan ucapan selamat.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Projects/4.jpg" class="card-img-top" alt="Projects 1" />
              <div class="card-body">
                <p class="card-text">
                  Ini adalah gambaran sedang bermain game first-person shooter (FPS) di laptop, fokus pada layar yang menampilkan aksi intens dan grafis yang mendalam. Ekspresi konsentrasi terpancar dari wajah, sementara tangannya bergerak
                  cepat mengendalikan karakter dalam permainan. Suasana seru dan tegang tercipta di sekitarnya, menunjukkan kecintaan dan keahliannya dalam menguasai dunia virtual.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/Projects/5.jpg" class="card-img-top" alt="Projects 1" />
              <div class="card-body">
                <p class="card-text">Seorang individu fokus memegang stik PlayStation, tenggelam dalam permainan dengan ekspresi serius.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L34.3,149.3C68.6,171,137,213,206,202.7C274.3,192,343,128,411,138.7C480,149,549,235,617,261.3C685.7,288,754,256,823,224C891.4,192,960,160,1029,165.3C1097.1,171,1166,213,1234,224C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- Akhir Project -->

    <!-- Contact -->
    <section id="contact">
      <div class="container" data-aos="zoom-in-up" data-aos-duration="2000">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,224L60,213.3C120,203,240,181,360,181.3C480,181,600,203,720,202.7C840,203,960,181,1080,176C1200,171,1320,181,1380,186.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/bg_feray/" class="text-white fw-bold">Feri Andrianto</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Animasi -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $(document).ready(function() {
            showAll();

            $('#add_data').click(function() {
                $('#dynamic_modal_title').text('Add Biodata User');
                $('#sample_form')[0].reset();
                $('#action').val('Add');
                $('#action_button').text('Add');
                $('.text-danger').text('');
                $('#action_modal').modal('show');
            });

            $('#sample_form').on('submit', function(event) {
                event.preventDefault();
                if ($('#action').val() == "Add") {
                    var formData = {
                        'user_id': $('#user_id').val(),
                        'skill_name': $('#skill_name').val(),
                        'rating': $('#rating').val(),
                        'description': $('#description').val()
                    }

                    $.ajax({
                        url: "https://feri.amisbudi.cloud/portofolio-bootstrap5/si-admin/api/skills/create.php",
                        method: "POST",
                        data: JSON.stringify(formData),
                        success: function(data) {
                            $('#action_button').attr('disabled', false);
                            $('#message').html('<div class="alert alert-success">' + data.message + '</div>');
                            $('#action_modal').modal('hide');
                            $('#sample_data').DataTable().destroy();
                            showAll();
                        },
                        error: function(err) {
                            console.log(err);
                        }
                    });
                } else if ($('#action').val() == "Update") {
                    var formData = {
                        'id': $('#id').val(),
                        'user_id': $('#user_id').val(),
                        'skill_name': $('#skill_name').val(),
                        'rating': $('#rating').val(),
                        'description': $('#description').val()
                    }

                    $.ajax({
                        url: "https://feri.amisbudi.cloud/portofolio-bootstrap5/si-admin/api/skills/update.php",
                        method: "PUT",
                        data: JSON.stringify(formData),
                        success: function(data) {
                            $('#action_button').attr('disabled', false);
                            $('#message').html('<div class="alert alert-success">' + data.message + '</div>');
                            $('#action_modal').modal('hide');
                            $('#sample_data').DataTable().destroy();
                            showAll();
                        },
                        error: function(err) {
                            console.log(err);
                        }
                    });
                }
            });
        });

        function showAll() {
            $.ajax({
                type: "GET",
                contentType: "application/json",
                url: "https://feri.amisbudi.cloud/portofolio-bootstrap5/si-admin/api/skills/read.php",
                success: function(response) {
                    // console.log(response);
                    var json = response.body;
                    var dataSet = [];
                    for (var i = 0; i < json.length; i++) {
                        var sub_array = {
                            'user_id': json[i].user_id,
                            'skill_name': json[i].skill_name,
                            'rating': json[i].rating,
                            'description': json[i].description,
                            'action': '<button onclick="showOne(' + json[i].id + ')" class="btn btn-sm btn-warning">Edit</button>' +
                                '<button onclick="deleteOne(' + json[i].id + ')" class="btn btn-sm btn-danger mx-2">Delete</button>'
                        };
                        dataSet.push(sub_array);
                    }
                    $('#sample_data').DataTable({
                        data: dataSet,
                        columns: [{
                                data: "user_id"
                            },
                            {
                                data: "skill_name"
                            },
                            {
                                data: "rating"
                            },
                            {
                                data: "description"
                            },
                            {
                                data: "action"
                            }
                        ]
                    });
                },
                error: function(err) {
                    console.log(err);
                }
            });
        }

        function showOne(id) {
            $('#dynamic_modal_title').text('Edit Biodata User');
            $('#sample_form')[0].reset();
            $('#action').val('Update');
            $('#action_button').text('Update');
            $('.text-danger').text('');
            $('#action_modal').modal('show');

            $.ajax({
                type: "GET",
                contentType: "application/json",
                url: "https://feri.amisbudi.cloud/portofolio-bootstrap5/si-admin/api/skills/read.php?id=" + id,
                success: function(response) {
                    $('#id').val(response.id);
                    $('#user_id').val(response.user_id);
                    $('#skill_name').val(response.skill_name);
                    $('#rating').val(response.rating);
                    $('#description').val(response.description);
                },
                error: function(err) {
                    console.log(err);
                }
            });
        }

        function deleteOne(id) {
            var konfirmasiUser = confirm("Yakin untuk hapus data ?");
            if (konfirmasiUser) {
                $.ajax({
                    url: "https://feri.amisbudi.cloud/portofolio-bootstrap5/si-admin/api/skills/delete.php",
                    method: "DELETE",
                    data: JSON.stringify({
                        id: id,
                    }),
                    success: function(data) {
                        $("#action_button").attr("disabled", false);
                        $("#message").html('<div class="alert alert-success">' + data + "</div>");
                        $("#action_modal").modal("hide");
                        $("#sample_data").DataTable().destroy();
                        showAll();
                    },
                    error: function(err) {
                        console.log(err);
                        $("#message").html('<div class="alert alert-danger">' + err.responseJSON + '</div>');
                    },
                });
            }
        }

        $(document).ready(function() {
      showAll();

      function showAll() {
        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "https://feri.amisbudi.cloud/portofolio-bootstrap5/si-admin/api/users/read.php?id=16",
          success: function(response) {
            $("#full_name").text(response.full_name); //mengubah elemen html dengan .text(nilai) atau .html(nilai)
            $("#job_position").text(response.job + " | " + response.expected_position);
          },
          error: function(err) {

          }
        })
      }
    })
    </script>
  </body>
</html>
