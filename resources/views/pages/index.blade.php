<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Crawlit</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
   <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
</head>
<body>
 <section id="crawl" class="get-started">
        <div class="container">
            <div class="row text-center">
                <h1 class="display-3 fw-bold text-capitalize">Get started</h1>
                  <p class="lh-lg">
                    Choose a URL and how many pages you would like to Crawl.
                </p>
            </div>
         <div class="col-12 col-lg-12 bg-white shadow p-3">
                    <div class="form w-100 pb-2">
                        <h4 >Crawl it....!</h4>
                            <div id="error" class="alert alert-danger" style="display:none">
                                Error occured while processing ,Please try again <br>                                
                            </div>
                            <div id="formdiv">
                              
                                <div class="col-lg-6 col-md mb-3">
                                    <input name="url" type="text" placeholder="https://" id="url" class="shadow form-control form-control-lg">
                                </div>
                                <div class="col-lg-6 col-md mb-3">
                                    <input name="pages" type="number" placeholder="Total pages" id="pages" class="shadow form-control form-control-lg">
                                </div>
                                <div id="submitbutton" class="text-center d-grid mt-1">
                                    <button id="Crawlbtn" type="button" class="btn btn-success form-control">
                                        submit
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="Loading" style="display:none; color:#000;" class="text-center">
                                processing
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="report_section" class="faq" style="display:none">
        <div class="container">
          <div class="row text-center">
            <h1 class="display-3 fw-bold text-uppercase">report for (<span id="nbPages">0</span>) pages</h1>
             <div class="text-center d-grid mt-1">
                <a href="/" class="btn btn-success form-control">
                   Return to Search
                    <i class="fas fa-paper-plane"></i>
                </a>
            </div>

          </div>

          <div class="row mt-5">
            <div class="col-md-12">
              <div class="accordion" id="accordionExample">

                <div class="accordion-item shadow mb-3">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Crawl Data
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <table id="report" class="display" width="100%"></table>
                      </div>
                    </div>
                </div>

                <div class="accordion-item shadow mb-3">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Averages Data
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">ItemType</th>
                            <th scope="col">TotalCount</th>
                            <th scope="col">Number of Pages</th>
                            <th scope="col">Average</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Unique Words</td>
                            <td id="uwordSum">0</td>
                            <td class="totalPages"></td>
                            <td id="uwordAvr"></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>All Words</td>
                            <td id="wordSum">0</td>
                            <td class="totalPages"></td>
                            <td id="wordAvr"></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Unique images</td>
                            <td id="uimageSum">0</td>
                            <td class="totalPages"></td>
                            <td id="uimageAvr"></td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>All images</td>
                            <td id="imageSum">0</td>
                            <td class="totalPages"></td>
                            <td id="imageAvr"></td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Load speed</td>
                            <td id="speedSum">0</td>
                            <td class="totalPages"></td>
                            <td id="speedAvr"></td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>All title</td>
                            <td id="titleSum">0</td>
                            <td class="totalPages"></td>
                            <td id="titleAvr"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

             
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="report_section" class="faq" style="display:none">
        <div class="container">
          <div class="row text-center">
            <h2 class="display-3 fw-bold text-uppercase">report for (<span id="nbPages">0</span>) pages</h2>
              <p class="lead">results!</p>
          <div class="text-center d-grid mt-1">
                <a href="/" class="btn btn-success rounded-pill pt-3 pb-3">
                    Crawl an other site!
                    <i class="fas fa-paper-plane"></i>
                </a>
            </div>

          </div>

          <div class="row mt-5">
            <div class="col-md-12">
              <div class="accordion" id="accordionExample">

                <div class="accordion-item shadow mb-3">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Crawl Data
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <table id="report" class="display" width="100%"></table>
                      </div>
                    </div>
                </div>

                <div class="accordion-item shadow mb-3">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Averages Data
                    </button>
                  </h2>
           
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- BACK TO TOP BUTTON  -->
    <a href="#" class="shadow btn btn-success rounded-circle back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <script type="text/javascript">
        
        $(document).ready(function(){

            // A helper function that will take a JSON object 
            // and give back average for a given col
            function getAvr(arr, key) {
                var count = 0;
                var sum = 0;
                var res = new Array("sum", "count", "avr");

                $.each(arr, function(k, v){
                    count++;
                    sum += v[key];
                });

                res['sum'] = sum;
                res['count'] = count;
                res['avr'] = sum / count;

                console.log(res);

                return res;
            }
            // Start crawling
            $('#Crawlbtn').on('click', function () {
              var requestedpage = $("#pages").val();
              if(requestedpage > 10){
                alert('Please select less than 10 pages to crawl');
                  return false;
              }
              $('#Loading').hide();
              $('#formdiv').show();
              $('#error').hide();

               // Activated state
               $('#formdiv').hide();
               $('#Loading').show();
               $('#error').hide();
              
               // Get JSON data from the backend
                $.ajax({
                    url: '/crawl',
                    type: "post",
                    data: {
                        url: $("#url").val(),
                        pages: $("#pages").val(),
                        _token:"{{ csrf_token() }}"
                    },
                    dataType : 'json',
                    success: function(data){

                        // Retreive Average data
                        var loadAvr = getAvr(data.data, '2');
                        var uWorddAvr = getAvr(data.data, '6');
                        var wordAvr = getAvr(data.data, '7');

                        // Done state
                        $('#Loading').hide();
                        $('#crawl').hide();
                        $('#report_section').show();

                        // Feeding values inside the report section
                        $('#nbPages').html($("#pages").val());
                        $('.totalPages').html($("#pages").val());
                        $('#wordSum').html(wordAvr['sum']);
                        $('#wordAvr').html(wordAvr['avr']);
                        $('#uwordSum').html(uWorddAvr['sum']);
                        $('#uwordAvr').html(uWorddAvr['avr']);
                        $('#speedSum').html(loadAvr['sum']);
                        $('#speedAvr').html(loadAvr['avr']);
                        $('#imageSum').html(data.res.uimg_count);
                        $('#imageAvr').html(data.res.uimg_avr);
                        $('#uimageSum').html(data.res.img_count);
                        $('#uimageAvr').html(data.res.img_avr);
                        $('#titleSum').html(data.res.title_count);
                        $('#titleAvr').html(data.res.title_avr);

                        // Create a datatable instance and insert data inside
                        $('#report').DataTable( {
                            data: data.data,
                            columns: [
                                { title: "Page" },
                                { title: "Http Status" },
                                { title: "Crawl time (sec)" },
                                { title: "Total images" },
                                { title: "Total internal links" },
                                { title: "Total external links" },
                                { title: "Total unique words" },
                                { title: "Total word count" },
                            ]
                        } );
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        // Error state
                        $('#Loading').hide();
                        $('#formdiv').show();
                        $('#error').show();
                    }
                });
            });
        });
    </script>
    
    
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>