@extends('layouts.main')

@section('sidebar')
@include('layouts.sidebar')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kuisioner Penilaian Dosen</h5>

                        <form method="POST" action="">


                            <div class="card mb-3">
                                <div class="card-header">Ketika anda mendapat tawaran pekerjaan yang tidak sesuai dengan orientasi UNIDA Gontor (misalnya: pramugari/a, bank/asuransi konvensional, model, debt colector, operator game online)</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check">
                                        <label class="form-check-label" for="option-">
                                            Saya akan mengambilnya, toh tidak ada orang UNIDA yang memantau dan mempermasalahkan itu.
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label" for="option-">
                                            Saya akan mengambilnya, toh tidak ada orang UNIDA yang memantau dan mempermasalahkan itu.
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label" for="option-">
                                            Saya akan mengambilnya, toh tidak ada orang UNIDA yang memantau dan mempermasalahkan itu.
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label" for="option-">
                                            Saya akan menghindarinya, lebih baik keluarga saya mati kelaparan daripada harus bekerja seperti itu.
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Apabila diundang untuk mengisi acara perayaan hari besar agama lain, apa yang anda lakukan?</div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Saya menerima dan saya siap, demi terciptanya pluralisme agama yang baik dan kondusif di Indonesia.
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Saya tetap mengisi dengan semangat. Karena siapa tahu Islam dapat didakwahkan melalui cara itu.
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Saya menerima tawaran tersebut. Namun saya akan menyampaikan permohonan maaf dan menyatakan berhalangan hadir.
                                        </label>
                                        <input class="form-check-input " type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Saya menolak dengan keras.
                                        </label>
                                        <input class="form-check-input " type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>

                                </div>
                            </div>


                            <div class="card mb-3">
                                <div class="card-header">Fenomena LGBT saat ini mulai marak. Bahkan Asosiasi Psikolog Amerika menyatakan bahwa LGBT bukan penyakit jiwa atau mental. </div>
                                <div class="card-body mt-3">
                                    <input type="hidden" name="questions" value="">

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Seharusnya, kita perlu menerima dan setuju dengan keberadaan LGBT itu. Karena mereka juga sesama manusia yang memiliki hak untuk dihormati. Bahkan kita perlu protes jika ada orang yang mengkritiknya.
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            LGBT bisa diterima di Indonesia, bahkan juga di pesantren. Toh nanti mereka akan sembuh dengan sendirinya.
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Kita menolak untuk menjadi LGBT dan menjadikan orang pro LGBT. Tetapi kita tetap perlu membantu LGBT untuk bisa dinormalisasi, ini butuh kerjasama dari seluruh pihak.
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <div class="form-check mt-2">
                                        <label class="form-check-label" for="option-">
                                            Pelaku LGBT harus dibunuh tanpa terkecuali, karena itu ajaran agama.
                                        </label>
                                        <input class="form-check-input" type="radio" name="questions" id="option-1" value="">
                                    </div>

                                    <span style="margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong></strong>
                                    </span>
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection