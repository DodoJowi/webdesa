<style media="screen">
.table-bordered{
  border-right: 3px solid black:
}

#profil p{
  text-indent: 40px;
  font-weight: 350;
}
</style>
<section id="get-started" class="padd-section text-center wow fadeInUp">
  <div class="containers">
    <div class="section-title text-center">
      <h2>Profil Batang Kuis</h2>
      <!-- <p class="separator" style="">Berikut data golongan darah warga Desa Pagerngumbuk.</p> -->
    </div>
    <div class="row">
      <div class="col-md-12 mt-5 text-left" id="profil">
        <p class="lead text-center" style="text-transform:capitalize;">“MEMBANGUN MASYARAKAT CERDAS, BERKUALITAS DAN SEJAHTERA SERTA PENINGKATAN PELAYANAN MENUJU KEMAKMURAN MASYARAKAT DESA YANG ADIL DAN MERATA”</p>
        <h3>Sejarah</h3>
        <p class="text-justify">Selepas meninggalkan kerajaan Kediri, Dewi Kilisuci memutuskan untuk dating kesebuah alas. Pada mulanya alas tersebut belum dihuni oleh manusia. Dewi Kilisuci membabat alas dengan segala kesaktiaan yang dimiliki. Berkat kesaktian Dewi Kilisuci, terbentuklah sebuah desa yang dinamakan Pagerngumbuk. Dalam perkembangannya, Dewi KIlisuci membaginya menjadi tiga bagian. Atas kiprah Dewi Kilisuci, desa tersebut ditempati manusia sehingga ramai, bahero ada kegiatan manusia dan seterusnya sampai sekarang. Suasana desa tersebut semakin ramai karena banyak orang orang berdatangan dan memulai kehidupan yang baru.</p>
        <h3>Letak Geografis</h3>
       
        <p class="text-justify">Kecamatan Batang Kuis yang memiliki wilayah dengan luas wilayah yaitu 40, 34 km2. ini, terletak pada ketinggian 4 - 30 m di atas permukaan laut dan beriklim tropis. Adapun batas wilayah kecamatan Batang Kuis adalah sebagai berikut. Sebelah Utara berbatasan dengan Kecamatan Pantai Labu, ï‚· Sebelah Selatan berbatasan dengan Kecamatan Tanjung Morawa, ï‚· Sebelah Timur berbatasan dengan Kecamatan Beringin dan Pantai Labu, ï‚· Sebelah Barat berbatasan dengan Kecamatan Percut Sei Tuan.</p>
        <br>
        <h3>Adat Kebudayaan </h3>
        <p class="text-justify">Kecamatan Batang Kuis terletak di dataran rendah, yang dominan menggunakan adat-istiadat Melayu. Kecamatan Batang Kuis terdiri dari berbagai suku bangsa antara lain : Melayu, Karo, Simalungun, Toba, Mandailing, Jawa, Melayu dan lain-lain yang pada umumnya memeluk agama Islam, Kristen, Katolik, Hindu dan Budha.</p>
        
        <h3>Jumlah Penduduk</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Jumlah Laki-laki</th>
              <th scope="col">Jumlah Perempuan</th>
              <th scope="col">Jumlah Penduduk</th>
              <th scope="col">Jumlah KK</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>3281</td>
              <td>3472</td>
              <td>6753</td>
              <td>2042</td>
            </tr>
          </tbody>
        </table>
        
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
new Chart(document.getElementById("bar-chart"), {
  type: 'bar',
  data: {
    labels: ["A", "B", "AB", "O","Tidak Tahu"],
    // labels: ["A", "B", "AB", "O", "A-", "B-", "AB-", "O-", "A+", "B+", "AB+", "O+","Belum Diketahui"],
    datasets: [
      {
        // label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","red","teal","skyblue","lime","blue","yellow","green","maroon"],
        data: [2478,5267,734,784,433]
        // data: [2478,5267,734,784,433,290,120,175,734,784,433,290,111]
      }
    ]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'Total Penduduk : 6651'
    }
  }
});
</script>









<!-- <?php //echo form_open_multipart(base_url("surat/isi"),array('class' => 'form-horizontal')); ?>
<textarea name="isiartikel" id="ckeditor" class="ckeditor" rows="8" cols="80"></textarea>
<input type="submit" name="gas" value="Gas">
<?php //echo form_close(); ?>
<script type="text/javascript">
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline = editable;
</script> -->
