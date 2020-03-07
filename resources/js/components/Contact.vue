<template>
  <div class="row">
    <div class="sm-8">
          <form>
            <h2>Hubungi Kami</h2>
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" rows="3" placeholder="Masukkan Alamat"></textarea>
            </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
    </div>
  </div>
</template>
