<div id="pageC">
  <table class="inner">
  <tr style="vertical-align:top">
    <td>
      <div id="contentpane">
        <form id="validasi" action="<?php echo $form_action ?>" method="POST" enctype="multipart/form-data">
          <div class="ui-layout-center" id="maincontent" style="padding: 5px;">
            <h3>Pengaturan Sinergitas Program</h3>
            <table class="form">
              <tr>
                <th>Baris</th>
                <th>Kolom</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Tautan</th>
              </tr>
              <?php foreach($setting as $key=>$program): ?>
                <tr>
                  <td>
                    <select name="setting[<?php echo $key?>][baris]" class="required">
                      <option value="">Pilih Baris</option>
                      <?php for($i=1; $i<6; $i++){?>
                        <option value="<?php echo $i;?>" <?php if($program['baris']==$i){?>selected<?php }?>><?php echo $i;?></option>
                      <?php }?>
                    </select>
                  </td>
                  <td>
                    <select name="setting[<?php echo $key?>][kolom]" class="required">
                      <option value="">Pilih Baris</option>
                      <?php for($i=1; $i<4; $i++){?>
                        <option value="<?php echo $i;?>" <?php if($program['kolom']==$i){?>selected<?php }?>><?php echo $i;?></option>
                      <?php }?>
                    </select>
                  </td>
                  <td><input name="setting[<?php echo $key?>][judul]" type="text" class="inputbox" size="40" value="<?php echo $program['judul']?>"/></td>
                  <td><input name="setting[<?php echo $key?>][gambar]" type="text" class="inputbox" size="40" value="<?php echo $program['gambar']?>"/></td>
                  <td><input name="setting[<?php echo $key?>][tautan]" type="text" class="inputbox" size="50" value="<?php echo $program['tautan']?>"/></td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>

          <div class="ui-layout-south panel bottom">

            <div class="left">
              <a href="<?php echo site_url()?>web_widget" class="uibutton icon prev">Kembali</a>
            </div>
            <div class="right">
              <div class="uibutton-group">
                <button class="uibutton" type="reset"><span class="fa fa-refresh"></span> Bersihkan</button>
                <button class="uibutton confirm" type="submit" ><span class="fa fa-save"></span> Simpan</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </td>
  </tr>
  </table>
</div>
