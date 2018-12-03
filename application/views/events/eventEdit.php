<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content light-blue lighten-1 white-text">
        <span class="card-title"></span>
      </div>
      <div class="card-content">
        <form class="row" id="edit-user-form" method="post" action="">

            <div class="col s12">
              <div class="card-panel red">
                <span class="white-text">', '</p>'); ?></span>
              </div>
            </div>
          <?php endif; ?>
          <?php if($message = $this->session->flashdata('message')): ?>
            <div class="col s12">
              <div>">
                <span class="white-text"></span>
              </div>
            </div>
          <?php endif; ?>
          <div class="input-field col s12 m6">
              nama; ?>">
              <label for="nama" class="">Nama Event</label>
          </div>
          <div class="input-field col s12 m6">
              contact; ?>">
              <label for="contact" class="">Contact Person</label>
          </div>
          <div class="input-field col s12 m6">
              tanggal_mulai; ?>">
              <label for="tanggal_mulai" class="">Tanggal Mulai</label>
          </div>
          <div class="input-field col s12 m6">
              tanggal_berakhir; ?>">
              <label for="tanggal_berakhir" class="">Tanggal Berakhir</label>
          </div>
          <div class="input-field col s12 m12">
              keterangan; ?>">
              <label for="keterangan" class="">Keterangan</label>
          </div>
          <div class="input-field col s12 right-align">
              <button type="submit" name="submit">id; ?>" class="btn amber waves-effect waves-green">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
