const flashData = $('.flash-data').data('getFlashdata');

if (flashData){
    Swal({
        title: 'Data Pengaduan',
        text: 'berhasil' + flashData,
        type: 'success'
    });
}