<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invite</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container justify-content-center">
      <h3 class="text-center">Invite orang orang</h3>
      <div class="form-group">
        <label for="nama">Nama yang pengen di invite <span class="text-danger">Jangan gunakan spesial karakter (&,*,%,#, dll)</span></label>
        <input
          type="text"
          name="nama"
          class="form-control"
          id="nama"
          placeholder="Masukin namanya misal: rama dan tiba" />
      </div>
      <button type="button" class="btn btn-xs btn-primary" id="generate">
        Generate
      </button>
      <button type="button" class="btn btn-xs btn-secondary" id="copy">
        Copy link
      </button>
      <textarea
        class="form-control"
        id="textcopied"
        rows="10"
        style="display: none"></textarea>
      <div id="isi" class="mt-5"></div>
    </div>
    <script>
      $("#generate").on("click", function () {
        let nama = $("#nama").val();
        let link = nama.replaceAll(" ", "%20");

        if (nama) {
          $("#isi").empty();
          $("#textcopied").empty();
          let isi = $("#isi").append(`
          <div class="card">
            <div class="card-header card-primary">Silahkan copy text di bawah atau pencet tombol copy</div>
                <div class="card-body">
                <p>
                    Bismillahirahmanirrahim.
                    Assalamu'alaikum Wr. Wb <br>

                    Yth. ${nama} <br> <br>

                    Tanpa mengurangi rasa hormat, perkenankan kami untuk mengundang Bapak/Ibu/Saudara/i, teman, kerabat dan sahabat, untuk menghadiri acara pernikahan kami :
                    <br> <br>
                    Reza  & Hilma
                    <br> <br>
                    Untuk info lebih lengkap dari acara pernikahan kami, bisa kunjungi link yang tertera di bawah ini:
                    <br> <br>
                    https://wedding-reza-hilma.vercel.app?to=${link}
                    <br> <br>
                    Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa serta restu untuk kami yang berbahagia.
                    <br> <br>
                    Mohon maaf apabila ada kesalahan dalam penulisan nama & gelar Bapak/Ibu/Saudara/i pada undangan ini. 
                    Terima kasih banyak atas perhatiannya.
                    <br> <br>
                    Wassalamu'alaikum Wr. Wb.
                </p>
                </div>
            </div>`);
          let textCopied = $("#textcopied").val(
            `Bismillahirahmanirrahim. \nAssalamu'alaikum Wr. Wb\nYth. ${nama}\n \nTanpa mengurangi rasa hormat, perkenankan kami untuk mengundang Bapak/Ibu/Saudara/i, teman, kerabat dan sahabat, untuk menghadiri acara pernikahan kami :\n \nReza  & Hilma\n \nUntuk info lebih lengkap dari acara pernikahan kami, bisa kunjungi link yang tertera di bawah ini:\n \n \nhttps://wedding-reza-hilma.vercel.app?to=${link}\n \nMerupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa serta restu untuk kami yang berbahagia.\n \nMohon maaf apabila ada kesalahan dalam penulisan nama & gelar Bapak/Ibu/Saudara/i pada undangan ini. Terima kasih banyak atas perhatiannya.\n \nWassalamu'alaikum Wr. Wb.`
          );
          $("#copy").on("click", function () {
            var copyText = document.getElementById("textcopied");

            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            navigator.clipboard.writeText(copyText.value);

            alert("Teks udah disalin! ");
          });
        }
      });
    </script>
  </body>
</html>
