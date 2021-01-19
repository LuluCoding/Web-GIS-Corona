$(document).ready(function(){

                 // call fungsi tampil data
                 allData();
                 dataID();
                 dataProv();

                //  refresh otomatis dengan setinterval
                 setInterval(function() {
                    allData();
                    dataID();
                    dataProv();
                 }, 2000);
  
   function allData() {
       $.ajax({
         url : 'https://coronavirus-19-api.herokuapp.com/all',
         success : function(data) {

            try{
             var json = data;
             var positif = data.cases;
             var sembuh = data.recovered;
             var meninggal = data.deaths;

             $('#data-kasus').html(positif);
             $('#data-kasus-1').html(sembuh);
             $('#data-kasus-2').html(meninggal);

            }catch{
                alert('error');
            }
         }
       });
   }

   function dataID() {
    $.ajax({
        url : 'https://coronavirus-19-api.herokuapp.com/countries',
        success : function(data) {

          try {
              var json = data;
              var html = [];

              if (json.length > 0) {
                  var i;
                  for (i = 0; i < json.length; i++) {
                      var dataNegara = json[i];
                      var namaNegara = dataNegara.country;

                      if (namaNegara === 'Indonesia') {
                          var positif = dataNegara.cases;
                          var sembuh = dataNegara.recovered;
                          var meninggal = dataNegara.deaths;

                          $('#data-id').html (
                            'Positif: '+positif+' orang <br> Sembuh: '+sembuh+' orang <br> Meninggal: '+meninggal+' orang'
                          )
                      
                  }
              }
          }

           }catch{
               alert('error');
           }
        }
    });
}
        function dataProv() {
            $.ajax({
                url : 'curl.php',
                type : 'GET',
                success : function(data) {
                  try {   
                  $('#table-prov').html(data);
                   }catch{
                       alert('error');
                   }
                }
        
      });
   }

});