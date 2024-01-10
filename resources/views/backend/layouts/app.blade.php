@php
    use Illuminate\Support\Facades\Route;
    $currentUrl = Route::currentRouteName();

@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

        <link rel="canonical" href="https://demo-basic.adminkit.io/" />

        <title>title</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{asset('backend/css/app.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <style>
            .form-switch .form-check-input{
                width: 5em;
                height: 30px;

            }
            .form-switch .form-check-input:checked{
                background-color: #078989;
                border-color: #078989;
            }
            /* Set the height of the CKEditor container */
            .ckeditor-container {
                height: 300px; /* Set your desired height here */
            }

            /* If CKEditor is applied to a textarea, you can style it directly */
            textarea.ckeditor {
                height: 300px; /* Set your desired height here */
            }
            .ck.ck-editor__main>.ck-editor__editable{
                height: 300px;
            }
            </style>
            @stack('css')
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">

                <a class="sidebar-brand" href="{{ url('/') }}">
                    <span class="align-middle">{{ config('app.name', 'Product Landing Page') }}</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item {{in_array($currentUrl, ['admin.home']) ? 'active' : ''}}">
                        <a class="sidebar-link" href="{{route('admin.home')}}">
                            <i class="align-middle" data-feather="home"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <img src="" class="avatar img-fluid rounded me-1"
                                    alt="Charles Hall" /> <span class="text-dark">{{auth()->user()->name}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{route('admin.users.edit', auth()->id())}}"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href=""><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                @yield('content')
            </main>
            <div class="modal fade" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" id="editModal" role="dialog"  aria-hidden="false">
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href=""
                                    target="_blank"><strong>Design & Developed By Soft It Security</strong></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{asset('backend/js/app.js')}}"></script>
    <script src="{{asset('backend/js/jquery-1.12.4.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
            var gradient = ctx.createLinearGradient(0, 0, 0, 225);
            gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
            gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
            // Line chart
            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: "line",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                        "Dec"
                    ],
                    datasets: [{
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: gradient,
                        borderColor: window.theme.primary,
                        data: [
                            2115,
                            1562,
                            1584,
                            1892,
                            1587,
                            1923,
                            2566,
                            2448,
                            2805,
                            3438,
                            2917,
                            3327
                        ]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 1000
                            },
                            display: true,
                            borderDash: [3, 3],
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: "pie",
                data: {
                    labels: ["Chrome", "Firefox", "IE"],
                    datasets: [{
                        data: [4306, 3801, 1689],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger
                        ],
                        borderWidth: 5
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 75
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar"), {
                type: "bar",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                        "Dec"
                    ],
                    datasets: [{
                        label: "This year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            stacked: false,
                            gridLines: {
                                color: "transparent"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var markers = [{
                    coords: [31.230391, 121.473701],
                    name: "Shanghai"
                },
                {
                    coords: [28.704060, 77.102493],
                    name: "Delhi"
                },
                {
                    coords: [6.524379, 3.379206],
                    name: "Lagos"
                },
                {
                    coords: [35.689487, 139.691711],
                    name: "Tokyo"
                },
                {
                    coords: [23.129110, 113.264381],
                    name: "Guangzhou"
                },
                {
                    coords: [40.7127837, -74.0059413],
                    name: "New York"
                },
                {
                    coords: [34.052235, -118.243683],
                    name: "Los Angeles"
                },
                {
                    coords: [41.878113, -87.629799],
                    name: "Chicago"
                },
                {
                    coords: [51.507351, -0.127758],
                    name: "London"
                },
                {
                    coords: [40.416775, -3.703790],
                    name: "Madrid "
                }
            ];
            var map = new jsVectorMap({
                map: "world",
                selector: "#world_map",
                zoomButtons: true,
                markers: markers,
                markerStyle: {
                    initial: {
                        r: 9,
                        strokeWidth: 7,
                        stokeOpacity: .4,
                        fill: window.theme.primary
                    },
                    hover: {
                        fill: window.theme.primary,
                        stroke: window.theme.primary
                    }
                },
                zoomOnScroll: false
            });
            window.addEventListener("resize", () => {
                map.updateSize();
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                prevArrow: "<span title=\"Previous month\">&laquo;</span>",
                nextArrow: "<span title=\"Next month\">&raquo;</span>",
                defaultDate: defaultDate
            });
        });
    </script>
    <script>

    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    @if(session('delete'))
        Toast.fire({
            icon: 'success',
            title: "{{ session('delete') }}"
        })
    @endif

    @if(session('success'))
        Toast.fire({
            icon: 'success',
            title: "{{ session('success') }}"
        })
    @endif

    @if(session('update'))
        Toast.fire({
            icon: 'success',
            title: "{{ session('update') }}"
        })
    @endif
    @if (session('status'))
        Toast.fire({
            icon: 'success',
            title: "{{ session('status') }}"
        })
    @endif
    $(document).ready(function() {
      var startYear = 1970;
      var endYear = new Date().getFullYear();
      var select = $("#yearSelect");

      for (var year = startYear; year <= endYear; year++) {
        var option = $("<option>").text(year).val(year);
        select.append(option);
      }
      select.find('option:last').prop('selected', true);
    });
    $(document).on('submit','form#ajax_form', function(e) {
     e.preventDefault();
     $('p.textdanger').text('');
     $(document).find('p.failed').text('');
     var url=$(this).attr('action');
     var method=$(this).attr('method');
     var formData = new FormData($(this)[0]);
     $.ajax({
         type: method,
         url: url,
         data: formData,
         async: false,
         processData: false,
         contentType: false,
         beforeSend: function(){
            $('.submit').attr('disabled', true);
         },
         success: function(res) {
            $('.submit').attr('disabled', false);
             if(res.status==true){

                Toast.fire({
                    icon: 'success',
                    title: res.msg
                });
                //  toastr.success(res.msg);
                 var message = res.msg;
                 $('.message').html(message);
                 $('#ajax_form')[0].reset();
                 if(res.url){
                    setTimeout(() => {
                        document.location.href = res.url;
                    }, 2000);

                 }else{
                     window.location.reload();
                 }
             }else if(res.status==false){
                //  toastr.error(res.msg);
                 Toast.fire({
                    icon: 'error',
                    title: res.msg
                });
             }

         },
         error:function (response){
             $.each(response.responseJSON.errors,function(field_name,error){
                 $(document).find('[name='+field_name+']').after('<p style="color:red" class="failed">' +error+ '</p>')
                //  toastr.error(error);
                 Toast.fire({
                    icon: 'error',
                    title: error
                });
                 $('.submit').attr('disabled', false);
             })
         }
     });

 });
 $(document).ready(function () {
    $('.delete_form').on('submit', function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Are you sure?',
        text: "You Want To Delete This!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            var link = $(this).attr('action');
            $.ajax({
                    url: link,
                    type: 'DELETE',
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire('Deleted!', response.msg, 'success');
                        window.location.reload();
                        // Perform any additional actions on success
                    },
                    error: function(xhr) {
                        Swal.fire('Error!', xhr.responseJSON.msg, 'error');
                        // Perform any additional error handling
                    }
                });

        }
        })
    })
});

ClassicEditor
        .create( document.querySelector( '#editor' ),{
            toolbar: {
                    plugins: [ 'Image' ],
                    toolbar: [ 'imageUpload', 'imageTextAlternative' ]
                },
                ckfinder: {
                    uploadUrl: "{{route('admin.ckeditor.upload').'?_token='.csrf_token()}}",
                }
        } )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor2' ),{
            toolbar: {
                    plugins: [ 'Image' ],
                    toolbar: [ 'imageUpload', 'imageTextAlternative' ]
                },
                ckfinder: {
                    uploadUrl: "{{route('admin.ckeditor.upload').'?_token='.csrf_token()}}",
                }
        } )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor3' ),{
            toolbar: {
                    plugins: [ 'Image' ],
                    toolbar: [ 'imageUpload', 'imageTextAlternative' ]
                },
                ckfinder: {
                    uploadUrl: "{{route('admin.ckeditor.upload').'?_token='.csrf_token()}}",
                }
        } )
        .catch( error => {
            console.error( error );
        } );

        $(document).ready(function() {
        // Handle file input change event
            $('#image-input').change(function(e) {
                var file = e.target.files[0];

                // Check if file is an image
                if (file && file.type.includes('image')) {
                var reader = new FileReader();

                // Read the image file
                reader.onload = function() {
                    var imageData = reader.result;

                    // Display the image preview
                    $('#image-preview').attr('src', imageData);
                };

                reader.readAsDataURL(file);
                } else {
                // File is not an image
                $('#image-preview').removeAttr('src');
                }
            });
            $('#image-input2').change(function(e) {
                var file = e.target.files[0];

                // Check if file is an image
                if (file && file.type.includes('image')) {
                var reader = new FileReader();

                // Read the image file
                reader.onload = function() {
                    var imageData = reader.result;

                    // Display the image preview
                    $('#image-preview2').attr('src', imageData);
                };

                reader.readAsDataURL(file);
                } else {
                // File is not an image
                $('#image-preview2').removeAttr('src');
                }
            });

            $('#image-input3').change(function(e) {
                var file = e.target.files[0];

                // Check if file is an image
                if (file && file.type.includes('image')) {
                var reader = new FileReader();

                // Read the image file
                reader.onload = function() {
                    var imageData = reader.result;

                    // Display the image preview
                    $('#image-preview3').attr('src', imageData);
                };

                reader.readAsDataURL(file);
                } else {
                // File is not an image
                $('#image-preview3').removeAttr('src');
                }
            });


        });

        $(document).ready(function() {
            $('.modal_btn').click(function(e) {
                e.preventDefault();
                var url = $(this).attr('href');

                // Make AJAX request
                $.ajax({
                url: url,
                type: 'GET',
                data: {},
                success: function(data) {
                    // Populate the modal with received data
                    // $('#name').val(data.name);

                    // Open the modal
                    $('#editModal').html(data.html).modal('show');
                    // $('#editModal').addClass('show');
                    // $('#editModal').show();
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                }
                });
            });
        });
    </script>

</body>

</html>
