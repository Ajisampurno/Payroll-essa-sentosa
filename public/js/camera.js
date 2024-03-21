
  const preview = document.getElementById('preview');
  const output = document.getElementById('output');
  const capture = document.getElementById('capture');
  const result = document.getElementById('result');
  const btnsimpan = document.getElementById('btnsimpan');
  const btnsimpanout = document.getElementById('btnsimpanout');

  result.style.display = "none";
  ulang.style.display="none";
  btnsimpanout.style.display="none";
  btnsimpan.style.display="none";
  
  // mengambil API dari get user media
  navigator.mediaDevices.getUserMedia({
      audio: false,
      video: {
          width: 400,
          height: 400
      }
  })
  .then(stream => {
      preview.srcObject = stream;
      preview.play();
  })
  .catch(error => {
      console.error(error);
  });
  // Fungsi tombol ambil gambar
  capture.addEventListener('click', () => {
      const context = output.getContext('2d');
      ulang.style.display="block";
      output.style.display="block";
      preview.style.display="none";
      btnsimpan.style.display="block";
      capture.style.display="none";
      output.width = 400;
      output.height = 400;
      context.drawImage(preview, 0, 0, output.width, output.height);
      result.src = output.toDataURL();
      var val = result.src;
      const value_gambar = document.getElementById('value_gambar').value = val;
  });
  //Fungsi tombol ulang
  ulang.addEventListener('click',()=>{
      ulang.style.display="none";
      preview.style.display="block";
      capture.style.display="block";
      output.style.display="none";
      btnsimpan.style.display="none";
      btnsimpanout.style.display="none";
  })