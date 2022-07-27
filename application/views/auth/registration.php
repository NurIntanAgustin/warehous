<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Daftar Akun</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" placeholder="No Telepon">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulang Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark btn-user btn-block">
                                Daftar
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <p class="small">Sudah memiliki akun? <a href="<?= base_url(); ?>auth">Masuk</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>