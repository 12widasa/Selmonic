@extends('layouts.dashboard')

@section('title')
Store Controlling
@endsection
@section('content')

<section class="monitoring">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h5 class="pemantauan-border-bottom">Pemantauan</h5>
                <div class="row row-cols-1 row-cols-md-2 g-4 mt-1">
                    <div class="col-6 col-md-4">
                        <div class="border p-2">
                            <h6>PH</h6>
                            <h3 id="phValue">5 <span></span></h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="border p-2 mb-4">
                            <h6>TDS</h6>
                            <h3 id="tdsValue">305 <span>PPM</span></h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center mt-0 mb-4">
                        <div class="card-text d-flex flex-column align-items-center">
                            <span class="text-muted">Jam</span>
                            <span id="hour" class="border">21</span>
                        </div>
                        <span class="mx-2 mt-3 d-flex align-items-center colon">:</span>
                        <div class="card-text d-flex flex-column align-items-center">
                            <span class="text-muted">Menit</span>
                            <span id="minute" class="border">38</span>
                        </div>
                        <span class="mx-2 mt-3 d-flex align-items-center colon">:</span>
                        <div class="card-text d-flex flex-column align-items-center">
                            <span class="text-muted">Detik</span>
                            <span id="second" class="border">52</span>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1  ">
                    <div class="col-6 col-md-4">
                        <div class="border p-2">
                            <h6>Suhu Air</h6>
                            <h3 id="suhuAirValue">35 <span>°C</span></h3>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="border p-2 mb-4">
                            <h6>Tinggi Air</h6>
                            <h3 id="tinggiAirValue">434 <span>cm</span></h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="border p-2 mb-4">
                            <h6>Keterangan</h6>
                            <h3 id="keteranganValue">Air Penuh!</h3>
                        </div>
                    </div>
                </div>
                <h5 class="pemantauan-border-bottom">Pengendalian</h5>
                <div class="row row-cols-1 row-cols-md-2 g-4 mt-1">
                    <div class="col-6 col-md-5 col-lg-3 mb-3 p-0 ">
                        <div class="card text-black ">
                            <div class="card-header" style="background-color: #b9d5cf; color: #185350; border-radius: 5px;  ">UP PPM</div>
                            <!-- switch -->
                            <div class="card-body d-flex justify-content-center border border-black">
                                <div class="form-check form-switch d-flex align-items-center gap-3" style="font-size: 40px; text-align: center">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="ubahStatusRelay(this.checked)">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                        <span id="status">
                                            OFF
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <!-- akhir switch -->
                        </div>
                    </div>
                    <div class="col-6 col-md-5 col-lg-3 mb-3 p-0 ">
                        <div class="card text-black">
                            <div class="card-header" style="background-color: #b9d5cf; color: #185350; border-radius: 5px;">DOWN PPM</div>
                            <!-- switch -->
                            <div class="card-body d-flex justify-content-center border border-black">
                                <div class="form-check form-switch d-flex align-items-center gap-3" style="font-size: 40px; text-align: center">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault1" onchange="ubahStatusRelay1(this.checked)">
                                    <label class="form-check-label" for="flexSwitchCheckDefault1">
                                        <span id="statusrelay3">OFF</span>
                                    </label>
                                </div>
                            </div>
                            <!-- akhir switch -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('addon-style')
<style>
    h5.pemantauan-border-bottom {
        border-bottom: solid 2px !important;
        width: 25%;
        line-height: 3rem;
    }
</style>

@endpush

@push('addon-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    // monitoring
    function fetchData() {
        $.ajax({
            url: 'http://127.0.0.1:8000/api/api-update-realtime/1',
            type: 'GET',
            success: function(response) {
                $('#phValue').html(response.ph + ' <span></span>');
                $('#tdsValue').html(response.tds + ' <span>PPM</span>'); // Pastikan ada elemen dengan id="tdsValue"
                $('#suhuAirValue').html(Math.round(response.suhu_air) + ' <span>°C</span>'); // Pastikan ada elemen dengan id="suhuAirValue"
                $('#tinggiAirValue').html(response.tinggi_air + ' <span>cm</span>'); // Pastikan ada elemen dengan id="tinggiAirValue"
                $('#keteranganValue').html(response.keterangan); // Pastikan ada elemen dengan id="keteranganValue"


            },
            error: function() {
                console.log('Gagal mengambil data');
            }
        });
    }

    // Jalankan fungsi ini secara berkala jika Anda ingin pembaruan real-time, misal setiap 5 detik
    setInterval(fetchData, 2000);


    // DOWN PPM
    function ubahStatusRelay1(value) {
        if (value) {
            newValue = 0;
            textValue = "ON";
        } else {
            newValue = 1;
            textValue = "OFF";
        }
        // var currentValue = $('#statusrelay3').text();
        // var newValue = (currentValue === 'ON') ? 'OFF' : 'ON';
        $('#statusrelay3').text(textValue);

        // Ajax to change the value in the database
        $.ajax({
            url: 'http://127.0.0.1:8000/api/api_control/',
            method: 'PUT',
            // contentType: 'application/json',
            data: {
                relay1: newValue
            },
            success: function(response) {
                // Get the response from the server and do something if needed
                console.log('Update successful:', response);
            },
            error: function(xhr, status, error) {
                // Handle error if the update fails
                console.log('Error updating data:', error);
            }
        });
    }

    //UP PPM 
    function ubahStatusRelay(value) {
        if (value) {
            newValue = 0;
            textValue = "ON";
        } else {
            newValue = 1;
            textValue = "OFF";
        }
        // var currentValue = $('#statusrelay3').text();
        // var newValue = (currentValue === 'ON') ? 'OFF' : 'ON';
        $('#status').text(textValue);

        // Ajax to change the value in the database
        $.ajax({
            url: 'http://127.0.0.1:8000/api/api_control/',
            method: 'PUT',
            // contentType: 'application/json',
            data: {
                relay3: newValue,
                relay4: newValue
            },
            success: function(response) {
                // Get the response from the server and do something if needed
                console.log('Update successful:', response);
            },
            error: function(xhr, status, error) {
                // Handle error if the update fails
                console.log('Error updating data:', error);
            }
        });
    }
</script>

<script>
    function updateTime() {
        var now = new Date();
        var hour = now.getHours();
        var minute = now.getMinutes();
        var second = now.getSeconds();

        // Menambahkan angka 0 jika hanya satu digit
        hour = (hour < 10 ? "0" : "") + hour;
        minute = (minute < 10 ? "0" : "") + minute;
        second = (second < 10 ? "0" : "") + second;

        document.getElementById('hour').innerText = hour;
        document.getElementById('minute').innerText = minute;
        document.getElementById('second').innerText = second;
    }

    // Memanggil fungsi setiap detik
    setInterval(updateTime, 1000);
</script>

@endpush