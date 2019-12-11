<div class="mt-5">
    <form method="post" id="f-penawaran" action="#">
        <h2>Data Umum</h2>
        <hr />
        <div class="row">
            <div class="col-md-6">
                <div class="form-group ">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="nama" placeholder="Nama anda">
                </div>
                <div class="form-group ">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email anda">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <label for="hp">No HP</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No. Handphone anda">
                </div>
                <div class="form-group ">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat anda">
                </div>
            </div>
        </div>
        <h2 class="mt-3">Data Acara</h2>
        <hr />
        <div class="row">
            <div class="col-md-10">

                <div class="form-group row">
                    <div class="col-md-4">
                        <label>Akad Nikah/Pemberkatan</label>
                    </div>
                    <div class="col-md-7">
                        <input class="" type="radio" name="akad" id="akad" value="akad">
                        <label class="form-check-label" for="akad">
                            Akad Nikah
                        </label>
                        <input class="ml-3" type="radio" name="akad" id="pemberkatan" value="pemberkatan">
                        <label class="form-check-label" for="pemberkatan">
                            Pemberkatan
                        </label>
                        <input class="ml-3" type="radio" name="akad" id="no" value="no">
                        <label class="form-check-label" for="no">
                            Tidak Ada
                        </label>
                        <div id="opsi_akad" class="d-none mt-3">
                            <hr />
                            <input class="" type="radio" name="o_akad" id="p_akad" value="p">
                            <label class="form-check-label" for="p_akad">Pagi</label>
                            <input class="ml-3" type="radio" name="o_akad" id="s_akad" value="s">
                            <label class="form-check-label" for="s_akad">Sore</label>
                            <input type="text" class="form-control mt-3" id="lokasi_akad" placeholder="Lokasi">
                        </div>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-md-4">
                        <label>Resepsi</label>
                    </div>
                    <div class="col-md-7">
                        <input class="" type="radio" name="o_resepsi" id="p_resepsi" value="s">
                        <label class="form-check-label" for="p_resepsi">Siang</label>
                        <input class="ml-3" type="radio" name="o_resepsi" id="s_resepsi" value="m">
                        <label class="form-check-label" for="s_resepsi">Malam</label>
                        <input class="ml-3" type="radio" name="o_resepsi" id="bh_resepsi" value="bh">
                        <label class="form-check-label" for="bh_resepsi">Beda hari dengan akad</label>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-md-4">
                        <label>Lokasi Resepsi</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="lokasi_resepsi" placeholder="Lokasi">
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-md-4">
                        <label>Jumlah Tamu Resepsi</label>
                    </div>
                    <div class="col-md-7">
                        <input class="" type="radio" name="jt_resepsi" id="jt_resepsi_1" value="< 1000">
                        <label class="form-check-label" for="jt_resepsi_1">
                            < 1000</label> <input class="ml-3" type="radio" name="jt_resepsi" id="jt_resepsi_2" value="1000 - 2000">
                                <label class="form-check-label" for="jt_resepsi_2"> 1000 - 2000</label>
                                <input class="ml-3" type="radio" name="jt_resepsi" id="jt_resepsi_3" value="2000 - 3000">
                                <label class="form-check-label" for="jt_resepsi_3"> 2000 - 3000</label>
                                <input class="ml-3" type="radio" name="jt_resepsi" id="jt_resepsi_4" value="3000 - 4000">
                                <label class="form-check-label" for="jt_resepsi_4"> 3000 - 4000</label>
                                <input class="ml-3" type="radio" name="jt_resepsi" id="jt_resepsi_5" value="> 4000">
                                <label class="form-check-label" for="jt_resepsi_5">> 4000</label>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-md-4">
                        <label>Penambahan Lamaran</label>
                    </div>
                    <div class="col-md-7">
                        <input class="" type="radio" name="lamaran" id="l_yes" value="y">
                        <label class="form-check-label" for="l_yes">
                            Ya
                        </label>
                        <input class="ml-3" type="radio" name="lamaran" id="l_no" value="n">
                        <label class="form-check-label" for="l_no">
                            Tidak
                        </label>
                        <br />
                        <div id="opsi_lamaran" class="d-none mt-3">
                            <hr />
                            <input type="text" class="form-control mt-3" id="lokasi_lamaran" placeholder="Lokasi">
                        </div>
                    </div>
                </div>

                <div class="form-group row ">
                    <div class="col-md-4">
                        <label>Penambahan H-1 <br /><i>(Pengajian, siraman dll)</i></label>
                    </div>
                    <div class="col-md-7">
                        <input class="" type="radio" name="penambahan" id="p_yes" value="y">
                        <label class="form-check-label" for="p_yes">
                            Ya
                        </label>
                        <input class="ml-3" type="radio" name="penambahan" id="p_no" value="n">
                        <label class="form-check-label" for="p_no">
                            Tidak
                        </label>
                        <div id="opsi_penambahan" class="d-none mt-3">
                            <hr />
                            <input type="text" class="form-control mt-3" id="lokasi_penambahan" placeholder="Lokasi">
                        </div>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-md-4">
                        <label>Penambahan Service Planner</label>
                    </div>
                    <div class="col-md-7">
                        <input class="" type="radio" name="penambahan_sp" id="sp_yes" value="y">
                        <label class="form-check-label" for="sp_yes">
                            Ya
                        </label>
                        <input class="ml-3" type="radio" name="penambahan_sp" id="sp_no" value="n">
                        <label class="form-check-label" for="sp_no">
                            Tidak
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>